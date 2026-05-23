<?php
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Adobe Acrobat Pro pricing &amp; options | Adobe Acrobat</title>
    <link rel="canonical" href="/acrobat/pricing/">
    <meta name="description" content="Compare Adobe Acrobat Pro plans to find the one that works best for your professional and personal needs. The right features and price are available for you.">
    <meta property="og:title" content="Adobe Acrobat Pro pricing &amp; options | Adobe Acrobat">
    <meta property="og:description" content="Compare Adobe Acrobat Pro plans to find the one that works best for your professional and personal needs. The right features and price are available for you.">
    <meta property="og:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe Acrobat Pro pricing &amp; options | Adobe Acrobat">
    <meta name="twitter:description" content="Compare Adobe Acrobat Pro plans to find the one that works best for your professional and personal needs. The right features and price are available for you.">
    <meta name="twitter:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="target" content="on">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="jarvis-chat" content="desktop">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="adobe-home-redirect" content="on">
    <meta name="checkout-workflow-step" content="commitment">
<meta name="footer-source" content="https://www.adobe.com/dc-shared/navigation/footer/footer-thin" data-localized="true">
    <meta name="jarvis-surface-id" content="AcrobatPricingSales1">
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/martech/helpers.js"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="stylesheet" href="/libs/styles/iconography.css"><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/tabs/tabs.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/fragment/fragment.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch-card/merch-card.js"><link rel="stylesheet" href="/libs/blocks/merch-card/merch-card.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><style>
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

