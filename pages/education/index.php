<?php
require_once dirname(__DIR__, 2) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Adobe for Students | Build Skills That Launch Careers</title>
    <link rel="canonical" href="/education/">
    <meta name="description" content="Whether you're producing a video, building a study guide, or designing standout social content — Adobe helps students create work worth sharing.">
    <meta property="og:title" content="Adobe for Students | Build Skills That Launch Careers">
    <meta property="og:description" content="Whether you're producing a video, building a study guide, or designing standout social content — Adobe helps students create work worth sharing.">
    <meta property="og:url" content="/education/">
    <meta property="og:image" content="media_1b3335b8bd24eec50ae1d477707ec03ee9027b075.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="media_1b3335b8bd24eec50ae1d477707ec03ee9027b075.png?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe for Students | Build Skills That Launch Careers">
    <meta name="twitter:description" content="Whether you're producing a video, building a study guide, or designing standout social content — Adobe helps students create work worth sharing.">
    <meta name="twitter:image" content="media_1b3335b8bd24eec50ae1d477707ec03ee9027b075.png?width=1200&amp;format=pjpg&amp;optimize=medium">
<meta name="footer-source" content="/federal/footer/footer">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="robots" content="noindex, nofollow">
    <meta name="mweb" content="on"><!-- Modifying this file will impact your performance -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="head-loaded" content="true">
    
    <script>
  const libs = (() => {
    const { hostname, search } = window.location;
    if (!['.aem.', '.stage.', 'local', '.da.'].some((i) => hostname.includes(i))) return '/libs';
    const branch = new URLSearchParams(search).get('milolibs') || 'main';
    if (!/^[a-zA-Z0-9_-]+$/.test(branch)) throw new Error('Invalid branch name.');
    if (branch === 'local') return 'http://localhost:6456/libs';
    return branch.includes('--') ? `https://${branch}.aem.live/libs` : `https://${branch}--milo--adobecom.aem.live/libs`;
  })();

  const miloStyles = document.createElement('link');
  const miloUtils = document.createElement('link');
  const miloDecorate = document.createElement('link');

  miloStyles.setAttribute('as', 'style');
  miloStyles.setAttribute('href', `${libs}/styles/styles.css`);

  [miloUtils, miloDecorate].forEach((tag) => {
    tag.setAttribute('crossorigin', 'true');
    tag.setAttribute('as', 'script');
  })

  miloUtils.setAttribute('href', `${libs}/utils/utils.js`);
  miloDecorate.setAttribute('href', `${libs}/utils/decorate.js`);

  [miloStyles, miloUtils, miloDecorate].forEach((tag) => tag.setAttribute('rel', 'preload'));
  document.head.append(miloStyles, miloUtils, miloDecorate);

  /* hreflang links for phase 1 only. Replace this with normal hreflang code when going live with rest of world. */
  const userAgentMeta = document.querySelector('meta[name="hreflinksuseragents"]');
  const allowedAgents = userAgentMeta && userAgentMeta.content.split(',');
  const userAgentString = window.navigator.userAgent;
  const isAllowedAgent = allowedAgents && allowedAgents.some((agent) => userAgentString.includes(agent.trim()));
  const isTestOverride = window.location.search.includes('includehreflang');

  const flagMeta = document.querySelector('meta[name="head-loaded"]');
  const ssrFlag = flagMeta?.content === 'true';

  const k12Map = new Map([
    ['en-US', ''],
    ['ja-JP', '/jp'],
    ['ko-KR', '/kr'],
    ['tr-TR', '/tr'],
    ['en-CA', '/ca'],
    ['ar-AE', '/ae_ar'],
    ['fr-CA', '/ca_fr'],
    ['da-DK', '/dk'],
    ['hu-HU', '/hu'],
    ['uk-UA', '/ua'],
    ['x-default', ''],
  ]);

  const educationMap = new Map([
    ['en-US', ''],
    ['en-AU', '/au'],
    ['de-DE', '/de'],
    ['es-ES', '/es'],
    ['fr-FR', '/fr'],
    ['it-IT', '/it'],
    ['ja-JP', '/jp'],
    ['ko-KR', '/kr'],
    ['zh-HK', '/hk_zh'],
    ['zh-TW', '/tw'],
    ['nl-NL', '/nl'],
    ['pl-PL', '/pl'],
    ['tr-TR', '/tr'],
    ['en-GB', '/uk'],
    ['en-CA', '/ca'],
    ['ar-AE', '/ae_ar'],
    ['en-AE', '/ae_en'],
    ['de-AT', '/at'],
    ['en-BE', '/be_en'],
    ['fr-BE', '/be_fr'],
    ['fr-CA', '/ca_fr'],
    ['de-CH', '/ch_de'],
    ['fr-CH', '/ch_fr'],
    ['es-CL', '/cl'],
    ['en-GR', '/gr_en'],
    ['en-HK', '/hk_en'],
    ['en-IE', '/ie'],
    ['en-IL', '/il_en'],
    ['en-IN', '/in'],
    ['lt-LT', '/lt'],
    ['de-LU', '/lu_de'],
    ['en-LU', '/lu_en'],
    ['fr-LU', '/lu_fr'],
    ['en-DZ', '/mena_en'],
    ['en-NZ', '/nz'],
    ['ar-SA', '/sa_ar'],
    ['en-SA', '/sa_en'],
    ['en-TH', '/th_en'],
    ['th-TH', '/th_th'],
    ['en-ZA', '/za'],
    ['en-BJ', '/africa'],
    ['en-CM', '/africa'],
    ['en-MA', '/africa'],
    ['en-TG', '/africa'],
    ['en-TN', '/africa'],
    ['es-AR', '/ar'],
    ['es-CO', '/co'],
    ['es-CR', '/cr'],
    ['es-EC', '/ec'],
    ['ar-EG', '/eg_ar'],
    ['en-EG', '/eg_en'],
    ['es-GT', '/gt'],
    ['en-ID', '/id_en'],
    ['id-ID', '/id_id'],
    ['hi-IN', '/in_hi'],
    ['ar-KW', '/kw_ar'],
    ['en-KW', '/kw_en'],
    ['en-MY', '/my_en'],
    ['ms-MY', '/my_ms'],
    ['en-NG', '/ng'],
    ['es-PE', '/pe'],
    ['en-PH', '/ph_en'],
    ['fil-PH', '/ph_fil'],
    ['es-PR', '/pr'],
    ['ar-QA', '/qa_ar'],
    ['en-QA', '/qa_en'],
    ['en-VN', '/vn_en'],
    ['vi-VN', '/vn_vi'],
    ['da-DK', '/dk'],
    ['fi-FI', '/fi'],
    ['no-NO', '/no'],
    ['sv-SE', '/se'],
    ['es-PA', '/la'],
    ['es-SV', '/la'],
    ['es-VE', '/la'],
    ['es-MX', '/mx'],
    ['nl-BE', '/be_nl'],
    ['it-CH', '/ch_it'],
    ['cs-CZ', '/cz'],
    ['hu-HU', '/hu'],
    ['he-IL', '/il_he'],
    ['ar-IL', '/mena_ar'],
    ['ar-IQ', '/mena_ar'],
    ['ar-JO', '/mena_ar'],
    ['ar-LB', '/mena_ar'],
    ['ar-MA', '/mena_ar'],
    ['ar-OM', '/mena_ar'],
    ['pt-PT', '/pt'],
    ['ro-RO', '/ro'],
    ['sl-SI', '/si'],
    ['sk-SK', '/sk'],
    ['uk-UA', '/ua'],
    ['en-SG', '/sg'],
    ['pt-BR', '/br'],
    ['x-default', ''],
  ]);

  (() => {
    function createHreflangLinks() {
      const sitemapOrigin = 'https://www.adobe.com';
      const educationPathName = '/education.html';
      const k12PathName = '/education/k12.html';
      const { origin, pathname } = window.location;
      let sitemap;

      if (pathname.toLowerCase() === educationPathName) sitemap = educationMap;
      if (pathname.toLowerCase() === k12PathName) sitemap = k12Map;

      if (sitemap) {
        const linkElements = [];
        for (const [hreflang, href] of sitemap) {
          const link = document.createElement('link');
          link.rel = 'alternate';
          link.hreflang = hreflang;
          link.href = sitemapOrigin + href + pathname;
          linkElements.push(link);
        }

        const titleElement = document.head.querySelector('title');
        if (linkElements.length > 0 && titleElement) {
          titleElement.after(...linkElements);
        }
      }
    }

    if ((isAllowedAgent && !ssrFlag) || isTestOverride) {
      createHreflangLinks();
    }
  })();

  flagMeta.content = 'true';
