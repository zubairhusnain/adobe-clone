<?php
require_once dirname(__DIR__, 2) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Adobe Acrobat | Create and edit PDFs with AI insights</title>
    <link rel="canonical" href="/acrobat/">
    <meta name="description" content="Adobe Acrobat covers all of your PDF needs. Use AI insights and trusted PDF tools to create and collaborate.">
    <meta property="og:title" content="Adobe Acrobat | Create and edit PDFs with AI insights">
    <meta property="og:description" content="Adobe Acrobat covers all of your PDF needs. Use AI insights and trusted PDF tools to create and collaborate.">
    <meta property="og:image" content="acrobat/media_14da7a4ea109e868041eecca664e1538d41f5beb4.png?width=1200&amp;#x26;format=pjpg&amp;#x26;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_14da7a4ea109e868041eecca664e1538d41f5beb4.png?width=1200&amp;#x26;format=pjpg&amp;#x26;optimize=medium">
    <meta property="og:image:alt" content="https://images-tv.adobe.com/videoBackgrounds/acrobat/2026_Q2_AcrobatOverviewMarquee_1920x1120_1.mp4#_autoplay1 | Acrobat Overview Marquee">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe Acrobat | Create and edit PDFs with AI insights">
    <meta name="twitter:description" content="Adobe Acrobat covers all of your PDF needs. Use AI insights and trusted PDF tools to create and collaborate.">
    <meta name="twitter:image" content="acrobat/media_14da7a4ea109e868041eecca664e1538d41f5beb4.png?width=1200&amp;#x26;format=pjpg&amp;#x26;optimize=medium">
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
    <meta name="app-prompt" content="on">
    <meta name="app-prompt-entitlement" content="acrobat-paid-usage">
    <meta name="app-prompt-path" content="https://www.adobe.com/dc-shared/fragments/acrobat/acrobat-product-pep-card" data-localized="true">
    <meta name="product-entry-cta" content="on">
    <meta name="personalization" content="acrobat.json" data-localized="true">
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
    let link = document.head.querySelector(`link[href="/$%7Bhref%7D/"]`);
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/martech/helpers.js"><link rel="preload" as="fetch" crossorigin="anonymous" href="/acrobat.json"><link rel="preload" as="fetch" crossorigin="anonymous" href="/federal/assets/data/mep-xlg-tags.json?sheet=prod"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/adobetv/adobetv.js"><link rel="stylesheet" href="/libs/blocks/adobetv/adobetv.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><link rel="stylesheet" href="/libs/features/icons/icons.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/mobile-app-banner/mobile-app-banner.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Adobe Acrobat","item":"/acrobat/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/notification/notification.js"><link rel="stylesheet" href="/libs/blocks/notification/notification.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/carousel/carousel.css"><link rel="stylesheet" href="/libs/blocks/editorial-card/editorial-card.css"><link rel="stylesheet" href="/libs/styles/rounded-corners.css"><link rel="stylesheet" href="/libs/mep/dc-brick-block/brick/brick.css"></head>
  <body>
    <header class="global-navigation has-breadcrumbs ready local-nav" daa-im="true" daa-lh="gnav|localnav-acrobat|desktop|acrobat" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav feds-topnav--overflowing" aria-label="Main">
        <div class="feds-brand-container">
          <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="dialog" aria-label="Navigation menu" aria-controls="feds-popup-1" data-feds-preventautoclose="">
      </button>
          <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
        <span class="feds-brand-image brand-image-only"><img loading="lazy" src="/federal/assets/svgs/adobe-logo.svg" alt="Adobe, Inc."></span>
        
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu" daa-lh="PDFs E signatures">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="PDFs E signatures-1" daa-lh="header|Open">
              PDFs &amp; E-signatures
            </button>
            <div class="feds-popup loading" aria-hidden="true" style="">
    <div class="feds-menu-container">
      <div class="feds-menu-content">
        
  <div class="feds-menu-column">
    <div class="feds-menu-section">
      <div class="feds-menu-headline">
      <div class="first-headline-one"></div>
      <div class="first-headline-two"></div>
    </div>
    <div class="feds-menu-items">
      <a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a>
      <div class="feds-cta-wrapper"></div>
    </div>
    
    </div>
  </div>
  
  <div class="feds-menu-column">
    <div class="feds-menu-section">
      <div class="feds-menu-headline"></div>
     <div class="feds-menu-items">
       <a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a>
     </div>
    
    </div>
  </div>
  
  <div class="feds-menu-column">
    <div class="feds-menu-section">
      <div class="feds-menu-headline"></div>
     <div class="feds-menu-items">
       <a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            <div class="feds-navLink-description"></div>
          </div>
        </a>
     </div>
     <div style="padding-top: 29px;"></div>
     <div class="feds-menu-headline"></div>
     <div class="feds-menu-headline small"></div>
     <div class="feds-menu-items">
       <a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            
          </div>
        </a><a href="" class="feds-navLink">
          <div class="feds-navLink-content">
            <div class="feds-navLink-title"></div>
            
          </div>
        </a>
     </div>
    </div>
  </div>
  
  <div class="feds-menu-column">
    <div class="feds-menu-section">
      <div class="feds-promo-wrapper">
       <div class="feds-promo">
       </div>
     </div>
    </div>
  </div>
  
      </div>
    </div>
    <div class="feds-crossCloudMenu-wrapper">
      <div class="feds-crossCloudMenu">
        <div>
          <ul>
            
              <li class="feds-crossCloudMenu-item">
                <a class="feds-navLink"></a>
              </li>
              <li class="feds-crossCloudMenu-item">
                <a class="feds-navLink"></a>
              </li>
              <li class="feds-crossCloudMenu-item">
                <a class="feds-navLink"></a>
              </li>
              <li class="feds-crossCloudMenu-item">
                <a class="feds-navLink"></a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div></section><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Adobe Acrobat-2" role="link" aria-disabled="true" aria-current="page" tabindex="0">Adobe Acrobat</a>
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
        <div class="feds-cta-wrapper feds-product-entry-cta">
      <a href="https://acrobat.adobe.com/?x_api_client_id=acom_nav" class="feds-cta feds-cta--secondary" daa-ll="Go to Acrobat">Go to Acrobat</a>
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
                <li aria-current="page"><span aria-hidden="true">/</span>Adobe Acrobat</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Adobe Acrobat_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Adobe Acrobat_localNav|open">Adobe Acrobat</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Adobe Acrobat-2" role="link" aria-disabled="true" aria-current="page" tabindex="-1" data-title="Adobe Acrobat" aria-hidden="true">Overview</a>
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
              <a href="/acrobat/free-trial-download/" class="feds-navLink" daa-ll="Free trial-8" data-title="Free trial">Free trial</a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/" aria-label="Buy now Adobe Acrobat" class="feds-cta feds-cta--primary" daa-ll="Buy now-9" data-title="Buy now">Buy now</a>
    </div>
            </div></div><a href="/acrobat/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main>
      <div class="section" data-has-placeholders="true">
        <div class="hero-marquee bg-bottom-tablet bg-bottom-mobile static-links media-cover con-block has-bg" data-block-status="loaded" data-block="" style="background: rgb(248, 248, 248);">
          
          <div class="foreground cols-2">
            <div class="copy"><div class="main-copy l-lockup l-button">
              <h1 id="do-more-with-acrobat" class="heading-xxl">Do more with Acrobat.</h1>
            </div><div class="row-text con-block order-0-desktop norm">
            
            <div class="row-wrapper">
              <p class="body-m">With <strong>Adobe Acrobat Pro and AI Assistant</strong>, you have trusted tools to edit and sign PDFs, generate presentations, and understand your docs faster.</p>
              <p class="body-m"><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ,bKwlW94xSVU_ykn4WHDjS1eiZrXopDo8VD7UhGAKYBI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">24</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">98</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>  for the annual, billed monthly plan. Monthly plans also available.</p>
            </div>
          </div><div class="row-supplemental con-block norm body-s">
            
            <div class="row-wrapper"><em>Fee applies of half your remaining annual commitment if you cancel 14 days after your free trial ends.</em> <span class="icon icon-info milo-tooltip top margin-inline-start" data-tooltip="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." tabindex="0" aria-label="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." role="button" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
          </div><div class="row-text con-block order-2-desktop norm">
            
            <div class="row-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="email" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ,bKwlW94xSVU_ykn4WHDjS1eiZrXopDo8VD7UhGAKYBI" data-extra-options="{}" class="con-button blue button-xl placeholder-resolved" aria-label="Free trial Acrobat Pro and AI Assistant" href="https://commerce.adobe.com/store/email?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;items%5B1%5D%5Bid%5D=400D8CAE36D691335F1F758CBB553C62&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en"><span style="pointer-events: none;">Free trial</span></a> <a href="/acrobat/pricing/" aria-label="See plans and pricing Adobe Acrobat" class="con-button outline button-xl">See plans and pricing</a></p></div>
          </div></div>
            <div class="asset">
              
    
  
            </div>
          </div>
          
          
          
          
        <div class="foreground-media"><div class="video-container video-holder" style="--media-cover-position: center top;"><video playsinline="" poster="dc-shared/media_1ca63882eb1099deec0eaca111885dd866e2c1d55.png?width=2000&amp;format=webply&amp;optimize=medium" autoplay="" muted="" data-video-source="https://images-tv.adobe.com/videoBackgrounds/acrobat/2026_Q2_AcrobatOverviewMarquee_1920x1120_1.mp4#_autoplay1"><source src="https://images-tv.adobe.com/videoBackgrounds/acrobat/2026_Q2_AcrobatOverviewMarquee_1920x1120_1.mp4#_autoplay1" type="video/mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion" aria-label="Pause motion" role="button" tabindex="0" aria-pressed="true" video-index="1">
        <div class="offset-filler is-playing">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div></div></div>
      </div>
      <div class="section">
        <div class="mobile-app-banner product-adobeacrobatreader" data-block-status="loaded" data-block="">
          <div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="section">
        <div><div class="fragment" data-path="/dc-shared/fragments/promo-banners/acrobat-studio"><div class="section show-sticky-section"></div></div></div>
      </div>
      <div class="section">
        <div class="text max-width-12-desktop center xl-spacing-top m-spacing-bottom text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div>
              <h2 id="trusted-pdf-tools-enhanced-with-ai" class="heading-xxl">Trusted PDF tools, enhanced with AI.</h2>
              <p class="body-l">Work smarter with the essential PDF toolkit to edit, convert, and sign your files using AI Assistant, so you can complete more in less time.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        
        <div class="carousel show-2 container m-gap" data-block-status="loaded" data-block=""><div class="carousel-wrapper"><div class="aria-live-container" aria-live="polite"></div><div class="carousel-slides"><div class="section carousel-slide active" data-index="0" aria-hidden="false">
        <div class="editorial-card l-rounded-corners-image no-border media-standard con-block m-lockup no-bg" data-block-status="loaded" data-block="">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1c7014e1d2d2f97a5960b6d9922adf5a51b53209e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1c7014e1d2d2f97a5960b6d9922adf5a51b53209e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1c7014e1d2d2f97a5960b6d9922adf5a51b53209e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_1c7014e1d2d2f97a5960b6d9922adf5a51b53209e.png?width=750&amp;format=png&amp;optimize=medium" width="1168" height="876">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="edit-pdfs-easily" class="heading-m">Edit PDFs easily.</h3>
              <p class="body-m">Rephrase text, add watermarks, and organize pages in your PDFs. AI Assistant helps you with everyday document tasks so you can get back to work faster.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>Carousel show2</div>
          </div>
        </div>
      </div><div class="section carousel-slide" data-index="1" aria-hidden="false">
        <div class="editorial-card l-rounded-corners-image no-border media-standard con-block m-lockup no-bg" data-block-status="loaded" data-block="">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1cff4e7ea1c90e575787f446169021b5c99cf8667.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1cff4e7ea1c90e575787f446169021b5c99cf8667.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1cff4e7ea1c90e575787f446169021b5c99cf8667.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_1cff4e7ea1c90e575787f446169021b5c99cf8667.png?width=750&amp;format=png&amp;optimize=medium" width="1168" height="876">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="create-and-convert-pdfs-quickly" class="heading-m">Create and convert PDFs quickly.</h3>
              <p class="body-m">Go from Word, PowerPoint, Excel, or image to PDF and back again. AI Assistant can even do it for you.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>Carousel show2</div>
          </div>
        </div>
      </div><div class="section carousel-slide" data-index="2" aria-hidden="true">
        <div class="editorial-card l-rounded-corners-image no-border media-standard con-block m-lockup no-bg" data-block-status="loaded" data-block="">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1924e1866ad0e7e46f7e5b21386c2366a5a2c41c4.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1924e1866ad0e7e46f7e5b21386c2366a5a2c41c4.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1924e1866ad0e7e46f7e5b21386c2366a5a2c41c4.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_1924e1866ad0e7e46f7e5b21386c2366a5a2c41c4.png?width=750&amp;format=png&amp;optimize=medium" width="1168" height="876">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="sign-in-a-snap" class="heading-m">Sign in a snap.</h3>
              <p class="body-m">Request e-signatures and track progress in real time. You can also sign any PDF with a click or ask AI Assistant.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>Carousel show2</div>
          </div>
        </div>
      </div></div></div><div class="carousel-button-container"><button class="carousel-button carousel-previous is-delayed" aria-label="Previous slide, slide 1 of 3" data-toggle="previous"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
