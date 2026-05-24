<?php
declare(strict_types=1);

/** Remove Adobe Messaging chat widget (footer iframe + loader UI). */
function cw_strip_adbmsg_client(string $html): string
{
    $html = preg_replace(
        '~<iframe\\b[^>]*\\bclass=["\']adbmsgContentIframe["\'][^>]*>\\s*</iframe>~i',
        '',
        $html
    ) ?? $html;

    return preg_replace(
        '~<div\\s+class=["\']adbMsgClientWrapper["\'][^>]*>[\\s\\S]*(?=<img\\s+height=["\']1["\']\\s+width=["\']1["\']\\s+src=["\']https://pixel\\.everesttech\\.net/3085/t)~i',
        '',
        $html
    ) ?? $html;
}

/** Remove analytics / IMS / marketing scripts that break offline XAMPP mirror. */
function cw_strip_offline_breaking_assets(string $html): string
{
    $html = cw_strip_adbmsg_client($html);
    // Line-based pass is faster/safer than huge PCRE on multi-MB HTML.
    $html = preg_replace('/^.*marketingtech.*\r?\n/mi', '', $html) ?? $html;
    $html = preg_replace('/^.*\bakam\/13\/.*\r?\n/mi', '', $html) ?? $html;
    $html = preg_replace('/^.*bazadebezolkohpepadr.*\r?\n/mi', '', $html) ?? $html;
    // Strip broken script tails left when marketing <script> opening lines were removed.
    $html = preg_replace('/^\s*async=""[^>]*>\s*<\/script>\s*\r?\n/mi', '', $html) ?? $html;
    $html = preg_replace('/^\s*data-loaded="true">\s*<\/script>\s*\r?\n/mi', '', $html) ?? $html;
    $html = preg_replace('/^\s*locale="[^"]*"[^>]*><\/mas-commerce-service>\s*\r?\n/mi', '', $html) ?? $html;
    $html = preg_replace('/^\s*content="A7JYkbIv[^"]*">\s*\r?\n/mi', '', $html) ?? $html;

    $patterns = [
        '~<meta\\s+name=["\']target["\']\\s+content=["\']on["\']\\s*/?>~i',
        '~<meta\\s+name=["\']personalization-v2["\']\\s+content=["\']on["\']\\s*/?>~i',
        '~<meta\\s+name=["\']personalization["\'][^>]*>~i',
        '~<meta\\s+name=["\']schedule["\'][^>]*>~i',
        '~<script\\b[^>]*fixPodHeight[^>]*>\\s*</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*fixPodHeight[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<link\\s+rel=["\']preload["\'][\\s\\S]*?>~i',
        '~<link\\b[^>]*\\bhref=["\']https?://use\\.typekit\\.net/[^"\']*["\'][^>]*>~i',
        '~<div\\s+id=["\']page-load-ok-milo["\'][^>]*>\\s*</div>~i',
        '~<script\\b[^>]*\\bmarketingtech[^>]*>.*?</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*marketingtech[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<link\\b[^>]*\\bmarketingtech[^>]*>~i',
        '~<script\\b[^>]*\\bUniversalNav\\.js[^>]*>\\s*</script>~is',
        '~<link\\b[^>]*\\bUniversalNav\\.css[^>]*>~i',
        '~<script\\b[^>]*\\bsrc=["\']upp/scripts/imslib[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*imslib[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*prod\\.adobeccstatic\\.com[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<link\\b[^>]*\\bprod\\.adobeccstatic\\.com[^>]*>~i',
        '~<script\\b[^>]*\\bsrc=["\']https?://(?!(?:www\\.)?adobe\\.com)[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*(?:analytics\\.tiktok|bat\\.bing|snap\\.licdn|s\\.pinimg|siteintercept|t\\.contentsquare|googletagmanager|ct\\.pinterest|sc-static|cdn\\.pdst|tr\\.snapchat|everest|st\\.v3|ispot\\.tv|flashtalking|doubleclick|qualtrics|zn3n5vyia1vy8b4ly)[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script\\s+type=["\']module["\']>\\s*const\\s+userAgentMeta\\s*=\\s*document\\.querySelector\\([^<]*?</script>~is',
        '~<script\\b[^>]*>_satellite\\["_runScript\\d+"\\]\\(function\\s*\\(\\)\\s*\\{[^<]*?dcLana\\.js[^<]*?</script>~is',
        '~<script\\b[^>]*//[^"\']*everest[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script[^>]*>\\s*bazadebezolkohpepadr\\s*=.*?</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*akam/13/[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<script\\b[^>]*\\bsrc=["\'][^"\']*\\/akam\\/13\\/[^"\']*["\'][^>]*>\\s*</script>~is',
        '~<link\\b[^>]*\\bhref=["\']https?://www\\.adobe\\.com[^"\']*["\'][^>]*>~i',
        '~<link\\b[^>]*\\bhref=["\']https?://client\\.messaging\\.adobe\\.com[^"\']*["\'][^>]*>~i',
        '~<noscript>\\s*<img\\b[^>]*akam/13/pixel[^>]*>\\s*</noscript>~is',
        '~<img\\b[^>]*\\bsrc=["\'][^"\']*akam/13/pixel[^"\']*["\'][^>]*>~i',
        '~<iframe\\b[^>]*(?:everest|flashtalking|doubleclick|commerce\\.adobe)[^>]*>.*?</iframe>~is',
        '~<iframe\\b[^>]*(?:everest|flashtalking|doubleclick|commerce\\.adobe)[^>]*>~i',
        '~<img\\b[^>]*(?:everest|ispot\\.tv|bat\\.bing|pixel\\.everest)[^>]*>~i',
        '~<div\\s+id=["\'](?:batBeacon|ZN_)[^"\']*["\'][^>]*>.*?</div>\\s*</body>~is',
        '~<cs-native-frame-holder[^>]*>.*?</cs-native-frame-holder>~is',
    ];

    $html = preg_replace(
        '~<div\\s+data-adobe-target-testid[^>]*>.*?</div>\\s*~is',
        '',
        $html
    ) ?? $html;

    foreach ($patterns as $pattern) {
        $html = preg_replace($pattern, '', $html) ?? $html;
    }

    if (preg_match('/<meta\\s+name=["\']martech["\']/i', $html)) {
        $html = preg_replace('/<meta\\s+name=["\']martech["\'][^>]*>/i', '<meta name="martech" content="off">', $html, 1) ?? $html;
    } else {
        $html = preg_replace('/<head([^>]*)>/i', '<head$1><meta name="martech" content="off">', $html, 1) ?? $html;
    }

    $html = cw_normalize_footer_social_links($html);
    $html = cw_strip_footer_external_links($html);
    $html = cw_apply_homepage_footer($html);
    $html = cw_force_homepage_gnav($html);
    $html = cw_apply_homepage_header_nav($html);
    $html = cw_localize_header_nav($html);
    $html = cw_strip_sign_in_from_header($html);
    $html = cw_apply_canonical_nav_popups($html);
    $html = cw_customize_learn_support_nav($html);
    $html = cw_customize_creative_cloud_home_section($html);
    $html = cw_strip_in_the_news_links($html);
    $html = cw_disable_adobe_for_business_link($html);
    $html = cw_rewrite_html_urls_to_plain_structure($html);
    $html = cw_localize_document_links($html);
    $html = cw_strip_post_footer_marketing($html);

    return $html;
}

