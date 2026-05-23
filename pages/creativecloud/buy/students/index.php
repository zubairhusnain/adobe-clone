<?php
require_once dirname(__DIR__, 4) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
    <title>Adobe Creative Cloud Pro for students and teachers | Adobe Creative Cloud</title>
    <link rel="canonical" href="/education/students/creativecloud/">
    <meta name="description" content="Students and teachers are eligible for a big discount on Adobe Creative Cloud. Get access to Photoshop, Illustrator, InDesign, Premiere and more.">
    <meta property="og:title" content="Adobe Creative Cloud Pro for students and teachers | Adobe Creative Cloud">
    <meta property="og:description" content="Students and teachers are eligible for a big discount on Adobe Creative Cloud. Get access to Photoshop, Illustrator, InDesign, Premiere and more.">
    <meta property="og:url" content="/education/students/creativecloud/">
    <meta property="og:image" content="education/students/media_14a141cf8900a74105b7122f28472dce9fd8cf872.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta property="og:image:secure_url" content="education/students/media_14a141cf8900a74105b7122f28472dce9fd8cf872.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Adobe Creative Cloud Pro for students and teachers | Adobe Creative Cloud">
    <meta name="twitter:description" content="Students and teachers are eligible for a big discount on Adobe Creative Cloud. Get access to Photoshop, Illustrator, InDesign, Premiere and more.">
    <meta name="twitter:image" content="education/students/media_14a141cf8900a74105b7122f28472dce9fd8cf872.jpg?width=1200&amp;format=pjpg&amp;optimize=medium">
