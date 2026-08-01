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
                padding: 4px 8px !important;
                border-radius: 0 0 6px 0 !important;
                line-height: 0 !important;
                display: inline-flex !important;
                align-items: center !important;
                overflow: visible !important;
            }
            header .navbar-brand.logochange img#logo.site-logo {
                width: 210px !important;
                max-width: 72vw !important;
                height: auto !important;
                max-height: none !important;
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
            }
            @media (min-width: 576px) {
                header .navbar-brand.logochange {
                    padding: 5px 10px !important;
                }
                header .navbar-brand.logochange img#logo.site-logo {
                    width: 250px !important;
                    max-width: 250px !important;
                    max-height: none !important;
                }
            }
            @media (min-width: 992px) {
                header .navbar-brand.logochange {
                    padding: 6px 12px !important;
                    border-radius: 0 0 8px 0 !important;
                }
                header .navbar-brand.logochange img#logo.site-logo {
                    width: 300px !important;
                    max-width: 300px !important;
                    max-height: none !important;
                }
            }
            @media (min-width: 1200px) {
                header .navbar-brand.logochange img#logo.site-logo {
                    width: 340px !important;
                    max-width: 340px !important;
                    max-height: none !important;
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
                                        <a href="{{ route('home') }}" class="navbar-brand logochange"><img id="logo" class="site-logo" src="{{ theme_asset('assets/img/logos/logo.svg') }}?v=nobg4" data-logo="{{ theme_asset('assets/img/logos/logo.svg') }}?v=nobg4" data-logo-inner="{{ theme_asset('assets/img/logos/logo-inner.svg') }}?v=nobg4" alt="MarineCaddie"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-primary"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="">
                                        <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="has-sub"><span class="submenu-button"></span>
                                            <a href="{{ route('home') }}#">Who We Are</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('about') }}">Our Mission & Vision</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li class="has-sub"><span class="submenu-button"></span><a href="{{ route('home') }}#">Our Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('services.air-freight') }}">Air Freight</a></li>
                                                <li><a href="{{ route('services.road-freight') }}">Road Freight</a></li>
                                                <li><a href="{{ route('services.ocean-freight') }}">Ocean Freight</a></li>
                                                <li><a href="{{ route('services.warehousing') }}">Warehousing</a></li>
                                                <li><a href="{{ route('services.logistic-solution') }}">Logistic Solution</a></li>
                                                <li><a href="{{ route('services.rail-freight') }}">Rail Freight</a></li>
                                            </ul>
                                        </li>
                                       
                                       
                                        <li><a href="#">Network</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <li class="d-none d-xl-inline-block"><a href="{{ route('contact') }}" class="butn-style01 sm white-hover">Get Quote</a></li>
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