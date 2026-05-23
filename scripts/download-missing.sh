#!/bin/bash
# Download assets listed in scripts/missing-assets.txt (run from project root)
set -euo pipefail
cd "$(dirname "$0")/.."
UA="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36"
REF="https://www.adobe.com/"
while IFS=$'\t' read -r url dest; do
  [[ -z "$url" || "$url" =~ ^# ]] && continue
  if [[ -f "$dest" && $(wc -c < "$dest") -gt 100 ]]; then
    echo "skip $dest"
    continue
  fi
  mkdir -p "$(dirname "$dest")"
  echo "GET $url -> $dest"
  curl --http1.1 -fsSL --max-time 90 -A "$UA" -e "$REF" "$url" -o "$dest" || echo "FAILED $url"
done < scripts/missing-assets.txt

# Full marketing + block set (correct /upp/ paths)
if [[ -x scripts/download-upp-blocks.sh ]]; then
  bash scripts/download-upp-blocks.sh
fi
