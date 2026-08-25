/**
 * Performance helpers: lazy images/backgrounds + delayed hero video (after LCP).
 * Mobile uses a smaller MP4 and longer idle delay to cut TBT/LCP contention.
 */
(function () {
  'use strict';

  function isMobile() {
    return window.matchMedia && window.matchMedia('(max-width: 991.98px)').matches;
  }

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

  /** Defer [data-background] until near viewport — frees bandwidth for LCP */
  function lazyBackgrounds() {
    var nodes = document.querySelectorAll('[data-background]');
    if (!nodes.length) return;

    function apply(el) {
      var url = el.getAttribute('data-background');
      if (!url || el.getAttribute('data-mc-bg-loaded')) return;
      el.setAttribute('data-mc-bg-loaded', '1');
      el.style.backgroundImage = 'url("' + url + '")';
    }

    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        for (var i = 0; i < entries.length; i++) {
          if (!entries[i].isIntersecting) continue;
          apply(entries[i].target);
          io.unobserve(entries[i].target);
        }
      }, { rootMargin: '180px 0px', threshold: 0.01 });
      for (var j = 0; j < nodes.length; j++) io.observe(nodes[j]);
    } else {
      var run = function () {
        for (var k = 0; k < nodes.length; k++) apply(nodes[k]);
      };
      if (document.readyState === 'complete') run();
      else window.addEventListener('load', run);
    }
  }

  function loadHeroVideo() {
    var video = document.querySelector('[data-mc-hero-video]');
    if (!video) return;

    var mobileSrc = video.getAttribute('data-mc-hero-src-mobile');
    var desktopSrc = video.getAttribute('data-mc-hero-src');
    var src = (isMobile() && mobileSrc) ? mobileSrc : desktopSrc;
    if (!src) return;

    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      return;
    }

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

    function schedule() {
      var idleTimeout = isMobile() ? 4500 : 2500;
      var fallbackDelay = isMobile() ? 1800 : 600;
      var start = function () {
        if ('requestIdleCallback' in window) {
          requestIdleCallback(function () { attachAndPlay(); }, { timeout: idleTimeout });
        } else {
          setTimeout(attachAndPlay, fallbackDelay);
        }
      };
      if (document.readyState === 'complete') {
        start();
      } else {
        window.addEventListener('load', start);
      }
    }

    schedule();
  }

  function boot() {
    enhanceImages();
    lazyBackgrounds();
    loadHeroVideo();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
