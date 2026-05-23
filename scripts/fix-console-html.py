#!/usr/bin/env python3
"""Strip/repair HTML patterns that cause console errors offline."""
from __future__ import annotations

import re
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
PHP_STRIP = re.compile(r"^<\?php.*?\?>\s*", re.S)

PATTERNS: list[tuple[str, str]] = [
    # Third-party analytics (non-adobe hosts)
    (
        r'<script\b[^>]*\bsrc=["\']https?://(?!(?:www\.)?adobe\.com)[^"\']*["\'][^>]*>\s*</script>',
        "",
    ),
    # hreflang sitemap inline module (network + noise)
    (
        r'<script\s+type=["\']module["\']>\s*const\s+userAgentMeta\s*=\s*document\.querySelector\([^<]*?</script>',
        "",
    ),
    # Acrobat satellite dcLana import
    (r'<script\b[^>]*>_satellite\["_runScript\d+"\]\(function\s*\(\)\s*\{[^<]*?dcLana\.js[^<]*?</script>', ""),
    (r"import\s*\(\s*['\"]/acrobat/scripts/dcLana\.js['\"]\s*\)[^;]*;?", ""),
    # Absolute creativecloud script imports → relative
    (
        r"import\s*\{\s*scriptInit\s*\}\s*from\s*['\"]/creativecloud/scripts/utils\.js['\"]",
        "import { scriptInit } from 'creativecloud/scripts/utils.js'",
    ),
    (r"import\s+scriptInit\s+from\s*['\"]/creativecloud/scripts/utils\.js['\"]", ""),
    # Broken relative etc.clientlibs under <base>
    (
        r'\b(src|href)=(["\'])(?:\.\./)+etc\.clientlibs/',
        r"\1=\2etc.clientlibs/",
    ),
]


def fix(text: str) -> tuple[str, int]:
    n = 0
    for pat, repl in PATTERNS:
        new, c = re.subn(pat, repl, text, flags=re.I | re.S)
        if c:
            n += c
            text = new
    return text, n


def main() -> None:
    total = 0
    files = [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]
    for path in files:
        if "samsung-clon" in str(path):
            continue
        raw = path.read_text(encoding="utf-8", errors="replace")
        header = PHP_STRIP.match(raw)
        body = PHP_STRIP.sub("", raw, count=1)
        new_body, n = fix(body)
        if n:
            path.write_text((header.group(0) if header else "") + new_body, encoding="utf-8")
            print(f"{path.relative_to(ROOT)}: {n} fixes")
            total += n
    print(f"Done. {total} pattern replacements.")


if __name__ == "__main__":
    main()
