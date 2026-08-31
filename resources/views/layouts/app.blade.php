<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.seo')

    <link rel="icon" href="{{ url('/favicon.ico') }}" sizes="48x48" type="image/x-icon">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-96x96.png') }}?v=mc10" type="image/png" sizes="96x96">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-48x48.png') }}?v=mc10" type="image/png" sizes="48x48">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon.svg') }}?v=mc10" type="image/svg+xml">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-32x32.png') }}?v=mc10" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-16x16.png') }}?v=mc10" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc10">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ theme_asset('assets/img/logos/apple-touch-icon-57x57.png') }}?v=mc10">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ theme_asset('assets/img/logos/apple-touch-icon-72x72.png') }}?v=mc10">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ theme_asset('assets/img/logos/apple-touch-icon-114x114.png') }}?v=mc10">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc10">
    <link rel="manifest" href="{{ theme_asset('assets/img/logos/site.webmanifest') }}?v=mc10">

    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

    {{-- Responsive hero preloads (wrong size = wasted bandwidth + desktop CLS risk) --}}
    @if(request()->routeIs('home'))
    <link rel="preload" href="{{ theme_asset('assets/video/hero-banner-mobile.mp4') }}?v=full1080" as="video" type="video/mp4" media="(max-width: 991.98px)">
    <link rel="preload" href="{{ theme_asset('assets/video/hero-banner.mp4') }}?v=full1080" as="video" type="video/mp4" media="(min-width: 992px)">
    <link rel="preload" href="{{ theme_asset('assets/img/banner/video-cover-mobile.webp') }}?v=lcp4" as="image" type="image/webp" media="(max-width: 991.98px)" fetchpriority="high">
    <link rel="preload" href="{{ theme_webp('assets/img/banner/video-cover.jpg') }}" as="image" type="image/webp" media="(min-width: 992px)" fetchpriority="high">
    @endif
    <link rel="preload" href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260825css12" as="style">

    {{-- Inline layout-critical only (no @font-face — those 404 when inlined via ../fonts) --}}
    <style>{!! file_get_contents(public_path('assets/css/critical.css')) !!}</style>
    {{-- All theme CSS in head — delayed inject after load caused visible FOUC --}}
    <link href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260825css12" rel="stylesheet">
    <link href="{{ theme_asset('assets/css/plugins.css') }}?v=20260825css1" rel="stylesheet">
    <link href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260825css1" rel="stylesheet">
    <link href="{{ theme_asset('assets/css/search.css') }}?v=20260823perf1" rel="stylesheet">
    <link href="{{ theme_asset('assets/css/base.css') }}?v=20260823perf1" rel="stylesheet">
    <link href="{{ theme_asset('assets/css/scrollbar.css') }}?v=20260823perf1" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div class="main-wrapper">
        @include('partials.header')
        <main id="main-content">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>

    @include('partials.quote-modal')

    <div class="scroll-top-percentage"><span id="scroll-value">0%</span></div>

    {{-- Early: jquery + tiny helpers only. Bootstrap/etc after load cuts mobile TBT
         without the CLS regression from deferring jquery itself. --}}
    <script src="{{ theme_asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/nav-mobile.js') }}?v=20260823perf1" defer></script>
    <script src="{{ theme_asset('assets/js/quote-modal.js') }}?v=20260824perf2" defer></script>
    <script src="{{ theme_asset('assets/js/perf-lazy.js') }}?v=20260825video1" defer></script>

    {{-- After window load — bootstrap stack + theme (was ~110KB early parse on mobile) --}}
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/popper.min.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/jquery.scrollbar.min.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/scripts.js') }}?v=20260825a11y1"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/contact-form.js') }}?v=20260823faq1"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/core.min.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/main.js') }}?v=20260825cls10"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/search.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/plugins.js') }}?v=20260824console1"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/web-vitals-report.js') }}?v=20260824console1"></script>
    @if(recaptcha_should_load())
    <meta name="mc-recaptcha" content="1" data-mode="{{ recaptcha_use_enterprise() ? 'enterprise' : 'classic' }}">
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/recaptcha-lazy.js') }}?v=20260824perf2"></script>
    @endif
    <script src="{{ theme_asset('assets/js/defer-bundle.js') }}?v=20260825cls10" defer></script>

    <script>
      window.addEventListener('load', function () {
        var boot = function () {
          var s = document.createElement('script');
          s.src = 'https://www.googletagmanager.com/gtag/js?id=G-XQKP2ZD4ZN';
          s.async = true;
          s.onload = function () {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            window.gtag = gtag;
            gtag('js', new Date());
            gtag('config', 'G-XQKP2ZD4ZN');
          };
          document.head.appendChild(s);
        };
        if ('requestIdleCallback' in window) {
          requestIdleCallback(boot, { timeout: 8000 });
        } else {
          setTimeout(boot, 3500);
        }
      });
    </script>
    @stack('scripts')
</body>
</html>
