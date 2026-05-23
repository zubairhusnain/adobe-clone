#!/usr/bin/env python3
"""Mirror www.adobe.com pages via web.archive.org when live Adobe times out."""

import html as htmlmod
import re
import subprocess
import sys
import time
import urllib.parse
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
INDEX = ROOT / "index.php"
BASE = "https://www.adobe.com"
UA = "Mozilla/5.0 (compatible; adobe-clon-local/1.0)"
ASSET_EXT = {
    ".css", ".js", ".mjs", ".png", ".jpg", ".jpeg", ".gif", ".webp", ".svg", ".ico",
    ".woff", ".woff2", ".ttf", ".otf", ".eot", ".json", ".webmanifest",
}


def index_source() -> str:
    raw = INDEX.read_text(encoding="utf-8", errors="replace")
    return re.sub(r"^<\?php.*?\?>\s*", "", raw, count=1, flags=re.S)


def is_page_url(url: str) -> bool:
    u = urllib.parse.urlparse(url)
    if u.netloc != "www.adobe.com":
        return False
    p = (u.path or "/").lower()
    if not p or p == "/":
        return True
    if any(p.endswith(x) for x in ASSET_EXT):
        return False
    if "/favicons/" in p or p.startswith("/uk/"):
        return False
    if "/fragments/" in p and not p.endswith(".html"):
        return False
    return True


def collect_urls():
    text = index_source()
    by = {}
    for m in re.finditer(r'href=["\']([^"\']+)["\']', text, re.I):
        h = htmlmod.unescape(m.group(1)).strip()
        if h.startswith("/"):
            h = BASE + h
        elif h.startswith("//"):
            h = "https:" + h
        elif not h.startswith("http"):
            continue
        h = h.split("#")[0]
        if is_page_url(h):
            by[h] = True
    return sorted(by.keys())


def normalize_adobe_url(url: str) -> list[str]:
    """Return candidate URLs to try on archive.org."""
    u = urllib.parse.urlparse(url)
    path = u.path or "/"
    candidates = [url]
    if not path.endswith(".html") and "." not in path.rsplit("/", 1)[-1]:
        candidates.append(urllib.parse.urlunparse((u.scheme, u.netloc, path.rstrip("/") + ".html", "", "", "")))
    if path.endswith(".html"):
        candidates.append(urllib.parse.urlunparse((u.scheme, u.netloc, path[:-5] or "/", "", "", "")))
    out = []
    for c in candidates:
        if c not in out:
            out.append(c)
    return out


def fetch(url: str):
    for candidate in normalize_adobe_url(url):
        for stamp in ("2024id_", "2023id_", "2022id_"):
            wb = f"https://web.archive.org/web/{stamp}{candidate}"
            cmd = ["curl", "-fsSL", "--compressed", "--max-time", "90", "-A", UA, wb]
            try:
                p = subprocess.run(cmd, capture_output=True, timeout=100)
            except subprocess.TimeoutExpired:
                continue
            if p.returncode != 0 or len(p.stdout) < 1500:
                continue
            text = p.stdout.decode("utf-8", errors="replace")
            if "<html" in text.lower():
                return p.stdout
    return None


def clean_html(raw: bytes) -> str:
    text = raw.decode("utf-8", errors="replace")
    text = re.sub(r"<!-- BEGIN WAYBACK.*?END WAYBACK -->", "", text, flags=re.S | re.I)
    text = re.sub(r"<script[^>]*web\.archive\.org[^>]*>.*?</script>", "", text, flags=re.S | re.I)
    text = re.sub(r"<link[^>]*web\.archive\.org[^>]*>", "", text, flags=re.I)
    return text


def is_valid_mirror_html(text: str, url: str) -> bool:
    if "<html" not in text.lower():
        return False
    if re.search(r"<title>\s*Wayback Machine\s*</title>", text, re.I):
        return False
    if len(text) < 2000:
        return False
    return True


def php_header(path: Path) -> str:
    rel = path.parent.relative_to(ROOT)
    depth = 0 if str(rel) == "." else len(rel.parts)
    if depth == 0:
        return "<?php\nrequire_once __DIR__ . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"
    return f"<?php\nrequire_once dirname(__DIR__, {depth}) . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"


def url_to_path(url: str) -> Path:
    p = urllib.parse.urlparse(url).path
    if p.endswith(".html"):
        p = p[:-5]
    p = p.strip("/")
    if not p:
        return None  # never overwrite site homepage index.php
    return ROOT / "pages" / p / "index.php"


def main():
    urls = collect_urls()
    print(f"Mirroring {len(urls)} pages via web.archive.org", flush=True)
    ok = fail = 0
    for url in urls:
        out = url_to_path(url)
        if out is None:
            continue
        existing = out.read_text(encoding="utf-8", errors="replace") if out.is_file() else ""
        if existing and is_valid_mirror_html(existing, url) and "--force" not in sys.argv:
            print(f"SKIP {out.relative_to(ROOT)}", flush=True)
            ok += 1
            continue
        print(f"GET {url} ... ", end="", flush=True)
        data = fetch(url)
        if not data:
            print("FAIL", flush=True)
            fail += 1
            continue
        html = clean_html(data)
        if not is_valid_mirror_html(html, url):
            print("FAIL (bad snapshot)", flush=True)
            fail += 1
            continue
        out.parent.mkdir(parents=True, exist_ok=True)
        out.write_text(php_header(out) + html, encoding="utf-8")
        print(f"OK ({out.stat().st_size // 1024} KB)", flush=True)
        ok += 1
        time.sleep(1.5)
    print(f"Done: {ok} OK, {fail} failed", flush=True)
    return 0 if fail == 0 else 1


if __name__ == "__main__":
    sys.exit(main())
