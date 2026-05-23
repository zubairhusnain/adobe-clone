<?php
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Download Adobe Acrobat Pro: Full PDF software | Adobe Acrobat</title>
    <link rel="canonical" href="/acrobat/acrobat-pro/">
    <meta name="description" content="Stay productive with Adobe Acrobat Pro. Always enjoy the latest features in PDF software, like edit, convert, and share functionality.">
    <meta property="og:title" content="Download Adobe Acrobat Pro: Full PDF software | Adobe Acrobat">
    <meta property="og:description" content="Stay productive with Adobe Acrobat Pro. Always enjoy the latest features in PDF software, like edit, convert, and share functionality.">
    <meta property="og:image" content="acrobat/media_13f28848e8da34fafe003ee7053bf2118fb26c78a.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_13f28848e8da34fafe003ee7053bf2118fb26c78a.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:alt" content="Image of a loan agreement document on a red background, showcasing the Protect a PDF Acrobat feature icon overlay.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Download Adobe Acrobat Pro: Full PDF software | Adobe Acrobat">
    <meta name="twitter:description" content="Stay productive with Adobe Acrobat Pro. Always enjoy the latest features in PDF software, like edit, convert, and share functionality.">
    <meta name="twitter:image" content="acrobat/media_13f28848e8da34fafe003ee7053bf2118fb26c78a.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="americas_manifestnames" content="creative-cloud-pro-ste-promo">
    <meta name="target" content="on">
    <meta name="personalization-v2" content="on">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="jarvis-chat" content="desktop">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="adobe-home-redirect" content="on">
    <meta name="checkout-workflow-step" content="commitment">
<meta name="footer-source" content="https://www.adobe.com/dc-shared/navigation/footer/footer" data-localized="true">
    <meta name="personalization" content="acrobat/acrobat-pro-devicetype.json" data-localized="true">
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Acrobat | Adobe",
  "alternateName": [
    "Adobe Acrobat",
    "Acrobat"
  ],
  "url": "/acrobat/acrobat-pro/"
}</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://acrobat.adobe.com" crossorigin="">
    
    <style>body{display:block!important;}</style>
    <link rel="icon" href="/acrobat/img/favicons/favicon.ico"><link rel="apple-touch-icon" href="/acrobat/img/favicons/favicon-180.png">
                <link rel="manifest" href="/acrobat/img/favicons/favicon.webmanifest">
    
    <script>
  window.setLibs = (prodLibs, location = window.location) => {
    const { hostname, search } = location;
    if (!['.aem.', '.hlx.', '.stage.', 'local', '.da.'].some((i) => hostname.includes(i))) return prodLibs;
    const branch = new URLSearchParams(search).get('milolibs') || 'main';
    if (!/^[a-zA-Z0-9_-]+$/.test(branch)) throw new Error('Invalid branch name.');
    if (branch === 'main' && hostname === 'www.stage.adobe.com') return '/libs';
    if (branch === 'local') return 'http://localhost:6456/libs';
    const env = hostname.includes('.hlx.') ? 'hlx' : 'aem';
    return `https://${branch}${branch.includes('--') ? '' : '--milo--adobecom'}.${env}.live/libs`;
  };

  window.getUnityLibs = (prodLibs = '/unitylibs') => {
    const { hostname, search } = window.location;
    if (!['.aem.', '.hlx.', '.stage.', 'local', '.da.'].some((i) => hostname.includes(i))) return prodLibs;
    const branch = new URLSearchParams(search).get('unitylibs') || 'main';
    if (!/^[a-zA-Z0-9_-]+$/.test(branch)) throw new Error('Invalid branch name.');
    if (branch === 'main' && hostname === 'www.stage.adobe.com') return prodLibs;
    const env = hostname.includes('.hlx.') ? 'hlx' : 'aem';
    return `https://${branch}${branch.includes('--')? '' : '--unity--adobecom'}.${env}.live/unitylibs`;
  }

  window.extractLocalePrefix = (pathname = window.location.pathname) => {
    const segments = pathname.split('/').filter(Boolean);
    if (!segments[0] || segments[0] === 'acrobat') {
      return '';
    }
    return `/${segments[0]}`;
  }

  window.loadLink = (href, options = {}) => {
    const { as, callback, crossorigin, rel, fetchpriority } = options;
    let link = document.head.querySelector(`link[href="/acrobat/$%7Bhref%7D/"]`);
    if (!link) {
      link = document.createElement('link');
      link.setAttribute('rel', rel);
      if (as) link.setAttribute('as', as);
      if (crossorigin) link.setAttribute('crossorigin', crossorigin);
      if (fetchpriority) link.setAttribute('fetchpriority', fetchpriority);
      link.setAttribute('href', href);
      if (callback) {
        link.onload = (e) => callback(e.type);
        link.onerror = (e) => callback(e.type);
      }
      document.head.appendChild(link);
    } else if (callback) {
      callback('noop');
    }
    return link;
  }

  const miloLibs = setLibs('/libs');
  const unityLibs = getUnityLibs();
  const localePrefix =  extractLocalePrefix();


  const preloads = document.querySelector('meta[name="preloads"]')?.content?.split(',').map(x => x.trim().replace('$MILOLIBS', miloLibs).replace('$UNITYLIBS', unityLibs).replace('$LOCALEPREFIX', localePrefix)) || [];
  preloads.forEach((link) => {
    if (link.endsWith('.js')) {
      loadLink(link, { as: 'script', rel: 'preload', crossorigin: 'anonymous' });
    } else if (link.endsWith('.css')) {
      loadLink(link, { as: 'style', rel: 'preload' });
    } else if (/\.(json|html|svg)$/.test(link)) {
      loadLink(link, { as: 'fetch', rel: 'preload', crossorigin: 'anonymous' });
    } else if (/\.(png|jpg|jpeg|gif|webp)$/.test(link)) {
      loadLink(link, { as: 'image', rel: 'preload', fetchpriority: 'high' });
    }
  });

  const userAgentMeta = document.querySelector('meta[name="hreflinksuseragents"]');
  const allowedAgents = userAgentMeta && userAgentMeta.content.split(',');
  const userAgentString = window.navigator.userAgent;
  const isAllowedAgent = allowedAgents && allowedAgents.some((agent) => userAgentString.includes(agent.trim()));

  const ssrFlag = document.querySelector('meta[name="head-loaded"]');
  const LOCALES = ['ae_ar', 'ae_en', 'africa', 'ar', 'at', 'au', 'be_en', 'be_fr', 'be_nl', 'bg', 'br', 'ca_fr', 'ca', 'ch_de', 'ch_fr', 'ch_it', 'cl', 'cn', 'co', 'cr', 'cy_en', 'cz', 'de', 'dk', 'ec', 'ee', 'eg_ar', 'eg_en', 'el', 'es', 'fi', 'fr', 'gr_el', 'gr_en', 'gt', 'hk_en', 'hk_zh', 'hu', 'id_en', 'id_id', 'ie', 'il_en', 'il_he', 'in_hi', 'in', 'it', 'jp', 'kr', 'kw_ar', 'kw_en', 'la', 'lt', 'lu_de', 'lu_en', 'lu_fr', 'lv', 'mena_ar', 'mena_en', 'mt', 'mx', 'my_en', 'my_ms', 'ng', 'nl', 'no', 'nz', 'pe', 'ph_en', 'ph_fil', 'pl', 'pr', 'pt', 'qa_ar', 'qa_en', 'ro', 'ru', 'sa_ar', 'sa_en', 'se', 'sg', 'si', 'sk', 'th_en', 'th_th', 'tr', 'tw', 'ua', 'uk', 'vn_en', 'vn_vi', 'za'];

  (() => {
    function buildLink(language, url) {
      const link = document.createElement('link');
      link.setAttribute('rel', 'alternate');
      link.setAttribute('hreflang', language);
      link.setAttribute('href', url);
      return link;
    }

    async function fetchAndParseSitemap() {
      const sitemapOrigin = 'https://www.adobe.com';
      const { origin, pathname } = window.location;

      let sitemapPath = '/dc-shared/assets/sitemap.xml';
      const localeMatch = LOCALES.find(locale => pathname.startsWith(`/${locale}/`));

      if (localeMatch) {
        sitemapPath = `/${localeMatch}/dc-shared/assets/sitemap.xml`;
      }
      
      try {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        let response;
        try {
          response = await fetch(`${origin}${sitemapPath}`, { signal: controller.signal });
        } finally {
          clearTimeout(timeoutId);
        }
        if (!response.ok) {
          console.warn('Failed to fetch sitemap:', response.status);
          return;
        }
        
        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, 'text/xml');
        const parseError = xmlDoc.querySelector('parsererror');
        if (parseError) {
          return;
        }
        
        const urlElements = xmlDoc.querySelectorAll('url');
        let currentUrlElement = null;
        const correctedPath = pathname.endsWith('.html') ? pathname : `${pathname}.html`;
        const isLocalRoot = localeMatch && `${sitemapOrigin}/${localeMatch}/` === `${sitemapOrigin}${pathname}`;
        const rootPage = isLocalRoot ? `${sitemapOrigin}/${localeMatch}/` : `${sitemapOrigin}/`; 
        const currentPageUrl = pathname !== '/' && pathname !== `/${localeMatch}/` ? `${sitemapOrigin}${correctedPath}` : `${rootPage}`;

        for (const urlElement of urlElements) {
          const loc = urlElement.querySelector('loc')?.textContent;
          if (loc === currentPageUrl || loc === currentPageUrl.replace(/\/$/, '')) {
            currentUrlElement = urlElement;
            break;
          }
        }
        
        if (!currentUrlElement) {
          console.warn('Current page not found in sitemap');
          return;
        }
        
        const alternateLinks = currentUrlElement.querySelectorAll('link[rel="alternate"]');
        const linkElements = [];

        alternateLinks.forEach(altLink => {
          const hreflang = altLink.getAttribute('hreflang');
          const href = altLink.getAttribute('href');
          
          if (hreflang && href) {
            linkElements.push(buildLink(hreflang, href));
          }
        });
        
        const titleElement = document.head.querySelector('title');
        if (linkElements.length > 0 && titleElement) {
          titleElement.after(...linkElements);
        }
      } catch (error) {
        console.error('Error fetching or parsing sitemap:', error);
      }
    } 

    if (isAllowedAgent && !ssrFlag) {
      fetchAndParseSitemap();
    }
  })();
  
  const meta = document.createElement('meta');
  meta.setAttribute('name', 'head-loaded');
  document.head.append(meta);
