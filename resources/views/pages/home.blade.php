@extends('layouts.app')

@section('title', 'Maritime Logistics & Freight Forwarding')
@section('meta_title', 'MarineCaddie | Maritime Logistics & Ship Spares')
@section('meta_description', 'Time-critical ship spare logistics, customs clearance, vessel husbandry, freight forwarding and special projects at global ports.')
@section('meta_keywords', 'MarineCaddie, maritime logistics, ship spare logistics, freight forwarding, customs clearance, vessel husbandry, port husbandry, special projects, door to deck, Dubai')
@section('schema_type', 'WebPage')
@section('og_image_alt', 'MarineCaddie maritime logistics and ship spare services')
@section('header_class', 'scrollHeader')

@section('content')
<!-- BANNER
        ================================================== -->
        <section class="p-0 top-position1 full-screen secondary-overlay video-banner" data-overlay-dark="8" style="background-image: url({{ theme_asset('assets/img/banner/video-cover.jpg') }});">
            <div class="banner-video" aria-hidden="true">
                <video autoplay muted loop playsinline preload="auto" poster="{{ theme_asset('assets/img/banner/video-cover.jpg') }}">
                    <source src="{{ theme_asset('assets/video/aerial top view of cargo ship in import export bus FPHBK69.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="container d-flex flex-column pt-5 pb-2 py-sm-8 py-md-0 position-relative z-index-9">
                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-lg-11 col-xl-10 col-xxl-8 text-center py-5">
                        <div class="text-center">
                            <h1 class="display-1 font-weight-800 lh-1 mb-0 text-white ls-minus-2px">{{ config('company.headline') }}</h1>
                            <div class="hero-motto-ticker" aria-label="{{ config('company.motto') }}">
                                <div class="hero-motto-ticker__track">
                                    <span class="hero-motto-ticker__item">{{ config('company.motto') }}</span>
                                    <span class="hero-motto-ticker__item" aria-hidden="true">{{ config('company.motto') }}</span>
                                    <span class="hero-motto-ticker__item" aria-hidden="true">{{ config('company.motto') }}</span>
                                    <span class="hero-motto-ticker__item" aria-hidden="true">{{ config('company.motto') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE
        ================================================== -->
        <section class="our-services-home home-section" id="our-services">
            <div class="container">
                <div class="row align-items-end mb-1-9 mb-lg-2-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Services</span>
                        <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px text-secondary">{{ config('company.tagline') }}</h2>
                        <p class="lead mb-0 w-lg-90">{{ config('company.motto') }} Four core capabilities from our company profile—built around vessel urgency and port realities.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('services') }}" class="butn-style01">View All Services</a>
                    </div>
                </div>
                @include('partials.services-categories', ['variant' => 'home'])
            </div>
        </section>

        <!-- SHIP SPARE LOGISTICS
        ================================================== -->
        <section class="ship-spare-showcase position-relative overflow-hidden home-section" id="ship-spares">
            <div class="ship-spare-showcase__glow" aria-hidden="true"></div>
            <div class="container position-relative">
                <div class="row align-items-end mb-1-9 mb-lg-2-9">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Ship Spare Logistics</span>
                        <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px text-secondary">Door-to-deck. On time. 24/7.</h2>
                        <p class="lead mb-0 w-lg-90">{{ config('company.motto') }} We move time-critical ship spares from supplier to vessel with full documentation, customs, carrier, and last-mile onboard delivery.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('services.show', 'ship-spares-logistics') }}" class="butn-style01">Explore Ship Spares</a>
                    </div>
                </div>

                <div class="row g-4 g-xl-5 mb-2-5 mb-lg-3">
                    @foreach(config('company.ship_spare_logistics') as $index => $capability)
                    <div class="col-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay="{{ 100 + ($index * 50) }}ms">
                        <div class="ship-spare-capability h-100">
                            <span class="ship-spare-capability__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3 class="ship-spare-capability__title">{{ $capability }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="ship-spare-flow wow fadeInUp" data-wow-delay="200ms">
                    <div class="ship-spare-flow__label text-uppercase small letter-spacing-4 font-weight-700 text-primary mb-3">End-to-end logistics flow</div>
                    <div class="ship-spare-flow__track" role="list">
                        @foreach(config('company.ship_spare_flow') as $step)
                        <div class="ship-spare-flow__step" role="listitem">
                            <div class="ship-spare-flow__icon" aria-hidden="true">
                                @include('partials.ship-spare-icons', ['icon' => $step['icon']])
                            </div>
                            <div class="ship-spare-flow__name">{{ $step['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- PORT HUSBANDRY
        ================================================== -->
        <section class="port-husbandry-showcase home-section" id="port-husbandry">
            <div class="container">
                <div class="row align-items-end mb-1-9 mb-lg-2-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Port Husbandry Services</span>
                        <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px text-secondary">Vessel support in India, Sri Lanka, Indonesia &amp; Singapore</h2>
                        <p class="lead mb-0 w-lg-90">{{ config('company.motto') }} Practical port agency and husbandry coordination so every call stays efficient—from crew change to dry dock assistance.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('services.show', 'vessel-husbandry') }}" class="butn-style01">Explore Port Support</a>
                    </div>
                </div>

                <div class="port-husbandry-regions wow fadeInUp" data-wow-delay="150ms">
                    @foreach(['India', 'Sri Lanka', 'Indonesia', 'Singapore'] as $region)
                    <div class="port-husbandry-regions__item">
                        <span class="port-husbandry-regions__marker" aria-hidden="true"></span>
                        <span class="port-husbandry-regions__name">{{ $region }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="row g-3 g-lg-4 mt-1-6">
                    @foreach(config('company.port_husbandry') as $index => $service)
                    <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="{{ 100 + ($index * 40) }}ms">
                        <div class="port-husbandry-service">
                            <span class="port-husbandry-service__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3 class="port-husbandry-service__title">{{ $service }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section class="about-style01 home-section home-section--about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 mt-1-9">
                        <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">About MarineCaddie</span>
                            <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">{{ config('company.tagline') }}</h2>
                        </div>
                        <p class="mb-4 wow fadeInUp" data-wow-delay="150ms">{{ config('company.who_we_are') }}</p>
                        <div class="d-flex mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                            <div class="flex-shrink-0 me-4">
                                <img src="{{ theme_asset('assets/img/icons/icon-01.png') }}" alt="" title="Ship spare logistics" class="w-65px">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mb-2 h5">Ship Spare Logistics</h3>
                                <p class="mb-0">24/7 time-critical shipments with hand carry, door-to-deck delivery, customs clearance, and last-mile coordination.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-2-5 wow fadeInUp" data-wow-delay="250ms">
                            <div class="flex-shrink-0 me-4">
                                <img src="{{ theme_asset('assets/img/icons/icon-02.png') }}" alt="" title="Global port network" class="w-65px">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mb-2 h5">Global Port Network</h3>
                                <p class="mb-0">End-to-end maritime support across {{ config('company.presence') }}.</p>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="butn-style01 wow fadeInUp" data-wow-delay="300ms">About Us</a>
                    </div>
                    <div class="col-xl-7 mt-1-9">
                        <div class="ps-xl-4">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 text-center text-md-start wow fadeInUp" data-wow-delay="100ms">
                                    <div class="about-circle">
                                        <div class="image-hover">
                                            <img src="{{ theme_asset('assets/img/content/logistics-scaled.webp') }}" alt="Marine logistics and cargo operations" title="Marine logistics and cargo operations" class="rounded">
                                        </div>
                                        <div class="about-text rotating d-none d-md-block">
                                            <svg viewBox="0 0 200 200">
                                                <path id="textPath" d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0" transform="translate(100,100)" fill="none" stroke-width="0"></path>
                                                <g font-size="20.8px">
                                                    <text text-anchor="start">
                                                        <textpath class="coloring" xlink:href="#textPath" startOffset="0%"> smart caddies * smarter logistics * MarineCaddie * </textpath>
                                                    </text>
                                                </g>
                                            </svg>
                                            <div class="about-icon"><img src="{{ theme_asset('assets/img/logos/favicon.svg') }}?v=mc3" alt="MarineCaddie" title="MarineCaddie" class="w-60px" width="60" height="60"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY-CHOOSE-US
        ================================================== -->
        <section class="home-section home-section--why bg-light">
            <div class="container">
                <div class="row mt-n2-9 align-items-center">
                    <div class="col-lg-6 mt-2-9">
                        <div class="pe-lg-1-9 pe-xxl-12">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Why Choose Us.</span>
                                <h2 class="display-4 mb-0 lh-1" style="color: #fb8845; font-weight: 700; letter-spacing: 0.06em;">{{ config('company.motto') }}</h2>
                            </div>
                            <p class="mb-1-9 wow fadeInUp" data-wow-delay="150ms">{{ config('company.who_we_are') }} We combine responsive 24/7 coordination, global reach, operational focus, IT systems, cost-effective planning, and a customer-first approach on every vessel call.</p>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-08.jpg') }}" alt="MarineCaddie operations team" title="MarineCaddie operations team" class="rounded-circle border border-width-4 border-white shadow">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-09.jpg') }}" alt="MarineCaddie team member" title="MarineCaddie team member" class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                                <p class="text-secondary font-weight-600 text-decoration-underline mb-0">Trusted by <strong>vessel operators worldwide.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="250ms">
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-03.png') }}" alt="" title="Responsive support" class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">{{ config('company.why_choose_us.0.title') }}</h3>
                                        <p class="mb-0">{{ config('company.why_choose_us.0.text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-04.png') }}" alt="" title="Global reach" class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">{{ config('company.why_choose_us.1.title') }}</h3>
                                        <p class="mb-0">{{ config('company.why_choose_us.1.text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-05.png') }}" alt="" title="Operational focus" class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 pt-1-6">
                                        <h3 class="h4">{{ config('company.why_choose_us.2.title') }}</h3>
                                        <p class="mb-0">{{ config('company.why_choose_us.2.text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COUNTER
        ================================================== -->
        <section class="pt-0 pb-0 counter-style01 home-section home-section--counter">
            <div class="container">
                <div class="row g-0 wow fadeInUp" data-wow-delay="100ms">
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 bg-primary border-top border-primary">
                            <div class="h4 text-white">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="35"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>k
                            </div>
                            <p class="d-inline-block text-center text-white">Shipments Handled</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-lg-end border-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="25"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                            </div>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-sm-end border-lg-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="89"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                            </div>
                            <p>Network Partners</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-sm-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="98"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                            </div>
                            <p>On-Time Delivery Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO
        ================================================== -->
        <section class="bg-secondary portfolio-style02 pb-0 pt-0 overflow-visible home-section home-section--process" id="process">
            <div class="container pt-2-9 pb-1-9">
                <div class="row align-items-end mb-1-9">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Process</span>
                        <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px text-white">From enquiry to onboard delivery</h2>
                        <p class="lead text-white opacity9 mb-0 w-lg-90">See how MarineCaddie moves ship spares, freight, special projects, and hub operations with schedule-first coordination.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('how-we-work') }}" class="butn-style01 white-hover">How We Work</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-sm-0">
                <div class="row g-0 portfolio-gallery wow fadeInUp" data-wow-delay="200ms">
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Ship Spares Air&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" alt="Ship spares air logistics" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Ship Spares Air</a></h3>
                                <p class="text-white opacity7">Time-critical airlift of vessel spares—hand carry, customs, and door-to-deck delivery coordinated 24/7.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Ocean Freight&lt;a/&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" alt="Ocean freight logistics" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Ocean Freight</a></h3>
                                <p class="text-white opacity7">Maritime freight programs balancing cost, schedule integrity, and customs-ready documentation across global ports.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Special Projects&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" alt="Special projects cargo handling" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Special Projects</a></h3>
                                <p class="text-white opacity7">OOG, dangerous goods, heavy lift, break bulk, and project cargo handled with strict local coordination.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Hub &amp; Warehousing&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" alt="Hub and warehousing operations" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Hub &amp; Warehousing</a></h3>
                                <p class="text-white opacity7">Hub and warehouse nodes supporting stock management, consolidation, and last-mile vessel delivery.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    

<!-- ANIMATION-LINE
        ================================================== -->
        <section class="pb-1-9 pb-sm-2-9 pt-2 home-section home-section--ticker">
            <div class="container-fluid px-0">
                <div class="scroll-section scroll-section--dynamic">
                    <div class="scroll-track pause-on-hover scroll-left scroll-speed-4">
                        <div class="scroll-group">
                            @include('partials.scroll-ticker')
                        </div>
                        <div class="scroll-group" aria-hidden="true">
                            @include('partials.scroll-ticker')
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL
        ================================================== -->
        <section class="bg-img cover-background secondary-overlay parallax home-section home-section--cta" data-overlay-dark="9" data-background="{{ theme_asset('assets/img/bg/bg-05.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/bg/bg-05.jpg') }}&quot;);">
            <div class="container">
                <div class="row align-items-center mt-n1-9">
                    <div class="col-lg-6 mt-1-9">
                        <div class="pe-xl-2-9">
                            <div class="bg-white shadow p-1-9 p-sm-2-6 ps-lg-5 rounded">
                                <h3 class="h2 mb-3">Send us message</h3>
                                <form class="contact quform" action="#" method="post" enctype="multipart/form-data" onclick="">
                                    <div class="quform-elements">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="name">Your Name <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="email">Your Email <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="phone">Contact Number</label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="quform-element form-group">
                                                    <label for="message">Message <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="quform-element">
                                                    <div class="form-group">
                                                        <div class="quform-input">
                                                            <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="quform-captcha">
                                                            <div class="quform-captcha-inner">
                                                                <img src="{{ theme_asset('assets/images/courier-new-light.png') }}" alt="Security captcha" title="Security captcha">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="quform-submit-inner">
                                                    <button class="butn-style01 border-0 md" type="submit">Send Message</button>
                                                </div>
                                                <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-1-9">
                        <div class="ps-xl-1-9">
                            <div class="mb-4">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Testimonial.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px text-white">What clients say about MarineCaddie</h2>
                            </div>
                            <div class="testimonial-carousel-two owl-carousel" data-owl="{&quot;loop&quot;:true,&quot;responsiveClass&quot;:true,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;nav&quot;:true,&quot;navText&quot;:[&quot;&lt;i class=\&quot;ti-arrow-left\&quot;&gt;&lt;/i&gt;&quot;,&quot;&lt;i class=\&quot;ti-arrow-right\&quot;&gt;&lt;/i&gt;&quot;],&quot;dots&quot;:false,&quot;center&quot;:false,&quot;smartSpeed&quot;:1500,&quot;margin&quot;:30,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1}}}">
                                <div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie took ownership of our urgent ship-spare moves. We finally have clear milestones, door-to-deck coordination, and fewer customs surprises at destination.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="Gemma Krischock" title="Gemma Krischock" width="80" height="80">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="" title="Quote">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Their operations team is responsive around the clock. Port husbandry and freight forwarding stayed aligned with our vessel schedule—practical coordination, not just bookings.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="Daniel Hester" title="Daniel Hester" width="80" height="80">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="" title="Quote">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Technical Superintendent</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Customs clearance and last-mile delivery to the ship were smooth. Online tracking and stock visibility via their portal made oversight far easier for our team ashore.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="Maria Kunze" title="Maria Kunze" width="80" height="80">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="" title="Quote">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Purchasing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection

@push('structured_data')
@php
    $homeServices = [];
    $i = 1;
    foreach (config('company.services') as $service) {
        $homeServices[] = [
            '@type' => 'ListItem',
            'position' => $i++,
            'item' => [
                '@type' => 'Service',
                'name' => $service['title'],
                'description' => $service['excerpt'] ?? '',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => config('seo.organization.name'),
                ],
                'url' => !empty($service['slug']) ? route('services.show', $service['slug']) : route('services'),
            ],
        ];
    }
@endphp
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'MarineCaddie core services',
    'itemListOrder' => 'https://schema.org/ItemListOrderAscending',
    'numberOfItems' => count($homeServices),
    'itemListElement' => $homeServices,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
