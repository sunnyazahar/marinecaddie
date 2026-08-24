<!-- HEADER
        ================================================== -->
        <style>
            /* Tight white plate + wider logo; no shadow / header border */
            header .navbar-default,
            header .navbar-default.border-bottom,
            header .navbar-default.border-color-light-white {
                border: 0 !important;
                border-bottom: 0 !important;
                box-shadow: none !important;
            }
            header .navbar-brand.logochange {
                background: #ffffff !important;
                box-shadow: none !important;
                filter: none !important;
                padding: 6px 10px !important;
                border-radius: 0 0 8px 0 !important;
                line-height: 0 !important;
                display: inline-flex !important;
                align-items: center !important;
                overflow: visible !important;
                max-width: none !important;
                width: auto !important;
            }
            header .navbar-brand.logochange img#logo.site-logo {
                width: auto !important;
                height: 42px !important;
                max-height: 42px !important;
                max-width: none !important;
                object-fit: contain !important;
                object-position: left center !important;
                background: transparent !important;
                display: block !important;
                box-shadow: none !important;
                filter: none !important;
            }
            header .navbar-header-custom {
                padding: 0 !important;
                background: transparent !important;
                box-shadow: none !important;
                overflow: visible !important;
            }
            @media (max-width: 991.98px) {
                header.header-style1,
                header.header-style1.scrollHeader,
                header .navbar-default,
                header.scrollHeader .navbar-default,
                header .navbar-header-custom,
                header .menu_area,
                header .navbar-collapse,
                header .navbar-collapse.show {
                    background: #ffffff !important;
                    background-color: #ffffff !important;
                    background-image: none !important;
                }
                header .navbar-brand.logochange {
                    background: #ffffff !important;
                    border-radius: 0 !important;
                    padding: 4px 8px !important;
                    max-width: none !important;
                }
                header .navbar-brand.logochange img#logo.site-logo {
                    width: auto !important;
                    height: 40px !important;
                    max-height: 40px !important;
                    max-width: none !important;
                }
                /* Align hamburger with logo on one row */
                header .menu_area > .navbar {
                    display: flex !important;
                    flex-wrap: wrap;
                    align-items: center !important;
                    justify-content: flex-start;
                    position: relative !important;
                    min-height: 58px;
                    padding-right: 52px !important;
                    gap: 0;
                }
                header .navbar-header-custom {
                    display: flex !important;
                    align-items: center !important;
                    flex: 1 1 auto;
                    min-width: 0;
                    padding: 4px 0 !important;
                    max-width: calc(100% - 8px);
                }
                /* Desktop-only attr-nav still reserves space via theme margin — hide it on mobile */
                header .attr-nav {
                    display: none !important;
                }
                header .navbar-toggler,
                header .navbar-toggler.bg-primary {
                    position: absolute !important;
                    top: 50% !important;
                    right: 0 !important;
                    left: auto !important;
                    transform: translateY(-50%);
                    margin: 0 !important;
                    align-self: center !important;
                    width: 42px !important;
                    height: 42px !important;
                    min-width: 42px;
                    flex: 0 0 42px;
                    border-radius: 4px !important;
                    background: #F7941D !important;
                    z-index: 20;
                }
                header .navbar-toggler:before {
                    top: 50% !important;
                    right: 11px !important;
                    width: 18px !important;
                    margin-top: -1px;
                }
                header .navbar-toggler:after {
                    top: 50% !important;
                    right: 11px !important;
                    width: 18px !important;
                    height: 14px !important;
                    margin-top: -7px;
                    border-top-width: 2px !important;
                    border-bottom-width: 2px !important;
                }
                header .navbar-toggler.menu-opened:before,
                header .navbar-toggler.menu-opened:after {
                    top: 50% !important;
                    margin-top: -1px;
                    height: 2px !important;
                    width: 18px !important;
                }
            }
            @media (min-width: 576px) {
                header .navbar-brand.logochange {
                    padding: 6px 12px !important;
                }
                header .navbar-brand.logochange img#logo.site-logo {
                    height: 48px !important;
                    max-height: 48px !important;
                    width: auto !important;
                    max-width: none !important;
                }
            }
            @media (min-width: 992px) {
                header .navbar-header-custom {
                    flex: 0 0 auto !important;
                    min-width: auto !important;
                }
                header .navbar-brand.logochange {
                    padding: 6px 12px !important;
                    border-radius: 0 0 8px 0 !important;
                }
                header .navbar-brand.logochange img#logo.site-logo {
                    height: 54px !important;
                    max-height: 54px !important;
                    width: auto !important;
                    max-width: none !important;
                }
            }
            @media (min-width: 1200px) {
                header .navbar-brand.logochange img#logo.site-logo {
                    height: 58px !important;
                    max-height: 58px !important;
                }
            }
            /* Footer logo stays transparent on dark footer */
            .footer-logo img,
            footer img[src*="footer-light-logo"],
            footer img[src*="logo"] {
                background: transparent !important;
                box-shadow: none !important;
            }
        </style>
        <header class="header-style1 menu_area-light @yield('header_class', 'scrollHeader')">

            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search bg-primary">
                    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                        <form class="search-form" action="#" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type &amp; hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0 current">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="{{ route('home') }}" class="navbar-brand logochange"><img id="logo" class="site-logo" src="{{ theme_asset('assets/img/logos/logo.svg') }}?v=logo5" data-logo="{{ theme_asset('assets/img/logos/logo.svg') }}?v=logo5" data-logo-inner="{{ theme_asset('assets/img/logos/logo-inner.svg') }}?v=logo5" alt="MarineCaddie"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-primary"></div>

                                    <!-- menu area -->
                                    @php
                                        $navHome = request()->routeIs('home');
                                        $navAbout = request()->routeIs('about');
                                        $navMission = request()->routeIs('mission-vision');
                                        $navWho = $navAbout || $navMission;
                                        $navServices = request()->routeIs('services', 'services.*');
                                        $navContact = request()->routeIs('contact');
                                    @endphp
                                    <ul class="navbar-nav ms-auto" id="nav" style="">
                                        <li class="{{ $navHome ? 'current active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="has-sub{{ $navWho ? ' current active' : '' }}">
                                            <a href="{{ route('about') }}">Who We Are</a>
                                            <ul class="sub-menu sub-menu--icons">
                                                <li class="{{ $navAbout ? 'current active' : '' }}">
                                                    <a href="{{ route('about') }}">
                                                        <span class="nav-svc-icon" aria-hidden="true">
                                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/><path d="M9 10h.01"/><path d="M15 10h.01"/><path d="M9 14h.01"/><path d="M15 14h.01"/></svg>
                                                        </span>
                                                        <span class="nav-svc-label">About Us</span>
                                                    </a>
                                                </li>
                                                <li class="{{ $navMission ? 'current active' : '' }}">
                                                    <a href="{{ route('mission-vision') }}">
                                                        <span class="nav-svc-icon" aria-hidden="true">
                                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m16 8-2.5 6.5L7 17l2.5-6.5L16 8z"/><circle cx="12" cy="12" r="1.5"/></svg>
                                                        </span>
                                                        <span class="nav-svc-label">Our Mission &amp; Vision</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-sub has-mega{{ $navServices ? ' current active' : '' }}">
                                            <a href="{{ route('services') }}">Our Services</a>
                                            @php
                                                $navServicesConfig = config('company.services', []);
                                                $navCurrentSlug = request()->routeIs('services.show') ? request()->route('slug') : null;
                                            @endphp
                                            <ul class="sub-menu sub-menu--mega">
                                                @foreach($navServicesConfig as $svcKey => $svc)
                                                    @php
                                                        $catSlug = $svc['slug'] ?? null;
                                                        $catHref = $catSlug
                                                            ? route('services.show', $catSlug)
                                                            : route('services');
                                                        $itemSlugs = collect($svc['items'] ?? [])->map(function ($item) {
                                                            return is_array($item) ? ($item['slug'] ?? null) : null;
                                                        })->filter()->values()->all();
                                                        $catActive = $navCurrentSlug && (in_array($navCurrentSlug, $itemSlugs, true) || $navCurrentSlug === $catSlug);
                                                    @endphp
                                                    <li class="nav-mega-col{{ $catActive ? ' current active' : '' }}">
                                                        <a href="{{ $catHref }}" class="nav-mega-col__title">
                                                            @include('partials.nav-service-icon', ['name' => $svcKey, 'size' => 'md'])
                                                            <span class="nav-mega-col__num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                                            <span class="nav-mega-col__title-text">{{ $svc['title'] }}</span>
                                                        </a>
                                                        @foreach(($svc['items'] ?? []) as $item)
                                                            @php
                                                                $itemLabel = is_array($item) ? ($item['label'] ?? '') : $item;
                                                                $itemSlug = is_array($item) ? ($item['slug'] ?? null) : null;
                                                                $itemHref = $itemSlug
                                                                    ? route('services.show', $itemSlug)
                                                                    : route('services');
                                                                $itemActive = $navCurrentSlug && $itemSlug && $navCurrentSlug === $itemSlug;
                                                            @endphp
                                                            <a href="{{ $itemHref }}" class="nav-mega-col__item{{ $itemActive ? ' is-active' : '' }}">
                                                                <span class="nav-mega-col__label">{{ $itemLabel }}</span>
                                                            </a>
                                                        @endforeach
                                                        <a href="{{ $catHref }}" class="nav-mega-col__more">Explore {{ $svc['title'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="js-nav-why" data-nav-hash="why-choose-us"><a href="{{ route('about') }}#why-choose-us">Why MarineCaddie ?</a></li>
                                        <li class="{{ $navContact ? 'current active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                        <li class="nav-mobile-ctas d-xl-none">
                                            <div class="header-attr-actions header-attr-actions--mobile">
                                                <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01 sm white-hover" data-open-quote="quote">Get Quote</a>
                                                <a href="https://portal.marinecaddie.com/" class="butn-style01 sm header-mycaddie" aria-label="My Caddie login" target="_blank" rel="noopener noreferrer">
                                                    <i class="fas fa-user" aria-hidden="true"></i>
                                                    <span>myCADDIE</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul class="header-attr-actions">
                                            <li class="d-none d-xl-inline-block">
                                                <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01 sm white-hover" data-open-quote="quote">Get Quote</a>
                                            </li>
                                            <li class="d-none d-xl-inline-block">
                                                <a href="https://portal.marinecaddie.com/" class="butn-style01 sm header-mycaddie" aria-label="My Caddie login" target="_blank" rel="noopener noreferrer">
                                                    <i class="fas fa-user" aria-hidden="true"></i>
                                                    <span>myCADDIE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <script>
            (function () {
                var why = document.querySelector('#nav .js-nav-why');
                if (!why) return;
                var hash = (why.getAttribute('data-nav-hash') || 'why-choose-us').replace(/^#/, '');
                function syncWhyNav() {
                    var onWhy = window.location.hash === '#' + hash;
                    why.classList.toggle('current', onWhy);
                    why.classList.toggle('active', onWhy);
                }
                syncWhyNav();
                window.addEventListener('hashchange', syncWhyNav);
            })();
        </script>