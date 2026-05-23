#!/usr/bin/env python3
"""Clone www.adobe.com pages linked from index.html + their assets (samsung-clon layout)."""

import html as htmlmod
import hashlib
import os
import re
import subprocess
import sys
import urllib.parse
from concurrent.futures import ThreadPoolExecutor, as_completed
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
INDEX = ROOT / "index.php"


def index_html_source() -> str:
    raw = INDEX.read_text(encoding="utf-8", errors="replace")
    return re.sub(r"^<\?php.*?\?>\s*", "", raw, count=1, flags=re.S)
BASE = "https://www.adobe.com"
UA = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
REF = "https://www.adobe.com/"

ASSET_EXT = {
    ".css", ".js", ".mjs", ".png", ".jpg", ".jpeg", ".gif", ".webp", ".avif", ".svg", ".ico",
    ".woff", ".woff2", ".ttf", ".otf", ".eot", ".json", ".webmanifest",
}
ROOT_PREFIXES = ("/upp/", "/libs/", "/marketingtech/", "/content/", "/homepage/", "/federal/", "/etc.clientlibs/")
PAGE_WORKERS = max(1, int(os.environ.get("PAGE_WORKERS", "3")))
ASSET_WORKERS = max(1, int(os.environ.get("ASSET_WORKERS", "12")))


def sha1_short(s: str) -> str:
    return hashlib.sha1(s.encode()).hexdigest()[:10]


def curl_fetch(url: str, timeout: int = 120):
    """Download via curl --http1.1 (urllib often blocked by Adobe)."""
    cmd = [
        "curl", "--http1.1", "-fsSL",
        "--connect-timeout", "25",
        "--max-time", str(timeout),
        "-A", UA,
        "-e", REF,
        "-H", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "-H", "Accept-Language: en-US,en;q=0.9",
        url,
    ]
    try:
        proc = subprocess.run(cmd, capture_output=True, timeout=timeout + 15)
    except subprocess.TimeoutExpired:
        return None
    if proc.returncode != 0 or len(proc.stdout) < 200:
        return None
    return proc.stdout


def is_page_url(url: str) -> bool:
    try:
        u = urllib.parse.urlparse(url)
        if u.netloc != "www.adobe.com":
            return False
        p = u.path.lower()
        if not p or p == "/":
            return True
        if any(p.endswith(x) for x in ASSET_EXT):
            return False
        if "/favicons/" in p:
            return False
        if "/fragments/" in p and not p.endswith(".html"):
            return False
        if p.startswith("/federal/assets/data/"):
            return False
        if p.startswith("/uk/"):
            return False
        return True
    except Exception:
        return False


def collect_page_urls():
    text = index_html_source()
    by_path = {}
    for m in re.finditer(r'href=["\']([^"\']+)["\']', text, re.I):
        h = htmlmod.unescape(m.group(1)).strip()
        if h.startswith(("assets/", "mailto:", "tel:", "javascript:", "#")):
            continue
        if h.startswith("//"):
            h = "https:" + h
        elif h.startswith("/"):
            h = BASE + h
        elif not h.startswith("http"):
            continue
        h = h.split("#")[0]
        if not is_page_url(h):
            continue
        path_key = urllib.parse.urlparse(h).path.rstrip("/") or "/"
        if path_key not in by_path:
            by_path[path_key] = h
    return sorted(by_path.values())


def page_to_local_path(url: str) -> Path:
    u = urllib.parse.urlparse(url)
    p = u.path
    if p.endswith(".html"):
        p = p[:-5]
    if p.endswith("/"):
        p = p[:-1]
    if not p or p == "/":
        return ROOT / "index.php"
    return ROOT / "pages" / p.strip("/") / "index.php"


