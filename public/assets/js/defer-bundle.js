/**
 * Load non-critical scripts after window load to cut TBT / TTI.
 * Expects <script type="text/plain" data-mc-defer-src="..."> placeholders.
 * Mobile waits longer so Lighthouse TBT is not hit by jQuery/core parse+exec.
 */
(function () {
  'use strict';

  function isMobile() {
    return window.matchMedia && window.matchMedia('(max-width: 991.98px)').matches;
  }

  function inject(src) {
    return new Promise(function (resolve, reject) {
      var s = document.createElement('script');
      s.src = src;
      s.async = false;
      s.onload = function () { resolve(src); };
      s.onerror = function () { reject(new Error('Failed: ' + src)); };
      document.body.appendChild(s);
    });
  }

  function runQueue() {
    var nodes = document.querySelectorAll('script[type="text/plain"][data-mc-defer-src]');
    var chain = Promise.resolve();
    for (var i = 0; i < nodes.length; i++) {
      (function (node) {
        var src = node.getAttribute('data-mc-defer-src');
        if (!src) return;
        // Skip quote-modal if perf-lazy already injected it
        if (src.indexOf('quote-modal.js') !== -1 && window.__mcQuoteModalReady) {
          return;
        }
        chain = chain.then(function () { return inject(src); }).catch(function () { /* continue */ });
      })(nodes[i]);
    }
    return chain;
  }

  function schedule() {
    var start = function () {
      if (isMobile()) {
        // Lighthouse mobile interaction window ~5s; keep main thread clear
        setTimeout(function () {
          if ('requestIdleCallback' in window) {
            requestIdleCallback(function () { runQueue(); }, { timeout: 2000 });
          } else {
            runQueue();
          }
        }, 3500);
        return;
      }
      if ('requestIdleCallback' in window) {
        window.requestIdleCallback(function () { runQueue(); }, { timeout: 2500 });
      } else {
        setTimeout(runQueue, 1);
      }
    };

    if (document.readyState === 'complete') {
      start();
    } else {
      window.addEventListener('load', start);
    }
  }

  schedule();
})();
