const debounce = (func, wait) => {
    let timeout;
    return (...args) => {
      clearTimeout(timeout);
      timeout = setTimeout(() => func(...args), wait);
    };
  };

const minAffectedWidth = 600;
const maxAffectedWidth = 1199;
//const maxAffectedWidth = 1570;

  const removeMinHeightIfLargeScreen = (pods) => {
    const viewportWidth = window.innerWidth;
    if (viewportWidth > maxAffectedWidth) {
      pods.forEach((pod) => {
        pod.style.minHeight = "";
      });
    }
  };
  const setMaxHeightForPods = (pods) => {
    const viewportWidth = window.innerWidth;
    if (viewportWidth > maxAffectedWidth || viewportWidth < minAffectedWidth) return;
    const podArray = [...pods];
  
    const maxHeight = podArray.reduce((maxHeight, pod) => {
      const minHeight = parseInt(pod.style.minHeight, 10);
      return !isNaN(minHeight) && minHeight > maxHeight ? minHeight : maxHeight;
    }, 0);
  
    if (maxHeight > 0) {
      podArray.forEach((pod) => (pod.style.minHeight = `${maxHeight}px`));
    }
  };
  
  const fixPodHeight = (pod) => {
    const viewportWidth = window.innerWidth;
    console.log('fixing height');
    if (viewportWidth > maxAffectedWidth) return;
  
    const anchor = pod.querySelector("a");
    if (!anchor) return;
    const href = anchor.getAttribute("href");
  
    const podTypes = {
        "/products/catalog.html": [200, 235, 290],
      "/products/genstudio-for-performance-marketing.html": [230, 265, 300],
      "/products/firefly.html": [290, 290, 390], //
        "/go/firefly_promo": [260, 290, 360], //
      "/products/photoshop.html": [290, 310, 370], //
      "/products/photoshop/app.html": [290, 310, 370], //
      "/products/premiere.html": [290, 310, 390], //
      "/express/?promoid=DZTGZSWP": [230, 270, 390],
      "adobesparkpost.app.link": [290, 310,370], //new
      "/products/catalog.html": [200, 235, 290],
      "/acrobat.html": [250, 320, 370],
      "/max.html": [250, 300, 350], //new
      "https://business.": [250, 370, 450], //new
        "/creativecloud/plans.html?plan=edu": [280, 340, 370],
        "/creativecloud/plans.html?plan=team": [280, 340, 370],
        "/creativecloud/plans.html": [250, 340, 360],
        "/creativecloud/buy/students.html": [250, 320, 370],
      "https://": [200, 220, 230],
    };
  
    const matchedPod = Object.entries(podTypes).find(([key]) => href.includes(key));
  
    if (matchedPod) {
      const [, [minHeight1, minHeight2, minHeight3]] = matchedPod;
      const innerPodContent = pod.querySelector("a > .body-m");
      const innerPodContentHeight = innerPodContent ? innerPodContent.offsetHeight : 0;
      const topPadding = 45;
      let baseHeight;
  
      if (viewportWidth > 1023 && viewportWidth < (maxAffectedWidth + 1)) {
          baseHeight = minHeight3;
      } else if (viewportWidth > 819 && viewportWidth < 1024) {
        baseHeight = minHeight2;
      } else if (viewportWidth > 599 && viewportWidth < 820) {
        baseHeight = minHeight1;
      } else if (viewportWidth > 539 && viewportWidth < 600) {
        baseHeight = minHeight3;
      } else if (viewportWidth >= 430 && viewportWidth < 540) {
        baseHeight = minHeight2 + 20;
      } else {
        baseHeight = minHeight1 + 10;
      }
  
      const finalMinHeight = baseHeight + topPadding + innerPodContentHeight;
      pod.style.minHeight = `${finalMinHeight}px`;
    }
  };
  
  const initializePods = () => {
    const pods = document.querySelectorAll(".homepage-brick:not(.link, .above-pods)");
    const masonryPods = document.querySelectorAll("main > div:first-child .masonry .homepage-brick");
  
    const resizeHandler = debounce(() => {
      const viewportWidth = window.innerWidth;
      if (viewportWidth > maxAffectedWidth) {
        removeMinHeightIfLargeScreen(pods);
        return;
      }
      pods.forEach((pod) => fixPodHeight(pod));
      setMaxHeightForPods(masonryPods);
    }, 300);
  
    window.addEventListener("resize", resizeHandler);
  
    pods.forEach((pod) => {
      fixPodHeight(pod);
    });
    setMaxHeightForPods(masonryPods);
  };
  
  const myUrl = window.location.href;
  if (myUrl.includes("stage.adobe.com") || myUrl.includes("main--homepage--adobecom") || myUrl.includes("main--upp--adobecom")) {
    setTimeout(() => {
      initializePods();
    }, 3000);
  } else {
    document.addEventListener("milo:deferred", () => {
      initializePods();
    });
  }
  
  const injectStyles = () => {
    const style = document.createElement("style");
  
    const css = `
        @media (max-width: 1199px) {
          .homepage-brick.link.split-background {
            min-height: unset!important;
          }
        }
      `;
    style.innerHTML = css;
    document.head.appendChild(style);
  };
  
  injectStyles();
  