/**
 * Offline XAMPP shim: prefix local asset paths with install base (e.g. /clon-adobe-website).
 * Must load before Milo / utils.js modules.
 */
(function () {
  function detectBase() {
    if (window.__CW_ASSET_ROOT) {
      return String(window.__CW_ASSET_ROOT).replace(/\/$/, '');
    }
    var p = window.location.pathname;
    var i = p.indexOf('/creativecloud');
    if (i > 0) return p.slice(0, i);
    if (p.indexOf('clon-adobe-website') !== -1) return '/clon-adobe-website';
    return '';
  }

  var base = detectBase();
  window.__CW_ASSET_ROOT = base;

  function isMediaPath(url) {
    return typeof url === 'string' && /^\/media_[^/]+\.(?:png|jpe?g|webp|gif|svg)/i.test(url.split('?')[0]);
  }

  function withMedia(url) {
    if (!isMediaPath(url)) return url;
    var name = url.split('?')[0].replace(/^\//, '');
    return base + '/assets/images/' + name + (url.indexOf('?') >= 0 ? url.slice(url.indexOf('?')) : '');
  }

  var prefixes = [
    '/creativecloud/',
    '/cc-shared/',
    '/libs/',
    '/upp/',
    '/upp-shared/',
    '/federal/',
    '/marketingtech/',
    '/homepage/',
    '/acrobat/',
    '/learn/',
    '/assets/',
    '/etc.clientlibs/',
    '/akam/',
  ];

  function isBlocked(url) {
    if (!url || typeof url !== 'string') return false;
    return /lambda-url\.|adobeid-.*\.services\.adobe\.com|save-mep-call/i.test(url);
  }

  function needsBase(url) {
    if (!url || typeof url !== 'string') return false;
    if (isBlocked(url)) return false;
    if (/^(https?:|data:|blob:|javascript:|mailto:|#)/i.test(url)) return false;
    if (base && url.indexOf(base + '/') === 0) return false;
    if (url.charAt(0) !== '/') return false;
    return prefixes.some(function (pre) {
      return url.indexOf(pre) === 0;
    });
  }

  function fixMalformedScheme(url) {
    if (typeof url !== 'string') return url;
    return url.replace(/^http\/\//i, 'http://').replace(/^https\/\//i, 'https://');
  }

  function withBase(url) {
    url = fixMalformedScheme(url);
    if (isMediaPath(url)) return withMedia(url);
    return needsBase(url) ? base + url : url;
  }

  var xo = XMLHttpRequest.prototype.open;
  XMLHttpRequest.prototype.open = function (method, url) {
    arguments[1] = withBase(url);
    return xo.apply(this, arguments);
  };

  if (window.fetch) {
    var nativeFetch = window.fetch;
    window.fetch = function (input, init) {
      var url = typeof input === 'string' ? input : (input && input.url ? input.url : '');
      if (isBlocked(url)) {
        return Promise.resolve(new Response('{}', { status: 200, headers: { 'Content-Type': 'application/json' } }));
      }
      if (typeof input === 'string') {
        input = withBase(input);
      } else if (input && input.url) {
        try {
          input = new Request(withBase(input.url), input);
        } catch (e) {
          input = withBase(input.url);
        }
      }
      return nativeFetch.call(this, input, init);
    };
  }

  var setAttribute = Element.prototype.setAttribute;
  Element.prototype.setAttribute = function (name, value) {
    if ((name === 'href' || name === 'src' || name === 'srcset') && (needsBase(value) || isMediaPath(value))) {
      value = withBase(value);
    }
    return setAttribute.call(this, name, value);
  };
})();
