#!/usr/bin/env python3
"""Download cc-shared/gnav and federal/* nav fragments (HTML, no extension)."""
from __future__ import annotations

import re
import ssl
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
SSL_CTX = ssl.create_default_context()
HEADERS = {"User-Agent": "Mozilla/5.0", "Referer": "https://www.adobe.com/"}

PATHS = [
    "cc-shared/gnav/localnav-about-adobe",
    "cc-shared/gnav/localnav-buying-programs",
    "cc-shared/gnav/localnav-careers",
    "cc-shared/gnav/localnav-cct",
    "cc-shared/gnav/localnav-corporate-responsibility",
    "cc-shared/gnav/localnav-creativecloud-apps",
    "cc-shared/gnav/localnav-design",
    "cc-shared/gnav/localnav-elements-family",
    "cc-shared/gnav/localnav-firefly",
    "cc-shared/gnav/localnav-investor-relations",
    "cc-shared/gnav/localnav-photography",
    "cc-shared/gnav/localnav-substance3d-toptasks",
    "cc-shared/gnav/localnav-trust",
    "cc-shared/gnav/localnav-video",
    "federal/community/footer",
    "federal/community/gnav",
    "federal/events/localnav-events",
    "federal/learn/footer",
    "federal/learn/gnav",
    "cc-shared/fragments/products/firefly/logged-in/pep/firefly-pep",
    "cc-shared/fragments/products/firefly/logged-in/pep/features/text-to-image",
    "cc-shared/fragments/products/photoshop/personalization/pep-cards/ps-product-pep-card",
    "cc-shared/fragments/products/photoshop-lightroom/personalization/pep-cards/lightroom-pages/ps-lr",
]

# Also scan PHP for any cc-shared/federal paths still missing
pat = re.compile(
    r'(?:content|href|src)\s*=\s*["\']((?:cc-shared|federal)/[^"\']+)["\']',
    re.I,
)
for php in [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]:
    if "samsung-clon" in str(php):
        continue
    for m in pat.finditer(php.read_text(encoding="utf-8", errors="replace")):
        p = m.group(1).split("?")[0].split("#")[0]
        if p not in PATHS:
            PATHS.append(p)

ok = fail = 0
for rel in sorted(set(PATHS)):
    dest = ROOT / rel
    if dest.exists() and dest.stat().st_size > 200:
        ok += 1
        continue
    url = f"https://www.adobe.com/{rel}"
    req = urllib.request.Request(url, headers=HEADERS)
    try:
        with urllib.request.urlopen(req, timeout=45, context=SSL_CTX) as resp:
            data = resp.read()
        if len(data) < 100:
            fail += 1
            print(f"FAIL tiny {rel}")
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        ok += 1
        print(f"OK {rel} ({len(data)}b)")
    except Exception as e:
        fail += 1
        print(f"FAIL {rel}: {e}")

print(f"\n{ok} ok, {fail} failed")
