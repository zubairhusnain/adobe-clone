<?php
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>PDF online: From the creator of PDFs | Adobe Acrobat</title>
    <link rel="canonical" href="/acrobat/online/">
    <meta name="description" content="Do your best work online with Adobe Acrobat PDF online services. Use PDF tools in any browser.">
    <meta property="og:title" content="PDF online: From the creator of PDFs | Adobe Acrobat">
    <meta property="og:description" content="Do your best work online with Adobe Acrobat PDF online services. Use PDF tools in any browser.">
    <meta property="og:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PDF online: From the creator of PDFs | Adobe Acrobat">
    <meta name="twitter:description" content="Do your best work online with Adobe Acrobat PDF online services. Use PDF tools in any browser.">
    <meta name="twitter:image" content="acrobat/media_19ffda7c7a354052e78ff74137a88658a7a3fd4b5.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="jarvis-chat" content="off">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="adobe-home-redirect" content="on">
    <meta name="checkout-workflow-step" content="commitment">
<meta name="footer-source" content="https://www.adobe.com/dc-shared/navigation/footer/footer-thin" data-localized="true">
    <meta name="product-entry-cta" content="on">
    <meta name="-chromeext" content="https://www.adobe.com/dc-shared/fragments/shared-fragments/browser-extension/browser-extension-chrome" data-localized="true">
    <meta name="-edgeext" content="https://www.adobe.com/dc-shared/fragments/shared-fragments/browser-extension/browser-extension-edge" data-localized="true">
    <meta name="comment-threshold" content="5">
    <meta name="app-prompt" content="on">
    <meta name="app-prompt-entitlement" content="acrobat-web-usage">
    <meta name="app-prompt-path" content="https://www.adobe.com/dc-shared/fragments/acrobat/acrobat-online-pep-card" data-localized="true">
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><link rel="stylesheet" href="/libs/blocks/editorial-card/editorial-card.css"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="/libs/styles/rounded-corners.css"><link rel="stylesheet" href="/libs/styles/iconography.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Acrobat","item":"/acrobat/"},{"@type":"ListItem","position":3,"name":"Online Tools","item":"/acrobat/online/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"></head>
  <body>
    <header class="global-navigation has-breadcrumbs ready local-nav" daa-im="true" daa-lh="gnav|localnav-acrobat-frictionless" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
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
  </div></div></section><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Tools-2" role="link" aria-disabled="true" aria-current="page" tabindex="0">Tools</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Convert-3" daa-lh="header|Open">
              Convert
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-to-word/" daa-ll="Convert PDF to Word-1" class="feds-navLink">Convert PDF to Word</a></li>
    <li><a href="/acrobat/online/pdf-to-jpg/" daa-ll="Convert PDF to JPG-2" class="feds-navLink">Convert PDF to JPG</a></li>
    <li><a href="/acrobat/online/pdf-to-png/" daa-ll="Convert PDF to PNG-3" class="feds-navLink">Convert PDF to PNG</a></li>
    <li><a href="/acrobat/online/pdf-to-excel/" daa-ll="Convert PDF to Excel-4" class="feds-navLink">Convert PDF to Excel</a></li>
    <li><a href="/acrobat/online/pdf-to-ppt/" daa-ll="Convert PDF to PPT-5" class="feds-navLink">Convert PDF to PPT</a></li>
    <li><a href="/acrobat/online/word-to-pdf/" daa-ll="Convert Word to PDF-6" class="feds-navLink">Convert Word to PDF</a></li>
    <li><a href="/acrobat/online/jpg-to-pdf/" daa-ll="Convert JPG to PDF-7" class="feds-navLink">Convert JPG to PDF</a></li>
    <li><a href="/acrobat/online/png-to-pdf/" daa-ll="Convert PNG to PDF-8" class="feds-navLink">Convert PNG to PDF</a></li>
    <li><a href="https://acrobat.adobe.com/heic-to-pdf" data-has-dnt="true" daa-ll="Convert HEIC to PDF-9" class="feds-navLink">Convert HEIC to PDF</a></li>
    <li><a href="/acrobat/online/excel-to-pdf/" daa-ll="Convert Excel to PDF-10" class="feds-navLink">Convert Excel to PDF</a></li>
    <li><a href="/acrobat/online/ppt-to-pdf/" daa-ll="Convert PPT to PDF-11" class="feds-navLink">Convert PPT to PDF</a></li>
    <li><a href="/acrobat/online/convert-pdf/" daa-ll="PDF converter-12" class="feds-navLink">PDF converter</a></li>
    <li><a href="/acrobat/online/ocr-pdf/" daa-ll="OCR PDF-13" class="feds-navLink">OCR PDF</a></li>
    <li><a href="/acrobat/online/compress-pdf/" daa-ll="Compress-14" class="feds-navLink">Compress</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Edit-4" daa-lh="header|Open">
              Edit
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-editor/" daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a></li>
    <li><a href="/acrobat/online/merge-pdf/" daa-ll="Merge PDFs-2" class="feds-navLink">Merge PDFs</a></li>
    <li><a href="/acrobat/online/split-pdf/" daa-ll="Split PDF-3" class="feds-navLink">Split PDF</a></li>
    <li><a href="/acrobat/online/crop-pdf/" daa-ll="Crop PDF-4" class="feds-navLink">Crop PDF</a></li>
    <li><a href="/acrobat/online/delete-pdf-pages/" daa-ll="Delete PDF pages-5" class="feds-navLink">Delete PDF pages</a></li>
    <li><a href="/acrobat/online/rotate-pdf/" daa-ll="Rotate PDF pages-6" class="feds-navLink">Rotate PDF pages</a></li>
    <li><a href="/acrobat/online/rearrange-pdf/" daa-ll="Reorder PDF pages-7" class="feds-navLink">Reorder PDF pages</a></li>
    <li><a href="/acrobat/online/extract-pdf-pages/" daa-ll="Extract PDF pages-8" class="feds-navLink">Extract PDF pages</a></li>
    <li><a href="/acrobat/online/add-pages-to-pdf/" daa-ll="Insert PDF pages-9" class="feds-navLink">Insert PDF pages</a></li>
    <li><a href="/acrobat/online/add-pdf-page-numbers/" daa-ll="Number PDF pages-10" class="feds-navLink">Number PDF pages</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Sign Protect-5" daa-lh="header|Open">
              Sign &amp; Protect
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/sign-pdf/" daa-ll="Fill Sign-1" class="feds-navLink">Fill &amp; Sign</a></li>
    <li><a href="/acrobat/online/request-signature/" daa-ll="Request e signatures-2" class="feds-navLink">Request e-signatures</a></li>
    <li><a href="/acrobat/online/password-protect-pdf/" daa-ll="Protect PDF-3" class="feds-navLink">Protect PDF</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Generative AI-6" daa-lh="header|Open">
              Generative AI
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/ai-chat-pdf/" daa-ll="Chat with PDF-1" class="feds-navLink">Chat with PDF</a></li>
    <li><a href="/acrobat/online/ai-summary-generator/" daa-ll="Summary Generator-2" class="feds-navLink">Summary Generator</a></li>
    <li><a href="/acrobat/online/pdf-ai/" daa-ll="PDF AI-3" class="feds-navLink">PDF AI</a></li>
    <li><a href="/express/create/ai/presentation/" daa-ll="Generate Presentation-4" class="feds-navLink">Generate Presentation</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/online/pricing/" class="feds-navLink" daa-ll="Buy now-7">Buy now</a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/free-trial-download/" class="feds-cta feds-cta--primary" daa-ll="Free trial-8">Free trial</a>
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
                <li><span aria-hidden="true">/</span><a href="/acrobat/">Acrobat</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Online Tools</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Tools_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Tools_localNav|open">Tools</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Tools-2" role="link" aria-disabled="true" aria-current="page" tabindex="-1" data-title="Tools" aria-hidden="true">Overview</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Convert-3" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Convert
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-to-word/" daa-ll="Convert PDF to Word-1" class="feds-navLink">Convert PDF to Word</a></li>
    <li><a href="/acrobat/online/pdf-to-jpg/" daa-ll="Convert PDF to JPG-2" class="feds-navLink">Convert PDF to JPG</a></li>
    <li><a href="/acrobat/online/pdf-to-png/" daa-ll="Convert PDF to PNG-3" class="feds-navLink">Convert PDF to PNG</a></li>
    <li><a href="/acrobat/online/pdf-to-excel/" daa-ll="Convert PDF to Excel-4" class="feds-navLink">Convert PDF to Excel</a></li>
    <li><a href="/acrobat/online/pdf-to-ppt/" daa-ll="Convert PDF to PPT-5" class="feds-navLink">Convert PDF to PPT</a></li>
    <li><a href="/acrobat/online/word-to-pdf/" daa-ll="Convert Word to PDF-6" class="feds-navLink">Convert Word to PDF</a></li>
    <li><a href="/acrobat/online/jpg-to-pdf/" daa-ll="Convert JPG to PDF-7" class="feds-navLink">Convert JPG to PDF</a></li>
    <li><a href="/acrobat/online/png-to-pdf/" daa-ll="Convert PNG to PDF-8" class="feds-navLink">Convert PNG to PDF</a></li>
    <li><a href="https://acrobat.adobe.com/heic-to-pdf" data-has-dnt="true" daa-ll="Convert HEIC to PDF-9" class="feds-navLink">Convert HEIC to PDF</a></li>
    <li><a href="/acrobat/online/excel-to-pdf/" daa-ll="Convert Excel to PDF-10" class="feds-navLink">Convert Excel to PDF</a></li>
    <li><a href="/acrobat/online/ppt-to-pdf/" daa-ll="Convert PPT to PDF-11" class="feds-navLink">Convert PPT to PDF</a></li>
    <li><a href="/acrobat/online/convert-pdf/" daa-ll="PDF converter-12" class="feds-navLink">PDF converter</a></li>
    <li><a href="/acrobat/online/ocr-pdf/" daa-ll="OCR PDF-13" class="feds-navLink">OCR PDF</a></li>
    <li><a href="/acrobat/online/compress-pdf/" daa-ll="Compress-14" class="feds-navLink">Compress</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Edit-4" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Edit
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/pdf-editor/" daa-ll="Edit PDF-1" class="feds-navLink">Edit PDF</a></li>
    <li><a href="/acrobat/online/merge-pdf/" daa-ll="Merge PDFs-2" class="feds-navLink">Merge PDFs</a></li>
    <li><a href="/acrobat/online/split-pdf/" daa-ll="Split PDF-3" class="feds-navLink">Split PDF</a></li>
    <li><a href="/acrobat/online/crop-pdf/" daa-ll="Crop PDF-4" class="feds-navLink">Crop PDF</a></li>
    <li><a href="/acrobat/online/delete-pdf-pages/" daa-ll="Delete PDF pages-5" class="feds-navLink">Delete PDF pages</a></li>
    <li><a href="/acrobat/online/rotate-pdf/" daa-ll="Rotate PDF pages-6" class="feds-navLink">Rotate PDF pages</a></li>
    <li><a href="/acrobat/online/rearrange-pdf/" daa-ll="Reorder PDF pages-7" class="feds-navLink">Reorder PDF pages</a></li>
    <li><a href="/acrobat/online/extract-pdf-pages/" daa-ll="Extract PDF pages-8" class="feds-navLink">Extract PDF pages</a></li>
    <li><a href="/acrobat/online/add-pages-to-pdf/" daa-ll="Insert PDF pages-9" class="feds-navLink">Insert PDF pages</a></li>
    <li><a href="/acrobat/online/add-pdf-page-numbers/" daa-ll="Number PDF pages-10" class="feds-navLink">Number PDF pages</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Sign Protect-5" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Sign &amp; Protect
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/sign-pdf/" daa-ll="Fill Sign-1" class="feds-navLink">Fill &amp; Sign</a></li>
    <li><a href="/acrobat/online/request-signature/" daa-ll="Request e signatures-2" class="feds-navLink">Request e-signatures</a></li>
    <li><a href="/acrobat/online/password-protect-pdf/" daa-ll="Protect PDF-3" class="feds-navLink">Protect PDF</a></li>
  </ul></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Generative AI-6" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Generative AI
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/online/ai-chat-pdf/" daa-ll="Chat with PDF-1" class="feds-navLink">Chat with PDF</a></li>
    <li><a href="/acrobat/online/ai-summary-generator/" daa-ll="Summary Generator-2" class="feds-navLink">Summary Generator</a></li>
    <li><a href="/acrobat/online/pdf-ai/" daa-ll="PDF AI-3" class="feds-navLink">PDF AI</a></li>
    <li><a href="/express/create/ai/presentation/" daa-ll="Generate Presentation-4" class="feds-navLink">Generate Presentation</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/online/pricing/" class="feds-navLink" daa-ll="Buy now-7" data-title="Buy now" tabindex="-1" aria-hidden="true">Buy now</a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/free-trial-download/" class="feds-cta feds-cta--primary" daa-ll="Free trial-8" data-title="Free trial" tabindex="-1" aria-hidden="true">Free trial</a>
    </div>
            </div></div><a href="/acrobat/online/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" daa-lh="s1">
        <div class="hero-marquee center s-min-height static-links con-block has-bg" data-block-status="loaded" daa-lh="b1|hero-marquee">
          <div class="background">
            <div><picture>
                <source type="image/webp" srcset="/acrobat/media_15b7a6068dc750eb65d165f3b72ae93d9beab9a35.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_15b7a6068dc750eb65d165f3b72ae93d9beab9a35.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_15b7a6068dc750eb65d165f3b72ae93d9beab9a35.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_15b7a6068dc750eb65d165f3b72ae93d9beab9a35.png?width=750&amp;format=png&amp;optimize=medium" width="3840" height="720" style="object-position: right bottom;">
              </picture></div>
          </div>
          <div class="foreground cols-1">
            <div class="copy"><div class="main-copy l-lockup xl-button">
              <h1 id="do-your-best-work-online-with-adobe-acrobat" class="heading-xxl">Do your best work online with Adobe Acrobat</h1>
              <p class="body-m">Access free Acrobat online tools to convert, share, fill, and sign documents.</p>
              <p class="body-m action-area"><a href="https://acrobat.adobe.com/link/home/" class="con-button blue button-xl button-justified-mobile" daa-ll="Sign in to Adobe Acr-1--Do your best work on">Sign in to Adobe Acrobat</a></p>
              <p class="body-m supplemental-text body-xl"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="-lYm-YaTSZoUgv1gzqCgybgFotLqRsLwf8CgYdvdnsQ" data-extra-options="{}" class="placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=5C36A7C7209BE2E09E71BB9E512DF40A&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Start 7 day free tri-2--Do your best work on" aria-label="Start 7-day free trial - APCC - Individuals"><span style="pointer-events: none;">Start 7-day free trial</span></a></p>
            </div></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s2">
        <div class="text center l-spacing text-block con-block has-bg" data-block-status="loaded" style="background: rgb(255, 255, 255);" daa-lh="b1|text">
          
          <div class="foreground">
            <div>
              <h2 id="try-25-powerful-pdf-and-e-signing-tools-for-free" class="heading-xl">Try 25+ powerful PDF and e-signing tools for free</h2>
              <p class="body-m">Work smarter from anywhere with Acrobat online tools from Adobe, the inventor of the PDF format.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s3">
        <div class="text s-spacing-bottom text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="generative-ai" class="heading-m">Generative AI</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up" daa-lh="s4">
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/aichat.svg" alt="Chat with PDF"></picture></p>
              <h4 id="chat-with-pdf" class="heading-xs">Chat with PDF</h4>
              <p class="body-xs">Ask a PDF questions and get fast answers using Acrobat AI Assistant</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/ai-chat-pdf/" aria-label="Try for free Chat with PDF" class="con-button outline" daa-ll="Try for free-1--Chat with PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/summary-generator.svg" alt="Summary Generator"></picture></p>
              <h4 id="summary-generator" class="heading-xs">Summary Generator</h4>
              <p class="body-xs">Get concise summaries of your documents with Acrobat AI Assistant</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/ai-summary-generator/" aria-label="Try for free Summary Generator" class="con-button outline" daa-ll="Try for free-1--Summary Generator">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-ai.svg" alt="PDF AI"></picture></p>
              <h4 id="pdf-ai" class="heading-xs">PDF AI</h4>
              <p class="body-xs">Use Acrobat AI Assistant to make your PDFs smart and interactive</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-ai/" aria-label="Try for free PDF AI" class="con-button outline" daa-ll="Try for free-1--PDF AI">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b4|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/flashcard-maker.svg" alt="Flashcard maker"></picture></p>
              <h4 id="flashcard-maker" class="heading-xs">Flashcard maker</h4>
              <p class="body-xs">Turn class notes, readings, or files into flashcards for free</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/flashcard-maker/" aria-label="Try for free Flashcard maker" class="con-button outline" daa-ll="Try for free-1--Flashcard maker">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b5|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/quiz-maker.svg" alt="Quiz maker"></picture></p>
              <h4 id="quiz-maker" class="heading-xs">Quiz maker</h4>
              <p class="body-xs">Create quizzes and practice tests quickly, for  free</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/quiz-maker/" aria-label="Try for free Quiz maker" class="con-button outline" daa-ll="Try for free-1--Quiz maker">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b6|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/mind-map.svg" alt="Mind map"></picture></p>
              <h4 id="mind-map" class="heading-xs">Mind map</h4>
              <p class="body-xs">Create mind maps for free to assist your brainstorm or study session</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/mind-map/" aria-label="Try for free Mind map" class="con-button outline" daa-ll="Try for free-1--Mind map">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b7|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/gen-presentation.svg" alt="Generate presentation"></picture></p>
              <h4 id="generate-presentation" class="heading-xs">Generate Presentation</h4>
              <p class="body-xs">Start with a PDF or doc and create AI-generated slides with the power of Acrobat and Adobe Express</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/express/create/ai/presentation/" aria-label="Try for free Generate Presentation" class="con-button outline" daa-ll="Try for free-1--Generate Presentatio">Try for free</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s5">
        <div class="text s-spacing-bottom m-spacing-top text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="convert" class="heading-m">Convert</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up" daa-lh="s6">
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners footer-align-left click s-icon con-block equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-to-word.svg" alt="PDF to Word"></picture></p>
              <h4 id="pdf-to-word" class="heading-xs">PDF to Word</h4>
              <p class="body-xs">Convert a PDF to a Microsoft Word file</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-to-word/" aria-label="Try for free PDF to Word" class="con-button outline" daa-ll="Try for free-1--PDF to Word">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left l-icon con-block equal-height no-bg" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-to-excel.svg" alt="PDF to Excel"></picture></p>
              <h4 id="pdf-to-excel" class="heading-xs">PDF to Excel</h4>
              <p class="body-xs">Convert a PDF to a Microsoft Excel file</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-to-excel/" aria-label="Try for free PDF to Excel" class="con-button outline" daa-ll="Try for free-1--PDF to Excel">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-to-ppt.svg" alt="PDF to PPT"></picture></p>
              <h4 id="pdf-to-ppt" class="heading-xs">PDF to PPT</h4>
              <p class="body-xs">Convert a PDF to a Microsoft PowerPoint file</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-to-ppt/" aria-label="Try for free PDF to PPT" class="con-button outline" daa-ll="Try for free-1--PDF to PPT">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b4|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-to-jpg.svg" alt="PDF to JPG"></picture></p>
              <h4 id="pdf-to-jpg" class="heading-xs">PDF to JPG</h4>
              <p class="body-xs">Convert a PDF to JPG or other image format</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-to-jpg/" aria-label="Try for free PDF to JPG" class="con-button outline" daa-ll="Try for free-1--PDF to JPG">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b5|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/pdf-to-png.svg" alt="PDF to PNG"></picture></p>
              <h4 id="pdf-to-png" class="heading-xs">PDF to PNG</h4>
              <p class="body-xs">Convert a PDF to PNG or other image format</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-to-png/" aria-label="Try for free PDF to PNG" class="con-button outline" daa-ll="Try for free-1--PDF to PNG">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b6|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/word-to-pdf.svg" alt="Word to PDF"></picture></p>
              <h4 id="word-to-pdf" class="heading-xs">Word to PDF</h4>
              <p class="body-xs">Convert a Microsoft Word file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/word-to-pdf/" aria-label="Try for free Word to PDF" class="con-button outline" daa-ll="Try for free-1--Word to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b7|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/excel-to-pdf.svg" alt="Excel to PDF"></picture></p>
              <h4 id="excel-to-pdf" class="heading-xs">Excel to PDF</h4>
              <p class="body-xs">Convert a Microsoft Excel file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/excel-to-pdf/" aria-label="Try for free Excel to PDF" class="con-button outline" daa-ll="Try for free-1--Excel to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b8|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/ppt-to-pdf.svg" alt="PPT to PDF"></picture></p>
              <h4 id="ppt-to-pdf" class="heading-xs">PPT to PDF</h4>
              <p class="body-xs">Convert a Microsoft PowerPoint file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/ppt-to-pdf/" aria-label="Try for free PPT to PDF" class="con-button outline" daa-ll="Try for free-1--PPT to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b9|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/jpg-to-pdf.svg" alt="JPG to PDF"></picture></p>
              <h4 id="jpg-to-pdf" class="heading-xs">JPG to PDF</h4>
              <p class="body-xs">Convert a JPG or other image file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/jpg-to-pdf/" aria-label="Try for free JPG to PDF" class="con-button outline" daa-ll="Try for free-1--JPG to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b10|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/png-to-pdf.svg" alt="PNG to PDF"></picture></p>
              <h4 id="png-to-pdf" class="heading-xs">PNG to PDF</h4>
              <p class="body-xs">Convert a PNG or other image file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/png-to-pdf/" aria-label="Try for free PNG to PDF" class="con-button outline" daa-ll="Try for free-1--PNG to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b11|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/heic-to-pdf.svg" alt="HEIC to PDF"></picture></p>
              <h4 id="heic-to-pdf" class="heading-xs">HEIC to PDF</h4>
              <p class="body-xs">Convert&nbsp;a HEIC or other image file to PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="https://acrobat.adobe.com/heic-to-pdf" data-has-dnt="true" aria-label="Try for free HEIC to PDF" class="con-button outline" daa-ll="Try for free-1--HEIC to PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b12|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/convert-to-pdf.svg" alt="PDF converter"></picture></p>
              <h4 id="pdf-converter" class="heading-xs">PDF converter</h4>
              <p class="body-xs">Convert a file to or from PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/convert-pdf/" aria-label="Try for free PDF converter" class="con-button outline" daa-ll="Try for free-1--PDF converter">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b13|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/enhance-scans-ocr.svg" alt="OCR PDF"></picture></p>
              <h4 id="ocr-pdf" class="heading-xs">OCR PDF</h4>
              <p class="body-xs">Recognize text in a PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/ocr-pdf/" aria-label="Try for free OCR PDF" class="con-button outline" daa-ll="Try for free-1--OCR PDF">Try for free</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s7">
        <div class="text s-spacing-bottom m-spacing-top text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="reduce-file-size" class="heading-m">Reduce file size</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up" daa-lh="s8">
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/compress-pdf.svg" alt="Compress PDF"></picture></p>
              <h4 id="compress-pdf" class="heading-xs">Compress PDF</h4>
              <p class="body-xs">Reduce the size of your PDF for easier sharing</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/compress-pdf/" aria-label="Try for free Compress PDF" class="con-button outline" daa-ll="Try for free-1--Compress PDF">Try for free</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s9">
        <div class="text s-spacing-bottom m-spacing-top text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="edit" class="heading-m">Edit</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up" daa-lh="s10">
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners footer-align-left click con-block equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/edit-pdf.svg" alt="Edit PDF"></picture></p>
              <h4 id="edit-pdf" class="heading-xs">Edit PDF</h4>
              <p class="body-xs">Add text boxes, comments, highlights, and more.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/pdf-editor/" aria-label="Try for free Edit PDF" class="con-button outline" daa-ll="Try for free-1--Edit PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/combine-files.svg" alt="Merge PDFs"></picture></p>
              <h4 id="merge-pdfs" class="heading-xs">Merge PDFs</h4>
              <p class="body-xs">Merge multiple files into a single PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/merge-pdf/" aria-label="Try for free Merge PDFs" class="con-button outline" daa-ll="Try for free-1--Merge PDFs">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/split-pdf.svg" alt="Split PDF"></picture></p>
              <h4 id="split-pdf" class="heading-xs">Split PDF</h4>
              <p class="body-xs">Separate a file into multiple PDFs</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/split-pdf/" aria-label="Try for free Split PDF" class="con-button outline" daa-ll="Try for free-1--Split PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b4|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/crop-pages.svg" alt="Crop PDF"></picture></p>
              <h4 id="crop-pdf" class="heading-xs">Crop PDF</h4>
              <p class="body-xs">Trim page content, adjust margins, or resize pages</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/crop-pdf/" aria-label="Try for free Crop PDF" class="con-button outline" daa-ll="Try for free-1--Crop PDF">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b5|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/delete-pages.svg" alt="Delete PDF pages"></picture></p>
              <h4 id="delete-pdf-pages" class="heading-xs">Delete PDF pages</h4>
              <p class="body-xs">Remove pages from your PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/delete-pdf-pages/" aria-label="Try for free Delete PDF pages" class="con-button outline" daa-ll="Try for free-1--Delete PDF pages">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b6|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/rotate-pages.svg" alt="Rotate PDF pages"></picture></p>
              <h4 id="rotate-pdf-pages" class="heading-xs">Rotate PDF pages</h4>
              <p class="body-xs">Rotate pages left or right</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/rotate-pdf/" aria-label="Try for free Rotate PDF pages" class="con-button outline" daa-ll="Try for free-1--Rotate PDF pages">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b7|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/reorder-pages.svg" alt="Reorder pages"></picture></p>
              <h4 id="reorder-pages" class="heading-xs">Reorder pages</h4>
              <p class="body-xs">Rearrange pages in your PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/rearrange-pdf/" aria-label="Try for free Reorder pages" class="con-button outline" daa-ll="Try for free-1--Reorder pages">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b8|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/icon-extract.svg" alt="Extract PDF pages"></picture></p>
              <h4 id="extract-pdf-pages" class="heading-xs">Extract PDF pages</h4>
              <p class="body-xs">Create a new PDF of selected pages</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/extract-pdf-pages/" aria-label="Try for free Extract PDF pages" class="con-button outline" daa-ll="Try for free-1--Extract PDF pages">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b9|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/insert-pdf.svg" alt="Insert PDF pages"></picture></p>
              <h4 id="insert-pdf-pages" class="heading-xs">Insert PDF pages</h4>
              <p class="body-xs">Add pages to your PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/add-pages-to-pdf/" aria-label="Try for free Insert PDF pages" class="con-button outline" daa-ll="Try for free-1--Insert PDF pages">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b10|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/number-pdf-pages.svg" alt="Number PDF pages"></picture></p>
              <h4 id="number-pdf-pages" class="heading-xs">Number PDF pages</h4>
              <p class="body-xs">Add page numbers to your PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/add-pdf-page-numbers/" aria-label="Try for free Number PDF pages" class="con-button outline" daa-ll="Try for free-1--Number PDF pages">Try for free</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s11">
        <div class="text s-spacing-bottom m-spacing-top text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="sign--protect" class="heading-m">Sign &amp; protect</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up" daa-lh="s12">
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/fill-sign.svg" alt="Fill &amp; Sign"></picture></p>
              <h4 id="fill--sign" class="heading-xs">Fill &amp; Sign</h4>
              <p class="body-xs">Complete a form and add your signature</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/sign-pdf/" aria-label="Try for free Fill &amp; Sign" class="con-button outline" daa-ll="Try for free-1--Fill Sign">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/request-signatures.svg" alt="Request e-signatures"></picture></p>
              <h4 id="request-e-signatures" class="heading-xs">Request e-signatures</h4>
              <p class="body-xs">Send a document to anyone to e-sign online fast</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/request-signature/" aria-label="Try for free Request e-signatures" class="con-button outline" daa-ll="Try for free-1--Request e signatures">Try for free</a></div>
          </div>
        </div>
        <div class="editorial-card static-links-copy xs-lockup s-rounded-corners click footer-align-left con-block equal-height no-bg" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div></div>
          </div>
          <div class="foreground">
            <div class="body-xs">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/frictionless-svg/protect-pdf.svg" alt="Protect PDF"></picture></p>
              <h4 id="protect-pdf" class="heading-xs">Protect PDF</h4>
              <p class="body-xs">Set a password to protect a PDF</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-xs action-area"><a href="/acrobat/online/password-protect-pdf/" aria-label="Try for free Protect PDF" class="con-button outline" daa-ll="Try for free-1--Protect PDF">Try for free</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Four up</strong></div>
          </div>
        </div>
      </div>
      <div class="section m-spacing" daa-lh="s13">
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>M spacing</strong></div>
          </div>
        </div>
        
      </div>
    </main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div id="page-load-ok-milo" style="display: none;"></div></body></html>