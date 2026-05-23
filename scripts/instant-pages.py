#!/usr/bin/env python3
"""DEPRECATED: Creates homepage shell stubs — do not use for real mirrors.

Use: bash scripts/clone-front-pages.sh
"""

import html as htmlmod
import os
import re
import sys
import urllib.parse
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
INDEX = ROOT / "index.php"


def index_html_source() -> str:
    raw = INDEX.read_text(encoding="utf-8", errors="replace")
    return re.sub(r"^<\?php.*?\?>\s*", "", raw, count=1, flags=re.S)
BASE = "https://www.adobe.com"

ASSET_EXT = {
    ".css", ".js", ".mjs", ".png", ".jpg", ".jpeg", ".gif", ".webp", ".avif", ".svg", ".ico",
    ".woff", ".woff2", ".ttf", ".otf", ".eot", ".json", ".webmanifest",
}


def is_page_url(url: str) -> bool:
    u = urllib.parse.urlparse(url)
    if u.netloc != "www.adobe.com":
        return False
    p = u.path.lower()
    if not p or p == "/":
        return True
    if any(p.endswith(x) for x in ASSET_EXT):
        return False
    if "/favicons/" in p or "/uk/" in p:
        return False
    if "/fragments/" in p and not p.endswith(".html"):
        return False
    if p.startswith("/federal/assets/data/"):
        return False
    return True


def path_to_route(path: str) -> str:
    p = path.rstrip("/") or "/"
    if p.endswith(".html"):
        p = p[:-5]
    if not p.startswith("/"):
        p = "/" + p
    return p if p != "" else "/"


def collect_routes():
    text = index_html_source()
    by_path = {}
    for m in re.finditer(r'href=["\']([^"\']+)["\']', text, re.I):
        h = htmlmod.unescape(m.group(1)).strip()
        if h.startswith(("assets/", "mailto:", "tel:", "javascript:", "#")):
            continue
        if h.startswith("//"):
            h = "https:" + h
        elif h.startswith("/"):
            h = BASE + h
        elif not h.startswith("http"):
            continue
        h = h.split("#")[0]
        if not is_page_url(h):
            continue
        raw_path = urllib.parse.urlparse(h).path.rstrip("/") or "/"
        route = path_to_route(raw_path)
        if route not in by_path:
            by_path[route] = h
    return sorted(by_path.items())


def route_to_title(route: str) -> str:
    if route == "/":
        return "Adobe"
    name = route.strip("/").split("/")[-1]
    name = re.sub(r"\.html$", "", name, flags=re.I)
    name = name.replace("-", " ").replace("_", " ")
    return "Adobe: " + name.title()


def php_header(depth: int) -> str:
    if depth == 0:
        return "<?php\nrequire_once __DIR__ . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"
    return f"<?php\nrequire_once dirname(__DIR__, {depth}) . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n"


def stub_body(depth: int, route: str, title: str) -> str:
    root = "dirname(__DIR__, %d)" % depth
    return f"""<?php
require_once {root} . '/base-url.php';
cw_start_asset_url_rewrite();
$route = {route!r};
$title = {title!r};
$html = cw_load_home_template();
$html = preg_replace('/<title>[^<]*<\\/title>/i', '<title>' . htmlspecialchars($title, ENT_QUOTES) . '</title>', $html, 1);
$html = preg_replace('/<link rel=\"canonical\"[^>]*>/i', '<link rel=\"canonical\" href=\"' . CW_BASE_URL . rtrim($route, '/') . '/\">', $html, 1);
echo $html;
"""


def main():
    if "--force-stubs" not in sys.argv:
        print(
            "instant-pages.py is disabled (it only copies the homepage into every route).\n"
            "Run:  bash scripts/clone-front-pages.sh\n"
            "Or visit each URL once — router will try to download from adobe.com on your network.",
            file=sys.stderr,
        )
        sys.exit(1)

    routes = collect_routes()
    created = 0
    for route, _url in routes:
        if route == "/":
            continue
        rel = route.strip("/")
        out = ROOT / "pages" / rel / "index.php"
        depth = len(out.parent.relative_to(ROOT).parts)
        title = route_to_title(route)
        out.parent.mkdir(parents=True, exist_ok=True)
        out.write_text(stub_body(depth, route + "/", title), encoding="utf-8")
        created += 1

    list_file = ROOT / "assets" / "mirrored-pages.txt"
    list_file.parent.mkdir(parents=True, exist_ok=True)
    list_file.write_text("\n".join(u for _, u in routes) + "\n", encoding="utf-8")
    print(f"Created {created} pages under pages/ (instant, homepage shell)")


if __name__ == "__main__":
    main()