</script><link as="style" href="/libs/styles/styles.css" rel="preload"><link crossorigin="true" as="script" href="/libs/utils/utils.js" rel="preload"><link crossorigin="true" as="script" href="/libs/utils/decorate.js" rel="preload">
    
    <style>body{display:block!important;}</style>
    <link rel="icon" href="/edu/img/favicons/favicon.ico"><link rel="apple-touch-icon" href="/edu/img/favicons/favicon-180.png">
                <link rel="manifest" href="/edu/img/favicons/favicon.webmanifest">
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/edu/styles/styles.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/edu/blocks/edu-hero-video/edu-hero-video.js"><link rel="stylesheet" href="/edu/blocks/edu-hero-video/edu-hero-video.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/video/video.js"><link rel="stylesheet" href="/libs/blocks/video/video.css"><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><link rel="stylesheet" href="/libs/blocks/tabs/tabs.css"><link rel="stylesheet" href="/libs/blocks/editorial-card/editorial-card.css"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><link rel="stylesheet" href="/libs/styles/rounded-corners.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/modal/modal.js"><link rel="stylesheet" href="/libs/blocks/modal/modal.css"><mas-commerce-service locale="en_US" language="en" country="US"></mas-commerce-service><link rel="stylesheet" href="/libs/blocks/aside/aside.css"><link rel="stylesheet" href="/libs/styles/iconography.css"><link rel="stylesheet" href="/libs/blocks/carousel/carousel.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Education","item":"/education/"}]}</script><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/adobetv/adobetv.js"><link rel="stylesheet" href="/libs/blocks/adobetv/adobetv.css"><link rel="stylesheet" href="/libs/blocks/accordion/accordion.css"><link rel="stylesheet" href="/libs/blocks/global-footer/global-footer.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"></head>
  <body class="mweb-enabled">
    <header class="global-navigation has-breadcrumbs ready local-nav" data-has-placeholders="true" daa-im="true" daa-lh="gnav|localnav-edu" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
        <div class="feds-brand-container">
          <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="dialog" aria-label="Navigation menu" aria-controls="feds-popup-1" data-feds-preventautoclose="">
      </button>
          <a href="/" class="feds-brand" daa-ll="Brand" aria-label="Adobe">
        <span class="feds-brand-image brand-image-only"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 64.57 35"><defs><style>.cls-1{fill: #eb1000;}</style></defs><path class="cls-1" d="M6.27,10.22h4.39l6.2,14.94h-4.64l-3.92-9.92-2.59,6.51h3.08l1.23,3.41H0l6.27-14.94ZM22.03,13.32c.45,0,.94.04,1.43.16v-3.7h3.88v14.72c-.89.4-2.81.89-4.73.89-3.48,0-6.47-1.98-6.47-5.93s2.88-6.13,5.89-6.13ZM22.52,22.19c.36,0,.65-.07.94-.16v-5.42c-.29-.11-.58-.16-.96-.16-1.27,0-2.45.94-2.45,2.92s1.2,2.81,2.47,2.81ZM34.25,13.32c3.23,0,5.98,2.18,5.98,6.02s-2.74,6.02-5.98,6.02-6-2.18-6-6.02,2.72-6.02,6-6.02ZM34.25,22.13c1.11,0,2.14-.89,2.14-2.79s-1.03-2.79-2.14-2.79-2.12.89-2.12,2.79.96,2.79,2.12,2.79ZM41.16,9.78h3.9v3.7c.47-.09.96-.16,1.45-.16,3.03,0,5.84,1.98,5.84,5.86,0,4.1-2.99,6.18-6.53,6.18-1.52,0-3.46-.31-4.66-.87v-14.72ZM45.91,22.17c1.34,0,2.56-.96,2.56-2.94,0-1.85-1.2-2.72-2.5-2.72-.36,0-.65.04-.91.16v5.35c.22.09.51.16.85.16ZM58.97,13.32c2.92,0,5.6,1.87,5.6,5.64,0,.51-.02,1-.09,1.49h-7.27c.4,1.32,1.56,1.94,3.01,1.94,1.18,0,2.27-.29,3.5-.82v2.97c-1.14.58-2.5.82-3.9.82-3.7,0-6.58-2.23-6.58-6.02s2.61-6.02,5.73-6.02ZM60.93,18.02c-.2-1.27-1.05-1.78-1.92-1.78s-1.58.54-1.87,1.78h3.79Z"></path></svg></span>
        
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu" daa-lh="Students Teachers">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Students Teachers-1" daa-lh="header|Open">
              Students &amp; Teachers
            </button>
            <div class="feds-popup" id="feds-popup-1">
        <div class="feds-menu-container">
          <div class="feds-menu-content"><div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      All-in-one
    </div><div class="feds-menu-items" daa-lh="All in one"><ul><li><a href="/education/students/creativecloud/" class="feds-navLink" daa-ll="Creative Cloud Pro for Student-1">
      <div class="feds-navLink-image"><picture><img loading="lazy" src="/federal/assets/svgs/creative-cloud-40.svg" alt="Adobe Creative Cloud"></picture></div>
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Creative Cloud Pro for Students</div>
      <div class="feds-navLink-description">Save 71% on Creative Cloud</div>
    </div>
    </a></li></ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Photography &amp; design
    </div><div class="feds-menu-items" daa-lh="Photography design"><ul><li><a href="/education/students/photoshop/" class="feds-navLink" daa-ll="Photoshop for Students-1">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Photoshop for Students</div>
      <div class="feds-navLink-description">Image editing and design for learning and projects</div>
    </div>
    </a></li><li><a href="/education/students/lightroom/" class="feds-navLink" daa-ll="Lightroom for Students-2">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Lightroom for Students</div>
      <div class="feds-navLink-description">Photo editing and organization</div>
    </div>
    </a></li><li><a href="/education/students/illustrator/" class="feds-navLink" daa-ll="Illustrator for Students-3">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Illustrator for Students</div>
      <div class="feds-navLink-description">Vector graphics and illustration</div>
    </div>
    </a></li></ul></div></div><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Video
    </div><div class="feds-menu-items" daa-lh="Video"><ul><li><a href="/education/students/premiere-pro/" class="feds-navLink" daa-ll="Premiere for Students-4">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Premiere for Students</div>
      <div class="feds-navLink-description">Video editing and production</div>
    </div>
    </a></li></ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Content creation
    </div><div class="feds-menu-items" daa-lh="Content creation"><ul><li><a href="/education/students/express/" class="feds-navLink" daa-ll="Express for Students-1">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Express for Students</div>
      <div class="feds-navLink-description">Design, video and photo app</div>
    </div>
    </a></li></ul></div></div><div class="feds-menu-section"><div class="feds-menu-headline" role="heading" aria-level="2">
      Studying &amp; collaboration
    </div><div class="feds-menu-items" daa-lh="Studying collaboration"><ul><li><a href="/education/students/acrobat/" class="feds-navLink" daa-ll="Acrobat for Students-2">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Acrobat for Students</div>
      <div class="feds-navLink-description">The secure PDF and e-signature solution</div>
    </div>
    </a></li><li><a href="/acrobat/student-spaces/" class="feds-navLink" daa-ll="Student Spaces-3">
      
      <div class="feds-navLink-content">
      <div class="feds-navLink-title">Student Spaces</div>
      <div class="feds-navLink-description">An AI study buddy that transforms notes into quizzes</div>
    </div>
    </a></li><li><div class="feds-cta-wrapper">
      <a href="/products/catalog/" class="feds-cta feds-cta--primary" daa-ll="See all products-4">See all products</a>
    </div></li></ul></div></div></div>