</script><meta name="head-loaded">
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/martech/helpers.js"><link rel="preload" as="fetch" crossorigin="anonymous" href="/acrobat/acrobat-pro-devicetype.json"><link rel="preload" as="fetch" crossorigin="anonymous" href="/federal/assets/data/mep-xlg-tags.json?sheet=prod"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><link rel="stylesheet" href="/libs/features/icons/icons.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><link rel="stylesheet" href="/libs/styles/iconography.css"><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/mobile-app-banner/mobile-app-banner.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Adobe Acrobat","item":"/acrobat/"},{"@type":"ListItem","position":3,"name":"Adobe Acrobat Pro","item":"/acrobat/acrobat-pro/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/notification/notification.js"><link rel="stylesheet" href="/libs/blocks/notification/notification.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/media/media.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/media/media.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/video/video.js"><link rel="stylesheet" href="/libs/blocks/video/video.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/text/text.js"><link rel="stylesheet" href="/libs/blocks/tabs/tabs.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch-card/merch-card.js"><link rel="stylesheet" href="/libs/blocks/merch-card/merch-card.css"><style>
:root {
    --consonant-merch-card-detail-font-size: 12px;
    --consonant-merch-card-detail-font-weight: 500;
    --consonant-merch-card-detail-letter-spacing: 0.8px;

    --consonant-merch-card-heading-font-size: 18px;
    --consonant-merch-card-heading-line-height: 22.5px;
    --consonant-merch-card-heading-secondary-font-size: 14px;
    --consonant-merch-card-body-font-size: 14px;
    --consonant-merch-card-body-line-height: 21px;
    --consonant-merch-card-promo-text-height: var(--consonant-merch-card-body-font-size);

    /* Fonts */
    --merch-body-font-family: 'Adobe Clean', adobe-clean, 'Trebuchet MS', sans-serif;

    /* spacing */
    --consonant-merch-spacing-xxxs: 4px;
    --consonant-merch-spacing-xxs: 8px;
    --consonant-merch-spacing-xs: 16px;
    --consonant-merch-spacing-s: 24px;
    --consonant-merch-spacing-m: 32px;

    /* cta */
    --consonant-merch-card-cta-font-size: 15px;

    /* badge */
    --type-heading-xxs-size: 11px;

    /* headings */
    --consonant-merch-card-heading-xxxs-font-size: 14px;
    --consonant-merch-card-heading-xxxs-line-height: 18px;
    --consonant-merch-card-heading-xxs-font-size: 16px;
    --consonant-merch-card-heading-xxs-line-height: 20px;
    --consonant-merch-card-heading-xs-font-size: 18px;
    --consonant-merch-card-heading-xs-line-height: 22.5px;
    --consonant-merch-card-heading-s-font-size: 20px;
    --consonant-merch-card-heading-s-line-height: 25px;
    --consonant-merch-card-heading-m-font-size: 24px;
    --consonant-merch-card-heading-m-line-height: 30px;
    --consonant-merch-card-heading-l-font-size: 28px;
    --consonant-merch-card-heading-l-line-height: 36.4px;
    --consonant-merch-card-heading-xl-font-size: 32px;
    --consonant-merch-card-heading-xl-line-height: 40px;


    /* detail */
    --consonant-merch-card-detail-xs-line-height: 12px;
    --consonant-merch-card-detail-s-font-size: 11px;
    --consonant-merch-card-detail-s-line-height: 14px;
    --consonant-merch-card-detail-m-font-size: 12px;
    --consonant-merch-card-detail-m-line-height: 15px;
    --consonant-merch-card-detail-m-font-weight: 700;
    --consonant-merch-card-detail-m-letter-spacing: 1px;
    --consonant-merch-card-detail-l-line-height: 18px;
    --consonant-merch-card-detail-l-line-height: 23px;

    /* body */
    --consonant-merch-card-body-xxs-font-size: 12px;
    --consonant-merch-card-body-xxs-line-height: 18px;
    --consonant-merch-card-body-xxs-letter-spacing: 1px;
    --consonant-merch-card-body-xs-font-size: 14px;
    --consonant-merch-card-body-xs-line-height: 21px;
    --consonant-merch-card-body-s-font-size: 16px;
    --consonant-merch-card-body-s-line-height: 24px;
    --consonant-merch-card-body-m-font-size: 18px;
    --consonant-merch-card-body-m-line-height: 27px;
    --consonant-merch-card-body-l-font-size: 20px;
    --consonant-merch-card-body-l-line-height: 30px;
    --consonant-merch-card-body-xl-font-size: 22px;
    --consonant-merch-card-body-xxl-font-size: 24px;
    --consonant-merch-card-body-xl-line-height: 33px;


    --consonant-merch-card-heading-padding: 0;

    /* colors */
    --consonant-merch-card-background-color: inherit;
    --consonant-merch-card-border-color: #eaeaea;
    --color-accent: rgb(59, 99, 251);
    --merch-color-focus-ring: #1473E6;
    --merch-color-grey-10: #f6f6f6;
    --merch-color-grey-50: var(--spectrum-gray-50);
    --merch-color-grey-60: var(--spectrum-gray-600);
    --merch-color-grey-80: #2c2c2c;
    --merch-color-grey-200: #E8E8E8;
    --merch-color-grey-600: #686868;
    --merch-color-grey-700: #464646;
    --merch-color-grey-800: #222222;
    --merch-color-green-promo: #05834E;
    --merch-color-red-promo: #D31510;
    --merch-color-error: #D73220;
    --merch-color-error-background: #ffebe8;
    --merch-color-grey-80: #2c2c2c;
    --consonant-merch-card-body-xs-color: var(--spectrum-gray-800, var(--merch-color-grey-80));
    --merch-color-inline-price-strikethrough: initial;
    --consonant-merch-card-detail-s-color: var(--spectrum-gray-600, var(--merch-color-grey-600));
    --consonant-merch-card-heading-color: var(--spectrum-gray-800, var(--merch-color-grey-80));
    --consonant-merch-card-heading-xs-color: var(--consonant-merch-card-heading-color);
    --consonant-merch-card-price-color: #222222;
    --consonant-merch-card-heading-xxxs-color: #131313;
    --consonant-merch-card-body-xxs-color: #292929;

    /* ccd colors */
    --ccd-gray-200-light: #E6E6E6;
    --ccd-gray-800-dark: #222;
    --ccd-gray-700-dark: #464646;
    --ccd-gray-600-light: #6D6D6D;

    /* ah colors */
    --ah-gray-500: #717171;
    --fuchsia: #FDE9FF;

    /* plans colors */
    --spectrum-yellow-300-plans: #F5C700;
    --spectrum-green-900-plans: #05834E;
    --spectrum-gray-300-plans: #DADADA;
    --spectrum-gray-700-plans: #505050;
    --spectrum-red-700-plans: #EB1000;

    /* base spectrum colors (used by merch-badge) */
    --spectrum-yellow-300: #F5C700;
    --spectrum-green-900: #05834E;
    --spectrum-red-700: #EB1000;

    /* special-offers colors */
    --spectrum-yellow-300-special-offers: #EDCC00;
    --spectrum-green-900-special-offers: #2D9D78;
    --spectrum-gray-300-special-offers: #D1D1D1;
    --gradient-purple-blue: linear-gradient(96deg, #B539C8 0%, #7155FA 66%, #3B63FB 100%);
    --gradient-firefly-spectrum: linear-gradient(96deg, #D73220 0%, #D92361 33%, #7155FA 100%);

    --color-yellow-300-variation: var(--spectrum-yellow-300-plans);
    --color-green-900-variation: var(--spectrum-green-900-plans);
    --color-gray-300-variation: var(--spectrum-gray-300-plans);
    --color-gray-700-variation: var(--spectrum-gray-700-plans);
    --color-red-700-variation: var(--spectrum-red-700-plans);

    /* simplified-pricing-express colors */
    --spectrum-gray-50: #FFFFFF;
    --spectrum-gray-100: #F8F8F8;
    --spectrum-gray-200: #E6E6E6;
    --spectrum-gray-300: #D5D5D5;
    --spectrum-gray-400: #B8B8B8;
    --spectrum-gray-500: #909090;
    --spectrum-gray-600: #6D6D6D;
    --spectrum-gray-700: #494949;
    --spectrum-gray-800: #2C2C2C;
    --spectrum-gray-900: #1C1C1C;
    --spectrum-indigo-300: #D3D5FF;
    --spectrum-indigo-900: #5258E4;

    /* merch card generic */
    --consonant-merch-card-max-width: 300px;
    --transition: cmax-height 0.3s linear, opacity 0.3s linear;

    /* background image */
    --consonant-merch-card-bg-img-height: 180px;

    /* inline SVGs */
    --checkmark-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 10'%3E%3Cpath fill='%23fff' d='M3.788 9A.999.999 0 0 1 3 8.615l-2.288-3a1 1 0 1 1 1.576-1.23l1.5 1.991 3.924-4.991a1 1 0 1 1 1.576 1.23l-4.712 6A.999.999 0 0 1 3.788 9z' class='spectrum-UIIcon--medium'/%3E%3C/svg%3E%0A");

    --secure-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23757575' viewBox='0 0 12 15'%3E%3Cpath d='M11.5 6H11V5A5 5 0 1 0 1 5v1H.5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5ZM3 5a3 3 0 1 1 6 0v1H3Zm4 6.111V12.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1.389a1.5 1.5 0 1 1 2 0Z'/%3E%3C/svg%3E");

    --info-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36 36'><circle cx='18' cy='12' r='2.15'%3E%3C/circle%3E%3Cpath d='M20.333 24H20v-7.6a.4.4 0 0 0-.4-.4h-3.933s-1.167.032-1.167 1 1.167 1 1.167 1H16v6h-.333s-1.167.032-1.167 1 1.167 1 1.167 1h4.667s1.167-.033 1.167-1-1.168-1-1.168-1z'%3E%3C/path%3E%3Cpath d='M18 2.1A15.9 15.9 0 1 0 33.9 18 15.9 15.9 0 0 0 18 2.1zm0 29.812A13.912 13.912 0 1 1 31.913 18 13.912 13.912 0 0 1 18 31.913z'%3E%3C/path%3E%3C/svg%3E");

    --ellipsis-icon: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><circle cx="2" cy="2" r="2" fill="%232c2c2c" transform="translate(6 6)"/><circle cx="2" cy="2" r="2" fill="%232c2c2c" data-name="Ellipse 71" transform="translate(12 6)"/><circle cx="2" cy="2" r="2" fill="%232c2c2c" transform="translate(0 6)"/></svg>');

    /* callout */
    --consonant-merch-card-callout-line-height: 21px;
    --consonant-merch-card-callout-font-size: 14px;
    --consonant-merch-card-callout-font-color: #2C2C2C;
    --consonant-merch-card-callout-icon-size: 16px;
    --consonant-merch-card-callout-icon-top: 6px;
    --consonant-merch-card-callout-icon-right: 8px;
    --consonant-merch-card-callout-letter-spacing: 0px;
    --consonant-merch-card-callout-icon-padding: 34px;
    --consonant-merch-card-callout-spacing-xxs: 8px;

    --merch-card-ul-padding: 8px;
}

.collection-container {
    display: grid;
    justify-content: center;
    grid-template-columns: min-content min-content;
    grid-template-rows: min-content 1fr;
    align-items: start;
    grid-template-areas: "sidenav header" "sidenav content";
    --merch-card-collection-card-min-height: auto;
    --merch-sidenav-collection-gap: 0;
    --merch-card-collection-card-width: unset;
}

.collection-container merch-sidenav {
    grid-area: sidenav;
}

.collection-container merch-card-collection-header {
    --merch-card-collection-header-margin-bottom: var(--spacing-m);
    grid-area: header;
}

.collection-container merch-card-collection {
    grid-area: content;
}

.collection-container merch-card {
    min-height: var(--merch-card-collection-card-min-height);
}

.collection-container .one-merch-card,
.collection-container .two-merch-cards,
.collection-container .three-merch-cards,
.collection-container .four-merch-cards {
    padding: 0;
}

merch-card-collection {
    display: contents;
}

merch-card-collection > p[slot],
merch-card-collection > div[slot] p,
merch-card-collection-header > p[slot],
merch-card-collection-header > div[slot] p {
    margin: 0;
}

.one-merch-card,
.two-merch-cards,
.three-merch-cards,
.four-merch-cards,
.section[class$="merch-cards"] > .content
{
    --merch-card-collection-card-width: unset;
    display: grid;
    justify-content: center;
    justify-items: stretch;
    align-items: normal;
    gap: var(--consonant-merch-spacing-m);
    padding: var(--spacing-m);
    grid-template-columns: var(--merch-card-collection-card-width);
}

.section[class$="merch-cards"] > .content {
	padding: 0;
}

.tab-content [role='tabpanel'] .section[class$="merch-cards"] > .content {
	width: auto;
}

.tabpanel > .four-merch-cards {
    z-index: 3;
}

/* hide download/upgrade links except the first one */
merch-card a[is="checkout-link"].download:not(:first-of-type),
merch-card a[is="checkout-link"].upgrade:not(:first-of-type) {
  display: none;
}

merch-card[variant="ccd-suggested"] *,
merch-card[variant="ccd-slice"] * {
  box-sizing: border-box;
}

merch-card * {
  padding: revert-layer;
}

merch-card.background-opacity-70 {
    background-color: rgba(255 255 255 / 70%);
}

merch-card.has-divider hr {
    margin: var(--consonant-merch-spacing-xs) 0;
    height: 1px;
    border: none;
}

merch-card hr {
    border: none;
    margin: 0;
    background-color: var(--spectrum-gray-300);
    height: 1px;
}

merch-card.has-divider div[slot='body-lower'] hr {
    margin: 0;
}

merch-card p, merch-card h3, merch-card h4 {
    margin: 0;
}

merch-card span[is='inline-price'] {
    display: inline-block;
}

.annual-price-new-line > span[is="inline-price"] {
  line-height: var(--consonant-merch-card-body-m-line-height);
}

.annual-price-new-line > span[is="inline-price"] > .price-annual-prefix {
  font-size: 0;
  line-height: 0;
}

.annual-price-new-line > span[is="inline-price"] .price:not(.price-annual) {
  display: block;
}

.annual-price-new-line > span[is="inline-price"] > .price-annual::before {
  content: '(';
}

merch-card [slot^='heading-'],
merch-card span[class^='heading-'] {
    color: var(--consonant-merch-card-heading-color);
    font-weight: 700;
}

merch-card span[class^='heading-'],
merch-card span.promo-text {
    display: block;
}

merch-card [slot='heading-xxxs'],
merch-card span.heading-xxxs {
    font-size: var(--consonant-merch-card-heading-xxxs-font-size);
    line-height: var(--consonant-merch-card-heading-xxxs-line-height);
    color: var(--consonant-merch-card-heading-xxxs-color);
    letter-spacing: normal;
}

merch-card [slot='heading-xxs'],
merch-card span.heading-xxs {
    font-size: var(--consonant-merch-card-heading-xxs-font-size);
    line-height: var(--consonant-merch-card-heading-xxs-line-height);
    letter-spacing: normal;
}

merch-card [slot='heading-xs'],
merch-card span.heading-xs {
    font-size: var(--consonant-merch-card-heading-xs-font-size);
    line-height: var(--consonant-merch-card-heading-xs-line-height);
    color: var(--consonant-merch-card-heading-xs-color);
    margin: 0;
}

merch-card.dc-pricing [slot='heading-xs'] {
    margin-bottom: var(--consonant-merch-spacing-xxs);
}

merch-card:not([variant='inline-heading']) [slot='heading-xs'] a {
    color: var(--merch-color-grey-80);
}

merch-card div.starting-at {
  font-size: var(--consonant-merch-card-body-xs-font-size);
  line-height: var(--consonant-merch-card-body-xs-line-height);
  font-weight: 500;
}

merch-card [slot='heading-xs'] a:not(:hover) {
    text-decoration: inherit;
}

merch-card [slot='heading-s'],
merch-card span.heading-s {
    font-size: var(--consonant-merch-card-heading-s-font-size);
    line-height: var(--consonant-merch-card-heading-s-line-height);
    margin: 0;
}

merch-card [slot='heading-m'],
merch-card span.heading-m {
    font-size: var(--consonant-merch-card-heading-m-font-size);
    line-height: var(--consonant-merch-card-heading-m-line-height);
    margin: 0;
}

merch-card [slot='heading-m-price'] {
    font-size: var(--consonant-merch-card-heading-m-font-size);
    line-height: var(--consonant-merch-card-heading-m-line-height);
    padding: 0 var(--consonant-merch-spacing-s);
    margin: 0;
    color: var(--spectrum-gray-800, #2c2c2c);
}

merch-card [slot='heading-l'],
merch-card span.heading-l {
    font-size: var(--consonant-merch-card-heading-l-font-size);
    line-height: var(--consonant-merch-card-heading-l-line-height);
    font-weight: 900;
    margin: 0;
}

/* RTL text alignment for all heading slots */
[dir="rtl"] merch-card [slot^='heading-'],
[dir="rtl"] merch-card [class^='heading-'] {
    text-align: right;
}

merch-card [slot='offers'] {
    padding: var(--consonant-merch-spacing-xxs) var(--consonant-merch-spacing-s);
}

merch-card [slot='whats-included'] {
    margin: var(--consonant-merch-spacing-xxxs) 0px;
}

merch-card [slot='callout-content'] {
    display: flex;
    flex-direction: column;
    margin: var(--consonant-merch-spacing-xxxs) 0px;
    gap: var(--consonant-merch-card-callout-spacing-xxs);
}

merch-card[variant='product'] [slot='badge'],
merch-card[variant='segment'] [slot='badge'],
merch-card[variant^='plans'] [slot='badge'],
merch-card[variant='special-offers'] [slot='badge'] {
    position: absolute;
    top: 16px;
    inset-inline-end: 0;
    line-height: 16px;
}

merch-card [slot='callout-content'] > p {
    background: rgba(203 203 203 / 50%);
    border-radius: var(--consonant-merch-spacing-xxxs);
    padding: var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xxs);
    width: fit-content;
    font-size: var(--consonant-merch-card-callout-font-size);
    line-height: var(--consonant-merch-card-callout-line-height);
}

merch-card [slot='callout-content'] > div {
    display: flex;
    flex-direction: column;
    margin: var(--consonant-merch-spacing-xxxs) 0px;
    gap: var(--consonant-merch-card-callout-spacing-xxs);
    align-items: flex-start;
}

merch-card [slot='callout-content'] > div > div {
    display: flex;
    background: rgba(203 203 203 / 50%);
    border-radius: var(--consonant-merch-spacing-xxxs);
    padding: var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xxs);
}

merch-card [slot='callout-content'] > div > div > div {
    display: inline-block;
    text-align: start;
    font: normal normal normal var(--consonant-merch-card-callout-font-size)/var(--consonant-merch-card-callout-line-height) var(--body-font-family, 'Adobe Clean');
    letter-spacing: var(--consonant-merch-card-callout-letter-spacing);
    color: var(--consonant-merch-card-callout-font-color);
}

merch-card [slot='callout-content'] img {
    width: var(--consonant-merch-card-callout-icon-size);
    height: var(--consonant-merch-card-callout-icon-size);
    margin-inline-end: 2.5px;
    margin-inline-start: 9px;
    margin-block-start: 2.5px;
}

merch-card [slot='detail-s'] {
    font-size: var(--consonant-merch-card-detail-s-font-size);
    line-height: var(--consonant-merch-card-detail-s-line-height);
    letter-spacing: 0.66px;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--consonant-merch-card-detail-s-color);
}

merch-card [slot='detail-m'] {
    font-size: var(--consonant-merch-card-detail-m-font-size);
    letter-spacing: var(--consonant-merch-card-detail-m-letter-spacing);
    font-weight: var(--consonant-merch-card-detail-m-font-weight);
    text-transform: uppercase;
    margin: 0;
    color: var(--merch-color-grey-80);
}

merch-card [slot="body-xxs"] {
    font-size: var(--consonant-merch-card-body-xxs-font-size);
    line-height: var(--consonant-merch-card-body-xxs-line-height);
    font-weight: normal;
    letter-spacing: var(--consonant-merch-card-body-xxs-letter-spacing);
    margin: 0;
    color: var(--merch-color-grey-80);
}

merch-card [slot="body-s"] {
    color: var(--consonant-merch-card-body-s-color);
}

merch-card button.spectrum-Button > a {
  color: inherit;
  text-decoration: none;
}

merch-card button.spectrum-Button > a:hover {
  color: inherit;
}

merch-card button.spectrum-Button > a:active {
  color: inherit;
}

merch-card button.spectrum-Button > a:focus {
  color: inherit;
}

merch-card [slot="body-xs"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
    color: var(--consonant-merch-card-body-xs-color);
}

merch-card [slot="body-m"] {
    font-size: var(--consonant-merch-card-body-m-font-size);
    line-height: var(--consonant-merch-card-body-m-line-height);
    color: var(--merch-color-grey-80);
}

merch-card [slot="body-l"] {
    font-size: var(--consonant-merch-card-body-l-font-size);
    line-height: var(--consonant-merch-card-body-l-line-height);
    color: var(--merch-color-grey-80);
}

merch-card [slot="body-xl"] {
    font-size: var(--consonant-merch-card-body-xl-font-size);
    line-height: var(--consonant-merch-card-body-xl-line-height);
    color: var(--merch-color-grey-80);
}

merch-card [slot="cci-footer"] p,
merch-card [slot="cct-footer"] p,
merch-card [slot="cce-footer"] p {
    margin: 0;
}

merch-card [slot="promo-text"],
merch-card span.promo-text {
    color: var(--merch-color-green-promo);
    font-size: var(--consonant-merch-card-promo-text-height);
    font-weight: 700;
    line-height: var(--consonant-merch-card-heading-font-size);
    margin: 0;
    min-height: var(--consonant-merch-card-promo-text-height);
    padding: 0;
}

merch-card span[data-styling][class^='heading-'],
merch-card span[data-styling].promo-text {
    display: block;
}

merch-card [slot="footer-rows"] {
    min-height: var(--consonant-merch-card-footer-rows-height);
}

merch-card div[slot="footer"] {
    display: contents;
}

merch-card.product div[slot="footer"] {
    display: block;
}

merch-card.product div[slot="footer"] a + a {
    margin: 5px 0 0 5px;
}

merch-card [slot="footer"] a {
    word-wrap: break-word;
    text-align: center;
}

merch-card [slot="footer"] a:not([class]) {
    font-weight: 700;
    font-size: var(--consonant-merch-card-cta-font-size);
}

merch-card div[slot='bg-image'] img {
    position: relative;
    width: 100%;
    min-height: var(--consonant-merch-card-bg-img-height);
    max-height: var(--consonant-merch-card-bg-img-height);
    object-fit: cover;
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}

.price-unit-type:not(.disabled)::before,
.price-tax-inclusivity:not(.disabled)::before {
  content: "\00a0";
}

merch-card span.placeholder-resolved[data-template='priceStrikethrough'],
merch-card span.placeholder-resolved[data-template='strikethrough'],
merch-card span.price.price-strikethrough {
  font-size: var(--consonant-merch-card-body-xs-font-size);
  font-weight: normal;
  text-decoration: line-through;
  color: var(--merch-color-inline-price-strikethrough);
}

mas-field span.placeholder-resolved[data-template='priceStrikethrough'],
mas-field span.placeholder-resolved[data-template='strikethrough'],
mas-field span.price.price-strikethrough,
mas-field span.price.price-promo-strikethrough {
  text-decoration: line-through;
  color: var(--merch-color-inline-price-strikethrough);
}

merch-card [slot^="body-"] ul {
    margin: 0;
    padding-inline-start: var(--merch-card-ul-padding);
    list-style-type: "•";
}

merch-card [slot^="body-"] ul li {
    padding-inline-start: var(--merch-card-ul-padding);
}

/* merch-offer-select */
merch-offer-select[variant="subscription-options"] merch-offer span[is="inline-price"][data-display-tax='true'] .price-tax-inclusivity {
    font-size: 12px;
    font-style: italic;
    font-weight: normal;
    position: absolute;
    left: 0;
    top: 20px;
}

merch-addon span[data-wcs-osi][data-offer-type="TRIAL"] {
    display: none;
}

merch-gradient {
    display: none;
}

body.merch-modal {
    overflow: hidden;
    scrollbar-gutter: stable;
    height: 100vh;
}

merch-sidenav-list img[slot="icon"] {
    height: fit-content;
    pointer-events: none;
}

merch-sidenav-list sp-sidenav > sp-sidenav-item:last-of-type {
    --mod-sidenav-gap: 0;
    line-height: var(--mod-sidenav-top-level-line-height)
}

/* RTL support for sp-sidenav-item */
[dir="rtl"] sp-sidenav-item {
    text-align: right;
}

/* Only apply flex layout when icon with .right class is present */
[dir="rtl"] sp-sidenav-item:has([slot="icon"].right) {
    display: flex;
    flex-direction: row;
}

[dir="rtl"] sp-sidenav-item [slot="icon"].right {
    position: relative;
    right: auto;
    left: auto;
    order: 2;
    margin-inline-start: var(--mod-sidenav-icon-spacing, var(--spectrum-sidenav-icon-spacing));
}

