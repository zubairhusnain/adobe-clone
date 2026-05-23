#!/usr/bin/env python3
"""Rewrite assets/www.adobe.com/* → root paths (upp/, libs/, marketingtech/)."""

from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
OLD = "assets/www.adobe.com/"
FILES = [ROOT / "index.php"]


def fix(text: str) -> str:
    return text.replace(OLD, "")


def main():
    for path in FILES:
        if not path.exists():
            continue
        raw = path.read_text(encoding="utf-8", errors="replace")
        if OLD not in raw:
            print(f"skip {path.name} (already fixed)")
            continue
        path.write_text(fix(raw), encoding="utf-8")
        print(f"fixed {path.name}")


if __name__ == "__main__":
    main()