</style><link rel="stylesheet" href="/libs/features/icons/icons.css"><link rel="stylesheet" href="/libs/blocks/table/table.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/text/text.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/accordion/accordion.js"><link rel="stylesheet" href="/libs/blocks/accordion/accordion.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"></head>
  <body>
    <header class="global-navigation ready" daa-im="true" daa-lh="gnav|acom-gnav-thin" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
        <div class="feds-brand-container">
          
          <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
        <span class="feds-brand-image brand-image-only"><img loading="lazy" src="/federal/assets/svgs/adobe-logo.svg" alt="Adobe, Inc."></span>
        
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"></div>
        
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
        
      </div></header>
    <main daa-im="true">
      <div class="section" daa-lh="s1">
        <div class="hero-marquee center no-min-height con-block has-bg" data-block-status="loaded" style="background: rgb(255, 255, 255);" daa-lh="b1|hero-marquee">
          
          <div class="foreground cols-1">
            <div class="copy"><div class="main-copy l-lockup l-button">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro.svg" alt=""></picture></p>
              <h1 id="plans-and-pricing-for-adobe-acrobat" class="heading-xxl">Plans and pricing for Adobe Acrobat.</h1>
            </div><div class="row-supplemental con-block heading-m norm">
            
            <div class="row-wrapper">
              <h2 id="choose-your-plan">Choose your plan.</h2>
            </div>
          </div></div>
          </div>
          
        </div>
      </div>
      <div class="section tablist-acrobat-section" daa-lh="s2">
        
        <div class="tabs center" id="tabs-acrobat" data-block-status="loaded" daa-lh="b1|tabs"><button class="paddle paddle-left" disabled="" aria-hidden="true" aria-label="Scroll tabs to left" daa-ll="Scroll tabs to left-1--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          <div class="tabList" role="tablist">
            <div class="tab-list-container" data-pretext="undefined">
              
            <button role="tab" class="heading-xs" id="tab-acrobat-1" tabindex="0" aria-selected="true" data-block-id="tabs-acrobat" daa-state="true" daa-ll="tab-acrobat-1" aria-controls="tab-panel-acrobat-1" data-deeplink="undefined">Individuals</button><button role="tab" class="heading-xs" id="tab-acrobat-2" tabindex="-1" aria-selected="false" data-block-id="tabs-acrobat" daa-state="true" daa-ll="tab-acrobat-2" aria-controls="tab-panel-acrobat-2" data-deeplink="undefined">Business</button><button role="tab" class="heading-xs" id="tab-acrobat-3" tabindex="-1" aria-selected="false" data-block-id="tabs-acrobat" daa-state="true" daa-ll="tab-acrobat-3" aria-controls="tab-panel-acrobat-3" data-deeplink="undefined">Students &amp; Teachers</button></div>
          </div><button class="paddle paddle-right" disabled="" aria-hidden="true" aria-label="Scroll tabs to right" daa-ll="Scroll tabs to right-5--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          
          
        <div class="tab-content"><div class="tab-content-container"><div id="tab-panel-acrobat-1" role="tabpanel" class="tabpanel badge-merch-cards" aria-labelledby="tab-acrobat-1" data-block-id="tabs-acrobat" data-nested-lh="t1Ind"><div class="section m-spacing">
        <div><div class="fragment" data-path="/dc-shared/fragments/merch/acrobat/pricing/individual-pill-tabs"><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/merch/acrobat/pricing/acrobat-individual-abm-merch-card-product"><div class="section three-merch-cards static-links product" data-has-placeholders="true" style="--consonant-merch-card-product-heading-xs-height: 45px; --consonant-merch-card-product-body-xxs-height: 18px; --consonant-merch-card-product-body-xs-height: 63px;">
  <merch-card class="merch-card product secure" variant="product" size="" secure-label="Secure transaction" filters="all" types="" daa-lh="b2|t1Ind--merch-card"><h3 id="acrobat-standard" class="card-heading" slot="heading-xs">Acrobat Standard</h3><p id="price---abm---acrobat-standard" class="card-heading" slot="heading-xs"><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="QgYu51CVY2wKyFEqMuvec4N1tc1OaCypeKJjT5n2-Fc" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">14</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span></p><p id="small-tax-incl-label" class="card-heading" slot="body-xxs"><strong></strong></p><p id="annual-paid-monthly" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><div slot="body-xs"><p>Simple PDF tools for editing and converting documents.</p></div><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="QgYu51CVY2wKyFEqMuvec4N1tc1OaCypeKJjT5n2-Fc" data-extra-options="{}" class="con-button blue placeholder-resolved" aria-label="Buy now Acrobat Standard" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=acro_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" daa-ll="Buy now-1--Acrobat Standard" data-modal-id="miniplans-buy-acrobat-standard"><span style="pointer-events: none;">Buy now</span></a></p></div></merch-card>
  <merch-card class="merch-card product secure" variant="product" size="" secure-label="Secure transaction" filters="all" types="" daa-lh="b3|t1Ind--merch-card"><h3 id="acrobat-pro" class="card-heading" slot="heading-xs">Acrobat Pro</h3><p id="price---abm---adobe-acrobat-pro" class="card-heading" slot="heading-xs"><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span></p><p id="small-tax-incl-label-1" class="card-heading" slot="body-xxs"><strong></strong></p><p id="annual-paid-monthly-1" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><div slot="body-xs"><p>The highly secure PDF &amp; e-signature solution with advanced tools to edit, convert, protect, and sign documents.</p></div><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="con-button placeholder-resolved" aria-label="Free trial Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=apcc_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-pro-card" daa-ll="Free trial-1--Acrobat Pro"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="vQmS1H18A6_kPd0tYBgKnp-TQIF0GbT6p8SH8rWcLMs" data-extra-options="{}" class="con-button blue placeholder-resolved" aria-label="Buy now Acrobat Pro" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=apcc_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat-pro" daa-ll="Buy now-2--Acrobat Pro"><span style="pointer-events: none;">Buy now</span></a></p></div></merch-card>
  <merch-card class="merch-card product secure add badge-card" variant="product" size="" badge-background-color="#EDCC2D" badge-color="#000000" badge-text="Best value" secure-label="Secure transaction" filters="all" types="" style="--consonant-merch-card-border-color: #EDCC2D;" daa-lh="b4|t1Ind--merch-card"><h3 id="acrobat-studio" class="card-heading" slot="heading-xs">Acrobat Studio</h3><p id="price---abm---adobe-acrobat-studio" class="card-heading" slot="heading-xs"><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="price" data-wcs-osi="V3W0kzf4e6M2Ht1hP9ZAt3dQNmhuDFrmYmEPlE2SlG0" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">24</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span></p><p id="small-tax-incl-label-2" class="card-heading" slot="body-xxs"><strong></strong></p><p id="annual-paid-monthly-2" class="card-heading" slot="body-xxs"><em>Annual, billed monthly.</em></p><div slot="body-xs"><p>The essential productivity solution with a complete set of PDF tools, PDF Spaces, Acrobat AI Assistant, and Adobe Express Premium.</p></div><div slot="footer"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="x0LkInr7lGkqK8dcTFS_Pc6oHauo_g7N_4yWT_gLn20" data-extra-options="{}" class="con-button placeholder-resolved" aria-label="Free trial Acrobat Studio" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=PA-1806&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-studio-card" daa-ll="Free trial-1--Acrobat Studio"><span style="pointer-events: none;">Free trial</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="V3W0kzf4e6M2Ht1hP9ZAt3dQNmhuDFrmYmEPlE2SlG0" data-extra-options="{}" class="con-button blue placeholder-resolved" aria-label="Buy now Acrobat Studio" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=INDIVIDUAL&amp;pa=PA-1806&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat-studio" daa-ll="Buy now-2--Acrobat Studio"><span style="pointer-events: none;">Buy now</span></a></p></div></merch-card>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div>three merch cards, static links</div>
    </div>
  </div>
