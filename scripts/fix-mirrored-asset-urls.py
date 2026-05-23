#!/usr/bin/env python3
"""Strip trailing slashes after file extensions in mirrored pages/*.php HTML."""
from __future__ import annotations

import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
PAGES = ROOT / "pages"
PAT = re.compile(
    r"(\.(?:css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest|xml|pdf|map|mp4|webm))/",
    re.I,
)


def main() -> None:
    fixed = 0
    for path in PAGES.rglob("index.php"):
        text = path.read_text(encoding="utf-8", errors="replace")
        new, n = PAT.subn(r"\1", text)
        if n:
            path.write_text(new, encoding="utf-8")
            print(f"{path.relative_to(ROOT)}: {n} fixes")
            fixed += 1
    print(f"Done. Updated {fixed} files.")


if __name__ == "__main__":
    main()
