<?php
require_once dirname(__DIR__, 5) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Government</title>
    <link rel="canonical" href="/acrobat/business/industries/government/">
    <meta name="description" content="Citizen and community needs keep growing. Stay up to speed by uniting powerful e-signature capabilities with the Adobe tools they already know and trust.">
    <meta property="og:title" content="Government">
    <meta property="og:description" content="Citizen and community needs keep growing. Stay up to speed by uniting powerful e-signature capabilities with the Adobe tools they already know and trust.">
    <meta property="og:image" content="acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Government">
    <meta name="twitter:description" content="Citizen and community needs keep growing. Stay up to speed by uniting powerful e-signature capabilities with the Adobe tools they already know and trust.">
    <meta name="twitter:image" content="acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=1200&amp;format=pjpg&amp;optimize=medium">
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
    let link = document.head.querySelector(`link[href="/acrobat/business/industries/$%7Bhref%7D/"]`);
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/acrobat/styles/styles.css"><meta property="og:locale" content="en-US"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/utils/decorate.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/marquee/marquee.js"><link rel="stylesheet" href="/libs/blocks/marquee/marquee.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/aside/aside.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/icon-block/icon-block.css"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="/libs/features/icons/icons.css"><link rel="stylesheet" href="/libs/blocks/media/media.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Acrobat","item":"/acrobat/"},{"@type":"ListItem","position":3,"name":"Industries","item":"/acrobat/business/industries/"},{"@type":"ListItem","position":4,"name":"Government","item":"/acrobat/business/industries/government/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/aside/aside.js"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"></head>
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
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu feds-navItem--active feds-navItem--activeDeferred" daa-lh="PDFs E signatures" style="width: 150px;">
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
              <a href="/acrobat/business/" class="feds-navLink" daa-ll="Acrobat for business-2">Acrobat for business</a>
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
                <li><span aria-hidden="true">/</span><a href="/acrobat/business/industries/">Industries</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Government</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Acrobat for business_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Acrobat for business_localNav|open">Acrobat for business</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem" role="listitem">
              <a href="/acrobat/business/" class="feds-navLink" daa-ll="Acrobat for business-2" data-title="Acrobat for business" tabindex="-1" aria-hidden="true">Overview</a>
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
            </div></div><a href="/acrobat/business/industries/government/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" daa-lh="s1">
        
        <div class="marquee small dark static-links" data-block-status="loaded" daa-lh="b1|marquee">
          
          <div class="background">
            <div class="mobile-only expand-background" style="background: linear-gradient(85deg, rgb(179, 10, 1) 0%, rgb(199, 34, 22) 50%, rgb(254, 142, 119) 100%);"></div>
            <div class="tablet-only expand-background" style="background: linear-gradient(85deg, rgb(179, 10, 1) 0%, rgb(199, 34, 22) 50%, rgb(254, 142, 119) 100%);"></div>
            <div class="desktop-only expand-background" style="background: linear-gradient(85deg, rgb(179, 10, 1) 0%, rgb(199, 34, 22) 50%, rgb(254, 142, 119) 100%);"></div>
          </div><div class="foreground container"><div class="text">
              <p class="detail-m">ADOBE DOCUMENT CLOUD FOR GOVERNMENT</p>
              <h1 id="give-citizens-a-faster-digital-way-to-sign" class="heading-xl">Give citizens a faster digital way to sign.</h1>
              <p class="body-m">Citizen and community needs keep growing. Stay up to speed by uniting powerful e-signature capabilities with the Adobe tools they already know and trust.</p>
              <p class="action-area"><a href="/acrobat/business/contact/" class="con-button blue button-l button-justified-mobile" daa-ll="Contact Sales-1--Give citizens a fast">Contact Sales</a></p>
            </div><div class="asset image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_1389236a02754d6e2727e72c6ee3acd053b6f32c1.png?width=750&amp;format=png&amp;optimize=medium" width="640" height="466">
              </picture>
            </div></div>
        </div>
      </div>
      <div class="section" daa-lh="s2">
        <div class="aside notification medium con-block" data-block-status="loaded" style="background: rgb(245, 245, 245);" daa-lh="b1|aside">
          
          <div class="foreground container">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_1a54fc501b3feda2c01ea209f26361b12cf4ec7e8.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_1a54fc501b3feda2c01ea209f26361b12cf4ec7e8.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/business/industries/media_1a54fc501b3feda2c01ea209f26361b12cf4ec7e8.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="2021 Microsoft partner of the year Logo" src="/acrobat/business/industries/media_1a54fc501b3feda2c01ea209f26361b12cf4ec7e8.png?width=750&amp;format=png&amp;optimize=medium" width="336" height="224">
              </picture>
            </div>
            <div class="text">
              <h2 id="adobe-is-fedramp-moderate-authorized" class="heading-s">Adobe is FedRAMP Moderate Authorized.</h2>
              <p class="body-s">Adobe Acrobat Sign is now FedRAMP Moderate Authorized — allowing your agency to address existing public sector workforce pain points and enabling government growth toward long-term IT modernization.</p>
              <p class="body-s action-area"><a href="https://blog.adobe.com/en/publish/2022/06/06/adobe-reaches-public-sector-milestone-with-fedramp-moderate-authorization-for-adobe-acrobat-sign-for-government" class="con-button outline" daa-ll="Learn more-1--Adobe is FedRAMP Mod">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s3">
        <div class="text intro center no-spacing-bottom text-block con-block max-width-8-desktop xxl-spacing-top xl-spacing-bottom" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h3 id="delight-citizens-with-paperless-signatures" class="heading-l">Delight citizens with paperless signatures.</h3>
              <p class="body-m">Cut costs while empowering your teams to deliver the fast, mobile-friendly services your citizens need. With Acrobat Sign, it’s easy to securely send digital documents for e-signature and track every step of the process from any device, anywhere.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section four-up xl-spacing" daa-lh="s4">
        <div class="icon-block vertical small xs-spacing con-block" data-block-status="loaded" daa-lh="b1|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area">
                <picture>
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1317df4504c82a3cdcedbb6183d6269a27cdaa108.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1317df4504c82a3cdcedbb6183d6269a27cdaa108.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/business/industries/media_1317df4504c82a3cdcedbb6183d6269a27cdaa108.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/acrobat/business/industries/media_1317df4504c82a3cdcedbb6183d6269a27cdaa108.png?width=750&amp;format=png&amp;optimize=medium" width="50" height="56">
                </picture>
              </p>
              <h3 id="support-any-mission" class="heading-s">Support any mission.</h3>
              <p class="body-m">E-signatures improve efficiencies across all departments in your agency — from mission-critical services like requests for permits, construction planning, or health services to internal operations like <a href="/dc-shared/assets/pdf/acrobat/business/industries/adobe-sign-for-hr-efficiency.pdf" target="_blank" daa-ll="human resources-1--Support any mission">human resources</a>, <a href="/dc-shared/assets/pdf/acrobat/business/industries/adobe-sign-for-government-procurement-agility.pdf" target="_blank" daa-ll="procurement-2--Support any mission">procurement</a>, and IT.</p>
            </div>
          </div>
        </div>
        <div class="icon-block vertical small xs-spacing con-block" data-block-status="loaded" daa-lh="b2|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area">
                <picture>
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1bb0f151b30b16cccac04b611c4d935ac51cea5d6.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1bb0f151b30b16cccac04b611c4d935ac51cea5d6.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/business/industries/media_1bb0f151b30b16cccac04b611c4d935ac51cea5d6.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/acrobat/business/industries/media_1bb0f151b30b16cccac04b611c4d935ac51cea5d6.png?width=750&amp;format=png&amp;optimize=medium" width="69" height="57">
                </picture>
              </p>
              <h3 id="make-it-automatic" class="heading-s">Make it automatic.</h3>
              <p class="body-m">Employee-driven and <a href="/acrobat/business/features/document-workflows/" daa-ll="self serve workflows-1--Make it automatic">self-serve workflows</a> make it easy to initiate and track signing processes, enforce deadlines, and archive final documents automatically, complete with audit trails.</p>
              <div class="cta-container"><p class="action-area"><a href="/acrobat/business/compliance/electronic-signature-legality/" daa-ll="Learn more about aut-2--Make it automatic">Learn more about automation</a></p></div>
            </div>
          </div>
        </div>
        <div class="icon-block vertical small xs-spacing con-block" data-block-status="loaded" daa-lh="b3|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area">
                <picture>
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1fefdab6be75fb9389056544134b601f7a4f71988.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1fefdab6be75fb9389056544134b601f7a4f71988.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/business/industries/media_1fefdab6be75fb9389056544134b601f7a4f71988.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/acrobat/business/industries/media_1fefdab6be75fb9389056544134b601f7a4f71988.png?width=750&amp;format=png&amp;optimize=medium" width="49" height="57">
                </picture>
              </p>
              <h3 id="get-everyones-signature" class="heading-s">Get everyone’s signature.</h3>
              <p class="body-m"><a href="/sign/" daa-ll="Legal e signatures-1--Get everyone s signa">Legal e-signatures</a> let you choose from a variety of signer identity verification methods, including US government-issued IDs, certificate-based employee IDs like PIV or CAC cards, and more.</p>
              <div class="cta-container"><p class="action-area"><a href="/acrobat/business/compliance/electronic-signature-legality/" daa-ll="Learn about e signat-2--Get everyone s signa">Learn about e-signature legality</a></p></div>
            </div>
          </div>
        </div>
        <div class="icon-block vertical small xs-spacing con-block" data-block-status="loaded" daa-lh="b4|icon-block">
          <div class="foreground">
            <div class="text-content">
              <p class="icon-area">
                <picture>
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1f0601c8b6dd2723651e64eaa713b00d705221556.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/acrobat/business/industries/media_1f0601c8b6dd2723651e64eaa713b00d705221556.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/acrobat/business/industries/media_1f0601c8b6dd2723651e64eaa713b00d705221556.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/acrobat/business/industries/media_1f0601c8b6dd2723651e64eaa713b00d705221556.png?width=750&amp;format=png&amp;optimize=medium" width="62" height="65">
                </picture>
              </p>
              <h3 id="ensure-compliance" class="heading-s">Ensure compliance.</h3>
              <p class="body-m">E-signature processes protect sensitive information, ensure legality and accessibility, and enforce regulatory and policy rules automatically — so you can <a href="/trust/compliance/compliance-list/" daa-ll="meet requirements-1--Ensure compliance">meet requirements</a> for FedRAMP, HIPAA, GDPR, and more.</p>
              <div class="cta-container"><p class="action-area"><a href="/acrobat/business/resources/compliance/" daa-ll="Learn more about com-2--Ensure compliance">Learn more about compliance</a></p></div>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Four up, xl spacing</div>
          </div>
        </div>
      </div>
      <div class="section xl-spacing" daa-lh="s5" style="background: linear-gradient(85deg, rgb(254, 142, 119) 0%, rgb(254, 142, 119) 50%, rgb(179, 13, 0) 100%);">
        <div class="media checklist dark static-links con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_18b3affa85c17631bb88b4282e10e80fb25b7d7fb.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_18b3affa85c17631bb88b4282e10e80fb25b7d7fb.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/business/industries/media_18b3affa85c17631bb88b4282e10e80fb25b7d7fb.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_18b3affa85c17631bb88b4282e10e80fb25b7d7fb.png?width=750&amp;format=png&amp;optimize=medium" width="1394" height="1046">
              </picture>
            </div>
            <div class="text">
              <h3 id="go-digital-and-get-more-out-of-your-systems" class="heading-xl">Go digital, and get more out of your systems.</h3>
              <p class="icon-area"><span class="icon icon-checkmark margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span>Easily integrate e-signatures into your Microsoft systems and other business applications you already use. Our prebuilt integrations help you get even more value from Microsoft, Salesforce, ServiceNow, Workday, and more. <a href="/acrobat/business/integrations/" daa-ll="Learn how to get mor-1--Go digital and get m">Learn how to get more from your business systems.</a></p>
              <p class="icon-area"><span class="icon icon-checkmark margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-checkmark"><title>Checkmark</title><path fill="currentColor" fill-rule="evenodd" d="M15.656,3.8625l-.7275-.5665a.5.5,0,0,0-.7.0875L7.411,12.1415,4.0875,8.8355a.5.5,0,0,0-.707,0L2.718,9.5a.5.5,0,0,0,0,.707l4.463,4.45a.5.5,0,0,0,.75-.0465L15.7435,4.564A.5.5,0,0,0,15.656,3.8625Z"></path></svg></span>E-signatures make work faster, easier, and more secure — but getting started requires a team effort. Read this eBook to get smart about the benefits so you can be an advocate for transforming your agency’s processes. <a href="/content/dam/dx-dc/pdf/ue/your-signature-move-gov-ue.pdf" target="_blank" daa-ll="Read about five key -2--Go digital and get m">Read about five key reasons to use e-signatures.</a></p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>background</div>
            <div>linear-gradient(85deg, rgba(254,142,119,1) 0%, rgba(254,142,119,1) 50%, rgba(179,13,0,1) 100%)</div>
          </div>
          <div>
            <div>style</div>
            <div>Xl spacing</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s6">
        <div class="text intro center text-block con-block max-width-8-desktop xxl-spacing-top xl-spacing-bottom" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h3 id="how-can-adobe-help-transform-your-agency-take-a-look" class="heading-l">How can Adobe help transform your agency? Take a look.</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section two-up l-spacing grid-width-10" daa-lh="s7">
        <div class="media con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_16e8da7e64971104b45ef9f7ce65df8f58f0df1b6.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_16e8da7e64971104b45ef9f7ce65df8f58f0df1b6.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_16e8da7e64971104b45ef9f7ce65df8f58f0df1b6.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="img" src="/acrobat/business/industries/media_16e8da7e64971104b45ef9f7ce65df8f58f0df1b6.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1004" height="582">
              </picture>
            </div>
            <div class="text">
              <h4 id="state-of-utah" class="heading-s">State of Utah</h4>
              <p class="body-s">With Acrobat Sign, the State of Utah was able to keep government running while accelerating telework during a dual crisis.</p>
              <p class="body-s action-area-plain"><a href="https://blog.adobe.com/en/publish/2020/04/27/the-state-of-utah-uses-adobe-sign-to-accelerate-telework-during-crisis" daa-ll="Read the State of Ut-1--State of Utah">Read the State of Utah’s story</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_139a552d59a91703657f2e0a29d6ed72eac4025e5.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_139a552d59a91703657f2e0a29d6ed72eac4025e5.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_139a552d59a91703657f2e0a29d6ed72eac4025e5.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="img" src="/acrobat/business/industries/media_139a552d59a91703657f2e0a29d6ed72eac4025e5.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="1004" height="582">
              </picture>
            </div>
            <div class="text">
              <h4 id="colorado-department-of-transportation" class="heading-s">Colorado Department of Transportation</h4>
              <p class="body-s">Read about how the Colorado Department of Transportation transformed its construction planning process using e-signatures.</p>
              <p class="body-s action-area-plain"><a href="https://blog.adobe.com/en/publish/2020/01/13/cdot-saves-time-and-money-paving-the-way-to-digital-with-adobe-sign" daa-ll="Read Colorado DOT s -1--Colorado Department ">Read Colorado DOT’s story</a></p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Two up, l spacing, grid width 10</div>
          </div>
        </div>
      </div>
      <div class="section grid-width-8" style="background: rgb(0, 0, 0);" daa-lh="s8">
        <div class="text center dark l-spacing text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h3 id="a-total-solution-for-going-paperless-with-e-signatures" class="heading-l">A total solution for going paperless with e-signatures.</h3>
              <p class="body-m">Transform your agency with end-to-end digital document and form processes that make signing and approvals easy and legal.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Grid width 8</div>
          </div>
          <div>
            <div>background</div>
            <div>#000000</div>
          </div>
        </div>
      </div>
      <div class="section four-up s-spacing dark" daa-lh="s9" style="background: rgb(0, 0, 0);">
        <div class="media static-links con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_19c70efcf06f7d56d8c86c2c6086c57b60973c42f.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_19c70efcf06f7d56d8c86c2c6086c57b60973c42f.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_19c70efcf06f7d56d8c86c2c6086c57b60973c42f.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Sign on the digital line" src="/acrobat/business/industries/media_19c70efcf06f7d56d8c86c2c6086c57b60973c42f.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="552" height="414">
              </picture>
            </div>
            <div class="text">
              <h3 id="sign-on-the-digital-line" class="heading-s">Sign on the digital line.</h3>
              <p class="body-s">Automate legal and secure electronic signature processes with Acrobat Sign.</p>
              <p class="body-s action-area-plain"><a href="/sign/electronic-signatures/" daa-ll="Learn more-1--Sign on the digital ">Learn more</a></p>
            </div>
          </div></div></div>
        <div class="media static-links con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_1ad15c377b11c04445ab098f2870f817e43d931e5.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_1ad15c377b11c04445ab098f2870f817e43d931e5.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_1ad15c377b11c04445ab098f2870f817e43d931e5.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Sign on the digital line" src="/acrobat/business/industries/media_1ad15c377b11c04445ab098f2870f817e43d931e5.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="552" height="414">
              </picture>
            </div>
            <div class="text">
              <h3 id="drive-document-workflow-efficiencies" class="heading-s">Drive document workflow efficiencies.</h3>
              <p class="body-s">Combine Adobe Acrobat with workflow automation and e-signatures to transform your document processes.</p>
              <p class="body-s action-area-plain"><a href="/acrobat/business/" daa-ll="Learn more-1--Drive document workf">Learn more</a></p>
            </div>
          </div></div></div>
        <div class="media static-links con-block" data-block-status="loaded" daa-lh="b3|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_10a5f8442895a62a2124d0f61dd7546e85dbf0b91.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_10a5f8442895a62a2124d0f61dd7546e85dbf0b91.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_10a5f8442895a62a2124d0f61dd7546e85dbf0b91.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Sign on the digital line" src="/acrobat/business/industries/media_10a5f8442895a62a2124d0f61dd7546e85dbf0b91.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="552" height="414">
              </picture>
            </div>
            <div class="text">
              <h3 id="make-filling-out-forms-easy" class="heading-s">Make filling out forms easy.</h3>
              <p class="body-s">Use Adobe Experience Manager Forms to build enrollment and onboarding journeys on par with private sector experiences.</p>
              <p class="body-s action-area-plain"><a href="https://business.adobe.com/products/experience-manager/forms/aem-forms.html" daa-ll="Learn more-1--Make filling out for">Learn more</a></p>
            </div>
          </div></div></div>
        <div class="media static-links con-block" data-block-status="loaded" daa-lh="b4|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_19e4612346b4ad9359266109e265b23d527ac992f.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_19e4612346b4ad9359266109e265b23d527ac992f.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_19e4612346b4ad9359266109e265b23d527ac992f.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Sign on the digital line" src="/acrobat/business/industries/media_19e4612346b4ad9359266109e265b23d527ac992f.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="552" height="414">
              </picture>
            </div>
            <div class="text">
              <h3 id="ensure-government-continuity" class="heading-s">Ensure government continuity.</h3>
              <p class="body-s">Continue delivering essential support and resources when disaster hits.</p>
              <p class="body-s action-area-plain"><a href="/" daa-ll="Learn more-1--Ensure government co">Learn more</a></p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Four up, s spacing, dark</div>
          </div>
          <div>
            <div>background</div>
            <div>#000000</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s10">
        <div class="text intro center text-block con-block max-width-8-desktop xxl-spacing-top xl-spacing-bottom" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="explore-these-resources-build-better-workflows" class="heading-l">Explore these resources. Build better workflows.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section three-up s-spacing" daa-lh="s11">
        <div class="media con-block" data-block-status="loaded" daa-lh="b1|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_12c98eabda5bdacb3de3ca7e8cc38e9759fbebd1c.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_12c98eabda5bdacb3de3ca7e8cc38e9759fbebd1c.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_12c98eabda5bdacb3de3ca7e8cc38e9759fbebd1c.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_12c98eabda5bdacb3de3ca7e8cc38e9759fbebd1c.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="376" height="231">
              </picture>
            </div>
            <div class="text">
              <h3 id="rapid-response" class="heading-s">Rapid response.</h3>
              <p class="body-s">Get started in days, not months. Visit the Acrobat Sign Rapid Response Resource Hub, where you’ll find quick-start learning videos and step-by-step use case recipes.</p>
              <p class="body-s action-area-plain"><a href="https://acrobatusers.com/gov-rapid-response-resource-hub/" daa-ll="Explore the hub now-1--Rapid response">Explore the hub now</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b2|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_14de800b51c76c33d44eaf02982e1c352d5b8a9f9.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_14de800b51c76c33d44eaf02982e1c352d5b8a9f9.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_14de800b51c76c33d44eaf02982e1c352d5b8a9f9.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_14de800b51c76c33d44eaf02982e1c352d5b8a9f9.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="376" height="231">
              </picture>
            </div>
            <div class="text">
              <h3 id="process-transformation" class="heading-s">Process transformation.</h3>
              <p class="body-s">Check out this infographic to find ways to streamline your document and signature processes to delight citizens, save time, and enhance security.</p>
              <p class="body-s action-area-plain"><a href="/dc-shared/assets/pdf/acrobat/business/industries/adobe-sign-for-hr-efficiency.pdf" target="_blank" daa-ll="Get the infographic-1--Process transformati">Get the infographic</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b3|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_1bc2d1797b2ea23bf907c435fc02ad19a1a5e054a.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_1bc2d1797b2ea23bf907c435fc02ad19a1a5e054a.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_1bc2d1797b2ea23bf907c435fc02ad19a1a5e054a.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_1bc2d1797b2ea23bf907c435fc02ad19a1a5e054a.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="376" height="231">
              </picture>
            </div>
            <div class="text">
              <h3 id="21st-century-idea-compliance" class="heading-s">21st century idea compliance.</h3>
              <p class="body-s">Acrobat Sign helps agencies comply with the 21st Century Integrated Digital Experience Act (IDEA) to deliver modern signature experiences.</p>
              <p class="body-s action-area-plain"><a href="/dc-shared/assets/pdf/acrobat/business/industries/document-cloud-and-21st-century-idea-sb-ue.pdf" target="_blank" daa-ll="Download the brief-1--21st century idea co">Download the brief</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b4|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_15bd16a654e75dcdcdc1c92fb940cc9a4b90ed2bb.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_15bd16a654e75dcdcdc1c92fb940cc9a4b90ed2bb.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_15bd16a654e75dcdcdc1c92fb940cc9a4b90ed2bb.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_15bd16a654e75dcdcdc1c92fb940cc9a4b90ed2bb.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="376" height="231">
              </picture>
            </div>
            <div class="text">
              <h3 id="faster-service-delivery" class="heading-s">Faster service delivery.</h3>
              <p class="body-s">Accelerate the process of sending and collecting signatures while delivering cost-effective digital services with trusted, legal e-signatures.</p>
              <p class="body-s action-area-plain"><a href="/dc-shared/assets/pdf/acrobat/business/industries/adobe-document-cloud-government-sb-ue.pdf" target="_blank" daa-ll="Download the brief-1--Faster service deliv">Download the brief</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b5|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_169385f07e07c2c57d8ff161ce5906d07eb0eac3b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_169385f07e07c2c57d8ff161ce5906d07eb0eac3b.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/business/industries/media_169385f07e07c2c57d8ff161ce5906d07eb0eac3b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Inserting image..." src="/acrobat/business/industries/media_169385f07e07c2c57d8ff161ce5906d07eb0eac3b.png?width=750&amp;format=png&amp;optimize=medium" width="379" height="213">
              </picture>
            </div>
            <div class="text">
              <h3 id="e-signature-legality" class="heading-s">E-signature legality.</h3>
              <p class="body-s">Acrobat Sign is the world’s most trusted e-signature solution, built to meet the broadest range of legal requirements for ultimate compliance.</p>
              <p class="body-s action-area-plain"><a href="/acrobat/business/compliance/electronic-signature-legality/" daa-ll="Learn more about e s-1--E signature legality">Learn more about e-signature legality</a></p>
            </div>
          </div></div></div>
        <div class="media con-block" data-block-status="loaded" daa-lh="b6|media">
          
        <div class="container foreground"><div class="media-row">
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/acrobat/business/industries/media_1f18cc2f311ad31214e5a56f5966fa7ec05880ade.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/business/industries/media_1f18cc2f311ad31214e5a56f5966fa7ec05880ade.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/acrobat/business/industries/media_1f18cc2f311ad31214e5a56f5966fa7ec05880ade.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/acrobat/business/industries/media_1f18cc2f311ad31214e5a56f5966fa7ec05880ade.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="376" height="231">
              </picture>
            </div>
            <div class="text">
              <h3 id="security-and-compliance" class="heading-s">Security and compliance.</h3>
              <p class="body-s">Trust Adobe Document Cloud to help you comply with standards like FedRAMP, HIPAA, SOC 2 Type 2, and US Section 508.</p>
              <p class="body-s action-area-plain"><a href="/dc-shared/assets/pdf/acrobat/business/industries/document-cloud-and-21st-century-idea-sb-ue.pdf" target="_blank" daa-ll="Download the brief-1--Security and complia">Download the brief</a></p>
            </div>
          </div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>Three up, s spacing</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s12">
        <div><div class="fragment" data-path="/dc-shared/fragments/shared-fragments/business/black-get-in-touch-contact"><div class="section" data-has-placeholders="true">
  <div class="aside small dark static-links con-block" data-block-status="loaded" style="background: rgb(0, 0, 0);" daa-lh="b1|aside">
    
    <div class="foreground container">
      <div class="image">
        <picture>
          <source type="image/webp" srcset="/dc-shared/fragments/shared-fragments/business/media_14ccd8af4a8a22a68f0ae77f6cbac4ac966ba5b3c.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
          <source type="image/webp" srcset="/dc-shared/fragments/shared-fragments/business/media_14ccd8af4a8a22a68f0ae77f6cbac4ac966ba5b3c.png?width=750&amp;format=webply&amp;optimize=medium">
          <source type="image/png" srcset="/dc-shared/fragments/shared-fragments/business/media_14ccd8af4a8a22a68f0ae77f6cbac4ac966ba5b3c.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
          <img loading="lazy" alt="" src="/dc-shared/fragments/shared-fragments/business/media_14ccd8af4a8a22a68f0ae77f6cbac4ac966ba5b3c.png?width=750&amp;format=png&amp;optimize=medium" width="1023" height="530">
        </picture>
      </div>
      <div class="text">
        <h3 id="get-in-touch-were-here-to-help" class="heading-xl">Get in touch. We’re here to help.</h3>
        <p class="body-s">Whether you need some basic information about our solutions or would like a customized quote for your unique organization, we’re here to answer your questions.</p>
        <p class="icon-area action-area"><a href="/acrobat/contact/" class="con-button blue" daa-ll="Contact Sales-1--Get in touch We re h">Contact Sales</a> <span class="icon icon-device-phone margin-inline-start margin-inline-end" data-svg-injected="true"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 18 18" width="18" class="icon-milo icon-milo-device-phone"><path fill="currentColor" fill-rule="evenodd" d="M13,0H5A1,1,0,0,0,4,1V17a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V1A1,1,0,0,0,13,0ZM8.5,1h1a.521.521,0,0,1,.5.5.52.52,0,0,1-.5.5h-1A.511.511,0,0,1,8,1.5.512.512,0,0,1,8.5,1ZM9,17.55a1.05,1.05,0,1,1,1.05-1.05A1.05,1.05,0,0,1,9,17.55ZM13,15H5V3h8Z"></path></svg></span><a href="tel:phone business geo" daa-ll="800 915 9430-2--Get in touch We re h">800-915-9430</a></p>
      </div>
    </div>
  </div>
</div></div></div>
      </div>
    </main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div id="page-load-ok-milo" style="display: none;"></div></body></html>