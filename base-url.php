<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/cw-php-polyfill.php';
require_once __DIR__ . '/includes/cw-offline-strip.php';
require_once __DIR__ . '/includes/cw-home-template.php';
require_once __DIR__ . '/includes/cw-asset-resolve.php';
require_once __DIR__ . '/includes/cw-sanitize-html.php';

/**
 * URL path prefix for this install (e.g. "/samsung-clon" locally, "" at domain docroot).
 */
function cw_install_base_path(): string
{
    static $path = null;
    if ($path !== null) {
        return $path;
    }

    $override = getenv('CW_BASE_PATH');
    if (is_string($override)) {
        if ($override === '' || $override === '/') {
            $path = '';
        } else {
            $path = str_starts_with($override, '/') ? $override : '/' . $override;
        }
        return $path;
    }

    $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
    if ($docRoot !== '') {
        $root = realpath($docRoot);
        $here = realpath(__DIR__);
        if ($root !== false && $here !== false && $root === $here) {
            $path = '';
            return $path;
        }
    }

    $folder = basename(__DIR__);
    if (in_array($folder, ['public_html', 'www', 'httpdocs', 'htdocs', 'html', 'web'], true)) {
        $path = '';
        return $path;
    }

    $path = '/' . $folder;
    return $path;
}

/** Strip install prefix and legacy /public_html from a request path. */
function cw_normalize_request_path(string $path): string
{
    $base = cw_install_base_path();
    if ($base !== '') {
        if ($path === $base) {
            $path = '/';
        } elseif (str_starts_with($path, $base . '/')) {
            $path = substr($path, strlen($base));
        }
    }

    if ($path === '/public_html') {
        $path = '/';
    } elseif (str_starts_with($path, '/public_html/')) {
        $path = substr($path, strlen('/public_html'));
        if ($path === '') {
            $path = '/';
        }
    }

    return $path;
}

$baseUrl = 'http://localhost/clon-adobe-website';
if (!defined('CW_BASE_URL')) {
    $override = getenv('CW_BASE_URL');
    if (is_string($override) && $override !== '') {
        $base = $override;
    } elseif (isset($_SERVER['HTTP_HOST'])) {
        $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['SERVER_PORT'] ?? '') === '443');
        $scheme = $isHttps ? 'https' : 'http';
        $host = (string)$_SERVER['HTTP_HOST'];
        $base = $scheme . '://' . $host . cw_install_base_path();
    } else {
        $base = $baseUrl;
    }

    define('CW_BASE_URL', rtrim($base, '/'));
}

function cw_inject_after_head_open(string $html, string $insertion): string
{
    if ($insertion === '') {
        return $html;
    }

    // Must match <head> only — stripos('<head') wrongly hits <header> first.
    if (preg_match('/<head\b[^>]*>/i', $html, $m, PREG_OFFSET_CAPTURE)) {
        $gt = (int) $m[0][1] + strlen($m[0][0]);

        return substr($html, 0, $gt) . $insertion . substr($html, $gt);
    }

    return $html;
}