/**
 * Remove mirrored DTM / tracker injections after </footer> (avoids hung tabs on shared hosting).
 */
function cw_strip_post_footer_marketing(string $html): string
{
    $footerClose = strripos($html, '</footer>');
    if ($footerClose === false) {
        return $html;
    }

    $afterFooter = $footerClose + strlen('</footer>');
    $bodyClose = stripos($html, '</body>', $afterFooter);
    if ($bodyClose === false) {
        return $html;
    }

    $tail = substr($html, $afterFooter, $bodyClose - $afterFooter);
    if ($tail === '') {
        return $html;
    }

    $needles = [
        '_satellite',
        'marketingtech',
        'commerce.adobe.com',
        'everestjs.net',
        'flashtalking.com',
        'doubleclick.net',
        'bat.bing.com',
        'ispot.tv',
        'page-load-ok-milo',
        'cs-native-frame-holder',
        'adobe-target-testid',
    ];

    foreach ($needles as $needle) {
        if (stripos($tail, $needle) !== false) {
            return substr($html, 0, $afterFooter) . "\n" . substr($html, $bodyClose);
        }
    }

    return $html;
}

/** Rewrite href/src/action (and srcset URLs) to local paths; other externals → site home. */
function cw_localize_document_links(string $html): string
{
    $html = preg_replace_callback(
        '~\b(href|src|action|content)=(["\'])([^"\']+)\2~i',
        static function (array $m): string {
            $local = cw_localize_nav_href($m[3]);

            return $m[1] . '=' . $m[2] . $local . $m[2];
        },
        $html
    ) ?? $html;

    return preg_replace_callback(
        '~\bsrcset=(["\'])([^"\']+)\1~i',
        static function (array $m): string {
            $inner = preg_replace_callback(
                '~\S+~',
                static function (array $part): string {
                    $chunk = $part[0];
                    if (!preg_match('~^https?://~i', $chunk) && !str_starts_with($chunk, '/')) {
                        return $chunk;
                    }
                    $url = preg_replace('~\s+[\d.]+[wx]?$~', '', $chunk);
                    $suffix = substr($chunk, strlen($url));
                    $local = cw_localize_nav_href($url);

                    return $local . $suffix;
                },
                $m[2]
            ) ?? $m[2];

            return 'srcset=' . $m[1] . $inner . $m[1];
        },
        $html
    ) ?? $html;
}

/** True when the page uses Milo merch blocks but lost the inline scriptInit bootstrap. */
function cw_page_needs_milo_bootstrap(string $html): bool
{
    if (str_contains($html, 'id="cw-milo-init"') || str_contains($html, 'scriptInit()')) {
        return false;
    }

    if (preg_match('/<(?:merch-sidenav|merch-card-collection|collection-container)\\b/i', $html) === 1) {
        return true;
    }

    if (preg_match('/<meta\\s+name=["\']personalization["\'][^>]*content=["\']products\\/catalog\\.json/i', $html) === 1) {
        return true;
    }

    return preg_match('/<meta\\s+name=["\']footer-source["\'][^>]*merch-shared/i', $html) === 1;
}

/** Inject creativecloud/plans Milo bootstrap so catalog/plans merch UI hydrates offline. */
function cw_inject_milo_bootstrap(string $html): string
{
    if (!cw_page_needs_milo_bootstrap($html)) {
        return $html;
    }

    $script = '<script type="module" id="cw-milo-init">'
        . 'const cwBase=(window.__CW_ASSET_ROOT||"").replace(/\\/$/,"");'
        . 'import(cwBase+"/creativecloud/plans/scripts/utils.js").then((m)=>m.scriptInit())'
        . '.catch((e)=>console.error("cw-milo-init",e));'
        . '</script>';

    if (preg_match('/<\\/body>/i', $html) === 1) {
        return preg_replace('/<\\/body>/i', $script . '</body>', $html, 1) ?? $html;
    }

    return $html . $script;
}

// --- Homepage header nav (markup is in index.php; these fix links in output) ---

/** Site root, e.g. http://localhost/clon-adobe-website */
function cw_site_base(): string
{
    return defined('CW_BASE_URL') ? CW_BASE_URL : '';
}

