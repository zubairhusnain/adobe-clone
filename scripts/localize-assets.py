#!/usr/bin/env python3
"""Download remote JS/CSS from index.php and rewrite paths to assets/."""

import html
import os
import re
import ssl
import time
import urllib.error
import urllib.parse
import urllib.request
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


def write_index_html(body: str) -> None:
    INDEX.write_text(PHP_HEADER + body, encoding="utf-8")
ASSETS = ROOT / "assets"

URL_IN_ATTR = re.compile(
    r'(?:src|href)\s*=\s*["\'](https?://[^"\']+?\.(?:js|css)(?:\?[^"\']*)?)["\']',
    re.IGNORECASE,
)
SCRIPT_SRC = re.compile(
    r'<script[^>]+src\s*=\s*["\'](https?://[^"\']+)["\']',
    re.IGNORECASE,
)
GTAG_JS = re.compile(
    r'(?:src|href)\s*=\s*["\'](https?://www\.googletagmanager\.com/gtag/js[^"\']+)["\']',
    re.IGNORECASE,
)

SSL_CTX = ssl.create_default_context()
HEADERS = {
    "User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
    "Accept": "*/*",
    "Referer": "https://www.adobe.com/",
}


def decode_url(u: str) -> str:
    return html.unescape(u)


def local_path(url: str) -> Path:
    parsed = urllib.parse.urlparse(url)
    host = parsed.netloc
    path = parsed.path.lstrip("/") or "index"
    if parsed.query:
        safe_q = re.sub(r"[^\w.-]", "_", parsed.query)[:80]
        base, ext = os.path.splitext(path)
        if ext:
            path = f"{base}.{safe_q}{ext}"
    return ASSETS / host / path


def fallback_urls(url: str) -> list[str]:
    """Try alternate CDN paths when /upp/ mirror 404s."""
    out = [url]
    if "www.adobe.com/upp/marketingtech/" in url:
        out.append(url.replace("/upp/marketingtech/", "/marketingtech/", 1))
    if "www.adobe.com/upp/blocks/" in url:
        out.append(url.replace("/upp/blocks/", "/blocks/", 1))
    if "www.adobe.com/upp/scripts/" in url:
        out.append(url.replace("/upp/scripts/", "/scripts/", 1))
    if "www.adobe.com/upp/mep/" in url:
        out.append(url.replace("/upp/mep/", "/mep/", 1))
    if "www.adobe.com/upp/styles/" in url:
        out.append(url.replace("/upp/styles/", "/styles/", 1))
    # dedupe preserving order
    seen = set()
    unique = []
    for u in out:
        if u not in seen:
            seen.add(u)
            unique.append(u)
    return unique


def download(url: str, dest: Path, retries: int = 3) -> bool:
    dest.parent.mkdir(parents=True, exist_ok=True)
    if dest.exists() and dest.stat().st_size > 100:
        return True

    for attempt in range(retries):
        req = urllib.request.Request(url, headers=HEADERS)
        try:
            with urllib.request.urlopen(req, timeout=90, context=SSL_CTX) as resp:
                data = resp.read()
            if len(data) < 50:
                print(f"  WARN tiny file ({len(data)}b): {url}")
                continue
            dest.write_bytes(data)
            return True
        except urllib.error.HTTPError as e:
            if e.code == 404:
                break
            print(f"  FAIL HTTP {e.code} (try {attempt + 1}): {url}")
        except Exception as e:
            print(f"  FAIL {e} (try {attempt + 1}): {url}")
        time.sleep(2 * (attempt + 1))
    return False


def url_to_web_path(url: str) -> str:
    rel = local_path(url).relative_to(ROOT)
    return str(rel).replace(os.sep, "/")


def collect_urls(content: str) -> set[str]:
    urls = set()
    for m in URL_IN_ATTR.finditer(content):
        urls.add(decode_url(m.group(1)))
    for m in GTAG_JS.finditer(content):
        urls.add(decode_url(m.group(1)))
    for m in SCRIPT_SRC.finditer(content):
        u = decode_url(m.group(1))
        if u.startswith("https://") and not re.search(r"\.(js|css)(\?|$)", u, re.I):
            if "googletagmanager.com/gtag/js" in u or "doubleclick.net" in u:
                continue
            urls.add(u)
    return urls


def main():
    content = read_index_html()
    urls = sorted(collect_urls(content))
    print(f"Found {len(urls)} unique remote asset URLs")

    mapping: dict[str, str] = {}
    ok, fail = 0, 0

    for url in urls:
        dest = local_path(url)
        web = url_to_web_path(url)
        print(f"Fetching: {url}")
        success = False
        for candidate in fallback_urls(url):
            if download(candidate, dest):
                if candidate != url:
                    print(f"  via fallback: {candidate}")
                mapping[url] = web
                ok += 1
                success = True
                break
        if not success:
            fail += 1
            print(f"  SKIPPED (all fallbacks failed)")

    expanded = dict(mapping)
    for url, web in mapping.items():
        expanded[url.replace("&", "&amp;")] = web

    new_content = content
    for url in sorted(expanded.keys(), key=len, reverse=True):
        new_content = new_content.replace(url, expanded[url])

    write_index_html(new_content)
    print(f"\nDone: {ok} localized, {fail} still remote")
    print(f"Updated {INDEX}")


if __name__ == "__main__":
    main()
