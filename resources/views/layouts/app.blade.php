<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.seo')

    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon.svg') }}?v=mc3" type="image/svg+xml">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-32x32.png') }}?v=mc3" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ theme_asset('assets/img/logos/favicon-16x16.png') }}?v=mc3" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="{{ theme_asset('assets/img/logos/favicon.ico') }}?v=mc3" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc3">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ theme_asset('assets/img/logos/apple-touch-icon-57x57.png') }}?v=mc3">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ theme_asset('assets/img/logos/apple-touch-icon-72x72.png') }}?v=mc3">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ theme_asset('assets/img/logos/apple-touch-icon-114x114.png') }}?v=mc3">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ theme_asset('assets/img/logos/apple-touch-icon-180x180.png') }}?v=mc3">
    <link rel="manifest" href="{{ theme_asset('assets/img/logos/site.webmanifest') }}?v=mc3">

    {{-- DNS / connection hints for first paint --}}
    <link rel="preconnect" href="{{ rtrim(config('seo.url', config('app.url')), '/') }}" crossorigin>
    <link rel="dns-prefetch" href="//www.google.com">
    <link rel="dns-prefetch" href="//maps.gstatic.com">

    {{-- Preload critical CSS (mobile-first render path) --}}
    <link rel="preload" href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260823perf1" as="style">
    <link rel="preload" href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260823faq1" as="style">

    <link rel="stylesheet" href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260823perf1">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/plugins.css') }}?v=20260823perf1">
    {{-- Non-critical CSS: load async to cut render-blocking --}}
    <link rel="stylesheet" href="{{ theme_asset('assets/css/search.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/base.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/scrollbar.css') }}?v=20260823perf1" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ theme_asset('assets/css/search.css') }}?v=20260823perf1">
        <link rel="stylesheet" href="{{ theme_asset('assets/css/base.css') }}?v=20260823perf1">
        <link rel="stylesheet" href="{{ theme_asset('assets/css/scrollbar.css') }}?v=20260823perf1">
    </noscript>
    <link href="{{ theme_asset('assets/css/styles.min.css') }}?v=20260823faq1" rel="stylesheet">
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

    {{-- jQuery must stay sync (theme depends on it). Everything else deferred. --}}
    <script src="{{ theme_asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/popper.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/jquery.scrollbar.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/core.min.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/search.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/main.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/plugins.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/scripts.js') }}" defer></script>
    <script src="{{ theme_asset('assets/js/nav-mobile.js') }}?v=20260823perf1" defer></script>
    <script src="{{ theme_asset('assets/js/contact-form.js') }}?v=20260823faq1" defer></script>
    <script src="{{ theme_asset('assets/js/quote-modal.js') }}?v=20260823captcha2" defer></script>
    <script src="{{ theme_asset('assets/js/perf-lazy.js') }}?v=20260823perf1" defer></script>
    <script src="{{ theme_asset('assets/js/web-vitals-report.js') }}?v=20260823perf1" defer></script>
    @if(recaptcha_enabled())
    @if(recaptcha_use_enterprise())
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    @else
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
    @endif
    @stack('scripts')
</body>
</html>
