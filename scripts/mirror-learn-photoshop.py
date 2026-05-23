#!/usr/bin/env python3
"""
Mirror Adobe Learn Photoshop (https://www.adobe.com/uk/learn/photoshop):
  - Gatsby HTML shell
  - page-data JSON
  - /learn/static/s/ assets referenced by shell + page-data

Run: python3 scripts/mirror-learn-photoshop.py
"""
from __future__ import annotations

import json
import re
import ssl
import time
import urllib.error
import urllib.request
from pathlib import Path
from urllib.parse import urljoin, urlparse

ROOT = Path(__file__).resolve().parent.parent
HDR = {
    "User-Agent": (
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) "
        "AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
    ),
    "Accept": "text/html,application/json,*/*;q=0.8",
    "Accept-Language": "en-GB,en;q=0.9",
    "Referer": "https://www.adobe.com/",
}
CTX = ssl.create_default_context()

PAGE_URLS = [
    "https://www.adobe.com/uk/learn/photoshop",
    "https://www.adobe.com/uk/learn/photoshop/",
    "https://www.adobe.com/learn/photoshop",
    "https://www.adobe.com/learn/photoshop/",
]

PAGE_DATA_PATHS = [
    "uk/learn/photoshop/page-data.json",
    "learn/photoshop/page-data.json",
]

STATIC_BASES = [
    "https://www.adobe.com/learn/static/s/",
    "https://creativecloud.adobe.com/learn/static/s/",
]


def fetch(url: str, timeout: int = 60) -> bytes | None:
    """Prefer curl --http1.1 (Adobe often fails on urllib HTTP/2)."""
    import subprocess

    try:
        proc = subprocess.run(
            [
                "curl",
                "-sS",
                "--http1.1",
                "-m",
                str(min(timeout, 45)),
                "-H",
                f"User-Agent: {HDR['User-Agent']}",
                "-H",
                f"Referer: {HDR['Referer']}",
                url,
            ],
            capture_output=True,
            check=False,
        )
        if proc.returncode == 0 and proc.stdout and len(proc.stdout) > 100:
            return proc.stdout
    except Exception:
        pass
    req = urllib.request.Request(url, headers=HDR)
    try:
        with urllib.request.urlopen(req, timeout=timeout, context=CTX) as resp:
            return resp.read()
    except Exception as exc:
        print(f"  fail {url}: {exc}")
        return None


def save(rel: str, data: bytes) -> Path:
    dest = ROOT / rel
    dest.parent.mkdir(parents=True, exist_ok=True)
    dest.write_bytes(data)
    print(f"  saved {rel} ({len(data)} bytes)")
    return dest


def extract_urls(text: str) -> set[str]:
    found: set[str] = set()
    for m in re.finditer(r'(?:href|src)=["\']([^"\']+)["\']', text, re.I):
        found.add(m.group(1))
    for m in re.finditer(r'"(/learn/static/s/[^"]+)"', text):
        found.add(m.group(1))
    for m in re.finditer(r'"(https?://[^"]*adobe\.com/learn/static/s/[^"]+)"', text):
        found.add(urlparse(m.group(1)).path)
    return found


def download_static_path(path: str) -> bool:
    path = path.split("?", 1)[0]
    if not path.startswith("/learn/static/s/"):
        return False
    rel = path.lstrip("/")
    dest = ROOT / rel
    if dest.is_file() and dest.stat().st_size > 50:
        return True
    for base in STATIC_BASES:
        data = fetch(base + path.removeprefix("/learn/static/s/"))
        if data and len(data) > 20:
            save(rel, data)
            return True
    return False


def normalize_shell(html: str, page_path: str, page_data_rel: str) -> str:
    html = re.sub(
        r'window\.pagePath\s*=\s*["\'][^"\']*["\']',
        f'window.pagePath="{page_path}"',
        html,
        count=1,
    )
    # Point preload at photoshop page-data
    html = re.sub(
        r'href="/learn/static/s/page-data/learn/page-data\.json"',
        f'href="/learn/static/s/page-data/{page_data_rel}"',
        html,
    )
    html = re.sub(
        r'<title[^>]*>.*?</title>',
        "<title>Adobe Learn – Photoshop</title>",
        html,
        count=1,
        flags=re.I | re.S,
    )
    return html


