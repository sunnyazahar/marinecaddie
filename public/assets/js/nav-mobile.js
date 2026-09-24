/**
 * Mobile accordion for Who We Are and Our Services.
 * Capture phase runs before the theme menumaker (loaded after window load),
 * which slideToggles the same list twice and leaves it at height 0.
 */
(function () {
  'use strict';

  function isMobileNav() {
    return window.matchMedia('(max-width: 991.98px)').matches;
  }

  function clearSlideStyles(sub) {
    if (!sub) return;
    ['display', 'height', 'overflow', 'padding-top', 'padding-bottom', 'margin-top', 'margin-bottom'].forEach(function (prop) {
      sub.style.removeProperty(prop);
    });
  }

  function setOpen(li, open) {
    li.classList.toggle('is-open', open);
    var link = li.querySelector(':scope > a');
    if (link) link.setAttribute('aria-expanded', open ? 'true' : 'false');
    clearSlideStyles(li.querySelector(':scope > .sub-menu'));
  }

  function toggle(li) {
    var open = !li.classList.contains('is-open');
    var nav = li.parentElement;
    if (nav) {
      nav.querySelectorAll(':scope > li.has-sub.is-open').forEach(function (other) {
        if (other !== li) setOpen(other, false);
      });
    }
    setOpen(li, open);
  }

  function onNavClick(e) {
    if (!isMobileNav()) return;
    if (e.target.closest('.sub-menu')) return;

    var li = e.target.closest('#nav > li.has-sub');
    if (!li) return;

    e.preventDefault();
    e.stopPropagation();
    toggle(li);
  }

  function boot() {
    var nav = document.getElementById('nav');
    if (!nav || nav.getAttribute('data-mc-accordion') === '1') return;
    nav.setAttribute('data-mc-accordion', '1');
    nav.addEventListener('click', onNavClick, true);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
