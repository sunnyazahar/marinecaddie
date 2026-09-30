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
  var golf = document.getElementById('mc-golf');
  var mapCanvas = document.getElementById('mc-gate-fx');
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

  if (!enterBtn || !golf || !mapCanvas || !stageBox || !mapImg) {
    if (enterBtn) enterBtn.addEventListener('click', function () { openGates(false); });
    return;
  }

  /* ---------- Tee shot plates (1280x720) ---------- */
  var IW = 1280;
  var IH = 720;
  var FOCUS = { c: 0.43, f: 0.52, oy: 0.52 };
  var TEE = {
    f: 720, hy: 372, cx: 640, camH: 1.6,
    z0: 4, zEnd: 240, xEnd: 700, apex: 34, d0: 13, draw: 16,
    ballX: 755.5, ballY: 660
  };

  /* ---------- Golf map on the gate (gate-scene plate, 1728x1152) ---------- */
  var MAP = {
    tee: { x: 1520, y: 958 },
    bend: { x: 1492, y: 650 },
    land: { x: 1381, y: 468 },
    bounce: { x: 1372, y: 447 },
    hole: { x: 1363, y: 414 },
    ballD: 9,
    minBallPx: 4.5,
    holeRx: 6,
    holeRy: 4.4
  };

  var cam = golf.querySelector('.mc-golf__cam');
  var shake = golf.querySelector('.mc-golf__shake');
  var backdrop = golf.querySelector('.mc-golf__backdrop');
  var teeCanvas = golf.querySelector('.mc-golf__fx');
  var skipBtn = golf.querySelector('.mc-golf__skip');
  var tctx = teeCanvas.getContext('2d');
  var mctx = mapCanvas.getContext('2d');
  var imgs = {};
  Array.prototype.forEach.call(golf.querySelectorAll('.mc-golf__img'), function (img) {
    imgs[img.getAttribute('data-shot')] = img;
  });

  var rect = null;
  var geo = null;
  var dpr = 1;
  var raf = 0;

  var tee = { ball: null, shadow: null, tracer: [], tracerAlpha: 1, streak: 0 };
  var map = { on: false, ball: null, shadow: null, tracer: [], tracerAlpha: 1, hole: 0, ring: 0 };

  function sizeCanvas(c, W, H) {
    c.style.width = W + 'px';
    c.style.height = H + 'px';
    c.width = Math.round(W * dpr);
    c.height = Math.round(H * dpr);
  }

  function layoutTee() {
    var W = golf.clientWidth;
    var H = golf.clientHeight;
    /* On phones the stage is taller than the screen: frame the shot inside what is visible */
    var gr = golf.getBoundingClientRect();
    var y0 = Math.max(0, -gr.top);
    var y1 = Math.min(H, (window.innerHeight || H) - gr.top);
    var vh = y1 - y0 > 120 ? y1 - y0 : H;
    if (vh === H) y0 = 0;
    var need = W < vh ? FOCUS.f - 0.04 : FOCUS.f;
    var coverW = Math.max(W, vh * IW / IH);
    var fw = Math.min(coverW, W / need);
    var fh = fw * IH / IW;
    var left = W / 2 - FOCUS.c * fw;
    left = fw >= W ? Math.min(0, Math.max(W - fw, left)) : (W - fw) / 2;
    var top = y0 + (fh >= vh ? (vh - fh) / 2 : (vh - fh) * FOCUS.oy);
    rect = { x: left, y: top, w: fw, h: fh, k: fw / IW };
    Object.keys(imgs).forEach(function (shot) {
      var s = imgs[shot].style;
      s.left = rect.x + 'px';
      s.top = rect.y + 'px';
      s.width = rect.w + 'px';
      s.height = rect.h + 'px';
    });
    sizeCanvas(teeCanvas, W, H);
  }

  /* Where the gate plate is actually painted (object-fit cover on desktop, contain on phones) */
  function layoutMap() {
    var sr = stageBox.getBoundingClientRect();
    var r = mapImg.getBoundingClientRect();
    var nw = mapImg.naturalWidth || 1728;
    var nh = mapImg.naturalHeight || 1152;
    var fit = window.getComputedStyle(mapImg).objectFit;
    var s = fit === 'contain' ? Math.min(r.width / nw, r.height / nh) : Math.max(r.width / nw, r.height / nh);
    geo = {
      s: s,
      x: r.left - sr.left + (r.width - nw * s) / 2,
      y: r.top - sr.top + (r.height - nh * s) / 2
    };
    sizeCanvas(mapCanvas, stageBox.clientWidth, stageBox.clientHeight);
  }

  function layout() {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    layoutTee();
    layoutMap();
  }

  function camOrigin(ix, iy) {
    cam.style.transformOrigin = (rect.x + ix * rect.k) + 'px ' + (rect.y + iy * rect.k) + 'px';
  }

  /* ---------- Drawing ---------- */
  function drawBall(ctx, b, px) {
    var r = b.d / 2;
    ctx.save();
    if (b.a != null) ctx.globalAlpha = b.a;
    if (b.d * px < 3.4) {
      ctx.shadowColor = 'rgba(255,255,255,0.9)';
      ctx.shadowBlur = 6 * dpr;
      ctx.fillStyle = '#fff';
      ctx.beginPath();
      ctx.arc(b.x, b.y, Math.max(r, 0.9 / px), 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
      return;
    }
    var g = ctx.createRadialGradient(b.x - r * 0.38, b.y - r * 0.42, r * 0.08, b.x, b.y, r);
    g.addColorStop(0, '#ffffff');
    g.addColorStop(0.5, '#f3f3ef');
    g.addColorStop(0.85, '#c9ccc4');
    g.addColorStop(1, '#9ea397');
    ctx.shadowColor = 'rgba(0,0,0,0.35)';
    ctx.shadowBlur = 2 * dpr;
    ctx.fillStyle = g;
    ctx.beginPath();
    ctx.arc(b.x, b.y, r, 0, Math.PI * 2);
    ctx.fill();
    ctx.restore();
  }

  function drawShadow(ctx, s) {
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

  function drawTracer(ctx, pts, alpha, widthFor) {
    if (pts.length < 2 || alpha <= 0) return;
    ctx.save();
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    var glow = 'rgba(247,148,29,' + (0.26 * alpha) + ')';
    var core = 'rgba(255,190,96,' + (0.95 * alpha) + ')';
    /* short runs so the line can taper without per-joint overdraw */
    for (var i = 1; i < pts.length; i += 8) {
      var end = Math.min(pts.length - 1, i + 8);
      var w = widthFor(pts[i]);
      ctx.beginPath();
      ctx.moveTo(pts[i - 1].x, pts[i - 1].y);
      for (var j = i; j <= end; j++) ctx.lineTo(pts[j].x, pts[j].y);
      ctx.strokeStyle = glow;
      ctx.lineWidth = w * 2.6;
      ctx.stroke();
      ctx.strokeStyle = core;
      ctx.lineWidth = w;
      ctx.stroke();
    }
    ctx.restore();
  }

  function drawStreak() {
    if (tee.streak <= 0) return;
    tctx.save();
    var g = tctx.createLinearGradient(610, 676, 860, 640);
    g.addColorStop(0, 'rgba(40,40,44,0)');
    g.addColorStop(0.45, 'rgba(40,40,44,' + (0.38 * tee.streak) + ')');
    g.addColorStop(0.62, 'rgba(230,230,230,' + (0.3 * tee.streak) + ')');
    g.addColorStop(1, 'rgba(230,230,230,0)');
    tctx.strokeStyle = g;
    tctx.lineWidth = 16;
    tctx.lineCap = 'round';
    tctx.filter = 'blur(3px)';
    tctx.beginPath();
    tctx.moveTo(610, 690);
    tctx.quadraticCurveTo(735, 676, 860, 628);
    tctx.stroke();
    tctx.restore();
  }

  function renderTee() {
    tctx.setTransform(1, 0, 0, 1, 0, 0);
    tctx.clearRect(0, 0, teeCanvas.width, teeCanvas.height);
    tctx.setTransform(rect.k * dpr, 0, 0, rect.k * dpr, rect.x * dpr, rect.y * dpr);
    drawTracer(tctx, tee.tracer, tee.tracerAlpha, function (p) {
      return Math.max(1.1, 3.4 * Math.sqrt(p.d / TEE.d0));
    });
    drawStreak();
    drawShadow(tctx, tee.shadow);
    if (tee.ball) drawBall(tctx, tee.ball, rect.k);
  }

  function renderMap() {
    mctx.setTransform(1, 0, 0, 1, 0, 0);
    mctx.clearRect(0, 0, mapCanvas.width, mapCanvas.height);
    if (!map.on) return;
    var s = geo.s;
    mctx.setTransform(s * dpr, 0, 0, s * dpr, geo.x * dpr, geo.y * dpr);
    var minPx = 1 / s;

    if (map.hole > 0) {
      var rx = Math.max(MAP.holeRx, 3.2 * minPx);
      var ry = Math.max(MAP.holeRy, 2.4 * minPx);
      mctx.save();
      mctx.globalAlpha = map.hole;
      mctx.fillStyle = 'rgba(4,10,2,0.88)';
      mctx.beginPath();
      mctx.ellipse(MAP.hole.x, MAP.hole.y, rx, ry, 0, 0, Math.PI * 2);
      mctx.fill();
      mctx.strokeStyle = 'rgba(255,255,255,0.55)';
      mctx.lineWidth = Math.max(0.8, 0.7 * minPx);
      mctx.stroke();
      mctx.restore();
    }

    drawTracer(mctx, map.tracer, map.tracerAlpha, function () {
      return Math.max(2.2, 1.5 * minPx);
    });
    drawShadow(mctx, map.shadow);
    if (map.ball) drawBall(mctx, map.ball, s);

    if (map.ring > 0 && map.ring < 1) {
      mctx.save();
      mctx.strokeStyle = 'rgba(247,148,29,' + (0.9 * (1 - map.ring)) + ')';
      mctx.lineWidth = Math.max(1.5, 1.6 * minPx);
      mctx.beginPath();
      var rr = Math.max(MAP.holeRx, 3.2 * minPx) + map.ring * 30 * Math.max(1, minPx * 0.6);
      mctx.ellipse(MAP.hole.x, MAP.hole.y, rr, rr * 0.75, 0, 0, Math.PI * 2);
      mctx.stroke();
      mctx.restore();
    }
  }

  function render() {
    if (!running) return;
    if (!golf.hidden) renderTee();
    renderMap();
    raf = requestAnimationFrame(render);
  }

  /* ---------- Timing helpers ---------- */
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
  function easeInOut(u) { return u < 0.5 ? 2 * u * u : 1 - Math.pow(-2 * u + 2, 2) / 2; }
  function bez(a, c, b, u) {
    var v = 1 - u;
    return { x: v * v * a.x + 2 * v * u * c.x + u * u * b.x, y: v * v * a.y + 2 * v * u * c.y + u * u * b.y };
  }

  function crossfade(fromShot, toShot, ms, blurPx) {
    var a = imgs[fromShot];
    var b = imgs[toShot];
    b.style.opacity = '0';
    b.classList.add('is-shown');
    return tween(ms, function (u) {
      var e = easeInOut(u);
      b.style.opacity = String(e);
      a.style.opacity = String(1 - e);
      if (blurPx) {
        b.style.filter = 'blur(' + (blurPx * (1 - e)).toFixed(2) + 'px)';
        a.style.filter = 'blur(' + (blurPx * e).toFixed(2) + 'px)';
      }
    }).then(function () {
      a.classList.remove('is-shown');
      a.style.opacity = '';
      a.style.filter = '';
      b.style.opacity = '';
      b.style.filter = '';
    });
  }

  function cameraShake() {
    if (!shake.animate) return;
    shake.animate([
      { transform: 'translate(0,0)' },
      { transform: 'translate(-3px,2px)' },
      { transform: 'translate(2px,-2px)' },
      { transform: 'translate(-1px,1px)' },
      { transform: 'translate(0,0)' }
    ], { duration: 180, easing: 'ease-out' });
  }

  function camZoom(fromScale, toScale, ms) {
    return tween(ms, function (u) {
      cam.style.transform = 'scale(' + lerp(fromScale, toScale, easeInOut(u)).toFixed(4) + ')';
    });
  }

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
      master.gain.value = 0.55;
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
    whoosh: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      var n = noise(0.3);
      var f = ac.createBiquadFilter();
      var g = ac.createGain();
      f.type = 'bandpass';
      f.Q.value = 1.4;
      f.frequency.setValueAtTime(350, t);
      f.frequency.exponentialRampToValueAtTime(2200, t + 0.2);
      g.gain.setValueAtTime(0.0001, t);
      g.gain.exponentialRampToValueAtTime(0.22, t + 0.16);
      g.gain.exponentialRampToValueAtTime(0.0001, t + 0.26);
      n.connect(f).connect(g).connect(master);
      n.start(t);
      n.stop(t + 0.3);
    },
    impact: function () {
      if (!ac || skipped) return;
      var t = ac.currentTime;
      burst(t, 0.07, 3200, 0.9, 0.9);
      tone('triangle', 1650, 720, t, 0.07, 0.35);
      tone('sine', 150, 60, t, 0.08, 0.55);
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

  /* ---------- Tee shot: behind-the-golfer ball flight ---------- */
  function teeAt(u) {
    var p = 1 - Math.pow(1 - u, 1.8);
    var q = Math.pow(p, 1.25);
    var z = lerp(TEE.z0, TEE.zEnd, p);
    var x0 = (TEE.ballX - TEE.cx) * TEE.z0 / TEE.f;
    var x1 = (TEE.xEnd - TEE.cx) * TEE.zEnd / TEE.f;
    /* push out right, then draw back to the target line */
    var X = lerp(x0, x1, p) + TEE.draw * p * Math.sin(Math.PI * p);
    var Y = 4 * TEE.apex * q * (1 - q);
    return {
      x: TEE.cx + TEE.f * X / z,
      y: TEE.hy + TEE.f * (TEE.camH - Y) / z,
      gy: TEE.hy + TEE.f * TEE.camH / z,
      d: Math.max(1.6, TEE.d0 * TEE.z0 / z),
      Y: Y
    };
  }

  function flyTee(ms, cutAt) {
    tee.tracer = [];
    tee.tracerAlpha = 1;
    return tween(ms * cutAt, function (u) {
      var s = teeAt(u * cutAt);
      tee.ball = { x: s.x, y: s.y, d: s.d };
      tee.tracer.push({ x: s.x, y: s.y, d: s.d });
      tee.shadow = s.Y < 6
        ? { x: s.x, y: s.gy, rx: s.d * 0.9, ry: s.d * 0.28, a: 0.4 * (1 - s.Y / 6) }
        : null;
    });
  }

  /* ---------- Map shot: top-down flight, bounce, roll, hole-out ---------- */
  function placeMapBall(gx, gy, h, alpha, scale) {
    var minD = MAP.minBallPx / geo.s;
    var d = Math.max(MAP.ballD, minD) * (1 + h / 95) * (scale == null ? 1 : scale);
    map.ball = { x: gx, y: gy - h * 0.6, d: d, a: alpha == null ? 1 : alpha };
    map.shadow = h > 0.5
      ? { x: gx + h * 0.22, y: gy + h * 0.08, rx: d * 0.62, ry: d * 0.4, a: 0.42 * Math.max(0.25, 1 - h / 160) }
      : { x: gx + 1, y: gy + d * 0.3, rx: d * 0.6, ry: d * 0.32, a: 0.45 };
  }

  function mapShot() {
    map.on = true;
    map.tracer = [];
    map.tracerAlpha = 1;
    tween(500, function (u) { map.hole = u; });

    return tween(1750, function (u) {
      var e = 1 - Math.pow(1 - u, 1.35);
      var p = bez(MAP.tee, MAP.bend, MAP.land, e);
      var h = 150 * 4 * e * (1 - e);
      placeMapBall(p.x, p.y, h);
      map.tracer.push({ x: map.ball.x, y: map.ball.y });
    }).then(function () {
      sfx.thud();
      return tween(380, function (u) {
        placeMapBall(lerp(MAP.land.x, MAP.bounce.x, u), lerp(MAP.land.y, MAP.bounce.y, u), 16 * 4 * u * (1 - u));
      });
    }).then(function () {
      tween(700, function (u) { map.tracerAlpha = 1 - u * 0.75; });
      return tween(950, function (u) {
        var e = 1 - Math.pow(1 - u, 1.6);
        placeMapBall(lerp(MAP.bounce.x, MAP.hole.x, e), lerp(MAP.bounce.y, MAP.hole.y, e), 0);
      });
    }).then(function () {
      sfx.cup();
      map.shadow = null;
      return tween(280, function (u) {
        placeMapBall(MAP.hole.x, MAP.hole.y + u * 1.5, 0, 1 - u, 1 - u * 0.55);
        map.shadow = null;
      });
    }).then(function () {
      map.ball = null;
      map.shadow = null;
      return tween(650, function (u) { map.ring = u; });
    });
  }

  /* ---------- Main sequence ---------- */
  function preload() {
    Object.keys(imgs).forEach(function (k) {
      var img = imgs[k];
      img.loading = 'eager';
      if (!img.getAttribute('src')) img.src = img.getAttribute('data-src');
    });
  }

  function ready() {
    preload();
    var list = Object.keys(imgs).map(function (k) {
      var img = imgs[k];
      if (img.complete && img.naturalWidth) return Promise.resolve();
      return new Promise(function (res) {
        img.addEventListener('load', res, { once: true });
        img.addEventListener('error', res, { once: true });
      });
    });
    return Promise.race([Promise.all(list), wait(6000)]).then(function () {
      return imgs.address.decode ? imgs.address.decode().catch(function () {}) : null;
    });
  }

  function hideOverlay() {
    golf.classList.add('is-out');
    setTimeout(function () {
      golf.hidden = true;
      golf.setAttribute('aria-hidden', 'true');
      skipBtn.tabIndex = -1;
    }, 750);
  }

  function finish() {
    if (opened) return;
    openGates(false);
    if (!golf.hidden) hideOverlay();
    setTimeout(function () {
      running = false;
      cancelAnimationFrame(raf);
      map.on = false;
      renderMap();
      stage.classList.remove('is-golfing');
    }, 900);
  }

  function skip() {
    if (skipped || opened) return;
    skipped = true;
    finish();
  }

  function play() {
    if (running || opened) return;
    running = true;
    stage.classList.add('is-golfing');
    enterBtn.classList.add('is-loading');
    initAudio();

    ready().then(function () {
      enterBtn.classList.remove('is-loading');
      golf.hidden = false;
      golf.setAttribute('aria-hidden', 'false');
      skipBtn.tabIndex = 0;
      layout();
      var src = imgs.address.currentSrc || imgs.address.src;
      if (src) backdrop.style.backgroundImage = 'url("' + src + '")';
      camOrigin(TEE.ballX - 60, TEE.ballY - 220);
      imgs.address.classList.add('is-shown');
      raf = requestAnimationFrame(render);
      requestAnimationFrame(function () { golf.classList.add('is-on'); });

      camZoom(1, 1.035, 1900);
      return wait(900);
    }).then(function () {
      if (skipped) return;
      return crossfade('address', 'backswing', 460, 1.6);
    }).then(function () {
      if (skipped) return;
      sfx.whoosh();
      return wait(200);
    }).then(function () {
      if (skipped) return;
      var down = crossfade('backswing', 'finish', 120, 3);
      return wait(45).then(function () {
        sfx.impact();
        cameraShake();
        tee.streak = 1;
        tween(260, function (u) { tee.streak = 1 - u; });
        camOrigin(TEE.xEnd, 300);
        camZoom(1.035, 1.08, 1800);
        return Promise.all([down, flyTee(2800, 0.55)]);
      });
    }).then(function () {
      if (skipped) return;
      /* cut back to the gate: the same shot now tracks over the course map */
      tween(400, function (u) { tee.tracerAlpha = 1 - u; });
      hideOverlay();
      return mapShot();
    }).then(function () {
      if (skipped) return;
      return wait(250);
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
  skipBtn.addEventListener('click', skip);

  document.addEventListener('keydown', function (e) {
    if (opened) return;
    if (e.key === 'Escape' && running) {
      skip();
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
    if (running) layout();
  });

  function warm() {
    if ('requestIdleCallback' in window) requestIdleCallback(preload, { timeout: 4000 });
    else setTimeout(preload, 1500);
  }
  if (document.readyState === 'complete') warm();
  else window.addEventListener('load', warm, { once: true });
})();
