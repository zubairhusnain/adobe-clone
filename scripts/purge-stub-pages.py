#!/usr/bin/env python3
"""Remove fake homepage-shell pages so clone-front-pages or live-mirror can refill them."""

from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
PAGES = ROOT / "pages"


def main():
    removed = 0
    for path in PAGES.rglob("index.php"):
        if path.parent.name == "no-page":
            continue
        head = path.read_text(encoding="utf-8", errors="replace")[:4096]
        if "cw_load_home_template" not in head:
            continue
        path.unlink()
        removed += 1
        print("removed", path.relative_to(ROOT))
    print(f"Removed {removed} stub page(s). Run: bash scripts/clone-front-pages.sh")


if __name__ == "__main__":
    main()
