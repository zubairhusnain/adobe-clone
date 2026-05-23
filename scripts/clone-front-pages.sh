#!/bin/bash
# Clone index.html front-page links + assets (samsung-clon layout). Run on your Mac:
#   bash scripts/clone-front-pages.sh
set -euo pipefail
cd "$(dirname "$0")/.."

echo "Stopping stuck mirror jobs..."
pkill -f "fast-clone.py" 2>/dev/null || true
pkill -f "mirror-adobe.mjs" 2>/dev/null || true
pkill -f "mirror-pages-wget" 2>/dev/null || true
sleep 1

export CW_BASE_URL="${CW_BASE_URL:-http://localhost/clon-adobe-website}"
export PAGE_WORKERS="${PAGE_WORKERS:-3}"
export ASSET_WORKERS="${ASSET_WORKERS:-12}"

exec python3 scripts/fast-clone.py "$@"
