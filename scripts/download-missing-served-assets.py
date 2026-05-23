#!/usr/bin/env python3
"""Download assets listed in scripts/missing-served-assets.json (+ bare /media_*)."""
from __future__ import annotations

import json
import re
import ssl
import urllib.error
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
MANIFEST = ROOT / "scripts/missing-served-assets.json"
CTX = ssl.create_default_context()
HDR = {"User-Agent": "Mozilla/5.0", "Referer": "https://www.adobe.com/"}


def fetch(url: str) -> bytes | None:
    req = urllib.request.Request(url, headers=HDR)
    try:
        with urllib.request.urlopen(req, timeout=45, context=CTX) as resp:
            data = resp.read()
    except Exception:
        return None
    if len(data) < 80:
        return None
    if b"<html" in data[:500].lower():
        return None
    return data


def candidates(path: str) -> list[str]:
    path = path.lstrip("/")
    base = f"https://www.adobe.com/{path}"
    out = [base]
    if path.startswith("media_"):
        out.insert(0, f"https://www.adobe.com/sign/{path}")
    if "/" in path and "media_" in path:
        out.append(f"https://www.adobe.com/{path.split('/', 1)[0]}/{path.split('/', 1)[1]}")
    if path.startswith("libs/"):
        out.append(f"https://www.adobe.com/upp/{path[5:]}")
    if path.startswith("upp/"):
        out.append(f"https://www.adobe.com/libs/{path[4:]}")
    return out


def main() -> None:
    paths: set[str] = set()
    if MANIFEST.is_file():
        data = json.loads(MANIFEST.read_text())
        paths.update(data.keys())

    for php in [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]:
        text = php.read_text(encoding="utf-8", errors="replace")
        for m in re.finditer(r'(?:src|href)=["\']/(media_[^"\']+\.(?:png|jpe?g|webp|gif))', text, re.I):
            paths.add("/" + m.group(1).split("?")[0])

    ok = fail = 0
    for path in sorted(paths):
        dest = ROOT / path.lstrip("/")
        if dest.exists() and dest.stat().st_size > 500 and b"<html" not in dest.read_bytes()[:300].lower():
            ok += 1
            continue
        data = None
        for url in candidates(path.lstrip("/")):
            data = fetch(url)
            if data:
                break
        if not data:
            print(f"FAIL {path}")
            fail += 1
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        print(f"OK {path} ({len(data)}b)")
        ok += 1

    print(f"\n{ok} ok, {fail} failed")


if __name__ == "__main__":
    main()
