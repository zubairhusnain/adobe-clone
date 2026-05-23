#!/bin/bash
set -euo pipefail
ROOT="$(cd "$(dirname "$0")/.." && pwd)"
LIST="${1:-$ROOT/scripts/cc-shared-paths.txt}"
OK=0
FAIL=0
while IFS= read -r rel || [[ -n "${rel:-}" ]]; do
  [[ -z "${rel:-}" ]] && continue
  dest="$ROOT/$rel"
  if [[ -f "$dest" ]] && [[ "$(wc -c <"$dest" | tr -d ' ')" -gt 40 ]]; then
    ((OK++)) || true
    continue
  fi
  mkdir -p "$(dirname "$dest")"
  if curl -fsSL --max-time 45 "https://www.adobe.com/$rel" -o "$dest.tmp" 2>/dev/null; then
    mv "$dest.tmp" "$dest"
    ((OK++)) || true
  else
    rm -f "$dest.tmp"
    echo "FAIL $rel" >&2
    ((FAIL++)) || true
  fi
done <"$LIST"
echo "done ok=$OK fail=$FAIL"
