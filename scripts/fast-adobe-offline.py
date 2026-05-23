#!/usr/bin/env python3
"""
Fast offline setup for Adobe clone:
  1) Rewrite www.adobe.com asset URLs in index.php + pages/** to local root paths
  2) Download missing upp/libs/marketingtech/homepage/federal assets in parallel
  3) Fix body{display:none} and ensure PHP headers
"""

from __future__ import annotations

import concurrent.futures
import html
import os
import re
import ssl
import subprocess
import sys
import urllib.error
import urllib.parse
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
PHP_HEADER = (
    "<?php\nrequire_once __DIR__ . '/base-url.php';\n"
    "cw_start_asset_url_rewrite();\n?>\n"
)
PAGES_HEADER = (
    "<?php\nrequire_once dirname(__DIR__, {depth}) . '/base-url.php';\n"
    "cw_start_asset_url_rewrite();\n?>\n"
)

ADOBE_ASSET_PREFIXES = (
    "upp/",
    "libs/",
    "marketingtech/",
    "content/",
    "homepage/",
    "federal/",
    "etc.clientlibs/",
    "akam/",
    "cc-shared/",
)
ASSET_EXTS = {
    ".css", ".js", ".mjs", ".json", ".svg", ".png", ".jpg", ".jpeg",
    ".gif", ".webp", ".avif", ".ico", ".woff", ".woff2", ".ttf", ".webmanifest",
    ".mp4", ".webm", ".pdf", ".map",
}

SSL_CTX = ssl.create_default_context()
HEADERS = {
    "User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36",
    "Accept": "*/*",
    "Referer": "https://www.adobe.com/",
}

# href/src/action/preload href in link
ADOBE_URL = re.compile(
    r"https?://(?:www\.)?adobe\.com/([^\s\"'<>]+)",
    re.I,
)
BODY_HIDE = re.compile(r"body\s*\{\s*display:\s*none\s*;\s*\}", re.I)
EXT_TRAIL_SLASH = re.compile(
    r"(\.(?:css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest|xml|pdf|map|mp4|webm))/",
    re.I,
)
PHP_STRIP = re.compile(r"^<\?php.*?\?>\s*", re.S)
GNAV_SOURCE_META = re.compile(r'<meta\s+name=["\']gnav-source["\'][^>]*>\s*', re.I)
BREADCRUMB_META = re.compile(
    r'<meta\s+name=["\']breadcrumbs(?:-base|-from-url)?["\'][^>]*>\s*',
    re.I,
)


def is_asset_path(path: str) -> bool:
    p = path.lower().split("?")[0].split("#")[0]
    ext = os.path.splitext(p)[1]
    if ext == ".html" and not p.startswith(("cc-shared/fragments", "homepage/")):
        return False
    if ext in ASSET_EXTS:
        return True
    if any(p.startswith(pref) for pref in ADOBE_ASSET_PREFIXES):
        return True
    return False


def normalize_local_path(path: str) -> str:
    path = path.split("?")[0].split("#")[0].lstrip("/")
    if path.endswith("/"):
        path += "index"
    return path


def local_target(path: str) -> Path:
    return ROOT / normalize_local_path(path)


def fetch_url(url: str) -> bytes | None:
    req = urllib.request.Request(url, headers=HEADERS)
    try:
        with urllib.request.urlopen(req, timeout=45, context=SSL_CTX) as resp:
            data = resp.read()
            ct = (resp.headers.get("Content-Type") or "").lower()
            if "text/html" in ct and len(data) > 500 and b"<html" in data[:800].lower():
                return None
            return data
    except urllib.error.HTTPError as e:
        if e.code == 404:
            return None
    except Exception:
        return None
    return None


def download_asset(path: str) -> tuple[str, bool, str]:
    dest = local_target(path)
    if dest.exists() and dest.stat().st_size > 80:
        return path, True, "exists"

    candidates = [f"https://www.adobe.com/{path.lstrip('/')}"]
    if path.startswith("upp/marketingtech/"):
        candidates.append(f"https://www.adobe.com/{path.replace('upp/', '', 1)}")
    if path.startswith("upp/"):
        candidates.append(f"https://www.adobe.com/{path.replace('upp/', '', 1)}")

    data = None
    for url in candidates:
        data = fetch_url(url)
        if data is not None:
            break

    if data is None or len(data) < 20:
        return path, False, "fail"

    dest.parent.mkdir(parents=True, exist_ok=True)
    dest.write_bytes(data)
    return path, True, "ok"


def download_learn_static() -> None:
    """Pull Gatsby learn bundle paths referenced in learn/express pages."""
    learn_pages = list((ROOT / "pages" / "learn").rglob("index.php")) + list(
        (ROOT / "pages" / "express" / "learn").rglob("index.php")
    )
    paths: set[str] = set()
    pat = re.compile(r"/learn/static/([^\"'\s<>]+)")
    for page in learn_pages:
        for m in pat.finditer(page.read_text(encoding="utf-8", errors="replace")):
            paths.add(m.group(1).split("?")[0])

    if not paths:
        return

    print(f"Downloading {len(paths)} learn/static files…")
    ok = 0
    for rel in sorted(paths):
        dest = ROOT / "learn" / "static" / rel
        if dest.exists() and dest.stat().st_size > 100:
            ok += 1
            continue
        url = f"https://www.adobe.com/learn/static/{rel}"
        data = fetch_url(url)
        if data is None:
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        ok += 1
    print(f"learn/static: {ok}/{len(paths)} ready")