<meta name="footer-source" content="/federal/footer/footer">
    <meta name="footer" content="global-footer">
    <meta name="header" content="global-navigation">
    <meta name="universal-nav" content="profile, appswitcher, notifications, cart">
    <meta name="hreflinksuseragents" content="Googlebot, Tokowaka, ChatGPT-User, Google-InspectionTool">
    <meta name="personalization" content="students/creativecloud.json" data-localized="true">
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
  <link rel="stylesheet" href="/libs/styles/styles.css"><link rel="stylesheet" href="/edu/styles/styles.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/martech/helpers.js"><link rel="preload" as="fetch" crossorigin="anonymous" href="/students/creativecloud.json"><link rel="preload" as="fetch" crossorigin="anonymous" href="/federal/assets/data/mep-xlg-tags.json?sheet=prod"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/fragment/fragment.js"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/hero-marquee/hero-marquee.js"><link rel="stylesheet" href="/libs/blocks/hero-marquee/hero-marquee.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/video/video.js"><link rel="stylesheet" href="/libs/blocks/video/video.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/merch/merch.js"><link rel="stylesheet" href="/libs/blocks/merch/merch.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/modal/modal.js"><link rel="stylesheet" href="/libs/blocks/modal/modal.css"><mas-commerce-service locale="en_US" language="en" country="US"></mas-commerce-service><link rel="stylesheet" href="/libs/styles/breakpoint-theme.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/global-navigation.css"><link rel="stylesheet" href="https://use.typekit.net/hah7vzn.css"><link rel="preload" as="script" href="/marketingtech/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js"><link rel="stylesheet" href="/libs/blocks/global-navigation/base.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/notification/notification.js"><link rel="stylesheet" href="/libs/blocks/notification/notification.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/section-metadata/section-metadata.js"><link rel="stylesheet" href="/libs/blocks/section-metadata/section-metadata.css"><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"home","item":"https://www.adobe.com/"},{"@type":"ListItem","position":2,"name":"Education","item":"/education/"},{"@type":"ListItem","position":3,"name":"Creative Cloud Pro","item":"/education/students/creativecloud/"}]}</script><link rel="stylesheet" href="https://prod.adobeccstatic.com/unav/1.5/UniversalNav.css"><link rel="stylesheet" href="/libs/blocks/text/text.css"><link rel="stylesheet" href="/libs/blocks/brick/brick.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/layout.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/popover.bundle.css"><link rel="stylesheet" type="text/css" href="https://prod.adobeccstatic.com/unav/1.5/profile.bundle.css"><link rel="stylesheet" href="/libs/styles/rounded-corners.css"><link rel="stylesheet" href="/libs/blocks/global-navigation/utilities/menu/menu.css"><link rel="preload" as="script" crossorigin="anonymous" href="/libs/blocks/text/text.js"><link rel="stylesheet" href="/libs/blocks/merch-card/merch-card.css"></head>
  <body class="mweb-enabled">
    <header class="global-navigation has-breadcrumbs ready local-nav" data-has-placeholders="true" daa-im="true" daa-lh="gnav|localnav-edu-ccp" data-block-status="loaded"><div class="feds-curtain"></div><div class="feds-topnav-wrapper">
        <nav class="feds-topnav" aria-label="Main">
        <div class="feds-brand-container">
          <button class="feds-toggle" daa-ll="hamburgermenu|open" aria-expanded="false" aria-haspopup="dialog" aria-label="Navigation menu" aria-controls="feds-popup-1" data-feds-preventautoclose="">
      </button>
          <a href="/" class="feds-brand" daa-ll="Brand">
        <span class="feds-brand-image"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none"><path d="M14.2353 21.6209L12.4925 16.7699H8.11657L11.7945 7.51237L17.3741 21.6209H24L15.1548 0.379395H8.90929L0 21.6209H14.2353Z" fill="#EB1000"></path></svg></span>
        <span class="feds-brand-label">Adobe</span>
      </a>
        </div>
        
        <div class="feds-nav-wrapper" id="feds-nav-wrapper">
        
        
        <div class="feds-nav" role="list"><section role="listitem" class="feds-navItem feds-navItem--section feds-navItem--megaMenu" daa-lh="Students Teachers">
              <button class="feds-navLink feds-navLink--hoverCaret" aria-expanded="false" aria-haspopup="true" daa-ll="Students Teachers-1" daa-lh="header|Open">
              Students &amp; Teachers
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
  </div></section><div class="feds-navItem" role="listitem">
              <a href="/education/" class="feds-navLink" daa-ll="Overview-2">Overview</a>
            </div><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Creative Cloud Pro-3" role="link" aria-disabled="true" aria-current="page" tabindex="0">Creative Cloud Pro</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/students/creativecloud/features/" class="feds-navLink" daa-ll="Features-4">Features</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/creativecloud/plans/?plan=edu" class="feds-navLink" daa-ll="Compare Plans-5">Compare Plans</a>
            </div><div class="feds-navItem" role="listitem">
              <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="feds-navLink placeholder-resolved" daa-ll="Buy now-6" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - Creative Cloud Pro - Students and teachers"><span style="pointer-events: none;">Buy now</span></a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="feds-cta feds-cta--primary placeholder-resolved" daa-ll="Free trial-7" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7FD7DFC9269A4AFB9BF24B8C53547DA7&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en"><span style="pointer-events: none;">Free trial</span></a>
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
                <li><a href="/">home</a></li>
                <li><span aria-hidden="true">/</span><a href="/education/">Education</a></li>
                <li aria-current="page"><span aria-hidden="true">/</span>Creative Cloud Pro</li>
              </ul></nav>
    </div>
      </div></header><div class="feds-localnav is-sticky" daa-lh="Overview_localNav"><button class="feds-navLink--hoverCaret feds-localnav-title" aria-haspopup="true" aria-expanded="false" daa-ll="Overview_localNav|open">Overview</button><div class="feds-localnav-curtain"></div><div class="feds-localnav-items" role="list"><div class="feds-navItem" role="listitem">
              <a href="/education/" class="feds-navLink" daa-ll="Overview-2" data-title="Overview">Overview</a>
            </div><div class="feds-navItem feds-navItem--active" role="listitem">
              <a class="feds-navLink" daa-ll="Creative Cloud Pro-3" role="link" aria-disabled="true" aria-current="page" tabindex="0" data-title="Creative Cloud Pro">Creative Cloud Pro</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/education/students/creativecloud/features/" class="feds-navLink" daa-ll="Features-4" data-title="Features">Features</a>
            </div><div class="feds-navItem" role="listitem">
              <a href="/creativecloud/plans/?plan=edu" class="feds-navLink" daa-ll="Compare Plans-5" data-title="Compare Plans">Compare Plans</a>
            </div><div class="feds-navItem" role="listitem">
              <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="feds-navLink placeholder-resolved" daa-ll="Buy now-6" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - Creative Cloud Pro - Students and teachers" data-title="Buy now"><span style="pointer-events: none;">Buy now</span></a>
            </div><div class="feds-navItem feds-navItem--centered" role="listitem">
              <div class="feds-cta-wrapper">
      <a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="feds-cta feds-cta--primary placeholder-resolved" daa-ll="Free trial-7" data-title="Free trial" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7FD7DFC9269A4AFB9BF24B8C53547DA7&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en"><span style="pointer-events: none;">Free trial</span></a>
    </div>
            </div></div><a href="/creativecloud/buy/students/" class="feds-sr-only feds-localnav-exit">.</a></div>
    <main>
      <div class="section">
        <div><div class="fragment" data-path="/edu-shared/fragments/merch/students/creativecloud/marquee/students-ccp-discount"><div class="section" data-has-placeholders="true">
  <div class="hero-marquee media-cover media-bottom-mobile media-bottom-tablet static-links con-block has-bg" data-block-status="loaded" data-block="" style="background: rgb(255, 255, 255);">
    
    <div class="foreground cols-2">
      <div class="copy"><div class="main-copy l-lockup xl-button">
        <h1 id="students-save-percentage-discount-ste-on-creative-cloud-pro" class="heading-xxl">Students save 71% on Creative Cloud Pro.</h1>
      </div><div class="row-text con-block norm">
      
      <div class="row-wrapper"><p class="body-l">Access 20+ industry-leading apps, including Photoshop, Illustrator, Premiere, and more, plus responsible AI features from Adobe Firefly. Also available for teachers.</p></div>
    </div><div class="row-text con-block xxs-spacing-bottom norm">
      
      <div class="row-wrapper"><p class="body-l"><span is="inline-price" data-display-per-unit="false" data-quantity="1" data-template="strikethrough" data-wcs-osi="r_JXAnlFI7xD6FxWKl2ODvZriLYBoSL701Kd1hRyhe8" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">69</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span>  <span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="optical" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price price-optical price-alternative"><sr-only class="alt-aria-label">Alternatively at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> for the annual billed monthly plan for the first year. <a href="/creativecloud/buy/students/" data-modal-path="/cc-shared/fragments/terms-conditions-modals/ccm-ste-introductory" data-modal-hash="#modal-ccm-ste-introductory" class="modal link-block " data-block-status="loaded">See terms.</a></p></div>
    </div><div class="row-text con-block norm">
      
      <div class="row-wrapper"><p class="action-area"><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="con-button blue button-xl placeholder-resolved" aria-label="Buy now Creative Cloud Pro for students and teachers" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en"><span style="pointer-events: none;">Buy now</span></a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="twp" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="con-button outline button-xl placeholder-resolved" aria-label="Free trial Creative Cloud Pro for students and teachers" href="https://commerce.adobe.com/store/segmentation?cli=mini_plans&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-creative-cloud-card"><span style="pointer-events: none;">Free trial</span></a></p></div>
    </div></div>
      <div class="asset">
        
    
  
      </div>
    </div>
    
    
    
  <div class="foreground-media"><div class="video-container video-holder" style="--media-cover-position: center top;"><video playsinline="" poster="edu-shared/fragments/merch/students/creativecloud/marquee/media_1426e111f6b41a02bf95a2a6454aa30234ec6bdc2.jpg?width=2000&amp;format=webply&amp;optimize=medium" autoplay="" muted="" data-video-source="edu/media_18bd6ddc7222495ec7a96dbd065ef716029c2a21e.mp4"><source src="/edu/media_18bd6ddc7222495ec7a96dbd065ef716029c2a21e.mp4" type="video/mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion 1" aria-label="Pause motion 1" role="button" tabindex="0" aria-pressed="true" video-index="1">
        <div class="offset-filler is-playing">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div></div></div>