<div class="feds-menu-column"><div class="feds-menu-section"><div class="feds-promo-wrapper" daa-lh="promo-card">
      <div class="feds-promo">
    <a class="feds-promo-image" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="promo-image" aria-hidden="true" tabindex="-1">
          <picture>
          <source type="image/webp" srcset="/federal/media_1586fe36b5914a3481287a25197e05fbebfc9acd6.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
          <source type="image/webp" srcset="/federal/media_1586fe36b5914a3481287a25197e05fbebfc9acd6.png?width=750&amp;format=webply&amp;optimize=medium">
          <source type="image/png" srcset="/federal/media_1586fe36b5914a3481287a25197e05fbebfc9acd6.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
          <img loading="lazy" alt="decorative image" src="/federal/media_1586fe36b5914a3481287a25197e05fbebfc9acd6.png?width=750&amp;format=png&amp;optimize=medium" width="720" height="531">
        </picture>
        </a>
    <div class="feds-promo-content">
      <div>
        <div class="feds-promo-header" role="heading" aria-level="2">
        Students &amp; teachers save 71%
      </div>
        <p>Get 20+ apps for less including Photoshop, Illustrator, Premiere, and more.</p>
        <p><div class="feds-cta-wrapper">
      <a href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" class="feds-cta feds-cta--secondary" daa-ll="Buy now-1">Buy now</a>
    </div></p>
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
              <a class="feds-navLink" daa-ll="Overview-2" role="link" aria-disabled="true" aria-current="page" tabindex="0">Overview</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/k12/" class="feds-navLink" daa-ll="K 12-3">K-12</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/higher-ed/" class="feds-navLink" daa-ll="Higher Education-4">Higher Education</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/resources/" class="feds-navLink" daa-ll="Resources-5">Resources</a>
            </div><div class="feds-navItem" role="listitem">
              <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="feds-navLink placeholder-resolved" daa-ll="Buy now-6" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - Creative Cloud Pro - Students and teachers"><span style="pointer-events: none;">Buy now</span></a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="feds-cta feds-cta--primary placeholder-resolved" daa-ll="Free trial-7" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7FD7DFC9269A4AFB9BF24B8C53547DA7&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en"><span style="pointer-events: none;">Free trial</span></a>
    </div>
            </div></div>
        
      </div>
        
        
        
        
        
        <div class="feds-utilities" style="min-width: calc(96px + 0.5rem);"></div>
        
        
        
      </nav>
        <div class="feds-breadcrumbs-wrapper">
      <nav class="feds-breadcrumbs" aria-label="Breadcrumb"><ul>
                <li><a href="/">home</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Education</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Overview_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Overview_localNav|open">Overview</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Overview-2" role="link" aria-disabled="true" aria-current="page" tabindex="-1" data-title="Overview" aria-hidden="true">Overview</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/k12/" class="feds-navLink" daa-ll="K 12-3" data-title="K-12" tabindex="-1" aria-hidden="true">K-12</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/higher-ed/" class="feds-navLink" daa-ll="Higher Education-4" data-title="Higher Education" tabindex="-1" aria-hidden="true">Higher Education</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/resources/" class="feds-navLink" daa-ll="Resources-5" data-title="Resources" tabindex="-1" aria-hidden="true">Resources</a>
            </div><div class="feds-navItem" role="listitem">
              <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="feds-navLink placeholder-resolved" daa-ll="Buy now-6" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" data-title="Buy now" tabindex="-1" aria-hidden="true"><span style="pointer-events: none;">Buy now</span></a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="feds-cta feds-cta--primary placeholder-resolved" daa-ll="Free trial-7" data-title="Free trial" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7FD7DFC9269A4AFB9BF24B8C53547DA7&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" tabindex="-1" aria-hidden="true"><span style="pointer-events: none;">Free trial</span></a>
    </div>
            </div></div><a href="/education/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main daa-im="true">
      <div class="section" daa-lh="s1">
        <div class="hero-marquee center no-min-height xl-spacing-top xs-spacing-bottom con-block has-bg" data-block-status="loaded" daa-lh="b1|hero-marquee">
          
          <div class="foreground cols-1">
            <div class="copy"><div class="main-copy l-lockup l-button">
              <h1 id="adobe-for-students" class="heading-xxxxl"><strong>Adobe for Students</strong></h1>
              <p class="body-xl">Meet your creative home for every passion, project, and career pursuit — built for students like you.</p>
            </div></div>
          </div>
        </div>
        <div class="edu-hero-video marquee xxl-spacing has-bg" data-block-status="loaded" daa-lh="b2|edu-hero-video">
          <div class="background">
            <div class="mobile-only">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_196eb303a7c8dc3aeaff6bc73654730add9169bd0.mp4" disablepictureinpicture="true"></video>
      <a class="pause-play-wrapper" title="Pause" aria-label="Pause motion 1 1" role="button" tabindex="0" aria-pressed="true" video-index="1" daa-ll="Pause-1--">
        <div class="offset-filler">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
            <div class="tablet-only desktop-only">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_195c04c759ded21e7ce7cb32fd4c388ea2aeadfc6.mp4" disablepictureinpicture="true"><source src="/edu/media_195c04c759ded21e7ce7cb32fd4c388ea2aeadfc6.mp4" type="video/mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion 2" aria-label="Pause motion 2" role="button" tabindex="0" aria-pressed="true" video-index="2" daa-ll="Pause motion 2-2--">
        <div class="offset-filler is-playing">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s2">
        <div class="text center xs-spacing static-links text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-l">For educators and administrators, explore <a href="/education/k12/" daa-ll="K 12-1--">K-12</a> or <a href="/education/higher-ed/" daa-ll="Higher Education-2--">Higher Education</a> solutions.</div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s3">
        <div class="text center xxl-spacing-top m-spacing-bottom text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div>
              <h2 id="for-class-career-and-beyond" class="heading-xxxl">For class, career, and beyond.</h2>
              <p class="body-l">Make work that moves with you — in school and everywhere after.</p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="section tablist-overview-tab-section" daa-lh="s4">
        <div class="tabs center no-border-bottom quiet" id="tabs-overview-tab" data-block-status="loaded" daa-lh="b1|tabs"><button class="paddle paddle-left" disabled="" aria-hidden="true" aria-label="Scroll tabs to left" daa-ll="Scroll tabs to left-1--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          <div class="tabList" role="tablist">
            <div class="tab-list-container" data-pretext="undefined">
              
            <button role="tab" class="heading-xs" id="tab-overview-tab-1" tabindex="0" aria-selected="true" data-block-id="tabs-overview-tab" daa-state="true" daa-ll="tab-overview-tab-1" aria-controls="tab-panel-overview-tab-1" data-deeplink="undefined">Ace your classes</button><button role="tab" class="heading-xs" id="tab-overview-tab-2" tabindex="-1" aria-selected="false" data-block-id="tabs-overview-tab" daa-state="true" daa-ll="tab-overview-tab-2" aria-controls="tab-panel-overview-tab-2" data-deeplink="undefined">Create standout work</button><button role="tab" class="heading-xs" id="tab-overview-tab-3" tabindex="-1" aria-selected="false" data-block-id="tabs-overview-tab" daa-state="true" daa-ll="tab-overview-tab-3" aria-controls="tab-panel-overview-tab-3" data-deeplink="undefined">Launch your career</button></div>
          </div><button class="paddle paddle-right" disabled="" aria-hidden="true" aria-label="Scroll tabs to right" daa-ll="Scroll tabs to right-5--"><svg aria-hidden="true" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.50001 13.25C1.22022 13.25 0.939945 13.1431 0.726565 12.9292C0.299315 12.5019 0.299315 11.8096 0.726565 11.3823L5.10938 7L0.726565 2.61768C0.299315 2.19043 0.299315 1.49805 0.726565 1.0708C1.15333 0.643068 1.84669 0.643068 2.27345 1.0708L7.4297 6.22656C7.63478 6.43164 7.75001 6.70996 7.75001 7C7.75001 7.29004 7.63478 7.56836 7.4297 7.77344L2.27345 12.9292C2.06007 13.1431 1.7798 13.2495 1.50001 13.25Z" fill="currentColor"></path></svg></button>
          
          
        <div class="tab-content"><div class="tab-content-container"><div id="tab-panel-overview-tab-1" role="tabpanel" class="tabpanel" aria-labelledby="tab-overview-tab-1" data-block-id="tabs-overview-tab" data-nested-lh="t1Ace"><div class="section three-up xl-spacing-top xxxl-spacing-bottom">
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b2|t1Ace--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1bb7c8a739f3dfc845ad15c7b5b2653d03e928db3.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1bb7c8a739f3dfc845ad15c7b5b2653d03e928db3.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1bb7c8a739f3dfc845ad15c7b5b2653d03e928db3.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1bb7c8a739f3dfc845ad15c7b5b2653d03e928db3.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1ca7ee659347996006737e16496d37ac5c6134e08.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1ca7ee659347996006737e16496d37ac5c6134e08.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1ca7ee659347996006737e16496d37ac5c6134e08.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1ca7ee659347996006737e16496d37ac5c6134e08.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1cf66ba1ee1a7e5e61b2f257d23ff29f13bec1512.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1cf66ba1ee1a7e5e61b2f257d23ff29f13bec1512.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1cf66ba1ee1a7e5e61b2f257d23ff29f13bec1512.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1cf66ba1ee1a7e5e61b2f257d23ff29f13bec1512.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="generate-presentations" class="heading-xl">Generate presentations</h3>
              <p class="body-m">Design pro-level presentations with a boost from AI that help you score high grades today and stand out in the workplace tomorrow.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b3|t1Ace--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_19da4f409c0d44a7d9586859913d85aae4d8874f9.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_19da4f409c0d44a7d9586859913d85aae4d8874f9.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_19da4f409c0d44a7d9586859913d85aae4d8874f9.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_19da4f409c0d44a7d9586859913d85aae4d8874f9.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_16e96e06cff29db162becc45ac940ac00cba3346f.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_16e96e06cff29db162becc45ac940ac00cba3346f.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_16e96e06cff29db162becc45ac940ac00cba3346f.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_16e96e06cff29db162becc45ac940ac00cba3346f.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_168261566ffd09f4981d1352a93aacad93b448188.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_168261566ffd09f4981d1352a93aacad93b448188.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_168261566ffd09f4981d1352a93aacad93b448188.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_168261566ffd09f4981d1352a93aacad93b448188.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="build-study-guides" class="heading-xl">Build study guides</h3>
              <p class="body-m">Transform notes and research into smarter study guides with AI so you can learn faster, retain more, and ease stress around exam time.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b4|t1Ace--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_13b50cb34a3a70a33b0faf0b78a761e5087a98da2.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_13b50cb34a3a70a33b0faf0b78a761e5087a98da2.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_13b50cb34a3a70a33b0faf0b78a761e5087a98da2.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_13b50cb34a3a70a33b0faf0b78a761e5087a98da2.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1f17a95ecbe6b17a1f9b2bb60925868ef12e9ae4e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1f17a95ecbe6b17a1f9b2bb60925868ef12e9ae4e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1f17a95ecbe6b17a1f9b2bb60925868ef12e9ae4e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1f17a95ecbe6b17a1f9b2bb60925868ef12e9ae4e.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_19c170943d06ed0b7d48101b460040071ba86103c.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_19c170943d06ed0b7d48101b460040071ba86103c.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_19c170943d06ed0b7d48101b460040071ba86103c.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_19c170943d06ed0b7d48101b460040071ba86103c.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="produce-a-video" class="heading-xl">Produce a video</h3>
              <p class="body-m">Stitch together your best moments and ideas into videos people love, from class projects and vlogs to short films and social content.</p>
            </div>
          </div>
          
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>overview-tab, 1</div>
          </div>
          <div>
            <div>style</div>
            <div>Three up, xl-spacing-top, xxxl-spacing-bottom</div>
          </div>
          <div>
            <div>collapse-ups-mobile</div>
            <div>on</div>
          </div>
        </div>
      <div class="show-more-button hidden"><button daa-ll="See more features-1--">See more features<span class="show-more-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"><path fill="#292929" d="M12 24.24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12Zm0-21.943c-5.483 0-9.943 4.46-9.943 9.943s4.46 9.943 9.943 9.943 9.943-4.46 9.943-9.943S17.483 2.297 12 2.297Z"></path><path fill="#292929" d="M16.55 11.188h-3.5v-3.5a1.05 1.05 0 0 0-2.1 0v3.5h-3.5a1.05 1.05 0 0 0 0 2.1h3.5v3.5a1.05 1.05 0 0 0 2.1 0v-3.5h3.5a1.05 1.05 0 0 0 0-2.1Z"></path></svg></span></button></div></div></div><div id="tab-panel-overview-tab-2" role="tabpanel" class="tabpanel" aria-labelledby="tab-overview-tab-2" data-block-id="tabs-overview-tab" hidden="true" data-nested-lh="t2Cre"><div class="section three-up xl-spacing-top xxxl-spacing-bottom">
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b5|t2Cre--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1c89449a6d66895d475734fa714f0f0d867ce7469.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1c89449a6d66895d475734fa714f0f0d867ce7469.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1c89449a6d66895d475734fa714f0f0d867ce7469.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1c89449a6d66895d475734fa714f0f0d867ce7469.png?width=750&amp;format=png&amp;optimize=medium" width="379" height="379">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_11bfdf1808f53f223e6e4be8d9cbe43f0112eb9d6.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_11bfdf1808f53f223e6e4be8d9cbe43f0112eb9d6.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_11bfdf1808f53f223e6e4be8d9cbe43f0112eb9d6.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_11bfdf1808f53f223e6e4be8d9cbe43f0112eb9d6.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_11fdedea368d8c981a110592cfb9ff3b6708d3a70.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_11fdedea368d8c981a110592cfb9ff3b6708d3a70.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_11fdedea368d8c981a110592cfb9ff3b6708d3a70.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_11fdedea368d8c981a110592cfb9ff3b6708d3a70.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="craft-flyers-and-posters" class="heading-xl">Craft flyers and posters</h3>
              <p class="body-m">Your clubs, occasions, and causes deserve to be seen. Create eye-catching flyers and posters — no matter how much design experience you have.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b6|t2Cre--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1f1e282fbae34e22627a28d94c07ea1514fe2476e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1f1e282fbae34e22627a28d94c07ea1514fe2476e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1f1e282fbae34e22627a28d94c07ea1514fe2476e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1f1e282fbae34e22627a28d94c07ea1514fe2476e.png?width=750&amp;format=png&amp;optimize=medium" width="379" height="379">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_161a90db341498fe61f72628c07dbe8628244c4b9.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_161a90db341498fe61f72628c07dbe8628244c4b9.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_161a90db341498fe61f72628c07dbe8628244c4b9.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_161a90db341498fe61f72628c07dbe8628244c4b9.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1906e89f4a5eb606d53b7c4d8bcfb723390dca3b8.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1906e89f4a5eb606d53b7c4d8bcfb723390dca3b8.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1906e89f4a5eb606d53b7c4d8bcfb723390dca3b8.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1906e89f4a5eb606d53b7c4d8bcfb723390dca3b8.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="create-designs-and-illustrations" class="heading-xl">Create designs and illustrations</h3>
              <p class="body-m">Have a vision? Bring it to life with design tools that make every image worth a second look, from quick graphics to your next masterpiece.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b7|t2Cre--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1ca596e5c0941e9d129302721a814d2b36e57bb19.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="make-social-content" class="heading-xl">Make social content</h3>
              <p class="body-m">Produce scroll-stopping content for every platform,  whether you’re building a following, testing an idea, or just having fun.</p>
            </div>
          </div>
          
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>overview-tab, 2</div>
          </div>
          <div>
            <div>style</div>
            <div>Three up, xl-spacing-top, xxxl-spacing-bottom</div>
          </div>
          <div>
            <div>collapse-ups-mobile</div>
            <div>on</div>
          </div>
        </div>
      <div class="show-more-button hidden"><button daa-ll="See more features-1--">See more features<span class="show-more-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"><path fill="#292929" d="M12 24.24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12Zm0-21.943c-5.483 0-9.943 4.46-9.943 9.943s4.46 9.943 9.943 9.943 9.943-4.46 9.943-9.943S17.483 2.297 12 2.297Z"></path><path fill="#292929" d="M16.55 11.188h-3.5v-3.5a1.05 1.05 0 0 0-2.1 0v3.5h-3.5a1.05 1.05 0 0 0 0 2.1h3.5v3.5a1.05 1.05 0 0 0 2.1 0v-3.5h3.5a1.05 1.05 0 0 0 0-2.1Z"></path></svg></span></button></div></div></div><div id="tab-panel-overview-tab-3" role="tabpanel" class="tabpanel" aria-labelledby="tab-overview-tab-3" data-block-id="tabs-overview-tab" hidden="true" data-nested-lh="t3Lau"><div class="section three-up xl-spacing-top xxxl-spacing-bottom">
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b8|t3Lau--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_17f73940026aac2c4e61351406339dfbbd753c07b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_17f73940026aac2c4e61351406339dfbbd753c07b.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_17f73940026aac2c4e61351406339dfbbd753c07b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_17f73940026aac2c4e61351406339dfbbd753c07b.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1f6bb678ee3d33674c40c6e030ef11e89580c61a3.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1f6bb678ee3d33674c40c6e030ef11e89580c61a3.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1f6bb678ee3d33674c40c6e030ef11e89580c61a3.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1f6bb678ee3d33674c40c6e030ef11e89580c61a3.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_150837cd709c414ba62dd173249725981f18b5548.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_150837cd709c414ba62dd173249725981f18b5548.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_150837cd709c414ba62dd173249725981f18b5548.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_150837cd709c414ba62dd173249725981f18b5548.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="dream-up-a-logo" class="heading-xl">Dream up a logo</h3>
              <p class="body-m">Whether updating your personal brand, promoting a group, or launching a side hustle — create a logo that captures your vision, with a little assist from AI.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b9|t3Lau--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/jpeg" srcset="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=2000&amp;format=jpg&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_176b1ee3e64243c335c1980134ad45b0c5df3aa6f.jpg?width=750&amp;format=jpg&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_16f4423881743eb24a44684733436faf85f227e50.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_16f4423881743eb24a44684733436faf85f227e50.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_16f4423881743eb24a44684733436faf85f227e50.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_16f4423881743eb24a44684733436faf85f227e50.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="craft-your-resume" class="heading-xl">Craft your resume</h3>
              <p class="body-m">Develop an authentic resume that’s ATS-friendly and makes employers eager to know more — so they’re excited before the interview even starts.</p>
            </div>
          </div>
          
        </div>
        <div class="editorial-card open media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b10|t3Lau--editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1876b420bf8c8b27493b861e3338a14e708e941ce.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1876b420bf8c8b27493b861e3338a14e708e941ce.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1876b420bf8c8b27493b861e3338a14e708e941ce.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1876b420bf8c8b27493b861e3338a14e708e941ce.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1e79111c1065ff68066b6e365aa7584e426cd6c77.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1e79111c1065ff68066b6e365aa7584e426cd6c77.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1e79111c1065ff68066b6e365aa7584e426cd6c77.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_1e79111c1065ff68066b6e365aa7584e426cd6c77.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_15a5e447820734f13ff7aac2534a1cce309d0c38e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_15a5e447820734f13ff7aac2534a1cce309d0c38e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_15a5e447820734f13ff7aac2534a1cce309d0c38e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img alt="" src="/edu-shared/media_15a5e447820734f13ff7aac2534a1cce309d0c38e.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="elevate-your-portfolio" class="heading-xl">Elevate your portfolio</h3>
              <p class="body-m">Get the right tools to create a portfolio that showcases what you've done and everything you’re capable of doing.</p>
            </div>
          </div>
          
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>tab</div>
            <div>overview-tab, 3</div>
          </div>
          <div>
            <div>style</div>
            <div>Three up, xl-spacing-top, xxxl-spacing-bottom</div>
          </div>
          <div>
            <div>collapse-ups-mobile</div>
            <div>on</div>
          </div>
        </div>
      <div class="show-more-button hidden"><button daa-ll="See more features-1--">See more features<span class="show-more-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"><path fill="#292929" d="M12 24.24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12Zm0-21.943c-5.483 0-9.943 4.46-9.943 9.943s4.46 9.943 9.943 9.943 9.943-4.46 9.943-9.943S17.483 2.297 12 2.297Z"></path><path fill="#292929" d="M16.55 11.188h-3.5v-3.5a1.05 1.05 0 0 0-2.1 0v3.5h-3.5a1.05 1.05 0 0 0 0 2.1h3.5v3.5a1.05 1.05 0 0 0 2.1 0v-3.5h3.5a1.05 1.05 0 0 0 0-2.1Z"></path></svg></span></button></div></div></div></div></div></div>
      </div>
      
      
      
      <div class="section" daa-lh="s5">
        
      </div>
      <div class="section" data-has-placeholders="true" daa-lh="s6">
        <div class="aside xl-button xxxl-spacing s-lockup static-links con-block" data-block-status="loaded" style="background: rgb(229, 240, 254); visibility: hidden;" daa-lh="b1|aside">
          
          <div class="foreground container">
            <div class="text">
              <p class="lockup-area"><picture><img loading="lazy" src="/edu-shared/assets/images/product-icons/svg/creative-cloud-40.svg" alt=""></picture> Adobe Creative Cloud</p>
              <h2 id="all-the-apps-you-love-save-71" class="heading-xxl">All the apps you love. Save 71%.</h2>
              <p class="body-l">Students and teachers save 71% on Creative Cloud Pro. Get 20+ industry-leading apps, including Photoshop, Illustrator, Premiere, and more, plus the newest AI features from Adobe Firefly.</p>
              <p class="body-l"><strong><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="strikethrough" data-wcs-osi="r_JXAnlFI7xD6FxWKl2ODvZriLYBoSL701Kd1hRyhe8" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">69</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>  <span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="optical" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price price-optical price-alternative"><sr-only class="alt-aria-label">Alternatively at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> for the annual billed monthly plan for the first year</strong>. <a href="/education/" data-modal-path="/cc-shared/fragments/terms-conditions-modals/ccm-ste-introductory" data-modal-hash="#modal-ccm-ste-introductory" class="modal link-block " data-block-status="loaded" daa-ll="See terms-1--All the apps you lov">See terms.</a></p>
              <p class="body-l action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="con-button blue placeholder-resolved" aria-label="Buy now Creative Cloud Pro for students and teachers" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" daa-ll="Buy now-2--All the apps you lov"><span style="pointer-events: none;">Buy now</span></a><a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="twp" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="con-button outline placeholder-resolved" aria-label="Free trial Creative Cloud Pro for students and teachers" href="https://commerce.adobe.com/store/segmentation?cli=mini_plans&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-creative-cloud-card" daa-ll="Free trial-3--All the apps you lov"><span style="pointer-events: none;">Free trial</span></a></p>
            </div>
            <div class="image">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_12762f0b85e9749945ab8ab8e8a7d39af937713d5.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_12762f0b85e9749945ab8ab8e8a7d39af937713d5.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_12762f0b85e9749945ab8ab8e8a7d39af937713d5.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="Photoshop, Illustrator, Premiere Pro, InDesign, Acrobat, After Effects, Lightroom, Firefly, Express, Fresco" src="/edu-shared/media_12762f0b85e9749945ab8ab8e8a7d39af937713d5.png?width=750&amp;format=png&amp;optimize=medium" width="1675" height="601">
              </picture>
            </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s7">
        <div class="text max-width-8-desktop center xl-button xxl-spacing-top xxl-spacing-bottom text-block con-block" data-block-status="loaded" daa-lh="b1|text">
          <div class="foreground">
            <div class="body-m">
              <h2 id="where-every-major-makes-something-brilliant" class="heading-xxl">Where every major makes something brilliant.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s8" style="background: rgb(255, 255, 255);">
        
        <div class="carousel show-3 container hinting-mobile m-gap ups-desktop no-border align-height" data-block-status="loaded"><div class="carousel-wrapper"><div class="aria-live-container" aria-live="polite"></div><div class="carousel-slides"><div class="section carousel-slide active" data-index="0" aria-hidden="false">
        <div class="editorial-card l-rounded-corners media-tall no-border con-block l-rounded-corners-image static-links-copy no-bg m-lockup" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area">
            <div><div class="milo-video"><iframe src="https://video.tv.adobe.com/v/3483865?hidetitle=true" class="adobetv" scrolling="no" allow="encrypted-media; fullscreen" title="How Student Jacob Designed a Custom Daily Planner with Illustrator and Adobe Express" loading="lazy"></iframe></div></div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="jacob-guerrero" class="heading-l">Jacob Guerrero</h3>
              <p class="body-m">University of Colorado Denver, Major: Digital Design</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div><div class="section carousel-slide" data-index="1" aria-hidden="false">
        <div class="editorial-card l-rounded-corners media-tall no-border con-block l-rounded-corners-image static-links-copy no-bg m-lockup" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area">
            <div><div class="milo-video"><iframe src="https://video.tv.adobe.com/v/3483867?hidetitle=true" class="adobetv" scrolling="no" allow="encrypted-media; fullscreen" title="How Student Arianna Uses Illustrator, Photoshop, and InDesign to Design Her Portfolio" loading="lazy"></iframe></div></div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="arianna-cabrera" class="heading-l">Arianna Cabrera</h3>
              <p class="body-m">Drexel University, Major: Finance, Business Analytics, and Management Information Systems</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div><div class="section carousel-slide" data-index="2" aria-hidden="false">
        <div class="editorial-card l-rounded-corners media-tall no-border con-block l-rounded-corners-image static-links-copy no-bg m-lockup" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area">
            <div><div class="milo-video"><iframe src="https://video.tv.adobe.com/v/3483866?hidetitle=true" class="adobetv" scrolling="no" allow="encrypted-media; fullscreen" title="How Student Ellie Uses Adobe Firefly to Generate Color Palette Ideas" loading="lazy"></iframe></div></div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="ellie-warnke" class="heading-l">Ellie Warnke</h3>
              <p class="body-m">Savannah College of Art and Design, Major: Fashion Design</p>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div></div></div><div class="carousel-button-container"><button class="carousel-button carousel-previous" aria-label="Previous slide, slide 1 of 3" data-toggle="previous"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
