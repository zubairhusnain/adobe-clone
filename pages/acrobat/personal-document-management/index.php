<?php
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Personal document management and PDF software | Adobe Acrobat</title>
    <link rel="canonical" href="/acrobat/personal-document-management/">
    <meta name="description" content="Simplify home documents with personal document management software from Adobe Acrobat. Store, organize, protect, and share PDFs with ease.">
    <meta property="og:title" content="Personal document management and PDF software | Adobe Acrobat">
    <meta property="og:description" content="Simplify home documents with personal document management software from Adobe Acrobat. Store, organize, protect, and share PDFs with ease.">
    <meta property="og:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Personal document management and PDF software | Adobe Acrobat">
    <meta name="twitter:description" content="Simplify home documents with personal document management software from Adobe Acrobat. Store, organize, protect, and share PDFs with ease.">
    <meta name="twitter:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="jarvis-chat" content="desktop">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="adobe-home-redirect" content="on">
    <meta name="checkout-workflow-step" content="commitment">
<meta name="footer-source" content="https://www.adobe.com/dc-shared/navigation/footer/footer" data-localized="true">
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Adobe Acrobat","item":"/acrobat/"},{"@type":"ListItem","position":3,"name":"Personal document management and PDF software","item":"/acrobat/personal-document-management/"}]}</script><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/notification/notification.js"><link rel="stylesheet" href="/libs/blocks/notification/notification.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/modal/modal.js"><link rel="stylesheet" href="/libs/blocks/modal/modal.css"><link rel="stylesheet" href="/libs/features/icons/icons.css"><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/media/media.css"><link rel="stylesheet" href="/libs/blocks/editorial-card/editorial-card.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch-card/merch-card.js"><link rel="stylesheet" href="/libs/blocks/merch-card/merch-card.css"><style>
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
  --consonant-merch-card-product-width: 300px;
}

merch-card[variant="product"] {
    --consonant-merch-card-callout-icon-size: 18px;
    width: var(--consonant-merch-card-product-width);
}

merch-card[variant="product"][id] [slot='callout-content'] > div > div,
merch-card[variant="product"][id] [slot="callout-content"] > p {
    position: relative;
    padding: 2px 10px 3px;
    background: #D9D9D9;
    color: var(--text-color);
}

merch-card[variant="product"] [slot="callout-content"] > p:has(> .icon-button) {
  padding-inline-end: 36px;
}

merch-card[variant="product"] [slot="callout-content"] .icon-button {
  margin: 1.5px 0 1.5px 8px;
}

merch-card[variant="product"] a.spectrum-Link--secondary {
  color: inherit;
}

merch-card[variant="product"][id] span[data-template="legal"] {
    display: block;
    color: var(----merch-color-grey-80);
    font-size: 14px;
    font-style: italic;
    font-weight: 400;
    line-height: 21px;
}

merch-card[variant="product"][id] .price-unit-type:not(.disabled)::before {
    content: "";
}

merch-card[variant="product"] [slot="footer"] a.con-button.primary {
    border: 2px solid var(--text-color);
    color: var(--text-color);
}

merch-card[variant="product"] [slot="footer"] a.con-button.primary:hover {
    background-color: var(--color-black);
    border-color: var(--color-black);
    color: var(--color-white);
}

merch-card-collection.product merch-card {
    width: auto;
    height: 100%;
}

  merch-card[variant="product"] merch-addon {
    padding-left: 4px;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-right: 8px;
    border-radius: .5rem;
    font-family: var(--merch-body-font-family, 'Adobe Clean');
    font-size: var(--consonant-merch-card-body-xs-font-size);
    line-height: var(--consonant-merch-card-body-xs-line-height);
  }

  merch-card[variant="product"] merch-addon [is="inline-price"] {
    font-weight: bold;
    pointer-events: none;
  }

  merch-card[variant="product"] merch-addon::part(checkbox) {
      height: 18px;
      width: 18px;
      margin: 14px 12px 0 8px;
  }

  merch-card[variant="product"] merch-addon::part(label) {
    display: flex;
    flex-direction: column;
    padding: 8px 4px 8px 0;
    width: 100%;
  }

