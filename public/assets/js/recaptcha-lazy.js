/**
 * Lazy-load Google reCAPTCHA only when a form/widget is needed.
 * Saves ~600KB+ JS on first paint for most visitors.
 */
(function () {
  'use strict';

  var loading = false;
  var loaded = false;

  function meta() {
    return document.querySelector('meta[name="mc-recaptcha"]');
  }

  function scriptUrl() {
    var m = meta();
    if (!m) return '';
    var mode = (m.getAttribute('data-mode') || 'classic').toLowerCase();
    if (mode === 'enterprise') {
      return 'https://www.google.com/recaptcha/enterprise.js';
    }
    return 'https://www.google.com/recaptcha/api.js';
  }

  function loadRecaptcha() {
    if (loaded || loading) return;
    if (!meta() || !document.querySelector('.g-recaptcha')) return;

    var src = scriptUrl();
    if (!src) return;

    loading = true;
    var s = document.createElement('script');
    s.src = src;
    s.async = true;
    s.defer = true;
    s.onload = function () {
      loaded = true;
      loading = false;
    };
    s.onerror = function () {
      loading = false;
    };
    document.head.appendChild(s);
  }

  function bindTriggers() {
    if (!meta()) return;

    document.addEventListener('click', function (e) {
      var t = e.target;
      if (!t || !t.closest) return;
      if (t.closest('[data-open-quote], .mc-contact-form, .g-recaptcha, [data-quote-recaptcha]')) {
        loadRecaptcha();
      }
    }, true);

    document.addEventListener('focusin', function (e) {
      var t = e.target;
      if (!t || !t.closest) return;
      if (t.closest('.mc-contact-form, #mcQuoteModal, .g-recaptcha')) {
        loadRecaptcha();
      }
    }, true);

    if ('IntersectionObserver' in window) {
      var nodes = document.querySelectorAll('.g-recaptcha, .mc-contact-form, [data-quote-recaptcha]');
      if (!nodes.length) return;
      var io = new IntersectionObserver(function (entries) {
        if (!entries.some(function (en) { return en.isIntersecting; })) return;
        loadRecaptcha();
        io.disconnect();
      }, { rootMargin: '200px 0px' });
      for (var i = 0; i < nodes.length; i++) {
        io.observe(nodes[i]);
      }
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', bindTriggers);
  } else {
    bindTriggers();
  }

  window.mcLoadRecaptcha = loadRecaptcha;
})();