</div></div></div>
      </div>
      <div class="section">
        <div><div class="fragment" data-path="/edu-shared/fragments/merch/students/creativecloud/sticky-banner/default"><div class="section show-sticky-section"></div></div></div>
      </div>
      <div class="section grid-width-10" data-has-placeholders="true">
        <div class="text center xxl-spacing-top xl-spacing-bottom left-mobile text-block con-block" data-block-status="loaded" data-block="">
          <div class="foreground">
            <div class="body-l">
              <h2 id="see-what-you-can-make-with-creative-cloud-pro" class="heading-xl">See what you can make with Creative Cloud Pro.</h2>
            </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>style</div>
            <div>grid width 10</div>
          </div>
        </div>
      </div>
      <div class="section s-icon s-lockup masonry-layout masonry-up" data-has-placeholders="true">
        <div class="brick light rounded-corners split static-links button-fill s-lockup grid-span-8" data-block-status="loaded" data-block="" style="background: rgb(152, 13, 5);">
          
          <div class="background">
            <div class="mobile-only"><picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img alt="" src="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: center top;">
                </picture></div>
            <div class="tablet-only"><picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/creativecloud/buy/media_12aa4384684c4398ba8ee21b0f39b8398e8991a9b.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: center top;">
                </picture></div>
            <div class="desktop-only"><picture>
                <source type="image/webp" srcset="/creativecloud/buy/media_1fc23e0451fc80a199b26bd451ebc366567dc7d8e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/creativecloud/buy/media_1fc23e0451fc80a199b26bd451ebc366567dc7d8e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/creativecloud/buy/media_1fc23e0451fc80a199b26bd451ebc366567dc7d8e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/creativecloud/buy/media_1fc23e0451fc80a199b26bd451ebc366567dc7d8e.png?width=750&amp;format=png&amp;optimize=medium" width="4752" height="2304" style="object-fit: cover; object-position: left top;">
              </picture></div>
          </div>
          <div class="foreground">
            <div class="brick-text">
              <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/photoshop.svg" alt=""></picture> Photoshop</p>
              <h3 id="edit-images-for-flyers-and-posters" class="heading-xl">Edit images for flyers and posters.</h3>
              <p class="action-area"><a href="/education/students/photoshop/" aria-label="Learn more Photoshop" class="con-button outline button-l">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners static-links button-fill grid-span-4" data-block-status="loaded" data-block="" style="background: rgb(255, 160, 55);">
          
          <div class="foreground">
            <div class="brick-text">
              <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/acrobat-pro.svg" alt=""></picture> Acrobat</p>
              <h3 id="study-smarter-with-your-docs" class="heading-xl">Study smarter with your docs.</h3>
              <p class="action-area"><a href="/education/students/acrobat/" aria-label="Learn more Acrobat" class="con-button outline button-l">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners button-fill grid-span-4" data-block-status="loaded" data-block="" style="background: rgb(182, 219, 0);">
          
          <div class="foreground">
            <div class="brick-text">
              <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/firefly.svg" alt=""></picture> Firefly</p>
              <h3 id="visualize-your-ideas-in-seconds" class="heading-xl">Visualize your ideas in seconds.</h3>
              <p class="action-area"><a href="/creativecloud/buy/students/" aria-label="Watch video Firefly" data-modal-path="/cc-shared/fragments/creativecloud/pro/modal/brick1-modal" data-modal-hash="#firefly-modal" class="modal link-block con-button outline button-l" data-block-status="loaded">Watch video</a></p>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners split static-links button-fill xs-icon grid-span-8" data-block-status="loaded" data-block="" style="background: rgb(255, 149, 0);">
          
          <div class="background">
            <div class="mobile-only"><picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: center top;">
                </picture></div>
            <div class="tablet-only"><picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/creativecloud/buy/media_14a5c990a86b947402e68ab909ab6285f010392f8.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: center top;">
                </picture></div>
            <div class="desktop-only"><picture>
                <source type="image/webp" srcset="/creativecloud/buy/media_12df913aa9e65d379f66655d83dd4d81683997c3c.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/creativecloud/buy/media_12df913aa9e65d379f66655d83dd4d81683997c3c.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/creativecloud/buy/media_12df913aa9e65d379f66655d83dd4d81683997c3c.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/creativecloud/buy/media_12df913aa9e65d379f66655d83dd4d81683997c3c.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: left top;">
              </picture></div>
          </div>
          <div class="foreground">
            <div class="brick-text">
              <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/illustrator.svg" alt=""></picture> Illustrator</p>
              <h3 id="design-stylish-logos-and-graphics" class="heading-xl">Design stylish logos and graphics.</h3>
              <p class="action-area"><a href="/creativecloud/buy/students/illustrator/" aria-label="Learn more Illustrator" class="con-button outline button-l">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners button-fill grid-full-width split row media-right" data-block-status="loaded" data-block="" style="background: rgb(29, 52, 48);">
          
          <div class="background">
            <div class="mobile-only"><picture>
                <source type="image/webp" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: right top;">
              </picture></div>
            <div class="tablet-only"><picture>
                <source type="image/webp" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/creativecloud/buy/media_1e878092f0265770296a9dfabe6b12cf5684a187e.png?width=750&amp;format=png&amp;optimize=medium" width="3168" height="1536" style="object-fit: cover; object-position: right top;">
              </picture></div>
            <div class="desktop-only"><picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_1e5f4a7d231ca7c2ee86a32175bf98d0951f80315.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_1e5f4a7d231ca7c2ee86a32175bf98d0951f80315.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_1e5f4a7d231ca7c2ee86a32175bf98d0951f80315.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="" src="/creativecloud/buy/media_1e5f4a7d231ca7c2ee86a32175bf98d0951f80315.png?width=750&amp;format=png&amp;optimize=medium" width="4800" height="1536" style="object-fit: cover; object-position: left top;">
                </picture></div>
          </div>
          <div class="foreground">
            <div class="brick-text">
              <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/mnemonic-logo/svg/premiere.svg" alt=""></picture> Premiere</p>
              <h3 id="create-memorable-videos-and-films" class="heading-xl">Create memorable videos and films</h3>
              <p class="action-area"><a href="/creativecloud/buy/students/premiere-pro/" aria-label="Learn more Premiere" class="con-button outline button-l">Learn more</a></p>
            </div>
            <div class="brick-media">
    <div class="video-container video-holder"><video playsinline="" autoplay="" muted="" loop="" data-video-source="edu/media_111ab4a9910f37559e7958a2654915be949cbbd55.mp4"><source src="/edu/media_111ab4a9910f37559e7958a2654915be949cbbd55.mp4" type="video/mp4"></video>
      <a class="pause-play-wrapper" title="Pause motion 2" aria-label="Pause motion 2" role="button" tabindex="0" aria-pressed="true" video-index="2">
        <div class="offset-filler is-playing">
          <img class="accessibility-control pause-icon" alt="Pause motion" src="/federal/assets/svgs/accessibility-pause.svg">
          <img class="accessibility-control play-icon" alt="Play motion" src="/federal/assets/svgs/accessibility-play.svg">
        </div>
      </a>
    </div>
  </div>
          </div>
        </div>
        <div class="section-metadata" data-block-status="loaded">
          <div>
            <div>masonry</div>
            <div>
              <p>span-8, span-4</p>
              <p>span-4, span-8</p>
              <p>Full width</p>
            </div>
          </div>
          <div>
            <div>style</div>
            <div>s-icon, s-lockup</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="decorated" data-idx="4">
        <div><div class="fragment" data-path="/edu-shared/fragments/merch/students/creativecloud/merch-card/mini-compare-segment-blade"><div class="section" data-has-placeholders="true">
  <div class="text center xxl-spacing-top no-spacing-bottom left-mobile text-block con-block" data-block-status="loaded" data-block="">
    <div class="foreground">
      <div>
        <h2 id="your-path-forward-starts-here" class="heading-xl">Your path forward starts here.</h2>
        <p class="body-m">Find exactly what you need to get anywhere you want to go in school, at work, and in life. It all starts with Creative Cloud Pro.</p>
      </div>
    </div>
  </div>
