#!/usr/bin/env python3
"""Fetch gnav, acrobat blocks, and cc-shared fragment media missing offline."""
from __future__ import annotations

import re
import ssl
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
CTX = ssl.create_default_context()
HDR = {"User-Agent": "Mozilla/5.0", "Referer": "https://www.adobe.com/"}

STATIC = [
    "upp-shared/gnav.plain.html",
    "acrobat/blocks/verb-widget/verb-widget.js",
    "acrobat/blocks/verb-widget/verb-widget.css",
    "acrobat/blocks/unity/unity.js",
    "acrobat/blocks/unity/unity.css",
    "acrobat/blocks/rnr/rnr.js",
    "acrobat/blocks/rnr/rnr.css",
    "acrobat/blocks/accordion-container/accordion-container.js",
    "acrobat/blocks/accordion-container/accordion-container.css",
    "acrobat/scripts/dcLana.js",
    "acrobat/scripts/imageReplacer.js",
    "acrobat/scripts/susiAuthHandler.js",
    "acrobat/scripts/geo-phoneNumber.js",
    "acrobat/scripts/tooltips.js",
    "assets/css/cta.svg",
]


def collect_from_php() -> list[str]:
    paths = list(STATIC)
    img = re.compile(
        r'(?:src|srcset|href)=["\']([^"\']+\.(?:jpg|jpeg|png|webp|svg|gif))(?:\?[^"\']*)?["\']',
        re.I,
    )
    for php in [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]:
        if "samsung-clon" in str(php):
            continue
        text = php.read_text(encoding="utf-8", errors="replace")
        for m in img.finditer(text):
            p = m.group(1).split("?")[0]
            if p.startswith(("http://", "https://", "data:")):
                continue
            if p.startswith("/"):
                p = p.lstrip("/")
            if p.startswith("../"):
                continue
            if any(p.startswith(x) for x in ("cc-shared/", "upp-shared/", "libs/", "content/")):
                paths.append(p)
    return sorted(set(paths))


def fetch(rel: str) -> bool:
    dest = ROOT / rel
    if dest.exists() and dest.stat().st_size > 80:
        return True
    url = f"https://www.adobe.com/{rel.lstrip('/')}"
    req = urllib.request.Request(url, headers=HDR)
    try:
        with urllib.request.urlopen(req, timeout=60, context=CTX) as resp:
            data = resp.read()
    except Exception as e:
        print(f"FAIL {rel}: {e}")
        return False
    if len(data) < 40:
        print(f"FAIL tiny {rel}")
        return False
    dest.parent.mkdir(parents=True, exist_ok=True)
    dest.write_bytes(data)
    print(f"OK {rel} ({len(data)}b)")
    return True


def main() -> None:
    ok = fail = 0
    for rel in collect_from_php():
        if fetch(rel):
            ok += 1
        else:
            fail += 1
    print(f"\n{ok} ok, {fail} failed")


if __name__ == "__main__":
    main()
