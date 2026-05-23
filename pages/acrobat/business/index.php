<?php
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr" data-escape-initialized="true"><head>
    <title>Adobe Acrobat for business: Everything you need for documents &amp; e-signatures</title>
    <link rel="canonical" href="/acrobat/business/">
    <meta name="description" content="Streamline the way you work with digital documents and electronic signature solutions from Adobe Acrobat for business, so you can innovate and move your business forward.">
    <meta property="og:title" content="Adobe Acrobat for business: Everything you need for documents &amp; e-signatures">
    <meta property="og:description" content="Streamline the way you work with digital documents and electronic signature solutions from Adobe Acrobat for business, so you can innovate and move your business forward.">
    <meta property="og:image" content="acrobat/media_1a50552a7bc9133da23abe97e43e16a5ec1ee95df.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/media_1a50552a7bc9133da23abe97e43e16a5ec1ee95df.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe Acrobat for business: Everything you need for documents &amp; e-signatures">
    <meta name="twitter:description" content="Streamline the way you work with digital documents and electronic signature solutions from Adobe Acrobat for business, so you can innovate and move your business forward.">
    <meta name="twitter:image" content="acrobat/media_1a50552a7bc9133da23abe97e43e16a5ec1ee95df.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
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
    <meta name="jarvis-surface-id" content="DocumentCloudsignAcro">
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/martech/helpers.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="stylesheet" href="/libs/styles/iconography.css"><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Acrobat","item":"/acrobat/"},{"@type":"ListItem","position":3,"name":"Business Solutions","item":"/acrobat/business/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/notification/notification.js"><link rel="stylesheet" href="/libs/blocks/notification/notification.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><mas-commerce-service locale="en_US" language="en" country="US" checkout-client-id="doc_cloud"></mas-commerce-service><link rel="stylesheet" href="/libs/blocks/tabs/tabs.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/media/media.css"><link rel="stylesheet" href="/libs/features/icons/icons.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" href="/libs/blocks/table/table.css"><link rel="stylesheet" href="/libs/blocks/icon-block/icon-block.css"><link rel="stylesheet" href="/libs/blocks/accordion/accordion.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"></head>
  <body>
    <header class="global-navigation has-breadcrumbs ready local-nav" daa-im="true" daa-lh="gnav|localnav-acrobat-business" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
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
              <a class="feds-navLink" daa-ll="Acrobat for business-2" role="link" aria-disabled="true" aria-current="page" tabindex="0">Acrobat for business</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Products-3" daa-lh="header|Open">
              Products
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Products
    </div><div class="feds-menu-items" daa-lh="Products"><ul>
    <li><a href="/acrobat/business/acrobat-studio/" daa-ll="Acrobat for teams-1" class="feds-navLink">Acrobat for teams</a></li>
    <li><a href="/acrobat/business/enterprise/" daa-ll="Acrobat for enterprise-2" class="feds-navLink">Acrobat for enterprise</a></li>
    <li><a href="/acrobat/business/sign/" daa-ll="Acrobat Sign Solutions-3" class="feds-navLink">Acrobat Sign Solutions</a></li>
  </ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Explore features
    </div><div class="feds-menu-items" daa-lh="Explore features"><ul>
    <li><a href="/documentcloud/integrations/" daa-ll="Integrations-1" class="feds-navLink">Integrations</a></li>
    <li><a href="/sign/features/branding/" daa-ll="Branding-2" class="feds-navLink">Branding</a></li>
    <li><a href="/sign/features/mega-sign/" daa-ll="Send in bulk-3" class="feds-navLink">Send in bulk</a></li>
    <li><a href="/sign/features/payment-gateway-integrations/" daa-ll="Collect payments-4" class="feds-navLink">Collect payments</a></li>
  </ul></div></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Solutions-4" daa-lh="header|Open">
              Solutions
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Departments
    </div><div class="feds-menu-items" daa-lh="Departments"><ul>
    <li><a href="/documentcloud/departments/sales/" daa-ll="Sales-1" class="feds-navLink">Sales</a></li>
    <li><a href="/documentcloud/departments/human-resources/" daa-ll="HR-2" class="feds-navLink">HR</a></li>
    <li><a href="/sign/compliance/electronic-signature-legality/" daa-ll="Legal-3" class="feds-navLink">Legal</a></li>
    <li><a href="/documentcloud/departments/it/" daa-ll="IT-4" class="feds-navLink">IT</a></li>
  <li><a href="/documentcloud/departments/" class="feds-navLink feds-navLink--blue" daa-ll="View all-5">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Industries
    </div><div class="feds-menu-items" daa-lh="Industries"><ul>
    <li><a href="/documentcloud/industries/financial-services/" daa-ll="Financial services-1" class="feds-navLink">Financial services</a></li>
    <li><a href="/documentcloud/industries/insurance/" daa-ll="Insurance-2" class="feds-navLink">Insurance</a></li>
    <li><a href="/documentcloud/industries/life-sciences/" daa-ll="Life sciences-3" class="feds-navLink">Life sciences</a></li>
    <li><a href="/documentcloud/industries/government/" daa-ll="Government-4" class="feds-navLink">Government</a></li>
  <li><a href="/documentcloud/industries/" class="feds-navLink feds-navLink--blue" daa-ll="View all-5">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Resources-5" daa-lh="header|Open">
              Resources
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Learn
    </div><div class="feds-menu-items" daa-lh="Learn"><ul>
    <li><a href="https://business.adobe.com/customer-success-stories.html?Search=Document+Cloud" target="_blank" daa-ll="Customer stories-1" class="feds-navLink">Customer stories</a></li>
    <li><a href="/sign/esignature-resources/" daa-ll="E sign tutorials-2" class="feds-navLink">E-sign tutorials</a></li>
    <li><a href="/documentcloud/whitepapers/" daa-ll="Reports-3" class="feds-navLink">Reports</a></li>
    <li><a href="/documentcloud/webinars/" daa-ll="Webinars-4" class="feds-navLink">Webinars</a></li>
  </ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="heading" aria-level="2">
      Support
    </div><div class="feds-menu-items" daa-lh="Support"><ul>
    <li><a href="/trust/security/" daa-ll="Security and compliance-1" class="feds-navLink">Security and compliance</a></li>
    <li><a href="/trust/document-cloud-security/" daa-ll="Trust Center-2" class="feds-navLink">Trust Center</a></li>
    <li><a href="/documentcloud/resources/it-tools/" daa-ll="Developer resources-3" class="feds-navLink">Developer resources</a></li>
    <li><a href="https://helpx.adobe.com/support/sign.html" daa-ll="Help Center-4" class="feds-navLink">Help Center</a></li>
  </ul></div></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/business/for-admins/" class="feds-navLink" daa-ll="For admins-6">For admins</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/business/pricing-plans/" class="feds-navLink" daa-ll="Compare plans-7">Compare plans</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Contact Sales-8" daa-lh="header|Open">
              Contact Sales
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/contact/" daa-ll="Request information-1" class="feds-navLink">Request information</a></li>
    <li><a href="/acrobat/business/" daa-ll="Chat with Sales-2" class="feds-navLink">Chat with Sales</a></li>
    <li><a href="tel:800-915-9459" daa-ll="Call 800 915 9459-3" class="feds-navLink">Call 800-915-9459</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/business/" class="feds-cta feds-cta--primary" daa-ll="Buy now-9">Buy now</a>
    </div>
            </div><div class="feds-navItem" role="listitem">
              <a href="tel:800-915-9459" class="feds-navLink" daa-ll="800 915 9459-10">800-915-9459</a>
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
                <li><span aria-hidden="true">/</span><a href="/acrobat/">Acrobat</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Business Solutions</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Acrobat for business_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Acrobat for business_localNav|open">Acrobat for business</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Acrobat for business-2" role="link" aria-disabled="true" aria-current="page" tabindex="-1" data-title="Acrobat for business" aria-hidden="true">Overview</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Products-3" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Products
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Products</div><div class="feds-menu-items" daa-lh="Products"><ul>
    <li><a href="/acrobat/business/acrobat-studio/" daa-ll="Acrobat for teams-1" class="feds-navLink">Acrobat for teams</a></li>
    <li><a href="/acrobat/business/enterprise/" daa-ll="Acrobat for enterprise-2" class="feds-navLink">Acrobat for enterprise</a></li>
    <li><a href="/acrobat/business/sign/" daa-ll="Acrobat Sign Solutions-3" class="feds-navLink">Acrobat Sign Solutions</a></li>
  </ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Explore features</div><div class="feds-menu-items" daa-lh="Explore features"><ul>
    <li><a href="/documentcloud/integrations/" daa-ll="Integrations-1" class="feds-navLink">Integrations</a></li>
    <li><a href="/sign/features/branding/" daa-ll="Branding-2" class="feds-navLink">Branding</a></li>
    <li><a href="/sign/features/mega-sign/" daa-ll="Send in bulk-3" class="feds-navLink">Send in bulk</a></li>
    <li><a href="/sign/features/payment-gateway-integrations/" daa-ll="Collect payments-4" class="feds-navLink">Collect payments</a></li>
  </ul></div></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Solutions-4" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Solutions
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Departments</div><div class="feds-menu-items" daa-lh="Departments"><ul>
    <li><a href="/documentcloud/departments/sales/" daa-ll="Sales-1" class="feds-navLink">Sales</a></li>
    <li><a href="/documentcloud/departments/human-resources/" daa-ll="HR-2" class="feds-navLink">HR</a></li>
    <li><a href="/sign/compliance/electronic-signature-legality/" daa-ll="Legal-3" class="feds-navLink">Legal</a></li>
    <li><a href="/documentcloud/departments/it/" daa-ll="IT-4" class="feds-navLink">IT</a></li>
  <li><a href="/documentcloud/departments/" class="feds-navLink feds-navLink--blue" daa-ll="View all-5">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Industries</div><div class="feds-menu-items" daa-lh="Industries"><ul>
    <li><a href="/documentcloud/industries/financial-services/" daa-ll="Financial services-1" class="feds-navLink">Financial services</a></li>
    <li><a href="/documentcloud/industries/insurance/" daa-ll="Insurance-2" class="feds-navLink">Insurance</a></li>
    <li><a href="/documentcloud/industries/life-sciences/" daa-ll="Life sciences-3" class="feds-navLink">Life sciences</a></li>
    <li><a href="/documentcloud/industries/government/" daa-ll="Government-4" class="feds-navLink">Government</a></li>
  <li><a href="/documentcloud/industries/" class="feds-navLink feds-navLink--blue" daa-ll="View all-5">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">View all</div>
      
    </div>
    </a></li></ul></div></div></div>
    </div></div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Resources-5" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Resources
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Learn</div><div class="feds-menu-items" daa-lh="Learn"><ul>
    <li><a href="https://business.adobe.com/customer-success-stories.html?Search=Document+Cloud" target="_blank" daa-ll="Customer stories-1" class="feds-navLink">Customer stories</a></li>
    <li><a href="/sign/esignature-resources/" daa-ll="E sign tutorials-2" class="feds-navLink">E-sign tutorials</a></li>
    <li><a href="/documentcloud/whitepapers/" daa-ll="Reports-3" class="feds-navLink">Reports</a></li>
    <li><a href="/documentcloud/webinars/" daa-ll="Webinars-4" class="feds-navLink">Webinars</a></li>
  </ul></div></div><div class="feds-menu-column"><div class="feds-menu-headline" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">Support</div><div class="feds-menu-items" daa-lh="Support"><ul>
    <li><a href="/trust/security/" daa-ll="Security and compliance-1" class="feds-navLink">Security and compliance</a></li>
    <li><a href="/trust/document-cloud-security/" daa-ll="Trust Center-2" class="feds-navLink">Trust Center</a></li>
    <li><a href="/documentcloud/resources/it-tools/" daa-ll="Developer resources-3" class="feds-navLink">Developer resources</a></li>
    <li><a href="https://helpx.adobe.com/support/sign.html" daa-ll="Help Center-4" class="feds-navLink">Help Center</a></li>
  </ul></div></div></div>
    </div></div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/business/for-admins/" class="feds-navLink" daa-ll="For admins-6" data-title="For admins" tabindex="-1" aria-hidden="true">For admins</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/acrobat/business/pricing-plans/" class="feds-navLink" daa-ll="Compare plans-7" data-title="Compare plans" tabindex="-1" aria-hidden="true">Compare plans</a>
            </div><div role="listitem" class="feds-navItem">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Contact Sales-8" daa-lh="header|Open" tabindex="-1" aria-hidden="true">
              Contact Sales
            </button>
            <div class="feds-popup">
    <div class="feds-menu-content"><div class="feds-menu-column"><ul>
    <li><a href="/acrobat/contact/" daa-ll="Request information-1" class="feds-navLink">Request information</a></li>
    <li><a href="/acrobat/business/" daa-ll="Chat with Sales-2" class="feds-navLink">Chat with Sales</a></li>
    <li><a href="tel:800-915-9459" daa-ll="Call 800 915 9459-3" class="feds-navLink">Call 800-915-9459</a></li>
  </ul></div></div>
    </div></div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a href="/acrobat/pricing/business/" class="feds-cta feds-cta--primary" daa-ll="Buy now-9" data-title="Buy now" tabindex="-1" aria-hidden="true">Buy now</a>
    </div>
            </div><div class="feds-navItem" role="listitem">
              <a href="tel:800-915-9459" class="feds-navLink" daa-ll="800 915 9459-10" data-title="800-915-9459" tabindex="-1" aria-hidden="true">800-915-9459</a>
            </div></div><a href="/acrobat/business/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" daa-lh="s1">
        <div class="hero-marquee center no-min-height con-block has-bg" data-block-status="loaded" style="background: rgb(255, 255, 255);" daa-lh="b1|hero-marquee">
          
          <div class="foreground cols-1">
            <div class="copy"><div class="main-copy xs-lockup l-button">
              <p class="lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/business/solutions/adobe-acrobat-lockup-dark.svg" alt="Adobe Acrobat"></picture></p>
              <h1 id="solutions-for-businesses-of-all-sizes" class="heading-xxxl">Solutions for businesses of all sizes.</h1>
              <p class="body-xl">Streamline the way you work, communicate, and transact business. Plus, get AI-powered assistance, APIs and integrations, and built-in security tools.</p>
            </div></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s2">
        <div><div class="fragment" data-path="/dc-shared/fragments/promo-banners/acrobat-studio-b2b"><div class="section show-sticky-section"></div><div class="section"></div></div></div>
      </div>
      <div class="section tablist-business-size-section" daa-lh="s3">
        <div class="tabs center" id="tabs-business-size" data-block-status="loaded" daa-lh="b1|tabs"><button class="paddle paddle-left" disabled="" aria-hidden="true" aria-label="Scroll tabs to left" daa-ll="Scroll tabs to left-1--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          <div class="tabList" role="tablist">
            <div class="tab-list-container" data-pretext="undefined">
              
            <button role="tab" class="heading-xs" id="tab-business-size-1" tabindex="0" aria-selected="true" data-block-id="tabs-business-size" daa-state="true" daa-ll="tab-business-size-1" aria-controls="tab-panel-business-size-1" data-deeplink="undefined">Small businesses</button><button role="tab" class="heading-xs" id="tab-business-size-2" tabindex="-1" aria-selected="false" data-block-id="tabs-business-size" daa-state="true" daa-ll="tab-business-size-2" aria-controls="tab-panel-business-size-2" data-deeplink="undefined">Medium &amp; large businesses</button></div>
          </div><button class="paddle paddle-right" disabled="" aria-hidden="true" aria-label="Scroll tabs to right" daa-ll="Scroll tabs to right-4--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          
          
        <div class="tab-content"><div class="tab-content-container"><div id="tab-panel-business-size-1" role="tabpanel" class="tabpanel" aria-labelledby="tab-business-size-1" data-block-id="tabs-business-size" data-nested-lh="t1Sma"><div class="section three-up l-spacing static-links" style="background: rgb(255, 255, 255);">
        <div class="text center full-width no-spacing text-block con-block max-width-8-desktop xxl-spacing" data-block-status="loaded" daa-lh="b2|t1Sma--text">
          <div class="foreground">
            <div class="body-l">
              <h2 id="ideal-for-organizations-that-need-10-or-fewer-licenses" class="heading-m">Ideal for organizations that need 10 or fewer licenses.</h2>
            </div>
          </div>
        </div>
        <div class="media no-spacing static-links con-block" data-block-status="loaded" daa-lh="b3|t1Sma--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_14f44fcb0fccf1e9c6bceb15e4e0ad443c680b51f.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_14f44fcb0fccf1e9c6bceb15e4e0ad443c680b51f.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_14f44fcb0fccf1e9c6bceb15e4e0ad443c680b51f.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_14f44fcb0fccf1e9c6bceb15e4e0ad443c680b51f.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1516" height="756">
              </picture>
            </div>
            <div class="text">
              <h3 id="get-trusted-pdf-tools-seamless-integrations-and-easy-admin-features" class="heading-s">Get trusted PDF tools, seamless integrations, and easy admin features.</h3>
              <p class="body-m">Acrobat gives you everything you need to create, edit, sign, share, and manage PDFs, including AI-powered PDF Actions that help you complete top tasks in no time. Streamline workflows by integrating Acrobat with business apps like Microsoft 365. And easily manage licenses and billing from a single admin console.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b4|t1Sma--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1c44c7f4a7b812c4efc86478cf88700ce44afb044.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1c44c7f4a7b812c4efc86478cf88700ce44afb044.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1c44c7f4a7b812c4efc86478cf88700ce44afb044.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_1c44c7f4a7b812c4efc86478cf88700ce44afb044.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="378">
              </picture>
            </div>
            <div class="text">
              <h3 id="work-smarter-with-ai-and-content-creation-tools" class="heading-s">Work smarter with AI and content creation tools.</h3>
              <p class="body-m">Transform static documents into PDF Spaces that bring together files, context, audio summaries, and a custom AI Assistant to unlock insights and highlight what matters. Easily create standout reports, infographics, and other content with Adobe Express, and generate presentations with AI.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b5|t1Sma--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1d2a24ff159a1ceca68a56e347dfbbeeb463b2ff7.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1d2a24ff159a1ceca68a56e347dfbbeeb463b2ff7.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1d2a24ff159a1ceca68a56e347dfbbeeb463b2ff7.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_1d2a24ff159a1ceca68a56e347dfbbeeb463b2ff7.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="378">
              </picture>
            </div>
            <div class="text">
              <h3 id="share-and-collaborate-from-anywhere" class="heading-s">Share and collaborate from anywhere.</h3>
              <p class="body-m">Share documents and conversations in secure, interactive PDF Spaces that reflect your brand. Use AI assistants, executive summaries, and tailored insights to boost engagement, guide internal and external stakeholders, and drive effective decision-making. And see how stakeholders interact with your shared documents so you can optimize delivery, follow-through, and impact.</p>
            </div>
          </div></div></div>
        <div class="text center full-width no-spacing text-block con-block max-width-8-desktop xxl-spacing" data-block-status="loaded" daa-lh="b6|t1Sma--text">
          <div class="foreground">
            <div class="body-m"><a href="/acrobat/business/acrobat-studio/" daa-ll="Learn more about Acr-5--Share and collaborat">Learn more about Acrobat for teams.</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Three up, l spacing, static links</div>
          </div>
          <div>
            <div>tab</div>
            <div>business-size, 1</div>
          </div>
          <div>
            <div>background</div>
            <div>#FFFFFF</div>
          </div>
        </div>
      </div></div><div id="tab-panel-business-size-2" role="tabpanel" class="tabpanel" aria-labelledby="tab-business-size-2" data-block-id="tabs-business-size" hidden="true" data-nested-lh="t2Med"><div class="section three-up l-spacing static-links" style="background: rgb(255, 255, 255);">
        <div class="text center full-width no-spacing text-block con-block max-width-8-desktop xxl-spacing" data-block-status="loaded" daa-lh="b7|t2Med--text">
          <div class="foreground">
            <div class="body-l">
              <h2 id="ideal-for-organizations-that-need-11-or-more-licenses-and-have-complex-needs" class="heading-m">Ideal for organizations that need 11 or more licenses and have complex needs.</h2>
            </div>
          </div>
        </div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b8|t2Med--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1bc2191b476e97077ec3f4abb20bf63c7ae010359.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1bc2191b476e97077ec3f4abb20bf63c7ae010359.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1bc2191b476e97077ec3f4abb20bf63c7ae010359.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_1bc2191b476e97077ec3f4abb20bf63c7ae010359.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="758" height="378">
              </picture>
            </div>
            <div class="text">
              <h3 id="work-faster-together-with-powerful-document-solutions" class="heading-s">Work faster together with powerful document solutions.</h3>
              <p class="body-m">Move business forward with the trusted solution for creating, editing, signing, and sharing PDFs and contracts. Count on automation to streamline workflows and accelerate approvals, and collaborate in powerful AI workspaces.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b9|t2Med--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1335dd3e0425cb8ced7b4602766954cad3c1fc58f.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1335dd3e0425cb8ced7b4602766954cad3c1fc58f.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1335dd3e0425cb8ced7b4602766954cad3c1fc58f.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_1335dd3e0425cb8ced7b4602766954cad3c1fc58f.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="378">
              </picture>
            </div>
            <div class="text">
              <h3 id="work-smarter-with-ai-and-content-creation-tools-1" class="heading-s">Work smarter with AI and content creation tools.</h3>
              <p class="body-m">Summarize, analyze, and extract key insights from complex documents, and get verifiable citations for audit trails. Share documents as branded, AI-powered PDF Spaces with AI assistants, executive summaries, and tailored insights that guide internal and external stakeholders to what matters. And empower everyone to create on-brand content at scale with Adobe Express.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b10|t2Med--media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_11f8ac6d38f4c0a7233a90740bc513d8697e85efa.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_11f8ac6d38f4c0a7233a90740bc513d8697e85efa.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_11f8ac6d38f4c0a7233a90740bc513d8697e85efa.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/acrobat/media_11f8ac6d38f4c0a7233a90740bc513d8697e85efa.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1516" height="756">
              </picture>
            </div>
            <div class="text">
              <h3 id="manage-with-ease-and-stay-secure" class="heading-s">Manage with ease and stay secure.</h3>
              <p class="body-m">Integrate Acrobat with no downtime or costly re-training. Easily assign and reassign licenses based on individual roles to prevent unauthorized data access. Protect your data with strong security controls, secure cloud collaboration, and secure document storage — your content will never be used to train Adobe’s AI models.</p>
            </div>
          </div></div></div>
        <div class="text center l-button full-width no-spacing text-block con-block max-width-8-desktop xxl-spacing" data-block-status="loaded" daa-lh="b11|t2Med--text">
          <div class="foreground">
            <div class="body-m"><a href="https://business.adobe.com/solutions/document-productivity.html" daa-ll="Learn more about Acr-6--Manage with ease and">Learn more about Acrobat solutions for medium and large businesses.</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Three up, l spacing, static links</div>
          </div>
          <div>
            <div>tab</div>
            <div>business-size, 2</div>
          </div>
          <div>
            <div>background</div>
            <div>#FFFFFF</div>
          </div>
        </div>
      </div></div></div></div></div>
      </div>
      
      
      <div class="section xl-spacing grid-width-10" daa-lh="s4" style="background: rgb(248, 248, 248);">
        <div class="text center xs-spacing max-width-8-desktop l-button text-block con-block has-bg" data-block-status="loaded" style="background: rgb(248, 248, 248);" daa-lh="b1|text">
          
          <div class="foreground">
            <div>
              <p class="body-m">With <strong class="tracking-header">Adobe Acrobat Pro and AI Assistant</strong>, everyone in your small business has trusted tools to edit and sign PDFs, collaborate better, and unlock insights faster.</p>
              <p class="body-m"><span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="8Lr09qx_PHqAJUwvUNiof4FFFEKjsR1TTbvBUncV2b0,iI9UsOtLtXlD4-zeZd2XDuTCjFI2GV4PwyAgL8MH7Uk" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">28</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">98</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> for the annual, billed monthly plan.</p>
              <p class="icon-area"><em>Fee applies of half your remaining annual commitment if you cancel 14 days after your free trial ends.</em> <span class="icon icon-info milo-tooltip top margin-inline-start" data-tooltip="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." tabindex="0" aria-label="If you cancel 14 days after your free trial ends, your service will only continue until the end of that month’s billing period." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></p>
              <div class="cta-container"><p class="body-m action-area"><a is="checkout-link" data-checkout-workflow-step="email" data-promotion-code="TDAPCC_3LIC_7PT5" data-quantity="1" data-wcs-osi="8Lr09qx_PHqAJUwvUNiof4FFFEKjsR1TTbvBUncV2b0,iI9UsOtLtXlD4-zeZd2XDuTCjFI2GV4PwyAgL8MH7Uk" data-extra-options="{}" class="con-button blue placeholder-resolved" aria-label="Free trial Acrobat Pro + AI Assistant" href="https://commerce.adobe.com/store/email?items%5B0%5D%5Bid%5D=4B43CE3C95D80F8C0FE83F6C13E05003&amp;items%5B1%5D%5Bid%5D=2B3D7A0959FD6E512B9764E60F6CD210&amp;cli=doc_cloud&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Free trial-1--Adobe Acrobat Pro an"><span style="pointer-events: none;">Free trial</span></a> <a href="/acrobat/pricing/business/" aria-label="See plans and pricing Adobe Acrobat for business" class="con-button outline" daa-ll="See plans and pricin-2--Adobe Acrobat Pro an">See plans and pricing</a></p></div>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>xl-spacing, grid-width-10</div>
          </div>
          <div>
            <div>background</div>
            <div>#f8f8f8</div>
          </div>
        </div>
      </div>
      <div class="section static-links xl-spacing table-section" data-has-placeholders="true" daa-lh="s5">
        <div class="text center xl-spacing-top xl-spacing-bottom text-block con-block has-bg" data-block-status="loaded" style="background: rgb(255, 255, 255);" daa-lh="b1|text">
          
          <div class="foreground">
            <div class="body-m">
              <h2 id="compare-acrobat-plans-for-business" class="heading-xl"><strong>Compare Acrobat plans for business.</strong></h2>
            </div>
          </div>
        </div>
        <div class="table sticky highlight" role="table" data-block-status="loaded" daa-lh="b2|table">
          <div class="row row-1 row-highlight top-border-transparent" role="row" aria-hidden="true" style="top: 97px;">
            <div data-col-index="1" class="col col-1 col-highlight hidden" role="cell"></div>
            <div data-col-index="2" class="col col-2 col-highlight hidden" role="cell"></div>
            <div data-col-index="3" class="col col-3 col-highlight" role="cell">Best value</div>
            <div data-col-index="4" class="col col-4 col-highlight hidden" role="cell"></div>
          </div>
          <div class="intercept" data-observer-intercept=""></div><div class="row row-2 row-heading active" role="row" style="top: 147px;">
            <div data-col-index="1" class="col col-1 col-heading" role="cell"></div>
            <div data-col-index="2" class="col col-2 col-heading" role="columnheader">
              
              
              
              
              
            <div class="heading-content"><p class="tracking-header" id="t1-c2-header" aria-describedby="t1-c2-header-body t1-c2-header-pricing"><strong>Small businesses</strong></p><p class="pricing" id="t1-c2-header-pricing">Acrobat Pro for teams</p><p class="body" id="t1-c2-header-body">The highly secure PDF and e-signature solution with advanced tools, plus admin features.</p></div><div class="heading-button"><div class="buttons-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="8Lr09qx_PHqAJUwvUNiof4FFFEKjsR1TTbvBUncV2b0" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial - Acrobat Pro - Business" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=t&amp;pa=apcc_direct_indirect_team&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-pro-teams-card" daa-ll="Free trial-1--Small businesses"><span style="pointer-events: none;">Free trial</span></a></p><p class="supplemental-text body-xl action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="vV01ci-KLH6hYdRfUKMBFx009hdpxZcIRG1-BY_PutE" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now - Acrobat Pro - Business" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=t&amp;pa=apcc_direct_indirect_team&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat-pro-teams" daa-ll="Buy now-2--Small businesses"><span style="pointer-events: none;">Buy now</span></a></p></div></div></div>
            <div data-col-index="3" class="col col-3 col-heading no-rounded" role="columnheader">
              
              
              
              
              
            <div class="heading-content"><div class="highlight-text">Best value</div><p class="tracking-header" id="t1-c3-header" aria-describedby="t1-c3-header-body t1-c3-header-pricing"><strong>Small businesses</strong></p><p class="pricing" id="t1-c3-header-pricing">Acrobat Studio for teams</p><p class="body" id="t1-c3-header-body">Everything in Acrobat Pro plus PDF Spaces, Acrobat AI Assistant, Adobe Express Premium, and admin features.</p></div><div class="heading-button"><div class="buttons-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="PVhDPYXq4fsy15OdlEE-XyIlvcxaPMxGs73pw39Cx-s" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Acrobat Studio for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=TRIAL&amp;cs=t&amp;pa=PA-1807&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-acrobat-pro-card" daa-ll="Free trial-3--Small businesses"><span style="pointer-events: none;">Free trial</span></a></p><p class="supplemental-text body-xl action-area"><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="SfkorgyrBAsqBVpyKddQQEn6jR0ItBohpXc74sZcKHg" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Studio for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=t&amp;pa=PA-1807&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat" daa-ll="Buy now-4--Small businesses"><span style="pointer-events: none;">Buy now</span></a></p></div></div></div>
            <div data-col-index="4" class="col col-4 col-heading" role="columnheader">
              
              
              
              
            <div class="heading-content"><p class="tracking-header" id="t1-c4-header" aria-describedby="t1-c4-header-body t1-c4-header-pricing"><strong>Medium &amp; large businesses</strong></p><p class="pricing" id="t1-c4-header-pricing">Acrobat Studio for enterprise</p><p class="body" id="t1-c4-header-body">Everything in Acrobat Pro plus PDF Spaces, Acrobat AI Assistant, Adobe Express Premium, and enterprise-level control.</p></div><div class="heading-button"><div class="buttons-wrapper"><p class="action-area"><a href="https://business.adobe.com/products/acrobat-business.html" aria-label="Learn more Acrobat Studio for enterprise" class="con-button blue button-l" daa-ll="Learn more-5--Medium large busines">Learn more</a></p></div></div></div>
          </div>
          <div class="row row-3 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text"><strong>Team size</strong></span></div>
            <div data-col-index="2" class="col col-2" role="cell">10 or fewer licenses</div>
            <div data-col-index="3" class="col col-3" role="cell">10 or fewer licenses</div>
            <div data-col-index="4" class="col col-4" role="cell">11 or more licenses</div>
          </div>
          <div class="row row-4 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Shared user admin functionality</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Manage users at the team and organization level with the Adobe Admin Console." tabindex="0" aria-label="Manage users at the team and organization level with the Adobe Admin Console." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-5 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>E-sign tools</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Send documents for e-signature — even in bulk to multiple signers — and track responses." tabindex="0" aria-label="Send documents for e-signature — even in bulk to multiple signers — and track responses." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-6 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>PDF productivity tools</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Get everything you need to digitize documents and speed business workflows." tabindex="0" aria-label="Get everything you need to digitize documents and speed business workflows." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-7 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Integrations</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Access integrations with third-party apps like Microsoft 365." tabindex="0" aria-label="Access integrations with third-party apps like Microsoft 365." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-8 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Acrobat AI Assistant</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Get insights from your documents to create high-impact content and level up your productivity." tabindex="0" aria-label="Get insights from your documents to create high-impact content and level up your productivity." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell">Available as an add-on</div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-9 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>PDF Spaces</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Uncover insights across PDFs, Microsoft 365 files, and web links, and easily validate AI responses with citations." tabindex="0" aria-label="Uncover insights across PDFs, Microsoft 365 files, and web links, and easily validate AI responses with citations." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell">Available with AI Assistant add-on</div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-10 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Adobe Express Premium</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Create standout content with easy-to-use design tools and professional templates." tabindex="0" aria-label="Create standout content with easy-to-use design tools and professional templates." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-11 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Generate Presentation</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Easily remix your documents and insights into new content like presentations with AI." tabindex="0" aria-label="Easily remix your documents and insights into new content like presentations with AI." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"></div>
            <div data-col-index="3" class="col col-3" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-12 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>APIs</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Embed Adobe document experiences into your own apps and customer experiences." tabindex="0" aria-label="Embed Adobe document experiences into your own apps and customer experiences." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"></div>
            <div data-col-index="3" class="col col-3" role="cell"></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
          <div class="row row-13 section-row" role="row">
            <div data-col-index="1" class="col col-1 section-row-title" role="rowheader" scope="row"><span class="table-title-text">
              <p><strong>Single Sign-On (SSO)</strong></p>
              <p></p>
            </span><span class="icon icon-info milo-tooltip top" data-tooltip="Access enterprise-level authentications." tabindex="0" aria-label="Access enterprise-level authentications." role="button" data-svg-injected="true" data-a11y-initialized="true"><svg xmlns="http://www.w3.org/2000/svg" id="info" viewBox="0 0 18 18" height="18" width="18" class="icon-milo icon-milo-info">
    <path fill="currentcolor" d="M10.075,6A1.075,1.075,0,1,1,9,4.925H9A1.075,1.075,0,0,1,10.075,6Zm.09173,6H10V8.2A.20005.20005,0,0,0,9.8,8H7.83324S7.25,8.01612,7.25,8.5c0,.48365.58325.5.58325.5H8v3H7.83325s-.58325.01612-.58325.5c0,.48365.58325.5.58325.5h2.3335s.58325-.01635.58325-.5C10.75,12.01612,10.16673,12,10.16673,12ZM9,.5A8.5,8.5,0,1,0,17.5,9,8.5,8.5,0,0,0,9,.5ZM9,15.6748A6.67481,6.67481,0,1,1,15.67484,9,6.67481,6.67481,0,0,1,9,15.6748Z"></path>
