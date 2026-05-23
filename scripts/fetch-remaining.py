#!/usr/bin/env python3
import html
import os
import re
import ssl
import urllib.parse
import urllib.request
from concurrent.futures import ThreadPoolExecutor, as_completed
from pathlib import Path
from typing import Optional, Tuple

ROOT = Path(__file__).resolve().parent.parent
INDEX = ROOT / "index.php"
PHP_HEADER = (
    "<?php\nrequire_once __DIR__ . '/base-url.php';\n"
    "cw_start_asset_url_rewrite();\n?>\n"
)


def read_index_html() -> str:
    raw = INDEX.read_text(encoding="utf-8", errors="replace")
    return re.sub(r"^<\?php.*?\?>\s*", "", raw, count=1, flags=re.S)
ASSETS = ROOT / "assets"
CTX = ssl.create_default_context()
HEADERS = {
    "User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36",
    "Referer": "https://www.adobe.com/",
}

URL_IN_ATTR = re.compile(
    r'(?:src|href)\s*=\s*["\'](https?://[^"\']+?\.(?:js|css)(?:\?[^"\']*)?)["\']',
    re.I,
)


def local_path(url: str) -> Path:
    p = urllib.parse.urlparse(url)
    path = p.path.lstrip("/") or "index"
    if p.query:
        safe_q = re.sub(r"[^\w.-]", "_", p.query)[:80]
        base, ext = os.path.splitext(path)
        if ext:
            path = f"{base}.{safe_q}{ext}"
    return ASSETS / p.netloc / path


def download_src(url: str) -> Tuple[str, Optional[str]]:
    dest = local_path(url)
    if dest.exists() and dest.stat().st_size > 100:
        return url, str(dest.relative_to(ROOT)).replace(os.sep, "/")

    candidates = [url]
    for old, new in [
        ("/upp/marketingtech/", "/marketingtech/"),
        ("/upp/blocks/", "/blocks/"),
        ("/upp/scripts/", "/scripts/"),
        ("/upp/mep/", "/mep/"),
    ]:
        if old in url:
            candidates.append(url.replace(old, new, 1))

    for src in candidates:
        try:
            req = urllib.request.Request(src, headers=HEADERS)
            with urllib.request.urlopen(req, timeout=25, context=CTX) as r:
                data = r.read()
            if len(data) > 50:
                dest.parent.mkdir(parents=True, exist_ok=True)
                dest.write_bytes(data)
                return url, str(dest.relative_to(ROOT)).replace(os.sep, "/")
        except Exception:
            continue
    return url, None


def main():
    content = read_index_html()
    urls = sorted({html.unescape(m.group(1)) for m in URL_IN_ATTR.finditer(content)})
    print(f"Remaining: {len(urls)}")

    mapping = {}
    with ThreadPoolExecutor(max_workers=6) as ex:
        futs = {ex.submit(download_src, u): u for u in urls}
        for fut in as_completed(futs):
            orig, local = fut.result()
            if local:
                mapping[orig] = local
                print(f"OK {local}")
            else:
                print(f"FAIL {orig}")

    new = content
    for url in sorted(mapping, key=len, reverse=True):
        new = new.replace(url, mapping[url])
        new = new.replace(url.replace("&", "&amp;"), mapping[url])

    INDEX.write_text(PHP_HEADER + new, encoding="utf-8")
    print(f"Localized {len(mapping)}/{len(urls)}")


if __name__ == "__main__":
    main()
