<?php
require_once __DIR__ . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE HTML>
<html lang="en-US" dir="ltr">

<head>
    <title>Adobe: Creative, marketing and document management solutions</title>
    <link rel="canonical" href="https://www.adobe.com/">
    <meta name="description"
        content="Adobe is changing the world through digital experiences. We help our customers create, deliver and optimize content and applications.">
    <meta property="og:title" content="Adobe: Creative, marketing and document management solutions">
    <meta property="og:description"
        content="Adobe is changing the world through digital experiences. We help our customers create, deliver and optimize content and applications.">
    <meta property="og:image"
        content="homepage/assets/product-icons/jpg/default.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url"
        content="homepage/assets/product-icons/jpg/default.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe: Creative, marketing and document management solutions">
    <meta name="twitter:description"
        content="Adobe is changing the world through digital experiences. We help our customers create, deliver and optimize content and applications.">
    <meta name="twitter:image"
        content="homepage/assets/product-icons/jpg/default.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="target" content="on">
    <meta name="personalization-v2" content="on">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="universal-nav" content="appswitcher,notifications,cart">
    <meta name="mobile-gnav-v2" content="on">
    <meta name="jarvis-on-demand" content="off">
    <meta name="mas-ff-3in1" content="on">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="schedule"
        content="ff-go-big-180706 | 2026-03-19T03:30:00 | 2026-05-21T15:30:00 | https://main--upp--adobecom.aem.page/homepage/manifests/2026/global/ff-go-big/ff-go-big-180706.json | ch_fr; ie; lu_de; sg; my_ms; ph_fil; id_en; au; th_th; in_hi; in; hk_zh; jp; id_id; my_en; ph_en; kr; hk_en; th_en; nz; tw; vn_vi; vn_en; cl; ca; la; gt; mx; br; co; ec; pe; pr; ar; cr; ca_fr; ro; lu_en; fi; ae_en; ng; be_en; tr; qa_ar; bg; il_en; si; kw_en; nl; eg_en; at; ch_de; kw_ar; pt; qa_en; hu; fr; ch_it; africa; lu_fr; se; uk; pl; gr_el; ee; mena_ar; de; es; sa_ar; ae_ar; cz; il_he; be_nl; dk; lv; sa_en; gr_en; no; sk; eg_ar; ua; za; mena_en; it; be_fr; lt; |  | , apac-cc-pro-promo-182397 | 2026-05-04T04:55:00 | 2026-05-20T13:45:00 | https://main--upp--adobecom.aem.page/homepage/manifests/2026/apac/q2-promos/apac-cc-pro-promo-182397.json | kr; sg; | 2026-05-04T10:30:00 | 2026-05-20T21:30:00, apac-cct-pro-promo-182390 | 2026-05-04T04:55:00 | 2026-05-20T13:45:00 | https://main--upp--adobecom.aem.page/homepage/manifests/2026/apac/q2-promos/apac-cct-pro-promo-182390.json | kr; au; | 2026-05-04T10:30:00 | 2026-05-20T21:30:00, acrobat-l1-q226-183155-v2 | 2026-05-11T15:30:00 | 2026-05-25T15:30:00 | https://main--upp--adobecom.aem.page/homepage/manifests/2026/global/acrobat-l1-q226/acrobat-l1-q226-183155-v2.json | sg; id_en; au; in; my_en; ph_en; hk_en; th_en; nz; vn_en; ca; lu_en; ae_en; ng; be_en; il_en; kw_en; eg_en; qa_en; africa; uk; sa_en; gr_en; za; mena_en; ie;  |  | , jp-paypay-promo-183500 | 2026-05-14T15:00:00 | 2026-05-28T14:59:00 | https://main--upp--adobecom.aem.page/homepage/manifests/2026/apac/q2-promos/jp-paypay-promo-183500.json | jp |  |">
    <meta name="jarvis-chat" content="on">
    <meta name="personalization"
        content="homepage/fragments/mep/hp-05-11-26-hp-post-acrobatl1-psnlz.json"
        data-localized="true">
    <meta name="pageperf" content="on">
    <meta name="pageperf-rate" content="1"><!-- Modifying this file will impact your performance -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="head-loaded" content="true">
    
    
    
    
    
    
    
    
    
    
    
    
    <script>
        const flagMeta = document.querySelector('meta[name="head-loaded"]');
        const headAlreadyLoaded = flagMeta.content === 'true';

        const HOME_LOCALES = ['ae_ar', 'ae_en', 'africa', 'ar', 'at', 'au', 'be_en', 'be_fr', 'be_nl', 'bg', 'br', 'ca', 'ca_fr', 'ch_de', 'ch_fr', 'ch_it', 'cis_en', 'cis_ru', 'cl', 'cn', 'co', 'cr', 'cz', 'de', 'dk', 'ec', 'ee', 'eg_ar', 'eg_en', 'es', 'fi', 'fr', 'gr_el', 'gr_en', 'gt', 'hk_en', 'hk_zh', 'hu', 'id_en', 'id_id', 'ie', 'il_en', 'il_he', 'in', 'in_hi', 'it', 'jp', 'kr', 'kw_ar', 'kw_en', 'la', 'lt', 'lu_de', 'lu_en', 'lu_fr', 'lv', 'mena_ar', 'mena_en', 'mx', 'my_en', 'my_ms', 'ng', 'nl', 'no', 'nz', 'pe', 'ph_en', 'ph_fil', 'pl', 'pr', 'pt', 'qa_ar', 'qa_en', 'ro', 'ru', 'sa_ar', 'sa_en', 'se', 'sg', 'si', 'sk', 'th_en', 'th_th', 'tr', 'tw', 'ua', 'uk', 'vn_en', 'vn_vi', 'za'];
        const PLANS_LOCALES = [...HOME_LOCALES.filter((l) => l !== 'cn' && l !== 'ru'), 'cy_en', 'mt', 'sea'];

        if (!headAlreadyLoaded) {
            (async () => {
                const HREFLANG_ORIGIN = 'https://www.adobe.com';
                const HOME_SITEMAP = `${HREFLANG_ORIGIN}/home-sitemap.xml`;
                const PLANS_SITEMAP = `${HREFLANG_ORIGIN}/plans-catalog-sitemap.xml`;
                const PLANS_PATHS = ['/creativecloud/plans', '/products/catalog'];
                const HREFLANG_CACHE_PREFIX = 'hreflang-';
                const HREFLANG_TIMEOUT_MS = 5000;

                function buildHreflangMap(xmlDoc) {
                    const map = {};
                    xmlDoc.querySelectorAll('url').forEach((urlEl) => {
                        const loc = urlEl.querySelector('loc')?.textContent;
                        if (!loc) return;
                        const links = [...urlEl.querySelectorAll('link[rel="alternate"]')]
                            .map((el) => ({ hreflang: el.getAttribute('hreflang'), href: el.getAttribute('href') }))
                            .filter((l) => l.hreflang && l.href);
                        if (links.length) map[loc] = links;
                    });
                    return map;
                }

                function getCachedMap(cacheKey) {
                    try { return JSON.parse(sessionStorage.getItem(cacheKey)); } catch { return null; }
                }

                function setCachedMap(cacheKey, map) {
                    try {
                        Object.keys(sessionStorage)
                            .filter((k) => k.startsWith(HREFLANG_CACHE_PREFIX) && k !== cacheKey)
                            .forEach((k) => sessionStorage.removeItem(k));
                        sessionStorage.setItem(cacheKey, JSON.stringify(map));
                    } catch {
                        window.lana?.log('hreflang: sessionStorage quota exceeded', { tags: 'hreflang', severity: 'warning' });
                    }
                }

                async function fetchSitemapMap(sitemapUrl) {
                    const ctrl = new AbortController();
                    const tid = setTimeout(() => ctrl.abort(), HREFLANG_TIMEOUT_MS);
                    try {
                        const res = await fetch(sitemapUrl, { signal: ctrl.signal });
                        if (!res.ok) {
                            window.lana?.log(`hreflang: fetch failed (${res.status}) ${sitemapUrl}`, { tags: 'hreflang', severity: 'error' });
                            return null;
                        }
                        const xmlDoc = new DOMParser().parseFromString(await res.text(), 'text/xml');
                        if (xmlDoc.querySelector('parsererror')) {
                            window.lana?.log(`hreflang: parse failed ${sitemapUrl}`, { tags: 'hreflang', severity: 'error' });
                            return null;
                        }
                        return buildHreflangMap(xmlDoc);
                    } catch (e) {
                        const msg = e.name === 'AbortError'
                            ? `hreflang: timeout fetching ${sitemapUrl}`
                            : `hreflang: error fetching ${sitemapUrl} - ${e.message}`;
                        window.lana?.log(msg, { tags: 'hreflang', severity: 'error' });
                        return null;
                    } finally {
                        clearTimeout(tid);
                    }
                }

                function getPageUrl(pathname) {
                    if (pathname.endsWith('/')) return `${HREFLANG_ORIGIN}${pathname}`;
                    const withoutHtml = pathname.replace(/\.html$/, '');
                    return `${HREFLANG_ORIGIN}${withoutHtml}.html`;
                }

                function injectHreflangLinks(links) {
                    const titleEl = document.head.querySelector('title');
                    if (!titleEl) return;
                    titleEl.after(...links.map(({ hreflang, href }) => {
                        const el = document.createElement('link');
                        el.setAttribute('rel', 'alternate');
                        el.setAttribute('hreflang', hreflang);
                        el.setAttribute('href', href);
                        return el;
                    }));
                }

                const uaMeta = document.querySelector('meta[name="hreflinksuseragents"]');
                if (!uaMeta?.content) return;
                if (!uaMeta.content.split(',').some((a) => navigator.userAgent.includes(a.trim()))) return;

                const { pathname } = window.location;
                const firstSegment = pathname.split('/')[1];

                const isHomePage = pathname === '/' || (HOME_LOCALES.includes(firstSegment) && pathname === `/${firstSegment}/`);
                const isPlansPage = PLANS_PATHS.some((p) => pathname.includes(p))
                    && (!HOME_LOCALES.includes(firstSegment) || PLANS_LOCALES.includes(firstSegment));

                let sitemapUrl;
                if (isHomePage) {
                    sitemapUrl = HOME_SITEMAP;
                } else if (isPlansPage) {
                    sitemapUrl = PLANS_SITEMAP;
                } else {
                    return;
                }

                const cacheKey = HREFLANG_CACHE_PREFIX + sitemapUrl;
                let map = getCachedMap(cacheKey);
                if (!map) {
                    map = await fetchSitemapMap(sitemapUrl);
                    if (!map) return;
                    setCachedMap(cacheKey, map);
                }

                const pageUrl = getPageUrl(pathname);
                const links = map[pageUrl] ?? map[pageUrl.replace(/\/$/, '')];
                if (links?.length) injectHreflangLinks(links);
            })();
        }

        flagMeta.content = 'true';
    </script>
    <script src="upp/scripts/fallback.js" nomodule=""></script>
    <script src="upp/scripts/scripts.js" type="module"></script>
    <style>
        body{display:block!important;}
    </style>
    <link rel="icon" href="upp/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="upp/img/favicons/favicon-180.png">
    <link rel="manifest" href="upp/img/favicons/favicon.webmanifest">

    <script>
        // in case scripts.js fails to remove.
        setTimeout(function () {
            document.getElementById('ims-body-style')?.remove();
        }, 5000);
    </script>
    <script>bazadebezolkohpepadr = "917651884"</script>
    <script type="text/javascript" src="akam/13/36b2413c" defer=""></script>
    <link rel="stylesheet" href="upp/styles/styles.css">
    <link rel="preload" as="script" crossorigin="anonymous" href="upp/scripts/helpers.js">
    <script src="upp/scripts/imslib.min.js" data-loaded="true"></script>
    <link rel="preload" as="fetch" crossorigin="anonymous"
        href="homepage/fragments/mep/hp-05-11-26-hp-post-acrobatl1-psnlz.json">
    <link rel="preload" as="fetch" crossorigin="anonymous"
        href="federal/assets/data/mep-xlg-tags.json?sheet=prod">
    <script src="content/dam/cc/optimization/pzn/fixPodHeightUSOnlyPostMax.js?v1"
        data-loaded="true"></script>
    <link rel="preload" as="fetch" crossorigin="anonymous"
        href="https://www.adobe.com/uk/homepage/fragments/loggedout/tests/2024/q1/intl0046/intl0046-pakistan.plain.html">
    <link rel="preload" as="script" crossorigin="anonymous" href="libs/blocks/fragment/fragment.js">
    <style>
        @media (max-width: 1199px) {
            .homepage-brick.link.split-background {
                min-height: unset !important;
            }
        }
    </style>
    <link rel="preload" as="script" crossorigin="anonymous" href="upp/blocks/text/text.js">
    <link rel="stylesheet" href="upp/blocks/text/text.css">
    <link rel="preload" as="script" crossorigin="anonymous"
        href="upp/mep/ace0861/section-metadata/section-metadata.js">
    <link rel="stylesheet" href="upp/mep/ace0861/section-metadata/section-metadata.css">
    <link rel="stylesheet" href="upp/blocks/global-navigation/global-navigation.css">
    <link rel="preload" as="script" href="marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js">
    <script src="marketingtech/main.standard.min.js" data-loaded="true"></script>
    <script src="marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js" async=""></script>
    <link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css">
    <link rel="preload" as="script" crossorigin="anonymous" href="upp/blocks/merch/merch.js">
    <link rel="stylesheet" href="upp/blocks/merch/merch.css">
    <link rel="stylesheet" href="upp/blocks/global-navigation/base.css">
    <script src="marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC04a927fa157f40a4a07fd03fc446f6f4-file.min.js"
        async=""></script>
    
    <link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><mas-commerce-service
        locale="en_US" language="en" country="US"></mas-commerce-service>
    <link rel="stylesheet" href="libs/blocks/hero-marquee/hero-marquee.css">
    <link rel="stylesheet" href="libs/styles/breakpoint-theme.css">
    <link rel="preload" as="script" crossorigin="anonymous"
        href="upp/blocks/homepage-brick/homepage-brick.js">
    <link rel="stylesheet" href="upp/blocks/homepage-brick/homepage-brick.css">
    <link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css">
    <link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css">
    <link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css">
    <link rel="stylesheet" href="libs/blocks/global-navigation/utilities/menu/menu.css">
    <link rel="preload" as="script" crossorigin="anonymous" href="upp/blocks/brand-concierge/brand-concierge.js">
    <link rel="stylesheet" href="upp/blocks/brand-concierge/brand-concierge.css">
    <link rel="stylesheet" href="upp/blocks/global-footer/global-footer.css">
    
    <script src="etc.clientlibs/globalnav/clientlibs/base/privacy-standalone.js"
        data-loaded="true"></script>
    <link rel="stylesheet" href="https://client.messaging.adobe.com/latest/AdobeMessagingClient.css">
    
    <link rel="stylesheet" href="upp/blocks/modal/modal.css">
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC4818282d9d91472cbcccfc96f28ac4c7-file.min.js"
        async="" class="marketingtech-contentSquare"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC1ad630888d99429e83dc02b5f88b4d56-file.min.js"
        async="" class="marketingtech-demandbase"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC42df32478c9c475cab623ad2bdcc019d-file.min.js"
        async="" class="marketingtech-zoominfo"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC3e890330b95a4566a42613aefca8034b-file.min.js"
        async="" class="marketingtech-qualtrics"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC91ad29886abe4fb9abcce022c24f858d-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCcaaaa703d1b749fcb52fc1472297526c-source.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCdea93e39c30a4b24879e60748c23836e-source.min.js"
        async=""></script>
    
    
    
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC8722390a97bd426097a66955d99253cb-source.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC5679b21f26594d058ee38e60abd47995-source.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCffb9405072cb43d6ba42ced37990f814-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCdb12981b688345fabee14405bb8c80f8-file.min.js"
        async="" class="marketingtech-ttd"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC3233aaa91e6645da92331448f88664ad-file.min.js"
        async="" class="marketingtech-naver"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC9f0fc558cb3349dd97ca40cda122cf25-file.min.js"
        async="" class="marketingtech-mobon"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC79fb1f98c5864a10931261f4e2a6efd2-file.min.js"
        async="" class="marketingtech-facebook"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC8285adacedcd466cb1554f69b360a9cc-file.min.js"
        async="" class="marketingtech-bing"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC16af5e1dced048e3b0c5eec243557497-file.min.js"
        async="" class="marketingtech-linkedin"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCe5e322f64bfa4907b3e37ccfbeb0d980-file.min.js"
        async="" class="marketingtech-tiktok"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC5ba2eb7bf1bc461b945a85a3ae2ffaba-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC002745611fcc4e9c83b7e337f6d2337d-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCc5a4e0eb967143b584903d06a7198f66-file.min.js"
        async="" class="marketingtech-teads"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCd742d6adc4a14dc5bcfb2ae395160ba9-file.min.js"
        async="" class="marketingtech-mathtag"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC9636d50a631a497b9ec8583ab39f2932-file.min.js"
        async="" class="marketingtech-listenloop-integrate"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC79ee818ecd8d41eaa4d786718d826c00-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC50e22fb441344a19bbbb534a630dd92c-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCff6fcd46bd3e4edfb245500f941dc3c4-file.min.js"
        async="" class="marketingtech-amoEverresttech"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC0ac65061eb4442ecaf280011885d1074-file.min.js"
        async="" class="marketingtech-kakao"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC1932b4a75c7d4d8d97a7ab3f394d7498-file.min.js"
        async="" class="marketingtech-iSpot"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC93770e077bcb42b5a9f364b32929c986-file.min.js"
        async="" class="marketingtech-snapchat"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCa1ae92193a6b48988ee706b333f9ffd6-file.min.js"
        async="" class="marketingtech-flashtalking"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC32a4eeff111142f4975991d5362d2e10-file.min.js"
        async="" class="marketingtech-podsight"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCdcca344ebf644baebf1153f9856b3d94-file.min.js"
        async="" class="marketingtech-quora"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCf5ceca60379c48f6abd617fc0817597a-file.min.js"
        async=""></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RCf6f4c94f48314e0083709268e3d89b95-file.min.js"
        async="" class="marketingtech-quantcast"></script>
    <script src="upp/marketingtech/d4d114c60e50/a0e989131fd5/9fa9425e8cf4/RC43e4352801ff471abb4b3de43bf4e92a-file.min.js"
        async=""></script>
    
    <meta http-equiv="origin-trial"
        content="A7JYkbIvWKmS8mWYjXO12SIIsfPdI7twY91Y3LWOV/YbZmN1ZhYv8O+Zs6/IPCfBE99aV9tIC8sWZSCN09vf7gkAAACWeyJvcmlnaW4iOiJodHRwczovL2N0LnBpbnRlcmVzdC5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZzIiLCJleHBpcnkiOjE3NDIzNDIzOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    
    
    
    
    
    
    
    
    
    
    
    
    
    <link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/app-switcher.bundle.css">