def write_php_wrapper(shell_path: Path, page_path: str, page_data_rel: str) -> None:
    html = shell_path.read_text(encoding="utf-8", errors="replace")
    html = normalize_shell(html, page_path, page_data_rel)
    php = (
        "<?php\n"
        "require_once dirname(__DIR__, 3) . '/base-url.php';\n"
        "cw_start_asset_url_rewrite();\n"
        "?>\n" + html
    )
    dest = ROOT / "pages/learn/photoshop/index.php"
    dest.parent.mkdir(parents=True, exist_ok=True)
    dest.write_text(php, encoding="utf-8")
    print(f"  wrote {dest.relative_to(ROOT)}")


def main() -> None:
    print("=== Fetch HTML shell ===")
    html_bytes: bytes | None = None
    for url in PAGE_URLS:
        print(f"try {url}")
        html_bytes = fetch(url, timeout=90)
        if html_bytes and len(html_bytes) > 2000 and b"gatsby" in html_bytes.lower():
            break
        time.sleep(1)

    if not html_bytes:
        # Fallback: existing partial mirror
        fallback = ROOT / "learn/photoshop/index"
        if fallback.is_file():
            print("using fallback learn/photoshop/index")
            html_bytes = fallback.read_bytes()
        else:
            fallback = ROOT / "pages/learn/index.php"
            body = re.sub(r"^<\?php.*?\?>\s*", "", fallback.read_text(), count=1, flags=re.S)
            html_bytes = body.encode("utf-8")

    shell_dest = ROOT / "learn/photoshop/index"
    save(str(shell_dest.relative_to(ROOT)), html_bytes)

    print("\n=== Fetch page-data.json ===")
    page_data_rel = "learn/photoshop/page-data.json"
    pd_bytes: bytes | None = None
    for rel in PAGE_DATA_PATHS:
        for base in STATIC_BASES:
            url = base + "page-data/" + rel
            print(f"try {url}")
            pd_bytes = fetch(url, timeout=45)
            if pd_bytes and len(pd_bytes) > 500:
                try:
                    json.loads(pd_bytes)
                    page_data_rel = rel
                    save(f"learn/static/s/page-data/{rel}", pd_bytes)
                    break
                except json.JSONDecodeError:
                    pd_bytes = None
        if pd_bytes:
            break

    if not pd_bytes:
        print("WARN: no page-data.json — app may show spinner until you re-run on a network that can reach adobe.com")

    # Live Adobe shell uses pagePath /learn/ for all /learn/* client routes.
    page_path = "/learn/"

    print("\n=== Download static assets ===")
    text = html_bytes.decode("utf-8", errors="replace")
    if pd_bytes:
        text += pd_bytes.decode("utf-8", errors="replace")
    urls = extract_urls(text)
    ok = 0
    for u in sorted(urls):
        if download_static_path(u):
            ok += 1
    print(f"static assets: {ok}/{len(urls)} paths")

    print("\n=== PHP route + shell fix ===")
    write_php_wrapper(shell_dest, page_path, page_data_rel)

    # Symlink-style copy for uk path page-data if we only got learn/
    if page_data_rel == "learn/photoshop/page-data.json":
        uk_dest = ROOT / "learn/static/s/page-data/uk/learn/photoshop/page-data.json"
        if pd_bytes and not uk_dest.is_file():
            uk_dest.parent.mkdir(parents=True, exist_ok=True)
            uk_dest.write_bytes(pd_bytes)
            print(f"  copied page-data to {uk_dest.relative_to(ROOT)}")

    print("\nDone. Open:")
    print("  http://localhost/clon-adobe-website/learn/photoshop/")
    print("  http://localhost/clon-adobe-website/uk/learn/photoshop/")


if __name__ == "__main__":
    main()