.one-merch-card.section merch-card[variant="product"],
.two-merch-cards.section merch-card[variant="product"],
.three-merch-cards.section merch-card[variant="product"],
.four-merch-cards.section merch-card[variant="product"] {
    width: auto;
}

/* grid style for product */
.one-merch-card.product,
.two-merch-cards.product,
.three-merch-cards.product,
.four-merch-cards.product {
    grid-template-columns: var(--consonant-merch-card-product-width);
}

/* Tablet */
@media screen and (min-width: 768px) {
    .two-merch-cards.product,
    .three-merch-cards.product,
    .four-merch-cards.product {
        grid-template-columns: repeat(2, var(--consonant-merch-card-product-width));
    }
}

/* desktop */
@media screen and (min-width: 1200px) {
  :root {
    --consonant-merch-card-product-width: 378px;
    --consonant-merch-card-product-width-4clm: 276px;
  }
    
  .three-merch-cards.product {
      grid-template-columns: repeat(3, var(--consonant-merch-card-product-width));
  }

  .four-merch-cards.product {
      grid-template-columns: repeat(4, var(--consonant-merch-card-product-width-4clm));
  }
}

merch-card[variant="product"] {
    merch-whats-included merch-mnemonic-list,
    merch-whats-included [slot="heading"] {
        width: 100%;
    }
}