def asset_local_path(url: str, content_type: str = "") -> Path:
    u = urllib.parse.urlparse(url)
    path = u.path
    try:
        path = urllib.parse.unquote(path)
    except Exception:
        pass

    if u.hostname == "www.adobe.com" and any(path.startswith(p) for p in ROOT_PREFIXES):
        if path.endswith("/"):
            path += "index"
        return ROOT / path.lstrip("/")

    host = u.hostname or "unknown"
    if not path or path == "/":
        path = "/index"
    if path.endswith("/"):
        path += "index"
    base = Path(path).name or "asset"
    ext = Path(path).suffix
    ct = (content_type or "").lower()
    if not ext:
        if "javascript" in ct:
            ext = ".js"
        elif "css" in ct:
            ext = ".css"
        elif "json" in ct:
            ext = ".json"
        elif "image" in ct:
            ext = ".png"
    stem = base[: -len(ext)] if ext and base.endswith(ext) else base
    suffix = f"-{sha1_short(url)}" if (u.query or u.fragment) else ""
    parent = Path(path).parent
    dir_part = "" if str(parent) in (".", "/") else str(parent).lstrip("/")
    rel = Path("assets/remote") / host / dir_part if dir_part else Path("assets/remote") / host
    return ROOT / rel / f"{stem}{suffix}{ext}"


def download_asset(url: str):
    u = urllib.parse.urlparse(url)
    allowed = (
        "www.adobe.com", "prod.adobeccstatic.com", "use.typekit.net",
        "client.messaging.adobe.com", "commerce.adobe.com",
    )
    if u.hostname not in allowed and (not u.hostname or "adobe" not in u.hostname):
        return url, None

    candidates = [url]
    for old, new in [
        ("/upp/marketingtech/", "/marketingtech/"),
        ("/upp/blocks/", "/blocks/"),
        ("/upp/scripts/", "/scripts/"),
        ("/upp/mep/", "/mep/"),
        ("/upp/styles/", "/styles/"),
        ("/upp/libs/", "/libs/"),
    ]:
        if old in url:
            candidates.append(url.replace(old, new, 1))

    dest = asset_local_path(url)
    if dest.exists() and dest.stat().st_size > 80:
        return url, str(dest.relative_to(ROOT)).replace(os.sep, "/")

    for src in candidates:
        data = curl_fetch(src, timeout=90)
        if not data:
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        return url, str(dest.relative_to(ROOT)).replace(os.sep, "/")
    return url, None


def extract_assets_from_html(page_html: str, page_url: str):
    found = set()
    patterns = [
        r'(?:src|href)=["\']([^"\']+)["\']',
        r'url\(\s*["\']?([^"\')\s]+)',
    ]
    for pat in patterns:
        for m in re.finditer(pat, page_html, re.I):
            raw = htmlmod.unescape(m.group(1)).strip()
            if not raw or raw.startswith(("data:", "#", "mailto:", "tel:", "javascript:")):
                continue
            if raw.startswith("//"):
                raw = "https:" + raw
            elif raw.startswith("/"):
                raw = BASE + raw
            try:
                abs_u = urllib.parse.urljoin(page_url, raw).split("#")[0]
                pu = urllib.parse.urlparse(abs_u)
                if pu.scheme not in ("http", "https"):
                    continue
                ext = Path(pu.path).suffix.lower()
                if ext in ASSET_EXT or any(pu.path.startswith(p) for p in ROOT_PREFIXES):
                    found.add(abs_u)
            except Exception:
                pass
    return found


def rewrite_html(content: str, page_url: str, asset_map: dict, local_base: str) -> str:
    local_base = local_base.rstrip("/")

    def repl_attr(m):
        attr, quote, val = m.group(1), m.group(2), m.group(3)
        if val.startswith(("data:", "#", "mailto:", "tel:", "javascript:")):
            return m.group(0)
        try:
            abs_u = urllib.parse.urljoin(page_url, val).split("#")[0]
        except Exception:
            return m.group(0)
        if abs_u in asset_map:
            return f'{attr}={quote}{asset_map[abs_u]}{quote}'
        pu = urllib.parse.urlparse(abs_u)
        if pu.hostname == "www.adobe.com" and is_page_url(abs_u):
            p = pu.path
            if p.endswith(".html"):
                p = p[:-5]
            if not p.endswith("/") and p != "/":
                p += "/"
            route = p if p != "/" else "/"
            q = f"?{pu.query}" if pu.query else ""
            return f'{attr}={quote}{local_base}{route}{q}{quote}'
        return m.group(0)

    out = re.sub(r'(src|href|action)=(["\'])([^"\']*)\2', repl_attr, content, flags=re.I)

    for url, rel in sorted(asset_map.items(), key=lambda x: -len(x[0])):
        out = out.replace(url, rel)
        out = out.replace(url.replace("&", "&amp;"), rel)

    out = re.sub(
        r'https?://www\.adobe\.com/([^"\'>\s?]+)\.html',
        lambda m: f"{local_base}/{m.group(1)}/",
        out,
        flags=re.I,
    )
    for prefix in ("assets/www.adobe.com/", "https://www.adobe.com/"):
        out = out.replace(prefix, "")
    return out


