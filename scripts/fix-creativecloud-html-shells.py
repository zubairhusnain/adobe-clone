#!/usr/bin/env python3
"""Fix creativecloud/*.html offline shells: shim, redirect, dynamic utils import, strip akam."""
from __future__ import annotations

import re
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
CC = ROOT / "creativecloud"

SHIM_HEAD = """    <script src="../assets/js/cw-offline-shim.js"></script>
"""

IMPORT_OLD = re.compile(
    r"\s*import \{ scriptInit \} from '/creativecloud/scripts/utils\.js';\s*\n\s*scriptInit\(\);",
    re.M,
)
IMPORT_NEW = """  const cwBase = (window.__CW_ASSET_ROOT || '').replace(/\\/$/, '') || '/clon-adobe-website';
  import(cwBase + '/creativecloud/scripts/utils.js').then((m) => m.scriptInit());
"""

AKAM_HEAD = re.compile(
    r'\s*<script\s*>bazadebezolkohpepadr="[^"]*"</script>'
    r'<script[^>]*src="https?://(?:www\.)?adobe\.com/akam/13/[^"]*"[^>]*></script></head>',
    re.I,
)
AKAM_NOSCRIPT = re.compile(
    r'\s*<noscript><img[^>]*akam/13/pixel[^>]*></noscript></body>',
    re.I,
)


def route_for(path: Path) -> str:
    name = path.stem  # business, photography/apps
    if name == "plans":
        return "./plans/"
    parts = path.relative_to(CC).parts
    slug = "/".join(parts[:-1]) if len(parts) > 1 else path.stem
    return f"./{slug}/"


def fix_file(path: Path) -> bool:
    text = path.read_text(encoding="utf-8", errors="replace")
    orig = text

    if "cw-offline-shim.js" not in text:
        text = text.replace("<head>", "<head>\n" + SHIM_HEAD, 1)
        redirect = f'    <meta http-equiv="refresh" content="0;url={route_for(path)}">\n'
        text = text.replace("<head>\n" + SHIM_HEAD, "<head>\n" + SHIM_HEAD + redirect, 1)

    text = IMPORT_OLD.sub("\n" + IMPORT_NEW, text)
    text = AKAM_HEAD.sub("</head>", text)
    text = AKAM_NOSCRIPT.sub("</body>", text)

    if text != orig:
        path.write_text(text, encoding="utf-8")
        return True
    return False


def main() -> None:
    n = 0
    for html in sorted(CC.rglob("*.html")):
        if fix_file(html):
            print(f"fixed {html.relative_to(ROOT)}")
            n += 1
    print(f"\n{n} files updated")


if __name__ == "__main__":
    main()