</style><link rel="stylesheet" href="/libs/blocks/icon-block/icon-block.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"></head>
  <body>
    <header class="global-navigation has-breadcrumbs ready local-nav" daa-im="true" daa-lh="gnav|localnav-acrobat" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
        <div class="feds-brand-container">
          <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="dialog" aria-label="Navigation menu" aria-controls="feds-popup-1" data-feds-preventautoclose="">
      </button>
          <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
        <span class="feds-brand-image brand-image-only"><img loading="lazy" src="/federal/assets/svgs/adobe-logo.svg" alt="Adobe, Inc."></span>
        
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu feds-navItem--active feds-navItem--activeDeferred" daa-lh="PDFs E signatures" style="width: 177px;">
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
                <li aria-current="page"><span aria-hidden="true">/</span>Personal document management and PDF software</li>
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
            </div></div><a href="/acrobat/personal-document-management/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" data-has-placeholders="true" daa-lh="s1">
        <div class="hero-marquee static-links bg-bottom-tablet bg-bottom-mobile no-min-height con-block has-bg" data-block-status="loaded" style="background: linear-gradient(0deg, rgb(253, 53, 34) 0%, rgb(254, 135, 109) 100%);" daa-lh="b1|hero-marquee">
          <div class="background">
            <div class="mobile-only expand-background"></div>
            <div class="tablet-only expand-background"></div>
            <div class="desktop-only expand-background"></div>
          </div>
          <div class="foreground cols-2">
            <div class="copy"><div class="main-copy l-lockup l-button">
              <p class="detail-l">Personal</p>
              <h1 id="simplify-your-personal-documents-and-paperwork" class="heading-xl">Simplify your personal documents and paperwork.</h1>
            </div><div class="row-text con-block order-0-desktop s-spacing-bottom norm">
            
            <div class="row-wrapper"><p class="body-m">Acrobat makes it easy for you and your family to manage all types of documents so you can spend more time on the things that matter most.</p></div>
          </div><div class="row-text con-block order-1-desktop xs-spacing-bottom norm">
            
            <div class="row-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button blue button-xl placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Free trial-1--Simplify your person"><span style="pointer-events: none;">Free trial</span></a> <a href="/acrobat/pricing/" class="con-button outline button-xl" daa-ll="Compare plans-2--Simplify your person">Compare plans</a></p></div>
          </div></div>
            <div class="asset">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_12d8dd7ccd8808bf21e9c7082ea86101f47d81bbd.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_12d8dd7ccd8808bf21e9c7082ea86101f47d81bbd.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_12d8dd7ccd8808bf21e9c7082ea86101f47d81bbd.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_12d8dd7ccd8808bf21e9c7082ea86101f47d81bbd.png?width=750&amp;format=png&amp;optimize=medium" width="1440" height="1120">
              </picture>
            </div>
          </div>
          
          
          
        </div>
      </div>
      <div class="section" daa-lh="s2">
        <div><div class="fragment" data-path="/dc-shared/fragments/acrobat/how-to/sticky-banner"><div class="section show-sticky-section"></div></div></div>
      </div>
      <div class="section" daa-lh="s3">
        <div class="text center l-spacing-bottom xxl-spacing-top max-width-6-desktop text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h2 id="whatever-youre-working-on-get-it-done-with-no-hassle" class="heading-xl">Whatever you’re working on, get it done with no hassle.</h2>
              <p class="body-s">Whether you’re helping kids with schoolwork, organizing your tax documents, or compiling and editing files for a home project, Acrobat makes it all easier than ever.</p>
            </div>
          </div>
        </div>
        <div class="media large l-spacing-top xl-spacing-bottom con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1508022e93ce7cefe33068aabfb88dc422050e024.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1508022e93ce7cefe33068aabfb88dc422050e024.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1508022e93ce7cefe33068aabfb88dc422050e024.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1508022e93ce7cefe33068aabfb88dc422050e024.png?width=750&amp;format=png&amp;optimize=medium" width="1400" height="1050">
              </picture>
            </div>
            <div class="text">
              <h3 id="an-easier-faster-way-to-get-things-done" class="heading-xl">An easier, faster way to get things done.</h3>
              <p class="body-m"><strong>Edit anything.</strong> Convert almost any digital or paper doc, such as a resume, to an editable, searchable PDF.</p>
              <p class="body-m"><strong>Consolidate documents.</strong> Combine multiple tax, medical, or financial files into one doc.</p>
              <p class="body-m"><strong>Share with anyone.</strong> Send documents to others, directly from Acrobat — no email attachments necessary.</p>
              <p class="body-m"><strong>Fill and sign digitally.</strong> Digitally fill out documents such as waivers and school forms and then add your e-signature and return it.</p>
              <p class="body-m action-area"><a href="/acrobat/pricing/" class="con-button outline" daa-ll="See all features-1--An easier faster way">See all features</a></p>
              <p class="subcopy"><em>‎</em></p>
              <p class="body-m">WATCH TUTORIALS</p>
              <p class="icon-area">‎<span class="icon icon-play-circle margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/edit-any-document" data-modal-hash="#edit-any" class="modal link-block " data-block-status="loaded" daa-ll="Edit any document-2--An easier faster way">Edit any document</a><br><span class="icon icon-play-circle margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/share-a-pdf-from-acrobat" data-modal-hash="#share-a-pdf" class="modal link-block " data-block-status="loaded" daa-ll="Share a PDF from Acr-3--An easier faster way">Share a PDF from Acrobat</a><br><span class="icon icon-play-circle margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/digitally-fill-and-sign-forms" data-modal-hash="#digitally-fill" class="modal link-block " data-block-status="loaded" daa-ll="Digitally fill and s-4--An easier faster way">Digitally fill and sign forms</a></p>
            </div>
          </div></div></div>
        <div class="media large l-spacing-top xl-spacing-bottom con-block media-reverse-mobile" data-block-status="loaded" daa-lh="b3|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="text">
              <h3 id="keep-your-documents-and-data-safe" class="heading-xl">Keep your documents and data safe.</h3>
              <p class="body-m"><strong>Add password protection.</strong> Prevent unwanted copying, changing, or printing of your PDF.</p>
              <p class="body-m"><strong>Set permissions.</strong> Control who can access, edit, or share your PDF.</p>
              <p class="body-m"><strong>Rely on Adobe.</strong> Acrobat is the #1 most-used PDF app in the world, trusted by millions daily.</p>
              <p class="body-m action-area"><a href="/acrobat/pricing/" class="con-button outline" daa-ll="See all features-1--Keep your documents ">See all features</a></p>
              <p class="subcopy"><em>‎</em></p>
              <p class="body-m">WATCH TUTORIALS</p>
              <p class="icon-area"><span class="icon icon-play-circle margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/password-protect-your-pdf" data-modal-hash="#password-protect" class="modal link-block " data-block-status="loaded" daa-ll="Password protect you-2--Keep your documents ">Password-protect your PDF</a></p>
            </div>
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_10634b320c9d600a7a0ebef2a55343ca33738af56.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_10634b320c9d600a7a0ebef2a55343ca33738af56.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_10634b320c9d600a7a0ebef2a55343ca33738af56.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_10634b320c9d600a7a0ebef2a55343ca33738af56.png?width=750&amp;format=png&amp;optimize=medium" width="1400" height="1050">
              </picture>
            </div>
          </div></div></div>
        <div class="media large l-spacing-top xl-spacing-bottom con-block" data-block-status="loaded" daa-lh="b4|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_11915fba51f646f2ed38d00b15fa07a6be04757b2.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_11915fba51f646f2ed38d00b15fa07a6be04757b2.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_11915fba51f646f2ed38d00b15fa07a6be04757b2.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_11915fba51f646f2ed38d00b15fa07a6be04757b2.png?width=750&amp;format=png&amp;optimize=medium" width="1400" height="1050">
              </picture>
            </div>
            <div class="text">
              <h3 id="whatever-youre-working-on-make-it-stand-out" class="heading-xl">Whatever you’re working on, make it stand out.</h3>
              <p class="body-m"><strong>Be a great collaborator.</strong> Share files and group projects to work together more efficiently.</p>
              <p class="body-m"><strong>Improve your studies.</strong> Consolidate research and classwork into a custom digital study guide.</p>
              <p class="body-m"><strong>Create like a pro.</strong> Put together professional-looking resumes, presentations, and reports in no time.</p>
              <p class="body-m action-area"><a href="/" class="con-button outline" daa-ll="See all features-1--Whatever you re work">See all features</a></p>
              <p class="subcopy"><em>‎</em></p>
              <p class="body-m">WATCH TUTORIALS</p>
              <p class="icon-area">‎<span class="icon icon-play-circle margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/collaborate-on-group-projects" data-modal-hash="#collaborate" class="modal link-block " data-block-status="loaded" daa-ll="Collaborate on group-2--Whatever you re work">Collaborate on group projects</a><br><span class="icon icon-play-circle margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-play-circle"><path fill="currentColor" fill-rule="evenodd" d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm4.269,8.43-6.014,3.5A.5.5,0,0,1,7,13H6.5a.5.5,0,0,1-.5-.5v-7A.5.5,0,0,1,6.5,5H7a.5.5,0,0,1,.255.07l6.014,3.5A.5.5,0,0,1,13.269,9.43Z"></path></svg></span><a href="/acrobat/personal-document-management/" data-modal-path="/dc-shared/fragments/modals/videos/acrobat/personal-document-management/organize-study-materials" data-modal-hash="#organize" class="modal link-block " data-block-status="loaded" daa-ll="Organize study mater-3--Whatever you re work">Organize study materials</a></p>
            </div>
          </div></div></div>
        <div class="text text-block con-block" data-block-status="loaded" daa-lh="b5|text">
          <div class="foreground">
            <div>
              <hr>
            </div>
          </div>
        </div>
        <div class="text center xxl-spacing max-width-8-desktop text-block con-block" data-block-status="loaded" daa-lh="b6|text">
          <div class="foreground">
            <div>
              <p class="image">
                <picture>
                  <source type="image/webp" srcset="/acrobat/media_19fbe283217dfd764b1867803f8baa4f2f91e41cf.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/media_19fbe283217dfd764b1867803f8baa4f2f91e41cf.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/media_19fbe283217dfd764b1867803f8baa4f2f91e41cf.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="PCWorld Editors' Choice" src="/acrobat/media_19fbe283217dfd764b1867803f8baa4f2f91e41cf.png?width=750&amp;format=png&amp;optimize=medium" width="159" height="159">
                </picture>
              </p>
              <p class="body-xxl">Best Overall PDF Editor<br>“Adobe Acrobat Pro remains the industry standard for good reason. Its recent interface redesign makes it much easier to navigate its robust toolset.”</p>
            </div>
          </div>
        </div>
        <div class="text center l-spacing-bottom xxl-spacing-top max-width-6-desktop text-block con-block has-bg" data-block-status="loaded" style="background: rgb(245, 245, 245);" daa-lh="b7|text">
          
          <div class="foreground">
            <div>
              <h2 id="not-ready-to-begin-your-acrobat-trialtry-our-free-online-tools" class="heading-xl">Not ready to begin your Acrobat trial?<br>Try our free online tools.</h2>
              <p class="body-s">You can download our mobile apps or try some of our free online web tools right now, on the spot, to experience some of the most popular features in Acrobat.</p>
              <div class="cta-container"><p class="body-s action-area"><a href="/acrobat/online/" class="con-button outline" daa-ll="See all free online -1--Not ready to begin y">See all free online tools</a> <a href="https://chrome.google.com/webstore/detail/adobe-acrobat-pdf-edit-co/efaidnbmnnnibpcajpcglclefindmkaj?mv=acomacrobat" target="_blank" class="con-button outline" daa-ll="Get Google Chrome ex-2--Not ready to begin y">Get Google Chrome extension</a></p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up m-spacing top xxl-spacing-bottom" daa-lh="s4" style="background: rgb(245, 245, 245);">
        <div class="editorial-card dark no-border footer-align-left con-block m-lockup equal-height" data-block-status="loaded" style="background: rgb(40, 40, 40);" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1bc258be9d581e9c952eb66c56de73a12f697de9b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1bc258be9d581e9c952eb66c56de73a12f697de9b.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1bc258be9d581e9c952eb66c56de73a12f697de9b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1bc258be9d581e9c952eb66c56de73a12f697de9b.png?width=750&amp;format=png&amp;optimize=medium" width="552" height="560">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <h3 id="export-pdf" class="heading-s">Export PDF</h3>
              <p class="body-xs">Convert PDFs to Microsoft Office and other file formats.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/features/" class="con-button outline" daa-ll="Try now-1--Export PDF">Try now</a></div>
          </div>
        </div>
        <div class="editorial-card dark no-border footer-align-left con-block m-lockup equal-height" data-block-status="loaded" style="background: rgb(40, 40, 40);" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/acrobat/media_106f802d90759731e9116f8b4f0d00d6da891706a.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_106f802d90759731e9116f8b4f0d00d6da891706a.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_106f802d90759731e9116f8b4f0d00d6da891706a.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_106f802d90759731e9116f8b4f0d00d6da891706a.png?width=750&amp;format=png&amp;optimize=medium" width="552" height="560">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <h3 id="fill--sign" class="heading-s">Fill &amp; Sign</h3>
              <p class="body-xs">Complete a digital form and add your signature.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/sign-pdf/" class="con-button outline" daa-ll="Try now-1--Fill Sign">Try now</a></div>
          </div>
        </div>
        <div class="editorial-card dark no-border footer-align-left con-block m-lockup equal-height" data-block-status="loaded" style="background: rgb(40, 40, 40);" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=750&amp;format=png&amp;optimize=medium" width="552" height="560">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <h3 id="combine-files" class="heading-s">Combine files</h3>
              <p class="body-xs">Merge multiple files into one PDF.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/merge-pdf/" class="con-button outline" daa-ll="Try now-1--Combine files">Try now</a></div>
          </div>
        </div>
        <div class="editorial-card dark no-border footer-align-left con-block m-lockup equal-height" data-block-status="loaded" style="background: rgb(40, 40, 40);" daa-lh="b4|editorial-card">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1ba305aa7b9e2bba389852900dd8207a4c9b37def.png?width=750&amp;format=png&amp;optimize=medium" width="552" height="560">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <h3 id="word-to-pdf" class="heading-s">Word to PDF</h3>
              <p class="body-xs">Convert a Microsoft Word document into a PDF file.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/word-to-pdf/" class="con-button outline" daa-ll="Try now-1--Word to PDF">Try now</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up, m-spacing, top, xxl spacing bottom</strong></div>
          </div>
          <div>
            <div>background</div>
            <div><strong>#f5f5f5</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s5">
        <div class="text center s-spacing-bottom xxl-spacing-top max-width-6-desktop text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="get-our-free-mobile-apps" class="heading-xl">Get our free mobile apps.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section two-up center xxl-spacing-bottom l-spacing-top grid-width-6" daa-lh="s6">
        <div class="media qr-code center con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image"></div>
            <div class="text">
              <p><picture class="avatar"><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/reader.svg" alt=""></picture></p>
              <h3 id="acrobat-reader" class="heading-xs">Acrobat Reader</h3>
              <p class="body-s">The free global standard for reliably viewing, annotating, and signing PDFs.</p>
              <p class="qr-code-img"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/qr-codes/qr-code-acrobat.svg" alt="Acrobat Reader QR Code"></picture></p>
              <p class="body-s qr-button-container"><a href="https://play.google.com/store/apps/details?id=com.adobe.reader&amp;hl=en_US&amp;gl=US" target="_blank" class="google-play" aria-label="Google Play Store" daa-ll="Google Play Store-1--Acrobat Reader"></a></p>
              <p class="body-s action-area-plain qr-button-container"><a href="https://adobeacrobat.app.link/ooe3VYFioeb" target="_blank" class="app-store quick-link" aria-label="Apple App Store" daa-ll="Apple App Store-2--Acrobat Reader"></a></p>
            </div>
          </div></div></div>
        <div class="media qr-code center con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image"></div>
            <div class="text">
              <p><picture class="avatar"><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/scan.svg" alt=""></picture></p>
              <h3 id="adobe-scan" class="heading-xs">Adobe Scan</h3>
              <p class="body-s">Capture any paper document and turn it into a PDF with searchable text.</p>
              <p class="qr-code-img"><picture><img loading="lazy" src="/dc-shared/assets/images/shared-images/qr-codes/qr-code-scan.svg" alt="Adobe Scan QR Code"></picture></p>
              <p class="body-s qr-button-container"><a href="https://play.google.com/store/apps/details?id=com.adobe.scan.android&amp;hl=en_US&amp;gl=US" target="_blank" class="google-play" aria-label="Google Play Store" daa-ll="Google Play Store-1--Adobe Scan"></a></p>
              <p class="body-s action-area-plain qr-button-container"><a href="https://adobescan.app.link/GpBqG8Bkoeb" target="_blank" class="app-store quick-link" aria-label="Apple App Store" daa-ll="Apple App Store-2--Adobe Scan"></a></p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>two-up, center, xxl spacing bottom, l spacing top, grid-width-6</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s7">
        <div><div class="fragment" data-path="/dc-shared/fragments/merch/acrobat/personal-document-management/merch-card/merch-card-blade"><div class="section two-merch-cards product" data-has-placeholders="true" style="--consonant-merch-card-product-heading-xs-height: 45px; --consonant-merch-card-product-body-xxs-height: 54px; --consonant-merch-card-product-body-xs-height: 96px;">
  <merch-card class="merch-card product secure has-divider" variant="product" size="" secure-label="Secure transaction" filters="all" types="" custom-hr="true" daa-lh="b1|merch-card"><h3 id="acrobat-standard" class="card-heading" slot="heading-xs">Acrobat Standard</h3><p id="annual-paid-monthly" class="card-heading" slot="body-xxs"><em>Annual, billed monthly</em></p><p id="price---abm---acrobat-standard" class="card-heading" slot="heading-xs"><span is="inline-price" data-display-per-unit="false" data-force-tax-exclusive="true" data-quantity="1" data-template="price" data-wcs-osi="QgYu51CVY2wKyFEqMuvec4N1tc1OaCypeKJjT5n2-Fc" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">14</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span></p><p id="small-tax-incl-label" class="card-heading" slot="body-xxs"><strong></strong></p><p id="annual-paid-monthly-cancel-within-14-days-for-a-full-refund-windows-and-mac" class="card-heading" slot="body-xxs">Annual, billed monthly. Cancel within 14 days for a <a href="https://helpx.adobe.com/manage-account/using/cancel-subscription.html" daa-ll="full refund-1--Acrobat Standard">full refund</a>. Windows and Mac.</p><div slot="body-xs"><p>Convert, edit, e-sign, protect.</p><hr style="background: #E1E1E1;"></div><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="QgYu51CVY2wKyFEqMuvec4N1tc1OaCypeKJjT5n2-Fc" data-extra-options="{}" class="con-button blue placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=04EA56333389C2F1EFD15EB8FCF79E87&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - ACRO - Individuals" daa-ll="Buy now-2--Acrobat Standard"><span style="pointer-events: none;">Buy now</span></a></p></div></merch-card>
  <merch-card class="merch-card product secure badge-card has-divider" variant="product" size="" badge-background-color="#EDCC2D" badge-color="#000000" badge-text="Recommended" secure-label="Secure transaction" filters="all" types="" custom-hr="true" style="--consonant-merch-card-border-color: #EDCC2D;" daa-lh="b2|merch-card"><h3 id="acrobat-pro" class="card-heading" slot="heading-xs">Acrobat Pro</h3><p id="annual-paid-monthly-1" class="card-heading" slot="body-xxs"><em>Annual, billed monthly</em></p><p id="price---abm---adobe-acrobat-pro" class="card-heading" slot="heading-xs"><span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="price" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span></p><p id="small-tax-incl-label-1" class="card-heading" slot="body-xxs"><strong></strong></p><p id="annual-paid-monthly-cancel-within-14-days-for-a-full-refund-windows-and-mac-1" class="card-heading" slot="body-xxs">Annual, billed monthly. Cancel within 14 days for a <a href="https://helpx.adobe.com/manage-account/using/cancel-subscription.html" daa-ll="full refund-1--Acrobat Pro">full refund</a>. Windows and Mac.</p><div slot="body-xs"><p>Our most comprehensive PDF solution with full convert and edit capabilities, advanced protection, and powerful e-signature features.</p><hr style="background: #E1E1E1;"></div><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button outline placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Free trial - APCC - Individuals" daa-ll="Free trial-2--Acrobat Pro"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" data-extra-options="{}" class="con-button blue placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7C30A05FE0EC0BA92566737E720C4692&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - APCC - Individuals" daa-ll="Buy now-3--Acrobat Pro"><span style="pointer-events: none;">Buy now</span></a></p></div></merch-card>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div>two merch cards</div>
    </div>
  </div>
