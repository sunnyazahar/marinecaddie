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

    <link rel="stylesheet" href="{{ theme_asset('assets/css/fonts-local.css') }}?v=20260811spaceg">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('assets/css/scrollbar.css') }}">
    <link href="{{ theme_asset('assets/css/styles.css') }}?v=20260811mappinnavy1" rel="stylesheet">
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

    <script src="{{ theme_asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/core.min.js') }}"></script>
    <script src="{{ theme_asset('assets/js/search.js') }}"></script>
    <script src="{{ theme_asset('assets/js/main.js') }}"></script>
    <script src="{{ theme_asset('assets/js/plugins.js') }}"></script>
    <script src="{{ theme_asset('assets/js/scripts.js') }}"></script>
    <script src="{{ theme_asset('assets/js/quote-modal.js') }}?v=20260811quote2"></script>
    @stack('scripts')
</body>
</html>