/** Path without .html — router serves /segment/ (e.g. /products/firefly/). */
function cw_plain_path(string $path): string
{
    if (preg_match('~\.plain\.html~i', $path)) {
        return $path;
    }

    // Files with extensions (before ? or #) must not get a trailing slash.
    if (preg_match('~\.(?:css|js|mjs|json|png|jpe?g|gif|svg|webp|woff2?|ico|map|webmanifest)(?=[?#]|$)~i', $path)) {
        return $path;
    }

    $path = preg_replace('~\.html(?=[?#]|$)~i', '/', $path) ?? $path;

    if (preg_match('~^([^?#]+)(.*)$~', $path, $m)) {
        $stem = $m[1];
        $tail = $m[2];
        if ($stem !== '/' && !str_ends_with($stem, '/')) {
            $stem .= '/';
        }

        return $stem . $tail;
    }

    return $path;
}

/** True when an attribute value should be rewritten as a site path/URL. */
function cw_href_looks_localizable(string $href): bool
{
    $href = trim($href);
    if ($href === '' || str_starts_with($href, '#')) {
        return false;
    }
    if (preg_match('~^(?:javascript:|mailto:|tel:|data:)~i', $href) === 1) {
        return false;
    }
    if (preg_match('~^https?://~i', $href) === 1) {
        return true;
    }
    if (str_starts_with($href, '/')) {
        return true;
    }
    if (str_contains($href, ',')) {
        return false;
    }
    if (preg_match('~^(?:\.\./)*(?:acrobat|creativecloud|products|libs|upp|federal|homepage|content|assets|sign|learn|express|nonprofits|education|community|privacy|legal|careers|events|trust|diversity|investor-relations|corporate-responsibility|howtobuy|offer-terms|media_)/~i', $href) === 1) {
        return true;
    }
    if (preg_match('~^media_[A-Za-z0-9]+\.(?:png|jpe?g|webp|gif|svg)(?:\?.*)?$~i', $href) === 1) {
        return true;
    }

    return false;
}

/** Full local URL for a plain path, e.g. cw_page_url('/learn/') */
function cw_page_url(string $path): string
{
    $path = cw_plain_path(str_starts_with($path, '/') ? $path : '/' . $path);

    return cw_site_base() . $path;
}

/** Convert a localized or relative href to plain structure (no .html). */
function cw_plainify_href(string $href): string
{
    $href = trim($href);
    if ($href === '' || str_starts_with($href, '#') || preg_match('~^(?:javascript:|mailto:|tel:|data:)~i', $href) === 1) {
        return $href;
    }

    $base = cw_site_base();
    if ($base !== '' && str_starts_with($href, $base)) {
        return $base . cw_plain_path(substr($href, strlen($base)) ?: '/');
    }

    if (str_starts_with($href, '/') && preg_match('~^https?://~i', $href) !== 1) {
        return cw_plain_path($href);
    }

    if (preg_match('~^https?://(?:www\.)?adobe\.com(/[^?#]*)(\?[^#]*)?(#.*)?$~i', $href, $m)) {
        $path = cw_plain_path($m[1] === '' ? '/' : $m[1]);

        return $base . $path . ($m[2] ?? '') . ($m[3] ?? '');
    }

    return $href;
}

/** Rewrite href/src/action URLs in HTML from *.html to trailing-slash paths. */
function cw_rewrite_html_urls_to_plain_structure(string $html): string
{
    return preg_replace_callback(
        '~\b(href|src|action)=(["\'])([^"\']+?)\.html((?:[?#][^"\']*)?)\2~i',
        static function (array $m): string {
            $url = $m[3] . ($m[4] ?? '');
            if (preg_match('~\.plain\.html~i', $url)) {
                return $m[0];
            }

            return $m[1] . '=' . $m[2] . cw_plainify_href($url) . $m[2];
        },
        $html
    ) ?? $html;
}

/** Canonical mega-menu popup markup (homepage: two links only, no extra columns). */
function cw_build_canonical_nav_popup(string $navLabel): string
{
    if ($navLabel === 'Creativity Design') {
        $items =
            '<li><a href="' . cw_page_url('/products/firefly/') . '" class="feds-navLink" daa-ll="Creative AI-1">Creative AI</a></li>'
            . '<li><a href="' . cw_page_url('/creativecloud/photography/apps/') . '" class="feds-navLink" daa-ll="Photography-2">Photography</a></li>';
        $headline = 'Shop for';
        $menuLh = 'Shop for';
    } elseif ($navLabel === 'PDF E signatures') {
        $items =
            '<li><a href="' . cw_page_url('/acrobat/') . '" class="feds-navLink" daa-ll="Adobe Acrobat-1">Adobe Acrobat</a></li>'
            . '<li><a href="' . cw_page_url('/acrobat/acrobat-studio/') . '" class="feds-navLink" daa-ll="Adobe Acrobat Studio-2">Adobe Acrobat Studio</a></li>';
        $headline = 'Products';
        $menuLh = 'Products';
    } else {
        return '';
    }

    return '<div class="feds-popup" data-cw-canonical-popup="1">'
        . '<div class="feds-menu-container"><div class="feds-menu-content">'
        . '<div class="feds-menu-column"><div class="feds-menu-section">'
        . '<div class="feds-menu-headline" role="heading" aria-level="2">' . $headline . '</div>'
        . '<div class="feds-menu-items" daa-lh="' . $menuLh . '"><ul>' . $items . '</ul></div>'
        . '</div></div></div></div></div>';
}

/** Replace the entire popup panel for a mega-menu nav item. */
function cw_replace_nav_mega_popup(string $html, string $navLabel): string
{
    $popup = cw_build_canonical_nav_popup($navLabel);
    if ($popup === '') {
        return $html;
    }

    $pattern = '~(<section\\b[^>]*\\bfeds-navItem--megaMenu\\b[^>]*\\bdaa-lh="' . preg_quote($navLabel, '~')
        . '"[^>]*>\\s*<button\\b[^>]*>.*?</button>)\\s*<div\\b[^>]*\\bfeds-popup\\b[^>]*>.*?(</section>)~is';

    return preg_replace($pattern, '$1' . $popup . '$2', $html, 1) ?? $html;
}

