/**
 * Performance helpers: lazy images + hero video (muted / playsinline).
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

  function loadHeroVideo() {
    var video = document.querySelector('[data-mc-hero-video]');
    if (!video) return;

    var src = video.getAttribute('data-mc-hero-src');
    if (!src) return;

    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      return;
    }

    // Skip on explicit data-saver / very slow connections
    var conn = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
    if (conn && (conn.saveData || /2g/.test(conn.effectiveType || ''))) {
      return;
    }

    function attachAndPlay() {
      if (video.getAttribute('data-mc-hero-loaded')) return;
      video.setAttribute('data-mc-hero-loaded', '1');
      video.setAttribute('playsinline', '');
      video.setAttribute('webkit-playsinline', '');
      video.muted = true;
      video.defaultMuted = true;
      var source = document.createElement('source');
      source.src = src;
      source.type = 'video/mp4';
      video.appendChild(source);
      video.load();
      var playPromise = video.play();
      if (playPromise && typeof playPromise.catch === 'function') {
        playPromise.catch(function () { /* autoplay blocked — poster remains */ });
      }
    }

    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        if (!entries.some(function (e) { return e.isIntersecting; })) return;
        io.disconnect();
        attachAndPlay();
      }, { rootMargin: '100px 0px' });
      io.observe(video);
    } else {
      attachAndPlay();
    }
  }

  function boot() {
    enhanceImages();
    loadHeroVideo();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