</div></div></div>
</div><div class="section table-section">
  <div class="table highlight sticky collapse" role="table" data-block-status="loaded" daa-lh="b5|t1Ind--table">
    <div class="row row-1 row-highlight top-border-transparent" role="row" aria-hidden="true" style="top: 64px;">
      <div data-col-index="1" class="col col-1 col-highlight hidden" role="cell"></div>
      <div data-col-index="2" class="col col-2 col-highlight hidden" role="cell"></div>
      <div data-col-index="3" class="col col-3 col-highlight hidden" role="cell"></div>
      <div data-col-index="4" class="col col-4 col-highlight hidden" role="cell"></div>
    </div>
    <div class="intercept" data-observer-intercept=""></div><div class="row row-2 row-heading active" role="row" style="top: 64px;">
      <div data-col-index="1" class="col col-1 col-heading" role="cell"></div>
      <div data-col-index="2" class="col col-2 col-heading" role="columnheader">
        
      <div class="heading-content"><h3 id="t1-c2-header" class="tracking-header" aria-describedby="" role="paragraph">Acrobat Standard</h3></div><div class="heading-button"><div class="buttons-wrapper"></div></div></div>
      <div data-col-index="3" class="col col-3 col-heading" role="columnheader">
        
      <div class="heading-content"><h3 id="t1-c3-header" class="tracking-header" aria-describedby="" role="paragraph">Acrobat Pro</h3></div><div class="heading-button"><div class="buttons-wrapper"></div></div></div>
      <div data-col-index="4" class="col col-4 col-heading" role="columnheader">
        
      <div class="heading-content"><h3 id="t1-c4-header" class="tracking-header" aria-describedby="" role="paragraph">Acrobat Studio</h3></div><div class="heading-button"><div class="buttons-wrapper"></div></div></div>
    </div>
    <div class="row row-3 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="section-head row row-4" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="true" aria-label="toggle row"></span><span class="table-title-text"><strong>Top features</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="section-row row row-5" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text">Edit text and images in PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-6 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Reorder and delete PDF pages</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-7 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Convert files to PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-8 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Export PDFs to Word, Excel, and PowerPoint files</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-9 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create, fill, sign, and send forms</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-10 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Sign documents, request signatures, and track responses</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-11 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Password-protect PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-12 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Turn scanned documents into editable, searchable PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-13 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Redact sensitive information</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-14 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Compare versions of a PDF</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-15 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add a logo to brand your agreements</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-16 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create web forms from PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-17 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create presentations, flyers, and social content</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-18 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Ask AI to edit, convert, or compress PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-19 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Get summaries, insights, and answers with AI</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-20 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Share multiple documents in a curated PDF Space that preserves original formats</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-21 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add a summary, audio overview, logo, and customizable AI Assistant before sharing</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-22 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Transform documents into presentations and podcast overviews</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="row row-23 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="section-head section-head-collaped hidden row row-24" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="false" aria-label="toggle row"></span><span class="table-title-text"><strong>Edit</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-row row row-25" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/pdf-editor-pdf-files/" daa-ll="Edit text and images-11--Acrobat Studio">Edit text and images in PDFs and automatically adjust formatting</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-26 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Export PDFs to Word, Excel, and PowerPoint files</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-27 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Export PDFs to JPG, TIFF, or PNG image formats</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-28 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add, delete, and organize pages in a PDF</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-29 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/split-pdf-pages/" daa-ll="Split PDFs by extrac-12--Acrobat Studio">Split PDFs by extracting pages</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-30 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add bookmarks, headers, numbering, or watermarks</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-31 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/mobile/acrobat-reader/" daa-ll="Add or edit text and-13--Acrobat Studio">Add or edit text and images on tablet or mobile devices</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-32 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/mobile/acrobat-reader/" daa-ll="Reorder delete or ro-14--Acrobat Studio">Reorder, delete, or rotate PDF pages on iOS or Android tablets</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-33 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Correct errors in scanned text</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-34 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Fix photos of documents to remove backgrounds and adjust perspective</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-35 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Measure the distance, area, and perimeter of objects in PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-36 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add audio, video, and interactive elements to PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-37 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Ask AI to edit, convert, or compress PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-38 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-head section-head-collaped row row-39" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="false" aria-label="toggle row"></span><span class="table-title-text"><strong>Understand</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-row row row-40" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/compare-two-pdf-files/" daa-ll="Compare versions of-15--Acrobat Studio">Compare versions of a PDF</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-41 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Get written and audio summaries of documents with AI</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-42 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Ask AI questions and get answers with citations</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-43 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Uncover multi-document insights with PDF Spaces</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-44 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Use a pre-built or custom AI Assistant to guide next steps in PDF Spaces</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-45 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-head section-head-collaped row row-46" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="false" aria-label="toggle row"></span><span class="table-title-text"><strong>Create</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-row row row-47" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/create-pdf/" daa-ll="Convert documents an-16--Acrobat Studio">Convert documents and images to PDFs</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-48 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/print-to-pdf/" daa-ll="Turn files into PDFs-17--Acrobat Studio">Turn files into PDFs from your printer settings</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-49 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/convert-word-to-pdf/" daa-ll="Create protect and s-18--Acrobat Studio">Create, protect, and send PDFs in Microsoft 365</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-50 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/merge-combine-pdf-files-online/" daa-ll="Combine multiple fil-19--Acrobat Studio">Combine multiple file types into one PDF</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-51 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/convert-html-to-pdf/" daa-ll="Convert web pages in-20--Acrobat Studio">Convert web pages into interactive PDFs</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-52 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Turn Adobe Photoshop, Illustrator, or InDesign files into PDFs from desktop or mobile devices</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-53 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create and export PDFs on mobile devices</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-54 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/convert-jpeg-tiff-scan-to-pdf/" daa-ll="Turn scanned documen-21--Acrobat Studio">Turn scanned documents into editable, searchable PDFs with original fonts</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-55 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create PDFs in Microsoft 365 2016 for Mac</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-56 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Use guided actions to prepare consistent PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-57 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create technical PDFs in Microsoft Project, Visio, or Autodesk AutoCAD</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-58 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add a logo to brand your agreements</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-59 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create web forms from paper documents, Word files, or PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-60 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create new content from multiple file formats</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-61 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create presentations, flyers, and social content from templates</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-62 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Transform documents into presentations and podcast overviews</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-63 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-head section-head-collaped row row-64" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="false" aria-label="toggle row"></span><span class="table-title-text"><strong>Collaborate and Share</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-row row row-65" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/share-pdf-online/" daa-ll="Share a PDF link to-22--Acrobat Studio">Share a PDF link to view, review, or request e-signatures</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-66 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Get notifications when others view, comment, or sign PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-67 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/share-pdf-online/" daa-ll="Collect feedback fro-23--Acrobat Studio">Collect feedback from anyone in one PDF</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-68 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Leave feedback with tools to edit text, highlight, add sticky notes and stamps</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-69 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/electronic-signatures-online-e-signatures/" daa-ll="Collect e signatures-24--Acrobat Studio">Collect e-signatures, track responses, and support certificate signatures</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-70 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/fill-sign-pdf-forms-electronically/" daa-ll="Fill sign and send f-25--Acrobat Studio">Fill, sign, and send forms on desktop and mobile devices</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-71 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">View, interact, and comment on PDFs from desktop, mobile, and web</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-72 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Store, manage, and share files online and access across devices</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-73 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Access, edit, and store files in Box, Dropbox, Google Drive, and Microsoft OneDrive</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-74 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Work with PDFs on Windows touch-enabled devices, including Surface Pro</span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-75 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add interactivity to PDFs with JavaScript</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-76 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Reduce file size or customize settings to optimize PDFs</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-77 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Preflight PDFs to prepare for print production</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-78 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Organize, share, and collaborate in PDF Spaces</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-79 divider">
      <div data-col-index="1" class="col col-1" role="cell">
        <hr>
      </div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-head section-head-collaped row row-80" role="row">
      <div class="section-head-title col col-1 point-cursor" role="columnheader" data-col-index="1" tabindex="0"><span class="icon expand" role="button" aria-expanded="false" aria-label="toggle row"></span><span class="table-title-text"><strong>Protect and Secure</strong></span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"></div>
      <div data-col-index="4" class="col col-4" role="cell"></div>
    </div>
    <div class="hidden section-row row row-81" role="row">
      <div class="section-row-title col col-1" role="rowheader" scope="row" data-col-index="1"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/pdf-file-password-permissions/" daa-ll="Password protect PDF-26--Acrobat Studio">Password-protect PDFs</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-82 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><span class="col-text"><a href="/acrobat/how-to/pdf-file-password-permissions/" daa-ll="Prevent unwanted cop-27--Acrobat Studio">Prevent unwanted copying or editing</a></span></span></div>
      <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-83 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Redact sensitive information</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-84 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Convert and validate PDFs for compliance with iSO standards like PDF/A and PDF/X</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-85 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Create and validate PDFs to meet accessibility standards</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
    <div class="hidden row row-86 section-row" role="row">
      <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">Add Bates numbering to legal documents</span></div>
      <div data-col-index="2" class="col col-2" role="cell"></div>
      <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
      <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
    </div>
  </div>
  <div class="text center l-spacing text-block con-block" data-block-status="loaded" daa-lh="b6|t1Ind--text">
    <div class="foreground">
      <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/pricing/compare-versions/" class="con-button outline" daa-ll="Compare versions of-28--Acrobat Studio">Compare versions of Acrobat</a></div></div>
    </div>
  </div>
