/**
 * Core Web Vitals reporter (LCP, INP, CLS, TTFB, FCP).
 * Logs to console in production-safe way and sends to optional endpoint
 * or Google Analytics gtag when available.
 *
 * Enable remote logging with:
 *   window.MC_WEB_VITALS_ENDPOINT = '/api/web-vitals'; // optional
 */
(function () {
  'use strict';

  function send(metric) {
    var body = {
      name: metric.name,
      value: Math.round(metric.name === 'CLS' ? metric.value * 1000 : metric.value),
      rating: metric.rating,
      id: metric.id,
      navigationType: metric.navigationType || '',
      path: location.pathname,
      ua: navigator.userAgent,
      ts: Date.now(),
    };

    // Google Analytics 4 (if gtag present)
    if (typeof window.gtag === 'function') {
      window.gtag('event', body.name, {
        event_category: 'Web Vitals',
        value: body.value,
        metric_id: body.id,
        metric_rating: body.rating,
        non_interaction: true,
      });
    }

    var endpoint = window.MC_WEB_VITALS_ENDPOINT;
    if (!endpoint) return;

    var payload = JSON.stringify(body);
    if (navigator.sendBeacon) {
      navigator.sendBeacon(endpoint, new Blob([payload], { type: 'application/json' }));
      return;
    }
    try {
      fetch(endpoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: payload,
        keepalive: true,
      });
    } catch (e) { /* ignore */ }
  }

  function loadAndReport() {
    // Lightweight inline vitals (no npm) — PerformanceObserver based
    try {
      // LCP
      var lcpObs = new PerformanceObserver(function (list) {
        var entries = list.getEntries();
        var last = entries[entries.length - 1];
        if (!last) return;
        send({
          name: 'LCP',
          value: last.startTime,
          rating: last.startTime <= 2500 ? 'good' : last.startTime <= 4000 ? 'needs-improvement' : 'poor',
          id: 'lcp-' + Math.random().toString(36).slice(2, 9),
        });
      });
      lcpObs.observe({ type: 'largest-contentful-paint', buffered: true });
    } catch (e) { /* unsupported */ }

    try {
      // CLS
      var cls = 0;
      var clsObs = new PerformanceObserver(function (list) {
        list.getEntries().forEach(function (entry) {
          if (!entry.hadRecentInput) cls += entry.value;
        });
      });
      clsObs.observe({ type: 'layout-shift', buffered: true });
      document.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'hidden') {
          send({
            name: 'CLS',
            value: cls,
            rating: cls <= 0.1 ? 'good' : cls <= 0.25 ? 'needs-improvement' : 'poor',
            id: 'cls-' + Math.random().toString(36).slice(2, 9),
          });
        }
      });
    } catch (e) { /* unsupported */ }

    try {
      // INP (Interaction to Next Paint) — approximate via event timing
      var worst = 0;
      var inpObs = new PerformanceObserver(function (list) {
        list.getEntries().forEach(function (entry) {
          if (entry.duration > worst) worst = entry.duration;
        });
      });
      inpObs.observe({ type: 'event', buffered: true, durationThreshold: 16 });
      document.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'hidden' && worst > 0) {
          send({
            name: 'INP',
            value: worst,
            rating: worst <= 200 ? 'good' : worst <= 500 ? 'needs-improvement' : 'poor',
            id: 'inp-' + Math.random().toString(36).slice(2, 9),
          });
        }
      });
    } catch (e) { /* unsupported */ }

    try {
      // TTFB + FCP from Navigation / Paint Timing
      var nav = performance.getEntriesByType('navigation')[0];
      if (nav) {
        send({
          name: 'TTFB',
          value: nav.responseStart,
          rating: nav.responseStart <= 800 ? 'good' : nav.responseStart <= 1800 ? 'needs-improvement' : 'poor',
          id: 'ttfb-' + Math.random().toString(36).slice(2, 9),
        });
      }
      var paints = performance.getEntriesByType('paint');
      paints.forEach(function (p) {
        if (p.name === 'first-contentful-paint') {
          send({
            name: 'FCP',
            value: p.startTime,
            rating: p.startTime <= 1800 ? 'good' : p.startTime <= 3000 ? 'needs-improvement' : 'poor',
            id: 'fcp-' + Math.random().toString(36).slice(2, 9),
          });
        }
      });
    } catch (e) { /* unsupported */ }
  }

  if (document.readyState === 'complete') {
    setTimeout(loadAndReport, 0);
  } else {
    window.addEventListener('load', function () {
      setTimeout(loadAndReport, 0);
    });
  }
})();
