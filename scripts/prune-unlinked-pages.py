#!/usr/bin/env python3
"""Keep only pages reachable from index.php via internal Adobe-style links; remove the rest."""
from __future__ import annotations

import re
import shutil
from pathlib import Path
from urllib.parse import urlparse, unquote

ROOT = Path(__file__).resolve().parent.parent
PAGES = ROOT / "pages"
INDEX = ROOT / "index.php"

HREF_RE = re.compile(
    r"""href\s*=\s*(["'])([^"']+)\1""",
    re.I,
)
PHP_CW_RE = re.compile(
    r"""CW_BASE_URL\s*\.\s*['"](/[^'"]+)['"]""",
    re.I,
)

SKIP_SCHEMES = ("mailto:", "tel:", "javascript:", "#")
EXTERNAL_HOSTS_OK = ("www.adobe.com", "adobe.com")


def route_from_href(href: str) -> str | None:
    href = unquote(href.strip())
    if not href or any(href.startswith(s) for s in SKIP_SCHEMES):
        return None
    if href.startswith("data:") or ":" in href.split("/")[0]:
        # data: URLs, absolute schemes other than handled below
        if not href.startswith("//") and "://" in href and not href.startswith("https://www.adobe.com"):
            return None
    if href.startswith("//"):
        href = "https:" + href

    path = href
    if "://" in href:
        p = urlparse(href)
        if p.hostname and p.hostname not in EXTERNAL_HOSTS_OK:
            return None
        path = p.path or "/"
    elif not href.startswith("/"):
        path = "/" + href

    path = path.split("#")[0].split("?")[0]
    if not path or path == "/":
        return None
    if path.endswith(".html"):
        path = path[:-5]
    path = path.strip("/")
    if not path or len(path) > 200 or "/" not in path and len(path) > 80:
        # reject data-URI garbage and overlong single segments
        if "/" not in path and not path.replace("-", "").replace("_", "").isalnum():
            return None
    if not re.match(r"^[a-z0-9][a-z0-9/_-]*$", path, re.I):
        return None
    return path


def extract_routes(text: str) -> set[str]:
    routes: set[str] = set()
    for m in HREF_RE.finditer(text):
        r = route_from_href(m.group(2))
        if r is not None and r != "":
            routes.add(r)
    for m in PHP_CW_RE.finditer(text):
        r = route_from_href(m.group(1))
        if r is not None and r != "":
            routes.add(r)
    return routes


def page_path(route: str) -> Path:
    return PAGES / route / "index.php"


def all_page_routes() -> list[str]:
    out = []
    for php in sorted(PAGES.rglob("index.php")):
        rel = php.relative_to(PAGES).parent
        if str(rel) == ".":
            continue
        out.append(str(rel).replace("\\", "/"))
    return out


def routes_linked_from_homepage() -> set[str]:
    """Routes linked directly from index.php (homepage), not transitive crawl."""
    if not INDEX.is_file():
        return set()
    text = INDEX.read_text(encoding="utf-8", errors="replace")
    keep: set[str] = set()
    for route in extract_routes(text):
        if page_path(route).is_file():
            keep.add(route)
    return keep


def main() -> None:
    keep = routes_linked_from_homepage()
    existing = set(all_page_routes())
    remove = sorted(existing - keep)

    report_keep = sorted(keep)
    report_remove = remove

    for route in remove:
        target = PAGES / route
        if target.is_dir():
            shutil.rmtree(target)
            # prune empty parents
            parent = target.parent
            while parent != PAGES and parent.is_dir() and not any(parent.iterdir()):
                parent.rmdir()
                parent = parent.parent

    out = ROOT / "docs" / "page-prune-report.txt"
    out.parent.mkdir(parents=True, exist_ok=True)
    lines = [
        f"Kept pages ({len(report_keep)}): linked directly from homepage (index.php)",
        "",
        *[f"  /{r}/" for r in report_keep],
        "",
        f"Removed pages ({len(report_remove)}): not linked from homepage",
        "",
        *[f"  /{r}/" for r in report_remove],
        "",
        "Homepage: index.php (not in pages/)",
    ]
    out.write_text("\n".join(lines) + "\n", encoding="utf-8")

    print(f"Kept: {len(report_keep)}")
    for r in report_keep:
        print(f"  KEEP  /{r}/")
    print(f"\nRemoved: {len(report_remove)}")
    for r in report_remove:
        print(f"  DEL   /{r}/")
    print(f"\nReport: {out.relative_to(ROOT)}")


if __name__ == "__main__":
    main()
