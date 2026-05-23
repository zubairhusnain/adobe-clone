#!/usr/bin/env python3
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
pat = re.compile(r"(?<![\w-])((?:cc-shared|libs)/[a-zA-Z0-9_./-]+\.(?:svg|png|jpe?g|gif|webp|mp4|json|css|js))", re.I)
paths = set()
for php in [ROOT / "index.php", *ROOT.glob("pages/**/index.php")]:
    if "samsung-clon" in str(php):
        continue
    text = php.read_text(encoding="utf-8", errors="replace")
    for m in pat.finditer(text):
        paths.add(m.group(1).split("?")[0])
out = ROOT / "scripts" / "cc-shared-paths.txt"
out.write_text("\n".join(sorted(paths)) + "\n", encoding="utf-8")
print(f"{len(paths)} paths -> {out}")