</div><div class="section l-spacing one-merch-card grid-width-10" data-status="decorated" data-idx="1" data-has-placeholders="true">
  <div class="merch-card mini-compare-chart secure bullet-list static-links l-button xs-heading xs-body">
    <div>
      <div>
        <h2 id="creative-cloud-pro-ste">Creative Cloud Pro for students and teachers</h2>
        <p>Save 71% on 20+ apps and Adobe Firefly creative AI for images, video, and audio. Pay <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> the first year and <span is="inline-price" data-quantity="1" data-template="price" data-wcs-osi="DFaWY47EmtzYVOApli4DjncThGsfaeCSDZRoHkC8pGY" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">39</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> after that.</p>
        <p><a href="/creativecloud/buy/students/" data-modal-path="/cc-shared/fragments/terms-conditions-modals/ccm-ste-introductory" data-modal-hash="#cco-ste-terms" class="modal link-block " data-block-status="loaded">See terms</a> | <a href="/creativecloud/buy/students/" data-modal-path="/cc-shared/fragments/terms-conditions-modals/ccm-ste-eligibility" data-modal-hash="#modal-ccm-ste_eligibility" class="modal link-block " data-block-status="loaded">Check eligibility</a></p>
        <h4 id="annual-paid-monthly"><em>Annual, billed monthly</em></h4>
        <h2 id="price---abm---creative-cloud-all-apps-100gb-price---abm---creative-cloud-all-apps-100gb-small-tax-incl-label"><span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="strikethrough" data-wcs-osi="r_JXAnlFI7xD6FxWKl2ODvZriLYBoSL701Kd1hRyhe8" class="placeholder-resolved"><span class="price price-strikethrough"><sr-only class="strikethrough-aria-label">Regularly at </sr-only><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">69</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> <span is="inline-price" data-display-per-unit="false" data-display-recurrence="true" data-display-tax="false" data-force-tax-exclusive="false" data-quantity="1" data-template="price" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" class="placeholder-resolved"><span class="price"><span class="price-currency-symbol">US$</span><span class="price-currency-space disabled"></span><span class="price-integer">19</span><span class="price-decimals-delimiter">.</span><span class="price-decimals">99</span><span class="price-recurrence">/mo</span><span class="price-unit-type disabled"></span><span class="price-tax-inclusivity disabled"></span></span></span> </h2>
        <p><strong><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="Hnk2P6L5wYhnpZLFYTW5upuk2Y3AJXlso8VGWQ0l2TI" data-extra-options="{}" class="con-button blue placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=951DCCB08194F40B9C79951675547DF5&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Buy now - Creative Cloud Pro - Students and teachers"><span style="pointer-events: none;">Buy now</span></a></strong> <em><a is="checkout-link" data-checkout-workflow-step="commitment" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="con-button placeholder-resolved" href="https://commerce.adobe.com/store/commitment?items%5B0%5D%5Bid%5D=7FD7DFC9269A4AFB9BF24B8C53547DA7&amp;cli=adobe_com&amp;ctx=fp&amp;co=US&amp;lang=en" aria-label="Free trial - Creative Cloud Pro - Students and teachers"><span style="pointer-events: none;">Free trial</span></a></em></p>
      </div>
    </div>
    <div>
      <div>#E8E8E8</div>
      <div>See what’s included:</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>20+ photo, graphic design, and video apps</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>Unlimited access to standard creative AI image and vector features like Generative Fill in Photoshop</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>number gen credits cc pro monthly generative credits for premium creative AI video and audio features like Text to Video</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>Unlimited access to Firefly Boards for exploring ideas and developing storyboards</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>Access to non-Adobe generative AI models in Firefly</div>
    </div>
    <div>
      <div><picture><img loading="lazy" src="/cc-shared/assets/img/plans-icons/svg/checkmark-20.svg" alt=""></picture></div>
      <div>Adobe Express Premium, Frame.io for Creative Cloud, tutorials, fonts, templates, and 100GB of cloud storage</div>
    </div>
  </div>
  <div class="text dark center l-button xs-spacing-top text-block con-block" data-block-status="loaded">
    <div class="foreground">
      <div class="cta-container"><div class="body-m action-area"><a href="/creativecloud/plans/?plan=edu" aria-label="View Plans and pricing for Creative Cloud apps" class="con-button blue">View all plans and pricing</a></div></div>
    </div>
  </div>
  <div class="section-metadata" data-block-status="loaded">
    <div>
      <div>style</div>
      <div>l-spacing, one merch card, grid width 10</div>
    </div>
  </div>