</div></div></div>
      </div>
      <div class="section grid-width-8" daa-lh="s8">
        <div class="icon-block s-body inline m-icon center m-spacing con-block items-center" data-block-status="loaded" daa-lh="b1|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area">
                <picture>
                  <source type="image/webp" srcset="/acrobat/media_138f027b63e5a0d881b1b34e04da46b30e5ee4f27.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/media_138f027b63e5a0d881b1b34e04da46b30e5ee4f27.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/media_138f027b63e5a0d881b1b34e04da46b30e5ee4f27.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="Security" src="/acrobat/media_138f027b63e5a0d881b1b34e04da46b30e5ee4f27.png?width=750&amp;format=png&amp;optimize=medium" width="40" height="50">
                </picture>
              </p>
              
            <div class="second-column"><p class="body-s">At Adobe, we’re serious about protecting your personal information. To ensure your account details are safe, we use Secure Sockets Layer (SSL), an industry standard for encrypting private data over the internet.</p></div></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Grid width 8</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s9">
        
      </div>
    <div class="section promo-sticky-section hide-sticky-section sticky-bottom" data-has-placeholders="true" daa-lh="s10">
  <div class="notification ribbon delay space-between inline dark xl-icon con-block" style="background: rgb(0, 11, 29);" data-notification-id="notification-1779409382507-s4wim23xn" data-block-status="loaded" aria-label="Adobe Acrobat" role="region" daa-lh="b1|notification">
    
    <div class="foreground container"><div class="text">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro-64.svg" alt="Acrobat Trefoil Mnemonic"></picture></p><div class="copy-wrap"><h2 id="adobe-acrobat-2" class="heading-m">Adobe Acrobat</h2><p class="body-m">Browse plans for <a href="/acrobat/business/" class="static" daa-ll="businesses-1--Adobe Acrobat">businesses</a> or <a href="/acrobat/pricing/students/" class="static" daa-ll="students and teacher-2--Adobe Acrobat">students and teachers</a>.</p></div>
        
        
        <p class="body-m action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button blue button-l placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Free trial-3--Adobe Acrobat"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Buy Now Acrobat Pro" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7C30A05FE0EC0BA92566737E720C4692&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Buy now-4--Adobe Acrobat"><span style="pointer-events: none;">Buy now</span></a></p>
      </div></div>
  <button aria-label="Close Promotional Banner" class="close" daa-ll="Close Promotional Ba-5--Adobe Acrobat"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
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
  

<div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409382507-s4wim23xn"></div><div id="page-load-ok-milo" style="display: none;"></div></body></html>