/** Creativity & Design popup: homepage two links only. */
function cw_customize_creativity_design_popup(string $html): string
{
    return cw_replace_nav_mega_popup($html, 'Creativity Design');
}

/** PDF & E-signatures popup: homepage two links only. */
function cw_customize_pdf_popup(string $html): string
{
    return cw_replace_nav_mega_popup($html, 'PDF E signatures');
}

/** Apply canonical Creativity + PDF popups on global navigation (header or full page). */
function cw_apply_canonical_nav_popups(string $html): string
{
    $html = cw_customize_creativity_design_popup($html);
    $html = cw_customize_pdf_popup($html);

    return preg_replace(
        '~<section\\b[^>]*\\bfeds-navItem--megaMenu\\b[^>]*\\bdaa-lh="Marketing Commerce"[^>]*>.*?</section>~is',
        '',
        $html
    ) ?? $html;
}

/** Homepage Creative Cloud brick: drop external URLs (e.g. commerce.adobe.com trial). */
function cw_customize_creative_cloud_home_section(string $html): string
{
    if (!cw_is_homepage_request()) {
        return $html;
    }

    $base = cw_site_base();

    if (!preg_match('~(<h2\\s+id="creative-cloud"[^>]*>.*?(?=<h2\\s+id="acrobat"))~is', $html, $m)) {
        return $html;
    }

    $block = $m[0];
    $block = preg_replace(
        '~href="https?://commerce\\.adobe\\.com[^"]*"~i',
        'href="' . cw_page_url('/creativecloud/plans/') . '"',
        $block
    ) ?? $block;
    $block = preg_replace_callback(
        '/<a\\b([^>]*)\\shref=(["\'])(https?:\\/\\/[^"\']+)\\2([^>]*)>(.*?)<\\/a>/is',
        static fn (array $a): string => $a[5],
        $block
    ) ?? $block;

    return substr_replace($html, $block, (int) strpos($html, $m[0]), strlen($m[0]));
}

/** Full local URL for the Learn & Support nav link. */
function cw_learn_page_url(): string
{
    return cw_page_url('/community/');
}

/** Point Learn & Support hrefs at the local community page. */
function cw_localize_learn_hrefs_in_html(string $html): string
{
    $learnUrl = cw_learn_page_url();
    foreach (['/learn/photoshop/', '/learn/', '/community/'] as $path) {
        $html = str_replace('href="' . $path . '"', 'href="' . $learnUrl . '"', $html);
        $html = str_replace("href='" . $path . "'", "href='" . $learnUrl . "'", $html);
    }

    return $html;
}

/** Learn & Support direct link (markup is in homepage header). */
function cw_customize_learn_support_nav(string $html): string
{
    return cw_localize_learn_hrefs_in_html($html);
}

/** Turn adobe.com / relative paths into local clone URLs for header nav links. */
function cw_localize_nav_href(string $href): string
{
    $base = cw_site_base();
    if ($base === '') {
        return $href;
    }
    $href = trim($href);
    if (!cw_href_looks_localizable($href)) {
        return $href;
    }
    if ($href === '' || str_starts_with($href, '#') || preg_match('~^(?:javascript:|mailto:|tel:)~i', $href) === 1) {
        return $href;
    }

    if (preg_match('~^https?://(?:www\.)?adobe\.com(/[^?#]*)(\?[^#]*)?(#.*)?$~i', $href, $m)) {
        $path = cw_plain_path(($m[1] === '' || $m[1] === '/') ? '/' : $m[1]);
        $suffix = ($m[2] ?? '') . ($m[3] ?? '');

        return $base . $path . $suffix;
    }

    if (preg_match('~^https?://business\.adobe\.com~i', $href) === 1) {
        return cw_page_url('/creativecloud/business/');
    }

    if (preg_match('~^https?://helpx\.adobe\.com~i', $href) === 1) {
        return cw_page_url('/community/');
    }

    if (preg_match('~^https?://stock\.adobe\.com~i', $href) === 1) {
        return cw_page_url('/products/catalog/');
    }

    if (preg_match('~^https?://(?:creativecloud|account|express)\.adobe\.com~i', $href) === 1) {
        return cw_page_url('/creativecloud/plans/');
    }

    if (preg_match('~^https?://(?:www\.)?adobe\.io~i', $href) === 1) {
        return cw_page_url('/');
    }

    if (preg_match(
        '~^https?://(?:www\.)?(?:facebook|instagram|twitter|x|linkedin|youtube|pinterest|discord|behance|weibo)\.com~i',
        $href
    ) === 1) {
        return $href;
    }

    // Keep same-origin clone URLs (e.g. CW_BASE_URL + /acrobat/generative-ai-pdf/).
    if ($base !== '' && str_starts_with($href, $base)) {
        return cw_plainify_href($href);
    }

    if (preg_match('~^https?://~i', $href) === 1) {
        return cw_page_url('/');
    }

    if (str_starts_with($href, '/')) {
        return cw_page_url($href);
    }

    return cw_page_url('/' . $href);
}

