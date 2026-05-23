#!/usr/bin/env python3
"""Remove pages/ routes not linked from index.php (homepage)."""
from __future__ import annotations

import re
import shutil
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
KEEP_ALWAYS = {"no-page", "community", "acrobat/generative-ai-pdf"}


def page_routes() -> set[str]:
    routes: set[str] = set()
    for p in (ROOT / "pages").rglob("index.php"):
        rel = p.parent.relative_to(ROOT / "pages")
        routes.add(str(rel).replace("\\", "/"))
    return routes


def homepage_routes(pages: set[str]) -> set[str]:
    index = (ROOT / "index.php").read_text(encoding="utf-8", errors="replace")
    found: set[str] = set(KEEP_ALWAYS)
    for h in re.findall(r'href=["\']([^"\']+)["\']', index, re.I):
        h = h.split("?")[0].split("#")[0].strip()
        if not h or h.startswith("#") or re.match(r"^(javascript|mailto|tel):", h, re.I):
            continue
        p: str | None = None
        if re.match(r"^https?://(?:www\.)?adobe\.com", h, re.I):
            m = re.search(r"adobe\.com(?:\.html)?/?(.*)$", h, re.I)
            p = (m.group(1) if m else "").replace(".html", "").strip("/")
        elif h.startswith("/"):
            p = h.strip("/").replace(".html", "")
        elif not h.startswith(("upp/", "libs/", "federal/", "homepage/", "marketingtech/")):
            p = h.replace(".html", "").strip("/")
        if p is not None and p in pages:
            found.add(p)
    return found


def main() -> None:
    pages = page_routes()
    linked = homepage_routes(pages)
    orphans = sorted(pages - linked)
    if not orphans:
        print("No orphan pages.")
        return
    for rel in orphans:
        dest = ROOT / "pages" / rel
        print(f"remove {rel}")
        shutil.rmtree(dest, ignore_errors=True)
    print(f"Removed {len(orphans)} orphan page(s).")


if __name__ == "__main__":
    main()