<title>Previous slide arrow</title>
<path d="M19.2214 10.8918C19.3516 10.5773 19.3516 10.2226 19.2214 9.90808C19.1562 9.75098 19.0621 9.60895 18.9435 9.49041L12.9241 3.47092C12.4226 2.96819 11.6076 2.96819 11.1061 3.47092C10.604 3.97239 10.604 4.78743 11.1061 5.2889L14.9312 9.11399H2.4314C1.72109 9.11399 1.146 9.69036 1.146 10.4C1.146 11.1097 1.72109 11.6861 2.4314 11.6861H14.9312L11.1061 15.5112C10.604 16.0126 10.604 16.8277 11.1061 17.3291C11.3568 17.5805 11.6863 17.7062 12.0151 17.7062C12.3439 17.7062 12.6733 17.5805 12.9241 17.3291L18.9436 11.3097C19.0622 11.1911 19.1562 11.0491 19.2214 10.8918Z"></path>
</svg></button><button class="carousel-button carousel-next" aria-label="Next slide" data-toggle="next"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
<title>Next slide arrow</title>
<path d="M19.2214 10.8918C19.3516 10.5773 19.3516 10.2226 19.2214 9.90808C19.1562 9.75098 19.0621 9.60895 18.9435 9.49041L12.9241 3.47092C12.4226 2.96819 11.6076 2.96819 11.1061 3.47092C10.604 3.97239 10.604 4.78743 11.1061 5.2889L14.9312 9.11399H2.4314C1.72109 9.11399 1.146 9.69036 1.146 10.4C1.146 11.1097 1.72109 11.6861 2.4314 11.6861H14.9312L11.1061 15.5112C10.604 16.0126 10.604 16.8277 11.1061 17.3291C11.3568 17.5805 11.6863 17.7062 12.0151 17.7062C12.3439 17.7062 12.6733 17.5805 12.9241 17.3291L18.9436 11.3097C19.0622 11.1911 19.1562 11.0491 19.2214 10.8918Z"></path>
</svg></button><div class="carousel-controls"><ul class="carousel-indicators"><li class="carousel-indicator active" data-index="0" aria-current="location"></li><li class="carousel-indicator" data-index="1"></li><li class="carousel-indicator" data-index="2"></li></ul></div></div></div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      
      
      
      <div class="section" daa-lh="s9">
        
      </div>
      <div class="section" daa-lh="s10">
        <div class="text large center xl-spacing-top m-spacing-bottom max-width-8-desktop text-block con-block has-bg" data-block-status="loaded" daa-lh="b1|text">
          
          <div class="foreground">
            <div>
              <h2 id="get-started-with-adobe" class="heading-xxxl">Get Started with Adobe</h2>
              <p class="body-l">Check out these apps to get a quick start on how to use Adobe products.</p>
            </div>
          </div>
        </div>
        <div class="aside medium s-lockup l-button rounded-corners media-bottom-mobile con-block" data-block-status="loaded" style="visibility: hidden;" daa-lh="b2|aside">
          
          <div class="foreground container">
            <div class="text">
              <p class="lockup-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/adobe-experience-cloud-logo-rgb.svg" alt=""></picture> Student Spaces</p>
              <h2 id="make-flashcards" class="heading-xxl">Make flashcards</h2>
              <p class="body-l">Spend less time making study materials and more time actually learning with AI tools. Student Spaces turns your notes into smart flashcards fast.</p>
              <p class="body-l action-area"><a href="https://acrobat.adobe.com/studyspace/collection/create-new-project/?context=flashcard-maker&amp;x_api_client_id=unity&amp;x_api_client_location=flashcard-maker" aria-label="Try now Make flashcards" class="con-button outline" daa-ll="Try now-1--Make flashcards">Try now</a></p>
            </div>
            <div class="image">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_1900640049ec7d9861a960e7720f05589993fee3c.mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion" aria-label="Pause motion 3" role="button" tabindex="0" aria-pressed="true" video-index="3" daa-ll="Pause motion-2--Make flashcards">
        <div class="offset-filler">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
          </div>
        </div>
        <div class="aside medium s-lockup l-button rounded-corners media-bottom-mobile con-block" data-block-status="loaded" style="visibility: hidden;" daa-lh="b3|aside">
          
          <div class="foreground container">
            <div class="image">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_16cb864c8018f7a126168be585c3b13246685c81f.mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion" aria-label="Pause motion 4" role="button" tabindex="0" aria-pressed="true" video-index="4" daa-ll="Pause motion-1--">
        <div class="offset-filler">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
            <div class="text">
              <p class="lockup-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/express-lockup.svg" alt=""></picture> Adobe Express</p>
              <h2 id="create-presentations" class="heading-xxl">Create presentations</h2>
              <p class="body-l">No more stressing over slides. Easy-to-use tools make great design feel effortless, so you can show up and own the moment.</p>
              <p class="body-l action-area"><a href="https://adobesparkpost.app.link/c4bWARQhWAb?category=templates&amp;taskID=presentation&amp;assetCollection=urn%3Aaaid%3Asc%3AVA6C2%3A171eef22-f095-4c90-8836-0413f6fcb5b0&amp;height=1080&amp;width=1920&amp;unit=px&amp;cgen=85665FJW&amp;mv=other&amp;mv2=Frictionless" aria-label="Start creating with express" class="con-button outline quick-link" daa-ll="Start creating-2--Create presentations">Start creating</a></p>
            </div>
          </div>
        </div>
        <div class="aside medium s-lockup l-button rounded-corners media-bottom-mobile con-block" data-block-status="loaded" style="visibility: hidden;" daa-lh="b4|aside">
          
          <div class="foreground container">
            <div class="text">
              <p class="lockup-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/firefly-fi.svg" alt=""></picture> Adobe Firefly</p>
              <h2 id="dream-up-something-big" class="heading-xxl">Dream up something big</h2>
              <p class="body-l">Open up a whole new world of creative possibilities. Generate stunning images and transform them into videos with AI.</p>
              <p class="body-l action-area"><a href="https://firefly.adobe.com/generate/video?cgen=7WQ45NZY&amp;mv=other&amp;mv2=Frictionless" aria-label="Generate now with Firefly" class="con-button outline" daa-ll="Generate now-1--Dream up something b">Generate now</a></p>
            </div>
            <div class="image">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_1f8711829cd12acd55b32d3cc4bfdecabe91e0684.mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion" aria-label="Pause motion 5" role="button" tabindex="0" aria-pressed="true" video-index="5" daa-ll="Pause motion-2--Dream up something b">
        <div class="offset-filler">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s11">
        <div class="text large center xxxl-spacing-top m-spacing-bottom text-block con-block has-bg" data-block-status="loaded" daa-lh="b1|text">
          
          <div class="foreground">
            <div>
              <h2 id="build-a-network-become-certified-boost-your-expertise" class="heading-xxl"><strong>Build a network. Become certified. Boost your expertise.</strong></h2>
              <p class="body-m">Meet fellow creators in the Adobe Discord, earn certifications for your skills, and continue mastering Adobe apps.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section three-up" daa-lh="s12">
        <div class="editorial-card open click hover-scale m-spacing-top xl-spacing-bottom l-button footer-align-left media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b1|editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_14cafa9037b93542ea20541ec46ab0cb22ca622b6.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_14cafa9037b93542ea20541ec46ab0cb22ca622b6.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_14cafa9037b93542ea20541ec46ab0cb22ca622b6.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_14cafa9037b93542ea20541ec46ab0cb22ca622b6.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_145ffcefea7f3a50b144fc384276b98553e9b415f.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_145ffcefea7f3a50b144fc384276b98553e9b415f.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_145ffcefea7f3a50b144fc384276b98553e9b415f.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_145ffcefea7f3a50b144fc384276b98553e9b415f.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_165c9727e7e5e12766ca77fa3275c93ef620fa044.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_165c9727e7e5e12766ca77fa3275c93ef620fa044.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_165c9727e7e5e12766ca77fa3275c93ef620fa044.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_165c9727e7e5e12766ca77fa3275c93ef620fa044.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="join-the-discord-community" class="heading-xl">Join the Discord community</h3>
              <p class="body-m">Connect with creators who inspire you and get insider access to events, product drops, internships, and paid creative opportunities.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-m action-area"><a href="https://adobe.ly/discord" aria-label="Join now Discord" class="con-button outline" daa-ll="Join now-1--Join the Discord com">Join now</a></div>
          </div>
        </div>
        <div class="editorial-card open click hover-scale m-spacing-top xl-spacing-bottom l-button footer-align-left media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b2|editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1d3925b2fb4551a0aeab25d3b420cbb7db9bbcef9.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1d3925b2fb4551a0aeab25d3b420cbb7db9bbcef9.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1d3925b2fb4551a0aeab25d3b420cbb7db9bbcef9.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_1d3925b2fb4551a0aeab25d3b420cbb7db9bbcef9.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1284a0d8588c421ce58d342e2ed79f6129c94adfd.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1284a0d8588c421ce58d342e2ed79f6129c94adfd.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1284a0d8588c421ce58d342e2ed79f6129c94adfd.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_1284a0d8588c421ce58d342e2ed79f6129c94adfd.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1e7c2ead0d19d2021a403b26b97d5c998d29bf952.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1e7c2ead0d19d2021a403b26b97d5c998d29bf952.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1e7c2ead0d19d2021a403b26b97d5c998d29bf952.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_1e7c2ead0d19d2021a403b26b97d5c998d29bf952.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="get-adobe-certified" class="heading-xl">Get Adobe Certified</h3>
              <p class="body-m">Hone your craft and earn certifications that prove your creative skills are real, refined, and ready for the professional world.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-m action-area"><a href="https://certification.adobe.com/" aria-label="Get certified Adobe" class="con-button outline" daa-ll="Get certified-1--Get Adobe Certified">Get certified</a></div>
          </div>
        </div>
        <div class="editorial-card open click hover-scale m-spacing-top xl-spacing-bottom l-button footer-align-left media-square con-block l-rounded-corners-image static-links-copy no-border m-lockup equal-height no-bg" data-block-status="loaded" daa-lh="b3|editorial-card">
          
          <div class="media-area vp-media">
            <div class="mobile-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1d6558dcb17d95271f6af80ad274f893eb3c23b5c.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1d6558dcb17d95271f6af80ad274f893eb3c23b5c.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1d6558dcb17d95271f6af80ad274f893eb3c23b5c.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_1d6558dcb17d95271f6af80ad274f893eb3c23b5c.png?width=750&amp;format=png&amp;optimize=medium" width="758" height="758">
              </picture>
            </div>
            <div class="tablet-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_155b5d0f96b7e89341c3fb35aa032773b2b39f352.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_155b5d0f96b7e89341c3fb35aa032773b2b39f352.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_155b5d0f96b7e89341c3fb35aa032773b2b39f352.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_155b5d0f96b7e89341c3fb35aa032773b2b39f352.png?width=750&amp;format=png&amp;optimize=medium" width="608" height="608">
              </picture>
            </div>
            <div class="desktop-only">
              <picture>
                <source type="image/webp" srcset="/edu-shared/media_1e0d40f6c0a1f0b7e0396c91d73cebfeae03a11d9.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/edu-shared/media_1e0d40f6c0a1f0b7e0396c91d73cebfeae03a11d9.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/edu-shared/media_1e0d40f6c0a1f0b7e0396c91d73cebfeae03a11d9.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/edu-shared/media_1e0d40f6c0a1f0b7e0396c91d73cebfeae03a11d9.png?width=750&amp;format=png&amp;optimize=medium" width="536" height="536">
              </picture>
            </div>
          </div>
          <div class="foreground">
            <div class="body-m">
              <h3 id="visit-adobe-learn" class="heading-xl">Visit Adobe Learn</h3>
              <p class="body-m">Dive into thousands of free tutorials and courses across every Adobe app, whether you’re picking up the basics or pushing your talents further.</p>
            </div>
          </div>
          <div class="card-footer">
            <div class="body-m action-area"><a href="/learn/students/" aria-label="Learn more Adobe Learn" class="con-button outline" daa-ll="Learn more-1--Visit Adobe Learn">Learn more</a></div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div><strong>Three up</strong></div>
          </div>
        </div>
      </div>
      <div class="section" daa-lh="s13">
        <div class="text max-width-8-desktop large center xxl-spacing-top m-spacing-bottom text-block con-block has-bg" data-block-status="loaded" daa-lh="b1|text">
          
          <div class="foreground">
            <div class="body-m">
              <h2 id="questions-we-have-answers" class="heading-xxl">Questions? We have answers.</h2>
            </div>
          </div>
        </div>
        <div class="accordion-container quiet max-width-12-desktop-large m-spacing-top xxxl-spacing-bottom xs-heading m-body con-block" data-block-status="loaded" daa-lh="b2|accordion-conta"><div class="descr-list accordion foreground" id="accordion-1" role="presentation"><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-1" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-1" daa-ll="open-1--What free Adobe tool">
            What free Adobe tools are available to students?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-1" id="accordion-1-content-1" hidden="true" class="descr-details"><div>Adobe offers several free tools students can start using right away, including <a href="/acrobat/student-spaces/" daa-ll="Student Spaces-2--What free Adobe tool">Student Spaces</a> for creating flashcards and quizzes, <a href="/express/learn/students/" daa-ll="Adobe Express-3--What free Adobe tool">Adobe Express</a> for designing presentations, posters, resumes, and <a href="/products/firefly/features/text-to-image/" daa-ll="Adobe Firefly-4--What free Adobe tool">Adobe Firefly</a> for AI-generated images. Some schools also provide free access to the full Creative Cloud suite. Check with your institution to see what's available to you.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-2" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-2" daa-ll="open-2--What s the differenc">
            What’s the difference between Adobe Creative Cloud Pro for students and teachers and Creative Cloud Pro for education institutions?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-2" id="accordion-1-content-2" hidden="true" class="descr-details"><div>
              <p><a href="/education/students/creativecloud/" daa-ll="Adobe Creative Cloud-6--What s the differenc">Adobe Creative Cloud for students and teachers</a> is an offer for eligible students and educators to purchase directly at a significantly discounted price. Adobe verifies student and teacher status and may request additional proof of eligibility after purchase.</p>
              <p><a href="/creativecloud/plans/?plan=edu_inst" daa-ll="Creative Cloud for e-7--What s the differenc">Creative Cloud for education institutions</a> is purchased by a school or university and managed centrally by IT administrators, making it easy to deploy and manage licenses across an entire campus or district. Both plans include access to 20+ industry-leading apps like Photoshop, Illustrator, and Premiere, plus responsible AI features from Adobe Firefly.</p>
            </div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-3" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-3" daa-ll="open-3--What is the differen">
            What is the difference between Adobe Acrobat Pro for students and teachers and Creative Cloud Pro for students and teachers?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-3" id="accordion-1-content-3" hidden="true" class="descr-details"><div><a href="/education/students/acrobat/" daa-ll="Adobe Acrobat Pro fo-9--What is the differen">Adobe Acrobat Pro for students and teachers</a> is a standalone plan focused on PDF tools for creating, editing, signing, and sharing documents. <a href="/education/students/creativecloud/" daa-ll="Creative Cloud Pro f-10--What is the differen">Creative Cloud Pro for students and teachers</a> includes Acrobat Pro plus 20+ industry-leading apps like Photoshop, Illustrator, Premiere, Lightroom, and more. If you want a full suite of creative and productivity tools, Creative Cloud Pro gives you everything in one plan at a significant student and teacher discount.</div></div><div role="heading" aria-level="3" class="descr-term"><button type="button" id="accordion-1-trigger-4" class="accordion-trigger tracking-header" aria-expanded="false" aria-controls="accordion-1-content-4" daa-ll="open-4--How do I provide Ado">
            How do I provide Adobe tools to students across my district or institution?
          <span class="accordion-icon"></span></button></div><div aria-labelledby="accordion-1-trigger-4" id="accordion-1-content-4" hidden="true" class="descr-details"><div>
              <p>Adobe offers enterprise plans for education institutions that include centralized license management and deployment through the Adobe Admin Console. This makes it easy for IT teams to provision, manage, and support Adobe tools at scale.</p>
              <ul>
                <li>K-12 administrators: learn more <a href="/education/k12/" daa-ll="here-12--How do I provide Ado">here</a></li>
              </ul>
              <ul>
                <li>Higher Education administrators: <a href="/creativecloud/plans/?plan=edu_inst" daa-ll="Find the plan that i-13--How do I provide Ado">Find the plan that is right for your institution</a>.</li>
              </ul>
            </div></div></div></div>
      </div>
      <div class="section" daa-lh="s14">
        
      </div>
    </main>
    <footer class="global-footer" data-block-status="loaded"></footer>
  

<div id="page-load-ok-milo" style="display: none;"></div></body></html>