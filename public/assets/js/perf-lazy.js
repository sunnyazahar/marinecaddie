/**
 * Performance helpers: lazy images + desktop-only hero video.
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

    // Mobile CSS hides the video; never download the multi-MB MP4 there.
    if (window.matchMedia && window.matchMedia('(max-width: 991.98px)').matches) {
      return;
    }

    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      return;
    }

    function attachAndPlay() {
      if (video.getAttribute('data-mc-hero-loaded')) return;
      video.setAttribute('data-mc-hero-loaded', '1');
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
