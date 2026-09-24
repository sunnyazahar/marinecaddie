(function () {
  'use strict';

  var body = document.body;
  if (!body || !body.classList.contains('mc-cinematic-home')) return;

  var stage = document.getElementById('mc-cinematic');
  if (!stage) {
    body.classList.add('mc-gates-skip');
    return;
  }

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function openGates() {
    body.classList.add('mc-gates-open');
    stage.classList.add('is-open');
  }

  if (reduce) {
    body.classList.add('mc-gates-skip');
    stage.classList.add('is-open', 'is-instant');
    return;
  }

  /* Hold closed briefly, then a slow open so the panels are visible first */
  requestAnimationFrame(function () {
    requestAnimationFrame(function () {
      setTimeout(openGates, 700);
    });
  });
})();
