@extends('layouts.app')

@section('title', 'Marine Logistics & Freight Forwarding')
@section('meta_title', config('seo.home_title'))
@section('meta_description', config('seo.home_description'))
@section('schema_type', 'WebPage')
@section('og_image_alt', 'MarineCaddie ship spare logistics and marine agency services')
@section('header_class', 'scrollHeader')

@section('content')
<!-- BANNER
        ================================================== -->
        <section class="p-0 top-position1 full-screen secondary-overlay video-banner" data-overlay-dark="8" style="background-image: url({{ theme_webp('assets/img/banner/video-cover.jpg') }});">
            <div class="banner-video" aria-hidden="true">
                {{-- src injected on desktop only (perf-lazy.js) so mobile never downloads the MP4 --}}
                <video muted loop playsinline preload="none" poster="{{ theme_webp('assets/img/banner/video-cover.jpg') }}" data-mc-hero-video data-mc-hero-src="{{ theme_asset('assets/video/aerial top view of cargo ship in import export bus FPHBK69.mp4') }}"></video>
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
                                            @include('partials.responsive-img', [
                                                'path' => 'assets/img/content/marine-logistics.jpg',
                                                'alt' => 'Marine logistics and cargo operations',
                                                'title' => 'Marine logistics and cargo operations',
                                                'class' => 'rounded',
                                                'lazy' => true,
                                            ])
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
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_webp('assets/img/portfolio/ship-spares-air.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Ship Spares Air&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_webp('assets/img/portfolio/ship-spares-air.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/portfolio/ship-spares-air.jpg') }}&quot;);"><img src="{{ theme_webp('assets/img/portfolio/ship-spares-air.jpg') }}" alt="Ship spares air logistics" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Ship Spares Air</a></h3>
                                <p class="text-white opacity7">Time-critical airlift of vessel spares—hand carry, customs, and door-to-deck delivery coordinated 24/7.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_webp('assets/img/portfolio/ocean-freight.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Ocean Freight&lt;a/&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_webp('assets/img/portfolio/ocean-freight.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/portfolio/ocean-freight.jpg') }}&quot;);"><img src="{{ theme_webp('assets/img/portfolio/ocean-freight.jpg') }}" alt="Ocean freight logistics at container port" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Ocean Freight</a></h3>
                                <p class="text-white opacity7">Maritime freight programs balancing cost, schedule integrity, and customs-ready documentation across global ports.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_webp('assets/img/portfolio/special-projects.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Special Projects&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_webp('assets/img/portfolio/special-projects.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/portfolio/special-projects.jpg') }}&quot;);"><img src="{{ theme_webp('assets/img/portfolio/special-projects.jpg') }}" alt="Special projects cargo handling" class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Special Projects</a></h3>
                                <p class="text-white opacity7">OOG, dangerous goods, heavy lift, break bulk, and project cargo handled with strict local coordination.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_webp('assets/img/portfolio/hub-warehousing.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Hub &amp; Warehousing&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_webp('assets/img/portfolio/hub-warehousing.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/portfolio/hub-warehousing.jpg') }}&quot;);"><img src="{{ theme_webp('assets/img/portfolio/hub-warehousing.jpg') }}" alt="Hub and warehousing operations" class="d-none"></div>
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
        <section class="bg-img cover-background secondary-overlay parallax home-section home-section--cta" data-overlay-dark="9" data-background="{{ theme_webp('assets/img/bg/bg-05.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/bg/bg-05.jpg') }}&quot;);">
            <div class="container">
                <div class="row align-items-center mt-n1-9">
                    <div class="col-lg-6 mt-1-9">
                        <div class="pe-xl-2-9">
                            <div class="bg-white shadow p-1-9 p-sm-2-6 ps-lg-5 rounded">
                                <h3 class="h2 mb-3">Send us message</h3>
                                <form class="mc-contact-form" action="{{ route('contact.store') }}" method="post" novalidate>
                                    @csrf
                                    <input type="hidden" name="form_source" value="Home page — Send us message">
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
                                                <div class="quform-element form-group">
                                                    @include('partials.recaptcha')
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mc-contact-form__status" role="alert" aria-live="polite" hidden></div>
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
                                        <div>
                                            <h4 class="text-white h5 mb-0">Operations Manager</h4>
                                            <span class="text-primary">Shipowner, Mediterranean</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Port calls are smoother because one team handles agency, husbandry, and spare delivery. We get status without chasing five vendors.</p>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="text-white h5 mb-0">Fleet Superintendent</h4>
                                            <span class="text-primary">Technical management, Dubai</span>
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
