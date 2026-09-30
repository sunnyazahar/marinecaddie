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
  var enterBtn = document.getElementById('mc-gate-enter');
  var canvas = document.getElementById('mc-gate-fx');
  var stageBox = stage.querySelector('.mc-cinematic__stage');
  var mapImg = stage.querySelector('.mc-cinematic__gate--right .mc-cinematic__scene');

  var opened = false;
  var running = false;
  var skipped = false;

  function openGates(instant) {
    if (opened) return;
    opened = true;
    if (instant) stage.classList.add('is-instant');
    body.classList.add('mc-gates-open');
    stage.classList.add('is-open');
  }

  if (!enterBtn || !canvas || !stageBox || !mapImg) {
    if (enterBtn) enterBtn.addEventListener('click', function () { openGates(false); });
    return;
  }

  /* Points on the golf map inside gate-scene (1728x1152 plate) */
  var MAP = {
    tee: { x: 1522, y: 957 },
    /* bends the fairway line slightly left, as sketched */
    ctrl: { x: 1430, y: 712 },
    land: { x: 1383, y: 471 },
    bounce: { x: 1372, y: 447 },
    hole: { x: 1363, y: 414 },
    ballD: 9,
    minBallPx: 4.5,
    holeRx: 6,
    holeRy: 4.4
  };

  var ctx = canvas.getContext('2d');
  var geo = null;
  var dpr = 1;
  var raf = 0;
  var fx = { ball: null, shadow: null, tracer: [], tracerAlpha: 1, hole: 0, ring: 0 };

  /* Where the gate plate is painted (object-fit cover on desktop, contain on phones) */
  function layout() {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    var sr = stageBox.getBoundingClientRect();
    var r = mapImg.getBoundingClientRect();
    var nw = mapImg.naturalWidth || 1728;
    var nh = mapImg.naturalHeight || 1152;
    var fit = window.getComputedStyle(mapImg).objectFit;
    var s = fit === 'contain' ? Math.min(r.width / nw, r.height / nh) : Math.max(r.width / nw, r.height / nh);
    var W = stageBox.clientWidth;
    var H = stageBox.clientHeight;
    geo = {
      s: s,
      x: r.left - sr.left + (r.width - nw * s) / 2,
      y: r.top - sr.top + (r.height - nh * s) / 2,
      W: W,
      /* stage can be taller than the screen on phones */
      visH: Math.max(200, Math.min(H, (window.innerHeight || H) - sr.top))
    };
    canvas.style.width = W + 'px';
    canvas.style.height = H + 'px';
    canvas.width = Math.round(W * dpr);
    canvas.height = Math.round(H * dpr);
  }

  function pt(p) {
    return { x: geo.x + p.x * geo.s, y: geo.y + p.y * geo.s };
  }

  function groundD() {
    return Math.max(MAP.ballD * geo.s, MAP.minBallPx);
  }

  /* ---------- Drawing (CSS px) ---------- */
  function drawBall(b) {
    var r = b.d / 2;
    ctx.save();
    if (b.a != null) ctx.globalAlpha = b.a;
    var g = ctx.createRadialGradient(b.x - r * 0.38, b.y - r * 0.42, r * 0.08, b.x, b.y, r);
    g.addColorStop(0, '#ffffff');
    g.addColorStop(0.5, '#f3f3ef');
    g.addColorStop(0.85, '#c9ccc4');
    g.addColorStop(1, '#9ea397');
    ctx.shadowColor = 'rgba(0,0,0,0.35)';
    ctx.shadowBlur = 2;
    ctx.fillStyle = g;
    ctx.beginPath();
    ctx.arc(b.x, b.y, r, 0, Math.PI * 2);
    ctx.fill();
    ctx.restore();
  }

  function drawShadow(s) {
    if (!s || s.a <= 0.01) return;
    var g = ctx.createRadialGradient(s.x, s.y, 0, s.x, s.y, s.rx);
    g.addColorStop(0, 'rgba(8,18,4,' + s.a + ')');
    g.addColorStop(1, 'rgba(8,18,4,0)');
    ctx.save();
    ctx.translate(s.x, s.y);
    ctx.scale(1, s.ry / s.rx);
    ctx.translate(-s.x, -s.y);
    ctx.fillStyle = g;
    ctx.beginPath();
    ctx.arc(s.x, s.y, s.rx, 0, Math.PI * 2);
    ctx.fill();
    ctx.restore();
  }

  function drawTracer() {
    var pts = fx.tracer;
    if (pts.length < 2 || fx.tracerAlpha <= 0) return;
    ctx.save();
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    ctx.beginPath();
    ctx.moveTo(pts[0].x, pts[0].y);
    for (var i = 1; i < pts.length; i++) ctx.lineTo(pts[i].x, pts[i].y);
    ctx.strokeStyle = 'rgba(247,148,29,' + (0.26 * fx.tracerAlpha) + ')';
    ctx.lineWidth = 6;
    ctx.stroke();
    ctx.strokeStyle = 'rgba(255,190,96,' + (0.95 * fx.tracerAlpha) + ')';
    ctx.lineWidth = 2.2;
    ctx.stroke();
    ctx.restore();
  }

  function drawHole() {
    if (fx.hole <= 0) return;
    var h = pt(MAP.hole);
    var rx = Math.max(MAP.holeRx * geo.s, 3.2);
    var ry = Math.max(MAP.holeRy * geo.s, 2.4);
    ctx.save();
    ctx.globalAlpha = fx.hole;
    ctx.fillStyle = 'rgba(4,10,2,0.88)';
    ctx.beginPath();
    ctx.ellipse(h.x, h.y, rx, ry, 0, 0, Math.PI * 2);
    ctx.fill();
    ctx.strokeStyle = 'rgba(255,255,255,0.55)';
    ctx.lineWidth = 0.8;
    ctx.stroke();
    ctx.restore();
  }

  function drawRing() {
    if (fx.ring <= 0 || fx.ring >= 1) return;
    var h = pt(MAP.hole);
    var rr = Math.max(MAP.holeRx * geo.s, 3.2) + fx.ring * 26;
    ctx.save();
    ctx.strokeStyle = 'rgba(247,148,29,' + (0.9 * (1 - fx.ring)) + ')';
    ctx.lineWidth = 1.6;
    ctx.beginPath();
    ctx.ellipse(h.x, h.y, rr, rr * 0.75, 0, 0, Math.PI * 2);
    ctx.stroke();
    ctx.restore();
  }

  function drawIdle() {
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    if (opened || running) return;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    var T = pt(MAP.tee);
    placeBall(T.x, T.y, 0);
    drawShadow(fx.shadow);
    drawBall(fx.ball);
  }

  function render() {
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    if (!running) return;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    drawHole();
    drawTracer();
    drawShadow(fx.shadow);
    if (fx.ball) drawBall(fx.ball);
    drawRing();
    raf = requestAnimationFrame(render);
  }

  /* ---------- Timing ---------- */
  function wait(ms) {
    return new Promise(function (res) { setTimeout(res, ms); });
  }

  function tween(ms, fn) {
    return new Promise(function (res) {
      var t0 = 0;
      function step(now) {
        if (!t0) t0 = now;
        var u = Math.min(1, (now - t0) / ms);
        if (!skipped) fn(u);
        if (u < 1 && !skipped) requestAnimationFrame(step);
        else res();
      }
      requestAnimationFrame(step);
    });
  }

  function lerp(a, b, u) { return a + (b - a) * u; }

  /* ---------- Sound (synthesised, only after the user's click) ---------- */
  var ac = null;
  var master = null;

  function initAudio() {
    if (ac) return;
    var AC = window.AudioContext || window.webkitAudioContext;
    if (!AC) return;
    try {
      ac = new AC();
      master = ac.createGain();
      master.gain.value = 0.5;
      master.connect(ac.destination);
      if (ac.state === 'suspended') ac.resume();
    } catch (e) {
      ac = null;
    }
  }

  function noise(dur) {
    var len = Math.max(1, Math.floor(ac.sampleRate * dur));
    var buf = ac.createBuffer(1, len, ac.sampleRate);
    var d = buf.getChannelData(0);
    for (var i = 0; i < len; i++) d[i] = Math.random() * 2 - 1;
    var src = ac.createBufferSource();
    src.buffer = buf;
    return src;
  }

  function env(g, t, peak, attack, decay) {
    g.gain.setValueAtTime(0.0001, t);
    g.gain.exponentialRampToValueAtTime(peak, t + attack);
    g.gain.exponentialRampToValueAtTime(0.0001, t + attack + decay);
  }

  function tone(type, f0, f1, t, dur, peak) {
    var o = ac.createOscillator();
    var g = ac.createGain();
    o.type = type;
    o.frequency.setValueAtTime(f0, t);
    o.frequency.exponentialRampToValueAtTime(f1, t + dur);
    env(g, t, peak, 0.004, dur);
    o.connect(g).connect(master);
    o.start(t);
    o.stop(t + dur + 0.05);
  }

  function burst(t, dur, freq, q, peak, type) {
    var n = noise(dur + 0.05);
    var f = ac.createBiquadFilter();
    var g = ac.createGain();
    f.type = type || 'bandpass';
    f.frequency.value = freq;
    f.Q.value = q;
    env(g, t, peak, 0.003, dur);
    n.connect(f).connect(g).connect(master);
    n.start(t);
    n.stop(t + dur + 0.05);
  }

  var sfx = {
    hit: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      burst(t, 0.035, 2600, 1.4, 0.55, 'bandpass');
      tone('triangle', 1500, 700, t, 0.05, 0.22);
    },
    whoosh: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      var n = noise(0.7);
      var f = ac.createBiquadFilter();
      var g = ac.createGain();
      f.type = 'bandpass';
      f.Q.value = 1.2;
      f.frequency.setValueAtTime(1800, t);
      f.frequency.exponentialRampToValueAtTime(500, t + 0.6);
      g.gain.setValueAtTime(0.0001, t);
      g.gain.exponentialRampToValueAtTime(0.12, t + 0.12);
      g.gain.exponentialRampToValueAtTime(0.0001, t + 0.65);
      n.connect(f).connect(g).connect(master);
      n.start(t);
      n.stop(t + 0.7);
    },
    thud: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      tone('sine', 130, 55, t, 0.1, 0.35);
      burst(t, 0.05, 500, 0.7, 0.12, 'lowpass');
    },
    cup: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      burst(t, 0.03, 3800, 2, 0.35, 'highpass');
      tone('sine', 900, 620, t + 0.01, 0.06, 0.18);
      burst(t + 0.08, 0.025, 4200, 2, 0.22, 'highpass');
      tone('sine', 560, 300, t + 0.1, 0.16, 0.26);
      burst(t + 0.15, 0.02, 4000, 2, 0.12, 'highpass');
    }
  };

  /* ---------- Shot: off the tee, up the fairway, land on the green, roll into the cup ---------- */
  function placeBall(gx, gy, h, alpha, scale) {
    var gd = groundD();
    var d = gd * (1 + h / 90) * (scale == null ? 1 : scale);
    /* top-down map: height reads from size + shadow gap; a full vertical lift makes the path hook back */
    fx.ball = { x: gx, y: gy - h * 0.4, d: d, a: alpha == null ? 1 : alpha };
    fx.shadow = h > 0.5
      ? { x: gx + h * 0.22, y: gy + h * 0.06, rx: gd * (0.8 + h / 120), ry: gd * (0.5 + h / 200), a: 0.42 * Math.max(0.2, 1 - h / 220) }
      : { x: gx + 1, y: gy + d * 0.3, rx: d * 0.6, ry: d * 0.32, a: 0.45 };
  }

  function shot() {
    var L = pt(MAP.land);
    var B = pt(MAP.bounce);
    var C = pt(MAP.hole);
    var T = pt(MAP.tee);
    var Q = pt(MAP.ctrl);
    var dist = Math.sqrt((T.x - L.x) * (T.x - L.x) + (T.y - L.y) * (T.y - L.y));
    var apex = Math.max(60, Math.min(180, dist * 0.38));
    var bounceH = Math.max(6, 16 * geo.s);

    fx.tracer = [];
    fx.tracerAlpha = 1;
    tween(450, function (u) { fx.hole = u; });
    sfx.hit();
    sfx.whoosh();

    return tween(1500, function (u) {
      var e = 1 - Math.pow(1 - u, 1.35);
      var h = apex * 4 * e * (1 - e);
      var k = 1 - e;
      var gx = k * k * T.x + 2 * k * e * Q.x + e * e * L.x;
      var gy = k * k * T.y + 2 * k * e * Q.y + e * e * L.y;
      placeBall(gx, gy, h);
      fx.tracer.push({ x: fx.ball.x, y: fx.ball.y });
    }).then(function () {
      sfx.thud();
      return tween(360, function (u) {
        placeBall(lerp(L.x, B.x, u), lerp(L.y, B.y, u), bounceH * 4 * u * (1 - u));
      });
    }).then(function () {
      tween(700, function (u) { fx.tracerAlpha = 1 - u * 0.8; });
      return tween(900, function (u) {
        var e = 1 - Math.pow(1 - u, 1.6);
        placeBall(lerp(B.x, C.x, e), lerp(B.y, C.y, e), 0);
      });
    }).then(function () {
      sfx.cup();
      return tween(280, function (u) {
        placeBall(C.x, C.y + u * 1.2, 0, 1 - u, 1 - u * 0.55);
        fx.shadow = null;
      });
    }).then(function () {
      fx.ball = null;
      fx.shadow = null;
      return tween(650, function (u) { fx.ring = u; });
    });
  }

  function finish() {
    if (opened) return;
    openGates(false);
    setTimeout(function () {
      running = false;
      cancelAnimationFrame(raf);
      render();
      stage.classList.remove('is-golfing');
    }, 450);
  }

  function play() {
    if (running || opened) return;
    running = true;
    stage.classList.add('is-golfing');
    initAudio();
    layout();
    raf = requestAnimationFrame(render);
    shot().then(function () {
      if (skipped) return;
      return wait(200);
    }).then(function () {
      if (!skipped) finish();
    });
  }

  function start() {
    if (opened || running) return;
    if (reduce) {
      openGates(true);
      return;
    }
    play();
  }

  enterBtn.addEventListener('click', start);

  document.addEventListener('keydown', function (e) {
    if (opened) return;
    if (e.key === 'Escape' && running) {
      skipped = true;
      finish();
      return;
    }
    if (e.key !== 'Enter' || running) return;
    var t = e.target;
    var tag = t && t.tagName;
    if (tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT' || tag === 'BUTTON' || tag === 'A' || (t && t.isContentEditable)) return;
    e.preventDefault();
    start();
  });

  window.addEventListener('resize', function () {
    layout();
    drawIdle();
  });

  function idleInit() {
    layout();
    drawIdle();
  }

  if (mapImg.complete && mapImg.naturalWidth) idleInit();
  else mapImg.addEventListener('load', idleInit, { once: true });
  if (document.readyState !== 'complete') window.addEventListener('load', idleInit, { once: true });
})();
