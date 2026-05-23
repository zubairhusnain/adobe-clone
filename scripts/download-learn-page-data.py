#!/usr/bin/env python3
"""Download Gatsby page-data JSON for learn routes (fixes empty learn spinner)."""
from __future__ import annotations

import json
import ssl
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
CTX = ssl.create_default_context()
HDR = {"User-Agent": "Mozilla/5.0", "Referer": "https://www.adobe.com/"}

ROUTES = [
    "learn/page-data.json",
    "learn/photoshop/page-data.json",
    "uk/learn/page-data.json",
    "uk/learn/photoshop/page-data.json",
]


def fetch_json(rel: str) -> bool:
    import subprocess

    dest = ROOT / "learn/static/s/page-data" / rel
    if dest.exists() and dest.stat().st_size > 500:
        return True
    for base in (
        f"https://www.adobe.com/learn/static/s/page-data/{rel}",
        f"https://creativecloud.adobe.com/learn/static/s/page-data/{rel}",
    ):
        try:
            proc = subprocess.run(
                [
                    "curl",
                    "-sS",
                    "--http1.1",
                    "-m",
                    "20",
                    "-H",
                    f"User-Agent: {HDR['User-Agent']}",
                    base,
                ],
                capture_output=True,
                check=False,
            )
            if proc.returncode == 0 and proc.stdout:
                data = proc.stdout
            else:
                raise OSError(proc.stderr.decode() or f"curl exit {proc.returncode}")
        except Exception as e:
            print(f"  skip {base}: {e}")
            continue
        try:
            json.loads(data)
        except json.JSONDecodeError:
            continue
        dest.parent.mkdir(parents=True, exist_ok=True)
        dest.write_bytes(data)
        print(f"OK {rel} ({len(data)}b) from {base}")
        return True
    print(f"FAIL {rel}")
    return False


def main() -> None:
    ok = sum(1 for r in ROUTES if fetch_json(r))
    print(f"\n{ok}/{len(ROUTES)} page-data files")


if __name__ == "__main__":
    main()