def php_header_for(path: Path) -> str:
    rel_dir = path.parent.relative_to(ROOT)
    depth = 0 if str(rel_dir) == "." else len(rel_dir.parts)
    if depth == 0:
        return "<?php\nrequire_once __DIR__ . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"
    return f"<?php\nrequire_once dirname(__DIR__, {depth}) . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"


def is_stub_page(path: Path) -> bool:
    if not path.is_file():
        return False
    head = path.read_text(encoding="utf-8", errors="replace")[:4096]
    return "cw_load_home_template" in head


def is_real_mirror(path: Path) -> bool:
    return path.is_file() and path.stat().st_size > 8000 and not is_stub_page(path)


def process_page(url: str, local_base: str, force: bool = False):
    out_path = page_to_local_path(url)
    if not force and is_real_mirror(out_path):
        return url, True, f"skip (exists) {out_path.relative_to(ROOT)}"

    data = curl_fetch(url, timeout=120)
    if not data:
        return url, False, "fetch failed"
    try:
        text = data.decode("utf-8", errors="replace")
    except Exception:
        return url, False, "decode failed"
    if "<html" not in text.lower():
        return url, False, "not html"

    assets = extract_assets_from_html(text, url)
    asset_map = {}
    if assets:
        with ThreadPoolExecutor(max_workers=ASSET_WORKERS) as ex:
            futs = {ex.submit(download_asset, a): a for a in assets}
            for fut in as_completed(futs):
                u, rel = fut.result()
                if rel:
                    asset_map[u] = rel

    rewritten = rewrite_html(text, url, asset_map, local_base)
    out_path = page_to_local_path(url)
    out_path.parent.mkdir(parents=True, exist_ok=True)
    out_path.write_text(php_header_for(out_path) + rewritten, encoding="utf-8")
    return url, True, str(out_path.relative_to(ROOT))


def main():
    if not INDEX.exists():
        print("Missing index.php", file=sys.stderr)
        sys.exit(1)

    force = "--force" in sys.argv
    pages = collect_page_urls()
    print(f"Pages to clone: {len(pages)} (workers: pages={PAGE_WORKERS}, assets={ASSET_WORKERS})", flush=True)
    local_base = os.environ.get("CW_BASE_URL", "http://localhost/clon-adobe-website")

    ok, fail = 0, 0
    with ThreadPoolExecutor(max_workers=PAGE_WORKERS) as ex:
        futs = {ex.submit(process_page, u, local_base, force): u for u in pages}
        for fut in as_completed(futs):
            url, success, msg = fut.result()
            if success:
                ok += 1
                print(f"OK {msg}", flush=True)
            else:
                fail += 1
                print(f"FAIL {url} ({msg})", flush=True)

    print("Refreshing index.php asset map...")
    idx_text = index_html_source()
    assets = extract_assets_from_html(idx_text, BASE + "/")
    asset_map = {}
    if assets:
        with ThreadPoolExecutor(max_workers=ASSET_WORKERS) as ex:
            futs = [ex.submit(download_asset, a) for a in assets]
            for fut in as_completed(futs):
                u, rel = fut.result()
                if rel:
                    asset_map[u] = rel
    rewritten = rewrite_html(idx_text, BASE + "/", asset_map, local_base)
    (ROOT / "index.php").write_text(
        php_header_for(ROOT / "index.php") + rewritten, encoding="utf-8"
    )

    list_file = ROOT / "assets" / "mirrored-pages.txt"
    list_file.parent.mkdir(parents=True, exist_ok=True)
    list_file.write_text("\n".join(pages) + "\n", encoding="utf-8")
    print(f"Done: {ok} pages OK, {fail} failed")
    if fail and ok == 0:
        print("Tip: run in macOS Terminal (not sandbox): bash scripts/clone-front-pages.sh", file=sys.stderr)
        sys.exit(1)


if __name__ == "__main__":
    main()
