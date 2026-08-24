/**
 * Load non-critical scripts after window load to cut TBT / TTI.
 * Expects <script type="text/plain" data-mc-defer-src="..."> placeholders.
 */
(function () {
  'use strict';

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
        chain = chain.then(function () { return inject(src); }).catch(function () { /* continue */ });
      })(nodes[i]);
    }
    return chain;
  }

  function schedule() {
    var start = function () {
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