<title>Previous slide arrow</title>
<path d="M19.2214 10.8918C19.3516 10.5773 19.3516 10.2226 19.2214 9.90808C19.1562 9.75098 19.0621 9.60895 18.9435 9.49041L12.9241 3.47092C12.4226 2.96819 11.6076 2.96819 11.1061 3.47092C10.604 3.97239 10.604 4.78743 11.1061 5.2889L14.9312 9.11399H2.4314C1.72109 9.11399 1.146 9.69036 1.146 10.4C1.146 11.1097 1.72109 11.6861 2.4314 11.6861H14.9312L11.1061 15.5112C10.604 16.0126 10.604 16.8277 11.1061 17.3291C11.3568 17.5805 11.6863 17.7062 12.0151 17.7062C12.3439 17.7062 12.6733 17.5805 12.9241 17.3291L18.9436 11.3097C19.0622 11.1911 19.1562 11.0491 19.2214 10.8918Z"></path>
</svg></button><button class="carousel-button carousel-next is-delayed" aria-label="Next slide" data-toggle="next"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
<title>Next slide arrow</title>
<path d="M19.2214 10.8918C19.3516 10.5773 19.3516 10.2226 19.2214 9.90808C19.1562 9.75098 19.0621 9.60895 18.9435 9.49041L12.9241 3.47092C12.4226 2.96819 11.6076 2.96819 11.1061 3.47092C10.604 3.97239 10.604 4.78743 11.1061 5.2889L14.9312 9.11399H2.4314C1.72109 9.11399 1.146 9.69036 1.146 10.4C1.146 11.1097 1.72109 11.6861 2.4314 11.6861H14.9312L11.1061 15.5112C10.604 16.0126 10.604 16.8277 11.1061 17.3291C11.3568 17.5805 11.6863 17.7062 12.0151 17.7062C12.3439 17.7062 12.6733 17.5805 12.9241 17.3291L18.9436 11.3097C19.0622 11.1911 19.1562 11.0491 19.2214 10.8918Z"></path>
</svg></button><div class="carousel-controls is-delayed"><ul class="carousel-indicators"><li class="carousel-indicator active" data-index="0" aria-current="location"></li><li class="carousel-indicator" data-index="1"></li><li class="carousel-indicator" data-index="2"></li></ul></div></div></div>
      </div>
      
      
      
      <div class="section">
        
      </div>
      <div class="section">
        <div class="text xl-button center l-spacing-bottom text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/features/" class="con-button outline">See all features</a></div></div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="text max-width-12-desktop center l-spacing-top m-spacing-bottom text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div>
              <h2 id="unlock-next-level-productivity-with-ai-assistant" class="heading-xxl">Unlock next-level productivity with AI Assistant.</h2>
              <p class="body-l">Bring all your project files, PDFs, and links together into a shareable, interactive PDF Space for smarter and faster collaboration.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section two-up">
        <div class="editorial-card l-rounded-corners-image no-border media-standard con-block m-lockup equal-height no-bg" data-block-status="loaded" data-block="">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1fa60332b1cd78cbc3fe719106757789c34ab2275.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1fa60332b1cd78cbc3fe719106757789c34ab2275.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1fa60332b1cd78cbc3fe719106757789c34ab2275.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_1fa60332b1cd78cbc3fe719106757789c34ab2275.png?width=750&amp;format=png&amp;optimize=medium" width="1168" height="876">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="less-busywork-more-meaningful-work" class="heading-m">Less busywork. More meaningful work.</h3>
              <p class="body-m">Ask AI Assistant to turn insights into action. Generate summaries and key insights with precise citations, next steps, and more.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card l-rounded-corners-image no-border media-standard con-block m-lockup equal-height no-bg" data-block-status="loaded" data-block="">
          
          <div class="media-area">
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_18c12875d396adcbdc3ddc5451a9bd840178c7c71.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_18c12875d396adcbdc3ddc5451a9bd840178c7c71.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_18c12875d396adcbdc3ddc5451a9bd840178c7c71.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_18c12875d396adcbdc3ddc5451a9bd840178c7c71.png?width=750&amp;format=png&amp;optimize=medium" width="1168" height="876">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="share-pdfs-as-interactive-experiences" class="heading-m">Share PDFs as interactive experiences.</h3>
              <p class="body-m">Turn proposals or presentations into a shareable PDF Space with a custom AI Assistant to guide recipients through your content.</p>
            </div>
          </div>
          
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>two up</strong></div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="text xl-button center l-spacing-bottom text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div class="cta-container"><div class="body-m action-area"><a href="/acrobat/generative-ai-pdf/" class="con-button outline">Learn about AI features</a></div></div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="text max-width-12-desktop center l-spacing-top m-spacing-bottom text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div>
              <h2 id="create-fresh-content-fast" class="heading-xxl">Create fresh content fast.</h2>
              <p class="body-l">Transform your files into polished presentations, social media posts, and more with Adobe Express tools included in Acrobat Studio.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section masonry-layout masonry-up" data-status="decorated" data-idx="14">
        <div class="brick light rounded-corners xl-heading button-fill media-visible-mobile-tablet grid-full-width">
          <div>
            <div>#F6F6F6</div>
          </div>
          <div>
            <div>
              <h3 id="generate-presentations-in-a-few-clicks">Generate presentations in a few clicks.</h3>
              <p>Turn multiple files into a presentation with AI-generated outlines, professional templates, and smart editing tools so you can share big ideas faster.</p>
            </div>
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_17ea34bbe4b7e96781185ae6aaa4296ff200f2dd9.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_17ea34bbe4b7e96781185ae6aaa4296ff200f2dd9.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_17ea34bbe4b7e96781185ae6aaa4296ff200f2dd9.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/dc-shared/media_17ea34bbe4b7e96781185ae6aaa4296ff200f2dd9.png?width=750&amp;format=png&amp;optimize=medium" width="1200" height="1000">
              </picture>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>masonry</div>
            <div>full-width</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/dc-shared/fragments/merch-cards/compare-acrobat-plans/">https://main--da-dc--adobecom.aem.page/dc-shared/fragments/merch-cards/compare-acrobat-plans</a></p>
        <div class="section-metadata">
          <div>
            <div>style</div>
            <div><strong>m-spacing-top</strong></div>
          </div>
          <div>
            <div>background</div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="notification dark ribbon center no-closure">
          <div>
            <div>#000000</div>
          </div>
          <div>
            <div>
              <p><a href="/dc-shared/assets/images/shared-images/tools/icon-ai-assistant-white.svg">https://main--da-dc--adobecom.aem.page/dc-shared/assets/images/shared-images/tools/icon-ai-assistant-white.svg</a></p>
              <p>Cut the time you spend on documents by&nbsp;75% on average&nbsp;with Acrobat AI Assistant.</p>
              <p><em><a href="https://blog.adobe.com/en/publish/2024/06/12/pfeiffer-report-acrobat-ai-assistant-helps-knowledge-workers-complete-document-related-tasks-4x-faster-average">Learn more</a></em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="text full-width large m-spacing-bottom l-spacing-top">
          <div>
            <div>
              <h2 id="your-acrobat-subscription-comes-with-more-than-great-tools">Your Acrobat subscription comes with more than great tools.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/dc-shared/fragments/acrobat/acrobat-subscription-features/">https://main--da-dc--adobecom.aem.page/dc-shared/fragments/acrobat/acrobat-subscription-features</a></p>
      </div>
      <div class="section" data-status="pending">
        <div class="text full-width small xl-spacing-top">
          <div>
            <div>#F7F7F7</div>
          </div>
          <div>
            <div>
              <h2 id="acrobat-its-how-over-5-million-companies-get-work-done">Acrobat. It’s how over 5 million companies get work done.</h2>
            </div>
          </div>
        </div>
        <div class="text center no-spacing-top xxl-spacing-bottom">
          <div>
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_18dd1f683230ea96109bfc479ced59855fa664d04.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_18dd1f683230ea96109bfc479ced59855fa664d04.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_18dd1f683230ea96109bfc479ced59855fa664d04.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Logo display of companies that use Acrobat, including Puma, Tesla, AstraZeneca, HSBC, Duke University, Meta, Walmart, and Amazon." src="/dc-shared/media_18dd1f683230ea96109bfc479ced59855fa664d04.png?width=750&amp;format=png&amp;optimize=medium" width="1012" height="491">
              </picture>
            </div>
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1173fc56c6e0aa5cc349371b9d0910aa7e0b486c4.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1173fc56c6e0aa5cc349371b9d0910aa7e0b486c4.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1173fc56c6e0aa5cc349371b9d0910aa7e0b486c4.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Logo display of companies that use Acrobat, including Puma, Tesla, AstraZeneca, HSBC, Duke University, Meta, Walmart, and Amazon." src="/dc-shared/media_1173fc56c6e0aa5cc349371b9d0910aa7e0b486c4.png?width=750&amp;format=png&amp;optimize=medium" width="1486" height="281">
              </picture>
            </div>
            <div>
              <picture>
                <source type="image/webp" srcset="/dc-shared/media_1753ec2cd55cf964e163d491f062a5b63f45f48a3.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/dc-shared/media_1753ec2cd55cf964e163d491f062a5b63f45f48a3.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/dc-shared/media_1753ec2cd55cf964e163d491f062a5b63f45f48a3.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Logo display of companies that use Acrobat, including Puma, Tesla, AstraZeneca, HSBC, Duke University, Meta, Walmart, and Amazon." src="/dc-shared/media_1753ec2cd55cf964e163d491f062a5b63f45f48a3.png?width=750&amp;format=png&amp;optimize=medium" width="2724" height="112">
              </picture>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>background</div>
            <div><strong>#f7f7f7</strong></div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/dc-shared/fragments/faq/acrobat-overview-faq/">https://main--da-dc--adobecom.aem.page/dc-shared/fragments/faq/acrobat-overview-faq</a></p>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/dc-shared/fragments/acrobat/get-acrobat-support/">https://main--da-dc--adobecom.aem.page/dc-shared/fragments/acrobat/get-acrobat-support</a></p>
      </div>
      <div class="section" data-status="pending">
        
      </div>
    <div class="section promo-sticky-section hide-sticky-section sticky-bottom">
  <div class="notification ribbon space-between inline dark xl-icon delay con-block" style="background: rgb(0, 11, 29);" data-notification-id="notification-1779409374158-rn0sby1gl" data-block-status="loaded" aria-label="Adobe Acrobat" role="region" data-block="">
    
    <div class="foreground container">
      <div class="text">
        <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro-64.svg" alt=""></picture></p><div class="copy-wrap"><h2 id="adobe-acrobat" class="heading-m">Adobe Acrobat</h2><p class="body-m">Browse all <a href="/acrobat/pricing/" class="static">Acrobat plans</a>.</p></div>
        
        
        <p class="body-m action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="V3W0kzf4e6M2Ht1hP9ZAt3dQNmhuDFrmYmEPlE2SlG0" data-extra-options="{}" class="con-button loading-entitlements placeholder-pending outline button-l" aria-label="Buy now Acrobat Studio" href=""><span style="pointer-events: none;">Buy now</span></a> <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="x0LkInr7lGkqK8dcTFS_Pc6oHauo_g7N_4yWT_gLn20" data-extra-options="{}" class="con-button blue loading-entitlements placeholder-pending button-l" aria-label="Free trial Acrobat Studio" href=""><span style="pointer-events: none;">Free trial</span></a></p>
      </div>
    </div>
  <button aria-label="Close Promotional Banner" class="close"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
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
    <footer></footer>
  

<div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409374158-rn0sby1gl"></div></body></html>