/** Use homepage global nav on every page (not per-page localnav gnav). */
function cw_force_homepage_gnav(string $html): string
{
    if (cw_is_homepage_request()) {
        return $html;
    }

    $html = preg_replace('~<meta\\s+name=["\']gnav-source["\'][^>]*>\\s*~i', '', $html) ?? $html;
    $html = preg_replace('~<meta\\s+name=["\']breadcrumbs(?:-base|-from-url)?["\'][^>]*>\\s*~i', '', $html) ?? $html;

    $html = preg_replace_callback(
        '~<header\\b([^>]*\\bclass=["\'])([^"\']*)(["\'][^>]*)>~i',
        static function (array $m): string {
            $classes = preg_replace('~\\b(?:local-nav|has-breadcrumbs)\\b~', '', $m[2]) ?? $m[2];
            $classes = trim(preg_replace('~\\s+~', ' ', $classes) ?? $classes);

            return '<header' . $m[1] . $classes . $m[3] . '>';
        },
        $html,
        1
    ) ?? $html;

    return $html;
}

/** Expand PHP snippets left in index.php when the header is read from disk (not executed). */
function cw_expand_header_php_snippets(string $html): string
{
    $html = preg_replace_callback(
        '~<\?php\s+echo\s+htmlspecialchars\s*\(\s*CW_BASE_URL\s*\.\s*([\'"])([^\'"]*)\1\s*,\s*ENT_QUOTES,\s*\'UTF-8\'\s*\)\s*;\s*\?>~i',
        static function (array $m): string {
            return htmlspecialchars(cw_localize_nav_href($m[2]), ENT_QUOTES, 'UTF-8');
        },
        $html
    ) ?? $html;

    return preg_replace(
        '~<\?php\s+echo\s+CW_BASE_URL\s*;\s*\?>~i',
        htmlspecialchars(cw_site_base(), ENT_QUOTES, 'UTF-8'),
        $html
    ) ?? $html;
}

/** Fix Learn link corrupted when /learn/ inside raw PHP was rewritten by asset URL rules. */
function cw_sanitize_header_markup(string $header): string
{
    $learnUrl = cw_learn_page_url();

    $header = preg_replace(
        '~href="<\?php echo htmlspecialchars\(CW_BASE_URL \. \'[^\']*learn/[^\']*\', ENT_QUOTES, \'UTF-8\'\); \?>"~i',
        'href="' . $learnUrl . '"',
        $header
    ) ?? $header;

    return preg_replace(
        '~href="<\?php echo htmlspecialchars\(CW_BASE_URL \. ([\'"])([^\'"]+)\1, ENT_QUOTES, \'UTF-8\'\); \?>"~i',
        'href="' . $learnUrl . '"',
        $header
    ) ?? $header;
}

/** Cached homepage <header class="global-navigation">…</header> for reuse on all pages. */
function cw_homepage_global_header_html(): string
{
    static $header = null;
    static $cacheKey = null;
    $key = 'gnav-v8';
    if ($header !== null && $cacheKey === $key) {
        return $header;
    }
    $cacheKey = $key;

    $path = dirname(__DIR__) . '/index.php';
    if (!is_file($path)) {
        $header = '';

        return $header;
    }

    $raw = (string) file_get_contents($path);
    $body = preg_replace('/^<\?php.*?\?>\s*/s', '', $raw, 1) ?? $raw;
    if (preg_match('/(<header\\b[^>]*\\bglobal-navigation\\b[^>]*>.*?<\\/header>)/is', $body, $m) === 1) {
        $header = cw_expand_header_php_snippets($m[1]);
        $header = cw_sanitize_header_markup($header);
        $header = cw_localize_header_fragment($header);
        $header = cw_customize_homepage_header_fragment($header);
        if (!str_contains($header, 'data-cw-homepage-gnav="1"')) {
            $header = preg_replace(
                '/(<header\\b)/i',
                '$1 data-cw-homepage-gnav="1" data-cw-static-gnav="1" data-block-status="loaded"',
                $header,
                1
            ) ?? $header;
        } elseif (!str_contains($header, 'data-cw-static-gnav="1"')) {
            $header = preg_replace(
                '/(<header\\b[^>]*\\bdata-cw-homepage-gnav="1")/i',
                '$1 data-cw-static-gnav="1" data-block-status="loaded"',
                $header,
                1
            ) ?? $header;
        }
    } else {
        $header = '';
    }

    return $header;
}

/** Localize hrefs inside a header fragment (used when caching homepage gnav). */
function cw_localize_header_fragment(string $header): string
{
    return preg_replace_callback(
        '/\\bhref=(["\'])([^"\']+)\\1/i',
        static function (array $match): string {
            $q = $match[1];
            $local = cw_localize_nav_href($match[2]);

            return 'href=' . $q . $local . $q;
        },
        $header
    ) ?? $header;
}

/** Cached homepage footer (trimmed) for reuse on inner pages. */
function cw_homepage_global_footer_html(): string
{
    static $footer = null;
    if ($footer !== null) {
        return $footer;
    }

    $path = dirname(__DIR__) . '/index.php';
    if (!is_file($path)) {
        $footer = '';

        return $footer;
    }

    $raw = (string) file_get_contents($path);
    $body = preg_replace('/^<\?php.*?\?>\s*/s', '', $raw, 1) ?? $raw;
    if (preg_match('/(<footer\\b[^>]*\\bglobal-footer\\b[^>]*>.*?<\\/footer>)/is', $body, $m) !== 1) {
        $footer = '';

        return $footer;
    }

    $footer = cw_cleanup_footer_markup(cw_strip_footer_nav_links($m[1]));

    return $footer;
}

