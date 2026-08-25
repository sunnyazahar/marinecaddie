<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.seo')

    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon.svg') }}?v=mc6" type="image/svg+xml">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-32x32.png') }}?v=mc6" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-16x16.png') }}?v=mc6" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="{{ theme_asset('assets/img/logos/favicon.ico') }}?v=mc6" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc6">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ theme_asset('assets/img/logos/apple-touch-icon-57x57.png') }}?v=mc6">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ theme_asset('assets/img/logos/apple-touch-icon-72x72.png') }}?v=mc6">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ theme_asset('assets/img/logos/apple-touch-icon-114x114.png') }}?v=mc6">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc6">
    <link rel="manifest" href="{{ theme_asset('assets/img/logos/site.webmanifest') }}?v=mc6">

    @unless(in_array(request()->getHost(), ['localhost', '127.0.0.1', '::1'], true))
    <link rel="preconnect" href="{{ rtrim(config('seo.url', config('app.url')), '/') }}" crossorigin>
    @endunless
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

    <link rel="preload" href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260823perf1" as="style">
    <link rel="preload" href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260824cls1" as="style">
    <link rel="preload" href="{{ theme_asset('assets/css/plugins.css') }}?v=20260823perf1" as="style">
    @if(request()->routeIs('home'))
    <link rel="preload" href="{{ theme_webp('assets/img/banner/video-cover.jpg') }}" as="image" type="image/webp" fetchpriority="high">
    @endif

    <link rel="stylesheet" href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260823perf1">
    {{-- plugins.css must stay sync: Owl/Bootstrap layout; async caused CLS ~0.65 --}}
    <link rel="stylesheet" href="{{ theme_asset('assets/css/plugins.css') }}?v=20260823perf1">
    <link href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260824cls1" rel="stylesheet">

    <link rel="stylesheet" href="{{ theme_asset('assets/css/search.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/base.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/scrollbar.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ theme_asset('assets/css/search.css') }}?v=20260823perf1">
        <link rel="stylesheet" href="{{ theme_asset('assets/css/base.css') }}?v=20260823perf1">
        <link rel="stylesheet" href="{{ theme_asset('assets/css/scrollbar.css') }}?v=20260823perf1">
    </noscript>
    @stack('styles')
</head>
<body>
    <div class="main-wrapper">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>

    @include('partials.quote-modal')

    <div class="scroll-top-percentage"><span id="scroll-value">0%</span></div>

    {{-- Interactive critical path --}}
    <script src="{{ theme_asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/popper.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/core.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/main.js') }}?v=20260824console1" defer></script>
    <script src="{{ theme_asset('assets/js/scripts.js') }}?v=20260824perf2" defer></script>
    <script src="{{ theme_asset('assets/js/nav-mobile.js') }}?v=20260823perf1" defer></script>
    <script src="{{ theme_asset('assets/js/contact-form.js') }}?v=20260823faq1" defer></script>
    <script src="{{ theme_asset('assets/js/quote-modal.js') }}?v=20260824perf2" defer></script>
    <script src="{{ theme_asset('assets/js/perf-lazy.js') }}?v=20260824perf2" defer></script>

    {{-- After window load — lower TBT without breaking CTAs --}}
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/jquery.scrollbar.min.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/search.js') }}"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/plugins.js') }}?v=20260824console1"></script>
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/web-vitals-report.js') }}?v=20260824console1"></script>
    @if(recaptcha_should_load())
    <meta name="mc-recaptcha" content="1" data-mode="{{ recaptcha_use_enterprise() ? 'enterprise' : 'classic' }}">
    <script type="text/plain" data-mc-defer-src="{{ theme_asset('assets/js/recaptcha-lazy.js') }}?v=20260824perf2"></script>
    @endif
    <script src="{{ theme_asset('assets/js/defer-bundle.js') }}?v=20260824perf3" defer></script>

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
          requestIdleCallback(boot, { timeout: 4000 });
        } else {
          setTimeout(boot, 1500);
        }
      });
    </script>
    @stack('scripts')
</body>
</html>
