<?php
require_once dirname(__DIR__, 2) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
<!DOCTYPE html>
<html lang="en-GB" class=" wf-loading" data-react-helmet="lang">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="/a/favicon.ico">
  <link rel="preconnect" href="https://use.typekit.net">
  <link rel="preconnect" href="https://helpx.adobe.com">
  <link rel="preconnect" href="https://cchome.adobe.io">
  <link rel="preconnect" href="https://creativecloud.adobe.com">
  <link id="gatsby-global-css"
    href="/learn/static/s/component---src-pages-learn-js.d66927d538f3d410888d.css"
    rel="stylesheet" type="text/css">
  <title>Adobe Learn</title>
  <meta data-react-helmet="true" name="description"
    content="Sign into Adobe Creative Cloud to access your favorite Creative Cloud apps, services, file management, and more. Log in to start creating.">
  <meta data-react-helmet="true" name="theme-color" content="#EB1000">
  <meta data-react-helmet="true" name="naver-site-verification" content="7b4a5c8a6b2e88618149456b0f2ab70cb408fa12">
  <meta data-react-helmet="true" name="twitter:card" content="summary_large_image">
  <meta data-react-helmet="true" property="og:title" content="Adobe Learn">
  <meta data-react-helmet="true" property="og:type" content="website">
  <meta data-react-helmet="true" property="og:description"
    content="Sign into Adobe Creative Cloud to access your favorite Creative Cloud apps, services, file management, and more. Log in to start creating.">
  <link as="script" rel="preload"
    href="/learn/static/s/webpack-runtime-188b7231690f13ec495b.js">
  <link as="script" rel="preload"
    href="/learn/static/s/framework-70a2455d4a4320e97528.js">
  <link as="script" rel="preload" href="/learn/static/s/app-c87ed50fd649dd76a7a2.js">
  <link as="script" rel="preload"
    href="/learn/static/s/component---src-pages-learn-js-dc10e95caf54c3ab5b31.js">
  <link as="fetch" rel="preload"
    href="/learn/static/s/page-data/learn/page-data.json" crossorigin="anonymous">
  <link as="fetch" rel="preload"
    href="/learn/static/s/page-data/sq/d/1098196312.json" crossorigin="anonymous">
  <link as="fetch" rel="preload" href="/learn/static/s/page-data/app-data.json"
    crossorigin="anonymous">
  <script id="adobe-alloy-config">
    // Initialize Adobe Alloy configuration
    window.alloy_all = window.alloy_all || {};
    window.alloy_all.data = window.alloy_all.data || {};
    window.alloy_all.data._adobe_corpnew = window.alloy_all.data._adobe_corpnew || {};
    window.alloy_all.data._adobe_corpnew.web = window.alloy_all.data._adobe_corpnew.web || {};
    window.alloy_all.data._adobe_corpnew.web.webPageDetails = window.alloy_all.data._adobe_corpnew.web.webPageDetails || {};
    // window.alloy_all.data._adobe_corpnew.web.webPageDetails.language = 'fr-FR'; // Language based on geo

    // Configure the marketingtech object with Adobe and other settings
    window.marketingtech = {
      adobe: {
        launch: {
          url: 'https://assets.adobedtm.com/d4d114c60e50/a0e989131fd5/launch-5dd5dd2177e6.min.js', // Set the Launch URL based on environment
          controlPageLoad: true, // Launch waits for pageload call
          disablePageUnload: false, // Set to true if page unload is not needed
        },
        alloy: {
          edgeConfigId: '913eac4d-900b-45e8-9ee7-306216765cd2', // Set the edgeConfigId based on environment
        },
        target: true, // Enable Adobe Target
        audienceManager: true, // Enable Adobe Audience Manager
      },
      sophia: false, // Disable Sophia integration
      marketingTags: {
        disableGlobalTags: false, // Set to true to disable third-party pixels
        disableContentsquare: false, // Set to true to disable Contentsquare
      },
    };
  </script>
  <style id="alloy-prehiding">
    @keyframes alloyShow {
      from {
        opacity: 0.01;
      }

      to {
        opacity: 1;
      }
    }

    body,
    .personalization-container {
      opacity: 0.01 !important;
      animation: 0s 3s forwards alloyShow
    }
  </style>
  <link rel="canonical" href="/uk/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="cs-CZ" href="/cz/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="da-DK" href="/dk/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="de-DE" href="/de/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="de-AT" href="/at/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="de-CH" href="/ch_de/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="de-LU" href="/lu_de/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="x-default" href="/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-US" href="/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-AE" href="/ae_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-AU" href="/au/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-BE" href="/be_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-CA" href="/ca/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-CY" href="/cy_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-GB" href="/uk/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-GR" href="/gr_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-HK" href="/hk_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-ID" href="/id_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-IE" href="/ie/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-IL" href="/il_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-IN" href="/in/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-LU" href="/lu_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-MT" href="/mt/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-MY" href="/my_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-NZ" href="/nz/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-PH" href="/ph_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-SA" href="/sa_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-SG" href="/sg/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="en-TH" href="/th_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-VN" href="/vn_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-x-AFRICA" href="/africa/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-x-MENA" href="/mena_en/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="en-ZA" href="/za/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-ES" href="/es/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-AR" href="/ar/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-CL" href="/cl/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-CO" href="/co/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-MX" href="/mx/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-PE" href="/pe/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="es-x-LA" href="/la/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="fi-FI" href="/fi/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="fr-FR" href="/fr/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="hu-HU" href="/hu/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="it-IT" href="/it/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="it-CH" href="/ch_it/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="ja-JP" href="/jp/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="ko-KR" href="/kr/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="nb-NO" href="/no/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="nl-NL" href="/nl/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="nl-BE" href="/be_nl/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="pl-PL" href="/pl/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="pt-PT" href="/pt/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="pt-BR" href="/br/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="ru-RU" href="/ru/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="sv-SE" href="/se/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="tr-TR" href="/tr/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="uk-UA" href="/ua/learn/" data-react-helmet="true">
  <link rel="alternate" hreflang="zh-Hans-CN" href="/cn/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="zh-Hant-TW" href="/tw/learn/"
    data-react-helmet="true">
  <link rel="alternate" hreflang="zh-Hant-HK" href="/hk_zh/learn/"
    data-react-helmet="true">
  <link rel="apple-touch-icon" sizes="180x180"
    href="/learn/static/s/static/905469a53590fef38c341fadc7b73732/apple-touch-icon.png"
    data-react-helmet="true">
  <link rel="icon" type="image/x-icon"
    href="/learn/static/s/static/bd8f64043432f6f433bc8732068ad7e1/favicon.ico"
    data-react-helmet="true">
  <link rel="icon" type="image/png" sizes="180x180"
    href="/learn/static/s/static/905469a53590fef38c341fadc7b73732/apple-touch-icon.png"
    data-react-helmet="true">
  <meta name="entity_id" content="d47928a602462e792e1490f94c0fa5f3010d8307d84a614413774a540081d408"
    data-react-helmet="true">
  <meta property="og:url" content="https://www.adobe.com/uk/learn" data-react-helmet="true">
  <meta name="Content-Language" content="en-GB" data-react-helmet="true">
  <style data-react-helmet="true">
    body:not(:has(> header)) {
      padding-top: 64px;
    }
  </style>
