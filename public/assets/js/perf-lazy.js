/**
 * Auto lazy-load below-the-fold images + decode async.
 * Skips logos, LCP candidates (fetchpriority=high), and already-lazy images.
 */
(function () {
  'use strict';

  function enhanceImages() {
    var imgs = document.querySelectorAll('img:not([loading])');
    for (var i = 0; i < imgs.length; i++) {
      var img = imgs[i];
      if (img.getAttribute('fetchpriority') === 'high') continue;
      if (img.closest('header, .navbar, .navbar-brand, .logochange')) {
        img.setAttribute('loading', 'eager');
        img.setAttribute('decoding', 'async');
        continue;
      }
      img.setAttribute('loading', 'lazy');
      img.setAttribute('decoding', 'async');
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', enhanceImages);
  } else {
    enhanceImages();
  }
})();
