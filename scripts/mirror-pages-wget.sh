#!/bin/bash
# Fallback page mirror when Playwright cannot reach adobe.com (run on your Mac).
set -euo pipefail
cd "$(dirname "$0")/.."
UA="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36"
mkdir -p pages

python3 << 'PY' > /tmp/adobe-page-urls.txt
import re, html
from urllib.parse import urlparse
import re
c = open("index.php", encoding="utf-8").read()
c = re.sub(r'^<\?php.*?\?>\s*', '', c, count=1, flags=re.S)
base = "https://www.adobe.com"
links = set()
for m in re.finditer(r'href=["\']([^"\']+)["\']', c, re.I):
    h = html.unescape(m.group(1)).strip()
    if h.startswith("/"): h = base + h
    if not h.startswith("https://www.adobe.com"): continue
    p = urlparse(h).path.lower()
    if re.search(r"\.(js|css|json|png|jpg|svg|ico|woff|webmanifest)$", p): continue
    if "/favicons/" in p or "/fragments/" in p and not p.endswith(".html"): continue
    if p.startswith("/uk/"): continue
    links.add(h.split("#")[0])
for u in sorted(links):
    print(u)
PY

while IFS= read -r url; do
  [[ -z "$url" ]] && continue
  path=$(python3 -c "
from urllib.parse import urlparse
u='$url'
p=urlparse(u).path
if p.endswith('.html'): p=p[:-5]
if not p or p=='/':
  print('INDEX')
else:
  print('pages'+p+'/index.php')
")
  if [[ "$path" == "INDEX" ]]; then
    out="index-mirror-tmp.php"
  else
    mkdir -p "$(dirname "$path")"
    out="$path"
  fi
  echo "GET $url -> $out"
  curl -fsSL --http1.1 --max-time 120 -A "$UA" -e "https://www.adobe.com/" "$url" -o "$out" || echo "FAILED $url"
done < /tmp/adobe-page-urls.txt

echo "Done. Run: node mirror-adobe.mjs --download-remote-assets-project"
