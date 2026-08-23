# Technical performance & Core Web Vitals

MarineCaddie SEO/performance checklist — what is implemented in code, and what to enable on Hostinger/CDN.

## Targets (mobile first)

| Metric | Good | Watch |
|---|---|---|
| LCP | ≤ 2.5s | Hero image/video |
| INP | ≤ 200ms | Menu, quote modal |
| CLS | ≤ 0.1 | Fonts, images without size |
| TTFB | ≤ 800ms | Hostinger PHP / CDN |

Monitor in Chrome DevTools → Lighthouse (Mobile) and Search Console → Core Web Vitals.

---

## Implemented in this repo

### 1. WebP images
- Generated sibling `.webp` for JPG/PNG under `public/assets/img/` (~151 files).
- Apache serves WebP automatically when `Accept: image/webp` and file exists (`public/.htaccess`).
- Helpers: `theme_webp()`, `theme_image_sources()`.
- Partial: `resources/views/partials/responsive-img.blade.php` for `<picture>` tags.
- Banner backgrounds use `theme_webp(...)`.

Regenerate after adding images:
```bash
cd public/assets/img
find . -type f \( -iname '*.jpg' -o -iname '*.jpeg' -o -iname '*.png' \) | while read f; do
  out="${f%.*}.webp"
  [ -f "$out" ] || cwebp -q 78 -m 6 -mt "$f" -o "$out"
done
```

AVIF: optional next step with `avifenc` (smaller, slower encode). WebP covers modern mobile.

### 2. Lazy loading
- `perf-lazy.js` sets `loading="lazy"` + `decoding="async"` on content images.
- Header/logo stays eager; `fetchpriority="high"` skipped.
- Prefer `@include('partials.responsive-img', [...])` for new images.

### 3. Minified CSS
- Production stylesheet: `assets/css/styles.min.css` (layout loads this).
- Edit `styles.css`, then regenerate min:
```bash
# after CSS edits, rebuild min (or keep editing styles.min if tiny fixes)
```

### 4. Gzip / Brotli
- `mod_deflate` + `mod_brotli` rules in `public/.htaccess`.
- On Hostinger: enable **Gzip** (and Brotli if offered) in hPanel → Speed / CDN.

### 5. Browser caching + cache headers
- Static assets: `Cache-Control: public, max-age=31536000, immutable`
- HTML/PHP: no-store / must-revalidate
- Always bump `?v=` on CSS/JS when deploying (layout already uses `v=20260823perf1`).

### 6. Reduce render-blocking
- Critical: `fonts-local.css`, `plugins.css`, `styles.min.css`
- Async: `search.css`, `base.css`, `scrollbar.css` (`media="print" onload`)
- JS: jQuery sync; all other theme scripts `defer`

### 7. Core Web Vitals monitoring
- `assets/js/web-vitals-report.js` reports LCP, CLS, INP, TTFB, FCP to the browser console.
- Optional remote:
```html
<script>window.MC_WEB_VITALS_ENDPOINT = '/api/web-vitals';</script>
```
- If GA4 `gtag` is present, metrics are sent as events automatically.

### 8. Mobile-first
- Existing responsive CSS + mobile header/nav work.
- Always test Lighthouse with **Mobile** preset.

---

## Enable on Hostinger / CDN (required for full gains)

1. **CDN** — Hostinger CDN or Cloudflare in front of `www.marinecaddie.com`.
2. **Brotli/Gzip** — turn on at CDN/hPanel.
3. **HTTP/2 or HTTP/3** — usually default on Hostinger.
4. **Document root** = `public/`.
5. **OPcache** — enable PHP OPcache for faster TTFB.
6. **APP_DEBUG=false**, `APP_ENV=production`.
7. After deploy: `php artisan config:clear && php artisan view:clear && php artisan route:cache`.

---

## Reduce unused JS (next iterations)

Still loaded sitewide (theme dependency):
- `jquery` + `bootstrap` + `core.min` + `plugins.js`

Safe later wins:
- Load `search.js` only on pages with search UI.
- Load Leaflet only on Contact (already page-stacked).
- Do not load YouTube `www-player.css` (already not in layout).

---

## Quick verify

```bash
# WebP negotiation
curl -sI -H 'Accept: image/webp' https://www.marinecaddie.com/assets/img/banner/slide-01.jpg | grep -i content-type

# Cache header
curl -sI https://www.marinecaddie.com/assets/css/styles.min.css | grep -i cache-control

# Console on mobile Chrome
# Look for: [CWV] LCP … good
```

---

## Deploy reminder

Commit new `.webp` files + `.htaccess` + layout + JS helpers together, then hard-refresh / purge CDN cache.