</div></div></div>
      </div>
      <div class="section" data-status="pending">
        <div class="text center l-spacing-top xl-spacing-bottom xl-heading left-mobile">
          <div>
            <div>
              <h2 id="whats-included-in-creative-cloud-pro"><strong>What’s included in {{creative-cloud-pro}}?</strong></h2>
              <p>Apps for everything. Loads of perks. Plus, Firefly generative AI features for creating images with simple text prompts.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>style</div>
            <div>grid-width-10</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="block-group-start hide-block">
          <div>
            <div></div>
          </div>
        </div>
        <div class="tabs center no-spacing-bottom no-border-bottom segmented-control">
          <div>
            <div>
              <ol>
                <li>Popular</li>
                <li>Photo</li>
                <li>Video</li>
                <li>Social media</li>
                <li>Illustration</li>
                <li>3D &amp; AR</li>
              </ol>
            </div>
          </div>
          <div>
            <div>active tab</div>
            <div>1</div>
          </div>
          <div>
            <div>id</div>
            <div>for-the-kids</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/photoshop-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/photoshop-64.svg | {{photoshop}}</a></p>
              <h3 id="photoshop"><a href="/creativecloud/buy/students/photoshop/">{{photoshop}}</a></h3>
              <p>Create gorgeous images, rich graphics, and incredible art.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/illustrator-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/illustrator-64.svg | {{ILLUSTRATOR}}</a></p>
              <h3 id="illustrator"><a href="/creativecloud/buy/students/illustrator/">{{ILLUSTRATOR}}</a></h3>
              <p>Create beautiful designs, icons, and more — then use them anyplace at any size.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/acrobat-pro-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/acrobat-pro-64.svg | {{APRO}}</a></p>
              <h3 id="apro"><a href="/acrobat/students/">{{APRO}}</a></h3>
              <p>Create, edit, sign, and manage your PDFs — quickly, easily, anywhere.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/firefly-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/firefly-64.svg | {{adobe-firefly}}</a></p>
              <h3 id="adobe-firefly"><a href="/products/firefly/">{{adobe-firefly}}</a></h3>
              <p>Use everyday language to create extraordinary results with generative AI.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/premiere-pro-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/premiere-pro-64.svg | {{premiere}}</a></p>
              <h3 id="premiere"><a href="/creativecloud/buy/students/premiere-pro/">{{premiere}}</a></h3>
              <p>Create pro-quality videos like documentaries, short films, and more.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/express-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/express-64.svg | {{CCEX}}</a></p>
              <h3 id="ccex"><a href="/creativecloud/buy/students/express/">{{CCEX}}</a></h3>
              <p>Edit and share photos anywhere for social posts, club websites, and blogs.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 1</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, three up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon s-heading m-body">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/photoshop-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/photoshop-64.svg | {{photoshop}}</a></p>
              <h3 id="photoshop-1"><a href="/creativecloud/buy/students/photoshop/">{{photoshop}}</a></h3>
              <p>Create gorgeous images, rich graphics, and incredible art.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/lightroom-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/lightroom-64.svg | {{lightroom}}</a></p>
              <h3 id="lightroom"><a href="/creativecloud/buy/students/lightroom/">{{lightroom}}</a></h3>
              <p>Edit and share photos anywhere for social posts, club websites, and blogs.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/express-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/express-64.svg | {{CCEX}}</a></p>
              <h3 id="ccex-1"><a href="/creativecloud/buy/students/express/">{{CCEX}}</a></h3>
              <p>Edit and share photos anywhere for social posts, club websites, and blogs.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 2</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, three up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/premiere-pro-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/premiere-pro-64.svg | {{premiere}}</a></p>
              <h3 id="premiere-1"><a href="/creativecloud/buy/students/premiere-pro/">{{premiere}}</a></h3>
              <p>Create pro-quality videos like documentaries, short films, and more.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/after-effects-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/after-effects-64.svg | {{AEFT}}</a></p>
              <h3 id="aeft"><a href="/products/aftereffects/">{{AEFT}}</a></h3>
              <p>Create movie titles, intros, and transitions with the industry standard for motion graphics and visual effects.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 3</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, three up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/express-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/express-64.svg | {{CCEX}}</a></p>
              <h3 id="ccex-2"><a href="/creativecloud/buy/students/express/">{{CCEX}}</a></h3>
              <p>Edit and share photos anywhere for social posts, club websites, and blogs.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p>
                <picture>
                  <source type="image/webp" srcset="/creativecloud/buy/media_17839b28078b0f2ad9f4cb918dc5ca674bafa0c63.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                  <source type="image/webp" srcset="/creativecloud/buy/media_17839b28078b0f2ad9f4cb918dc5ca674bafa0c63.png?width=750&amp;format=webply&amp;optimize=medium">
                  <source type="image/png" srcset="/creativecloud/buy/media_17839b28078b0f2ad9f4cb918dc5ca674bafa0c63.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                  <img loading="lazy" alt="Photoshop Express icon" src="/creativecloud/buy/media_17839b28078b0f2ad9f4cb918dc5ca674bafa0c63.png?width=750&amp;format=png&amp;optimize=medium" width="79" height="77">
                </picture>
              </p>
              <h3 id="photoshop-express"><a href="/products/photoshop-express/">{{photoshop-express}}</a></h3>
              <p>Edit and transform your photos on the go.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 4</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, three up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/illustrator-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/illustrator-64.svg | {{ILLUSTRATOR}}</a></p>
              <h3 id="illustrator-1"><a href="/creativecloud/buy/students/illustrator/">{{ILLUSTRATOR}}</a></h3>
              <p>Create beautiful designs, icons, and more — then use them anyplace at any size.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/photoshop-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/photoshop-64.svg | {{photoshop}}</a></p>
              <h3 id="photoshop-2"><a href="/creativecloud/buy/students/photoshop/">{{photoshop}}</a></h3>
              <p>Create gorgeous images, rich graphics, and incredible art.</p>
            </div>
          </div>
        </div>
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/fresco-64.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/fresco-64.svg | {{fresco}}</a></p>
              <h3 id="fresco"><a href="/products/fresco/">{{fresco}}</a></h3>
              <p>Enjoy a natural painting and drawing experience with the world’s largest collection of brushes.</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 5</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, three up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="icon-block small inline m-icon">
          <div>
            <div>
              <p><a href="/edu-shared/assets/images/icons/product/substance-3d-collection-ste-long.svg">https://main--edu--adobecom.aem.page/edu-shared/assets/images/icons/product/substance-3d-collection-ste-long.svg | {{substance-3d-collection}}</a></p>
              <h3 id="substance-3d-collection-apps-for-students"><a href="https://substance3d.adobe.com/education/">{{substance-3d-collection}} apps for students</a></h3>
              <p>Model, texture, and render 3D assets and scenes. Free for eligible students and teachers. Not included in {{creative-cloud-pro}}.<br><a href="/cc-shared/fragments/modals/see-whats-included/3d-see-whats-included/">See what’s included.</a></p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>tab</div>
            <div>for-the-kids, 6</div>
          </div>
          <div>
            <div>style</div>
            <div>l spacing top, xl spacing bottom, static links, two up, xl-gap</div>
          </div>
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="block-group-end hide-block">
          <div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="text dark center xs-spacing-top xxl-spacing-bottom">
          <div>
            <div><a href="/cc-shared/fragments/modals/see-whats-included/cc-all-apps-see-whats-included-edu/">See what’s included</a></div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="text dark xl-heading full-width center xxl-spacing-top no-spacing-bottom">
          <div>
            <div>
              <h2 id="creative-cloud-pro-is-more-than-just-great-apps">{{Creative-Cloud-Pro}} is more than just great apps.</h2>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>background</div>
            <div>#1E1E1E</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="brick light rounded-corners s-heading m-body">
          <div>
            <div>#DADADA</div>
          </div>
          <div>
            <div>
              <h2 id="tutorials-fonts-and-stock-images">Tutorials, fonts, and stock images</h2>
              <ul>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_1f1c5119ab19499da1cd60c73cf9d9a631a72232b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_1f1c5119ab19499da1cd60c73cf9d9a631a72232b.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_1f1c5119ab19499da1cd60c73cf9d9a631a72232b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_1f1c5119ab19499da1cd60c73cf9d9a631a72232b.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p><a href="/learn/">Tutorials</a> for the basics and beyond</p>
                </li>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_14408bf2c08d406a630c8668486eeb92070dba929.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_14408bf2c08d406a630c8668486eeb92070dba929.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_14408bf2c08d406a630c8668486eeb92070dba929.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_14408bf2c08d406a630c8668486eeb92070dba929.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p><a href="https://fonts.adobe.com/">Adobe Fonts</a> — 30,000+ fonts at your fingertips</p>
                </li>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_10797d0b06412561a4b8cd940bfa50c803d08ab96.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_10797d0b06412561a4b8cd940bfa50c803d08ab96.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_10797d0b06412561a4b8cd940bfa50c803d08ab96.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_10797d0b06412561a4b8cd940bfa50c803d08ab96.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p><a href="https://stock.adobe.com/">Adobe Stock</a> — One million+ free photos, drawings, video clips, and more</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners s-heading m-body">
          <div>
            <div>#DADADA</div>
          </div>
          <div>
            <div>
              <h2 id="generative-ai-tools">Generative AI tools</h2>
              <ul>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_1144a4fdb91282a082bd5f5e931df0d194522f05a.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_1144a4fdb91282a082bd5f5e931df0d194522f05a.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_1144a4fdb91282a082bd5f5e931df0d194522f05a.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_1144a4fdb91282a082bd5f5e931df0d194522f05a.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p>Unlimited access to standard creative AI image and vector features</p>
                </li>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_12de97340708e87b786ed7c2ea5ab8ec51c61931d.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_12de97340708e87b786ed7c2ea5ab8ec51c61931d.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_12de97340708e87b786ed7c2ea5ab8ec51c61931d.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_12de97340708e87b786ed7c2ea5ab8ec51c61931d.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p>4,000 monthly <a href="https://helpx.adobe.com/firefly/get-set-up/learn-the-basics/generative-credits-overview.html#_blank#_dnt">generative credits</a> for premium creative AI video and audio features</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="brick light rounded-corners s-heading m-body">
          <div>
            <div>#DADADA</div>
          </div>
          <div>
            <div>
              <h2 id="creative-community">Creative community</h2>
              <ul>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_13133737c2dcd7565906355b27f49e9182de67c0b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_13133737c2dcd7565906355b27f49e9182de67c0b.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_13133737c2dcd7565906355b27f49e9182de67c0b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_13133737c2dcd7565906355b27f49e9182de67c0b.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p><a href="https://www.behance.net/">Behance</a> — Promote your work, get inspired, and get hired</p>
                </li>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_1489e2158f77676805bcdb5e3862c173c79299b8c.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_1489e2158f77676805bcdb5e3862c173c79299b8c.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_1489e2158f77676805bcdb5e3862c173c79299b8c.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_1489e2158f77676805bcdb5e3862c173c79299b8c.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p><a href="https://portfolio.adobe.com/">Adobe Portfolio</a> — Design your own website in minutes</p>
                </li>
                <li>
                  <p>
                    <picture>
                      <source type="image/webp" srcset="/creativecloud/buy/media_1c70033b50770e104448ae0d3b1adb651c80bfb86.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                      <source type="image/webp" srcset="/creativecloud/buy/media_1c70033b50770e104448ae0d3b1adb651c80bfb86.png?width=750&amp;format=webply&amp;optimize=medium">
                      <source type="image/png" srcset="/creativecloud/buy/media_1c70033b50770e104448ae0d3b1adb651c80bfb86.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                      <img loading="lazy" alt="" src="/creativecloud/buy/media_1c70033b50770e104448ae0d3b1adb651c80bfb86.png?width=750&amp;format=png&amp;optimize=medium" width="64" height="64">
                    </picture>
                  </p>
                  <p>Special student discount on Adobe Certified Professional certifications</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>masonry</div>
            <div>span-4, span-4, span-4</div>
          </div>
          <div>
            <div>style</div>
            <div>xxl-spacing, static-links, m-body</div>
          </div>
          <div>
            <div>background</div>
            <div>#1E1E1E</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="text max-width-8-desktop center xl-button xl-heading xxl-spacing-top xxl-spacing-bottom">
          <div>
            <div>
              <h2 id="what-students-are-saying">What students are saying.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="block-group-start hide-block">
          <div>
            <div></div>
          </div>
        </div>
        <div class="carousel show-3 container hinting-mobile m-gap ups-desktop no-border align-height">
          <div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="editorial-card l-rounded-corners media-tall no-border l-heading m-body">
          <div>
            <div></div>
          </div>
          <div>
            <div><a href="https://video.tv.adobe.com/v/3483859?hidetitle=true" title="Follow link">https://video.tv.adobe.com/v/3483859</a></div>
          </div>
          <div>
            <div>
              <h3 id="jacob-guerrero">Jacob Guerrero</h3>
              <p>University of Colorado Denver, Major: Digital Design</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>background</div>
            <div>#fff</div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="editorial-card l-rounded-corners media-tall no-border l-heading m-body">
          <div>
            <div></div>
          </div>
          <div>
            <div><a href="https://video.tv.adobe.com/v/3483860?hidetitle=true">https://video.tv.adobe.com/v/3483860</a></div>
          </div>
          <div>
            <div>
              <h3 id="daniel-heechan-lim">Daniel Heechan Lim</h3>
              <p>Stanford University, Major: Film and Media Studies</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="editorial-card l-rounded-corners media-tall no-border l-heading m-body">
          <div>
            <div></div>
          </div>
          <div>
            <div><a href="https://video.tv.adobe.com/v/3483861?hidetitle=true" title="Follow link">https://video.tv.adobe.com/v/3483861</a></div>
          </div>
          <div>
            <div>
              <h3 id="avrey-ovard">Avrey Ovard</h3>
              <p>Parsons School of Design, Major: Fashion Design</p>
            </div>
          </div>
        </div>
        <div class="section-metadata">
          <div>
            <div>carousel</div>
            <div>edu-student-work-show</div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="block-group-end hide-block">
          <div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <div class="aside dark l-button m-body">
          <div>
            <div>#1E1E1E</div>
          </div>
          <div>
            <div>
              <picture>
                <source type="image/webp" srcset="/creativecloud/buy/media_13d6c15fef38e8268751ac55e633ab35cfcab04e0.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/creativecloud/buy/media_13d6c15fef38e8268751ac55e633ab35cfcab04e0.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/creativecloud/buy/media_13d6c15fef38e8268751ac55e633ab35cfcab04e0.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="lazy" alt="" src="/creativecloud/buy/media_13d6c15fef38e8268751ac55e633ab35cfcab04e0.png?width=750&amp;format=png&amp;optimize=medium" width="4060" height="2707">
              </picture>
            </div>
            <div>
              <h2 id="learn-create-and-grow-your-skills-to-advance-your-career">Learn, create, and grow your skills to advance your career.</h2>
              <p>Access hands-on tutorials and digital badges through Adobe Learn. Whether you’re starting out or looking to level up, explore resources you can use to build real-world creative skills and showcase on your resume.</p>
              <p><em><a href="https://adobe.com/learn">Learn more</a></em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/edu-shared/fragments/merch/students/creativecloud/faq/">https://main--edu--adobecom.aem.page/edu-shared/fragments/merch/students/creativecloud/faq</a></p>
      </div>
      <div class="section" data-status="pending">
        <p><a href="/edu-shared/fragments/merch/students/creativecloud/ready-for-next-step-blade/">https://main--edu--adobecom.aem.page/edu-shared/fragments/merch/students/creativecloud/ready-for-next-step-blade</a></p>
      </div>
      <div class="section" data-status="pending">
        
      </div>
    <div class="section promo-sticky-section hide-sticky-section sticky-bottom" data-has-placeholders="true">
  <div class="notification ribbon dark space-between con-block" data-notification-id="notification-1779409412555-hfljbybtr" data-block-status="loaded" aria-label="Students save 71% on Creative Cloud Pro." role="region" data-block="" style="background: rgb(0, 0, 0);">
    
    <div class="foreground container">
      <div class="text">
        <p class="icon-area"><picture><img loading="lazy" src="/edu-shared/assets/images/icons/product/creative-cloud-64.svg" alt="Creative Cloud Pro"></picture></p><div class="copy-wrap"><h2 id="students-save-percentage-discount-ste-on-creative-cloud-pro" class="heading-m">Students save 71% on Creative Cloud Pro.</h2></div>
        
        <p class="body-m action-area"><a href="/creativecloud/plans/?plan=edu" aria-label="Buy now Creative Cloud Pro for students and teachers" class="con-button blue button-l">Buy now</a> <a is="checkout-link" data-checkout-workflow-step="segmentation" data-modal="twp" data-quantity="1" data-wcs-osi="OQ1oCm1tZG35Gj7LCrkGeOOdUMfVlC7xx-7ml-CTWIE" data-extra-options="{}" class="con-button outline button-l placeholder-resolved" aria-label="Free trial Creative Cloud Pro for students and teachers" href="https://commerce.adobe.com/store/segmentation?cli=mini_plans&amp;ctx=if&amp;co=US&amp;lang=en&amp;ms=EDU&amp;ot=TRIAL&amp;cs=INDIVIDUAL&amp;pa=ccsn_direct_individual&amp;rtc=t&amp;lo=sl&amp;af=uc_new_user_iframe%2Cuc_new_system_close" data-modal-id="mini-plans-web-cta-creative-cloud-card"><span style="pointer-events: none;">Free trial</span></a></p>
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
      <div>Sticky bottom</div>
    </div>
  </div>
</div></main>
    <footer></footer>
  

<div class="notification-visibility-hidden" aria-live="polite" role="status" tabindex="-1" data-notification-id="notification-1779409412555-hfljbybtr"></div></body></html>