</head>

<body>
    <header class="global-navigation ready" daa-im="true"
        daa-lh="gnav|homepage_milo|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2"
        data-block-status="loaded">
        <div class="feds-curtain"></div>
        <div class="feds-topnav-wrapper">
            <nav class="feds-topnav" aria-label="Main">
                <div class="feds-brand-container">
                    <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="true"
                        aria-label="Navigation menu" aria-controls="feds-nav-wrapper" data-feds-preventautoclose="">
                    </button>
                    <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
                        <span class="feds-brand-image brand-image-only"><img loading="lazy"
                                src="federal/assets/svgs/adobe-logo.svg" alt="Adobe, Inc."></span>

                    </a>
                </div>

                <div class="feds-nav-wrapper" id="feds-nav-wrapper">


                    <div class="feds-nav" role="list">
                        <section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu"
                            daa-lh="Creativity Design">
                            <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false"
                                aria-haspopup="true" daa-ll="Creativity Design-1" daa-lh="header|Open">
                                Creativity &amp; Design
                            </button>
                            <div class="feds-popup" id="feds-popup-4">
                                <div class="feds-menu-container">
                                    <div class="feds-menu-content">
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Shop for
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Shop for">
                                                    <ul>
                                                        <li><a href="https://www.adobe.com/creativecloud.html"
                                                                class="feds-navLink" daa-ll="What is Creative Cloud-1">
                                                                <div class="feds-navLink-image">
                                                                    <picture><img loading="lazy"
                                                                            src="federal/assets/svgs/creative-cloud-40.svg"
                                                                            alt="Adobe Creative Cloud"></picture>
                                                                </div>
                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">What is Creative
                                                                        Cloud?</div>
                                                                    <div class="feds-navLink-description">Creative apps
                                                                        and services for everyone</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="creativecloud/photography.html"
                                                                class="feds-navLink" daa-ll="Photographers-2">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Photographers</div>
                                                                    <div class="feds-navLink-description">Lightroom,
                                                                        Photoshop, and more</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="creativecloud/all-apps.html"
                                                                class="feds-navLink" daa-ll="Individuals-3">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Individuals</div>
                                                                    <div class="feds-navLink-description">20+ creative
                                                                        apps, Acrobat, and more</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="creativecloud/business.html"
                                                                class="feds-navLink" daa-ll="Business-4">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Business</div>
                                                                    <div class="feds-navLink-description">Solutions for
                                                                        teams and enterprises</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/education.html"
                                                                class="feds-navLink" daa-ll="Students and teachers-5">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Students and
                                                                        teachers</div>
                                                                    <div class="feds-navLink-description">Save 71% on
                                                                        Creative Cloud</div>
                                                                </div>
                                                            </a></li>
                                                        <li>
                                                            <div class="feds-cta-wrapper">
                                                                <a href="/creativecloud/plans.html"
                                                                    class="feds-cta feds-cta--primary"
                                                                    daa-ll="View plans and pricing-6">View plans and
                                                                    pricing</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Featured products
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Featured products">
                                                    <ul>
                                                        <li><a href="https://www.adobe.com/products/photoshop.html"
                                                                class="feds-navLink" daa-ll="Photoshop-1">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Photoshop</div>
                                                                    <div class="feds-navLink-description">Image editing
                                                                        and design</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/products/premiere.html"
                                                                class="feds-navLink" daa-ll="Premiere-2">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Premiere</div>
                                                                    <div class="feds-navLink-description">Video editing
                                                                        and production</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/products/firefly.html"
                                                                class="feds-navLink" daa-ll="Adobe Firefly-3">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Adobe Firefly</div>
                                                                    <div class="feds-navLink-description">AI-powered
                                                                        content creation</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/products/illustrator.html"
                                                                class="feds-navLink" daa-ll="Illustrator-4">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Illustrator</div>
                                                                    <div class="feds-navLink-description">Vector
                                                                        graphics and illustration</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/express/?promoid=Y69SGP43&amp;mv=other"
                                                                class="feds-navLink" daa-ll="Adobe Express-5">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Adobe Express</div>
                                                                    <div class="feds-navLink-description">All-in-one
                                                                        design, video, photo, and PDF app</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/products/photoshop-lightroom.html"
                                                                class="feds-navLink" daa-ll="Lightroom-6">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Lightroom</div>
                                                                    <div class="feds-navLink-description">Photo editing
                                                                        and organization</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://stock.adobe.com/?as_channel=adobe_com&amp;as_source=profile_menu&amp;as_campclass=brand&amp;as_campaign=may2017&amp;as_audience=users&amp;as_content=globalnav"
                                                                class="feds-navLink" daa-ll="Adobe Stock-7">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Adobe Stock</div>
                                                                    <div class="feds-navLink-description">High-quality
                                                                        licensable assets</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/products/catalog.html#category=creativity-design"
                                                                class="feds-navLink feds-navLink--blue"
                                                                daa-ll="View all products-8">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">View all products
                                                                    </div>

                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Online tools
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Online tools">
                                                    <ul data-path="/federal/globalnav/acom/fragments/cc/cc-column-3">
                                                        <li><a href="/express/feature/image/remove-background"
                                                                daa-ll="Remove background-1" class="feds-navLink">Remove
                                                                background</a></li>
                                                        <li><a href="/products/firefly/features/text-to-image.html"
                                                                daa-ll="Generate AI images-2"
                                                                class="feds-navLink">Generate AI images</a></li>
                                                        <li><a href="/products/firefly/features/ai-video-generator.html"
                                                                daa-ll="Generate AI videos-3"
                                                                class="feds-navLink">Generate AI videos</a></li>
                                                        <li><a href="/products/firefly/features/ai-art-generator.html"
                                                                daa-ll="Generate AI art-4" class="feds-navLink">Generate
                                                                AI art</a></li>
                                                        <li><a href="/products/firefly/features/ai-photo-editor.html"
                                                                daa-ll="Edit photos with AI-5" class="feds-navLink">Edit
                                                                photos with AI</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-promo-wrapper" daa-lh="promo-card">
                                                    <div class="feds-promo feds-promo--dark"
                                                        data-path="/federal/globalnav/acom/fragments/cc/cc-promo/cc-promo">
                                                        <a class="feds-promo-image"
                                                            href="creativecloud/plan-recommender/quiz.html"
                                                            daa-ll="promo-image" aria-hidden="true" tabindex="-1">
                                                            <picture>
                                                                <source type="image/webp"
                                                                    srcset="federal/globalnav/acom/fragments/cc/cc-promo/media_1af073e5a0cd7dec058e62d473269d930634a83a9.png"
                                                                    media="(min-width: 600px)">
                                                                <source type="image/webp"
                                                                    srcset="federal/globalnav/acom/fragments/cc/cc-promo/media_1af073e5a0cd7dec058e62d473269d930634a83a9.png">
                                                                <source type="image/png"
                                                                    srcset="federal/globalnav/acom/fragments/cc/cc-promo/media_1af073e5a0cd7dec058e62d473269d930634a83a9.png"
                                                                    media="(min-width: 600px)">
                                                                <img loading="lazy" alt="Get started | decorative image"
                                                                    src="federal/globalnav/acom/fragments/cc/cc-promo/media_1af073e5a0cd7dec058e62d473269d930634a83a9.png"
                                                                    width="520" height="384">
                                                            </picture>
                                                        </a>
                                                        <div class="feds-promo-content">
                                                            <div>
                                                                <div class="feds-promo-header" role="heading"
                                                                    aria-level="2">
                                                                    Find the perfect app in about 60 seconds.
                                                                </div>
                                                                <p>
                                                                <div class="feds-cta-wrapper">
                                                                    <a href="/creativecloud/plan-recommender/quiz.html"
                                                                        aria-label="Get started"
                                                                        class="feds-cta feds-cta--primary"
                                                                        daa-ll="Get started-1">Get started</a>
                                                                </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu"
                            daa-lh="PDF E signatures">
                            <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false"
                                aria-haspopup="true" daa-ll="PDF E signatures-2" daa-lh="header|Open">
                                PDF &amp; E-signatures
                            </button>
                            <div class="feds-popup" id="feds-popup-2">
                                <div class="feds-menu-container">
                                    <div class="feds-menu-content">
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Products
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Products">
                                                    <ul>
                                                        <li><a href="/acrobat.html"
                                                                class="feds-navLink" daa-ll="Adobe Acrobat-1">Adobe Acrobat</a></li>
                                                        <li><a href="/acrobat/acrobat-studio.html"
                                                                class="feds-navLink" daa-ll="Adobe Acrobat Studio-2">Adobe Acrobat Studio</a></li>
                                                        <li><a href="https://www.adobe.com/acrobat/acrobat-pro.html"
                                                                class="feds-navLink" daa-ll="Adobe Acrobat Pro-3">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Adobe Acrobat Pro
                                                                    </div>
                                                                    <div class="feds-navLink-description">The secure
                                                                        solution for PDF and e-signature workflows</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/acrobat/acrobat-express.html"
                                                                class="feds-navLink" daa-ll="Acrobat Express-4">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Acrobat Express
                                                                    </div>
                                                                    <div class="feds-navLink-description">AI-powered
                                                                        insights, sharing, and content creation</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/sign.html"
                                                                class="feds-navLink" daa-ll="Acrobat Sign-5">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Acrobat Sign</div>
                                                                    <div class="feds-navLink-description">The essential
                                                                        e-signature solution</div>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="https://www.adobe.com/acrobat/pdf-reader.html"
                                                                class="feds-navLink" daa-ll="Acrobat Reader-6">

                                                                <div class="feds-navLink-content">
                                                                    <div class="feds-navLink-title">Acrobat Reader</div>
                                                                    <div class="feds-navLink-description">The trusted
                                                                        standard for viewing and annotating PDFs</div>
                                                                </div>
                                                            </a></li>
                                                        <li>
                                                            <div class="feds-cta-wrapper">
                                                                <a href="/acrobat/pricing.html"
                                                                    class="feds-cta feds-cta--primary"
                                                                    daa-ll="Acrobat plans and pricing-7">Acrobat plans
                                                                    and pricing</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Shop for
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Shop for">
                                                    <ul data-path="/federal/globalnav/acom/fragments/dc/dc-column-2">
                                                        <li><a href="/acrobat/business.html" daa-ll="Business-1"
                                                                class="feds-navLink">Business</a></li>
                                                        <li><a href="/education.html" daa-ll="Student Teachers-2"
                                                                class="feds-navLink">Student &amp; Teachers</a></li>
                                                        <li><a href="/acrobat/personal-document-management.html"
                                                                daa-ll="Home Personal-3" class="feds-navLink">Home &amp;
                                                                Personal</a></li>
                                                        <li><a href="/acrobat/business/industries/government.html"
                                                                daa-ll="Government-4"
                                                                class="feds-navLink">Government</a></li>
                                                        <li><a href="/nonprofits/acrobat.html" daa-ll="Nonprofits-5"
                                                                class="feds-navLink">Nonprofits</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Online tools
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Online tools">
                                                    <ul data-path="/federal/globalnav/acom/fragments/dc/dc-column-3">
                                                        <li><a href="/acrobat/online/pdf-editor.html"
                                                                daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a>
                                                        </li>
                                                        <li><a href="/acrobat/online/ai-chat-pdf.html"
                                                                daa-ll="Chat with PDF-2" class="feds-navLink">Chat with
                                                                PDF</a></li>
                                                        <li><a href="/acrobat/online/pdf-to-word.html"
                                                                daa-ll="PDF to Word-3" class="feds-navLink">PDF to
                                                                Word</a></li>
                                                        <li><a href="/acrobat/online/compress-pdf.html"
                                                                daa-ll="Compress PDF-4" class="feds-navLink">Compress
                                                                PDF</a></li>
                                                        <li><a href="/acrobat/online/merge-pdf.html"
                                                                daa-ll="Merge PDF-5" class="feds-navLink">Merge PDF</a>
                                                        </li>
                                                        <li><a href="/acrobat/online/word-to-pdf.html"
                                                                daa-ll="Word to PDF-6" class="feds-navLink">Word to
                                                                PDF</a></li>
                                                        <li><a href="/acrobat/online.html" daa-ll="View all tools-7"
                                                                class="feds-navLink">View all tools</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-promo-wrapper" daa-lh="promo-card">
                                                    <div class="feds-promo"
                                                        data-path="/federal/globalnav/acom/fragments/dc/dc-promo/dc-promo">
                                                        <a class="feds-promo-image"
                                                            href="https://www.adobe.com/acrobat/free-trial-download.html"
                                                            daa-ll="promo-image" aria-hidden="true" tabindex="-1">
                                                            <picture>
                                                                <source type="image/webp"
                                                                    srcset="federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png"
                                                                    media="(min-width: 600px)">
                                                                <source type="image/webp"
                                                                    srcset="federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png">
                                                                <source type="image/png"
                                                                    srcset="federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png"
                                                                    media="(min-width: 600px)">
                                                                <img loading="lazy" alt="decorative image"
                                                                    src="federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png"
                                                                    width="520" height="293">
                                                            </picture>
                                                        </a>
                                                        <div class="feds-promo-content">
                                                            <div>
                                                                <div class="feds-promo-header" role="heading"
                                                                    aria-level="2">
                                                                    Adobe Acrobat
                                                                </div>
                                                                <p>Trusted PDF tools enhanced with AI to answer
                                                                    questions and generate summaries.</p>
                                                                <p><a href="/acrobat/free-trial-download.html"
                                                                        aria-label="Start free trial for Acrobat Studio"
                                                                        daa-ll="Start free trial-1"
                                                                        class="feds-promo-link">Start free trial</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu"
                            daa-lh="Marketing Commerce">
                            <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false"
                                aria-haspopup="true" daa-ll="Marketing Commerce-3" daa-lh="header|Open">
                                Marketing &amp; Commerce
                            </button>
                            <div class="feds-popup" id="feds-popup-1">
                                <div class="feds-menu-container">
                                    <div class="feds-menu-content">
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    What's new
                                                </div>
                                                <div class="feds-menu-items" daa-lh="What s new">
                                                    <ul>
                                                        <li><a href="https://business.adobe.com/products/brand-intelligence.html"
                                                                daa-ll="Brand Intelligence-1" class="feds-navLink">Brand
                                                                Intelligence</a></li>
                                                        <li><a href="https://business.adobe.com/products/engagement-intelligence.html"
                                                                daa-ll="Engagement Intelligence-2"
                                                                class="feds-navLink">Engagement Intelligence</a></li>
                                                        <li><a href="https://business.adobe.com/products/genstudio/content-marketing.html"
                                                                daa-ll="GenStudio for Content Marketin-3"
                                                                class="feds-navLink">GenStudio for Content Marketing</a>
                                                        </li>
                                                        <li><a href="https://business.adobe.com/products/firefly-business/firefly-creative-production.html"
                                                                daa-ll="Firefly Creative Production-4"
                                                                class="feds-navLink">Firefly Creative Production</a>
                                                        </li>
                                                        <li><a href="https://business.adobe.com/products/cx-enterprise-coworker.html"
                                                                daa-ll="CX Enterprise Coworker-5"
                                                                class="feds-navLink">CX Enterprise Coworker</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Business solutions
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Business solutions">
                                                    <ul>
                                                        <li><a href="https://business.adobe.com/solutions/customer-engagement.html"
                                                                daa-ll="Customer engagement-6"
                                                                class="feds-navLink">Customer engagement</a></li>
                                                        <li><a href="https://business.adobe.com/solutions/content-supply-chain.html"
                                                                daa-ll="Content supply chain-7"
                                                                class="feds-navLink">Content supply chain</a></li>
                                                        <li><a href="https://business.adobe.com/solutions/brand-visibility.html"
                                                                daa-ll="Brand visibility-8" class="feds-navLink">Brand
                                                                visibility</a></li>
                                                        <li><a href="https://business.adobe.com/solutions/b2b-marketing.html"
                                                                daa-ll="B2B GTM orchestration-9"
                                                                class="feds-navLink">B2B GTM orchestration</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Our platform
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Our platform">
                                                    <ul>
                                                        <li><a href="https://business.adobe.com/products/experience-platform/adobe-experience-platform.html"
                                                                daa-ll="Adobe Experience Platform-10"
                                                                class="feds-navLink">Adobe Experience Platform</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column feds-menu-column--group">
                                            <div class="feds-menu-section">
                                                <div class="feds-menu-headline" role="heading" aria-level="2">
                                                    Featured products
                                                </div>
                                                <div class="feds-menu-items" daa-lh="Featured products">
                                                    <div class="feds-menu-content">
                                                        <div class="feds-menu-column">
                                                            <ul>
                                                                <li>
                                                                    <div role="heading" aria-level="3"
                                                                        class="feds-navLink feds-navLink--gray-gradient feds-navLink--bold feds-navLink--header"
                                                                        daa-ll="AI agents-1">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">AI &amp;
                                                                                agents</div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li><a href="https://business.adobe.com/products/experience-platform/agent-orchestrator.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="Experience Platform Agent Orch-2">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Experience
                                                                                Platform Agent Orchestrator</div>
                                                                            <div class="feds-navLink-description">Boost
                                                                                brand impact with AI-powered agents
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/brand-concierge.html"
                                                                        class="feds-navLink" daa-ll="Brand Concierge-3">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Brand
                                                                                Concierge</div>
                                                                            <div class="feds-navLink-description">
                                                                                AI-powered conversation agent</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/llm-optimizer.html"
                                                                        class="feds-navLink" daa-ll="LLM Optimizer-4">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">LLM
                                                                                Optimizer</div>
                                                                            <div class="feds-navLink-description">Shape
                                                                                how your brand shows up in AI search
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                <li>
                                                                    <div role="heading" aria-level="3"
                                                                        class="feds-navLink feds-navLink--gray-gradient feds-navLink--bold feds-navLink--header"
                                                                        daa-ll="Content workflow-5">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Content
                                                                                &amp; workflow</div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li><a href="https://business.adobe.com/products/genstudio/performance-marketing.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="GenStudio for Performance Mark-6">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">GenStudio
                                                                                for Performance Marketing</div>
                                                                            <div class="feds-navLink-description">
                                                                                Accelerate your content supply chain
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/experience-manager/sites.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="Experience Manager Sites-7">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Experience
                                                                                Manager Sites</div>
                                                                            <div class="feds-navLink-description">
                                                                                Content management system (CMS)</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/workfront.html"
                                                                        class="feds-navLink" daa-ll="Workfront-8">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Workfront
                                                                            </div>
                                                                            <div class="feds-navLink-description">Work
                                                                                and project management</div>
                                                                        </div>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="feds-menu-column">
                                                            <ul>
                                                                <li>
                                                                    <div role="heading" aria-level="3"
                                                                        class="feds-navLink feds-navLink--gray-gradient feds-navLink--bold feds-navLink--header"
                                                                        daa-ll="Data analytics-9">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Data &amp;
                                                                                analytics</div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li><a href="https://business.adobe.com/products/real-time-customer-data-platform/rtcdp.html"
                                                                        class="feds-navLink" daa-ll="Real Time CDP-10">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Real-Time
                                                                                CDP</div>
                                                                            <div class="feds-navLink-description">
                                                                                Customer data platform (CDP)</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/adobe-analytics.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="Adobe Analytics-11">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Adobe
                                                                                Analytics</div>
                                                                            <div class="feds-navLink-description">
                                                                                Advanced CX analytics solutions</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li>
                                                                    <div role="heading" aria-level="3"
                                                                        class="feds-navLink feds-navLink--gray-gradient feds-navLink--bold feds-navLink--header"
                                                                        daa-ll="Campaign management-12">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Campaign
                                                                                management</div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li><a href="https://business.adobe.com/products/journey-optimizer.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="Journey Optimizer-13">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Journey
                                                                                Optimizer</div>
                                                                            <div class="feds-navLink-description">
                                                                                Customer journey management</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/journey-optimizer-b2b-edition.html"
                                                                        class="feds-navLink"
                                                                        daa-ll="Journey Optimizer B2B Edition-14">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Journey
                                                                                Optimizer B2B Edition</div>
                                                                            <div class="feds-navLink-description">
                                                                                Increase buying group engagement</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li><a href="https://business.adobe.com/products/marketo.html"
                                                                        class="feds-navLink" daa-ll="Marketo Engage-15">

                                                                        <div class="feds-navLink-content">
                                                                            <div class="feds-navLink-title">Marketo
                                                                                Engage</div>
                                                                            <div class="feds-navLink-description">
                                                                                Marketing automation</div>
                                                                        </div>
                                                                    </a></li>
                                                                <li>
                                                                    <div class="feds-cta-wrapper">
                                                                        <a href="https://business.adobe.com/products.html"
                                                                            class="feds-cta feds-cta--primary"
                                                                            daa-ll="View all products-16">View all
                                                                            products</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section">
                                                <div class="feds-promo-wrapper" daa-lh="promo-card">
                                                    <div class="feds-promo">
                                                        <a class="feds-promo-image" href="https://business.adobe.com/"
                                                            daa-ll="promo-image" aria-hidden="true" tabindex="-1">
                                                            <picture>
                                                                <source type="image/webp"
                                                                    srcset="federal/media_171db344fcd93da208956f698c9f66f20253753e2.png?width=2000&amp;format=webply&amp;optimize=medium"
                                                                    media="(min-width: 600px)">
                                                                <source type="image/webp"
                                                                    srcset="federal/media_171db344fcd93da208956f698c9f66f20253753e2.png?width=750&amp;format=webply&amp;optimize=medium">
                                                                <source type="image/png"
                                                                    srcset="federal/media_171db344fcd93da208956f698c9f66f20253753e2.png?width=2000&amp;format=png&amp;optimize=medium"
                                                                    media="(min-width: 600px)">
                                                                <img loading="lazy" alt="decorative image"
                                                                    src="federal/media_171db344fcd93da208956f698c9f66f20253753e2.png?width=750&amp;format=png&amp;optimize=medium"
                                                                    width="520" height="384">
                                                            </picture>
                                                        </a>
                                                        <div class="feds-promo-content">
                                                            <div>
                                                                <div class="feds-promo-header" role="heading"
                                                                    aria-level="2">
                                                                    Adobe for Business - creativity and marketing in the
                                                                    age of AI.
                                                                </div>
                                                                <p>
                                                                <div class="feds-cta-wrapper">
                                                                    <a href="https://business.adobe.com/"
                                                                        class="feds-cta feds-cta--primary"
                                                                        daa-ll="Find a product-1">Find a product</a>
                                                                </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feds-menu-column">
                                            <div class="feds-menu-section"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div role="listitem" class="feds-navItem feds-navItem--section" daa-lh="Learn Support">
                            <a href="/community/" class="feds-navLink" daa-ll="Learn Support-4">Learn &amp; Support</a>
                        </div>
                    </div>

                </div>





                <div class="feds-utilities" style="min-width: calc(124px + 0.25rem);">
                    <div class="universal-nav-container">
                        <div id="universal-nav" data-test-id="unav-main"
                            class="universal-nav-light universal-nav-undefined  ">
                            <div role="none" class="unav-comp-app-switcher-wrapper unav-comp-wrapper">
                                <div class="unav-comp-app-switcher unav-comp-icon" data-test-id="unav-app-switcher"
                                    role="button" aria-label="App switcher" tabindex="0" aria-expanded="false"
                                    aria-haspopup="dialog" aria-controls="unav-app-switcher-dialog-id'"
                                    id="unav-app-switcher">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <path
                                            d="M4.75 2.25H3.25C2.69772 2.25 2.25 2.69772 2.25 3.25V4.75C2.25 5.30228 2.69772 5.75 3.25 5.75H4.75C5.30228 5.75 5.75 5.30228 5.75 4.75V3.25C5.75 2.69772 5.30228 2.25 4.75 2.25Z">
                                        </path>
                                        <path
                                            d="M10.75 2.25H9.25C8.69772 2.25 8.25 2.69772 8.25 3.25V4.75C8.25 5.30228 8.69772 5.75 9.25 5.75H10.75C11.3023 5.75 11.75 5.30228 11.75 4.75V3.25C11.75 2.69772 11.3023 2.25 10.75 2.25Z">
                                        </path>
                                        <path
                                            d="M16.75 2.25H15.25C14.6977 2.25 14.25 2.69772 14.25 3.25V4.75C14.25 5.30228 14.6977 5.75 15.25 5.75H16.75C17.3023 5.75 17.75 5.30228 17.75 4.75V3.25C17.75 2.69772 17.3023 2.25 16.75 2.25Z">
                                        </path>
                                        <path
                                            d="M4.75 8.25H3.25C2.69772 8.25 2.25 8.69772 2.25 9.25V10.75C2.25 11.3023 2.69772 11.75 3.25 11.75H4.75C5.30228 11.75 5.75 11.3023 5.75 10.75V9.25C5.75 8.69772 5.30228 8.25 4.75 8.25Z">
                                        </path>
                                        <path
                                            d="M10.75 8.25H9.25C8.69772 8.25 8.25 8.69772 8.25 9.25V10.75C8.25 11.3023 8.69772 11.75 9.25 11.75H10.75C11.3023 11.75 11.75 11.3023 11.75 10.75V9.25C11.75 8.69772 11.3023 8.25 10.75 8.25Z">
                                        </path>
                                        <path
                                            d="M16.75 8.25H15.25C14.6977 8.25 14.25 8.69772 14.25 9.25V10.75C14.25 11.3023 14.6977 11.75 15.25 11.75H16.75C17.3023 11.75 17.75 11.3023 17.75 10.75V9.25C17.75 8.69772 17.3023 8.25 16.75 8.25Z">
                                        </path>
                                        <path
                                            d="M4.75 14.25H3.25C2.69772 14.25 2.25 14.6977 2.25 15.25V16.75C2.25 17.3023 2.69772 17.75 3.25 17.75H4.75C5.30228 17.75 5.75 17.3023 5.75 16.75V15.25C5.75 14.6977 5.30228 14.25 4.75 14.25Z">
                                        </path>
                                        <path
                                            d="M10.75 14.25H9.25C8.69772 14.25 8.25 14.6977 8.25 15.25V16.75C8.25 17.3023 8.69772 17.75 9.25 17.75H10.75C11.3023 17.75 11.75 17.3023 11.75 16.75V15.25C11.75 14.6977 11.3023 14.25 10.75 14.25Z">
                                        </path>
                                        <path
                                            d="M16.75 14.25H15.25C14.6977 14.25 14.25 14.6977 14.25 15.25V16.75C14.25 17.3023 14.6977 17.75 15.25 17.75H16.75C17.3023 17.75 17.75 17.3023 17.75 16.75V15.25C17.75 14.6977 17.3023 14.25 16.75 14.25Z">
                                        </path>
                                    </svg>
                                    <div class="unav-comp-tooltip" data-test-id="unav-app-switcher--tooltip">
                                        <div class="unav-comp-tooltip-tip"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 11 5">
                                                <path
                                                    d="M6.20711 0.707106L10.5 5L0.5 5L4.79289 0.707107C5.18342 0.316583 5.81658 0.316582 6.20711 0.707106Z">
                                                </path>
                                            </svg></div>
                                        <div class="unav-comp-tooltip-text">App switcher</div>
                                    </div>
                                </div>
                                <div class="unav-comp-app-switcher-popover" data-test-id="unav-app-switcher--popover"
                                    role="dialog" id="unav-app-switcher-dialog-id" aria-labelledby="unav-app-switcher"
                                    style="display: none;">
                                    <div role="none" class="unav-comp-app-switcher-popover-content"
                                        style="width: 100%; display: block;">
                                        <div role="none" class="unav-comp-app-switcher-popover-header"
                                            data-test-id="unav-app-switcher--header">
                                            <div role="heading" aria-level="2" id="unav-comp-app-switcher-popover-title"
                                                class="unav-comp-app-switcher-popover-title">Web Apps</div>
                                        </div>
                                        <div role="none" class="un-apps-container primary-apps">
                                            <ul aria-labelledby="unav-comp-app-switcher-popover-title"
                                                class="primaryApps">
                                                <li data-test-id="unav-app-switcher--adobe-express-app-tile"><a
                                                        aria-label="Adobe Express" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://new.express.adobe.com/?promoid=D8F91NS&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Adobe Express"
                                                        data-analytics-url="https://new.express.adobe.com/?promoid=D8F91NS&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Adobe Express:0|0"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/adobeexpress_appicon_noshadow_128.png"><span>Adobe
                                                            Express</span></a></li>
                                                <li data-test-id="unav-app-switcher--adobe-firefly-app-tile"><a
                                                        aria-label="Adobe Firefly" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://firefly.adobe.com/?promoid=DDSB1DXR&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Adobe Firefly"
                                                        data-analytics-url="https://firefly.adobe.com/?promoid=DDSB1DXR&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Adobe Firefly:0|1"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/firefly_appicon_noshadow_v2_128.png"><span>Adobe
                                                            Firefly</span></a></li>
                                                <li data-test-id="unav-app-switcher--acrobat-app-tile"><a
                                                        aria-label="Acrobat" target="_blank" rel="noopener" tabindex="0"
                                                        href="https://acrobat.adobe.com?promoid=DRCFIIQN&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Acrobat"
                                                        data-analytics-url="https://acrobat.adobe.com?promoid=DRCFIIQN&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Acrobat:0|2"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/acrobat_reader_appicon_noshadow_128.png"><span>Acrobat</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--photoshop-app-tile"><a
                                                        aria-label="Photoshop" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://photoshop.adobe.com?promoid=DZTGZS8L&amp;mv=other&amp;mv2=unav&amp;lang=en"
                                                        data-analytics-event="AppLauncher.appClick.Photoshop"
                                                        data-analytics-url="https://photoshop.adobe.com?promoid=DZTGZS8L&amp;mv=other&amp;mv2=unav&amp;lang=en"
                                                        data-analytics-app="Photoshop:1|0"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/ps_appicon_noshadow_128.png"><span>Photoshop</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--lightroom-app-tile"><a
                                                        aria-label="Lightroom" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://lightroom.adobe.com/?promoid=DMMD15GP&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Lightroom"
                                                        data-analytics-url="https://lightroom.adobe.com/?promoid=DMMD15GP&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Lightroom:1|1"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/lr_appicon_noshadow_128.png"><span>Lightroom</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--stock-app-tile"><a
                                                        aria-label="Stock" target="_blank" rel="noopener" tabindex="0"
                                                        href="https://stock.adobe.com/?&amp;as_channel=adobe_com&amp;as_source=homepage_milo&amp;as_campclass=brand&amp;as_audience=users&amp;as_content=topnav&amp;promoid=FAKHZNJK&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-event="AppLauncher.appClick.Stock"
                                                        data-analytics-url="https://stock.adobe.com/?&amp;as_channel=adobe_com&amp;as_source=homepage_milo&amp;as_campclass=brand&amp;as_audience=users&amp;as_content=topnav&amp;promoid=FAKHZNJK&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-app="Stock:1|2"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/st_appicon_noshadow_128.png"><span>Stock</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--acrobat-sign-app-tile"><a
                                                        aria-label="Acrobat Sign" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://adobe.na1.adobesign.com/account/homeJS?promoid=BWBX2WJT&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-event="AppLauncher.appClick.Acrobat Sign"
                                                        data-analytics-url="https://adobe.na1.adobesign.com/account/homeJS?promoid=BWBX2WJT&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-app="Acrobat Sign:2|0"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/adobe_sign_appicon_noshadow_128.png"><span>Acrobat
                                                            Sign</span></a></li>
                                                <li data-test-id="unav-app-switcher--fonts-app-tile"><a
                                                        aria-label="Fonts" target="_blank" rel="noopener" tabindex="0"
                                                        href="https://fonts.adobe.com/?promoid=DHWC196Q&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Fonts"
                                                        data-analytics-url="https://fonts.adobe.com/?promoid=DHWC196Q&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Fonts:2|1"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/adobe_fonts_appicons_noshadow_128.png"><span>Fonts</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--behance-app-tile"><a
                                                        aria-label="Behance" target="_blank" rel="noopener" tabindex="0"
                                                        href="https://www.behance.net/?promoid=PGRQQ65X&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-event="AppLauncher.appClick.Behance"
                                                        data-analytics-url="https://www.behance.net/?promoid=PGRQQ65X&amp;mv=other&amp;mv2=unav&amp;locale=en-US"
                                                        data-analytics-app="Behance:2|2"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/be_appicon_128.png"><span>Behance</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--frame.io-app-tile"><a
                                                        aria-label="Frame.io" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://accounts.frame.io/adobe-login?promoid=TPQVKWSV&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-event="AppLauncher.appClick.Frame.io"
                                                        data-analytics-url="https://accounts.frame.io/adobe-login?promoid=TPQVKWSV&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-app="Frame.io:3|0"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/frameio_appicon_128.png"><span>Frame.io</span></a>
                                                </li>
                                                <li data-test-id="unav-app-switcher--experience-cloud-app-tile"><a
                                                        aria-label="Experience Cloud" target="_blank" rel="noopener"
                                                        tabindex="0"
                                                        href="https://experience.adobe.com/?promoid=F89JZJSJ&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-event="AppLauncher.appClick.Experience Cloud"
                                                        data-analytics-url="https://experience.adobe.com/?promoid=F89JZJSJ&amp;mv=other&amp;mv2=unav"
                                                        data-analytics-app="Experience Cloud:3|1"><img alt=""
                                                            src="https://prod.adobeccstatic.com/unav/assets/ec_appicon_noshadow_128.png"><span>Experience
                                                            Cloud</span></a></li>
                                                <li role="none" class="hiddenTile"></li>
                                            </ul>
                                        </div>
                                        <div class="unav-comp-app-switcher-popover-footer"
                                            data-test-id="unav-app-switcher--footer">
                                            <div aria-labelledby="unav-comp-app-switcher-popover-footer-title"
                                                class="unav-comp-app-switcher-popover-footer-item-wrapper"><a
                                                    class="unav-comp-app-switcher-popover-footer-item"
                                                    data-test-id="unav-app-switcher--adobe-dot-com-footer-item"
                                                    aria-label="Adobe.com" target="_blank" rel="noopener"
                                                    href="https://www.adobe.com?promoid=FMHMZSLF&amp;mv=other&amp;mv2=unav">
                                                    <div aria-hidden="true"
                                                        class="unav-comp-app-switcher-popover-footer-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.21 16">
                                                            <path
                                                                d="M9.02 5.1l-2.98 7.34h3.59L10.89 16H0L6.76 0h4.7l6.74 16h-4.79L9.01 5.1z"
                                                                fill="#eb1000"></path>
                                                        </svg></div><span>Adobe.com</span>
                                                </a><a class="unav-comp-app-switcher-popover-footer-item"
                                                    data-test-id="unav-app-switcher--see-all-apps-footer-item"
                                                    aria-label="All apps" target="_blank" rel="noopener"
                                                    href="https://www.adobe.com/products/catalog.html?promoid=FHRLZ9BG&amp;mv=other&amp;mv2=unav">
                                                    <div aria-hidden="true"
                                                        class="unav-comp-app-switcher-popover-footer-icon"><svg
                                                            width="20" height="20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.75 18.003h-1.5c-1.24 0-2.25-1.01-2.25-2.25v-1.5c0-1.24 1.01-2.25 2.25-2.25h1.5c1.24 0 2.25 1.01 2.25 2.25v1.5c0 1.24-1.01 2.25-2.25 2.25zm-1.5-4.5a.751.751 0 00-.75.75v1.5c0 .413.337.75.75.75h1.5c.413 0 .75-.337.75-.75v-1.5a.751.751 0 00-.75-.75h-1.5zM5.75 11.003h-1.5c-1.24 0-2.25-1.01-2.25-2.25v-1.5c0-1.24 1.01-2.25 2.25-2.25h1.5c1.24 0 2.25 1.01 2.25 2.25v1.5c0 1.24-1.01 2.25-2.25 2.25zm-1.5-4.5a.751.751 0 00-.75.75v1.5c0 .413.337.75.75.75h1.5c.413 0 .75-.337.75-.75v-1.5a.751.751 0 00-.75-.75h-1.5zM12.75 18.003h-1.5c-1.24 0-2.25-1.01-2.25-2.25v-1.5c0-1.24 1.01-2.25 2.25-2.25h1.5c1.24 0 2.25 1.01 2.25 2.25v1.5c0 1.24-1.01 2.25-2.25 2.25zm-1.5-4.5a.751.751 0 00-.75.75v1.5c0 .413.337.75.75.75h1.5c.413 0 .75-.337.75-.75v-1.5a.751.751 0 00-.75-.75h-1.5zM15.251 11.003h-3.5a2.753 2.753 0 01-2.75-2.75v-3.5a2.753 2.753 0 012.75-2.75h3.5a2.753 2.753 0 012.75 2.75v3.5a2.753 2.753 0 01-2.75 2.75zm-3.5-7.5c-.69 0-1.25.56-1.25 1.25v3.5c0 .69.56 1.25 1.25 1.25h3.5c.69 0 1.25-.56 1.25-1.25v-3.5c0-.69-.56-1.25-1.25-1.25h-3.5z">
                                                            </path>
                                                        </svg></div><span>All apps</span>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </nav>

        </div>
    </header>
    <main daa-im="true" style="padding-bottom: 96px;">
        <div class="section" daa-lh="s1">
            <div>
                <div class="fragment"
                    data-path="/uk/homepage/fragments/loggedout/tests/2024/q1/intl0046/intl0046-pakistan"
                    data-adobe-target-testid="INTL0046 - PZN - Direct Commerce Sites Banner XT">
                    <div class="section xs-spacing no-gap" style="background: rgb(17, 17, 17);">
                        <div class="text dark static-links center text-block con-block" data-block-status="loaded"
                            daa-lh="b1|text|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="foreground">
                                <div class="cta-container">
                                    <div class="body-m action-area"><strong class="tracking-header">We are now selling
                                            in Pakistan!</strong> <a href="/creativecloud/plans.html"
                                            class="con-button outline" daa-ll="Buy now-1--We are now selling i">Buy
                                            now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-metadata" data-block-status="loaded">
                            <div>
                                <div>background</div>
                                <div>#111</div>
                            </div>
                            <div>
                                <div>style</div>
                                <div>Xs spacing, no gap</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" daa-lh="s2">
            <div class="hero-marquee l-min-height-desktop bg-top-mobile bg-top-tablet static-links media-cover-bottom media-hidden-mobile media-hidden-tablet dark-desktop dark-tablet dark-mobile-only con-block has-bg"
                data-block-status="loaded" style="background: rgb(0, 0, 0);"
                daa-lh="b1|hero-marquee|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                <div class="background">
                    <div class="mobile-only">
                        <picture>
                            <source type="image/webp"
                                srcset="upp-shared/media_17abefe49968ccc0817819e60af1bc944a4239359.png?width=2000&amp;format=webply&amp;optimize=medium"
                                media="(min-width: 600px)">
                            <source type="image/webp"
                                srcset="upp-shared/media_17abefe49968ccc0817819e60af1bc944a4239359.png?width=750&amp;format=webply&amp;optimize=medium">
                            <source type="image/png"
                                srcset="upp-shared/media_17abefe49968ccc0817819e60af1bc944a4239359.png?width=2000&amp;format=png&amp;optimize=medium"
                                media="(min-width: 600px)">
                            <img loading="eager" alt=""
                                src="upp-shared/media_17abefe49968ccc0817819e60af1bc944a4239359.png?width=750&amp;format=png&amp;optimize=medium"
                                width="1080" height="810" fetchpriority="high">
                        </picture>
                    </div>
                    <div class="tablet-only">
                        <picture>
                            <source type="image/webp"
                                srcset="upp-shared/media_1275694ca155b78ce3b5bc816e0b8887da3d83ed9.png?width=2000&amp;format=webply&amp;optimize=medium"
                                media="(min-width: 600px)">
                            <source type="image/webp"
                                srcset="upp-shared/media_1275694ca155b78ce3b5bc816e0b8887da3d83ed9.png?width=750&amp;format=webply&amp;optimize=medium">
                            <source type="image/png"
                                srcset="upp-shared/media_1275694ca155b78ce3b5bc816e0b8887da3d83ed9.png?width=2000&amp;format=png&amp;optimize=medium"
                                media="(min-width: 600px)">
                            <img loading="lazy" alt=""
                                src="upp-shared/media_1275694ca155b78ce3b5bc816e0b8887da3d83ed9.png?width=750&amp;format=png&amp;optimize=medium"
                                width="2304" height="780">
                        </picture>
                    </div>
                    <div class="desktop-only expand-background" style="background: rgb(0, 0, 0);"></div>
                </div>

                <div class="foreground cols-2">
                    <div class="copy">
                        <div class="main-copy l-lockup l-button">
                            <p class="detail-l">ADOBE ACROBAT</p>
                            <h1 id="transform-how-you-share-information" class="heading-xxl">Transform how you share
                                information.</h1>
                        </div>
                        <div class="row-text con-block order-0-desktop norm">

                            <div class="row-wrapper">
                                <p class="body-xl">Bring together files, ideas, and an AI Assistant into a guided
                                    experience with PDF Spaces.</p>
                            </div>
                        </div>
                        <div class="row-text con-block order-1-desktop norm">

                            <div class="row-wrapper">
                                <p class="action-area"><a class="con-button blue button-xl"
                                        href="<?php echo htmlspecialchars(CW_BASE_URL . '/acrobat/generative-ai-pdf/', ENT_QUOTES, 'UTF-8'); ?>"
                                        aria-label="Free trial - Acrobat AI Assistant"
                                        daa-ll="Free trial-1--Transform how you sh"><span
                                            style="pointer-events: none;">Free trial</span></a> <a
                                        href="<?php echo htmlspecialchars(CW_BASE_URL . '/acrobat/generative-ai-pdf/', ENT_QUOTES, 'UTF-8'); ?>"
                                        daa-ll="Learn more-2--Transform how you sh">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="asset">

                    </div>
                </div>


                <div class="foreground-media">
                    <picture style="--media-cover-position: bottom;">
                        <source type="image/webp"
                            srcset="upp-shared/media_1393af2d1206af82052e8366aa1d72d8905f79460.png?width=2000&amp;format=webply&amp;optimize=medium"
                            media="(min-width: 600px)">
                        <source type="image/webp"
                            srcset="upp-shared/media_1393af2d1206af82052e8366aa1d72d8905f79460.png?width=750&amp;format=webply&amp;optimize=medium">
                        <source type="image/png"
                            srcset="upp-shared/media_1393af2d1206af82052e8366aa1d72d8905f79460.png?width=2000&amp;format=png&amp;optimize=medium"
                            media="(min-width: 600px)">
                        <img loading="lazy" alt=""
                            src="upp-shared/media_1393af2d1206af82052e8366aa1d72d8905f79460.png?width=750&amp;format=png&amp;optimize=medium"
                            width="2880" height="2100" style="object-position: 50.37% 40.01%;">
                    </picture>
                </div>
            </div>
        </div>
        <div class="section" daa-lh="s3">
            <div class="section-metadata link-bar-placeholder" data-block-status="loaded">
                <div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="section masonry masonry-up" daa-lh="s4">
            <div>
                <div class="fragment"
                    data-path="/homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/cc-ip-promo-mweb-174498">
                    <div class="section" data-has-placeholders="true">
                        <div class="homepage-brick dark click" data-block-status="loaded"
                            daa-lh="b1|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="background first-background" style="background: rgb(0, 0, 0);">

                            </div>
                            <div class="background">
                                <div class="mobileOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_18e39cd2eb27838d7a098143c5d78dd1661872339.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_18e39cd2eb27838d7a098143c5d78dd1661872339.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_18e39cd2eb27838d7a098143c5d78dd1661872339.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_18e39cd2eb27838d7a098143c5d78dd1661872339.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="624" height="390"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                                <div class="tabletOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_1a4da02d7ba3e2e09ea8fca23c2cde87dbd01b257.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_1a4da02d7ba3e2e09ea8fca23c2cde87dbd01b257.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_1a4da02d7ba3e2e09ea8fca23c2cde87dbd01b257.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_1a4da02d7ba3e2e09ea8fca23c2cde87dbd01b257.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="690" height="482"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                                <div class="desktopOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_170db6867c044273e2d5d760909670ab66f1c52e9.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_170db6867c044273e2d5d760909670ab66f1c52e9.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_170db6867c044273e2d5d760909670ab66f1c52e9.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/media_170db6867c044273e2d5d760909670ab66f1c52e9.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="1160" height="582"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                            </div>
                            <a href="/creativecloud/plans.html?promoid=TBJRLL8W&amp;mv=other"
                                daa-ll="Buy now-1--Save 50 on Creative" class="foreground">
                                <div class="body-m">
                                    <h2 id="save-ccp-intro-offer-percentage-on-creative-cloud-pro" class="heading-m">
                                        Save 50% on Creative Cloud Pro.</h2>
                                    <p class="body-m">Get Photoshop, Illustrator, and more apps plus creative AI. And
                                        save for the first 3 months. Terms apply.*</p>
                                    <p class="body-m">
                                    <div class="click-link body-xs">Buy now</div>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fragment"
                    data-path="/homepage/fragments/loggedout/pods/2026/ff-promo/ff-promo-ext-5-20-180708">
                    <div class="section">
                        <div class="homepage-brick dark click" data-block-status="loaded"
                            daa-lh="b2|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="background first-background" style="background: rgb(0, 0, 0);">

                            </div>
                            <div class="background">
                                <div class="mobileOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="690" height="472"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                                <div class="tabletOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/2026/ff-promo/media_1124c2c83e89f28c053394185ea325176d672b919.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="690" height="472"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                                <div class="desktopOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_11ebc19f3bc2719a69e1e0420b8bdc61a573db2e8.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_11ebc19f3bc2719a69e1e0420b8bdc61a573db2e8.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/2026/ff-promo/media_11ebc19f3bc2719a69e1e0420b8bdc61a573db2e8.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/2026/ff-promo/media_11ebc19f3bc2719a69e1e0420b8bdc61a573db2e8.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="1857" height="966"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                            </div>
                            <a href="/products/firefly.html" daa-ll="Learn more-1--Save 50 and go unlim"
                                class="foreground">
                                <div class="body-m">
                                    <p class="detail-l">Adobe Firefly</p>
                                    <h2 id="save-50-and-go-unlimited-until-may-20" class="heading-m">Save 50% and go
                                        unlimited until May 20.</h2>
                                    <p class="body-m">Get unlimited generations on select models and save 50% on our
                                        biggest Firefly plans.</p>
                                    <p class="body-m">
                                    <div class="click-link body-xs">Learn more</div>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fragment" data-path="/homepage/fragments/loggedout/pods/cc/link-pod-cclo-3-1-93214">
                    <div class="section" data-has-placeholders="true">
                        <div class="homepage-brick link split-background" data-block-status="loaded"
                            daa-lh="b3|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="background first-background"></div>
                            <div class="body-xs foreground">
                                <div class="body-xs">
                                    <h2 id="creative-cloud" class="heading-m">Creative Cloud</h2>
                                    <p class="body-xs"><a is="checkout-link" data-checkout-workflow-step="segmentation"
                                            data-modal="crm" data-quantity="1"
                                            data-wcs-osi="JzW8dgW8U1SrgbHDmTE-ABsOKPgtl5jugiW8bA5PtKg"
                                            data-extra-options="{&quot;rf&quot;:&quot;uc_segmentation_hide_tabs_cr&quot;}"
                                            class="placeholder-resolved" aria-label="Creative Cloud Pro free trial"
                                            href="https://commerce.adobe.com/store/segmentation?cli=creative&amp;ctx=if&amp;co=US&amp;rf=uc_segmentation_hide_tabs_cr&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close"
                                            data-modal-id="mini-plans-web-cta-creative-cloud-card"
                                            daa-ll="Creative Cloud Pro f-1--Creative Cloud"><span
                                                style="pointer-events: none;">Creative Cloud Pro free trial</span></a>
                                    </p>
                                    <p class="body-xs"><a href="/creativecloud/business.html"
                                            daa-ll="Creative Cloud for b-2--Creative Cloud">Creative Cloud for
                                            business</a></p>
                                    <p class="body-xs"><a href="/creativecloud/buy/students.html"
                                            daa-ll="Student pricing-3--Creative Cloud">Student pricing</a></p>
                                </div>
                                <div class="body-xs">
                                    <h2 id="acrobat" class="heading-m">Acrobat</h2>
                                    <p class="body-xs"><a is="checkout-link" data-checkout-workflow-step="segmentation"
                                            data-modal="crm" data-quantity="1"
                                            data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ"
                                            data-extra-options="{}" class="placeholder-resolved"
                                            aria-label="Acrobat free trial"
                                            href="https://commerce.adobe.com/store/segmentation?cli=creative&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=apcc_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close"
                                            data-modal-id="mini-plans-web-cta-acrobat-pro-card"
                                            daa-ll="Acrobat free trial-4--Acrobat"><span
                                                style="pointer-events: none;">Acrobat free trial</span></a></p>
                                    <p class="body-xs"><a href="/acrobat/online.html"
                                            daa-ll="Online PDF tools-5--Acrobat">Online PDF tools</a></p>
                                    <h2 id="explore" class="heading-m">Explore</h2>
                                    <p class="body-xs"><a href="/products/catalog.html"
                                            daa-ll="View all products-6--Explore">View all products</a></p>
                                    <p class="body-xs"><a href="/creativecloud/plans.html"
                                            daa-ll="See all plans and pr-7--Explore">See all plans and pricing</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fragment"
                    data-path="/homepage/fragments/loggedout/pods/superbowl-us-02-05-26/photoshop-176307">
                    <div class="section">
                        <div class="homepage-brick dark click" data-block-status="loaded"
                            daa-lh="b4|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="background first-background" style="background: rgb(0, 0, 0);">

                            </div>
                            <div class="background">
                                <div class="mobileOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_147bcf656643a766f8be60a99e7ad1e8b2003bd1a.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_147bcf656643a766f8be60a99e7ad1e8b2003bd1a.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_147bcf656643a766f8be60a99e7ad1e8b2003bd1a.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_147bcf656643a766f8be60a99e7ad1e8b2003bd1a.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="624" height="900"
                                            style="object-position: center bottom; object-fit: cover;">
                                    </picture>
                                </div>
                                <div class="tabletOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_101ac13081f11a71e11131a61c4bf459b8c11b947.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_101ac13081f11a71e11131a61c4bf459b8c11b947.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_101ac13081f11a71e11131a61c4bf459b8c11b947.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_101ac13081f11a71e11131a61c4bf459b8c11b947.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="690" height="1000"
                                            style="object-position: center bottom; object-fit: cover;">
                                    </picture>
                                </div>
                                <div class="desktopOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_1ab39dc6bdbb41609497f2ffa266c535658857ca6.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_1ab39dc6bdbb41609497f2ffa266c535658857ca6.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_1ab39dc6bdbb41609497f2ffa266c535658857ca6.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/superbowl-us-02-05-26/media_1ab39dc6bdbb41609497f2ffa266c535658857ca6.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="1857" height="1500"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                            </div>
                            <a href="/products/photoshop.html" daa-ll="Learn more-1--New partner AI model"
                                class="foreground">
                                <div class="body-m">
                                    <p class="detail-l">ADOBE PHOTOSHOP</p>
                                    <h2 id="new-partner-ai-models-in-generative-fill" class="heading-m">New partner AI
                                        models in Generative Fill.</h2>
                                    <p class="body-m">Create with Gemini 3 (with Nano Banana Pro) and FLUX.2 pro.</p>
                                    <p class="body-m">
                                    <div class="click-link body-xs">Learn more</div>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fragment" data-path="/homepage/fragments/loggedout/pods/max-2025/business-166823">
                    <div class="section">
                        <div class="homepage-brick dark click" data-block-status="loaded"
                            daa-lh="b5|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="background first-background" style="background: rgb(0, 0, 0);">

                            </div>
                            <div class="background">
                                <div class="mobileOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1280d383cbefe740d319edb752d512a8fbf32cad1.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1280d383cbefe740d319edb752d512a8fbf32cad1.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1280d383cbefe740d319edb752d512a8fbf32cad1.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/max-2025/media_1280d383cbefe740d319edb752d512a8fbf32cad1.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="624" height="900"
                                            style="object-position: center bottom; object-fit: cover;">
                                    </picture>
                                </div>
                                <div class="tabletOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_165f5c9100fd158ccd1ad200b17b778a6d0692596.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_165f5c9100fd158ccd1ad200b17b778a6d0692596.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_165f5c9100fd158ccd1ad200b17b778a6d0692596.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/max-2025/media_165f5c9100fd158ccd1ad200b17b778a6d0692596.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="690" height="1000"
                                            style="object-position: center bottom; object-fit: cover;">
                                    </picture>
                                </div>
                                <div class="desktopOnly">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1869b11c5e5bfb9e736d4e457b1f5c035661275ed.png?width=2000&amp;format=webply&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <source type="image/webp"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1869b11c5e5bfb9e736d4e457b1f5c035661275ed.png?width=750&amp;format=webply&amp;optimize=medium">
                                        <source type="image/png"
                                            srcset="homepage/fragments/loggedout/pods/max-2025/media_1869b11c5e5bfb9e736d4e457b1f5c035661275ed.png?width=2000&amp;format=png&amp;optimize=medium"
                                            media="(min-width: 600px)">
                                        <img loading="lazy" alt=""
                                            src="homepage/fragments/loggedout/pods/max-2025/media_1869b11c5e5bfb9e736d4e457b1f5c035661275ed.png?width=750&amp;format=png&amp;optimize=medium"
                                            width="1857" height="1500"
                                            style="object-position: center bottom; object-fit: contain;">
                                    </picture>
                                </div>
                            </div>
                            <div class="foreground" role="group" aria-label="Adobe for Business"
                                daa-ll="Learn more-1--It starts with Adobe">
                                <div class="body-m">
                                    <p class="detail-l">ADOBE FOR BUSINESS</p>
                                    <h2 id="it-starts-with-adobe" class="heading-m">It starts with Adobe.</h2>
                                    <p class="body-m">From AI frenzy to marketing ROI. Unify data, content, and
                                        workflows with Adobe AI.</p>
                                    <p class="body-m">
                                    <div class="click-link body-xs">Learn more</div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fragment" data-path="/homepage/fragments/loggedout/pods/news/news-pod-10-25-23-104498">
                    <div class="section">
                        <div class="homepage-brick news" data-block-status="loaded"
                            daa-lh="b6|homepage-brick|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="highlight-row">
                                <div class="body-s">
                                    <h2 id="in-the-news" class="heading-xs">In the news</h2>
                                </div>
                            </div>
                            <div class="body-s foreground">
                                <div class="body-s">
                                    <h3 id="prepareyour-taxes-with-adobe-acrobat-this-season" class="heading-xs">
                                        Prepare&nbsp;your taxes with Adobe Acrobat this season.</h3>
                                    <p class="body-s">With Adobe Acrobat, tax prep can be easier,&nbsp;faster&nbsp;and
                                        more secure.</p>
                                    <p class="body-s"><span class="body-xs"
                                            daa-ll="Read the story-1--Prepare your taxes w">Read the story</span></p>
                                    <hr>
                                    <h3 id="get-more-done-with-new-ai-features-in-acrobat" class="heading-xs">Get more
                                        done with new AI features in Acrobat.</h3>
                                    <p class="body-s">Quickly create polished presentations, audio summaries, and more.
                                    </p>
                                    <p class="body-s"><span class="body-xs"
                                            daa-ll="Read the story-2--Get more done with n">Read the story</span></p>
                                    <hr>
                                    <h3 id="adobe-apps-are-top-choice-for-sundance-filmmakers" class="heading-xs">Adobe
                                        apps are top choice for Sundance filmmakers.</h3>
                                    <p class="body-s">Pros depend on Premiere, After Effects, and cutting-edge creative
                                        AI.</p>
                                    <p class="body-s"><span class="body-xs"
                                            daa-ll="Read the story-3--Adobe apps are top c">Read the story</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-metadata" data-block-status="loaded">
                <div>
                    <div>style</div>
                    <div><strong>masonry</strong></div>
                </div>
            </div>
        </div>
        <div class="section" daa-lh="s5">
            <div>
                <div class="fragment"
                    data-path="/homepage/fragments/loggedout/pods/cc-ip-promo-q1-jan-26/cci-footnote-174497">
                    <div class="section">
                        <div class="text long-form small center full-width no-spacing s-spacing-bottom text-block con-block max-width-8-desktop xxl-spacing"
                            data-block-status="loaded"
                            daa-lh="b1|text|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
                            <div class="foreground">
                                <div class="body-s">* Creative Cloud for individuals offer available for new
                                    subscribers. Requires a 12-month commitment. <a
                                        href="https://www.adobe.com/offer-terms/cc_full_special_offer.html"
                                        target="_blank" daa-ll="See terms-1--">See terms.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" daa-lh="s6">
            <div>
                <div class="fragment"
                    data-path="/upp-shared/fragments/tests/2026/q2/ace1165v2/ace1165v2-floating-bc-button-consonant1"
                    data-adobe-target-testid="[Rollout] ACE1165v2 | US | BC AB (floating banner) on Homepage">
                    <div class="section">
                        <div class="brand-concierge floating-button-only" data-block-status="loaded"
                            daa-lh="b1|brand-concierge|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">





                            <section class="bc-floating-button floating-show" style="bottom: 0px;"><button
                                    class="bc-floating-button-container no-track"
                                    daa-ll="Filters|app-reco|bc#floating-bc">
                                    <div class="bc-floating-icon"><svg class="floating-icon" title="Ask" width="20"
                                            height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.91819 13.2491C9.69944 13.2491 9.47874 13.1924 9.27952 13.0772C8.79807 12.7989 8.55491 12.2471 8.67307 11.7041L9.40061 8.33011L7.08225 5.77249C6.7092 5.36038 6.64475 4.76077 6.92307 4.27933C7.20139 3.79691 7.75803 3.55374 8.29612 3.67288L11.6701 4.40042L14.2278 2.08206C14.6409 1.70706 15.2405 1.64554 15.7209 1.92288C16.2024 2.2012 16.4455 2.75296 16.3274 3.29593L15.5998 6.66995L17.9182 9.22757C18.2912 9.6387 18.3547 10.2383 18.0774 10.7198C17.7991 11.2002 17.2493 11.4453 16.7053 11.3282L13.3313 10.5987L10.7727 12.918C10.5315 13.1368 10.2258 13.2491 9.91819 13.2491ZM10.8918 8.53324L10.2873 11.333L12.4094 9.40921C12.7121 9.1348 13.1301 9.02151 13.5315 9.10745L16.3332 9.71292L14.4094 7.59085C14.134 7.28616 14.0217 6.86526 14.1096 6.46487L14.7131 3.66702L12.5911 5.59085C12.2864 5.86624 11.8664 5.97757 11.4651 5.89065L8.66722 5.28713L10.5911 7.4092C10.8664 7.71291 10.9787 8.13285 10.8918 8.53324Z"
                                                fill="url(#ai-icon-floating-1)"></path>
                                            <path
                                                d="M3.34569 18.252C3.21678 18.252 3.08788 18.2188 2.97069 18.1514C2.68846 17.9883 2.54393 17.6622 2.61229 17.3438L2.91893 15.9258L1.94432 14.8516C1.72557 14.6104 1.68748 14.2549 1.85057 13.9727C2.01366 13.6905 2.34178 13.5498 2.65819 13.6143L4.07616 13.9209L5.15038 12.9463C5.39257 12.7266 5.74608 12.6895 6.02929 12.8526C6.31152 13.0157 6.45605 13.3418 6.38769 13.6602L6.08105 15.0782L7.05566 16.1524C7.27441 16.3936 7.3125 16.7491 7.14941 17.0313C6.98632 17.3135 6.65722 17.4522 6.34179 17.3897L4.92382 17.0831L3.8496 18.0577C3.708 18.1856 3.52733 18.252 3.34569 18.252Z"
                                                fill="url(#ai-icon-floating-2)"></path>
                                            <defs>
                                                <linearGradient id="ai-icon-floating-1" x1="6.75122" y1="1.75085"
                                                    x2="19.2946" y2="3.03523" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#D73220"></stop>
                                                    <stop offset="0.33" stop-color="#D92361"></stop>
                                                    <stop offset="1" stop-color="#7155FA"></stop>
                                                </linearGradient>
                                                <linearGradient id="ai-icon-floating-2" x1="1.75" y1="12.7517"
                                                    x2="7.75027" y2="13.3661" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#D73220"></stop>
                                                    <stop offset="0.33" stop-color="#D92361"></stop>
                                                    <stop offset="1" stop-color="#7155FA"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></div>
                                    <div class="bc-floating-input">Ask a question</div>
                                    <div class="bc-floating-submit"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="send-icon" width="20" height="20" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M18.6485 9.9735C18.6482 9.67899 18.4769 9.41106 18.2059 9.29056L4.05752 2.93282C3.80133 2.8175 3.50129 2.85583 3.28171 3.03122C3.06178 3.20765 2.95889 3.49146 3.01516 3.76733L4.28678 10.008L3.06488 16.2384C3.0162 16.4852 3.09492 16.738 3.27031 16.9134C3.29068 16.9337 3.31278 16.9531 3.33522 16.9714C3.55619 17.1454 3.85519 17.182 4.11069 17.066L18.2086 10.6578C18.4773 10.5356 18.6489 10.268 18.6485 9.9735ZM14.406 9.22716L5.66439 9.25379L4.77705 4.90084L14.406 9.22716ZM4.81711 15.0973L5.6694 10.7529L14.4323 10.7264L4.81711 15.0973Z">
                                            </path>
                                        </svg></div>
                                </button></section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div>
        <style>
            .homepage-brick.news .highlight-row {
                background: #000 !important;
            }
        </style>
    </div>
    <div>
        <style>
            .homepage-brick.link.split-background>.foreground> :first-child {
                background: #000 !important;
            }
        </style>
    </div>
    <footer class="global-footer" data-block-status="loaded"
        daa-lh="gnav|homepage_milo|footer|intl0046-pakist--all--var1|intl0046pzn--hp-05-11-26-hp---ace1165v2">
        <div class="feds-footer-icons"><!--?xml version="1.0" encoding="utf-8"?-->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                <symbol id="footer-icon-globe" viewBox="0 0 50 50">
                    <path
                        d="M50 23.8c-.2-3.3-1-6.5-2.4-9.5A24.81 24.81 0 0 0 26.2 0h-2.4C14.6.4 6.3 5.9 2.4 14.3 1 17.3.2 20.5 0 23.8v2.4c.2 3.3 1 6.5 2.4 9.5 4 8.4 12.2 13.9 21.4 14.3h2.4c9.2-.4 17.5-5.9 21.4-14.3 1.4-3 2.2-6.2 2.4-9.5v-2.4zm-2.4 0h-9.5c0-3.2-.4-6.4-1.2-9.5H45c1.6 2.9 2.5 6.2 2.6 9.5zm-14-11.9h-7.4V2.6c3.1.7 5.7 4.5 7.4 9.3zm-9.8-9.3v9.3h-7.4c1.7-4.8 4.3-8.6 7.4-9.3zm0 11.7v9.5h-9.5c.1-3.2.6-6.4 1.4-9.5h8.1zm0 11.9v9.5h-8.1c-.8-3.1-1.3-6.3-1.4-9.5h9.5zm0 11.9v9.3c-3.1-.7-5.7-4.5-7.4-9.3h7.4zm2.4 9.3v-9.3h7.4c-1.7 4.8-4.3 8.6-7.4 9.3zm0-11.7v-9.5h9.5c-.1 3.2-.6 6.4-1.4 9.5h-8.1zm0-11.9v-9.5h8.1c.8 3.1 1.3 6.3 1.4 9.5h-9.5zm17.1-11.9h-7.1c-.9-3.1-2.4-6.1-4.5-8.6 4.7 1.5 8.8 4.5 11.6 8.6zM18.6 3.3c-2.2 2.5-3.8 5.4-4.8 8.6H6.7c2.9-4.1 7.1-7.1 11.9-8.6zM5 14.3h8.1c-.7 3.1-1.1 6.3-1.2 9.5H2.4c.1-3.3 1-6.6 2.6-9.5zM2.4 26.2h9.5c0 3.2.4 6.4 1.2 9.5H5c-1.6-2.9-2.5-6.2-2.6-9.5zm4 11.9h7.4c.9 3.1 2.4 6.1 4.5 8.6-4.7-1.5-8.8-4.5-11.7-8.6h-.2zm25 8.6c2.2-2.5 3.8-5.4 4.8-8.6h7.4c-3 4.1-7.3 7.2-12.2 8.6zm13.6-11h-8.1c.7-3.1 1.1-6.3 1.2-9.5h9.5c-.1 3.3-1 6.6-2.6 9.5z">
                    </path>
                </symbol>

                <symbol id="footer-icon-adchoices" viewBox="0 0 9 9">
                    <path
                        d="M7.99 5.23c.78-.43.92-.97.01-1.51L1.61.23C.83-.21.2.15.2 1.03v6.88c0 1.13.59 1.24 1.37.82l.73-.41c.12-.08.4-.32.32-.64-.07-.3-.33-.39-.62-.31-.44.24-.71 0-.71-.49v-4.9c0-.49.35-.69.78-.45l4.41 2.52c.43.25.43.64-.01.88L3.75 6.34V4.67a.47.47 0 1 0-.94 0v2.37c0 .26.22.44.47.53.1.04.3.05.44-.03l4.27-2.31z">
                    </path>
                    <path d="M3.79 3.42a.5.5 0 1 1-.98 0 .5.5 0 0 1 .98 0"></path>
                </symbol>

                <symbol id="footer-icon-facebook" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M28.44 0a6.32 6.32 0 0 1 4.63 1.93A6.32 6.32 0 0 1 35 6.55v21.88A6.57 6.57 0 0 1 28.44 35h-4.29V21.44h4.54l.68-5.28h-5.22v-3.38a2.92 2.92 0 0 1 .54-1.91 2.66 2.66 0 0 1 2.08-.64l2.78-.02V5.49a30.54 30.54 0 0 0-4.05-.2 6.77 6.77 0 0 0-4.96 1.82 6.9 6.9 0 0 0-1.85 5.15v3.9h-4.56v5.28h4.55V35H6.57a6.32 6.32 0 0 1-4.63-1.93A6.32 6.32 0 0 1 0 28.45V6.56a6.32 6.32 0 0 1 1.93-4.63A6.32 6.32 0 0 1 6.55 0Z">
                    </path>
                </symbol>

                <symbol id="footer-icon-instagram" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M4.5.1h26c2.4-.1 4.5 1.8 4.6 4.3v25.9c.1 2.5-1.9 4.5-4.4 4.6H4.5C2.1 35 0 33.1-.1 30.6V4.4C0 2 2.1 0 4.5.1zM25.7 4c-.8 0-1.5.6-1.5 1.5V9.3c0 .8.6 1.5 1.5 1.5h4c.8 0 1.5-.6 1.5-1.5V5.5c0-.8-.6-1.5-1.5-1.5h-4zm5.4 10.9H28a10.67 10.67 0 0 1-10.3 13.6h-.2c-5.9 0-10.9-4.8-10.9-10.5 0-1 .2-2.1.4-3.1H3.9v14.8c0 .7.6 1.3 1.3 1.3h24.2c.7 0 1.3-.5 1.3-1.2V14.9h.4zm-13.5-4.4c-3.7.1-6.7 3.2-6.5 7s3.2 6.7 7 6.5c3.7-.1 6.5-3.1 6.5-6.8-.1-3.7-3.2-6.7-7-6.7z">
                    </path>
                </symbol>

                <symbol id="footer-icon-twitter" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M28.5 0h-22C2.9 0 0 2.9 0 6.5v22C0 32.1 2.9 35 6.5 35h22c3.6 0 6.5-2.9 6.5-6.5v-22C35 2.9 32.1 0 28.5 0zM30 30.4h-5.9c-.3 0-.6-.1-.8-.4L16 21l-7.3 9.1c-.2.2-.5.4-.8.4-.2 0-.4-.1-.6-.2-.4-.3-.5-1-.2-1.4l7.6-9.5L4.2 6.2c-.4-.4-.3-1.1.1-1.4.2-.2.4-.2.7-.2h5.9c.3 0 .6.1.8.4l7.3 9 7.3-9.1c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-7.6 9.5 10.5 13.1c.2.2.3.4.3.7-.1.6-.5 1-1.1 1zm-2.1-2h-3.3L7.1 6.6h3.3l17.5 21.8z">
                    </path>
                </symbol>

                <symbol id="footer-icon-linkedin" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M5.4 29.3h5.26V13.49H5.4ZM11 8.61a2.7 2.7 0 0 0-.81-1.96 2.9 2.9 0 0 0-2.12-.78 3.03 3.03 0 0 0-2.16.78 2.56 2.56 0 0 0-.83 1.96 2.6 2.6 0 0 0 .81 1.95 2.9 2.9 0 0 0 2.11.79h.02a3 3 0 0 0 2.17-.79A2.59 2.59 0 0 0 11 8.61ZM24.34 29.3h5.26v-9.07a7.56 7.56 0 0 0-1.66-5.3 5.7 5.7 0 0 0-4.4-1.8 5.3 5.3 0 0 0-4.76 2.66h.04v-2.3h-5.26q.07 1.5 0 15.81h5.26v-8.84a3.75 3.75 0 0 1 .16-1.27 3.52 3.52 0 0 1 1.03-1.36 2.58 2.58 0 0 1 1.68-.56q2.64 0 2.65 3.58ZM35 6.56v21.88A6.57 6.57 0 0 1 28.44 35H6.56a6.32 6.32 0 0 1-4.63-1.93A6.32 6.32 0 0 1 0 28.45V6.56a6.32 6.32 0 0 1 1.93-4.63A6.32 6.32 0 0 1 6.55 0h21.88a6.32 6.32 0 0 1 4.63 1.93A6.32 6.32 0 0 1 35 6.55Z">
                    </path>
                </symbol>

                <symbol id="footer-icon-pinterest" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M27.7 0H7.3C3.3 0 0 3.3 0 7.3v20.4c0 4 3.3 7.3 7.3 7.3h20.4c4 0 7.3-3.3 7.3-7.3V7.3c0-4-3.3-7.3-7.3-7.3zm-10 29.3c-1.2 0-2.4-.2-3.4-.5.5-.8 1.2-2.1 1.5-3.2.1-.5.7-2.8.7-2.8.4.7 1.5 1.3 2.7 1.3 3.5 0 6-3.2 6-7.2S22 10.3 18 10.3c-5 0-7.7 3.4-7.7 7 0 1.7.9 3.8 2.4 4.5.2.1.3.1.4-.2 0-.2.2-1 .3-1.3 0-.1 0-.2-.1-.3-.5-.6-.9-1.7-.9-2.7 0-2.6 1.9-5 5.3-5 2.9 0 4.9 2 4.9 4.7 0 3.1-1.6 5.3-3.7 5.3-1.1 0-2-.9-1.7-2.1.3-1.4 1-2.9 1-3.9 0-.9-.5-1.6-1.5-1.6-1.2 0-2.1 1.2-2.1 2.8 0 1 .3 1.7.3 1.7s-1.2 4.9-1.4 5.8c-.2 1.1-.1 2.6 0 3.5C9.1 26.9 6 22.6 6 17.6 6 11.2 11.2 6 17.6 6s11.7 5.2 11.7 11.7-5.2 11.6-11.6 11.6z">
                    </path>
                </symbol>

                <symbol id="footer-icon-discord" viewBox="0 0 35 35">
                    <g fill="currentColor">
                        <path
                            d="M22.1 15.7c-1.4 0-2.5 1.3-2.5 2.8s1.1 2.8 2.5 2.8 2.5-1.3 2.5-2.8c0-1.5-1.1-2.8-2.5-2.8zM12.9 15.7c-1.4 0-2.5 1.3-2.5 2.8s1.1 2.8 2.5 2.8 2.5-1.3 2.5-2.8c0-1.5-1.1-2.8-2.5-2.8z">
                        </path>
                        <path
                            d="M27.7 0H7.3C3.3 0 0 3.3 0 7.3v20.4c0 4 3.3 7.3 7.3 7.3h20.4c4 0 7.3-3.3 7.3-7.3V7.3c0-4-3.3-7.3-7.3-7.3zm3.6 24.5c-.1 0-.1 0 0 0-2.4 1.8-4.7 2.9-7 3.6h-.1c-.5-.7-1-1.5-1.4-2.3v-.1c.8-.3 1.5-.6 2.2-1 .1 0 .1-.1 0-.1-.1-.1-.3-.2-.4-.3h-.1c-4.5 2.1-9.4 2.1-13.9 0h-.1c-.1.1-.3.2-.4.3-.1 0 0 .1 0 .1.7.4 1.4.7 2.2 1 0 0 .1.1 0 .1-.4.8-.9 1.6-1.4 2.3h-.1c-2.3-.7-4.6-1.8-6.9-3.5v-.1c-.6-5.2.3-10.4 3.9-15.8 1.8-.8 3.7-1.4 5.6-1.8h.1l.7 1.4c2.1-.3 4.2-.3 6.3 0l.7-1.4h.1c2 .3 3.9.9 5.6 1.8 3.4 4.6 4.9 9.8 4.4 15.8z">
                        </path>
                    </g>
                </symbol>

                <symbol id="footer-icon-behance" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M12 21.9H8.8V19H12c2.8 0 3 2.9 0 2.9zm9.9-3.9h4.4c-.2-2.5-4-2.9-4.4 0zm-10-4.9H8.8V16h3.5c2.4 0 2.8-2.9-.4-2.9zM35 7.3v20.4c0 4-3.3 7.3-7.3 7.3H7.3c-4 0-7.3-3.3-7.3-7.3V7.3C0 3.3 3.3 0 7.3 0h20.4c4 0 7.3 3.3 7.3 7.3zm-14.6 4.4h7.3v-1.5h-7.3v1.5zm-5.2 5.2c2.8-1.4 2.7-6.6-2.6-6.7H5.8v14.6h6.3c6.6 0 6.5-6.6 3.1-7.9zm13.9.9c-.4-2.6-2.2-4.3-5.2-4.3-3.1 0-4.9 2-4.9 5.8s2 5.5 5 5.5 4.5-1.7 5-2.9h-3.1c-1.1 1.2-4.2.8-4-2h7.4c-.1-.9-.2-1.6-.2-2.1z">
                    </path>
                </symbol>

                <symbol id="footer-icon-youtube" viewBox="0 0 35 35">
                    <path fill="currentColor"
                        d="M27.7 0H7.3C3.3 0 0 3.3 0 7.3v20.4c0 4 3.3 7.3 7.3 7.3h20.4c4 0 7.3-3.3 7.3-7.3V7.3c0-4-3.3-7.3-7.3-7.3zm2.6 23.9a3.3 3.3 0 0 1-2.3 2.4c-3.3.8-17.9.7-20.9 0-1.2-.3-2.1-1.2-2.4-2.4-.8-3.1-.7-9.8 0-12.8A3.3 3.3 0 0 1 7 8.7c4.4-.9 19.4-.6 20.9 0 1.2.3 2.1 1.2 2.4 2.4.8 3.3.8 9.5 0 12.8z">
                    </path>
                    <path fill="currentColor" d="m14.9 21.5 7-4-7-4z"></path>
                </symbol>

                <symbol id="footer-icon-weibo" viewBox="0 0 18 18">
                    <path fill="currentColor"
                        d="M15.94 3.35a4.1 4.1 0 0 0-3.9-1.26.6.6 0 1 0 .25 1.16A2.92 2.92 0 0 1 15.67 7a.6.6 0 0 0 1.13.37 4.1 4.1 0 0 0-.86-4.02Z">
                    </path>
                    <path fill="currentColor"
                        d="M14.38 4.77a2 2 0 0 0-1.9-.62.51.51 0 1 0 .21 1 .98.98 0 0 1 1.14 1.26.51.51 0 1 0 .97.31 2 2 0 0 0-.42-1.95Zm-6.23 5.82a.37.37 0 0 1-.44.16.26.26 0 0 1-.11-.39.37.37 0 0 1 .43-.16.26.26 0 0 1 .12.39Zm-.82 1.04a.98.98 0 0 1-1.18.4A.68.68 0 0 1 5.9 11a.98.98 0 0 1 1.16-.39.68.68 0 0 1 .29 1.03Zm.94-2.8a2.8 2.8 0 0 0-3.13 1.37 1.9 1.9 0 0 0 1.21 2.71 2.77 2.77 0 0 0 3.31-1.4 1.91 1.91 0 0 0-1.4-2.68Z">
                    </path>
                    <path fill="currentColor"
                        d="M8.01 13.64c-2.56.25-4.78-.91-4.95-2.6s1.78-3.25 4.35-3.5 4.78.9 4.94 2.59-1.77 3.25-4.34 3.5Zm5.13-5.6c-.22-.06-.36-.1-.25-.4a1.61 1.61 0 0 0 0-1.54c-.5-.72-1.88-.68-3.46-.02 0 0-.5.22-.37-.17A1.79 1.79 0 0 0 8.9 4.1c-.86-.86-3.13.03-5.09 1.99a6.7 6.7 0 0 0-2.31 4.34c0 2.57 3.29 4.13 6.5 4.13 4.21 0 7.02-2.45 7.02-4.4a2.35 2.35 0 0 0-1.88-2.12Z">
                    </path>
                </symbol>

                <symbol id="footer-icon-social-media" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16.5 8.1c-1-2.6-3.9-4.5-7.4-4.5-4.3 0-7.7 2.8-7.7 6.4 0 1.9 1 3.7 2.7 4.8L3 17.2l2.9-1.5c1 .4 2.1.6 3.2.6h.8c-.4-.7-.6-1.5-.6-2.4 0-3.2 3.1-5.8 6.9-5.8h.3zM5.8 7.5c0-.4.3-.8.8-.8.4 0 .8.3.8.8 0 .4-.3.8-.8.8-.4-.1-.8-.4-.8-.8zm4.8 0c0-.4.3-.8.8-.8.4 0 .8.3.8.8 0 .4-.3.8-.8.8-.4-.1-.8-.4-.8-.8zm7.7 11.6c-.7.2-1.4.3-2.1.3-3.6 0-6.5-2.5-6.5-5.5s2.9-5.5 6.5-5.5 6.5 2.5 6.5 5.5c0 1.8-1.1 3.4-2.7 4.4l.8 2.1-2.5-1.3zm-4.6-6.6c.4 0 .7-.3.7-.7s-.3-.7-.7-.7c-.4 0-.7.3-.7.7s.3.7.7.7zm4.5 0c.4 0 .7-.3.7-.7s-.3-.7-.7-.7-.7.3-.7.7.3.7.7.7z">
                    </path>
                </symbol>

            </svg>
        </div>
        <div class="feds-footer-wrapper">
            <div class="feds-menu-content">
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            For individuals &amp; small business
                        </div>
                        <div class="feds-menu-items" daa-lh="For individuals small business">
                            <ul>
                                <li><a href="/products/firefly.html" daa-ll="Creative AI-1"
                                        class="feds-navLink">Creative AI</a></li>
                                <li><a href="/creativecloud/photography/apps.html" daa-ll="Photography-2"
                                        class="feds-navLink">Photography</a></li>
                                <li><a href="/creativecloud/design.html" daa-ll="Design and illustration-3"
                                        class="feds-navLink">Design and illustration</a></li>
                                <li><a href="/creativecloud/video.html" daa-ll="Video and animation-4"
                                        class="feds-navLink">Video and animation</a></li>
                                <li><a href="/acrobat.html" daa-ll="PDF-5" class="feds-navLink">PDF</a></li>
                                <li><a href="/products/substance3d.html" daa-ll="3D-6" class="feds-navLink">3D</a></li>
                                <li><a href="/products/elements-family.html" daa-ll="Elements Family-7"
                                        class="feds-navLink">Elements Family</a></li>
                                <li><a href="https://stock.adobe.com/" daa-ll="Stock images and video-8"
                                        class="feds-navLink">Stock images and video</a></li>
                                <li><a href="/products/catalog.html#category=all" daa-ll="View all products-9"
                                        class="feds-navLink">View all products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            For medium &amp; large business
                        </div>
                        <div class="feds-menu-items" daa-lh="For medium large business">
                            <ul>
                                <li><a href="https://business.adobe.com/solutions/personalization-at-scale.html"
                                        daa-ll="Personalization at scale-1" class="feds-navLink">Personalization at
                                        scale</a></li>
                                <li><a href="https://business.adobe.com/solutions/content-supply-chain.html"
                                        daa-ll="Content supply chain-2" class="feds-navLink">Content supply chain</a>
                                </li>
                                <li><a href="https://business.adobe.com/solutions/unified-customer-experience.html"
                                        daa-ll="Unified customer experience-3" class="feds-navLink">Unified customer
                                        experience</a></li>
                                <li><a href="https://business.adobe.com/solutions/content-supply-chain/creation-production.html"
                                        daa-ll="Creativity and production-4" class="feds-navLink">Creativity and
                                        production</a></li>
                                <li><a href="https://business.adobe.com/solutions/b2b-marketing.html"
                                        daa-ll="B2B GTM orchestration-5" class="feds-navLink">B2B GTM orchestration</a>
                                </li>
                                <li><a href="https://business.adobe.com/products.html" daa-ll="View all products-6"
                                        class="feds-navLink">View all products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            For organizations
                        </div>
                        <div class="feds-menu-items" daa-lh="For organizations">
                            <ul>
                                <li><a href="/education.html" daa-ll="Education-1" class="feds-navLink">Education</a>
                                </li>
                                <li><a href="/nonprofits.html" daa-ll="Nonprofits-2" class="feds-navLink">Nonprofits</a>
                                </li>
                                <li><a href="/howtobuy/buying-programs/government.html" daa-ll="Government-3"
                                        class="feds-navLink">Government</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            Support
                        </div>
                        <div class="feds-menu-items" daa-lh="Support">
                            <ul>
                                <li><a href="https://helpx.adobe.com/support.html" daa-ll="Help Center-1"
                                        class="feds-navLink">Help Center</a></li>
                                <li><a href="https://helpx.adobe.com/download-install.html"
                                        daa-ll="Download and install-2" class="feds-navLink">Download and install</a>
                                </li>
                                <li><a href="/community.html" daa-ll="Adobe Community-3" class="feds-navLink">Adobe
                                        Community</a></li>
                                <li><a href="/learn/" daa-ll="Adobe Learn-4"
                                        class="feds-navLink">Adobe Learn</a></li>
                                <li><a href="https://business.adobe.com/support/main.html"
                                        daa-ll="Medium and large business supp-5" class="feds-navLink">Medium and large
                                        business support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            Contact
                        </div>
                        <div class="feds-menu-items" daa-lh="Contact">
                            <ul>
                                <li><a href="/#open-jarvis-chat"
                                        data-jarvis-config="{&quot;jarvis-surface-id&quot;:&quot;adotcomfooter&quot;,&quot;jarvis-surface-version&quot;:&quot;1.0&quot;}"
                                        daa-ll="Chat with sales-1" class="feds-navLink">Chat with sales</a></li>
                                <li><a href="https://business.adobe.com/request-consultation.html"
                                        daa-ll="Request information-2" class="feds-navLink">Request information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feds-menu-column">
                    <div class="feds-menu-section">
                        <div class="feds-menu-headline" role="heading" aria-level="2">
                            Adobe
                        </div>
                        <div class="feds-menu-items" daa-lh="Adobe">
                            <ul>
                                <li><a href="https://account.adobe.com/" daa-ll="Log into your account-1"
                                        class="feds-navLink">Log into your account</a></li>
                                <li><a href="/about-adobe.html" daa-ll="About-2" class="feds-navLink">About</a></li>
                                <li><a href="/careers.html" daa-ll="Careers-3" class="feds-navLink">Careers</a></li>
                                <li><a href="/events.html" daa-ll="Events-4" class="feds-navLink">Events</a></li>
                                <li><a href="https://news.adobe.com/" daa-ll="Newsroom-5"
                                        class="feds-navLink">Newsroom</a></li>
                                <li><a href="/corporate-responsibility.html" daa-ll="Corporate responsibility-6"
                                        class="feds-navLink">Corporate responsibility</a></li>
                                <li><a href="/investor-relations.html" daa-ll="Investor Relations-7"
                                        class="feds-navLink">Investor Relations</a></li>
                                <li><a href="/corporate-responsibility/supply-chain.html" daa-ll="Supply chain-8"
                                        class="feds-navLink">Supply chain</a></li>
                                <li><a href="/trust.html" daa-ll="Trust Center-9" class="feds-navLink">Trust Center</a>
                                </li>
                                <li><a href="/about-adobe/integrity.html" daa-ll="Integrity-10"
                                        class="feds-navLink">Integrity</a></li>
                                <li><a href="/diversity.html" daa-ll="Adobe for All-11" class="feds-navLink">Adobe for
                                        All</a></li>
                                <li><a href="https://blog.adobe.com/" daa-ll="Adobe Blog-12" class="feds-navLink">Adobe
                                        Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feds-featuredProducts">
                <div class="feds-menu-section">
                    <div class="feds-menu-headline" role="heading" aria-level="2">
                        Featured products
                    </div>
                    <div class="feds-menu-items">
                        <ul>
                            <li><a href="https://get.adobe.com/reader/" class="feds-navLink" daa-ll="Acrobat Reader">
                                    <div class="feds-navLink-image">
                                        <picture>
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_13514981498f3fa40f16d4005bc5604b3030e8b4b.png"
                                                media="(min-width: 600px)">
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_13514981498f3fa40f16d4005bc5604b3030e8b4b.png">
                                            <source type="image/png"
                                                srcset="federal/footer/fragments/media_13514981498f3fa40f16d4005bc5604b3030e8b4b.png"
                                                media="(min-width: 600px)">
                                            <img loading="lazy" alt=""
                                                src="federal/footer/fragments/media_13514981498f3fa40f16d4005bc5604b3030e8b4b.png"
                                                width="51" height="50">
                                        </picture>
                                    </div>
                                    <div class="feds-navLink-content">
                                        <div class="feds-navLink-title">Acrobat Reader</div>

                                    </div>
                                </a></li>
                            <li><a href="https://www.adobe.com/products/firefly.html" class="feds-navLink"
                                    daa-ll="Firefly">
                                    <div class="feds-navLink-image">
                                        <picture>
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_15856c21886cb3333ec5b6b02c8f4d08627ad59fe.png"
                                                media="(min-width: 600px)">
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_15856c21886cb3333ec5b6b02c8f4d08627ad59fe.png">
                                            <source type="image/png"
                                                srcset="federal/footer/fragments/media_15856c21886cb3333ec5b6b02c8f4d08627ad59fe.png"
                                                media="(min-width: 600px)">
                                            <img loading="lazy" alt=""
                                                src="federal/footer/fragments/media_15856c21886cb3333ec5b6b02c8f4d08627ad59fe.png"
                                                width="51" height="50">
                                        </picture>
                                    </div>
                                    <div class="feds-navLink-content">
                                        <div class="feds-navLink-title">Firefly</div>

                                    </div>
                                </a></li>
                            <li><a href="https://www.adobe.com/express/?promoid=Z2G1FSYV&amp;mv=other"
                                    class="feds-navLink" daa-ll="Adobe Express">
                                    <div class="feds-navLink-image">
                                        <picture>
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_187073d53c6db77acad4d7d8d1909fb04cc9cb071.png"
                                                media="(min-width: 600px)">
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_187073d53c6db77acad4d7d8d1909fb04cc9cb071.png">
                                            <source type="image/png"
                                                srcset="federal/footer/fragments/media_187073d53c6db77acad4d7d8d1909fb04cc9cb071.png"
                                                media="(min-width: 600px)">
                                            <img loading="lazy" alt=""
                                                src="federal/footer/fragments/media_187073d53c6db77acad4d7d8d1909fb04cc9cb071.png"
                                                width="51" height="50">
                                        </picture>
                                    </div>
                                    <div class="feds-navLink-content">
                                        <div class="feds-navLink-title">Adobe Express</div>

                                    </div>
                                </a></li>
                            <li><a href="https://www.adobe.com/products/photoshop/free-trial-download.html"
                                    class="feds-navLink" daa-ll="Photoshop">
                                    <div class="feds-navLink-image">
                                        <picture>
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_1af87c70b29a2210b320389840ec88bb257b44572.png"
                                                media="(min-width: 600px)">
                                            <source type="image/webp"
                                                srcset="federal/footer/fragments/media_1af87c70b29a2210b320389840ec88bb257b44572.png">
                                            <source type="image/png"
                                                srcset="federal/footer/fragments/media_1af87c70b29a2210b320389840ec88bb257b44572.png"
                                                media="(min-width: 600px)">
                                            <img loading="lazy" alt=""
                                                src="federal/footer/fragments/media_1af87c70b29a2210b320389840ec88bb257b44572.png"
                                                width="51" height="50">
                                        </picture>
                                    </div>
                                    <div class="feds-navLink-content">
                                        <div class="feds-navLink-title">Photoshop</div>

                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feds-footer-options">
                <div class="feds-footer-miscLinks">
                    <div class="feds-regionPicker-wrapper">
                        <a href="#langnav" class="modal link-block feds-regionPicker" role="button"
                            data-modal-path="/homepage/fragments/regions" data-modal-hash="#langnav">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="feds-regionPicker-globe"
                                focusable="false">
                                <use href="#footer-icon-globe"></use>
                            </svg>
                            <span class="feds-regionPicker-text">Change region</span>
                        </a>
                    </div>
                    <ul class="feds-social" daa-lh="Social">
                        <li class="feds-social-item">
                            <a href="https://www.facebook.com/" class="feds-social-link" aria-label="facebook"
                                daa-ll="facebook-1" target="_blank" rel="noopener noreferrer">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="feds-social-icon">
                                    <use href="#footer-icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="feds-social-item">
                            <a href="https://www.instagram.com/" class="feds-social-link" aria-label="instagram"
                                daa-ll="instagram-2" target="_blank" rel="noopener noreferrer">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="feds-social-icon">
                                    <use href="#footer-icon-instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="feds-social-item">
                            <a href="https://www.twitter.com/" class="feds-social-link" aria-label="twitter"
                                daa-ll="twitter-3" target="_blank" rel="noopener noreferrer">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="feds-social-icon">
                                    <use href="#footer-icon-twitter"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="feds-social-item">
                            <a href="https://www.linkedin.com/" class="feds-social-link"
                                aria-label="linkedin" daa-ll="linkedin-4" target="_blank" rel="noopener noreferrer">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="feds-social-icon">
                                    <use href="#footer-icon-linkedin"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <span class="footer-logo" role="img" aria-label="Adobe">
                        <span class="footer-logo-image"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 179.35 46.86">
                                <path fill="#505050" d="M76.93,30.93l-1.92,5.93c-0.08,0.2-0.2,0.32-0.44,0.32h-4.64c-0.28,0-0.36-0.16-0.32-0.4l8.01-23.1
    c0.16-0.44,0.32-0.92,0.4-2.44c0-0.16,0.12-0.28,0.24-0.28h6.41c0.2,0,0.28,0.04,0.32,0.24l9.09,25.62
    c0.08,0.2,0.04,0.36-0.2,0.36h-5.21c-0.24,0-0.36-0.08-0.44-0.28l-2.04-5.97H76.93z M84.7,25.92c-0.8-2.64-2.4-7.49-3.16-10.33
    H81.5c-0.64,2.68-2.08,7.09-3.12,10.33H84.7z
    M94.7,27.4c0-5.73,4.28-10.53,11.61-10.53c0.32,0,0.72,0.04,1.32,0.08V9.07c0-0.2,0.12-0.28,0.28-0.28h5.04
    c0.2,0,0.24,0.08,0.24,0.24v23.66c0,0.92,0.04,2.12,0.16,2.92c0,0.2-0.04,0.28-0.28,0.36c-2.76,1.16-5.41,1.6-7.89,1.6
    C99.27,37.57,94.7,34.21,94.7,27.4z M107.63,21.72c-0.4-0.16-0.92-0.2-1.48-0.2c-3.08,0-5.73,1.88-5.73,5.61
    c0,3.96,2.28,5.69,5.33,5.69c0.68,0,1.32-0.04,1.88-0.24V21.72z
    M136.13,27.12c0,6.29-4.08,10.45-9.85,10.45c-6.85,0-9.89-5.17-9.89-10.33c0-5.69,3.8-10.37,9.97-10.37
    C132.81,16.87,136.13,21.72,136.13,27.12z M122.04,27.16c0,3.52,1.64,5.77,4.32,5.77c2.32,0,4.08-2,4.08-5.69
    c0-3.12-1.28-5.73-4.32-5.73C123.8,21.52,122.04,23.6,122.04,27.16z
    M144.55,8.79c0.32,0,0.4,0.04,0.4,0.32v8.21c1.04-0.28,2.16-0.44,3.36-0.44c5.89,0,9.61,4.16,9.61,9.53
    c0,7.49-5.93,11.17-12.01,11.17c-2.12,0-4.24-0.28-6.29-0.92c-0.12-0.04-0.24-0.24-0.24-0.4V9.07c0-0.2,0.08-0.28,0.28-0.28
    H144.55z M147.31,21.6c-1.28,0-1.84,0.2-2.36,0.32v10.85c0.48,0.12,1,0.16,1.48,0.16c3.04,0,5.81-1.84,5.81-6.01
    C152.23,23.28,150.11,21.6,147.31,21.6z
    M165.75,28.68c0.2,2.28,1.8,4.16,5.73,4.16c1.8,0,3.4-0.28,4.92-0.92c0.12-0.08,0.24-0.04,0.24,0.2v3.8
    c0,0.28-0.08,0.4-0.28,0.48c-1.6,0.76-3.36,1.16-6.13,1.16c-7.53,0-10.17-5.17-10.17-10.13c0-5.53,3.4-10.57,9.69-10.57
    c6.05,0,8.45,4.68,8.45,8.65c0,1.24-0.08,2.24-0.2,2.68c-0.04,0.2-0.12,0.28-0.32,0.32c-0.52,0.08-2.04,0.16-4.12,0.16H165.75z
    M170.95,24.8c1.28,0,1.84-0.04,2-0.08c0-0.08,0-0.24,0-0.28c0-0.96-0.76-3.16-3.4-3.16c-2.52,0-3.6,1.88-3.84,3.52H170.95z
    M33.04,0 52.41,0 52.41,46.39
    M19.39,0 0,0 0,46.39
    M26.21,17.09 38.56,46.38 30.47,46.38 26.78,37.06 17.74,37.06"></path>
                            </svg></span>
                    </span>
                </div>
                <div class="feds-footer-legalWrapper" daa-lh="Legal">
                    <ul class="feds-footer-privacySection">
                        <li class="feds-footer-privacy-listitem"><span class="feds-footer-copyright">Copyright © 2026
                                Adobe. All rights reserved.</span><span class="feds-footer-privacyLink-divider"
                                aria-hidden="true">/</span></li>
                        <li class="feds-footer-privacy-listitem"><a href="/privacy.html" class="feds-footer-privacyLink"
                                daa-ll="Privacy-1">Privacy</a><span class="feds-footer-privacyLink-divider"
                                aria-hidden="true">/</span></li>
                        <li class="feds-footer-privacy-listitem"><a href="/legal/terms.html"
                                class="feds-footer-privacyLink" daa-ll="Terms of Use-2">Terms of Use</a><span
                                class="feds-footer-privacyLink-divider" aria-hidden="true">/</span></li>
                        <li class="feds-footer-privacy-listitem"><a href="/#openPrivacy" class="feds-footer-privacyLink"
                                daa-ll="Cookie preferences-3">Cookie preferences</a><span
                                class="feds-footer-privacyLink-divider" aria-hidden="true">/</span></li>
                        <li class="feds-footer-privacy-listitem"><a href="/privacy/location-specific-notice.html#how-to"
                                data-has-dnt="true" class="feds-footer-privacyLink"
                                daa-ll="Do not sell or share my person-4">Do not sell or share my personal
                                information</a><span class="feds-footer-privacyLink-divider" aria-hidden="true">/</span>
                        </li>
                        <li class="feds-footer-privacy-listitem"><a href="/privacy/opt-out.html#interest-based-ads"
                                class="feds-footer-privacyLink" daa-ll="AdChoices-5"><svg aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" class="feds-adChoices-icon" focusable="false">
                                    <use href="#footer-icon-adchoices"></use>
                                </svg>AdChoices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <noscript><img
            src="akam/13/pixel_36b2413c?a=dD01ZDRkZDE3NjRkZWEyZWQxNDQwODI3YTE2ZjhlYjhkNzU3MTNjZmJjJmpzPW9mZg=="
            style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript>

    <div data-adobe-target-testid="INTL0046 - PZN - Direct Commerce Sites Banner XT">
        <style>
            [data-path*="intl0046"] .text-block div> :last-child {
                margin-top: 0
            }
        </style>
    </div>
    <div id="page-load-ok-milo" style="display: none;"></div><iframe
        src="https://commerce.adobe.com/store/iframe/preload-optimized.html"
        style="visibility: hidden; height: 0px; width: 0px; position: absolute; border: 0px;"></iframe>
    <script>_satellite["_runScript1"](function (event, target, Promise) {
            !function () { function e() { const e = document.createElement("script"); e.type = "text/javascript", e.defer = !0, e.src = "munchkin.marketo.net/munchkin.js", e.onload = e.onreadystatechange = function () { this.readyState && "complete" !== this.readyState || t() }; const n = document.getElementsByTagName("head")[0]; n.parentNode.insertBefore(e, n) } function t() { const e = [{ name: "MCZ", code: "360-KCI-804" }, { name: "OURKETO", code: "460-TDH-945" }, { name: "MAGENTO", code: "585-GGD-959" }, { name: "CC", code: "176-XKN-523" }, { name: "PARTNERS", code: "608-DHV-915" }, { name: "SIGN", code: "345-TTI-184" }, { name: "WORKFRONT", code: "606-ZRO-825" }, { name: "DYNAMICSTG", code: "371-GBU-660" }], { hostname: t, pathname: n } = window.top.location; let o = "MCZ"; const c = new Set(["MCZ"]); "www.adobe.com" === t && n.includes("/acrobat") ? o = "SIGN" : "www.adobe.com" === t && l.some((e => n.includes(e))) ? o = "MCZ" : t.includes("blog.adobe.com") && n.includes("en/publish/2021/06/14/the-new-ai-powered-commerce") && (o = "MAGENTO"), (t.includes("business.adobe") || t.includes("summit.adobe")) && (c.add("OURKETO"), c.add("MAGENTO"), c.add("PARTNERS")), (n.includes("/summit") || n.includes("/events/")) && (c.add("OURKETO"), c.add("MAGENTO"), c.add("PARTNERS")), "MCZ" !== o && c.add("MCZ"); const a = e.find((e => e.name === o)).code, s = Array.from(c).filter((e => e !== o)).map((t => { const n = e.find((e => e.name === t)); return n ? n.code : null })).filter(Boolean); let m = a; s.forEach((e => { m += "|" + e })), Munchkin.init(a, { altIds: s, asyncOnly: !0, useBeaconAPI: !0 }); let u = 0; const r = setInterval((function () { if (u += 1, u > 20) clearInterval(r); else if (i.cookie.includes("_mkto_trk=")) { clearInterval(r); try { let e = ""; const t = i.cookie.split("_mkto_trk=")[1].split(";")[0]; e = t.slice(t.lastIndexOf("-", t.lastIndexOf("-") - 2) + 1); let n = ""; if (i.cookie.includes("MCMID%7C") && i.cookie.includes("MCAAMLH-")) { const e = /MCAAMLH-[^%]+%7C([0-9]+)/.exec(i.cookie), t = /MCMID%7C([^(;|%)]+)/.exec(i.cookie); e && t && (n = e[1] + ":" + t[1]) } let o = ""; if ("object" == typeof d) try { o = d.get("data._adobe_corpnew.digitalData.primaryUser.primaryProfile.profileInfo.profileID") || "" } catch (e) { } const c = m + "|" + e + "|" + n + "|" + o; if (window.top.location.href.split("?")[1] || "" || null === localStorage.getItem("munchRun") || c !== localStorage.getItem("munchRun")) { let t = ""; if (n && (t += "&ECID=" + n), o && (t += "&GUID=" + o), i.cookie.includes("aam_uuid=")) { const e = /aam_uuid=([^;]+)/.exec(i.cookie); e && (t += "&AAM=" + e[1]) } if (Munchkin.munchkinFunction("clickLink", { href: "#syncIds?MKTO=" + e + t }), localStorage.setItem("munchRun", c), "object" == typeof d) try { d.set("data._adobe_corpnew.digitalData.page.pageInfo.munchkinId", e) } catch (e) { } } } catch (e) { } } }), 250) } const { location: n } = window, { pathname: o, hostname: c } = n, a = window, i = document, d = a.alloy_all, s = a._satellite && a._satellite.getVar ? a._satellite.getVar("_loadScript") : null, l = ["/products/adobeconnect", "/products/captivate", "/products/coldfusion-family", "/products/adobe-embedded-print-engine"]; ("www.adobe.com" === c && (o.includes("/acrobat") || l.some((e => o.includes(e)))) || "blog.adobe.com" === c || "business.adobe.com" === c) && setTimeout((function () { s ? s("https://munchkin.marketo.net/munchkin.js", (function () { t() }), { className: "marketing-MunchkinTagCombined" }) : e() }), "business.adobe.com" === c ? 100 : 5e3) }();
        });</script>
    
    <div id="ZN_3n5vYIa1VY8b4LY"></div>
    <script class="marketingtech-pinterest">_satellite["_runScript2"](function (event, target, Promise) {
            !function () { function e(e) { n && (n.className = d), m("https://s.pinimg.com/ct/core.js", (function () { t.pintrk || (t.pintrk = function () { t.pintrk.queue.push(Array.prototype.slice.call(arguments)) }, t.pintrk.queue = [], t.pintrk.version = "3.0"), t.pintrk("load", e, { external_id: c ? l(c) : i ? l(i) : "" }), t.pintrk("page"), t.pintrk("track", "pagevisit", { event_id: g }) }), { className: d }) } var t = window, a = t.location, o = a.hostname, r = a.pathname, s = t.alloy_all, p = (e, t) => -1 !== e.indexOf(t), c = s.get("data._adobe_corpnew.digitalData.primaryUser.primaryProfile.profileInfo.profileID"), i = _satellite.getVar("adobe_ecid")(), l = _satellite.getVar("sha256"); if (!(p(o, "acrobat.adobe.com") && (p(r, "/discover/") || p(r, "/dc-acrobat-pages/")) || p(o, "podcast.stage.adobe.com") || p(o, "podcast.adobe.com") || p(o, "express.adobe.com") || p(o, "projectx") || p(o, "localhost.adobe.com"))) { var d = "marketingtech-pinterest", n = document.currentScript, m = t._satellite.getVar("_loadScript"), g = s.get("xdm.eventMergeId"); if (e("2612763853687"), p(o, "www.adobe.com") || p(o, "stage.adobe.com") || p(o, "firefly.adobe.com") || p(o, "firefly-stage.corp.adobe.com") || p(o, "helpx.adobe.com") || p(o, "helpx.stage.adobe.com") || p(o, "business.adobe.com") || p(o, "business.stage.adobe.com") || p(o, "stage.projectx.corp.adobe.com") || p(o, "acrobat.adobe.com") || p(o, "stage.acrobat.adobe.com") || p(o, "stock.adobe.com") || p(o, "primary.stock.stage.adobe.com") || p(o, "commerce.adobe.com") || p(o, "commerce-stg.adobe.com")) { var h = localStorage.getItem("engagedVisit"); if (h) { h = JSON.parse(h); var u = h?.pageViews ? h?.pageViews : "", b = 18e5; Date.now() - h.lastUpdated >= b ? (s.set("data._adobe_corpnew.marketingTags.pinterest.engagedUser", !1), localStorage.setItem("engagedVisit", JSON.stringify(h))) : u && (s.set("data._adobe_corpnew.marketingTags.engagedVisit.visitNumber", u), u > 1 ? s.set("data._adobe_corpnew.marketingTags.pinterest.engagedUser", !0) : s.set("data._adobe_corpnew.marketingTags.pinterest.engagedUser", !1)) } else _satellite.getVar("engagedUser").then((function (e) { e && e.pageViews && (s.set("data._adobe_corpnew.marketingTags.engagedVisit.visitNumber", e.pageViews), e.pageViews > 1 ? s.set("data._adobe_corpnew.marketingTags.pinterest.engagedUser", !0) : s.set("data._adobe_corpnew.marketingTags.pinterest.engagedUser", !1)) })) } (p(r, "/products/elements-family") || p(r, "/products/premiere-elements") || p(r, "/products/photoshop-premiere-elements") || p(r, "/products/photoshop-elements")) && e("2613047885022"), (p(r, "/au/creativecloud.html") || p(r, "/au/creativecloud/all-apps.html") || p(r, "/au/creativecloud/buy/students.html") || p(r, "/au/products/photoshop.html") || p(r, "/au/products/photoshop/landpa.html") || p(r, "/au/products/photoshop-lightroom.html") || p(r, "/au/creativecloud/photography/apps.html") || p(r, "/au/products/illustrator.html") || p(r, "/au/products/premiere.html") || p(r, "/au/creativecloud/plans.html") || p(r, "/kr/creativecloud.html") || p(r, "/kr/creativecloud/all-apps.html") || p(r, "/kr/creativecloud/buy/students.html") || p(r, "/kr/products/photoshop.html") || p(r, "/kr/products/photoshop/landpa.html") || p(r, "/kr/products/photoshop-lightroom.html") || p(r, "/kr/creativecloud/photography/apps.html") || p(r, "/kr/products/illustrator.html") || p(r, "/kr/products/premiere.html") || p(r, "/kr/creativecloud/plans.html") || p(r, "/in/creativecloud.html") || p(r, "/in/creativecloud/all-apps.html") || p(r, "/in/creativecloud/buy/students.html") || p(r, "/in/products/photoshop.html") || p(r, "/in/products/photoshop/landpa.html") || p(r, "/in/products/photoshop-lightroom.html") || p(r, "/in/creativecloud/photography/apps.html") || p(r, "/in/products/illustrator.html") || p(r, "/in/products/premiere.html") || p(r, "/in/creativecloud/plans.html")) && e("2612397757800") } }();
        });</script>
    
    <script>_satellite["_runScript3"](function (event, target, Promise) {
            !function () { var e, s, t = window, r = t.location.hostname, o = t.location.pathname, i = "marketingtech-demanscience", a = document, c = a.currentScript, u = t._satellite.getVar("_loadScript"), d = { "business.adobe.com": ["/", "/customer-success-stories/owen-jones-and-partners-case-study.html", "/customer-success-stories/dentsu-case-study.html", "/products/express-business.html", "/products/firefly-business/firefly-services.html", "/products/frameio-business.html", "/products/creativecloud-business.html", "/resources/guides/adobe-firefly-services-product-guide.html", "/resources/guides/express-marketing-use-cases.html", "/resources/guides/fast-content-creation.html", "/resources/guides/supercharge-content-production.html", "/resources/guides/create-on-brand-content-with-adobe-express.html", "/resources/sdk/forrester-total-economic-impact-of-adobe-creative-solutions-for-enterprise.html", "/resources/sdk/bcg-adobe-infographic.html", "/resources/sdk/creative-productivity.html", "/resources/sdk/navigating-the-age-of-content-abundance.html", "/resources/sdk/idc-future-of-creative-content-with-gen-ai-inside.html", "/resources/sdk/adobe-express-product-guide.html", "/blog/abb-empowers-global-teams-create-faster-adobe-express", "/blog/how-adobe-express-helped-red-hat-marketing-ibm-company-achieve-10x-time-savings", "/blog/seven-west-media-increases-audience-engagement-creating-social-media-adobe-express", "/blog/gatorade-fuels-creative-self-expression-with-customizable-squeeze-bottles-powered-adobe-firefly-services-generative-ai"], "www.adobe.com": ["/creativecloud/business/teams/resources/whitepapers-ebooks/express-marketing-use-cases-sdk.html", "/creativecloud/business/teams/resources/whitepapers-ebooks/max-2024-report-sdk.html", "/creativecloud/business/teams/resources/whitepapers-ebooks/frame-io-pfeiffer-report-sdk.html", "/creativecloud/business/teams/resources/solution-briefs/firefly-product-guide-sdk.html", "/creativecloud/business/teams/resources/solution-briefs/frameio-v4-product-guide-sdk.html"], "blog.adobe.com": ["/en/publish/2024/10/11/how-adobe-express-helped-red-hat-marketing-ibm-company-achieve-10x-time-savings"] }; !d[r] || -1 === d[r].indexOf(o) || (c && (c.className = i), u("https://cdn.webexperiences.com/v2/JXJJBB5S.js", null, { className: i }), e = "term-e7e5d07437489", s = "https://wec-assets.terminus.services/a2bde558-ff03-44ae-9c7e-e456541350f2/t.js", a.getElementById(e) || u(s, null, { className: i, defer: !0 }, { id: e })) }();
        });</script><cs-native-frame-holder hidden=""><template shadowrootmode="closed"><iframe id="cs-native-frame"
                hidden="" title="Intentionally blank"
                sandbox="allow-same-origin"></iframe></template></cs-native-frame-holder>
    <script>_satellite["_runScript4"](function (event, target, Promise) {
            !function () { var a = window, e = a.location, t = e.hostname, o = e.pathname, n = (a, e) => -1 !== a.indexOf(e); if (!(n(t, "acrobat.adobe.com") && (n(o, "/discover/") || n(o, "/dc-acrobat-pages/")) || n(o, "/acrobat/online/") || n(t, "podcast.stage.adobe.com") || n(t, "podcast.adobe.com"))) { var c = "marketingtech-amazon", m = document.currentScript, s = a._satellite.getVar("_loadScript"); (n(o, "/products/elements-family") || n(o, "/products/premiere-elements") || n(o, "/products/photoshop-premiere-elements") || n(o, "/products/photoshop-elements")) && (m && (m.className = c), amzn = a.amzn = function () { a.amzn.q.push([arguments, (new Date).getTime()]) }, amzn.q = [], s("https://c.amazon-adsystem.com/aat/amzn.js", (function () { amzn("setRegion", "NA"), amzn("addTag", "8109fb1a-c217-4f04-834d-716fef298b2d"), amzn("trackEvent", "PageView") }), { className: c })) } }();
        });</script>
    
    
    <script src="//www.everestjs.net/static/st.v3.js" async=""></script><iframe
        src="https://servedby.flashtalking.com/container/13539;99030;10307;iframe/?ftXRef=&amp;ftXValue=&amp;ftXType=&amp;ftXName=&amp;ftXNumItems=&amp;ftXCurrency=&amp;U1=&amp;U2=&amp;U3=74993277064626231618009021516423961341&amp;U4=adobe.com&amp;U5=&amp;U6=&amp;U7=&amp;U8=&amp;U9=&amp;U10=&amp;U11=&amp;U12=&amp;U13=&amp;U14=&amp;U15=&amp;U16=&amp;U17=&amp;U18=&amp;U19=&amp;U20=&amp;ft_referrer=https%3A%2F%2Fwww.adobe.com%2F&amp;ns=&amp;cb=498470.85540232906"
        class="marketingtech-flashtalking" credentialless="" style="position: absolute; display: none;"></iframe>
    
    <img
        src="https://pt.ispot.tv/v2/TC-4078-1.gif?app=web&amp;type=visit&amp;customdata=new_user&amp;uid=&amp;cid=74993277064626231618009021516423961341&amp;refid="
        alt="" height="1" width="1" border="0" style="display: none;"><img
        src="https://pt.ispot.tv/v2/TC-4078-1.gif?app=web&amp;type=visit_Home&amp;uid=&amp;cid=74993277064626231618009021516423961341&amp;refid="
        alt="" height="1" width="1" border="0" style="display: none;">
    
    
    <iframe
        src="https://pixel.everesttech.net/3085/gr?ev_gb=0&amp;url=https%3A%2F%2Fwww.everestjs.net%2Fstatic%2Fpixel_details.html%23google%3D__EFGCK__%26gsurfer%3D__EFGSURFER__%26imsId%3D__EFIMSORGID__%26optout%3D__EFOPTOUT__%26throttleCookie%3D__EFSYNC__%26time%3D__EFTIME__"
        height="0" width="0" style="display: none;"></iframe>
    <div id="batBeacon947649143727" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img
            id="batBeacon989931765302" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=5190105&amp;Ver=2&amp;mid=a44e6ab7-51f2-42d4-93d9-47931d039b82&amp;bo=2&amp;sid=74d4b9d054dc11f197b7cb88e882bdb9&amp;vid=74d4b22054dc11f1996da13d1079ee5f&amp;vids=1&amp;msclkid=N&amp;pi=918639831&amp;lg=en-GB&amp;sw=1680&amp;sh=1050&amp;sc=30&amp;tl=Adobe%3A%20Creative,%20marketing%20and%20document%20management%20solutions&amp;p=https%3A%2F%2Fwww.adobe.com%2F&amp;r=&amp;lt=1364&amp;evt=pageLoad&amp;sv=2&amp;asc=G&amp;cdb=AQAQ&amp;rn=459368"
            style="width: 0px; height: 0px; display: none; visibility: hidden;"></div>
    <img height="1" width="1"
        src="https://pixel.everesttech.net/3085/t?ecvid=74993277064626231618009021516423961341&amp;ev_Site_Visit_AMS=1&amp;ev_transid=&amp;linkId=414480401779344126"
        style="display: none;"><iframe height="0" width="0"
        src="https://9212252.fls.doubleclick.net/activityi;src=9212252;type=invmedia;cat=gtag_004;rcb=18;ord=5802278686263;npa=0;auiddc=1600533457.1779344126;u14=https%3A%2F%2Fwww.adobe.com%2F;u19=www.adobe.com%2F;u23=adobe.com;uaa=arm;uab=64;uafvl=Chromium%3B148.0.7778.168%7CGoogle%2520Chrome%3B148.0.7778.168%7CNot%252FA)Brand%3B99.0.0.0;uamb=0;uam=;uap=macOS;uapv=26.2.0;uaw=0;pscdl=noapi;frm=0;_tu=IFA;gtm=45fe65j1v9180772808za200zb877906940zd877906940xec;gcs=G110;gcd=13t3p3Z3t5l1;dma=0;dc_fmt=2;tag_exp=0~115938466~115938468~118131810~118689382;epver=2;dc_random=1779344126_VK-yQQFD9CrQnm1NTG3a0GwdV_FGp8AhfA;_dc_test=1;~oref=https%3A%2F%2Fwww.adobe.com%2F?"
        style="display: none; visibility: hidden;"></iframe><img height="1" width="1"
        src="https://cm.everesttech.net/cm" style="display: none;"><iframe name="Adobe Alloy"
        style="display: none; width: 0px; height: 0px;"></iframe>
</body>

</html>