</div><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/faq/acrobat-overview-faq"><div class="section">
  <div class="text full-width l-spacing-top m-spacing-bottom text-block con-block max-width-8-desktop center xxl-spacing" data-block-status="loaded" daa-lh="b7|t1Ind--text">
    <div class="foreground">
      <div class="body-m">
        <h2 id="questions-we-have-answers" class="heading-l">Questions? We have answers.</h2>
      </div>
    </div>
  </div>
  <div class="accordion-container con-block max-width-10-desktop" data-block-status="loaded" daa-lh="b8|t1Ind--accordion-conta"><div class="descr-list accordion foreground" id="accordion-1" role="presentation"><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-1" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-1" daa-ll="open-1--What is Adobe Acroba">
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
        <p>You can see how <a href="/acrobat/pricing/compare-versions/" daa-ll="the Acrobat offering-31--What s the differenc">the Acrobat offerings</a> compare.</p>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-3" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-3" daa-ll="open-3--What s included in m">
      What’s included in my Acrobat desktop subscription?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-3" id="accordion-1-content-3" hidden="true" class="descr-details"><div>
        <p>Your subscription to Acrobat includes desktop software, online access, and mobile apps, letting you effortlessly sync files across computers and devices.</p>
        <ul>
          <li><strong>Acrobat desktop software</strong>: Use Acrobat on your desktop, with tools to edit, convert, protect, and sign documents. You can also integrate Acrobat with <a href="https://experienceleague.adobe.com/en/docs/document-cloud-learn/acrobat-learning/integrations/integrate-overview" daa-ll="other productivity t-33--What s included in m">other productivity tools</a>.</li>
          <li><strong>Acrobat online</strong>: Use PDF and e-signature tools in any web browser. Our prebuilt integrations for Microsoft OneDrive, Google Drive, and more make it easy to store and share files online. You can even send documents for e-signature and track responses in real time.</li>
          <li><strong>Acrobat Reader mobile app</strong>: The world’s most trusted PDF reader and editor with more than 635 million installs. View, share, annotate, add comments, and sign documents – all in one app.</li>
          <li><strong>Acrobat Scan mobile app</strong>: Turn your mobile device into a powerful scanner that recognizes text automatically (OCR) and allows you to create, save, and organize your paper documents as digital files.</li>
        </ul>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-4" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-4" daa-ll="open-4--How does a subscript">
      How does a subscription work?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-4" id="accordion-1-content-4" hidden="true" class="descr-details"><div>When you subscribe to Acrobat Studio, Acrobat Pro, or Acrobat Standard, you pay a monthly or annual fee based on the plan you choose. Regular updates will ensure you have the latest features available in Acrobat. You will not need to upgrade your product as long as your subscription is active.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-5" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-5" daa-ll="open-5--Is there a perpetual">
      Is there a perpetual version of Acrobat available?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-5" id="accordion-1-content-5" hidden="true" class="descr-details"><div>No. Adobe discontinued selling perpetual versions of Acrobat after Acrobat 2020. However, if you would like a non-subscription version of Acrobat, <a href="/products/catalog/" daa-ll="Acrobat Pro 2024 des-36--Is there a perpetual">Acrobat Pro 2024 desktop software</a> is a one-time, upfront purchase that provides three years of access to Acrobat desktop. It includes quarterly security updates but <a href="https://helpx.adobe.com/acrobat/faq-acrobat-classic.html" daa-ll="does not include Acr-37--Is there a perpetual">does not include Acrobat feature enhancements</a> or access to Acrobat online services via your web browser and mobile devices.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-6" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-6" daa-ll="open-6--What are the minimum">
      What are the minimum system requirements to run Acrobat?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-6" id="accordion-1-content-6" hidden="true" class="descr-details"><div>See the <a href="https://helpx.adobe.com/acrobat/system-requirements.html" daa-ll="Acrobat system requi-39--What are the minimum">Acrobat system requirements page</a> for information.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-7" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-7" daa-ll="open-7--In what languages is">
      In what languages is Acrobat available?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-7" id="accordion-1-content-7" hidden="true" class="descr-details"><div>See the <a href="https://helpx.adobe.com/acrobat/system-requirements.html" daa-ll="Acrobat system requi-41--In what languages is">Acrobat system requirements page</a> for information.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-8" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-8" daa-ll="open-8--What s the best way">
      What’s the best way for my business to purchase Acrobat subscriptions?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-8" id="accordion-1-content-8" hidden="true" class="descr-details"><div>
        <p>Adobe offers plans for businesses of all sizes. For small businesses, Acrobat Teams subscriptions make it easy to purchase and manage multiple licenses through a centralized admin console. For larger organizations with more complex deployment and administrative needs, volume licensing options are available. <a href="/acrobat/contact/" daa-ll="Request a contact fr-43--What s the best way">Request a contact from Adobe’s sales team</a>, or contact an Adobe Authorized Reseller.</p>
        <p>To learn more, visit the <a href="/acrobat/business/" daa-ll="Acrobat for business-44--What s the best way">Acrobat for business</a> page.</p>
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-9" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-9" daa-ll="open-9--What makes Acrobat a">
      What makes Acrobat a great collaboration tool?
    <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-9" id="accordion-1-content-9" hidden="true" class="descr-details"><div>Acrobat gives you seamless and highly secure sharing, real-time commenting, and PDF tools that make collaborating on documents easier than ever. You can create knowledge hubs in PDF Spaces where the entire team can add files and work together to build strong work. Custom AI agents come in handy to help you guide AI Assistant to provide the direction and output you need to push your project forward.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-10" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-10" daa-ll="open-10--What s the best way">
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
      </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-12" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-12" daa-ll="open-12--How do I streamline">
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
</div><div class="section">
  <div><div class="fragment" data-path="/dc-shared/fragments/acrobat/acrobat-here-to-help-blade"><div class="section" data-has-placeholders="true">
  <div class="text max-width-8-desktop center xxl-spacing l-button l-title text-block con-block" data-block-status="loaded" daa-lh="b9|t1Ind--text">
    <div class="foreground">
      <div>
        <h2 id="questions-about-business-plans" class="heading-xl"><strong>Questions about business plans?</strong></h2>
        <p class="body-l">Contact us for more information about plans and pricing for businesses of all sizes.</p>
        <div class="cta-container"><p class="body-l action-area"><a href="/acrobat/contact/" aria-label="Contact Sales Acrobat" class="con-button blue" daa-ll="Contact Sales-49--Questions about busi">Contact Sales</a> <a href="tel:phone business geo" daa-ll="800 915 9430-50--Questions about busi">800-915-9430</a></p></div>
      </div>
    </div>
  </div>
