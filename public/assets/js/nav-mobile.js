/**
 * Reliable mobile accordion for Our Services mega menu.
 * Replaces theme multitoggle handlers that fight mega CSS.
 */
(function ($) {
  'use strict';

  function isMobileNav() {
    return window.matchMedia('(max-width: 991.98px)').matches;
  }

  function dedupeButtons() {
    $('#nav > li.has-sub').each(function () {
      $(this).children('.submenu-button').slice(1).remove();
    });
  }

  function toggleMega($li) {
    var willOpen = !$li.hasClass('active');

    $li.siblings('.has-sub').removeClass('active')
      .children('.sub-menu').removeClass('open').hide();

    $li.toggleClass('active', willOpen);
    $li.children('.sub-menu--mega').toggleClass('open', willOpen);
  }

  function bindMegaAccordion() {
    var $buttons = $('#nav > li.has-mega > .submenu-button');
    var $links = $('#nav > li.has-mega > a');
    if (!$buttons.length) return;

    // Remove theme inline click handlers, then bind ours.
    $buttons.off('click').on('click.mcMega', function (e) {
      if (!isMobileNav()) return;
      e.preventDefault();
      e.stopImmediatePropagation();
      toggleMega($(this).closest('li.has-mega'));
    });

    $links.off('click.mcMega').on('click.mcMega', function (e) {
      if (!isMobileNav()) return;
      e.preventDefault();
      e.stopImmediatePropagation();
      toggleMega($(this).closest('li.has-mega'));
    });
  }

  $(function () {
    // Theme core binds on init — run after that.
    setTimeout(function () {
      dedupeButtons();
      bindMegaAccordion();
    }, 50);
  });
})(jQuery);