function cw_rewrite_asset_urls_in_html(string $html): string
{
    $base = CW_BASE_URL;
    // pages/products/catalog/* uses ../../../ which escapes install base — normalize first.
    $html = preg_replace(
        '~\b(href|src|action|content)=(["\'])(?:\.\./)+((?:upp|upp-shared|libs|marketingtech|content|homepage|federal|cc-shared|creativecloud|assets|learn|acrobat|products|etc\.clientlibs)/[^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $requestPath = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($requestPath, PHP_URL_PATH);
    if (!is_string($path) || $path === '') {
        $path = '/';
    }
    $path = cw_normalize_request_path($path);

    $headInsert = '';
    if (!str_contains($html, 'id="cw-offline-boot"')) {
        $headInsert .= '<script id="cw-offline-boot">window.__CW_OFFLINE=true;window.__CW_ASSET_ROOT='
            . json_encode($base)
            . ';document.documentElement.classList.add("cw-offline");'
            . '(function(){function b(){try{document.getElementById("ims-body-style")?.remove();'
            . 'document.body&&(document.body.style.opacity="1",document.body.style.display="block");}catch(e){}}'
            . 'b();document.addEventListener("DOMContentLoaded",b);})();</script>';
    }
    if (!str_contains($html, 'id="cw-gnav-lock"')) {
        $headInsert .= '<script id="cw-gnav-lock">window.__CW_GNAV_LOCK__=1;</script>';
    }
    if (!str_contains($html, 'assets/css/custom.css') && is_file(__DIR__ . '/assets/css/custom.css')) {
        $headInsert .= '<link rel="stylesheet" href="' . $base . '/assets/css/custom.css">';
    }
    if (str_contains($html, 'id="pathString"')) {
        $pathString = $path;
        if ($pathString === '/') {
            $pathString = '/pk/';
        } else {
            if (!str_starts_with($pathString, '/pk/')) {
                $pathString = '/pk' . $pathString;
            }
        }
        if ($pathString !== '/' && !str_ends_with($pathString, '/')) {
            $pathString .= '/';
        }
        $headInsert .= '<script id="cw-set-pathstring">(function(){
            var targetPath = ' . json_encode($pathString) . ';
            var targetPageUrl = ' . json_encode('https://www.samsung.com' . $pathString) . ';
            function setValues(){
                try{
                    var ps = document.getElementById("pathString");
                    if(ps && ps.value !== targetPath) ps.value = targetPath;
                    var pu = document.getElementById("pageUrl");
                    if(pu && pu.value !== targetPageUrl) pu.value = targetPageUrl;
                }catch(e){}
            }
            setValues();
            if(document.readyState === "loading"){
                document.addEventListener("DOMContentLoaded", setValues);
            }
            window.addEventListener("load", setValues);
            setInterval(setValues, 100);
        })();</script>';
    }
    if (!str_contains($html, '<base ') && !str_contains($html, 'id="cw-base"')) {
        $headInsert .= '<base id="cw-base" href="' . $base . '/">';
    }
    if (!str_contains($html, 'id="cw-show-body"')) {
        $html = preg_replace(
            '~body\\s*\\{\\s*display:\\s*none\\s*;\\s*\\}~is',
            'body{display:block!important;}',
            $html,
            1
        ) ?? $html;
        if (str_contains($html, 'body{display:block!important;}')) {
            $html = preg_replace(
                '~(<style[^>]*>)~i',
                '$1/* cw-show-body */',
                $html,
                1
            ) ?? $html;
        }
    }
    // Mirrored pages wrongly append "/" after file extensions (styles.css/ → 404).
    $html = preg_replace(
        '~(\\.(?:css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest|xml|pdf|map|mp4|webm))/~i',
        '$1',
        $html
    ) ?? $html;
    if (!str_contains($html, 'cw-offline-shim.js')) {
        $headInsert .= '<script src="' . $base . '/assets/js/cw-offline-shim.js"></script>';
    }
    if (!preg_match('/<link[^>]+rel=["\'](?:shortcut\\s+)?icon["\']/i', $html)) {
        $headInsert .= '<link rel="icon" href="' . $base . '/upp/img/favicons/favicon.ico" id="cw-favicon-anchor">';
    }
    if (!str_contains($html, 'id="cw-asset-root"')) {
        $headInsert .= '<script id="cw-asset-root">window.__CW_ASSET_ROOT=' . json_encode($base) . ';window.__CW_OFFLINE=true;'
            . '(function(){var b=window.__CW_ASSET_ROOT||"";function fix(u){return typeof u==="string"&&u.indexOf("/akam/13/pixel")===0?b+u:u;}'
            . 'var xo=XMLHttpRequest.prototype.open;XMLHttpRequest.prototype.open=function(m,u){return xo.call(this,m,fix(u),arguments[2]!==undefined?arguments[2]:true,arguments[3]!==undefined?arguments[3]:null,arguments[4]!==undefined?arguments[4]:null);};'
            . 'function fixMiloOrigin(u){if(typeof u!=="string")return u;var R=window.__CW_ASSET_ROOT||"";if(!R)return u;try{var o=window.location.origin,m=o+"/.milo/";if(u.indexOf(m)===0)return R+"/.milo/"+u.slice(m.length);if(u===o+"/.milo/config.json")return R+"/.milo/config.json";}catch(e){}return u;}'
            . 'function fixFetch(u){if(typeof u!=="string")return u;var R=window.__CW_ASSET_ROOT||"";u=fixMiloOrigin(u);if(/^\\/(?!\\/)/.test(u)&&R)return R+u;return fix(u);}'
            . 'var f=window.fetch;window.fetch=function(i,n){if(typeof i==="string")i=fixFetch(i);else if(i&&i.url)i=new Request(fixFetch(i.url),i);return f.call(this,i,n);};})();</script>';
    }
    if (!str_contains($html, 'id="cw-ims-stub"')) {
        $headInsert .= '<script id="cw-ims-stub">(function(){var p={displayName:"Guest",email:"",account_type:"ind",country:"US",preferred_languages:["en-us"],tags:[]};var ims={initialized:true,adobeIdData:{client_id:"homepage_milo"},isSignedInUser:function(){return false;},getProfile:function(){return Promise.resolve(p);},getAccessToken:function(){return{token:""};},signIn:function(){},signOut:function(){return Promise.resolve();},ready:function(){return Promise.resolve();}};window.adobeIMS=window.adobeIMS||ims;window.adobeIMSConfig=window.adobeIMSConfig||{};window.addEventListener("getImsLibInstance",function(){window.dispatchEvent(new CustomEvent("onImsLibInstance",{detail:{instance:window.adobeIMS}}));});})();</script>';
    }
    if (!str_contains($html, 'id="cw-satellite-shim"')) {
        $headInsert .= '<script id="cw-satellite-shim">(function(){var fn=function(){};window.lanaLogging=window.lanaLogging||fn;var s=window._satellite=window._satellite||{};for(var i=1;i<=80;i++){s["_runScript"+i]=fn;}s.track=s.track||fn;s.pageBottom=s.pageBottom||fn;s.pageTop=s.pageTop||fn;s.getVar=s.getVar||function(){return "";};s.setVar=s.setVar||fn;s._runScript=fn;var o=s;try{window._satellite=new Proxy(o,{get:function(t,p){if(typeof p==="string"&&/^_(runScript\\d+|runScript)$/.test(p))return fn;return t[p];},set:function(t,p,v){t[p]=v;return true;}});}catch(e){}})();</script>';
    }
    if (!str_contains($html, 'id="cw-stubs"')) {
        $headInsert .= '<script id="cw-stubs">(function(){try{' .
            'var R=window.__CW_ASSET_ROOT||"";' .
            'function blocked(u){if(typeof u!=="string")return false;var x=u.toLowerCase();return/pageinfo$|front\\/b2c\\//i.test(u)||x.indexOf("facebook")!==-1||x.indexOf("googletagmanager")!==-1||x.indexOf("everestjs")!==-1||x.indexOf("everesttech")!==-1||x.indexOf("st.v3")!==-1||x.indexOf("flashtalking")!==-1||x.indexOf("doubleclick")!==-1||x.indexOf("qualtrics")!==-1||x.indexOf("munchkin")!==-1||x.indexOf("pinimg")!==-1||x.indexOf("bat.bing")!==-1||x.indexOf("ispot.tv")!==-1||x.indexOf("useinsider")!==-1||x.indexOf("sprinklr")!==-1||x.indexOf("livechat")!==-1||x.indexOf("media-tagging")!==-1||x.indexOf("smetrics")!==-1||x.indexOf("adobedtm")!==-1||x.indexOf("go-mpulse")!==-1||x.indexOf("decibelinsight")!==-1||x.indexOf("kampyle")!==-1||x.indexOf("beusable")!==-1||x.indexOf("api-recommender")!==-1;}' .
            'var _ce=document.createElement;document.createElement=function(t){var el=_ce.apply(document,arguments);if(t&&String(t).toLowerCase()==="script"){var _as=el.setAttribute;el.setAttribute=function(n,v){if(n==="src"&&blocked(v))return;return _as.call(this,n,v);};var _src=Object.getOwnPropertyDescriptor(HTMLScriptElement.prototype,"src");if(_src&&_src.set){var _ss=_src.set;Object.defineProperty(el,"src",{set:function(v){if(blocked(v))return;return _ss.call(this,v);},get:_src.get,configurable:true});}}return el;};' .
            'function fixRoot(u){if(typeof u!=="string")return u;if(blocked(u))return"about:blank";if(/adobeid|services\\.adobe\\.com\\/ims/i.test(u))return"about:blank";if(/^https?:\\/\\//i.test(u))return u;if(u.indexOf(R)===0)return u;if(/^\\/(?!\\/)/.test(u))return R+u;if(/^(upp|upp-shared|libs|marketingtech|content|homepage|federal|assets|etc\\.clientlibs|acrobat|creativecloud|cc-shared|\\.milo)\\//.test(u))return R+"/"+u;return u;}' .
            'function patchSetter(proto,prop){var d=Object.getOwnPropertyDescriptor(proto,prop);if(!d||!d.set)return;var s=d.set;d.set=function(v){if(prop==="src"&&blocked(v))return;return s.call(this,fixRoot(v));};}' .
            'patchSetter(HTMLImageElement.prototype,"src");patchSetter(HTMLLinkElement.prototype,"href");patchSetter(HTMLScriptElement.prototype,"src");' .
            'var _open=XMLHttpRequest.prototype.open;XMLHttpRequest.prototype.open=function(m,u){if(blocked(u))u="about:blank";else arguments[1]=fixRoot(u);return _open.apply(this,arguments);};' .
            'var emptyJson=function(){return Promise.resolve({ok:true,status:200,json:function(){return Promise.resolve({});},text:function(){return Promise.resolve("{}");}});};' .
            'function fixMiloOrigin(u){if(typeof u!=="string")return u;var R=window.__CW_ASSET_ROOT||"";if(!R)return u;try{var o=window.location.origin,m=o+"/.milo/";if(u.indexOf(m)===0)return R+"/.milo/"+u.slice(m.length);if(u===o+"/.milo/config.json")return R+"/.milo/config.json";}catch(e){}return u;}' .
            'var _fetch=window.fetch;window.fetch=function(i,n){var u=typeof i==="string"?i:(i&&i.url?i.url:"");u=fixMiloOrigin(u);if(blocked(u)||/adobeid|services\\.adobe\\.com\\/ims/i.test(u))return emptyJson();if(typeof i==="string"){i=fixMiloOrigin(fixRoot(i));}else if(i&&i.url){try{i=new Request(fixMiloOrigin(fixRoot(i.url)),i);}catch(e){}}return _fetch.call(this,i,n);};' .
            'window._satellite=window._satellite||{};var _noop=function(){};for(var i=1;i<=80;i++){window._satellite["_runScript"+i]=_noop;}' .
            'window._satellite._runScript=_noop;window._satellite.getVar=window._satellite.getVar||function(){return "";};' .
            'window._satellite.setVar=window._satellite.setVar||function(){};window._satellite.track=window._satellite.track||function(){};window._satellite.pageBottom=function(){};window._satellite.pageTop=function(){};' .
            'window.alloy_all=window.alloy_all||{get:function(){return Promise.resolve("");},set:function(){return Promise.resolve();}};' .
            'window.Munchkin=window.Munchkin||{init:_noop,munchkinFunction:_noop};' .
            'window.fbq=window.fbq||function(){};window.fbq.queue=window.fbq.queue||[];window.fbq.loaded=true;window._fbq=window._fbq||window.fbq;' .
            'window.__beusablerumclient__=window.__beusablerumclient__||{load:function(){}};' .
            'window.dataLayer=window.dataLayer||[];window.gtag=window.gtag||function(){window.dataLayer.push(arguments);};' .
            'window.tagLayer=window.tagLayer||[];window.cj=window.cj||{};window.MODAL_DIALOGS=window.MODAL_DIALOGS||{};window.KAMPYLE_ONSITE_SDK=window.KAMPYLE_ONSITE_SDK||{};' .
            'window.KAMPYLE_UTILS=window.KAMPYLE_UTILS||{setNestedPropertyValue:function(){}};window.KAMPYLE_DATA=window.KAMPYLE_DATA||{};window.KAMPYLE_FUNC=window.KAMPYLE_FUNC||{};window.MDIGITAL=window.MDIGITAL||{};' .
            'window.eddlDataLayer=window.eddlDataLayer||[];window.digitalData=window.digitalData||{};window.siteCode=window.siteCode||"";window.BOOMR=window.BOOMR||{page_ready:function(){}};' .
            'window.setAudienceManagerSegments=window.setAudienceManagerSegments||function(){};' .
            '}catch(e){}})();</script>';
    }
    if (!str_contains($html, 'id="cw-hydrate-media"')) {
        $headInsert .= '<script id="cw-hydrate-media">(function(){function h(){try{' .
            'document.querySelectorAll("img[data-src],img[data-desktop-src],img[data-mobile-src],video[data-src],source[data-src]").forEach(function(el){' .
            '["data-src","data-desktop-src","data-mobile-src"].forEach(function(a){var v=el.getAttribute(a);if(v&&!el.getAttribute("src")){el.setAttribute("src",v);}});' .
            'if(el.tagName==="VIDEO"&&el.getAttribute("data-src")&&!el.getAttribute("src")){el.setAttribute("src",el.getAttribute("data-src"));}' .
            '});' .
            '}catch(e){}}' .
            'if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",h);}else{h();}' .
            'setTimeout(h,400);setTimeout(h,1200);})();</script>';
    }
    $html = preg_replace('~\s+integrity=(["\'])[^"\']*\1~i', '', $html) ?? $html;
    $html = preg_replace(
        '~<iframe[^>]+src=["\']https?://commerce\.adobe\.com/[^"\']*["\'][^>]*></iframe>~i',
        '',
        $html
    ) ?? $html;

    if (!str_contains($html, 'id="cw-shared-chrome"')) {
        $sharedChrome = '';
        foreach (
            [
                '/libs/blocks/global-navigation/global-navigation.css',
                '/libs/blocks/global-navigation/base.css',
                '/libs/blocks/global-navigation/utilities/menu/menu.css',
                '/libs/blocks/global-footer/global-footer.css',
                '/federal/assets/svgs/adobe-logo.svg',
            ] as $sharedPath
        ) {
            if (!is_file(__DIR__ . $sharedPath)) {
                continue;
            }
            if (str_contains($html, $sharedPath)) {
                continue;
            }
            if (str_ends_with($sharedPath, '.css')) {
                $sharedChrome .= '<link rel="stylesheet" href="' . $base . $sharedPath . '">';
            }
        }
        if ($sharedChrome !== '') {
            $headInsert .= '<span id="cw-shared-chrome" style="display:none"></span>' . $sharedChrome;
        }
    }
    if (!str_contains($html, 'id="cw-hide-extras"')) {
        $headInsert .= '<style id="cw-hide-extras">'
            . 'body:not(.cw-homepage) footer.global-footer,body:not(.cw-homepage) .feds-footer-icons,body:not(.cw-homepage) .feds-footer-wrapper{display:none!important;}'
            . 'footer.global-footer{flex-direction:column!important;align-items:stretch!important;}'
            . 'footer.global-footer .feds-footer-wrapper~.feds-footer-wrapper{display:none!important;}'
            . '.feds-utilities,.universal-nav-container,#universal-nav,'
            . '#unav-profile,.unav-comp-profile,.feds-signIn,.feds-signIn-dropdown,'
            . 'header .feds-featuredProducts,'
            . '.brand-concierge,.bc-floating-button,.bc-floating-button-container{display:none!important;}'
            . 'header.global-navigation .feds-menu-section:has([daa-lh="Featured products"]){display:none!important;}'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-promo-wrapper,'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-promo{display:none!important;}'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-popup .feds-menu-content>.feds-menu-column:not(:first-child){display:none!important;}'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-popup .feds-menu-content>.feds-menu-column:first-child .feds-menu-items>ul>li:nth-child(n+3),'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-menu-items>ul>li:has(.feds-cta-wrapper),'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-cta-wrapper{display:none!important;}'
            . '@media (min-width:900px){'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-popup .feds-menu-content{grid-template-columns:1fr!important;max-width:640px!important;}'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-popup .feds-menu-content>.feds-menu-column:first-child .feds-menu-items>ul{'
            . 'display:flex!important;flex-flow:row nowrap!important;gap:32px!important;}'
            . 'header.global-navigation .feds-navItem--megaMenu .feds-popup .feds-menu-content>.feds-menu-column:first-child .feds-menu-items>ul>li{'
            . 'flex:1 1 50%!important;max-width:50%!important;}'
            . '}'
            . 'header.global-navigation,header.global-navigation .feds-topnav-wrapper{overflow:visible!important;}'
            . 'header.global-navigation .feds-popup{z-index:9999!important;}'
            . 'body.cw-has-homepage-gnav{padding-top:64px!important;}'
            . '@media (min-width:900px){'
            . 'header.global-navigation .feds-navItem--megaMenu.feds-dropdown--active>.feds-popup,'
            . 'header.global-navigation .feds-navItem--megaMenu:hover>.feds-popup,'
            . 'header.global-navigation .feds-navItem--megaMenu:focus-within>.feds-popup,'
            . 'header.global-navigation .feds-navLink--hoverCaret[aria-expanded="true"]+.feds-popup{'
            . 'display:flex!important;visibility:visible!important;opacity:1!important;}'
            . '}'
            . '</style>';
    }
    if (!str_contains($html, 'id="cw-footer-offline"')) {
        $headInsert .= '<script id="cw-footer-offline">(function(){function run(){if(!document.body.classList.contains("cw-homepage")){document.querySelectorAll("footer.global-footer,.feds-footer-icons,.feds-footer-wrapper").forEach(function(el){el.remove();});return;}var f=document.querySelector("footer.global-footer");if(!f)return;f.dataset.cwFooterStatic="1";f.dataset.blockStatus="loaded";var w=f.querySelectorAll(".feds-footer-wrapper");for(var i=1;i<w.length;i++)w[i].remove();}if(document.readyState==="loading")document.addEventListener("DOMContentLoaded",run);else run();setTimeout(run,50);setTimeout(run,500);setTimeout(run,2500);})();</script>';
    }
    if (!str_contains($html, 'id="cw-gnav-offline"')) {
        $headInsert .= '<script id="cw-gnav-offline">(function(){var b=' . json_encode($base) . ';function hideLocalNav(){var h=document.querySelector("header.global-navigation");if(!h)return;h.classList.remove("local-nav","has-breadcrumbs");document.querySelectorAll(".feds-localnav,.feds-localnav-wrapper,header .feds-breadcrumbs,header .feds-topnav-aside").forEach(function(el){el.remove();});}function learnLink(){var el=document.querySelector("header .feds-navItem[daa-lh=\\"Learn Support\\"]");if(!el)return;var ok=el.querySelector("a.feds-navLink[href*=\\"/community\\"]")&&!el.classList.contains("feds-navItem--megaMenu");if(ok&&el.querySelector("a.feds-navLink").href.indexOf(b)===0)return;var a=document.createElement("a");a.href=b+"/community/";a.className="feds-navLink";a.setAttribute("daa-ll","Learn Support-4");a.textContent="Learn & Support";el.className="feds-navItem feds-navItem--section";el.removeAttribute("style");el.innerHTML="";el.appendChild(a);}function navPopups(){var h=document.querySelector("header.global-navigation");if(!h||h.dataset.cwNavPopups)return;h.dataset.cwNavPopups="1";var mq=window.matchMedia("(min-width:900px)");function closeAll(){h.querySelectorAll(".feds-dropdown--active").forEach(function(s){s.classList.remove("feds-dropdown--active");});h.querySelectorAll(".feds-navLink--hoverCaret[aria-expanded=\\"true\\"],.feds-menu-headline[aria-expanded=\\"true\\"]").forEach(function(el){el.setAttribute("aria-expanded","false");});}function openNav(section,btn){closeAll();section.classList.add("feds-dropdown--active");if(btn)btn.setAttribute("aria-expanded","true");}h.querySelectorAll(".feds-navItem--megaMenu").forEach(function(section){var btn=section.querySelector(":scope>.feds-navLink--hoverCaret");if(!btn)return;section.addEventListener("mouseenter",function(){if(mq.matches)openNav(section,btn);});section.addEventListener("mouseleave",function(){if(mq.matches)closeAll();});btn.addEventListener("click",function(e){e.preventDefault();var open=section.classList.contains("feds-dropdown--active");closeAll();if(!open)openNav(section,btn);});});h.querySelectorAll(".feds-menu-headline").forEach(function(headline){headline.addEventListener("click",function(e){if(mq.matches)return;e.preventDefault();var open=headline.getAttribute("aria-expanded")==="true";h.querySelectorAll(".feds-menu-headline[aria-expanded=\\"true\\"]").forEach(function(el){el.setAttribute("aria-expanded","false");});if(!open)headline.setAttribute("aria-expanded","true");});});document.addEventListener("click",function(e){if(!e.target.closest("header.global-navigation"))closeAll();});var toggle=h.querySelector(".feds-toggle");var wrap=h.querySelector("#feds-nav-wrapper");if(toggle&&wrap){toggle.addEventListener("click",function(){var exp=toggle.getAttribute("aria-expanded")==="true";toggle.setAttribute("aria-expanded",exp?"false":"true");wrap.classList.toggle("feds-nav-wrapper--expanded",!exp);});}}function stripFragPaths(){var h=document.querySelector("header.global-navigation");if(!h)return;h.querySelectorAll("[data-path]").forEach(function(el){el.removeAttribute("data-path");});}function lockPopups(){var h=document.querySelector("header.global-navigation");if(!h)return;var defs={"Creativity Design":{headline:"Shop for",menuLh:"Shop for",links:[{href:b+"/products/firefly/",text:"Creative AI",ll:"Creative AI-1"},{href:b+"/creativecloud/photography/apps/",text:"Photography",ll:"Photography-2"}]},"PDF E signatures":{headline:"Products",menuLh:"Products",links:[{href:b+"/acrobat/",text:"Adobe Acrobat",ll:"Adobe Acrobat-1"},{href:b+"/acrobat/acrobat-studio/",text:"Adobe Acrobat Studio",ll:"Adobe Acrobat Studio-2"}]}};Object.keys(defs).forEach(function(label){var sec=h.querySelector(".feds-navItem--megaMenu[daa-lh=\\""+label+"\\"]");if(!sec)return;var d=defs[label];var lis=d.links.map(function(l){return"<li><a href=\\""+l.href+"\\" class=\\"feds-navLink\\" daa-ll=\\""+l.ll+"\\">"+l.text+"</a></li>";}).join("");var pop="<div class=\\"feds-popup\\" data-cw-canonical-popup=\\"1\\"><div class=\\"feds-menu-container\\"><div class=\\"feds-menu-content\\"><div class=\\"feds-menu-column\\"><div class=\\"feds-menu-section\\"><div class=\\"feds-menu-headline\\" role=\\"heading\\" aria-level=\\"2\\">"+d.headline+"</div><div class=\\"feds-menu-items\\" daa-lh=\\""+d.menuLh+"\\"><ul>"+lis+"</ul></div></div></div></div></div></div>";var old=sec.querySelector(".feds-popup");if(old)old.remove();var btn=sec.querySelector(":scope>.feds-navLink--hoverCaret");if(btn)btn.insertAdjacentHTML("afterend",pop);});var mc=h.querySelector(".feds-navItem--megaMenu[daa-lh=\\"Marketing Commerce\\"]");if(mc)mc.remove();}function r(){var h=document.querySelector("header.global-navigation");if(!h||!h.querySelector(".feds-topnav,.feds-nav"))return;h.classList.add("ready");h.classList.remove("gnav-hide");h.style.setProperty("visibility","visible","important");h.style.setProperty("opacity","1","important");var n=h.querySelector(".feds-nav-wrapper");if(n&&window.matchMedia("(min-width:900px)").matches)n.style.setProperty("display","flex","important");hideLocalNav();stripFragPaths();lockPopups();learnLink();document.querySelectorAll("#unav-profile,.unav-comp-profile,.feds-signIn,.feds-signIn-dropdown,[data-test-id=\\"unav-profile--sign-in\\"]").forEach(function(el){el.remove();});var logo=document.querySelector("header.global-navigation a.feds-brand");if(logo&&b)logo.href=b+"/";navPopups();}if(document.readyState==="loading")document.addEventListener("DOMContentLoaded",r);else r();setTimeout(r,50);setTimeout(r,500);setTimeout(r,1500);setTimeout(hideLocalNav,2000);setTimeout(lockPopups,50);setTimeout(lockPopups,500);setTimeout(lockPopups,1200);setTimeout(lockPopups,2500);setTimeout(learnLink,1200);})();</script>';
    }
    if (!str_contains($html, 'id="cw-hide-cookie"')) {
        $headInsert .= '<style id="cw-hide-cookie">' .
            '.cookie-bar,.cookie-bar *{display:none!important;}' .
            '#onetrust-consent-sdk,.ot-sdk-container,.ot-sdk-row,#ot-sdk-btn,.ot-floating-button{display:none!important;}' .
            '.truste-overlay,.truste-box-overlay,.truste-consent-track,.truste-popup-container{display:none!important;}' .
            '</style>' .
            '<script id="cw-hide-cookie-js">(function(){function r(){try{' .
            'var s=[".cookie-bar","#onetrust-consent-sdk",".ot-sdk-container",".truste-overlay",".truste-box-overlay",".truste-popup-container"];' .
            'for(var i=0;i<s.length;i++){var n=document.querySelectorAll(s[i]);for(var j=0;j<n.length;j++){n[j].remove();}}' .
            '}catch(e){}}' .
            'if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",r);}else{r();}' .
            'setTimeout(r,250);setTimeout(r,1000);})();</script>';
    }
    if (!str_contains($html, 'id="cw-fix-adobe"')) {
        $headInsert .= '<script id="cw-fix-adobe">(function(){var b=' . json_encode($base) . ';function u(v){if(!v||typeof v!=="string")return v;var t=v.trim();var mm=t.match(/^\\/media_([^?#]+)$/i);if(mm)return b+"/assets/images/media_"+mm[1];var m=t.match(/^(https?:)?\\/\\/(?:www\\.)?adobe\\.com\\/([^?#]+?)(?:\\.html)?\\/?$/i);if(m){var p=m[2];return b+"/"+p+(p?"/":"");}if(t.indexOf("assets/www.adobe.com/")!==-1)return t.replace(/\\/?assets\\/www\\.adobe\\.com\\//,b+"/");if(t.charAt(0)==="/"&&t.indexOf("/media_")>0)return b+t;return v;}function f(e){if(!e||!e.getAttribute)return;["href","src","srcset","action"].forEach(function(k){var v=e.getAttribute(k);if(!v)return;var nv=u(v);if(nv!==v)e.setAttribute(k,nv);});}function s(){document.querySelectorAll("[href],[src],[srcset],[action]").forEach(f);}if(document.readyState==="loading")document.addEventListener("DOMContentLoaded",s);else s();setTimeout(s,600);setTimeout(s,2000);})();</script>';
    }
    if ($headInsert !== '') {
        $html = cw_inject_after_head_open($html, $headInsert);
    }

    $html = cw_strip_offline_breaking_assets($html);

    $homePath = cw_normalize_request_path(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
    if ($homePath === '/' || $homePath === '/index.php') {
        $html = preg_replace('/<body>/i', '<body class="cw-homepage">', $html, 1) ?? $html;
    }
    if (str_starts_with($homePath, '/learn')) {
        $html = preg_replace('~<style id="alloy-prehiding">.*?</style>~is', '', $html) ?? $html;
        $html = preg_replace(
            '~\b(href|src|srcset|as)=(["\'])/learn/~i',
            '$1=$2' . $base . '/learn/',
            $html
        ) ?? $html;
        // Gatsby pagePath must stay "/learn/" (not the full localhost base URL).
        $html = preg_replace(
            '~window\.pagePath\s*=\s*["\']https?://[^"\']*(/learn/?)["\']~i',
            'window.pagePath = "$1"',
            $html
        ) ?? $html;
        $html = preg_replace(
            '~window\.pagePath\s*=\s*["\']' . preg_quote($base, '~') . '(/learn/?)["\']~i',
            'window.pagePath = "$1"',
            $html
        ) ?? $html;
        if (!str_contains($html, 'id="cw-learn-visible"')) {
            $html = cw_inject_after_head_open(
                $html,
                '<style id="cw-learn-visible">body,.personalization-container{opacity:1!important;animation:none!important;}</style>'
            );
        }
        if (!str_contains($html, 'id="cw-learn-router-fix"')) {
            $installSeg = trim(cw_install_base_path(), '/');
            $html = cw_inject_after_head_open(
                $html,
                '<script id="cw-learn-router-fix">(function(){var seg=' . json_encode($installSeg) . ';'
                . 'var basePath=' . json_encode(cw_install_base_path()) . ';if(!seg)return;'
                . 'function stripPath(p){var pre="/"+seg;if(p.indexOf(pre+"/")===0)return p.slice(pre.length);'
                . 'if(p===pre||p===pre+"/")return"/";return p;}'
                . 'function withBase(u){if(typeof u!=="string"||!u)return u;try{var o=new URL(u,location.href);'
                . 'if(o.origin!==location.origin)return u;var p=o.pathname;'
                . 'if(basePath&&(p.indexOf(basePath+"/")===0||p===basePath))return u;'
                . 'if(p==="/learn"||p.indexOf("/learn/")===0||/^\\/[^/]+\\/learn(\\/|$)/.test(p)){'
                . 'o.pathname=(basePath||"")+(p.charAt(0)==="/"?p:"/"+p);return o.toString();}}catch(e){}'
                . 'if(u.charAt(0)==="/"&&(!basePath||u.indexOf(basePath)!==0)'
                . '&&(u.indexOf("/learn")===0||/^\\/[^/]+\\/learn/.test(u)))return(basePath||"")+u;return u;}'
                . 'var os=String.prototype.split;String.prototype.split=function(sep,lim){'
                . 'if(this===window.location.pathname&&(sep==="/"||sep==="/learn"||sep==="/learn/")){'
                . 'var sp=stripPath(String(this));return os.call(sp,sep,lim);}'
                . 'return os.call(this,sep,lim);};'
                . 'var lr=location.replace.bind(location);location.replace=function(u){return lr(withBase(u));};'
                . 'var la=location.assign.bind(location);location.assign=function(u){return la(withBase(u));};'
                . 'var ps=history.pushState.bind(history);history.pushState=function(s,t,u){return ps(s,t,u==null?u:withBase(u));};'
                . 'var rs=history.replaceState.bind(history);history.replaceState=function(s,t,u){return rs(s,t,u==null?u:withBase(u));};'
                . 'var pp=window.pagePath;if(typeof pp==="string"&&pp.indexOf("http")===0){'
                . 'var m=pp.match(/\\/learn\\/?.*/);window.pagePath=m?m[0]:"/learn/";}})();</script>'
            );
        }
        if (!str_contains($html, 'global-navigation')) {
            $homeHeader = cw_homepage_global_header_html();
            if ($homeHeader !== '') {
                $html = preg_replace('/(<body[^>]*>)/i', '$1' . $homeHeader, $html, 1) ?? $html;
            }
        }
    }

    $html = preg_replace(
        '~<script\b[^>]*\bsrc=(["\'])(?://|https?://)?maps\.googleapis\.com[^>]*>\s*</script>~is',
        '',
        $html
    ) ?? $html;

    if (str_contains($html, $base)) {
        $html = str_replace($base, $base, $html);
    }
    $html = preg_replace(
        '~\b(href|src|action)=(["\'])(?:https?:)?//www\.adobe\.com/([^"\']+?)\.html\2~i',
        '$1=$2' . $base . '/$3/$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src|action)=(["\'])(?:https?:)?//www\.adobe\.com/([^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\bcontent=(["\'])(?:https?:)?//www\.adobe\.com/((?:upp|libs|cc-shared|homepage|federal|content|marketingtech|creativecloud|etc\.clientlibs)/[^"\']+)\1~i',
        'content=$1' . $base . '/$2$1',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~https?://www\.adobe\.com/((?:upp|libs|cc-shared|homepage|federal|content|marketingtech|creativecloud|etc\.clientlibs|akam)/[^\s"\'<>]+)~i',
        $base . '/$1',
        $html
    ) ?? $html;
    $html = preg_replace(
        "~from\\s+['\"]/(creativecloud|acrobat|libs|upp|etc\\.clientlibs)/~i",
        "from '" . $base . '/$1/',
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        "~import\\s+(\\{[^}]+\\})\\s+from\\s+['\"]/([^'\"]+)['\"]~i",
        static function (array $m) use ($base): string {
            return 'import ' . $m[1] . " from '" . $base . '/' . $m[2] . "'";
        },
        $html
    ) ?? $html;
    $html = preg_replace(
        "~import\\(\\s*['\"]/([^'\"]+)['\"]\\s*\\)~i",
        "import('" . $base . '/$1\')',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src)=(["\'])/(creativecloud|acrobat|libs|upp|etc\.clientlibs|marketingtech|federal|homepage|cc-shared)/~i',
        '$1=$2' . $base . '/$3/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src|action|content)=(["\'])(?:https?:)?//prod\.adobeccstatic\.com/[^"\']+\2~i',
        '',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src|action)=(["\'])assets/www\.adobe\.com/~i',
        '$1=$2' . $base . '/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~(?<=["\'(])assets/www\.adobe\.com/~i',
        $base . '/',
        $html
    ) ?? $html;
    // Do not rewrite JS string concat (e.g. b+"/learn/") or Gatsby pagePath="…" — (?<![+=]) skips = and +.
    $html = preg_replace(
        '~(?<![+=])(["\'(])/(upp|upp-shared|libs|marketingtech|content|homepage|federal|etc\.clientlibs|cc-shared|creativecloud|assets|learn|acrobat)/~',
        '$1' . $base . '/$2/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~(?<![+])(["\'(])(?:\.\./)+((?:upp|upp-shared|libs|marketingtech|content|homepage|federal|cc-shared|creativecloud|assets|learn|acrobat|etc\.clientlibs))/~',
        '$1' . $base . '/$2/',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src|srcset|content)=(["\'])(federal/[^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\bcontent=(["\'])(creativecloud/media_[^"\']+)\1~i',
        'content=$1' . $base . '/$2$1',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b(href|src|srcset)=(["\'])/(media_[^"\']+\.(?:png|jpe?g|webp|gif|svg))(?:\?[^"\']*)?\2~i',
        '$1=$2' . $base . '/assets/images/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~\b(href|src|srcset)=(["\'])(/[^"\']*/media_[^"\']+\.(?:png|jpe?g|webp|gif|svg))(?:\?[^"\']*)?\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . $base . $m[3] . $m[2];
        },
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~\b(href|src|srcset|content)=(["\'])(?!(?:https?:|/|#|data:|mailto:))((?:howtobuy|creativecloud|express|federal|homepage|libs|upp|products|acrobat)/[^"\']+)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . $base . '/' . $m[3] . $m[2];
        },
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~\bsrcset=(["\'])([^"\']+)\1~i',
        static function (array $m) use ($base): string {
            $inner = preg_replace(
                '~(?<![A-Za-z0-9/])/media_([a-f0-9]+\.(?:png|jpe?g|webp|gif|svg))(?:\?[^\s,]*)?~i',
                $base . '/assets/images/media_$1',
                $m[2]
            ) ?? $m[2];

            return 'srcset=' . $m[1] . $inner . $m[1];
        },
        $html
    ) ?? $html;
    // Relative paths like ../../../etc.clientlibs break under <base href=".../"> — normalize early.
    $html = preg_replace(
        '~\b(href|src|action)=(["\'])(?:\.\./)+((?:upp|upp-shared|libs|marketingtech|content|homepage|federal|cc-shared|creativecloud|assets|learn|acrobat|etc\.clientlibs)/[^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $installPath = cw_install_base_path();
    $acrobatRoot = ($installPath !== '' ? $installPath : '') . '/acrobat';
    $libsRoot = ($installPath !== '' ? $installPath : '') . '/libs';
    $html = str_replace("codeRoot: '/acrobat'", 'codeRoot: ' . json_encode($acrobatRoot), $html);
    $html = str_replace('codeRoot: "/acrobat"', 'codeRoot: ' . json_encode($acrobatRoot), $html);
    $html = preg_replace(
        "~setLibs\\((['\"])/libs\\1\\)~",
        'setLibs(' . json_encode($libsRoot) . ')',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\bcontent=(["\'])/acrobat/blocks/~i',
        'content=$1' . $base . '/acrobat/blocks/',
        $html
    ) ?? $html;
    $html = preg_replace(
        "~import\\('acrobat/~",
        "import('" . $acrobatRoot . '/',
        $html
    ) ?? $html;
    // Repair broken base + parent-dir chains (e.g. after partial rewrites).
    $html = preg_replace(
        '~\b(href|src|action|content)=(["\'])' . preg_quote($base, '~') . '/(?:\.\./)+([^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~https?://main--federal--adobecom\.aem\.page/federal/~i',
        $base . '/federal/',
        $html
    ) ?? $html;
    $html = preg_replace_callback(
        '~\b(href|src)=(["\'])(?!https?:|/|#|data:|mailto:|tel:|javascript:)((?:upp|libs|federal|cc-shared|marketingtech|homepage|acrobat|creativecloud)/[^"\']*)\2~i',
        static function (array $m) use ($base): string {
            return $m[1] . '=' . $m[2] . $base . '/' . $m[3] . $m[2];
        },
        $html
    ) ?? $html;
    $html = str_replace(
        $base . '/upp/mep/ace0861/section-metadata/',
        $base . '/libs/blocks/section-metadata/',
        $html
    );
    $html = str_replace(
        'href="upp/mep/ace0861/section-metadata/',
        'href="' . $base . '/libs/blocks/section-metadata/',
        $html
    );
    $html = str_replace(
        'href="libs/blocks/section-metadata/',
        'href="' . $base . '/libs/blocks/section-metadata/',
        $html
    );
    $html = preg_replace(
        '~\b(href|src)=(["\'])etc\.clientlibs/~i',
        '$1=$2' . $base . '/etc.clientlibs/',
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '~(["\'])(/content/samsung/assets/[^"\']+)~',
        static function (array $m) use ($base): string {
            $url = preg_replace('/(&quot;|&#0?38;).*$/', '', $m[2]) ?? $m[2];
            $resolved = cw_resolve_public_asset_path($url);
            if ($resolved === null) {
                return $m[0];
            }
            return $m[1] . $base . $resolved . $m[1];
        },
        $html
    ) ?? $html;

    $html = str_replace($base . '/image/', $base . '/is/image/', $html);
    $html = preg_replace('~(["\'])(?:https?:)?//searchapi\.samsung\.com/v6/~i', '$1' . $base . '/v6/', $html);

    $html = preg_replace_callback(
        '~(https?:)?//([a-z0-9.-]+)(/[^\s"\'<>]+)~i',
        static function (array $m) use ($base): string {
            $scheme = $m[1] ?: 'https:';
            $host = strtolower($m[2] ?? '');
            $rest = $m[3] ?? '';

            if ($host === '' || $host === 'localhost' || str_starts_with($host, 'localhost:')) {
                return $m[0];
            }

            $suffix = '';
            while ($rest !== '') {
                $last = substr($rest, -1);
                if ($last === ')' || $last === ']' || $last === '}' || $last === ';' || $last === ',') {
                    $suffix = $last . $suffix;
                    $rest = substr($rest, 0, -1);
                    continue;
                }
                break;
            }

            $url = $scheme . '//' . $host . $rest;
            $url = str_replace(['&amp;', '&#038;'], '&', $url);

            $path = parse_url($url, PHP_URL_PATH);
            if (!is_string($path) || $path === '') {
                return $m[0];
            }

            $query = parse_url($url, PHP_URL_QUERY);
            $fragment = parse_url($url, PHP_URL_FRAGMENT);
            $needsHash = (is_string($query) && $query !== '') || (is_string($fragment) && $fragment !== '');

            $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            $allowed = [
                'js', 'mjs', 'css',
                'png', 'jpg', 'jpeg', 'gif', 'webp', 'avif', 'svg', 'ico',
                'woff', 'woff2', 'ttf', 'otf', 'eot',
                'mp4', 'webm', 'm4v', 'mov',
                'mp3', 'wav', 'm4a', 'aac',
                'pdf', 'json',
            ];
            if ($ext === '') {
                $dir = trim(dirname($path), '/');
                $baseName = basename($path);
                if ($baseName === '') {
                    $baseName = 'index';
                }
                if ($needsHash) {
                    $baseName .= '-' . substr(sha1($url), 0, 10);
                }

                $dirPrefix = $dir !== '' ? ($dir . '/') : '';
                $localDirFs = __DIR__ . '/assets/remote/' . $host . '/' . $dirPrefix;
                if (!is_dir($localDirFs)) {
                    return $m[0];
                }
                $entries = scandir($localDirFs);
                if (!is_array($entries)) {
                    return $m[0];
                }
                $prefix = $baseName . '.';
                $candidates = [];
                foreach ($entries as $entry) {
                    if (!is_string($entry) || $entry === '.' || $entry === '..') {
                        continue;
                    }
                    if (str_starts_with($entry, $prefix)) {
                        $candidates[] = $entry;
                    }
                }
                if (!$candidates) {
                    return $m[0];
                }
                sort($candidates, SORT_STRING);
                $picked = $candidates[0];
                $localRel = 'assets/remote/' . $host . '/' . $dirPrefix . $picked;
                return $base . '/' . $localRel . $suffix;
            }
            if (!in_array($ext, $allowed, true)) {
                return $m[0];
            }

            $filename = basename($path);
            if ($needsHash) {
                $dot = strrpos($filename, '.');
                $stem = $dot === false ? $filename : substr($filename, 0, $dot);
                $extWithDot = $dot === false ? '' : substr($filename, $dot);
                $filename = $stem . '-' . substr(sha1($url), 0, 10) . $extWithDot;
            }

            $dir = trim(dirname($path), '/');
            $localRel = 'assets/remote/' . $host . '/' . ($dir !== '' ? ($dir . '/') : '') . $filename;
            $localFs = __DIR__ . '/' . $localRel;
            if (!is_file($localFs)) {
                return $m[0];
            }

            return $base . '/' . $localRel . $suffix;
        },
        $html
    ) ?? $html;

    $html = preg_replace(
        '~\b(href|src|action)=(["\'])/(?!/)(?!etc\.clientlibs/|aemapi/|assets/|iam/|is/|content/)([^"\']*)\2~i',
        '$1=$2' . $base . '/$3$2',
        $html
    ) ?? $html;

    $html = preg_replace(
        '~\b((?:window\.)?location)\.href\s*=\s*(["\'])/(?!/)([^"\']*)\2~i',
        '$1.href=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b((?:window\.)?location)\.href\s*=\s*(["\'])/pk/?([^"\']*)\2~i',
        '$1.href=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b((?:window\.)?location)\.href\s*=\s*(["\'])pk/([^"\']*)\2~i',
        '$1.href=$2' . $base . '/$3$2',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b((?:window\.)?location)\.(assign|replace)\(\s*(["\'])/(?!/)([^"\']*)\3\s*\)~i',
        '$1.$2($3' . $base . '/$4$3)',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b((?:window\.)?location)\.(assign|replace)\(\s*(["\'])/pk/?([^"\']*)\3\s*\)~i',
        '$1.$2($3' . $base . '/$4$3)',
        $html
    ) ?? $html;
    $html = preg_replace(
        '~\b((?:window\.)?location)\.(assign|replace)\(\s*(["\'])pk/([^"\']*)\3\s*\)~i',
        '$1.$2($3' . $base . '/$4$3)',
        $html
    ) ?? $html;

    $quotedBase = preg_quote($base, '~');
    $html = cw_inject_milo_bootstrap($html);
    $html = cw_sanitize_html($html);
    $html = cw_finalize_global_header_nav($html);
    $html = cw_rewrite_html_urls_to_plain_structure($html);

    if (str_starts_with($homePath, '/learn')) {
        $html = preg_replace(
            '~window\.pagePath\s*=\s*["\']https?://[^"\']*(/learn/?)["\']~i',
            'window.pagePath = "$1"',
            $html
        ) ?? $html;
        $html = preg_replace(
            '~window\.pagePath\s*=\s*["\']' . preg_quote($base, '~') . '(/learn/?)["\']~i',
            'window.pagePath = "$1"',
            $html
        ) ?? $html;
    }

    return $html;
}

function cw_start_asset_url_rewrite(): void
{
    static $started = false;
    if ($started) {
        return;
    }
    $started = true;

    ob_start('cw_rewrite_asset_urls_in_html');
    register_shutdown_function(static function (): void {
        if (ob_get_level() > 0) {
            ob_end_flush();
        }
    });
}