/** Footer social icons → generic platform homepages (not Adobe profiles). */
function cw_normalize_footer_social_links(string $html): string
{
    $map = [
        '~(<ul\\s+class="feds-social"[^>]*>[\\s\\S]*?href=["\'])https?://(?:www\\.)?facebook\\.com/[^"\']*(["\'])~i'
            => '$1https://www.facebook.com/$2',
        '~(<ul\\s+class="feds-social"[^>]*>[\\s\\S]*?href=["\'])https?://(?:www\\.)?instagram\\.com/[^"\']*(["\'])~i'
            => '$1https://www.instagram.com/$2',
        '~(<ul\\s+class="feds-social"[^>]*>[\\s\\S]*?href=["\'])https?://(?:www\\.)?(?:twitter|x)\\.com/[^"\']*(["\'])~i'
            => '$1https://www.twitter.com/$2',
        '~(<ul\\s+class="feds-social"[^>]*>[\\s\\S]*?href=["\'])https?://(?:www\\.)?linkedin\\.com/[^"\']*(["\'])~i'
            => '$1https://www.linkedin.com/$2',
    ];

    foreach ($map as $pattern => $replacement) {
        $html = preg_replace($pattern, $replacement, $html) ?? $html;
    }

    return $html;
}

/** Remove footer sections/columns that should stay hidden in the offline mirror. */
function cw_cleanup_footer_markup(string $footer): string
{
    $footer = preg_replace(
        '~<div class="feds-featuredProducts">.*?</div>\s*(?=<div class="feds-footer-options")~is',
        '',
        $footer
    ) ?? $footer;

    $footer = preg_replace(
        '~<div class="feds-menu-column">\s*<div class="feds-menu-section">'
        . '(?:\s*<div class="feds-menu-headline"[^>]*>\s*For medium[^<]*</div>\s*)?'
        . '<div class="feds-menu-items" daa-lh="For medium large business">.*?</div>\s*</div>\s*</div>~is',
        '',
        $footer
    ) ?? $footer;

    $footer = preg_replace_callback(
        '~<div class="feds-menu-column">(.*?)</div>\s*(?=<div class="feds-menu-column"|</div>\s*<div class="feds-footer-options")~is',
        static function (array $match): string {
            return preg_match('~<li\b~i', $match[1]) === 1 ? $match[0] : '';
        },
        $footer
    ) ?? $footer;

    $footer = preg_replace(
        '~<div class="feds-regionPicker-wrapper">[\s\S]*?</div>\s*~i',
        '',
        $footer
    ) ?? $footer;

    return cw_normalize_footer_social_links($footer);
}

/** Homepage only: keep trimmed footer. All other pages: remove footer markup and block Milo footer load. */
function cw_apply_homepage_footer(string $html): string
{
    if (cw_is_homepage_request()) {
        if (preg_match('/<footer\\b[^>]*\\bglobal-footer\\b[^>]*>/i', $html) === 1
            && !str_contains($html, 'data-cw-footer-static')) {
            $html = preg_replace(
                '/(<footer\\b[^>]*\\bglobal-footer\\b)/i',
                '$1 data-cw-footer-static="1" data-block-status="loaded"',
                $html,
                1
            ) ?? $html;
        }

        return $html;
    }

    if (!preg_match('/<meta\\s+name=["\']footer["\']\\s+content=["\']off["\']/i', $html)) {
        if (preg_match('/<meta\\s+name=["\']footer["\'][^>]*>/i', $html)) {
            $html = preg_replace('/<meta\\s+name=["\']footer["\'][^>]*>/i', '<meta name="footer" content="off">', $html, 1) ?? $html;
        } else {
            $html = preg_replace('/<head([^>]*)>/i', '<head$1><meta name="footer" content="off">', $html, 1) ?? $html;
        }
    }

    $patterns = [
        // Photography-style SSR: empty <footer></footer>, icons sprite, then wrapper closed by stray </footer>.
        '/(?:<footer\\b[^>]*>\\s*<\\/footer>\\s*)?<div\\s+class="feds-footer-icons\\b[^>]*>.*?<\\/div>\\s*<div\\s+class="feds-footer-wrapper\\b[^>]*>.*?<\\/div>\\s*<\\/footer>/is',
        '/<footer\\b[^>]*>.*?<\\/footer>(?:\\s*<div class="feds-footer-icons\\b[^>]*>.*?<\\/div>\\s*)?/is',
        '/<div\\s+class="feds-footer-wrapper\\b[^>]*>.*?<\\/div>\\s*(?=<\\/footer>|<noscript|<div\\b[^>]*\\bnotification|<\\/body>)/is',
        '/<div class="feds-footer-icons\\b[^>]*>.*?<\\/div>\\s*(?=<\\/body>)/is',
        '/<\\/footer>\\s*(?=<noscript|<div\\b[^>]*\\bnotification|<\\/body>)/is',
    ];
    foreach ($patterns as $pattern) {
        $html = preg_replace($pattern, '', $html) ?? $html;
    }

    return $html;
}

/** True when the page already has a Milo global-navigation header element. */
function cw_has_global_navigation_header(string $html): bool
{
    return preg_match('/<header\\b[^>]*\\bglobal-navigation\\b/i', $html) === 1;
}

/** Apply homepage popup customizations to a header fragment. */
function cw_customize_homepage_header_fragment(string $header): string
{
    $wrapped = '<!DOCTYPE html><html><body>' . $header . '</body></html>';
    $wrapped = cw_apply_canonical_nav_popups($wrapped);
    $wrapped = cw_customize_learn_support_nav($wrapped);
    $wrapped = cw_strip_sign_in_from_header($wrapped);
    $wrapped = preg_replace('~\\s*data-path="[^"]*"~i', '', $wrapped) ?? $wrapped;

    if (preg_match('/(<header\\b[^>]*\\bglobal-navigation\\b[^>]*>.*?<\\/header>)/is', $wrapped, $m) === 1) {
        return $m[1];
    }

    return $header;
}

/** Re-sanitize global nav header after late URL rewrites (e.g. broken PHP Learn href). */
function cw_finalize_global_header_nav(string $html): string
{
    if (!preg_match('/(<header\\b[^>]*\\bglobal-navigation\\b[^>]*>.*?<\\/header>)/is', $html, $m)) {
        return $html;
    }

    $fixed = cw_sanitize_header_markup($m[1]);
    $fixed = cw_apply_canonical_nav_popups($fixed);

    if ($fixed === $m[1]) {
        return $html;
    }

    return substr_replace($html, $fixed, (int) strpos($html, $m[1]), strlen($m[1]));
}