</div></div></div>
</div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>acrobat, 1</div>
          </div>
          <div>
            <div>style</div>
            <div><strong>m spacing</strong></div>
          </div>
        </div>
      </div></div><div id="tab-panel-acrobat-2" role="tabpanel" class="tabpanel" aria-labelledby="tab-acrobat-2" data-block-id="tabs-acrobat" hidden="true" data-nested-lh="t2Bus"><div class="section m-spacing">
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>acrobat, 2</div>
          </div>
          <div>
            <div>style</div>
            <div><strong>m spacing</strong></div>
          </div>
          <div>
            <div>link</div>
            <div>/acrobat/pricing/business</div>
          </div>
        </div>
      </div></div><div id="tab-panel-acrobat-3" role="tabpanel" class="tabpanel" aria-labelledby="tab-acrobat-3" data-block-id="tabs-acrobat" hidden="true" data-nested-lh="t3Stu"><div class="section m-spacing">
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>acrobat, 3</div>
          </div>
          <div>
            <div>style</div>
            <div><strong>m spacing</strong></div>
          </div>
          <div>
            <div>link</div>
            <div>/acrobat/pricing/students</div>
          </div>
        </div>
      </div></div></div></div></div>
      </div>
      
      
      
      <div class="section" daa-lh="s3">
        
      </div>
    </main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div id="page-load-ok-milo" style="display: none;"></div></body></html>