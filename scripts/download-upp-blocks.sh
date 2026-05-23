#!/bin/bash
# Download missing upp block assets (correct /upp/ URLs)
set -euo pipefail
cd "$(dirname "$0")/.."
UA="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36"
REF="https://www.adobe.com/"

download() {
  local url="$1"
  local dest="$2"
  if [[ -f "$dest" && $(wc -c < "$dest" 2>/dev/null || echo 0) -gt 200 ]]; then
    echo "skip $dest"
    return 0
  fi
  mkdir -p "$(dirname "$dest")"
  echo "GET $url"
  curl --http1.1 -fsSL --connect-timeout 20 --max-time 60 -A "$UA" -e "$REF" "$url" -o "$dest" \
    || curl --http1.1 -fsSL --connect-timeout 20 --max-time 60 -A "$UA" -e "$REF" \
         "${url/https:\/\/www.adobe.com\/upp\//https://www.adobe.com/}" -o "$dest" \
    || echo "FAILED $url"
}

while IFS=$'\t' read -r url dest; do
  [[ -z "$url" || "$url" =~ ^# ]] && continue
  # manifest uses wrong host paths — normalize to /upp/
  if [[ "$url" == https://www.adobe.com/scripts/* ]]; then
    url="https://www.adobe.com/upp/${url#https://www.adobe.com/}"
  elif [[ "$url" == https://www.adobe.com/blocks/* ]]; then
    url="https://www.adobe.com/upp/${url#https://www.adobe.com/}"
  elif [[ "$url" == https://www.adobe.com/mep/* ]]; then
    url="https://www.adobe.com/upp/${url#https://www.adobe.com/}"
  fi
  dest="${dest#assets/www.adobe.com/}"
  download "$url" "$dest"
done < scripts/missing-assets.txt

echo "Done."