merch-sidenav-checkbox-group h3 {
    font-size: var(--merch-sidenav-checkbox-group-title-font-size);
    font-weight: var(--merch-sidenav-checkbox-group-title-font-weight);
    line-height: var(--merch-sidenav-checkbox-group-title-line-height);
    color: var(--merch-sidenav-checkbox-group-title-color);
    padding: var(--merch-sidenav-checkbox-group-title-padding);
    margin: 0;
}

[dir="rtl"] merch-sidenav-checkbox-group h3 {
    text-align: right;
}

sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

aem-fragment {
  display: contents;
}

mas-field {
  display: inline;
}

merch-card [slot='callout-content'] .icon-button {
  position: absolute;
  text-decoration: none;
  border-bottom: none;
  min-width: 18px;
  display: inline-flex;
  min-height: 18px;
  align-items: center;
  justify-content: center;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"><path d="M7 .778A6.222 6.222 0 1 0 13.222 7 6.222 6.222 0 0 0 7 .778zM6.883 2.45a1.057 1.057 0 0 1 1.113.998q.003.05.001.1a1.036 1.036 0 0 1-1.114 1.114A1.052 1.052 0 0 1 5.77 3.547 1.057 1.057 0 0 1 6.784 2.45q.05-.002.1.001zm1.673 8.05a.389.389 0 0 1-.39.389H5.834a.389.389 0 0 1-.389-.389v-.778a.389.389 0 0 1 .39-.389h.388V7h-.389a.389.389 0 0 1-.389-.389v-.778a.389.389 0 0 1 .39-.389h1.555a.389.389 0 0 1 .389.39v3.5h.389a.389.389 0 0 1 .389.388z"/></svg>');
  background-size: 18px;
}

merch-card [slot='callout-content'] .icon-button::before {
  content: attr(data-tooltip);
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 100%;
  margin-left: 8px;
  max-width: 140px;
  padding: 10px;
  border-radius: 5px;
  background: #0469E3;
  color: #fff;
  text-align: left;
  display: none;
  z-index: 10;
  font-size: 12px;
  font-style: normal;
  font-weight: 400;
  line-height: 16px;
  width: max-content;
}

merch-card [slot='callout-content'] .icon-button.tooltip-visible::before {
    display: block;
}

merch-card [slot='callout-content'] .icon-button::after {
  content: "";
  position: absolute;
  left: 102%;
  margin-left: -8px;
  top: 50%;
  transform: translateY(-50%);
  border: 8px solid #0469E3;
  border-color: transparent #0469E3 transparent transparent;
  display: none;
  z-index: 10;
}

merch-card [slot='callout-content'] .icon-button.tooltip-visible::after {
    display: block;
}

merch-card [slot='callout-content'] .icon-button.hide-tooltip::before,
merch-card [slot='callout-content'] .icon-button.hide-tooltip::after {
  display: none;
}

merch-card merch-whats-included [slot="contentBullets"] [slot="icon"] {
    margin-right: 10px;
}

/* Collapse the icon column only when no row in this block uses an icon */
merch-card
    merch-whats-included:not(
        :has(
            merch-mnemonic-list [slot="icon"] .sp-icon,
            merch-mnemonic-list [slot="icon"] img[src]:not([src=""]),
            merch-mnemonic-list [slot="icon"] merch-icon[src]:not([src=""])
        )
    )
    merch-mnemonic-list:not([data-placeholder])
    [slot="icon"] {
    display: none;
}

merch-card merch-whats-included[has-bullets] [slot="content"] {
    display: flex;
    flex-wrap: wrap;
    row-gap: 10px;
}

merch-badge[background-color="spectrum-red-700-plans"],
merch-badge[background-color="spectrum-green-900-special-offers"] {
  color: #FFFFFF;
}

merch-card[id]:not(:is([variant^="ccd-"],[variant^="ah-"],[variant$="-pricing-express"],[variant="fries"])) [data-template="price"] .price-strikethrough span:is(.price-tax-inclusivity, .price-unit-type),
merch-card[id]:not(:is([variant^="ccd-"],[variant^="ah-"],[variant$="-pricing-express"],[variant="fries"])) [data-template="strikethrough"]:has(+ [data-template="price"]) span:is(.price-tax-inclusivity, .price-unit-type) {
    display: none;
}

/* Badge border-radius with RTL support */
merch-badge {
  --merch-badge-border-radius: 4px 0 0 4px; /* LTR default */
}

[dir="rtl"] merch-badge {
  --merch-badge-border-radius: 0 4px 4px 0; /* RTL override */
}

/* Red border color for merch-cards */
merch-card[border-color="spectrum-red-700-plans"] {
  border-color: var(--spectrum-red-700-plans);
}

@media (max-width: 600px) {
    merch-card [slot='callout-content'] .icon-button.tooltip-left::before {
        left: -30px;
    }

    merch-card [slot='callout-content'] .icon-button.tooltip-right::before {
        left: unset;
        right: -20px;
    }    
}

@media screen and (max-width: 1199px) {
    merch-card [slot='callout-content'] .icon-button::before {
        top: unset;
        left: unset;
        margin-bottom: 34px;
    }

    merch-card [slot='callout-content'] .icon-button::after {
        top: 0px;
        left: unset;
        margin-left: unset;
        border-color: #0469E3 transparent transparent transparent;
    }  
}

/* RTL support for collection header - Mobile */
[dir="rtl"] merch-card-collection-header {
    --merch-card-collection-header-areas: 'search search' 'sort filter'
        'result result';
}

[dir="rtl"] merch-card-collection-header #result {
    text-align: right;
}

@media screen and (min-width: 768px) {
    .two-merch-cards,
    .three-merch-cards,
    .four-merch-cards,
	.section[class*="-merch-cards"] > .content
	{
        grid-template-columns: repeat(2, var(--merch-card-collection-card-width));
    }

    /* RTL support for collection header - Tablet */
    [dir="rtl"] merch-card-collection-header {
        --merch-card-collection-header-areas: 'sort filter search'
            'result result result';
    }
}

@media screen and (min-width: 1200px) {

    .four-merch-cards,
	.section.four-merch-cards > .content {
        grid-template-columns: repeat(4, var(--merch-card-collection-card-width));
    }

    .three-merch-cards,
    merch-sidenav ~ .four-merch-cards,
	.section.three-merch-cards > .content {
        grid-template-columns: repeat(3, var(--merch-card-collection-card-width));
    }

    /* RTL support for collection header - Desktop */
    [dir="rtl"] merch-card-collection-header {
        --merch-card-collection-header-areas: 'sort result';
    }
}

@media screen and (min-width: 1600px) {
    .four-merch-cards,
    merch-sidenav ~ .four-merch-cards,
	.section.four-merch-cards > .content {
        grid-template-columns: repeat(4, var(--merch-card-collection-card-width));
    }
}

</style><style>
  :root {
    --consonant-merch-card-mini-compare-chart-icon-size: 32px;
    --consonant-merch-card-mini-compare-border-color: #E9E9E9;
    --consonant-merch-card-mini-compare-mobile-cta-font-size: 16px;
    --consonant-merch-card-mini-compare-mobile-cta-width: 75px;
    --consonant-merch-card-mini-compare-badge-mobile-max-width: 50px;
    --consonant-merch-card-mini-compare-mobile-price-font-size: 32px;
    --consonant-merch-card-card-mini-compare-mobile-background-color: #F8F8F8;
    --consonant-merch-card-card-mini-compare-mobile-spacing-xs: 12px;
    --consonant-merch-card-mini-compare-chart-heading-m-price-height: 30px;
  }

  merch-card[variant="mini-compare-chart"] {
    background: linear-gradient(#FFFFFF, #FFFFFF) padding-box, var(--consonant-merch-card-border-color, #E9E9E9) border-box;
    border: 1px solid transparent;
  }

  merch-card[variant="mini-compare-chart"] merch-badge {
    position: absolute;
    top: 16px;
    inset-inline-start: auto;
    inset-inline-end: 0;
  }
   merch-card[variant="mini-compare-chart"] div[class$='-badge'] {
     font-size: 14px;
   }

  merch-card[variant="mini-compare-chart"] div[class$='-badge']:dir(rtl) {
    left: 0;
    right: initial;
    padding: 8px 11px;
    border-radius: 0 5px 5px 0;
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m"] {
    padding: 0 var(--consonant-merch-spacing-s) 0;
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-xs"] {
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s);
    font-size: var(--consonant-merch-card-heading-m-font-size);
    line-height: var(--consonant-merch-card-heading-m-line-height);
  }

  merch-card[variant="mini-compare-chart"] merch-addon {
    box-sizing: border-box;
  }

  merch-card[variant="mini-compare-chart"] merch-addon {
    padding-inline-start: 4px;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-inline-end: 8px;
    border-radius: 10px;
    font-family: var(--merch-body-font-family, 'Adobe Clean');
    margin: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s) .5rem;
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
    background: linear-gradient(211deg, rgb(245, 246, 253) 33.52%, rgb(248, 241, 248) 67.33%, rgb(249, 233, 237) 110.37%);
  }

  merch-card[variant="mini-compare-chart"] merch-addon [is="inline-price"] {
    min-height: unset;
    font-weight: bold;
    pointer-events: none;
  }

  merch-card[variant="mini-compare-chart"] merch-addon::part(checkbox) {
      height: 18px;
      width: 18px;
      margin: 14px 12px 0 8px;
  }

  merch-card[variant="mini-compare-chart"] merch-addon::part(label) {
    display: flex;
    flex-direction: column;
    padding: 8px 4px 8px 0;
    width: 100%;
  }

  merch-card[variant="mini-compare-chart"] [is="inline-price"] {
    display: inline-block;
    min-height: 30px;
    line-height: 30px;
    min-width: 1px;
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m-price"]  {
    min-height: 30px;
    line-height: 30px;
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m-price"] [is="inline-price"][data-template="legal"] {
    display: inline;
    min-height: unset;
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m-price"] .price-plan-type {
    display: block;
    font-size: var(--consonant-merch-card-body-xs-font-size);
		font-style: italic;
		font-weight: normal;
  }

  merch-card[variant="mini-compare-chart"] [slot="callout-content"] {
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s) 0px;
  }

  merch-card[variant="mini-compare-chart"] [slot="callout-content"] .callout-row {
    flex-direction: row;
    align-items: flex-start;
    padding: 2px 10px 3px;
  }

  merch-card[variant="mini-compare-chart"] [slot="callout-content"] .callout-row .icon-button {
    position: relative;
    top: 2px;
    left: auto;
    flex-shrink: 0;
    align-self: flex-start;
    margin-inline-start: var(--consonant-merch-spacing-xxs);
  }

  merch-card[variant="mini-compare-chart"] [slot="quantity-select"] {
    padding: 0 var(--consonant-merch-spacing-s);
  }

  merch-card[variant="mini-compare-chart"] [slot="subtitle"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
    padding: 0 var(--consonant-merch-spacing-s);
    font-weight: 500;
  }

  merch-card[variant="mini-compare-chart"] [slot="body-m"] {
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s);
  }

  merch-card[variant="mini-compare-chart"] [slot="callout-content"] [is="inline-price"] {
    min-height: unset;
  }

  merch-card[variant="mini-compare-chart"] [slot="price-commitment"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    padding: 0 var(--consonant-merch-spacing-s);
    font-style: italic;
  }

  merch-card[variant="mini-compare-chart"] [slot="price-commitment"] a {
    display: inline-block;
    height: 27px;
  }

  merch-card[variant="mini-compare-chart"] [slot="offers"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
  }

  merch-card[variant="mini-compare-chart"] [slot="body-xxs"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
  }

  merch-card[variant="mini-compare-chart"] .price-plan-type [slot="body-xxs"] {
    font-style: italic;
    font-weight: normal;
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] {
    font-size: var(--consonant-merch-card-body-m-font-size);
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s) 0;
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] p {
    margin: 0;
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] [is="inline-price"] {
    line-height: var(--consonant-merch-card-body-xs-line-height);
    min-height: unset;
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] a {
    color: var(--color-accent);
    text-decoration: underline;
  }

  merch-card[variant="mini-compare-chart"] a.upt-link {
    color: var(--link-color);
  }


  merch-card[variant="mini-compare-chart"] [slot="body-m"] p {
    margin: 0;
  }

  merch-card[variant="mini-compare-chart"] .action-area {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    flex-wrap: wrap;
    width: 100%;
    gap: var(--consonant-merch-spacing-xxs);
  }

  /* Override merch-whats-included host layout for footer-row display */
  merch-card[variant="mini-compare-chart"] merch-whats-included {
    display: flex;
    flex-direction: column;
    width: 100%;
    row-gap: 0;
  }

  /* Hide heading in footer context */
  merch-card[variant="mini-compare-chart"] merch-whats-included [slot="heading"] {
    display: none;
  }

  /* Icon sizing */
  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="icon"] {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: var(--consonant-merch-card-mini-compare-chart-icon-size);
    width: var(--consonant-merch-card-mini-compare-chart-icon-size);
    height: var(--consonant-merch-card-mini-compare-chart-icon-size);
  }

  merch-card[variant="mini-compare-chart"]
      merch-whats-included:not(
          :has(
              merch-mnemonic-list [slot="icon"] .sp-icon,
              merch-mnemonic-list [slot="icon"] img[src]:not([src=""]),
              merch-mnemonic-list [slot="icon"] merch-icon[src]:not([src=""])
          )
      )
      merch-mnemonic-list:not([data-placeholder])
      [slot="icon"] {
      display: none;
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="icon"] img {
    max-width: initial;
    width: var(--consonant-merch-card-mini-compare-chart-icon-size);
    height: var(--consonant-merch-card-mini-compare-chart-icon-size);
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="icon"] merch-icon {
    --mod-img-width: var(--consonant-merch-card-mini-compare-chart-icon-size);
    --mod-img-height: var(--consonant-merch-card-mini-compare-chart-icon-size);
  }

  merch-card[variant="mini-compare-chart"] .footer-rows-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-color: var(--merch-color-grey-60);
    font-weight: 700;
    line-height: var(--consonant-merch-card-body-xs-line-height);
    font-size: var(--consonant-merch-card-body-s-font-size);
  }

  /* Footer-row-cell layout (legacy footer-rows structure used by DC pages) */
  merch-card[variant="mini-compare-chart"] [slot="footer-rows"] ul {
    margin-block: 0px;
    padding-inline-start: 0px;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell {
    border-top: 1px solid var(--consonant-merch-card-border-color);
    display: flex;
    gap: var(--consonant-merch-spacing-xs);
    justify-content: start;
    place-items: center;
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s);
    margin-block: 0px;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-icon {
    display: flex;
    place-items: center;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-icon img {
    max-width: initial;
    width: var(--consonant-merch-card-mini-compare-chart-icon-size);
    height: var(--consonant-merch-card-mini-compare-chart-icon-size);
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
    font-weight: 400;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description p {
    color: var(--merch-color-grey-80);
    vertical-align: bottom;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description a {
    color: var(--color-accent);
  }

  /* Style each mnemonic-list as a footer row */
  merch-card[variant="mini-compare-chart"] merch-mnemonic-list {
    width: 100%;
    margin-inline: 0;
    border-top: 1px solid var(
        --consonant-merch-card-whats-included-divider-color,
        var(--consonant-merch-card-mini-compare-border-color)
    );
    display: flex;
    gap: var(--consonant-merch-spacing-xs);
    justify-content: start;
    align-items: center;
    padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s);
    box-sizing: border-box;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-icon-checkmark img {
    max-width: initial;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-icon-checkmark {
    display: flex;
    align-items: center;
    height: 20px;
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-checkmark {
    display: flex;
    gap: var(--consonant-merch-spacing-xs);
    justify-content: start;
    align-items: flex-start;
    margin-block: var(--consonant-merch-spacing-xxxs);
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description-checkmark {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    font-weight: 400;
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="description"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
    font-weight: 400;
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="description"] p {
    color: var(--merch-color-grey-80);
    vertical-align: bottom;
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="description"] a {
    color: var(--color-accent);
  }

  merch-card[variant="mini-compare-chart"] .toggle-icon {
    display: flex;
    background-color: transparent;
    border: none;
    padding: 0;
    margin: 0;
    text-align: inherit;
    font: inherit;
    border-radius: 0;
  }

  merch-card[variant="mini-compare-chart"] .checkmark-copy-container {
    display: none;
  }

  merch-card[variant="mini-compare-chart"] .checkmark-copy-container.open {
    display: block;
    padding-block-start: var(--consonant-merch-card-card-mini-compare-mobile-spacing-xs);
    padding-block-end: 4px;
  }

.one-merch-card.mini-compare-chart {
  grid-template-columns: var(--consonant-merch-card-mini-compare-chart-wide-width);
  gap: var(--consonant-merch-spacing-xs);
}

.two-merch-cards.mini-compare-chart,
.three-merch-cards.mini-compare-chart,
.four-merch-cards.mini-compare-chart {
  grid-template-columns: repeat(2, var(--consonant-merch-card-mini-compare-chart-width));
  gap: var(--consonant-merch-spacing-xs);
}

/* Sections inside tabs/fragments that don't receive the .mini-compare-chart class.
   Make .content wrapper transparent so the section grid applies directly to cards. */
.one-merch-card:has(merch-card[variant="mini-compare-chart"]) .content,
.two-merch-cards:has(merch-card[variant="mini-compare-chart"]) .content,
.three-merch-cards:has(merch-card[variant="mini-compare-chart"]) .content,
.four-merch-cards:has(merch-card[variant="mini-compare-chart"]) .content {
  display: contents;
}

.one-merch-card:has(merch-card[variant="mini-compare-chart"]) {
  grid-template-columns: var(--consonant-merch-card-mini-compare-chart-wide-width);
  gap: var(--consonant-merch-spacing-xs);
}

.two-merch-cards:has(merch-card[variant="mini-compare-chart"]),
.three-merch-cards:has(merch-card[variant="mini-compare-chart"]),
.four-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
  grid-template-columns: repeat(2, var(--consonant-merch-card-mini-compare-chart-width));
  gap: var(--consonant-merch-spacing-xs);
}

/* Place compare-plans text-block below all cards in multi-card layouts */
.two-merch-cards:has(merch-card[variant="mini-compare-chart"]) .text-block,
.three-merch-cards:has(merch-card[variant="mini-compare-chart"]) .text-block,
.four-merch-cards:has(merch-card[variant="mini-compare-chart"]) .text-block {
  grid-column: 1 / -1;
}

/* bullet list */
merch-card[variant="mini-compare-chart"].bullet-list {
  border-radius: var(--consonant-merch-spacing-xxs);
}

merch-card[variant="mini-compare-chart"].bullet-list:not(.badge-card):not(.mini-compare-chart-badge) {
  border-color: var(--consonant-merch-card-mini-compare-border-color);
}

merch-card[variant="mini-compare-chart"].badge-card {
  border: var(--consonant-merch-card-border);
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m"] {
  padding: var(--consonant-merch-spacing-xxs) var(--consonant-merch-spacing-xs);
  font-size: var(--consonant-merch-card-heading-xxs-font-size);
  line-height: var(--consonant-merch-card-heading-xxs-line-height);
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"],
merch-card[variant="mini-compare-chart"].bullet-list [slot="price-commitment"] {
  padding: 0 var(--consonant-merch-spacing-xs);
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] .starting-at {
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 400;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] .price {
  font-size: var(--consonant-merch-card-heading-l-font-size);
  line-height: 35px;
  font-weight: 800;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] .price-alternative:has(+ .price-annual-prefix) {
  margin-bottom: 4px;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] [data-template="strikethrough"] {
  min-height: 24px;
  margin-bottom: 2px;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] [data-template="strikethrough"],
merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"] .price-strikethrough {
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 700;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"].annual-price-new-line > span[is="inline-price"] > .price-annual,
merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"].annual-price-new-line > span[is="inline-price"] > .price-annual-prefix::after,
merch-card[variant="mini-compare-chart"].bullet-list [slot="heading-m-price"].annual-price-new-line > span[is="inline-price"] >.price-annual-suffix {
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 400;
  font-style: italic;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="body-xxs"] {
  padding: var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xs) 0;
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 400;
  letter-spacing: normal;
  font-style: italic;
}

merch-card[variant="mini-compare-chart"]:not(.bullet-list) p.card-heading[slot="body-xxs"] {
  padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-s) 0;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="promo-text"] {
  padding: var(--consonant-merch-card-card-mini-compare-mobile-spacing-xs) var(--consonant-merch-spacing-xs) 0;
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 700;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="promo-text"] a {
  font-weight: 400;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="body-m"] {
  padding: var(--consonant-merch-card-card-mini-compare-mobile-spacing-xs) var(--consonant-merch-spacing-xs) 0;
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
  font-weight: 400;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="body-m"] p:has(+ p) {
  margin-bottom: 8px;
}

merch-card[variant="mini-compare-chart"] [slot="footer-rows"] a.spectrum-Link.spectrum-Link--secondary,
merch-card[variant="mini-compare-chart"] [slot="body-m"] a.spectrum-Link.spectrum-Link--secondary {
  color: inherit;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="callout-content"] {
  padding: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-xs) 0px;
  margin: 0;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="callout-content"] > div > div {
  background-color: #D9D9D9;
}

merch-card[variant="mini-compare-chart"].bullet-list merch-addon {
  margin: var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-xs) var(--consonant-merch-spacing-xxs);
}

merch-card[variant="mini-compare-chart"].bullet-list merch-addon [is="inline-price"] {
  font-weight: 400;
}

merch-card[variant="mini-compare-chart"].bullet-list footer {
  gap: var(--consonant-merch-spacing-xxs);
}

merch-card[variant="mini-compare-chart"].bullet-list .action-area {
  justify-content: flex-start;
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="footer-rows"] {
  background-color: var(--consonant-merch-card-card-mini-compare-mobile-background-color);
  border-radius: 0 0 var(--consonant-merch-spacing-xxs) var(--consonant-merch-spacing-xxs);
}

merch-card[variant="mini-compare-chart"].bullet-list [slot="price-commitment"] {
  padding: var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xs) 0 var(--consonant-merch-spacing-xs);
  font-size: var(--consonant-merch-card-body-s-font-size);
  line-height: var(--consonant-merch-card-body-s-line-height);
}

/* mini compare mobile */
@media screen and (max-width: 767px) {
  :root {
    --consonant-merch-card-mini-compare-chart-width: 302px;
    --consonant-merch-card-mini-compare-chart-wide-width: 302px;
  }

  .two-merch-cards.mini-compare-chart,
  .three-merch-cards.mini-compare-chart,
  .four-merch-cards.mini-compare-chart,
  .two-merch-cards:has(merch-card[variant="mini-compare-chart"]),
  .three-merch-cards:has(merch-card[variant="mini-compare-chart"]),
  .four-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
    grid-template-columns: var(--consonant-merch-card-mini-compare-chart-width);
    gap: var(--consonant-merch-spacing-xs);
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="subtitle"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m-price"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="body-m"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="description"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
    font-weight: 400;
  }

  merch-card[variant="mini-compare-chart"] merch-addon {
    box-sizing: border-box;
  }
}

@media screen and (max-width: 1199px) {
  merch-card[variant="mini-compare-chart"] [slot="heading-m"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="subtitle"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="heading-m-price"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="body-m"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="promo-text"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] merch-mnemonic-list [slot="description"] {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="mini-compare-chart"] .footer-row-cell-description {
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
    font-weight: 400;
  }

  merch-card[variant="mini-compare-chart"].bullet-list merch-mnemonic-list [slot="description"] {
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"] [slot="footer"] a.con-button {
    min-width: 66px;
    padding: 4px 18px 5px 21px;
    font-size: var(--consonant-merch-card-mini-compare-mobile-cta-font-size);
  }

  merch-card[variant="mini-compare-chart"].bullet-list [slot="footer"] a.con-button {
    padding: 6px 18px 4px;
  }
}
@media screen and (min-width: 768px) {
  :root {
    --consonant-merch-card-mini-compare-chart-width: 302px;
    --consonant-merch-card-mini-compare-chart-wide-width: 302px;
  }

  .two-merch-cards.mini-compare-chart,
  .two-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
    grid-template-columns: repeat(2, minmax(var(--consonant-merch-card-mini-compare-chart-width), var(--consonant-merch-card-mini-compare-chart-wide-width)));
    gap: var(--consonant-merch-spacing-m);
  }

  .three-merch-cards.mini-compare-chart,
  .four-merch-cards.mini-compare-chart,
  .three-merch-cards:has(merch-card[variant="mini-compare-chart"]),
  .four-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
      grid-template-columns: repeat(2, minmax(var(--consonant-merch-card-mini-compare-chart-width), var(--consonant-merch-card-mini-compare-chart-wide-width)));
  }

   merch-card[variant="mini-compare-chart"].bullet-list [slot="price-commitment"] {
    padding: var(--consonant-merch-spacing-xxxs) var(--consonant-merch-spacing-xs) 0 var(--consonant-merch-spacing-xs);
    font-size: var(--consonant-merch-card-body-s-font-size);
    line-height: var(--consonant-merch-card-body-s-line-height);
    font-weight: 400;
  }

  merch-card[variant="mini-compare-chart"].bullet-list [slot="footer-rows"] {
    padding: var(--consonant-merch-spacing-xs);
  }

  merch-card[variant="mini-compare-chart"].bullet-list .footer-rows-title {
    line-height: var(--consonant-merch-card-body-s-line-height);
  }

  merch-card[variant="mini-compare-chart"].bullet-list .checkmark-copy-container.open {
    padding-block-start: var(--consonant-merch-spacing-xs);
    padding-block-end: 0;
    padding-inline: 0;
  }

  merch-card[variant="mini-compare-chart"].bullet-list .footer-row-cell-checkmark {
    gap: var(--consonant-merch-spacing-xxs);
  }
}