/** Replace per-page nav chrome with the homepage header (same top nav + popups everywhere). */
function cw_apply_homepage_header_nav(string $html): string
{
    $homeHeader = cw_homepage_global_header_html();
    if ($homeHeader === '') {
        return $html;
    }

    if (cw_has_global_navigation_header($html)) {
        $html = preg_replace(
            '/<header\\b[^>]*\\bglobal-navigation\\b[^>]*>.*?<\\/header>/is',
            cw_sanitize_header_markup($homeHeader),
            $html,
            1
        ) ?? $html;

        $html = preg_replace(
            '/<\\/header>\\s*<div\\b[^>]*\\bfeds-localnav\\b.*<\\/div>\\s*(?=<main\\b)/is',
            '</header>',
            $html,
            1
        ) ?? $html;
    } elseif (!str_contains($html, 'data-cw-homepage-gnav="1"')) {
        $html = preg_replace(
            '/(<body\\b)((?:\\s+[^>]*)?)(>)/i',
            '$1$2 class="cw-has-homepage-gnav"$3' . $homeHeader,
            $html,
            1
        ) ?? $html;
    }

    return $html;
}

/** Remove Sign in / profile controls from global navigation (offline mirror). */
function cw_strip_sign_in_from_header(string $html): string
{
    $html = preg_replace(
        '/<meta\\s+name=["\']universal-nav["\']\\s+content=["\'][^"\']*\\bprofile\\b[^"\']*["\'][^>]*>/i',
        '<meta name="universal-nav" content="appswitcher,notifications,cart">',
        $html
    ) ?? $html;

    $patterns = [
        '~<div\\s+class="unav-comp-profile\\b[^>]*>.*?</div>\\s*~is',
        '~<button\\b[^>]*\\bdata-test-id=["\']unav-profile--sign-in["\'][^>]*>.*?</button>~is',
        '~<button\\b[^>]*\\bclass=["\'][^"\']*\\bfeds-signIn\\b[^"\']*["\'][^>]*>.*?</button>~is',
        '~<div\\b[^>]*\\bclass=["\'][^"\']*\\bfeds-signIn-dropdown\\b[^"\']*["\'][^>]*>.*?</div>\\s*~is',
        '~<a\\b[^>]*\\bclass=["\'][^"\']*\\bfeds-signIn\\b[^"\']*["\'][^>]*>.*?</a>~is',
    ];
    foreach ($patterns as $pattern) {
        $html = preg_replace($pattern, '', $html) ?? $html;
    }

    return $html;
}

/** Rewrite header nav hrefs to local paths (all pages). */
function cw_localize_header_nav(string $html): string
{
    if (!preg_match('/(<header\\b[^>]*\\bglobal-navigation\\b[^>]*>.*?<\\/header>)/is', $html, $m)) {
        return $html;
    }

    $header = cw_localize_header_fragment($m[1]);

    return substr_replace($html, $header, (int) strpos($html, $m[1]), strlen($m[1]));
}

/** @deprecated Use cw_localize_header_nav() */
function cw_localize_homepage_header_nav(string $html): string
{
    return cw_localize_header_nav($html);
}

function cw_is_homepage_request(): bool
{
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($uri, PHP_URL_PATH);
    if (!is_string($path) || $path === '') {
        $path = '/';
    }

    $path = cw_normalize_request_path($path);

    return $path === '/' || $path === '/index.php';
}

/** Footer / nav link labels to hide on the offline mirror. */
function cw_footer_nav_labels_to_remove(): array
{
    return [
        'Design and illustration',
        'Video and animation',
        'PDF',
        '3D',
        'Elements Family',
        'Stock images and video',
        'Personalization at scale',
        'Content supply chain',
        'Unified customer experience',
        'Creativity and production',
        'B2B GTM orchestration',
        'Help Center',
        'Download and install',
        'Medium and large business supp',
        'Request information',
        'Log into your account',
        'Newsroom',
        'Adobe Blog',
        'Events',
        'Corporate responsibility',
        'Investor Relations',
        'Supply chain',
        'Trust Center',
        'Integrity',
        'Adobe for All',
        'Government',
    ];
}

/** Remove specific footer list items by link text or daa-ll label. */
function cw_strip_footer_nav_links(string $html): string
{
    $labels = cw_footer_nav_labels_to_remove();
    $stripLi = static function (string $block) use ($labels): string {
        return preg_replace_callback(
            '/<li\b[^>]*>.*?<\/li>/is',
            static function (array $match) use ($labels): string {
                $item = $match[0];
                foreach ($labels as $label) {
                    if (preg_match('~daa-ll=["\'][^"\']*' . preg_quote($label, '~') . '~i', $item)) {
                        return '';
                    }
                    if (preg_match('~>\s*' . preg_quote($label, '~') . '\s*</a>~i', $item)) {
                        return '';
                    }
                }

                return $item;
            },
            $block
        ) ?? $block;
    };

    if (!preg_match('/(<footer\b.*?<\/footer>)/is', $html, $m)) {
        return $html;
    }

    $footer = cw_cleanup_footer_markup($stripLi($m[1]));

    return substr_replace($html, $footer, (int) strpos($html, $m[1]), strlen($m[1]));
}

/** Disable the homepage "Adobe for Business" pod link (keep visible copy). */
function cw_disable_adobe_for_business_link(string $html): string
{
    if (!cw_is_homepage_request()) {
        return $html;
    }

    return preg_replace(
        '~<a\\b([^>]*)\\bhref=(["\'])https?://business\\.adobe\\.com/?\\2([^>]*)>'
        . '(\\s*<div\\s+class=["\']body-m["\']>\\s*<p\\s+class=["\']detail-l["\']>ADOBE FOR BUSINESS</p>.*?</div>)\\s*</a>~is',
        '<div class="foreground" role="group" aria-label="Adobe for Business"$3>$4</div>',
        $html,
        1
    ) ?? $html;
}

