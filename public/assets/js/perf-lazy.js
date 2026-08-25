/**
 * Performance helpers: lazy images/backgrounds.
 * Hero video starts inline in home.blade (no delayed blue plate).
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

    var handoff = setInterval(function () {
      if (!themeOwnsNav()) return;
      clearInterval(handoff);
      nav.classList.remove('open');
      nav.style.removeProperty('display');
    }, 400);
    setTimeout(function () { clearInterval(handoff); }, 20000);
  }

  function boot() {
    enhanceImages();
    lazyBackgrounds();
    earlyMobileNav();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