def php_depth(path: Path) -> int:
    rel = path.relative_to(ROOT)
    parts = rel.parts
    if parts == ("index.php",):
        return 0
    # pages/a/b/index.php -> depth 3 from pages to root = len(parts)-1
    return len(parts) - 1


def ensure_php_header(path: Path, content: str) -> str:
    if path.name != "index.php":
        return content
    if content.lstrip().startswith("<?php"):
        return content
    depth = php_depth(path)
    if depth == 0:
        header = PHP_HEADER
    else:
        header = (
            "<?php\n"
            f"require_once dirname(__DIR__, {depth}) . '/base-url.php';\n"
            "cw_start_asset_url_rewrite();\n?>\n"
        )
    return header + content


def rewrite_adobe_urls(text: str) -> tuple[str, int]:
    n = 0

    def repl(m: re.Match[str]) -> str:
        nonlocal n
        path = m.group(1)
        if not is_asset_path(path):
            return m.group(0)
        local = normalize_local_path(path)
        q = ""
        if "?" in path:
            q = "?" + path.split("?", 1)[1]
        n += 1
        return local + q

    text = ADOBE_URL.sub(repl, text)
    # meta gnav-source / personalization still on adobe.com
    text = re.sub(
        r'(content\s*=\s*["\'])https?://(?:www\.)?adobe\.com/((?:upp|libs|cc-shared|homepage|federal|content|marketingtech|creativecloud)/[^"\']+)(["\'])',
        lambda m: f'{m.group(1)}{normalize_local_path(m.group(2))}{m.group(3)}',
        text,
        flags=re.I,
    )
    text = EXT_TRAIL_SLASH.sub(r"\1", text)
    text = BODY_HIDE.sub("body{display:block!important;}", text, count=1)
    return text, n


def collect_php_files() -> list[Path]:
    files = [ROOT / "index.php"]
    pages = ROOT / "pages"
    if pages.is_dir():
        for p in pages.rglob("index.php"):
            if "samsung-clon" in p.parts:
                continue
            files.append(p)
    return files


def main() -> int:
    workers = int(os.environ.get("CW_FETCH_WORKERS", "16"))
    files = collect_php_files()
    print(f"Processing {len(files)} PHP files…")

    all_paths: set[str] = set()
    changed_files = 0

    for path in files:
        raw = path.read_text(encoding="utf-8", errors="replace")
        body = PHP_STRIP.sub("", raw, count=1)

        for m in ADOBE_URL.finditer(body):
            p = m.group(1)
            if is_asset_path(p):
                all_paths.add(p.split("?")[0].lstrip("/"))
        # Also paths already localized (upp/, libs/, …) referenced in href/src
        for m in re.finditer(
            r'(?:href|src|action|content)\s*=\s*["\']((?:upp|libs|marketingtech|homepage|federal|content|etc\.clientlibs|cc-shared|creativecloud)/[^"\']+)["\']',
            body,
            re.I,
        ):
            all_paths.add(normalize_local_path(m.group(1)))

        if path != ROOT / "index.php":
            body = GNAV_SOURCE_META.sub("", body)
            body = BREADCRUMB_META.sub("", body)

        new_body, n = rewrite_adobe_urls(body)
        new_body = ensure_php_header(path, new_body)
        if new_body != raw:
            path.write_text(new_body, encoding="utf-8")
            changed_files += 1

    print(f"Rewrote URLs in {changed_files} files")
    print(f"Downloading {len(all_paths)} unique assets ({workers} workers)…")

    ok = fail = 0
    with concurrent.futures.ThreadPoolExecutor(max_workers=workers) as ex:
        futs = {ex.submit(download_asset, p): p for p in sorted(all_paths)}
        for i, fut in enumerate(concurrent.futures.as_completed(futs), 1):
            path, success, status = fut.result()
            if success:
                ok += 1
            else:
                fail += 1
            if i % 25 == 0 or i == len(futs):
                print(f"  [{i}/{len(futs)}] ok={ok} fail={fail}")

    milo = ROOT / "scripts" / "install-milo-assets.sh"
    if milo.is_file():
        print("Running install-milo-assets.sh…")
        subprocess.run(["bash", str(milo)], cwd=ROOT, check=False)

    download_learn_static()

    libs_helpers = ROOT / "libs" / "martech" / "helpers.js"
    upp_helpers = ROOT / "upp" / "scripts" / "helpers.js"
    if libs_helpers.is_file() and (not upp_helpers.exists() or upp_helpers.stat().st_size < 1000):
        upp_helpers.parent.mkdir(parents=True, exist_ok=True)
        upp_helpers.write_bytes(libs_helpers.read_bytes())
        print("Synced upp/scripts/helpers.js from libs/martech/helpers.js")

    print(f"\nDone: {ok} assets ready, {fail} failed")
    return 1 if fail > len(all_paths) * 0.5 else 0


if __name__ == "__main__":
    sys.exit(main())
