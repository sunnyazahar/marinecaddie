/**
 * Performance helpers (no jQuery):
 * - lazy images / [data-background]
 * - delayed hero video (after LCP)
 * - early mobile nav toggle until theme core.min binds
 * - lazy-load quote-modal.js on first Get Quote click
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

  /** Mobile hamburger until theme core.min multitoggle takes over */
  function earlyMobileNav() {
    var toggler = document.querySelector('header .navbar-toggler');
    var nav = document.getElementById('nav');
    if (!toggler || !nav) return;

    toggler.setAttribute('role', 'button');
    toggler.setAttribute('aria-label', 'Toggle navigation');
    toggler.setAttribute('tabindex', '0');

    function themeOwnsNav() {
      return !!document.querySelector('#nav .submenu-button');
    }

    function toggle() {
      if (themeOwnsNav()) return;
      var open = !nav.classList.contains('open');
      nav.classList.toggle('open', open);
      nav.style.display = open ? 'block' : 'none';
      toggler.classList.toggle('menu-opened', open);
      toggler.setAttribute('aria-expanded', open ? 'true' : 'false');
    }

    var handoff = setInterval(function () {
      if (!themeOwnsNav()) return;
      clearInterval(handoff);
      nav.classList.remove('open');
      nav.style.removeProperty('display');
    }, 400);
    setTimeout(function () { clearInterval(handoff); }, 20000);

    toggler.addEventListener('click', function (e) {
      if (themeOwnsNav()) return;
      e.preventDefault();
      e.stopPropagation();
      toggle();
    });

    toggler.addEventListener('keydown', function (e) {
      if (themeOwnsNav()) return;
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggle();
      }
    });
  }

  /** Load quote-modal.js on first Get Quote interaction */
  function lazyQuoteModal() {
    var srcNode = document.querySelector('script[data-mc-quote-src]');
    var src = srcNode && srcNode.getAttribute('data-mc-quote-src');
    if (!src) return;

    var loading = null;

    function inject() {
      if (window.__mcQuoteModalReady) return Promise.resolve();
      if (loading) return loading;
      loading = new Promise(function (resolve, reject) {
        var s = document.createElement('script');
        s.src = src;
        s.onload = function () {
          window.__mcQuoteModalReady = true;
          resolve();
        };
        s.onerror = reject;
        document.body.appendChild(s);
      });
      return loading;
    }

    document.addEventListener('click', function (e) {
      var btn = e.target && e.target.closest && e.target.closest('[data-open-quote]');
      if (!btn) return;
      if (window.__mcQuoteModalReady) return;
      e.preventDefault();
      e.stopPropagation();
      var mode = btn.getAttribute('data-open-quote') || 'quote';
      inject().then(function () {
        if (typeof window.mcOpenQuote === 'function') {
          window.mcOpenQuote(mode);
        }
      }).catch(function () {
        window.location.href = btn.getAttribute('href') || '/contact?quote=1';
      });
    }, true);

    // Prefetch after load / idle so first click is fast
    function prefetch() {
      if ('requestIdleCallback' in window) {
        requestIdleCallback(function () { inject(); }, { timeout: isMobile() ? 6000 : 3000 });
      } else {
        setTimeout(function () { inject(); }, isMobile() ? 4000 : 1500);
      }
    }
    if (document.readyState === 'complete') prefetch();
    else window.addEventListener('load', prefetch);
  }

  function boot() {
    enhanceImages();
    lazyBackgrounds();
    loadHeroVideo();
    earlyMobileNav();
    lazyQuoteModal();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
