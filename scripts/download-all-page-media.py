#!/usr/bin/env python3
"""Download /media_* and route-relative images referenced in pages/*."""
from __future__ import annotations

import json
import re
import ssl
import urllib.error
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
HDR = {"User-Agent": "Mozilla/5.0", "Referer": "https://www.adobe.com/"}
CTX = ssl.create_default_context()
MEDIA_RE = re.compile(
    r'(?:href|src|srcset|content)=["\']([^"\']*?(media_[a-f0-9]+\.(?:png|jpe?g|webp|gif|svg)))',
    re.I,
)


def fetch(url: str) -> bytes | None:
    try:
        with urllib.request.urlopen(
            urllib.request.Request(url, headers=HDR), timeout=45, context=CTX
        ) as resp:
            data = resp.read()
    except Exception:
        return None
    if len(data) < 200 or b"<html" in data[:400].lower():
        return None
    return data


def urls_for(path: str) -> list[str]:
    path = path.split("?")[0].lstrip("/")
    out = [f"https://www.adobe.com/{path}"]
    base = path.rsplit("/", 1)[-1]
    if base.startswith("media_"):
        out.append(f"https://www.adobe.com/sign/{base}")
        out.append(f"https://www.adobe.com/{base}")
    return out


def collect_paths() -> set[str]:
    paths: set[str] = set()
    for php in [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]:
        text = php.read_text(encoding="utf-8", errors="replace")
        for m in MEDIA_RE.finditer(text):
            p = m.group(1).split("?")[0]
            if p.startswith("http"):
                continue
            if p.startswith("/"):
                paths.add(p)
            else:
                paths.add("/" + p)
    return paths


def main() -> None:
    paths = sorted(collect_paths())
    ok = fail = 0
    for web in paths:
        rel = web.lstrip("/")
        # Root-level media_* → assets/images/
        if rel.startswith("media_"):
            dest = ROOT / "assets" / "images" / rel
        else:
            dest = ROOT / rel
        if dest.is_file() and dest.stat().st_size > 500:
            ok += 1
            continue
        data = None
        for url in urls_for(rel):
            data = fetch(url)
            if data:
                break
        if not data:
            print(f"FAIL /{rel}")
            fail += 1
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        print(f"OK /{rel} ({len(data)}b)")
        ok += 1
    print(f"\n{ok} ok, {fail} failed, {len(paths)} total")
    if fail:
        raise SystemExit(1)


if __name__ == "__main__":
    main()