/** Remove external links from the homepage "In the news" block (keep titles and copy). */
function cw_strip_in_the_news_links(string $html): string
{
    if (!cw_is_homepage_request()) {
        return $html;
    }

    if (!preg_match('~(<h2\\s+id="in-the-news"[^>]*>.*?</div>\\s*</div>\\s*</div>)~is', $html, $m)) {
        return $html;
    }

    $block = preg_replace(
        '~<a\\b[^>]*\\bhref=(["\'])https?://[^"\']+\\1[^>]*>(.*?)</a>~is',
        '$2',
        $m[0]
    ) ?? $m[0];

    return substr_replace($html, $block, (int) strpos($html, $m[0]), strlen($m[0]));
}

/** Hide selected footer nav items by label (mirrors assets/css/custom.css). */
function cw_strip_footer_external_links(string $html): string
{
    return cw_strip_footer_nav_links($html);
}

/** Classic (non-module) JS stub for missing script files. */
function cw_classic_js_stub(string $path): string
{
    if (str_contains($path, 'imslib')) {
        return "window.adobeIMS=window.adobeIMS||{isSignedInUser:function(){return false;},validateToken:function(){return Promise.resolve();},adobeIdData:{}};\n";
    }
    if (str_contains($path, 'marketingtech') || str_contains($path, '/RC')) {
        return "window._satellite=window._satellite||{};window.marketingtech=window.marketingtech||{adobe:{launch:true}};\n";
    }

    return "/* offline mirror stub */\n";
}

/** ES module stub for block scripts loaded via import(). */
function cw_module_js_stub(): string
{
    return "export default async function init(el){if(el&&el.dataset)el.dataset.blockStatus='loaded';}\n";
}

/** Offline global-navigation block: keep server HTML popups, never fetch gnav fragments. */
function cw_gnav_offline_js_stub(): string
{
    $base = json_encode(cw_site_base(), JSON_UNESCAPED_SLASHES);

    return 'export default async function init(block){'
        . 'if(!block)return;'
        . 'var b=' . $base . ';'
        . 'block.classList.add("ready");'
        . 'block.classList.remove("gnav-hide","local-nav","has-breadcrumbs");'
        . 'block.dataset.blockStatus="loaded";'
        . 'block.dataset.cwStaticGnav="1";'
        . 'function popHtml(d){var lis=d.links.map(function(l){'
        . 'return"<li><a href=\\""+l.href+"\\" class=\\"feds-navLink\\" daa-ll=\\""+l.ll+"\\">"+l.text+"</a></li>";}).join("");'
        . 'return"<div class=\\"feds-popup\\" data-cw-canonical-popup=\\"1\\"><div class=\\"feds-menu-container\\">'
        . '<div class=\\"feds-menu-content\\"><div class=\\"feds-menu-column\\"><div class=\\"feds-menu-section\\">'
        . '<div class=\\"feds-menu-headline\\" role=\\"heading\\" aria-level=\\"2\\">"+d.headline+"</div>'
        . '<div class=\\"feds-menu-items\\" daa-lh=\\""+d.menuLh+"\\"><ul>"+lis+"</ul></div>'
        . '</div></div></div></div></div>";}'
        . 'function lockPopups(){'
        . 'var defs={"Creativity Design":{headline:"Shop for",menuLh:"Shop for",links:[{href:b+"/products/firefly/",text:"Creative AI",ll:"Creative AI-1"},{href:b+"/creativecloud/photography/apps/",text:"Photography",ll:"Photography-2"}]},'
        . '"PDF E signatures":{headline:"Products",menuLh:"Products",links:[{href:b+"/acrobat/",text:"Adobe Acrobat",ll:"Adobe Acrobat-1"},{href:b+"/acrobat/acrobat-studio/",text:"Adobe Acrobat Studio",ll:"Adobe Acrobat Studio-2"}]}};'
        . 'Object.keys(defs).forEach(function(label){var sec=block.querySelector(".feds-navItem--megaMenu[daa-lh=\\""+label+"\\"]");'
        . 'if(!sec)return;var btn=sec.querySelector(":scope>.feds-navLink--hoverCaret");var old=sec.querySelector(".feds-popup");if(old)old.remove();'
        . 'if(btn)btn.insertAdjacentHTML("afterend",popHtml(defs[label]));});'
        . 'var mc=block.querySelector(".feds-navItem--megaMenu[daa-lh=\\"Marketing Commerce\\"]");if(mc)mc.remove();'
        . 'block.querySelectorAll("[data-path]").forEach(function(el){el.removeAttribute("data-path");});}'
        . 'lockPopups();'
        . 'if(!block.__cwGnavObs){block.__cwGnavObs=1;new MutationObserver(lockPopups).observe(block,{childList:1,subtree:1});}'
        . '[50,300,800,1500,3000].forEach(function(ms){setTimeout(lockPopups,ms);});'
        . '}\n';
}

function cw_router_js_stub(string $path): string
{
    if (str_contains($path, 'dcLana.js')) {
        return "export default function lanaLogging(){};export{lanaLogging};\n";
    }
    if (preg_match('~/(?:libs|upp)/blocks/global-navigation/global-navigation\\.js$~', $path) === 1) {
        return cw_gnav_offline_js_stub();
    }
    if (preg_match('~/(?:upp|libs|acrobat|creativecloud)/(?:blocks|scripts)/[^/]+\\.js$~', $path) === 1
        && !str_ends_with($path, '.min.js')) {
        return cw_module_js_stub();
    }

    return cw_classic_js_stub($path);
}