/* desktop */
@media screen and (min-width: 1200px) {
  :root {
    --consonant-merch-card-mini-compare-chart-width: 378px;
    --consonant-merch-card-mini-compare-chart-wide-width: 484px;
  }
  .one-merch-card.mini-compare-chart,
  .one-merch-card:has(merch-card[variant="mini-compare-chart"]) {
    grid-template-columns: var(--consonant-merch-card-mini-compare-chart-wide-width);
  }

  .two-merch-cards.mini-compare-chart,
  .two-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
    grid-template-columns: repeat(2, var(--consonant-merch-card-mini-compare-chart-wide-width));
    gap: var(--consonant-merch-spacing-m);
  }

  .three-merch-cards.mini-compare-chart,
  .four-merch-cards.mini-compare-chart,
  .three-merch-cards:has(merch-card[variant="mini-compare-chart"]),
  .four-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
    grid-template-columns: repeat(3, var(--consonant-merch-card-mini-compare-chart-width));
    gap: var(--consonant-merch-spacing-m);
  }
}

@media screen and (min-width: 1600px) {
  .four-merch-cards.mini-compare-chart,
  .four-merch-cards:has(merch-card[variant="mini-compare-chart"]) {
      grid-template-columns: repeat(4, var(--consonant-merch-card-mini-compare-chart-width));
  }
}

merch-card[variant="mini-compare-chart"].bullet-list div[slot="footer-rows"]  {
  height: 100%;
}

