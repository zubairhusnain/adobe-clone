#!/bin/bash
# Pull Milo libs + blocks from GitHub (works when adobe.com is blocked).
set -euo pipefail
cd "$(dirname "$0")/.."
BASE="https://raw.githubusercontent.com/adobecom/milo/main"

fetch() {
  local spec="$1"
  mkdir -p "$(dirname "$spec")"
  if curl -fsSL --connect-timeout 25 --max-time 60 "$BASE/$spec" -o "$spec"; then
    echo "OK $spec"
  else
    echo "FAIL $spec"
    return 1
  fi
}

FILES=(
  # utils
  libs/utils/utils.js libs/utils/decorate.js libs/utils/lingo.js libs/utils/geo.js libs/utils/lana.js
  libs/utils/fonts.js libs/utils/favicon.js libs/utils/injectblock.js libs/utils/image-video-link.js
  libs/utils/sidekick.js libs/utils/logWebVitals.js libs/utils/sidekick-decorate.js
  # scripts + features (required by utils.js loadArea)
  libs/scripts/scripts.js libs/scripts/delayed.js libs/scripts/accessibility.js
  libs/features/placeholders.js libs/features/footer-promo.js libs/features/interlinks.js
  libs/features/georoutingv2/georoutingv2.js libs/features/georoutingv2/georoutingv2.css
  libs/features/language-banner/language-banner.js libs/features/language-banner/language-banner.css
  libs/features/region-modal/region-modal.js libs/features/region-modal/region-modal.css
  libs/features/personalization/personalization.js libs/features/personalization/preview.js
  libs/features/personalization/preview.css libs/features/personalization/promo-utils.js
  libs/features/personalization/add-preview-to-config.js libs/features/personalization/stage-entitlements.js
  libs/features/personalization/preview-mas-subcollection.js
  libs/features/richresults.js libs/features/seotech/seotech.js
  # martech
  libs/martech/martech.js libs/martech/helpers.js libs/martech/attributes.js
  # blocks
  libs/blocks/fallback/fallback.js
  libs/blocks/text/text.js libs/blocks/text/text.css
  libs/blocks/fragment/fragment.js
  libs/blocks/global-navigation/global-navigation.js libs/blocks/global-navigation/global-navigation.css
  libs/blocks/global-navigation/base.css libs/blocks/global-navigation/dark-nav.css
  libs/blocks/global-navigation/utilities/utilities.js
  libs/blocks/global-navigation/utilities/onImsReady.js
  libs/blocks/global-navigation/utilities/getUserEntitlements.js
  libs/blocks/global-navigation/utilities/getUserEventHistory.js
  libs/blocks/global-navigation/utilities/menu/menu.js libs/blocks/global-navigation/utilities/menu/menu.css
  libs/blocks/global-navigation/utilities/keyboard/index.js
  libs/blocks/global-navigation/utilities/keyboard/localNav.js
  libs/blocks/global-navigation/utilities/keyboard/mainNav.js
  libs/blocks/global-navigation/utilities/keyboard/mobileGnav.js
  libs/blocks/global-navigation/utilities/keyboard/mobilePopup.js
  libs/blocks/global-navigation/utilities/keyboard/popup.js
  libs/blocks/global-navigation/utilities/keyboard/utils.js
  libs/blocks/global-navigation/features/aside/aside.js
  libs/blocks/global-navigation/features/breadcrumbs/breadcrumbs.js
  libs/blocks/global-navigation/features/profile/dropdown.js libs/blocks/global-navigation/features/profile/dropdown.css
  libs/blocks/global-navigation/features/search/gnav-search.js libs/blocks/global-navigation/features/search/gnav-search.css
  libs/blocks/merch/merch.js libs/blocks/merch/merch.css libs/blocks/merch/mas-mep-utils.js
  libs/blocks/section-metadata/section-metadata.js libs/blocks/section-metadata/section-metadata.css
  libs/blocks/section-metadata/sticky-section.js
  libs/utils/automated-aria.js libs/utils/block-notifications.js libs/utils/service-config.js libs/utils/samplerum.js
  libs/blocks/global-footer/icons.svg
  libs/utils/preflight-notification.js libs/features/jarvis-chat.js
  libs/blocks/brand-concierge/brand-concierge.js libs/blocks/brand-concierge/brand-concierge.css
  libs/blocks/global-footer/global-footer.js libs/blocks/global-footer/global-footer.css
  libs/blocks/modal/modal.js libs/blocks/modal/modal.css
)

failed=0
for f in "${FILES[@]}"; do
  fetch "$f" || failed=$((failed + 1))
done

for block in text global-navigation merch brand-concierge global-footer modal fragment section-metadata; do
  mkdir -p "upp/blocks/$block"
  for ext in js css; do
    [[ -f "libs/blocks/$block/$block.$ext" ]] && cp -f "libs/blocks/$block/$block.$ext" "upp/blocks/$block/"
  done
done
for extra in base.css dark-nav.css; do
  [[ -f "libs/blocks/global-navigation/$extra" ]] && cp -f "libs/blocks/global-navigation/$extra" "upp/blocks/global-navigation/"
done
mkdir -p upp/blocks/global-navigation/utilities/menu
[[ -f libs/blocks/global-navigation/utilities/menu/menu.css ]] && \
  cp -f libs/blocks/global-navigation/utilities/menu/menu.css upp/blocks/global-navigation/utilities/menu/
[[ -f libs/blocks/merch/mas-mep-utils.js ]] && \
  cp -f libs/blocks/merch/mas-mep-utils.js upp/blocks/merch/

mkdir -p upp-shared
if [[ ! -f upp-shared/georoutingv2.json ]]; then
  echo '{"markets":[]}' > upp-shared/georoutingv2.json
  echo "OK upp-shared/georoutingv2.json (stub)"
fi
if [[ ! -f upp-shared/placeholders.json ]]; then
  echo '{"data":[]}' > upp-shared/placeholders.json
  echo "OK upp-shared/placeholders.json (stub)"
fi

echo ""
echo "Done ($failed fetch failures). Hard-refresh http://localhost/clon-adobe-website/"
exit "$failed"