</svg></span></div>
            <div data-col-index="2" class="col col-2" role="cell"></div>
            <div data-col-index="3" class="col col-3" role="cell"></div>
            <div data-col-index="4" class="col col-4" role="cell"><span class="icon icon-checkmark" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>static links, xl-spacing</div>
          </div>
          <div>
            <div>background</div>
            <div>#FFFFF</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s6">
        <div class="text max-width-8-desktop center xxl-spacing m-button l-title text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h2 id="get-advanced-e-sign-tools-with-acrobat-sign-solutions" class="heading-l">Get advanced e-sign tools with Acrobat Sign Solutions.</h2>
              <p class="body-l">Acrobat Sign Solutions is our most powerful eSignature solution, with pre-built integrations to popular business apps like Microsoft, Salesforce, and Workday as well as industry compliance settings and enhanced signer authentication.</p>
              <div class="cta-container"><p class="body-l action-area"><a href="https://business.adobe.com/products/sign-solutions.html" aria-label="learn more Acrobat Sign Solutions" class="con-button outline" daa-ll="Learn more-1--Get advanced e sign ">Learn more</a></p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s7" style="background: rgb(248, 248, 248);">
        <div class="text center xxl-spacing-top l-spacing-bottom text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="explore-acrobat-features" class="heading-xl">Explore Acrobat features.</h2>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>background</div>
            <div>#F8F8F8</div>
          </div>
        </div>
      </div>
      <div class="section four-up xl-spacing" daa-lh="s8" style="background: rgb(248, 248, 248);">
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1412ba0ae56084c044bdd1046a7b95b2cfd68f643.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1412ba0ae56084c044bdd1046a7b95b2cfd68f643.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1412ba0ae56084c044bdd1046a7b95b2cfd68f643.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1412ba0ae56084c044bdd1046a7b95b2cfd68f643.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1104" height="552">
              </picture>
            </div>
            <div class="text">
              <h3 id="edit-text-and-images" class="heading-s">Edit text and images.</h3>
              <p class="body-m">Add text, fix typos, drop in new pages, edit images, and more without switching apps.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_12de3f1c9d209c92999436b92a7cd33415f26c962.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_12de3f1c9d209c92999436b92a7cd33415f26c962.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_12de3f1c9d209c92999436b92a7cd33415f26c962.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_12de3f1c9d209c92999436b92a7cd33415f26c962.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1104" height="552">
              </picture>
            </div>
            <div class="text">
              <h3 id="create-from-templates" class="heading-s">Create from templates.</h3>
              <p class="body-m">Get a head start by choosing from dozens of PDF templates. Or create your own reusable templates.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b3|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_1cda5f5454deef0235acf0e5c965385474995b7e3.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1cda5f5454deef0235acf0e5c965385474995b7e3.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_1cda5f5454deef0235acf0e5c965385474995b7e3.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_1cda5f5454deef0235acf0e5c965385474995b7e3.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="552" height="276">
              </picture>
            </div>
            <div class="text">
              <h3 id="turn-docs-into-knowledge-with-pdf-spaces" class="heading-s">Turn docs into knowledge with PDF Spaces.</h3>
              <p class="body-m">Chat with customizable AI Assistants for deep insights about your files.</p>
            </div>
          </div></div></div>
        <div class="media no-spacing con-block" data-block-status="loaded" daa-lh="b4|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/media_11a5c2d0c5fa3730dbf494f88d30eea5c8a0979f2.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_11a5c2d0c5fa3730dbf494f88d30eea5c8a0979f2.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/media_11a5c2d0c5fa3730dbf494f88d30eea5c8a0979f2.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/media_11a5c2d0c5fa3730dbf494f88d30eea5c8a0979f2.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1104" height="552">
              </picture>
            </div>
            <div class="text">
              <h3 id="merge-and-split-pdfs" class="heading-s">Merge and split PDFs.</h3>
              <p class="body-m">Combine two or more PDFs into a single file, or turn an existing PDF into as many separate files as you want.</p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Four-up, xl spacing</div>
          </div>
          <div>
            <div>background</div>
            <div>#f8f8f8</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s9">
        <div class="text center xxl-spacing-top light text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="the-adobe-difference" class="heading-xl">The Adobe difference.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section three-up xxl-spacing" daa-lh="s10">
        <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b1|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/business/solutions/dc-bso-difference-1.svg" alt=""></picture></p>
              <h3 id="were-a-trusted-global-brand" class="heading-s">We’re a trusted global brand.</h3>
              <p class="body-m">As a leader in digital experiences trusted by Fortune 500 companies and small businesses around the world, Adobe has invented globally renowned solutions from Acrobat to Creative Cloud that transform businesses.</p>
            </div>
          </div>
        </div>
        <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b2|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/business/solutions/dc-bso-difference-2.svg" alt=""></picture></p>
              <h3 id="we-have-solutions-for-every-business" class="heading-s">We have solutions for every business.</h3>
              <p class="body-m">From small businesses to the world’s largest enterprises, our customers use our integrated Adobe Creative Cloud, Document Cloud, and Experience Cloud solutions to unleash their creativity, accelerate document productivity, and power their digital businesses.</p>
            </div>
          </div>
        </div>
        <div class="icon-block vertical small s-spacing-bottom con-block" data-block-status="loaded" daa-lh="b3|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area"><picture><img loading="lazy" src="/dc-shared/assets/images/business/solutions/dc-bso-difference-3.svg" alt=""></picture></p>
              <h3 id="we-have-your-back" class="heading-s">We have your back.</h3>
              <p class="body-m">We provide our business customers with 24x7x365 support for all their licensing and troubleshooting needs. <a href="https://helpx.adobe.com/support.html" aria-label="Learn more Adobe Help Center" daa-ll="Learn more-1--We have your back">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>three-up, xxl spacing</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s11" style="background: rgb(255, 255, 255);">
        <div class="text center xxl-spacing-top xs-spacing-bottom text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="frequently-asked-questions" class="heading-xl">Frequently asked questions</h2>
            </div>
          </div>
        </div>
        <div class="accordion-container con-block max-width-10-desktop" data-block-status="loaded" daa-lh="b2|accordion-conta"><div class="descr-list accordion foreground" id="accordion-1" role="presentation"><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-1" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-1" daa-ll="open-1--What are the differe">
            What are the differences between the Acrobat for teams and Acrobat for enterprise plans?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-1" id="accordion-1-content-1" hidden="true" class="descr-details"><div>
              <p>Acrobat for teams plans are designed for small and midsize teams that need full-feature PDF and e-signature solutions.</p>
              <p>Acrobat for enterprise plans are designed for large organizations with complex needs. They’re best for customers that need full-feature PDF solutions with enterprise-level control and management — with or without embedded e-signature capabilities.</p>
            </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-2" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-2" daa-ll="open-2--What s the differenc">
            What’s the difference between Acrobat Pro and Acrobat Studio?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-2" id="accordion-1-content-2" hidden="true" class="descr-details"><div>Acrobat Pro delivers powerful tools for working with PDFs and creating and managing e-signatures. Acrobat Studio is our most advanced Acrobat offering, bringing together productivity and creativity tools in a secure, all-in-one solution. It includes everything in Acrobat Pro as well as Acrobat AI Assistant and PDF Spaces to unlock insights across documents plus Adobe Express Premium, the app that makes content creation quick and easy for everyone in your organization. The latest features in PDF Spaces help you collaborate smarter and easily remix your documents with AI to generate presentations and podcast-style audio.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-3" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-3" daa-ll="open-3--What do I get with t">
            What do I get with the business plan that I don’t get with an individual plan?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-3" id="accordion-1-content-3" hidden="true" class="descr-details"><div>
              <p>Acrobat business plans include the Acrobat for teams and Acrobat for enterprise plans. By choosing one of our business plans, you’ll be able to seamlessly add users as your organization grows. With an individual plan, you’ll only have access to a single license for one user.</p>
              <p>With our business plans, you’ll also get organization-level benefits. These include an Admin Console for simplified license management, 24x7 tech support, and company ownership and access to your critical documents.</p>
            </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-4" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-4" daa-ll="open-4--Where can I learn mo">
            Where can I learn more about all the integrations you offer with Acrobat solutions?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-4" id="accordion-1-content-4" hidden="true" class="descr-details"><div>You can learn more on our <a href="/acrobat/business/integrations/" daa-ll="integrations page-5--Where can I learn mo">integrations page</a>.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-5" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-5" daa-ll="open-5--Where can I learn ab">
            Where can I learn about your document security standards?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-5" id="accordion-1-content-5" hidden="true" class="descr-details"><div>Acrobat is backed by Adobe’s security standards. <a href="/trust/document-cloud-security/" aria-label="Learn more Document Cloud Security" daa-ll="Learn more-7--Where can I learn ab">Learn more</a></div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-6" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-6" daa-ll="open-6--In what languages is">
            In what languages is Acrobat available? What languages can I choose from?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-6" id="accordion-1-content-6" hidden="true" class="descr-details"><div>See the <a href="https://helpx.adobe.com/acrobat/system-requirements.html" daa-ll="Acrobat system requi-9--In what languages is">Acrobat system requirements page</a> for information.</div></div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>background</div>
            <div><strong>#fff</strong></div>
          </div>
        </div>
      </div>
      <div class="section" data-has-placeholders="true" daa-lh="s12">
        <div class="text l-lockup max-width-8-desktop center xxl-spacing xl-button l-title text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h2 id="were-here-to-help" class="heading-xl">We’re here to help.</h2>
              <p class="body-l">Contact us to find out more about plans and pricing for your business or to get support for your existing Acrobat plan.</p>
              <div class="cta-container"><p class="icon-area action-area"><a href="/acrobat/contact/" aria-label="Contact Sales Acrobat" class="con-button blue" daa-ll="Contact Sales-1--We re here to help">Contact Sales</a> <span class="icon icon-device-phone margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-device-phone"><path fill="currentColor" fill-rule="evenodd" d="M13,0H5A1,1,0,0,0,4,1V17a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V1A1,1,0,0,0,13,0ZM8.5,1h1a.521.521,0,0,1,.5.5.52.52,0,0,1-.5.5h-1A.511.511,0,0,1,8,1.5.512.512,0,0,1,8.5,1ZM9,17.55a1.05,1.05,0,1,1,1.05-1.05A1.05,1.05,0,0,1,9,17.55ZM13,15H5V3h8Z"></path></svg></span><a href="tel:phone business geo" number-type="phone-business" class="geo-pn21" daa-ll="800 915 9430-2--We re here to help">800-915-9430</a></p></div>
            </div>
          </div>
        </div>
        
      </div>
    <div class="section promo-sticky-section hide-sticky-section sticky-bottom static-links" daa-lh="s13">
  <div class="notification ribbon space-between dark con-block" style="background: rgb(0, 0, 0);" data-notification-id="notification-1779409382679-fxfzfzlhk" data-block-status="loaded" aria-label="Explore new Acrobat Studio for teams." role="region" daa-lh="b1|notification">
    
    <div class="foreground container"><div class="text">
        <p class="icon-area"><a href="/dc-shared/assets/images/product-icons/svg/acrobat-pro-40.svg" class="static" daa-ll="no label-1--"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro.svg" alt=""></picture></a></p><div class="copy-wrap"><h2 id="explore-new-acrobat-studio-for-teams-2" class="heading-m">Explore new Acrobat Studio for teams.</h2><p class="body-s">Get the essential productivity solution.</p></div>
        
        
        <p class="body-s action-area"><a href="/acrobat/pricing/business/" aria-label="Compare plans Business Pricing Plans" class="con-button outline button-l" daa-ll="Compare plans-2--Explore new Acrobat ">Compare plans</a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="crm" data-quantity="1" data-wcs-osi="SfkorgyrBAsqBVpyKddQQEn6jR0ItBohpXc74sZcKHg" data-extra-options="{&quot;cs&quot;:&quot;t&quot;}" class="con-button blue button-l placeholder-resolved" aria-label="Buy now Acrobat Studio for teams" href="https://commerce.adobe.com/store/segmentation?cli=doc_cloud&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=COM&amp;ot=BASE&amp;cs=t&amp;pa=PA-1807&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="miniplans-buy-acrobat" daa-ll="Buy now-3--Explore new Acrobat "><span style="pointer-events: none;">Buy now</span></a></p>
      </div></div>
  <button aria-label="Close Promotional Banner" class="close" daa-ll="Close Promotional Ba-4--Explore new Acrobat "><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
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
      <div><strong>Sticky bottom, static links</strong></div>
    </div>
  </div>
</div></main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409382679-fxfzfzlhk"></div><div id="page-load-ok-milo" style="display: none;"></div></body></html>