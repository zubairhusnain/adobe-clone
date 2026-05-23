#!/usr/bin/env python3
"""Point index.php at assets/ for every remote JS/CSS (download missing via fetch-remaining)."""

import html
import os
import re
import urllib.parse
from pathlib import Path

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

URL_IN_ATTR = re.compile(
    r'(?:src|href)\s*=\s*["\'](https?://[^"\']+?\.(?:js|css)(?:\?[^"\']*)?)["\']',
    re.I,
)


def local_path(url: str) -> Path:
    p = urllib.parse.urlparse(url)
    path = p.path.lstrip("/") or "index"
    # Adobe serves marketingtech without /upp/ prefix
    path = path.replace("upp/marketingtech/", "marketingtech/", 1)
    if p.query:
        safe_q = re.sub(r"[^\w.-]", "_", p.query)[:80]
        base, ext = os.path.splitext(path)
        if ext:
            path = f"{base}.{safe_q}{ext}"
    return ASSETS / p.netloc / path


def download_url(url: str) -> str:
    """Canonical fetch URL (strip erroneous /upp/ prefix for known paths)."""
    for old, new in [
        ("/upp/marketingtech/", "/marketingtech/"),
        ("/upp/blocks/", "/blocks/"),
        ("/upp/scripts/", "/scripts/"),
        ("/upp/mep/", "/mep/"),
    ]:
        if old in url:
            return url.replace(old, new, 1)
    return url


def main():
    content = read_index_html()
    urls = sorted({html.unescape(m.group(1)) for m in URL_IN_ATTR.finditer(content)})

    replaced = 0
    for url in urls:
        dest = local_path(url)
        web = str(dest.relative_to(ROOT)).replace(os.sep, "/")
        if dest.exists() and dest.stat().st_size > 50:
            content = content.replace(url, web)
            content = content.replace(url.replace("&", "&amp;"), web)
            replaced += 1
            continue
        # Map to local path even if missing (consistent structure)
        content = content.replace(url, web)
        content = content.replace(url.replace("&", "&amp;"), web)

    INDEX.write_text(PHP_HEADER + content, encoding="utf-8")

    missing = []
    for url in urls:
        dest = local_path(url)
        if not dest.exists() or dest.stat().st_size <= 50:
            missing.append((url, download_url(url), dest))

    manifest = ROOT / "scripts" / "missing-assets.txt"
    with manifest.open("w", encoding="utf-8") as f:
        for orig, fetch, dest in missing:
            f.write(f"{fetch}\t{dest.relative_to(ROOT)}\n")

    print(f"Updated paths for {len(urls)} URLs ({replaced} already on disk)")
    print(f"Missing files: {len(missing)} (see {manifest})")


if __name__ == "__main__":
    main()