</head>

<body class="hide-jarvis">
  <div id="___gatsby">
    <div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
      <div class="root react-spectrum-provider spectrum spectrum--light spectrum--medium">
        <main id="learn-bg" class="learn">
          <div class="learn-with-router">
            <div>
              <div
                class="spectrum-CircleLoader spectrum-CircleLoader--indeterminate spectrum-CircleLoader--large react-spectrum-Wait--centered"
                role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="spectrum-CircleLoader-track"></div>
                <div class="spectrum-CircleLoader-fills">
                  <div class="spectrum-CircleLoader-fillMask1">
                    <div class="spectrum-CircleLoader-fillSubMask1">
                      <div class="spectrum-CircleLoader-fill"></div>
                    </div>
                  </div>
                  <div class="spectrum-CircleLoader-fillMask2">
                    <div class="spectrum-CircleLoader-fillSubMask2">
                      <div class="spectrum-CircleLoader-fill"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div id="gatsby-announcer"
      style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0"
      aria-live="assertive" aria-atomic="true"></div>
  </div>
  <script id="gatsby-script-loader">/*<![CDATA[*/window.pagePath = "/learn/";/*]]>*/</script>
  <script
    id="gatsby-chunk-mapping">/*<![CDATA[*/window.___chunkMapping = { "polyfill": ["/polyfill-7d21b94d7c73dfb86888.js"], "app": ["/app-c87ed50fd649dd76a7a2.js"], "component---src-pages-404-js": ["/component---src-pages-404-js-2ec6db35a0317e059f40.js"], "component---src-pages-index-js": ["/component---src-pages-index-js.aa6cc00e243e3a87001e.css", "/component---src-pages-index-js-6b5c55bafdc0c1c37fac.js"], "component---src-pages-learn-js": ["/component---src-pages-learn-js.d66927d538f3d410888d.css", "/component---src-pages-learn-js-dc10e95caf54c3ab5b31.js"], "[https]": ["/[https]-378bf7599cd1416d938f.js"], "[AnalyticsUtil]": ["/[AnalyticsUtil]-6f3186ae029079edb5e5.js"], "[imslib]": ["/[imslib]-814482966d5b26564811.js"], "[LearnArticle]": [], "[DeeplinkButton]": ["/[DeeplinkButton]-27b94d15f844317b9327.js"], "[BannerAction]": ["/[BannerAction]-e584b9f3a37d277da5fd.js"], "[hls]": ["/[hls]-aa576af611d391b2a885.js"], "[TutorialCardSection]": ["/[TutorialCardSection].d8069fc73ee1b47ceba2.css", "/[TutorialCardSection]-f922a0df50b9ddc16c94.js"], "[LearningPathsSection]": ["/[LearningPathsSection].be09bd6f01b49ab11d85.css", "/[LearningPathsSection]-d746bf55fcd443ad4d77.js"], "[CollectionCardsSection]": [], "[landingPageContent]": ["/[landingPageContent]-6b3612d9038df883084f.js"], "[CME1LearnModal]": ["/[CME1LearnModal].ded54520ca7126330504.css", "/[CME1LearnModal]-a95457b9c2b160cda096.js"], "[CatalogPage]": [], "[LearnApp]": [] };/*]]>*/</script>
</body>

</html>