/* Height sync for legacy footer-row-cell structure (DC pages without mini-compare-chart-mweb variant) */
merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(1) {
  min-height: var(--consonant-merch-card-footer-row-1-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(2) {
  min-height: var(--consonant-merch-card-footer-row-2-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(3) {
  min-height: var(--consonant-merch-card-footer-row-3-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(4) {
  min-height: var(--consonant-merch-card-footer-row-4-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(5) {
  min-height: var(--consonant-merch-card-footer-row-5-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(6) {
  min-height: var(--consonant-merch-card-footer-row-6-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(7) {
  min-height: var(--consonant-merch-card-footer-row-7-min-height);
}

merch-card[variant="mini-compare-chart"] .footer-row-cell:nth-child(8) {
  min-height: var(--consonant-merch-card-footer-row-8-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(1) {
  min-height: var(--consonant-merch-card-footer-row-1-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(2) {
  min-height: var(--consonant-merch-card-footer-row-2-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(3) {
  min-height: var(--consonant-merch-card-footer-row-3-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(4) {
  min-height: var(--consonant-merch-card-footer-row-4-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(5) {
  min-height: var(--consonant-merch-card-footer-row-5-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(6) {
  min-height: var(--consonant-merch-card-footer-row-6-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(7) {
  min-height: var(--consonant-merch-card-footer-row-7-min-height);
}

merch-card[variant="mini-compare-chart"] merch-mnemonic-list:nth-child(8) {
  min-height: var(--consonant-merch-card-footer-row-8-min-height);
}
</style><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/modal/modal.js"><link rel="stylesheet" href="/libs/blocks/modal/modal.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/fragment/fragment.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch-offers/merch-offers.js"><link rel="stylesheet" href="/libs/blocks/merch-offers/merch-offers.css"><link rel="stylesheet" href="/libs/blocks/icon-block/icon-block.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/accordion/accordion.js"><link rel="stylesheet" href="/libs/blocks/accordion/accordion.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"></head>
  <body>
    <header class="global-navigation has-breadcrumbs ready local-nav" daa-im="true" daa-lh="gnav|localnav-acrobat|desktop|acrobat-pro-dev" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
        <div class="feds-brand-container">
          <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="dialog" aria-label="Navigation menu" aria-controls="feds-popup-1" data-feds-preventautoclose="">
      </button>
          <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
        <span class="feds-brand-image brand-image-only"><img loading="lazy" src="/federal/assets/svgs/adobe-logo.svg" alt="Adobe, Inc."></span>
        
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu feds-navItem--active feds-navItem--activeDeferred" daa-lh="PDFs E signatures" style="width: 172px;">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="PDFs E signatures-1" daa-lh="header|Open">
              PDFs &amp; E-signatures
            </button>
            <div class="feds-popup" id="feds-popup-1">
        <div class="feds-menu-container">
          <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Products
    </div><div class="feds-menu-items" daa-lh="Products"><ul><li><a href="/acrobat/" class="feds-navLink" daa-ll="Adobe Acrobat-1">
      <div class="feds-navLink-image"><picture><img loading="lazy" src="/federal/assets/svgs/acrobat-pro-40.svg" alt="Adobe Acrobat Studio"></picture></div>
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Adobe Acrobat</div>
      <div class="feds-navLink-description">The AI-powered productivity and creation platform</div>
    </div>
    </a></li><li><a href="/acrobat/acrobat-studio/" class="feds-navLink" daa-ll="Adobe Acrobat Studio-2">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Adobe Acrobat Studio</div>
      <div class="feds-navLink-description">The AI-powered PDF and design solution for business workflows</div>
    </div>
    </a></li><li><a href="/acrobat/acrobat-pro/" class="feds-navLink" daa-ll="Adobe Acrobat Pro-3">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Adobe Acrobat Pro</div>
      <div class="feds-navLink-description">The secure solution for PDF and e-signature workflows</div>
    </div>
    </a></li><li><a href="/acrobat/acrobat-express/" class="feds-navLink" daa-ll="Acrobat Express-4">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Acrobat Express</div>
      <div class="feds-navLink-description">AI-powered insights, sharing, and content creation</div>
    </div>
    </a></li><li><a href="/sign/" class="feds-navLink" daa-ll="Acrobat Sign-5">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Acrobat Sign</div>
      <div class="feds-navLink-description">The essential e-signature solution</div>
    </div>
    </a></li><li><a href="/acrobat/pdf-reader/" class="feds-navLink" daa-ll="Acrobat Reader-6">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Acrobat Reader</div>
      <div class="feds-navLink-description">The trusted standard for viewing and annotating PDFs</div>
    </div>
    </a></li><li><div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/" class="feds-cta feds-cta--primary" daa-ll="Acrobat plans and pricing-7">Acrobat plans and pricing</a>
    </div></li></ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Shop for
    </div><div class="feds-menu-items" daa-lh="Shop for"><ul data-path="/federal/globalnav/acom/fragments/dc/dc-column-2">
    <li><a href="/acrobat/business/" daa-ll="Business-1" class="feds-navLink">Business</a></li>
    <li><a href="/education/" daa-ll="Student Teachers-2" class="feds-navLink">Student &amp; Teachers</a></li>
    <li><a href="/acrobat/personal-document-management/" daa-ll="Home Personal-3" class="feds-navLink">Home &amp; Personal</a></li>
    <li><a href="/acrobat/business/industries/government/" daa-ll="Government-4" class="feds-navLink">Government</a></li>
    <li><a href="/nonprofits/acrobat/" daa-ll="Nonprofits-5" class="feds-navLink">Nonprofits</a></li>
  </ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Online tools
    </div><div class="feds-menu-items" daa-lh="Online tools"><ul data-path="/federal/globalnav/acom/fragments/dc/dc-column-3">
    <li><a href="/acrobat/online/pdf-editor/" daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a></li>
    <li><a href="/acrobat/online/ai-chat-pdf/" daa-ll="Chat with PDF-2" class="feds-navLink">Chat with PDF</a></li>
    <li><a href="/acrobat/online/pdf-to-word/" daa-ll="PDF to Word-3" class="feds-navLink">PDF to Word</a></li>
    <li><a href="/acrobat/online/compress-pdf/" daa-ll="Compress PDF-4" class="feds-navLink">Compress PDF</a></li>
    <li><a href="/acrobat/online/merge-pdf/" daa-ll="Merge PDF-5" class="feds-navLink">Merge PDF</a></li>
    <li><a href="/acrobat/online/word-to-pdf/" daa-ll="Word to PDF-6" class="feds-navLink">Word to PDF</a></li>
    <li><a href="/acrobat/online/" daa-ll="View all tools-7" class="feds-navLink">View all tools</a></li>
  </ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-promo-wrapper" daa-lh="promo-card">
      <div class="feds-promo" data-path="/federal/globalnav/acom/fragments/dc/dc-promo/dc-promo">
    <a class="feds-promo-image" href="/acrobat/free-trial-download/" daa-ll="promo-image" aria-hidden="true" tabindex="-1">
          <picture>
          <source type="image/webp" srcset="/federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png" media="(min-width: 600px)">
          <source type="image/webp" srcset="/federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png">
          <source type="image/png" srcset="/federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png" media="(min-width: 600px)">
          <img loading="lazy" alt="decorative image" src="/federal/globalnav/acom/fragments/dc/dc-promo/media_163956389f4c818ceb5aa15d706e06da3b7dadcc7.png" width="520" height="293">
        </picture>
        </a>
    <div class="feds-promo-content">
      <div>
        <div class="feds-promo-header" role="heading" aria-level="2">
        Adobe Acrobat
      </div>
        <p>Trusted PDF tools enhanced with AI to answer questions and generate summaries.</p>
        <p><a href="/acrobat/free-trial-download/" aria-label="Start free trial for Acrobat Studio" daa-ll="Start free trial-1" class="feds-promo-link">Start free trial</a></p>
      </div>
    </div>
  </div>
    </div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"></div></div>
</div>
        </div>
      <div class="feds-crossCloudMenu-wrapper">
    <div class="feds-crossCloudMenu">
      <div>
        <ul>
          <li class="feds-crossCloudMenu-item"><a href="/index/" daa-ll="Adobe com-1" class="feds-navLink"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 18 18" width="25"><path fill="#6E6E6E" d="M17.666,10.125,9.375,1.834a.53151.53151,0,0,0-.75,0L.334,10.125a.53051.53051,0,0,0,0,.75l.979.9785A.5.5,0,0,0,1.6665,12H2v4.5a.5.5,0,0,0,.5.5h4a.5.5,0,0,0,.5-.5v-5a.5.5,0,0,1,.5-.5h3a.5.5,0,0,1,.5.5v5a.5.5,0,0,0,.5.5h4a.5.5,0,0,0,.5-.5V12h.3335a.5.5,0,0,0,.3535-.1465l.979-.9785A.53051.53051,0,0,0,17.666,10.125Z"></path></svg>Adobe.com</a></li>
          <li class="feds-crossCloudMenu-item"><a href="/creativecloud/" daa-ll="Creativity Design-2" class="feds-navLink">Creativity &amp; Design</a></li>
          <li class="feds-crossCloudMenu-item"><a href="/acrobat/" daa-ll="PDF E signatures-3" class="feds-navLink">PDF &amp; E-signatures</a></li>
          <li class="feds-crossCloudMenu-item"><a href="https://business.adobe.com/" daa-ll="Marketing Commerce-4" class="feds-navLink">Marketing &amp; Commerce</a></li>
          <li class="feds-crossCloudMenu-item"><a href="https://helpx.adobe.com/support.html" daa-ll="Help Support-5" class="feds-navLink">Help &amp; Support</a></li>
        </ul>
      </div>
    </div>
  </div></div></section><div class="feds-navItem" role="listitem">
              <a href="/acrobat/" class="feds-navLink" daa-ll="Adobe Acrobat-2">Adobe Acrobat</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Features-3" daa-lh="header|Open">
              Features
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/features/modify-pdfs/" daa-ll="Modify PDFs-1" class="feds-navLink">Modify PDFs</a></li>
    <li><a href="/acrobat/features/create-pdf/" daa-ll="Create PDFs-2" class="feds-navLink">Create PDFs</a></li>
    <li><a href="/acrobat/features/sign-fillable-pdf-forms/" daa-ll="Sign PDFs-3" class="feds-navLink">Sign PDFs</a></li>
    <li><a href="/acrobat/features/organize-pdf/" daa-ll="Organize PDFs-4" class="feds-navLink">Organize PDFs</a></li>
    <li><a href="/acrobat/features/share-and-review-pdfs/" daa-ll="Share Review PDFs-5" class="feds-navLink">Share &amp; Review PDFs</a></li>
    <li><a href="/acrobat/generative-ai-pdf/" daa-ll="AI Assistant-6" class="feds-navLink">AI Assistant</a></li>
  <li><a href="/acrobat/features/" class="feds-navLink feds-navLink--blue" daa-ll="View all-7">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Mobile-4" daa-lh="header|Open">
              Mobile
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/mobile/scanner-app/" daa-ll="Adobe Scan-1" class="feds-navLink">Adobe Scan</a></li>
    <li><a href="/acrobat/mobile/acrobat-reader/" daa-ll="Acrobat Reader-2" class="feds-navLink">Acrobat Reader</a></li>
  <li><a href="/acrobat/mobile/" class="feds-navLink feds-navLink--blue" daa-ll="View all-3">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/pricing/compare-versions/" class="feds-navLink" daa-ll="Compare plans-5">Compare plans</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Online tools-6" daa-lh="header|Open">
              Online tools
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-editor/" daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a></li>
    <li><a href="/acrobat/online/ai-chat-pdf/" daa-ll="Chat with PDF-2" class="feds-navLink">Chat with PDF</a></li>
    <li><a href="/acrobat/online/pdf-to-word/" daa-ll="PDF to Word-3" class="feds-navLink">PDF to Word</a></li>
    <li><a href="/acrobat/online/compress-pdf/" daa-ll="Compress PDF-4" class="feds-navLink">Compress PDF</a></li>
    <li><a href="/acrobat/online/merge-pdf/" daa-ll="Merge PDF-5" class="feds-navLink">Merge PDF</a></li>
    <li><a href="/acrobat/online/word-to-pdf/" daa-ll="Word to PDF-6" class="feds-navLink">Word to PDF</a></li>
  <li><a href="/acrobat/online/" class="feds-navLink feds-navLink--blue" daa-ll="View all tools-7">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all tools</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Learn Support-7" daa-lh="header|Open">
              Learn &amp; Support
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="https://helpx.adobe.com/acrobat/get-started.html" daa-ll="Get started-1" class="feds-navLink">Get started</a></li>
    <li><a href="https://helpx.adobe.com/acrobat/user-guide.html" daa-ll="User guide-2" class="feds-navLink">User guide</a></li>
    <li><a href="https://helpx.adobe.com/acrobat/user-guide.html" daa-ll="Tutorials-3" class="feds-navLink">Tutorials</a></li>
    <li><a href="/acrobat/resources/" daa-ll="Resources-4" class="feds-navLink">Resources</a></li>
    <li><a href="https://community.adobe.com/t5/acrobat/bd-p/acrobat?page=1&amp;sort=latest_replies&amp;filter=all" daa-ll="Community-5" class="feds-navLink">Community</a></li>
    <li><a href="https://helpx.adobe.com/support.dc.html" daa-ll="Adobe Help Center-6" class="feds-navLink">Adobe Help Center</a></li>
    <li><a href="/acrobat/contact/" daa-ll="Contact us-7" class="feds-navLink">Contact us</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/free-trial-download/" class="feds-navLink" daa-ll="Free trial-8">Free trial</a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/" aria-label="Buy now Adobe Acrobat" class="feds-cta feds-cta--primary" daa-ll="Buy now-9">Buy now</a>
    </div>
            </div></div>
        
      </div>
        
        
        
        
        
        <div class="feds-utilities" style="min-width: calc(124px + 0.25rem);"><div class="universal-nav-container"><div id="universal-nav" data-test-id="unav-main" class="universal-nav-light universal-nav-undefined  ">
  <div role="none" class="unav-comp-app-switcher-wrapper unav-comp-wrapper"><div class="unav-comp-app-switcher unav-comp-icon" data-test-id="unav-app-switcher" role="button" aria-label="App switcher" tabindex="0" aria-expanded="false" aria-haspopup="dialog" aria-controls="unav-app-switcher-dialog-id'" id="unav-app-switcher">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
    <path d="M4.75 2.25H3.25C2.69772 2.25 2.25 2.69772 2.25 3.25V4.75C2.25 5.30228 2.69772 5.75 3.25 5.75H4.75C5.30228 5.75 5.75 5.30228 5.75 4.75V3.25C5.75 2.69772 5.30228 2.25 4.75 2.25Z"></path>
    <path d="M10.75 2.25H9.25C8.69772 2.25 8.25 2.69772 8.25 3.25V4.75C8.25 5.30228 8.69772 5.75 9.25 5.75H10.75C11.3023 5.75 11.75 5.30228 11.75 4.75V3.25C11.75 2.69772 11.3023 2.25 10.75 2.25Z"></path>
    <path d="M16.75 2.25H15.25C14.6977 2.25 14.25 2.69772 14.25 3.25V4.75C14.25 5.30228 14.6977 5.75 15.25 5.75H16.75C17.3023 5.75 17.75 5.30228 17.75 4.75V3.25C17.75 2.69772 17.3023 2.25 16.75 2.25Z"></path>
    <path d="M4.75 8.25H3.25C2.69772 8.25 2.25 8.69772 2.25 9.25V10.75C2.25 11.3023 2.69772 11.75 3.25 11.75H4.75C5.30228 11.75 5.75 11.3023 5.75 10.75V9.25C5.75 8.69772 5.30228 8.25 4.75 8.25Z"></path>
    <path d="M10.75 8.25H9.25C8.69772 8.25 8.25 8.69772 8.25 9.25V10.75C8.25 11.3023 8.69772 11.75 9.25 11.75H10.75C11.3023 11.75 11.75 11.3023 11.75 10.75V9.25C11.75 8.69772 11.3023 8.25 10.75 8.25Z"></path>
    <path d="M16.75 8.25H15.25C14.6977 8.25 14.25 8.69772 14.25 9.25V10.75C14.25 11.3023 14.6977 11.75 15.25 11.75H16.75C17.3023 11.75 17.75 11.3023 17.75 10.75V9.25C17.75 8.69772 17.3023 8.25 16.75 8.25Z"></path>
    <path d="M4.75 14.25H3.25C2.69772 14.25 2.25 14.6977 2.25 15.25V16.75C2.25 17.3023 2.69772 17.75 3.25 17.75H4.75C5.30228 17.75 5.75 17.3023 5.75 16.75V15.25C5.75 14.6977 5.30228 14.25 4.75 14.25Z"></path>
    <path d="M10.75 14.25H9.25C8.69772 14.25 8.25 14.6977 8.25 15.25V16.75C8.25 17.3023 8.69772 17.75 9.25 17.75H10.75C11.3023 17.75 11.75 17.3023 11.75 16.75V15.25C11.75 14.6977 11.3023 14.25 10.75 14.25Z"></path>
    <path d="M16.75 14.25H15.25C14.6977 14.25 14.25 14.6977 14.25 15.25V16.75C14.25 17.3023 14.6977 17.75 15.25 17.75H16.75C17.3023 17.75 17.75 17.3023 17.75 16.75V15.25C17.75 14.6977 17.3023 14.25 16.75 14.25Z"></path>
  </svg>
    <div class="unav-comp-tooltip" data-test-id="unav-app-switcher--tooltip"><div class="unav-comp-tooltip-tip"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 5">
<path d="M6.20711 0.707106L10.5 5L0.5 5L4.79289 0.707107C5.18342 0.316583 5.81658 0.316582 6.20711 0.707106Z"></path>
</svg></div><div class="unav-comp-tooltip-text">App switcher</div></div></div><div class="unav-comp-app-switcher-popover" data-test-id="unav-app-switcher--popover" role="dialog" id="unav-app-switcher-dialog-id" aria-labelledby="unav-app-switcher">
        <div role="none" class="unav-comp-app-switcher-popover-content" style="width: 100%;"></div></div></div><div class="unav-comp-profile unav-comp-theme-spectrum-2" id="unav-profile" data-test-id="unav-profile"><div class="profile-signed-out"> <button class="profile-comp secondary-button" data-test-id="unav-profile--sign-in">Sign in</button></div></div></div>
  </div></div>
        
        
        
      </nav>
        <div class="feds-breadcrumbs-wrapper">
      <nav class="feds-breadcrumbs" aria-label="Breadcrumb"><ul>
                <li><a href="/">Home</a></li>
                <li><span aria-hidden="true">/</span><a href="/acrobat/">Adobe Acrobat</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Adobe Acrobat Pro</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Adobe Acrobat_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Adobe Acrobat_localNav|open">Adobe Acrobat</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem" role="listitem">
              <a href="/acrobat/" class="feds-navLink" daa-ll="Adobe Acrobat-2" data-title="Adobe Acrobat" tabindex="-1" aria-hidden="true">Overview</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Features-3" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Features
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/features/modify-pdfs/" daa-ll="Modify PDFs-1" class="feds-navLink">Modify PDFs</a></li>
    <li><a href="/acrobat/features/create-pdf/" daa-ll="Create PDFs-2" class="feds-navLink">Create PDFs</a></li>
    <li><a href="/acrobat/features/sign-fillable-pdf-forms/" daa-ll="Sign PDFs-3" class="feds-navLink">Sign PDFs</a></li>
    <li><a href="/acrobat/features/organize-pdf/" daa-ll="Organize PDFs-4" class="feds-navLink">Organize PDFs</a></li>
    <li><a href="/acrobat/features/share-and-review-pdfs/" daa-ll="Share Review PDFs-5" class="feds-navLink">Share &amp; Review PDFs</a></li>
    <li><a href="/acrobat/generative-ai-pdf/" daa-ll="AI Assistant-6" class="feds-navLink">AI Assistant</a></li>
  <li><a href="/acrobat/features/" class="feds-navLink feds-navLink--blue" daa-ll="View all-7">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Mobile-4" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Mobile
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/mobile/scanner-app/" daa-ll="Adobe Scan-1" class="feds-navLink">Adobe Scan</a></li>
    <li><a href="/acrobat/mobile/acrobat-reader/" daa-ll="Acrobat Reader-2" class="feds-navLink">Acrobat Reader</a></li>
  <li><a href="/acrobat/mobile/" class="feds-navLink feds-navLink--blue" daa-ll="View all-3">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/pricing/compare-versions/" class="feds-navLink" daa-ll="Compare plans-5" data-title="Compare plans" tabindex="-1" aria-hidden="true">Compare plans</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Online tools-6" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Online tools
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-editor/" daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a></li>
    <li><a href="/acrobat/online/ai-chat-pdf/" daa-ll="Chat with PDF-2" class="feds-navLink">Chat with PDF</a></li>
    <li><a href="/acrobat/online/pdf-to-word/" daa-ll="PDF to Word-3" class="feds-navLink">PDF to Word</a></li>
    <li><a href="/acrobat/online/compress-pdf/" daa-ll="Compress PDF-4" class="feds-navLink">Compress PDF</a></li>
    <li><a href="/acrobat/online/merge-pdf/" daa-ll="Merge PDF-5" class="feds-navLink">Merge PDF</a></li>
    <li><a href="/acrobat/online/word-to-pdf/" daa-ll="Word to PDF-6" class="feds-navLink">Word to PDF</a></li>
  <li><a href="/acrobat/online/" class="feds-navLink feds-navLink--blue" daa-ll="View all tools-7">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all tools</div>
      
    </div>
    </a></li></ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Learn Support-7" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Learn &amp; Support
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="https://helpx.adobe.com/acrobat/get-started.html" daa-ll="Get started-1" class="feds-navLink">Get started</a></li>
    <li><a href="https://helpx.adobe.com/acrobat/user-guide.html" daa-ll="User guide-2" class="feds-navLink">User guide</a></li>
    <li><a href="https://helpx.adobe.com/acrobat/user-guide.html" daa-ll="Tutorials-3" class="feds-navLink">Tutorials</a></li>
    <li><a href="/acrobat/resources/" daa-ll="Resources-4" class="feds-navLink">Resources</a></li>
    <li><a href="https://community.adobe.com/t5/acrobat/bd-p/acrobat?page=1&amp;sort=latest_replies&amp;filter=all" daa-ll="Community-5" class="feds-navLink">Community</a></li>
    <li><a href="https://helpx.adobe.com/support.dc.html" daa-ll="Adobe Help Center-6" class="feds-navLink">Adobe Help Center</a></li>
    <li><a href="/acrobat/contact/" daa-ll="Contact us-7" class="feds-navLink">Contact us</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/free-trial-download/" class="feds-navLink" daa-ll="Free trial-8" data-title="Free trial" tabindex="-1" aria-hidden="true">Free trial</a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/" aria-label="Buy now Adobe Acrobat" class="feds-cta feds-cta--primary" daa-ll="Buy now-9" data-title="Buy now" tabindex="-1" aria-hidden="true">Buy now</a>
    </div>
            </div></div><a href="/acrobat/acrobat-pro/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" data-has-placeholders="true" daa-lh="s1">
        <div class="hero-marquee media-cover-bottom s-min-height light media-hidden-mobile media-hidden-tablet bg-bottom-mobile bg-bottom-tablet con-block has-bg" data-block-status="loaded" style="background: rgb(248, 248, 248);" daa-lh="b1|hero-marquee|desktop|acrobat-pro-dev">
          <div class="background">
            <div class="mobile-only"><picture>
                <source type="image/webp" srcset="/acrobat/media_1d458dbbd4ff0215d0e2c5e5548617c1d2a389b90.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1d458dbbd4ff0215d0e2c5e5548617c1d2a389b90.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1d458dbbd4ff0215d0e2c5e5548617c1d2a389b90.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a loan agreement document on a red background, showcasing the Protect a PDF Acrobat feature icon overlay." src="/acrobat/media_1d458dbbd4ff0215d0e2c5e5548617c1d2a389b90.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="720" height="540">
              </picture></div>
            <div class="tablet-only"><picture>
                <source type="image/webp" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="eager" alt="Image of a loan agreement document on a red background, showcasing the Protect a PDF Acrobat feature icon overlay." src="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1600" height="600">
              </picture></div>
            <div class="desktop-only expand-background"></div>
          </div>
          
          <div class="foreground cols-2">
            <div class="copy"><div class="main-copy m-lockup l-button">
              <p class="body-m lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro.svg" alt=""></picture><span class="lockup-label"> Adobe Acrobat</span></p>
              <h1 id="do-even-more-with-your-pdfs" class="heading-xl">Do even more with your PDFs.</h1>
              <p class="body-m">With <strong>Acrobat Pro and AI Assistant</strong>, you get 70+ features that help you create, collaborate, and work smarter in your PDFs.</p>
              <p class="body-m"><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ,bKwlW94xSVU_ykn4WHDjS1eiZrXopDo8VD7UhGAKYBI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">24</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">98</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>  for the annual, billed monthly plan. Monthly plans also available.</p>
            </div><div class="row-supplemental con-block norm body-s">
            
            <div class="row-wrapper"><em>Fee applies of half your remaining annual commitment if you cancel 14 days after your free trial ends.</em> <span class="icon icon-info milo-tooltip top margin-inline-start" data-tooltip="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." tabindex="0" aria-label="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." role="button" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
          </div><div class="row-text con-block norm">
            
            <div class="row-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="email" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ,bKwlW94xSVU_ykn4WHDjS1eiZrXopDo8VD7UhGAKYBI" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Start free trial Acrobat Pro and AI Assistant" href="https://commerce.adobe.com/store/email?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;items%5B1%5D%5Bid%5D=400D8CAE36D691335F1F758CBB553C62&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Start free trial-1--Do even more with yo"><span style="pointer-events: none;">Start free trial</span></a> <a href="/acrobat/pricing/" aria-label="See plans and pricing Acrobat" class="con-button outline button-l" daa-ll="See plans and pricin-2--Do even more with yo">See plans and pricing</a></p></div>
          </div></div>
            <div class="asset">
              
            </div>
          </div>
          
          
        <div class="foreground-media"><picture style="--media-cover-position: bottom;">
                <source type="image/webp" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="eager" alt="Image of a loan agreement document on a red background, showcasing the Protect a PDF Acrobat feature icon overlay." src="/acrobat/media_1209759aa411b7343837e6d4bfc1ce84fdf430a6d.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1600" height="600">
              </picture></div></div>
      </div>
      <div class="section" daa-lh="s2">
        <div class="mobile-app-banner product-adobeacrobatreader" data-block-status="loaded" daa-lh="b1|mobile-app-bann|desktop|acrobat-pro-dev">
          <div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s3">
        <div><div class="fragment" data-path="/dc-shared/fragments/promo-banners/acrobat-pro"><div class="section show-sticky-section"></div></div></div>
      </div>
      <div class="section" daa-lh="s4">
        <div class="text center l-spacing text-block con-block" data-block-status="loaded" daa-lh="b1|text|desktop|acrobat-pro-dev">
          <div class="foreground">
            <div>
              <h2 id="save-valuable-time-with-advanced-tools" class="heading-l">Save valuable time with advanced tools.</h2>
              <p class="body-m">Discover how to get next-level productivity using powerful features in Acrobat Pro.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section three-up m-spacing-bottom" daa-lh="s5">
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b1|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1127906ec4b258ff7451bc94aae043e2284317d16.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1127906ec4b258ff7451bc94aae043e2284317d16.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1127906ec4b258ff7451bc94aae043e2284317d16.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a Pitch Deck document highlighting a typo in the title, and showcasing the 'Edit a PDF' Acrobat feature icon overlay." src="/acrobat/media_1127906ec4b258ff7451bc94aae043e2284317d16.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="505">
              </picture>
            </div>
            <div class="text">
              <h3 id="perfect-your-pdfs" class="heading-s">Perfect your PDFs.</h3>
              <p class="body-m">Take full creative control of your PDF. Fix typos, change fonts, swap and crop images, and more.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b2|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_18e94322fefec7877819930b67b7eacdcf8f68701.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_18e94322fefec7877819930b67b7eacdcf8f68701.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_18e94322fefec7877819930b67b7eacdcf8f68701.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a document highlighting a search bar which showcases the 'Optical Character Recognition' Acrobat feature." src="/acrobat/media_18e94322fefec7877819930b67b7eacdcf8f68701.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="505">
              </picture>
            </div>
            <div class="text">
              <h3 id="find-text-in-your-scans-fast" class="heading-s">Find text in your scans. Fast.</h3>
              <p class="body-m">With Optical Character Recognition, it’s easy to turn scans into fully searchable and editable PDFs.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b3|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_128e44dca7315e923d2766bb0502d5719f6910413.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_128e44dca7315e923d2766bb0502d5719f6910413.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_128e44dca7315e923d2766bb0502d5719f6910413.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a invoice document featuring a signature and highlighting the 'Sign' Acrobat feature icon overlay." src="/acrobat/media_128e44dca7315e923d2766bb0502d5719f6910413.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="505">
              </picture>
            </div>
            <div class="text">
              <h3 id="speed-up-your-e-signature-workflows" class="heading-s">Speed up your e-signature workflows.</h3>
              <p class="body-m">Request e-signatures, track status, and even set reminders to keep work flowing.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b4|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_104b803ba5675d924216da821d8510be8bace91b0.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_104b803ba5675d924216da821d8510be8bace91b0.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_104b803ba5675d924216da821d8510be8bace91b0.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a deck presentation featuring a timeline highlighting the 'Export a PDF' Acrobat feature icon overlay." src="/acrobat/media_104b803ba5675d924216da821d8510be8bace91b0.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="506">
              </picture>
            </div>
            <div class="text">
              <h3 id="turn-files-into-neat-pdfs" class="heading-s">Turn files into neat PDFs.</h3>
              <p class="body-m">Convert your PDFs into Microsoft file formats like Word, PowerPoint, and Excel — or vice versa.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b5|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_19a73fb0d218c0a86333d9251b5d0084ca0274530.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_19a73fb0d218c0a86333d9251b5d0084ca0274530.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_19a73fb0d218c0a86333d9251b5d0084ca0274530.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of a power of attorney document with a 'Redact text and images' Acrobat feature icon overlay." src="/acrobat/media_19a73fb0d218c0a86333d9251b5d0084ca0274530.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="506">
              </picture>
            </div>
            <div class="text">
              <h3 id="show-what-you-need-to-nothing-more" class="heading-s">Show what you need to. Nothing more.</h3>
              <p class="body-m">Permanently redact sensitive data from a PDF to keep yourself and your customers safe.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b6|media|desktop|acrobat-pro-dev">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_11a1ef3240afc3ea5d5044a676e7db77ca2538f96.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_11a1ef3240afc3ea5d5044a676e7db77ca2538f96.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_11a1ef3240afc3ea5d5044a676e7db77ca2538f96.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Image of an application document highlighting the 'Protect a PDF' Acrobat feature icon overlay." src="/acrobat/media_11a1ef3240afc3ea5d5044a676e7db77ca2538f96.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="506">
              </picture>
            </div>
            <div class="text">
              <h3 id="keep-your-docs-on-lock" class="heading-s">Keep your docs on lock.</h3>
              <p class="body-m">Add passwords and permissions to PDFs so only the people you want to view your file can see it.</p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Three up, m-spacing-bottom</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s6">
        <div><div class="fragment" data-path="/dc-shared/fragments/acrobat/acrobat-pro-standard/discover-mode-blade"><div class="section">
  <div class="media small con-block has-bg media-reverse-mobile" style="background: rgb(251, 251, 251);" data-block-status="loaded" daa-lh="b1|media|desktop|acrobat-pro-dev">
    
    
  <div class="container foreground"><div class="media-row">
      <div class="text">
        <h2 id="learn-how-to-edit-a-pdf" class="heading-xs"><strong>Learn how to edit a PDF.</strong></h2>
        <p class="body-s">Easily edit, organize, and modify a PDF in this hands-on demo. No subscription required.</p>
        <div class="cta-container"><p class="body-s action-area"><a href="/go/EditOrganizeDiscover/?mv=other&amp;promoid=DMMD13TB" class="con-button outline" daa-ll="Launch demo-1--Learn how to edit a ">Launch demo</a></p></div>
      </div>
      <div class="image">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="acrobat/media_19917edb027694e0b91e3b06a6171b293d2e768d7.mp4"><source src="/acrobat/media_19917edb027694e0b91e3b06a6171b293d2e768d7.mp4" type="video/mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion" aria-label="Pause motion" role="button" tabindex="0" aria-pressed="true" video-index="1" daa-ll="Pause motion-2--Learn how to edit a ">
        <div class="offset-filler is-playing">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
    </div></div></div>
</div></div></div>
      </div>
      <div class="section" daa-lh="s7">
        <div><div class="fragment" data-path="/dc-shared/fragments/merch-cards/compare-acrobat-plans"><div class="section">
  <div class="text full-width large xl-spacing-top s-spacing-bottom text-block con-block max-width-8-desktop center xxl-spacing" data-block-status="loaded" daa-lh="b1|text|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="body-m">
        <p class="detail-l">PLANS AND PRICING</p>
        <h2 id="compare-acrobat-plans" class="heading-xl">Compare Acrobat plans.</h2>
      </div>
    </div>
  </div>
</div><div class="section tablist-compare-plans-section">
  <div class="tabs xl-spacing-bottom s-spacing-top center quiet no-border" id="tabs-compare-plans" data-block-status="loaded" daa-lh="b2|tabs|desktop|acrobat-pro-dev"><button class="paddle paddle-left" aria-label="Scroll tabs to left" disabled="" aria-hidden="true" daa-ll="Scroll tabs to left-1--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
    <div class="tabList" role="tablist">
      <div class="tab-list-container" data-pretext="undefined">
        
      <button role="tab" class="heading-xs" id="tab-compare-plans-1" tabindex="0" aria-selected="true" data-block-id="tabs-compare-plans" daa-state="true" daa-ll="tab-compare-plans-1" aria-controls="tab-panel-compare-plans-1" data-deeplink="undefined">Individuals</button><button role="tab" class="heading-xs" id="tab-compare-plans-2" tabindex="-1" aria-selected="false" data-block-id="tabs-compare-plans" daa-state="true" daa-ll="tab-compare-plans-2" aria-controls="tab-panel-compare-plans-2" data-deeplink="undefined">Business</button><button role="tab" class="heading-xs" id="tab-compare-plans-3" tabindex="-1" aria-selected="false" data-block-id="tabs-compare-plans" daa-state="true" daa-ll="tab-compare-plans-3" aria-controls="tab-panel-compare-plans-3" data-deeplink="undefined">Students &amp; Teachers</button></div>
    </div><button class="paddle paddle-right" aria-label="Scroll tabs to right" disabled="" aria-hidden="true" daa-ll="Scroll tabs to right-5--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
    
    
  <div class="tab-content"><div class="tab-content-container"><div id="tab-panel-compare-plans-1" role="tabpanel" class="tabpanel badge-merch-cards" aria-labelledby="tab-compare-plans-1" data-block-id="tabs-compare-plans" data-nested-lh="t1Ind"><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/merch-cards/acrobat-individuals"><div class="section three-merch-cards l-spacing mini-compare-chart" data-has-placeholders="true" style="background: linear-gradient(rgb(255, 255, 255) 31.85%, rgb(250, 199, 195) 55.77%, rgb(245, 136, 128) 76.15%, rgb(235, 16, 0) 100%); --consonant-merch-card-mini-compare-chart-heading-m-height: 30px; --consonant-merch-card-mini-compare-chart-body-m-height: 86px; --consonant-merch-card-mini-compare-chart-heading-m-price-height: 30px; --consonant-merch-card-mini-compare-chart-footer-height: 80px; --consonant-merch-card-mini-compare-chart-top-section-mobile-height: 32px; --consonant-merch-card-footer-row-1-min-height: 32px; --consonant-merch-card-footer-row-2-min-height: 32px; --consonant-merch-card-footer-row-3-min-height: 48px; --consonant-merch-card-footer-row-4-min-height: 32px; --consonant-merch-card-footer-row-5-min-height: 32px; --consonant-merch-card-footer-row-6-min-height: 48px; --consonant-merch-card-footer-row-7-min-height: 32px; --consonant-merch-card-footer-row-8-min-height: 32px; --consonant-merch-card-mini-compare-chart-body-xxs-height: 34px; --consonant-merch-card-mini-compare-chart-top-section-height: 32px;">
  <merch-card class="merch-card mini-compare-chart" variant="mini-compare-chart" size="" filters="all" types="" daa-lh="b3|t1Ind--merch-card|desktop|acrobat-pro-dev"><h3 id="acrobat-reader" class="card-heading" slot="heading-m">Acrobat Reader</h3><div slot="body-m"><p>The trusted standard for viewing and sharing PDFs</p></div><p id="free" class="card-heading" slot="heading-m-price">Free</p><div slot="footer"><p class="action-area"><a href="https://get.adobe.com/reader/download?trackingid=R9BVLF8K&amp;accepted=cr" aria-label="Download now Acrobat Reader" class="con-button outline button-l" daa-ll="Download now-1--Acrobat Reader">Download now</a></p></div><div slot="footer-rows"><ul><li class="footer-row-cell"><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Available on desktop and mobile</div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li></ul></div></merch-card>
  <merch-card class="merch-card mini-compare-chart individual" variant="mini-compare-chart" size="" filters="all" types="" daa-lh="b4|t1Ind--merch-card|desktop|acrobat-pro-dev"><h3 id="acrobat-pro" class="card-heading" slot="heading-m">Acrobat Pro</h3><div slot="body-m"><p>The secure solution for PDF &amp; e-signature workflows</p></div><p id="annual-paid-monthly" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><p id="price---abm---adobe-acrobat-pro-small-tax-incl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="price" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> </p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=apcc_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-pro-card" daa-ll="Free trial-1--Acrobat Pro"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Buy Now Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=apcc_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat-pro" daa-ll="Buy now-2--Acrobat Pro"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="footer-rows"><ul><li class="footer-row-cell"><div class="footer-row-cell-description">Edit, export, protect and organize PDFs</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Collect e-signatures and track responses</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Create web forms, redact, compare, and access 70+ features</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Available on desktop, web, and mobile</div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li></ul></div></merch-card>
  <merch-card class="merch-card mini-compare-chart individual badge-card" variant="mini-compare-chart" size="" badge-background-color="#EDCC2D" badge-color="#000000" badge-text="Best value" filters="all" types="" style="--consonant-merch-card-border-color: #EDCC2D;" daa-lh="b5|t1Ind--merch-card|desktop|acrobat-pro-dev"><h3 id="acrobat-studio" class="card-heading" slot="heading-m">Acrobat Studio</h3><div slot="body-m"><p>The all-in-one AI-powered PDF and design solution for business workflows</p></div><p id="annual-paid-monthly-1" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><p id="price---abm---adobe-acrobat-studio-small-tax-incl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="V3W0kzf4e6M2Ht1hP9ZAt3dQNmhuDFrmYmEPlE2SlG0" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">24</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> </p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="x0LkInr7lGkqK8dcTFS_Pc6oHauo_g7N_4yWT_gLn20" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free Trial Acrobat Studio" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=PA-1806&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-studio-card" daa-ll="Free trial-1--Acrobat Studio"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="V3W0kzf4e6M2Ht1hP9ZAt3dQNmhuDFrmYmEPlE2SlG0" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Buy Now Acrobat Studio" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=PA-1806&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat-studio" daa-ll="Buy now-2--Acrobat Studio"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="footer-rows"><ul><li class="footer-row-cell"><div class="footer-row-cell-description">Edit, export, protect and organize PDFs</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Collect e-signatures and track responses</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Ask AI to edit, convert or compress PDFs</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Get summaries, insights, and answers with AI</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Organize, share, and collaborate in PDF Spaces</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Transform documents into presentations and podcast overviews</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Generate presentations, flyers, and social content</div></li><li class="footer-row-cell"><div class="footer-row-cell-description">Available on desktop, web, and mobile</div></li></ul></div></merch-card>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>background</div>
      <div>linear-gradient(180deg, #FFFFFF 31.85%, #FAC7C3 55.77%, #F58880 76.15%, #EB1000 100%)</div>
    </div>
    <div>
      <div>style</div>
      <div>Three merch cards, l-spacing</div>
    </div>
  </div>
</div><div class="section">
  <div class="text center dark large-button xxl-spacing-bottom xs-spacing-top l-button text-block con-block has-bg" data-block-status="loaded" style="background: rgb(235, 16, 0);" daa-lh="b6|t1Ind--text|desktop|acrobat-pro-dev">
    
    <div class="foreground">
      <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/pricing/compare-versions/" aria-label="See all plans Adobe Acrobat" class="con-button outline fill" daa-ll="See all plans-11--Acrobat Studio">See all plans</a></div></div>
    </div>
  </div>
</div></div></div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>tab</div>
      <div>compare-plans, 1</div>
    </div>
  </div>
</div></div><div id="tab-panel-compare-plans-2" role="tabpanel" class="tabpanel badge-merch-cards" aria-labelledby="tab-compare-plans-2" data-block-id="tabs-compare-plans" hidden="true" data-nested-lh="t2Bus"><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/merch-cards/acrobat-business-contact"><div class="section" data-has-placeholders="true">
  <div class="text max-width-8-desktop center xxs-spacing-bottom l-spacing-top m-button text-block con-block" data-block-status="loaded" daa-lh="b7|t2Bus--text|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div>
        <p class="body-m">Need help choosing the right plan for your business?</p>
        <div class="cta-container"><p class="body-m action-area"><a href="/acrobat/contact/" class="con-button outline" daa-ll="Contact Sales-12--Acrobat Studio">Contact Sales</a> <a href="tel:phone business geo" daa-ll="800 915 9430-13--Acrobat Studio">800-915-9430</a></p></div>
      </div>
    </div>
  </div>
</div><div class="section two-merch-cards m-spacing mini-compare-chart" data-has-placeholders="true" style="background: linear-gradient(rgb(255, 255, 255) 31.85%, rgb(250, 199, 195) 55.77%, rgb(245, 136, 128) 76.15%, rgb(235, 16, 0) 100%);">
  <merch-card class="merch-card mini-compare-chart team" variant="mini-compare-chart" size="" filters="all" types="" daa-lh="b8|t2Bus--merch-card|desktop|acrobat-pro-dev"><h3 id="acrobat-pro-for-teams" class="card-heading" slot="heading-m">Acrobat Pro for teams</h3><div slot="body-m"><p>The highly secure PDF and e-signature solution with advanced tools, plus admin features.</p></div><p id="annual-paid-monthly-up-to-10-licenses-with-free-trial" class="card-heading" slot="body-xxs">Annual, billed monthly. Up to 10 licenses with free trial.</p><p id="price---abm---acrobat-pro-per-license-small-tax-excl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-promotion-code="TDAPCC_3LIC_7PT5" data-quantity="3" data-template="price" data-wcs-osi="vV01ci-KLH6hYdRfUKMBFx009hdpxZcIRG1-BY_PutE" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">23</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span>&nbsp;<span class="price price-alternative"><sr-only class="alt-aria-label">Alternatively at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">22</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">19</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> per license </p><p id="save-75-your-first-year-with-3-or-more-licensessee-terms-see-terms-acrobat-pro-for-teams" class="card-heading" slot="promo-text">Save 7.5% your first year with 3 or more licenses.<br><a href="/acrobat/acrobat-pro/" aria-label="See terms Acrobat Pro for teams" data-modal-path="/dc-shared/fragments/acrobat/business/pro-volume-discount-terms" data-modal-hash="#pro-volume-discount-terms" class="modal link-block " data-block-status="loaded" daa-ll="See terms-1--Acrobat Pro for team">See terms</a></p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="3" data-wcs-osi="8Lr09qx_PHqAJUwvUNiof4FFFEKjsR1TTbvBUncV2b0" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Pro for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=t&amp;pa=apcc_direct_indirect_team&amp;q=3&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Free trial-2--Acrobat Pro for team" data-modal-id="mini-plans-web-cta-acrobat-pro-teams-card"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="3" data-wcs-osi="vV01ci-KLH6hYdRfUKMBFx009hdpxZcIRG1-BY_PutE" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Pro for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=t&amp;pa=apcc_direct_indirect_team&amp;q=3&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Buy now-3--Acrobat Pro for team" data-modal-id="miniplans-buy-acrobat-pro-teams"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="offers"><merch-quantity-select title="Number of licenses" min="1" max="10" step="1" default-value="3" max-input="180" closed=""></merch-quantity-select></div><div slot="footer-rows"><ul><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-device-desktop-mobile-gray.svg" alt=""></picture><div class="footer-row-cell-description">Available on desktop, web, and mobile</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-share.svg" alt=""></picture><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-edit.svg" alt=""></picture><div class="footer-row-cell-description">Edit text and images, plus export, protect, and organize documents</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-sign.svg" alt=""></picture><div class="footer-row-cell-description">Collect binding e-signatures and track responses</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-admin.svg" alt=""></picture><div class="footer-row-cell-description">Manage licenses and users with the Adobe Admin Console</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-create.svg" alt=""></picture><div class="footer-row-cell-description">Create web forms, redact, compare, and access 70+ features</div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li><li class="footer-row-cell"><div class="footer-row-cell-description"></div></li></ul></div></merch-card>
  <merch-card class="merch-card mini-compare-chart individual badge-card" variant="mini-compare-chart" size="" badge-background-color="#EDCC2D" badge-color="#000000" badge-text="Best value" filters="all" types="" style="--consonant-merch-card-border-color: #EDCC2D;" daa-lh="b9|t2Bus--merch-card|desktop|acrobat-pro-dev"><h3 id="acrobat-studio-for-teams" class="card-heading" slot="heading-m">Acrobat Studio for teams</h3><div slot="body-m"><p>Everything in Acrobat Pro plus PDF Spaces, Acrobat AI Assistant, Adobe Express Premium, and admin features.</p></div><p id="annual-paid-monthly-up-to-10-licenses-with-free-trial-1" class="card-heading" slot="body-xxs"><em>Annual, billed monthly. Up to 10 licenses with free trial.</em></p><p id="price---abm---acrobat-studio-for-teams-per-license-small-tax-excl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-display-per-unit="false" data-promotion-code="TDARCH_3LIC_7PT5" data-quantity="3" data-template="price" data-wcs-osi="SfkorgyrBAsqBVpyKddQQEn6jR0ItBohpXc74sZcKHg" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">29</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span>&nbsp;<span class="price price-alternative"><sr-only class="alt-aria-label">Alternatively at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">27</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">74</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> per license </p><p id="save-75-your-first-year-with-3-or-more-licensessee-terms-see-terms-acrobat-studio-for-teams" class="card-heading" slot="promo-text">Save 7.5% your first year with 3 or more licenses.<br><a href="/acrobat/acrobat-pro/" aria-label="See terms Acrobat Studio for teams" data-modal-path="/dc-shared/fragments/acrobat/business/studio-volume-discount-terms" data-modal-hash="#studio-volume-discount-terms" class="modal link-block " data-block-status="loaded" daa-ll="See terms-1--Acrobat Studio for t">See terms</a></p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="3" data-wcs-osi="PVhDPYXq4fsy15OdlEE-XyIlvcxaPMxGs73pw39Cx-s" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Studio for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=t&amp;pa=PA-1807&amp;q=3&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Free trial-2--Acrobat Studio for t" data-modal-id="mini-plans-web-cta-acrobat-pro-card"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="3" data-wcs-osi="SfkorgyrBAsqBVpyKddQQEn6jR0ItBohpXc74sZcKHg" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Studio for Teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=t&amp;pa=PA-1807&amp;q=3&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Buy now-3--Acrobat Studio for t" data-modal-id="miniplans-buy-acrobat"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="offers"><merch-quantity-select title="Number of licenses" min="1" max="10" step="1" default-value="3" max-input="180" closed=""></merch-quantity-select></div><div slot="footer-rows"><ul><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-device-desktop-mobile-gray.svg" alt=""></picture><div class="footer-row-cell-description">Available on desktop, web, and mobile</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-share.svg" alt=""></picture><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-edit.svg" alt=""></picture><div class="footer-row-cell-description">Edit text and images, plus export, protect, and organize documents</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-sign.svg" alt=""></picture><div class="footer-row-cell-description">Collect binding e-signatures and track responses</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-admin.svg" alt=""></picture><div class="footer-row-cell-description">Manage licenses and users with the Adobe Admin Console</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-create.svg" alt=""></picture><div class="footer-row-cell-description">Create web forms, redact, compare, and access 70+ features</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-sharefile.svg" alt=""></picture><div class="footer-row-cell-description">Summarize documents, get insights, and ask questions with PDF Spaces and a prebuilt AI Assistant</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/product-icons/svg/express-40.svg" alt=""></picture><div class="footer-row-cell-description">Generate presentations and create flyers, social posts, and more with professional templates in <a href="/acrobat/acrobat-pro/" data-modal-path="/dc-shared/fragments/modals/express-premium/pop-up-modal" data-modal-hash="#express-premium" class="modal link-block " data-block-status="loaded" daa-ll="Adobe Express-4--Acrobat Studio for t">Adobe Express</a></div></li></ul></div></merch-card>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>background</div>
      <div>linear-gradient(180deg, #FFFFFF 31.85%, #FAC7C3 55.77%, #F58880 76.15%, #EB1000 100%)</div>
    </div>
    <div>
      <div>style</div>
      <div>two merch cards, m-spacing</div>
    </div>
  </div>
</div><div class="section">
  <div class="text center dark xxl-spacing-bottom xs-spacing-top l-button text-block con-block has-bg" data-block-status="loaded" style="background: rgb(235, 16, 0);" daa-lh="b10|t2Bus--text|desktop|acrobat-pro-dev">
    
    <div class="foreground">
      <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/pricing/business/" aria-label="See all plans Adobe Acrobat for business" class="con-button outline fill" daa-ll="See all plans-21--Acrobat Studio for t">See all plans</a></div></div>
    </div>
  </div>
</div></div></div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>tab</div>
      <div>compare-plans, 2</div>
    </div>
  </div>
</div></div><div id="tab-panel-compare-plans-3" role="tabpanel" class="tabpanel badge-merch-cards" aria-labelledby="tab-compare-plans-3" data-block-id="tabs-compare-plans" hidden="true" data-nested-lh="t3Stu"><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/merch-cards/acrobat-students-and-teachers"><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/generative-ai-pdf/acrobat-ai-assistant-checkbox"><div class="section" data-has-placeholders="true">
  <template class="merch-offers addon genai individual"><merch-addon>
        <p><strong>Acrobat AI Assistant</strong></p>
        <p>Add AI Assistant to your Acrobat plan for <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="nIy-IPGnALw3KNncaqMjOJsMUrqElWi8sdGnBFBAgTw" class="placeholder-pending"></span><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="bKwlW94xSVU_ykn4WHDjS1eiZrXopDo8VD7UhGAKYBI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">4</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>.</p>
      </merch-addon></template>
  <template class="merch-offers addon genai team"><merch-addon>
        <p><strong>Acrobat AI Assistant</strong></p>
        <p>Add AI Assistant to your Acrobat plan for <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="WRe4gUHuyqJgCCr3ZywwU9CDP0ezBaCKoMk4xryVQhs" class="placeholder-pending"></span><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="iI9UsOtLtXlD4-zeZd2XDuTCjFI2GV4PwyAgL8MH7Uk" class="placeholder-pending"></span> per license.</p>
      </merch-addon></template>
  <template class="merch-offers addon genai edu"><merch-addon>
        <p><strong>Acrobat AI Assistant</strong></p>
        <p>Add AI Assistant to your Acrobat plan for <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="JpGjrD0B6mxXXR8Vo4YXGH91X0vzLuXmHxHT1j1hlks" class="placeholder-pending"></span><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="TJq6JgEi39aFt1xrmHQPBB6dn7PE1gmA0vWYEeLfTUU" class="placeholder-pending"></span>.</p>
      </merch-addon></template>
</div></div></div>
</div><div class="section two-merch-cards grid-width-10 l-spacing mini-compare-chart" data-has-placeholders="true" style="background: linear-gradient(rgb(255, 255, 255) 31.85%, rgb(250, 199, 195) 55.77%, rgb(245, 136, 128) 76.15%, rgb(235, 16, 0) 100%);">
  <merch-card class="merch-card mini-compare-chart add-addon-genai edu" variant="mini-compare-chart" size="" filters="all" types="" daa-lh="b11|t3Stu--merch-card|desktop|acrobat-pro-dev"><merch-addon slot="addon" plan-type="ABM" style="background: linear-gradient(211deg, rgb(245, 246, 253) 33.52%, rgb(248, 241, 248) 67.33%, rgb(249, 233, 237) 110.37%); border-radius: 10px;">
        <p><strong>Acrobat AI Assistant</strong></p>
        <p data-plan-type="ABM">Add AI Assistant to your Acrobat plan for <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="JpGjrD0B6mxXXR8Vo4YXGH91X0vzLuXmHxHT1j1hlks" class="placeholder-resolved" data-offer-type="PROMOTION"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">1</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="TJq6JgEi39aFt1xrmHQPBB6dn7PE1gmA0vWYEeLfTUU" class="placeholder-resolved" data-offer-type="TRIAL"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">1</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>.</p>
      <merch-gradient colors="#F5F6FD, #F8F1F8, #F9E9ED" positions="33.52%, 67.33%, 110.37%" angle="211deg" border-radius="10px"></merch-gradient></merch-addon><div slot="body-m"><p>The highly secure PDF and e-signature solution with advanced tools.</p></div><h3 id="acrobat-pro-for-students-and-teachers" class="card-heading" slot="heading-m">Acrobat Pro for students and teachers</h3><p id="annual-paid-monthly" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><p id="price---abm---adobe-acrobat-pro-small-tax-incl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="price" data-wcs-osi="ZZQMV2cU-SWQoDxuznonUFMRdxSyTr4J3fB77YBNakY" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> </p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="WJLr3TF4T4qyJIGZTsDf9KPbTfxA7qAgStpaF2IgYao" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=acrobat_pro_dc_for_ste_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Free trial-1--Acrobat Pro for stud" data-modal-id="mini-plans-web-cta-acrobat-pro-edu-card"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="ZZQMV2cU-SWQoDxuznonUFMRdxSyTr4J3fB77YBNakY" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=acrobat_pro_dc_for_ste_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Buy now-2--Acrobat Pro for stud" data-modal-id="miniplans-buy-acrobat-pro-edu"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="footer-rows"><ul><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/icon-device-desktop-mobile-gray.svg" alt=""></picture><div class="footer-row-cell-description">Available on desktop, web, and mobile</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-share.svg" alt=""></picture><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-edit.svg" alt=""></picture><div class="footer-row-cell-description">Edit text and images, plus export, protect, and organize documents</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-sign.svg" alt=""></picture><div class="footer-row-cell-description">Collect binding e-signatures and track responses</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-create.svg" alt=""></picture><div class="footer-row-cell-description">Create web forms, redact, compare, and access 70+ features</div></li></ul></div></merch-card>
  <merch-card class="merch-card mini-compare-chart static-links add-addon-genai edu creative-cloud-pro-ste-promo badge-card" variant="mini-compare-chart" size="" badge-background-color="#EDCC2D" badge-color="#000000" badge-text="Save 71%" border-color="#D1D1D1" filters="all" types="" style="--consonant-merch-card-border-color: #D1D1D1;" daa-lh="b12|t3Stu--merch-card|desktop|acrobat-pro-dev"><merch-addon slot="addon" plan-type="ABM" style="background: linear-gradient(211deg, rgb(245, 246, 253) 33.52%, rgb(248, 241, 248) 67.33%, rgb(249, 233, 237) 110.37%); border-radius: 10px;">
        <p><strong>Acrobat AI Assistant</strong></p>
        <p data-plan-type="ABM">Add AI Assistant to your Acrobat plan for <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="JpGjrD0B6mxXXR8Vo4YXGH91X0vzLuXmHxHT1j1hlks" class="placeholder-resolved" data-offer-type="PROMOTION"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">1</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="TJq6JgEi39aFt1xrmHQPBB6dn7PE1gmA0vWYEeLfTUU" class="placeholder-resolved" data-offer-type="TRIAL"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">1</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>.</p>
      <merch-gradient colors="#F5F6FD, #F8F1F8, #F9E9ED" positions="33.52%, 67.33%, 110.37%" angle="211deg" border-radius="10px"></merch-gradient></merch-addon><div slot="body-m"><p>Save 71% on 20+ apps including Acrobat Pro, plus Firefly creative AI for images, video, and audio. Pay <span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> the first year and <span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="DFaWY47EmtzYVOApli4DjncThGsfaeCSDZRoHkC8pGY" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">39</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> after that.<br><a href="/offer-terms/ccm_ste_introductory/" aria-label="See terms Creative Cloud All Apps" daa-ll="See terms-1--Creative Cloud Pro f">See terms</a> | <a href="/acrobat/acrobat-pro/" aria-label="See what's included Creative Cloud Pro" data-modal-path="/dc-shared/fragments/modals/cc-all-apps-whats-included/whats-included" data-modal-hash="#see-whats-included" class="modal link-block " data-block-status="loaded" daa-ll="See what s included-2--Creative Cloud Pro f">See what's included</a></p></div><h3 id="creative-cloud-pro-ste" class="card-heading" slot="heading-m">Creative Cloud Pro for students and teachers</h3><p id="annual-paid-monthly-1" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><p id="price---abm---creative-cloud-all-apps-100gb-price---abm---creative-cloud-all-apps-100gb-small-tax-incl-label" class="card-heading" slot="heading-m-price"><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price price-alternative"><sr-only class="alt-aria-label">Alternatively at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> <span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="strikethrough" data-wcs-osi="r_JXAnlFI7xD6FxWKl2ODvZriLYBoSL701Kd1hRyhe8" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">69</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> </p><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Creative Cloud Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Free trial-3--Creative Cloud Pro f" data-modal-id="mini-plans-web-cta-creative-cloud-card"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Creative Cloud Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Buy now-4--Creative Cloud Pro f" data-modal-id="miniplans-buy-all-apps"><span style="pointer-events: none;">Buy now</span></a></p></div><div slot="footer-rows"><ul><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/features/icon-creative-cloud.svg" alt=""></picture><div class="footer-row-cell-description">20+ creative apps, plus everything in Acrobat Pro, including:</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-share.svg" alt=""></picture><div class="footer-row-cell-description">View, print, share, and comment</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-edit.svg" alt=""></picture><div class="footer-row-cell-description">Edit text and images, plus export, protect, and organize documents</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-sign.svg" alt=""></picture><div class="footer-row-cell-description">Collect binding e-signatures and track responses</div></li><li class="footer-row-cell"><picture class="footer-row-icon"><img src="/dc-shared/assets/images/shared-images/tools/4-icon-create.svg" alt=""></picture><div class="footer-row-cell-description">Create web forms, redact, compare, and access 70+ features</div></li></ul></div></merch-card>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>background</div>
      <div>linear-gradient(180deg, #FFFFFF 31.85%, #FAC7C3 55.77%, #F58880 76.15%, #EB1000 100%)</div>
    </div>
    <div>
      <div>style</div>
      <div>Two merch cards, grid width 10, l-spacing</div>
    </div>
  </div>
</div><div class="section" data-has-placeholders="true" style="background: rgb(235, 16, 0);">
  <div class="notification pill dark flexible no-closure no-shadow max-width-10-desktop space-between con-block" data-notification-id="notification-1779409375824-ak2j6au55" data-block-status="loaded" style="" daa-lh="b13|t3Stu--notification|desktop|acrobat-pro-dev">
    
    
  <div class="flexible-inner" style="background: rgb(0, 0, 0);"><div class="foreground container">
      <div class="text">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro-40.svg" alt=""></picture></p><div class="copy-wrap"><p class="body-m"><strong class="tracking-header">Add AI Assistant to your Acrobat Pro or Creative Cloud Pro student plan. <span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="JpGjrD0B6mxXXR8Vo4YXGH91X0vzLuXmHxHT1j1hlks" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">1</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>  for the annual, billed monthly plan.</strong></p></div>
        
        <p class="body-m action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="JpGjrD0B6mxXXR8Vo4YXGH91X0vzLuXmHxHT1j1hlks" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Buy now AI Assistant for Acrobat for Education" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=DEEBE95E910424483B654EC08F49F77B&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Buy now-28--Creative Cloud Pro f"><span style="pointer-events: none;">Buy now</span></a></p>
      </div>
    </div></div></div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>Background</div>
      <div>#EB1000</div>
    </div>
  </div>
  <div class="text center dark xxl-spacing-bottom xs-spacing-top l-button text-block con-block has-bg" data-block-status="loaded" style="background: rgb(235, 16, 0);" daa-lh="b14|t3Stu--text|desktop|acrobat-pro-dev">
    
    <div class="foreground">
      <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/pricing/students/" aria-label="See all plans Adobe Acrobat student and teacher" class="con-button outline fill" daa-ll="See all plans-29--Creative Cloud Pro f">See all plans</a></div></div>
    </div>
  </div>
</div></div></div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>tab</div>
      <div>compare-plans, 3</div>
    </div>
  </div>
</div></div></div></div></div>
</div></div></div>
      </div>
      <div class="section" daa-lh="s8">
        <div><div class="fragment" data-path="/dc-shared/fragments/acrobat/acrobat-pro-standard/icon-block"><div class="section">
  <div class="text center l-spacing text-block con-block" data-block-status="loaded" daa-lh="b1|text|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="body-m">
        <h2 id="theres-even-more-to-your-acrobat-plan" class="heading-l">There’s even more to your Acrobat plan.</h2>
      </div>
    </div>
  </div>
</div><div class="section three-up m-spacing">
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b2|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-device-desktop-mobile.svg" alt=""></picture></p>
        <h3 id="access-anywhere" class="heading-s"><strong>Access anywhere</strong></h3>
        <p class="body-m">Acrobat wherever you are — on desktop, mobile, or in your web browser.</p>
      </div>
    </div>
  </div>
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b3|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-settings.svg" alt=""></picture></p>
        <h3 id="integrations" class="heading-s"><strong>Integrations</strong></h3>
        <p class="body-m">Work seamlessly across your favorite apps with built-in PDF and e-sign integrations.</p>
      </div>
    </div>
  </div>
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b4|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-help-circle-questionmark.svg" alt=""></picture></p>
        <h3 id="customer-support" class="heading-s"><strong>Customer support</strong></h3>
        <p class="body-m">Create a case or start a chat when you need help with your account, billing, or services.</p>
      </div>
    </div>
  </div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div>three-up, m spacing</div>
    </div>
  </div>
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b5|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-lightbulb.svg" alt=""></picture></p>
        <h3 id="tutorials" class="heading-s"><strong>Tutorials</strong></h3>
        <p class="body-m">Learn the basics or refine your skills with tutorials designed to inspire.</p>
      </div>
    </div>
  </div>
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b6|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-lock.svg" alt=""></picture></p>
        <h3 id="security" class="heading-s"><strong>Security</strong></h3>
        <p class="body-m">Create a password-protected PDF or restrict copying and editing.</p>
      </div>
    </div>
  </div>
  <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b7|icon-block|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="text-content">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/tools/icon-cloud.svg" alt=""></picture></p>
        <h3 id="storage" class="heading-s"><strong>Storage</strong></h3>
        <p class="body-m">Your Adobe membership comes with 100GB of cloud storage that you can upgrade anytime.</p>
      </div>
    </div>
  </div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div>three-up, m spacing</div>
    </div>
  </div>
</div></div></div>
      </div>
      <div class="section" daa-lh="s9">
        <div><div class="fragment" data-path="/dc-shared/fragments/faq/acrobat-overview-faq"><div class="section">
  <div class="text full-width l-spacing-top m-spacing-bottom text-block con-block max-width-8-desktop center xxl-spacing" data-block-status="loaded" daa-lh="b1|text|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div class="body-m">
        <h2 id="questions-we-have-answers" class="heading-l">Questions? We have answers.</h2>
      </div>
    </div>
  </div>
  <div class="accordion-container con-block max-width-10-desktop" data-block-status="loaded" daa-lh="b2|accordion-conta|desktop|acrobat-pro-dev"><div class="descr-list accordion foreground" id="accordion-1" role="presentation"><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-1" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-1" daa-ll="open-1--What is Adobe Acroba">
      What is Adobe Acrobat?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-1" id="accordion-1-content-1" hidden="true" class="descr-details"><div>Acrobat is a productivity and collaboration platform that brings together powerful PDF tools, AI features, content creation, and seamless sharing to help you get your best work done. With an Acrobat desktop subscription, you get access to Acrobat desktop software, Acrobat online tools, the Acrobat Reader mobile app, and the Adobe Scan app — all so you can work more securely and efficiently from almost anywhere, on any device.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-2" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-2" daa-ll="open-2--What s the differenc">
      What’s the difference between Acrobat Standard, Acrobat Pro, and Acrobat Studio?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-2" id="accordion-1-content-2" hidden="true" class="descr-details"><div>
        <p>Acrobat Standard includes basic PDF features, allowing you to:</p>
        <ul>
          <li>Edit and organize PDFs.</li>
          <li>Convert documents to and from PDF.</li>
          <li>Fill out forms, sign documents, and request e-signatures.</li>
          <li>Password-protect files.</li>
        </ul>
        <p>Acrobat Pro includes everything in Acrobat Standard, plus enhanced PDF tools and e-signature capabilities. With these advanced features, you can:</p>
        <ul>
          <li>Turn scanned documents into editable, searchable PDFs.</li>
          <li>Compare PDFs to review differences.</li>
          <li>Redact sensitive information from PDFs.</li>
          <li>Brand your agreements by adding a logo and custom URL.</li>
          <li>Create web forms and reusable e-sign templates.</li>
          <li>Receive and track multiple e-signatures by sending in bulk.</li>
        </ul>
        <p>Acrobat Studio includes everything in Acrobat Pro, plus PDF Spaces, AI Assistant for Acrobat, and Adobe Express Premium. Additional features include:</p>
        <ul>
          <li>Chat with your documents and get fast answers.</li>
          <li>Summarize documents with one click.</li>
          <li>Ask questions using voice prompts on your mobile device.</li>
          <li>Unlock insights across PDFs, Microsoft 365 files, and web links with PDF Spaces.</li>
          <li>Easily remix docs into presentations with AI, create content from over 500,000 professional templates, and generate custom images —&nbsp;all powered by Adobe Express.</li>
          <li>Use AI-powered PDF Actions to complete top tasks in no time.</li>
          <li>Share a PDF Space with a prebuilt or personalized AI Assistant.</li>
        </ul>
        <p>You can see how <a href="/acrobat/pricing/compare-versions/" daa-ll="the Acrobat offering-3--What s the differenc">the Acrobat offerings</a> compare.</p>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-3" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-3" daa-ll="open-3--What s included in m">
      What’s included in my Acrobat desktop subscription?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-3" id="accordion-1-content-3" hidden="true" class="descr-details"><div>
        <p>Your subscription to Acrobat includes desktop software, online access, and mobile apps, letting you effortlessly sync files across computers and devices.</p>
        <ul>
          <li><strong>Acrobat desktop software</strong>: Use Acrobat on your desktop, with tools to edit, convert, protect, and sign documents. You can also integrate Acrobat with <a href="https://experienceleague.adobe.com/en/docs/document-cloud-learn/acrobat-learning/integrations/integrate-overview" daa-ll="other productivity t-5--What s included in m">other productivity tools</a>.</li>
          <li><strong>Acrobat online</strong>: Use PDF and e-signature tools in any web browser. Our prebuilt integrations for Microsoft OneDrive, Google Drive, and more make it easy to store and share files online. You can even send documents for e-signature and track responses in real time.</li>
          <li><strong>Acrobat Reader mobile app</strong>: The world’s most trusted PDF reader and editor with more than 635 million installs. View, share, annotate, add comments, and sign documents – all in one app.</li>
          <li><strong>Acrobat Scan mobile app</strong>: Turn your mobile device into a powerful scanner that recognizes text automatically (OCR) and allows you to create, save, and organize your paper documents as digital files.</li>
        </ul>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-4" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-4" daa-ll="open-4--How does a subscript">
      How does a subscription work?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-4" id="accordion-1-content-4" hidden="true" class="descr-details"><div>When you subscribe to Acrobat Studio, Acrobat Pro, or Acrobat Standard, you pay a monthly or annual fee based on the plan you choose. Regular updates will ensure you have the latest features available in Acrobat. You will not need to upgrade your product as long as your subscription is active.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-5" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-5" daa-ll="open-5--Is there a perpetual">
      Is there a perpetual version of Acrobat available?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-5" id="accordion-1-content-5" hidden="true" class="descr-details"><div>No. Adobe discontinued selling perpetual versions of Acrobat after Acrobat 2020. However, if you would like a non-subscription version of Acrobat, <a href="/products/catalog/" daa-ll="Acrobat Pro 2024 des-8--Is there a perpetual">Acrobat Pro 2024 desktop software</a> is a one-time, upfront purchase that provides three years of access to Acrobat desktop. It includes quarterly security updates but <a href="https://helpx.adobe.com/acrobat/faq-acrobat-classic.html" daa-ll="does not include Acr-9--Is there a perpetual">does not include Acrobat feature enhancements</a> or access to Acrobat online services via your web browser and mobile devices.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-6" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-6" daa-ll="open-6--What are the minimum">
      What are the minimum system requirements to run Acrobat?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-6" id="accordion-1-content-6" hidden="true" class="descr-details"><div>See the <a href="https://helpx.adobe.com/acrobat/system-requirements.html" daa-ll="Acrobat system requi-11--What are the minimum">Acrobat system requirements page</a> for information.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-7" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-7" daa-ll="open-7--In what languages is">
      In what languages is Acrobat available?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-7" id="accordion-1-content-7" hidden="true" class="descr-details"><div>See the <a href="https://helpx.adobe.com/acrobat/system-requirements.html" daa-ll="Acrobat system requi-13--In what languages is">Acrobat system requirements page</a> for information.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-8" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-8" daa-ll="open-8--What s the best way ">
      What’s the best way for my business to purchase Acrobat subscriptions?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-8" id="accordion-1-content-8" hidden="true" class="descr-details"><div>
        <p>Adobe offers plans for businesses of all sizes. For small businesses, Acrobat Teams subscriptions make it easy to purchase and manage multiple licenses through a centralized admin console. For larger organizations with more complex deployment and administrative needs, volume licensing options are available. <a href="/acrobat/contact/" daa-ll="Request a contact fr-15--What s the best way ">Request a contact from Adobe’s sales team</a>, or contact an Adobe Authorized Reseller.</p>
        <p>To learn more, visit the <a href="/acrobat/business/" daa-ll="Acrobat for business-16--What s the best way ">Acrobat for business</a> page.</p>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-9" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-9" daa-ll="open-9--What makes Acrobat a">
      What makes Acrobat a great collaboration tool?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-9" id="accordion-1-content-9" hidden="true" class="descr-details"><div>Acrobat gives you seamless and highly secure sharing, real-time commenting, and PDF tools that make collaborating on documents easier than ever. You can create knowledge hubs in PDF Spaces where the entire team can add files and work together to build strong work. Custom AI agents come in handy to help you guide AI Assistant to provide the direction and output you need to push your project forward.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-10" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-10" daa-ll="open-10--What s the best way ">
      What’s the best way to integrate document workflows with cloud storage?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-10" id="accordion-1-content-10" hidden="true" class="descr-details"><div>
        <p>The best way to integrate document workflows with cloud storage is by using Acrobat’s built-in support for popular cloud services. Acrobat works seamlessly with:</p>
        <ul>
          <li>Acrobat Document Cloud: Access your files from anywhere, send links for review, and sync changes across devices.</li>
          <li>Third-party cloud storage: Connect to OneDrive, Google Drive, Dropbox, Box, and more directly within Acrobat.</li>
        </ul>
        <p>Users can open and save files from cloud storage without leaving Acrobat – no need to download or upload manually. Real-time collaboration is enabled by sharing cloud-stored PDFs with others for commenting and review. Files can be organized and stored securely using version history and permission controls supported by your cloud provider.</p>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-11" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-11" daa-ll="open-11--How can Acrobat auto">
      How can Acrobat automate my PDF tasks?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-11" id="accordion-1-content-11" hidden="true" class="descr-details"><div>
        <p>Acrobat helps automate your PDF workflows by streamlining repetitive tasks and reducing manual effort through built-in tools and integrations. Key automation features include:</p>
        <ul>
          <li>Action Wizard (in Acrobat Pro): Create and run custom sequences of tasks, like OCR, redaction, watermarking and file conversion on multiple PDFs at once.</li>
          <li>Batch processing: Apply the same edits, optimizations, or security settings across multiple documents automatically.</li>
          <li>Cloud-based workflows: Use Acrobat online and Adobe Document Cloud to send, sign, and track documents from anywhere with automated notifications and reminders.</li>
          <li>Integrations with Microsoft 365 and other apps: Automate PDF creation, editing, and signing directly within tools you already use.</li>
          <li>AI-powered features: Auto-tagging for accessibility, content recognition, and smart form field detection to reduce setup time.</li>
        </ul>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-12" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-12" daa-ll="open-12--How do I streamline ">
      How do I streamline my document review process with Acrobat?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-12" id="accordion-1-content-12" hidden="true" class="descr-details"><div>
        <p>Acrobat makes it easy to manage and automate document review and collaboration, reducing the need for back-and-forth emails and manual edits. With Acrobat, you can:</p>
        <ul>
          <li>Share PDFs for review via a secure link, no attachments needed.</li>
          <li>Collect comments in one place, in real time, from multiple reviewers.</li>
          <li>Use automatic version tracking to keep everyone on the same page.</li>
          <li>Receive notifications when reviewers add feedback or complete their review.</li>
          <li>Work seamlessly with Microsoft Teams and Outlook to manage reviews within your existing workflow.</li>
          <li>Use AI Assistant to quickly review content and contracts, compare document versions, generate summaries, uncover insights and key data, and more.</li>
        </ul>
      </div></div></div></div>
</div></div></div>
      </div>
      <div class="section" daa-lh="s10">
        <div><div class="fragment" data-path="/dc-shared/fragments/acrobat/get-acrobat-support"><div class="section section-anchor" data-has-placeholders="true" id="open-jarvis-chat">
  <div class="text center xl-spacing l-button text-block con-block" data-block-status="loaded" daa-lh="b1|text|desktop|acrobat-pro-dev">
    <div class="foreground">
      <div>
        <p class="image icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/adobe-logos/acrobat-logo-dark-148x30.svg" alt="Adobe Acrobat"></picture></p>
        <h2 id="questions-about-acrobat-plans" class="heading-xl">Questions about Acrobat plans?</h2>
        <p class="body-m">Contact us for more information about plans and pricing.</p>
        <div class="cta-container"><p class="body-m action-area"><a href="/acrobat/contact/" class="con-button blue" daa-ll="Contact Sales-1--Questions about Acro">Contact Sales</a> <a href="tel:phone business geo" daa-ll="800 915 9430-2--Questions about Acro">800-915-9430</a></p></div>
      </div>
    </div>
  </div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>anchor</div>
      <div>open-jarvis-chat</div>
    </div>
  </div>
</div></div></div>
      </div>
      <div class="section" daa-lh="s11">
        
      </div>
    <div class="section promo-sticky-section hide-sticky-section sticky-bottom" data-has-placeholders="true" daa-lh="s12">
  <div class="notification ribbon space-between delay dark xl-icon inline con-block" style="background: rgb(0, 11, 29);" data-notification-id="notification-1779409375435-egd7128ur" data-block-status="loaded" aria-label="Adobe Acrobat Pro" role="region" daa-lh="b1|notification|desktop|acrobat-pro-dev">
    
    <div class="foreground container"><div class="text">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro-64.svg" alt="Acrobat Trefoil Mnemonic"></picture></p><div class="copy-wrap"><h2 id="adobe-acrobat-pro-2" class="heading-m">Adobe Acrobat Pro</h2><p class="body-m">Browse plans for <a href="/acrobat/business/" class="static" daa-ll="businesses-1--Adobe Acrobat Pro">businesses</a> or <a href="/acrobat/pricing/students/" class="static" daa-ll="students and teacher-2--Adobe Acrobat Pro">students and teachers</a>.</p></div>
        
        
        <p class="body-m action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Free trial-3--Adobe Acrobat Pro"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Pro" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7C30A05FE0EC0BA92566737E720C4692&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Buy now-4--Adobe Acrobat Pro"><span style="pointer-events: none;">Buy now</span></a></p>
      </div></div>
  <button aria-label="Close Promotional Banner" class="close" daa-ll="Close Promotional Ba-5--Adobe Acrobat Pro"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <g clip-path="url(#clip0_699_20329)">
    <path d="M17.071 2.9289C15.6725 1.53038 13.8907 0.577987 11.9509 0.192144C10.0111 -0.1937 8.0004 0.00433988 6.17314 0.761219C4.34589 1.5181 2.78411 2.79982 1.6853 4.44431C0.586487 6.0888 0 8.02219 0 10C0 11.9778 0.586487 13.9112 1.6853 15.5557C2.78411 17.2002 4.34589 18.4819 6.17314 19.2388C8.0004 19.9957 10.0111 20.1937 11.9509 19.8079C13.8907 19.422 15.6725 18.4696 17.071 17.0711C17.9996 16.1425 18.7362 15.0401 19.2388 13.8269C19.7413 12.6136 20 11.3132 20 10C20 8.68677 19.7413 7.3864 19.2388 6.17314C18.7362 4.95988 17.9996 3.85748 17.071 2.9289ZM13.9082 14.7616C13.814 14.8558 13.6862 14.9087 13.5529 14.9087C13.4197 14.9087 13.2919 14.8558 13.1977 14.7616L10.0002 11.5636L6.80219 14.7616C6.70795 14.8558 6.58016 14.9087 6.44691 14.9087C6.31366 14.9087 6.18587 14.8558 6.09163 14.7616L5.23736 13.9073C5.14316 13.813 5.09023 13.6853 5.09023 13.552C5.09023 13.4188 5.14316 13.291 5.23736 13.1967L8.43636 10.0003L5.23887 6.80276C5.19215 6.75609 5.15508 6.70067 5.12979 6.63967C5.10451 6.57867 5.09149 6.51328 5.09149 6.44724C5.09149 6.3812 5.10451 6.31581 5.12979 6.25481C5.15508 6.1938 5.19215 6.13838 5.23887 6.09171L6.09314 5.23744C6.18738 5.14323 6.31517 5.09031 6.44842 5.09031C6.58167 5.09031 6.70946 5.14323 6.80369 5.23744L10.0002 8.43643L13.1982 5.23895C13.2448 5.19222 13.3003 5.15516 13.3613 5.12987C13.4223 5.10458 13.4877 5.09157 13.5537 5.09157C13.6197 5.09157 13.6851 5.10458 13.7461 5.12987C13.8071 5.15516 13.8626 5.19222 13.9092 5.23895L14.761 6.09322C14.8552 6.18745 14.9081 6.31525 14.9081 6.44849C14.9081 6.58174 14.8552 6.70954 14.761 6.80377L11.564 10.0003L14.761 13.1977C14.8552 13.292 14.9081 13.4198 14.9081 13.553C14.9081 13.6863 14.8552 13.8141 14.761 13.9083L13.9082 14.7616Z" class="path"></path>
  </g>
  <defs>
    <clipPath id="clip0_699_20329">
      <rect width="20" height="20" fill="white"></rect>
    </clipPath>
  </defs>
</svg></button></div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div><strong>sticky-bottom, promo-sticky-section</strong></div>
    </div>
  </div>
</div></main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409375435-egd7128ur"></div><div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409375824-ak2j6au55"></div><div id="page-load-ok-milo" style="display: none;"></div></body></html>