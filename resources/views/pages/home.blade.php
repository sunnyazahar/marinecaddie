@extends('layouts.app')

@section('title', '4PL Supply Chain Orchestration')
@section('meta_title', 'MarineCaddie Shipping | 4PL Supply Chain Orchestration')
@section('meta_description', 'MarineCaddie Shipping orchestrates maritime and global supply chains as your 4PL partner—systems, 3PLs, and visibility aligned so freight moves on time and on budget.')
@section('meta_keywords', 'MarineCaddie, 4PL logistics, supply chain orchestration, maritime shipping, freight management, Smart Caddies Smarter Logistics')
@section('schema_type', 'WebPage')
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
                            <h1 class="display-1 font-weight-800 lh-1 mb-0 text-white ls-minus-2px">Your supply chain, orchestrated.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section class="about-style01">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 mt-1-9">
                        <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">About MarineCaddie</span>
                            <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">4PL orchestration for complex maritime supply chains</h2>
                        </div>
                        <p class="mb-4 wow fadeInUp" data-wow-delay="150ms">MarineCaddie Shipping is a 4PL supply chain orchestration partner for businesses managing complex maritime and global logistics. We optimize the entire network by integrating systems, coordinating 3PLs, and delivering end-to-end visibility—helping shippers reduce cost, strengthen compliance, and arrive on time.</p>
                        <div class="d-flex mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                            <div class="flex-shrink-0 me-4">
                                <img src="{{ theme_asset('assets/img/icons/icon-01.png') }}" alt="..." title="..." class="w-65px">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mb-2 h5">Network Orchestration</h3>
                                <p class="mb-0">We design and manage end-to-end supply chains—aligning ERP, TMS, and tracking with 3PL performance so every handoff stays controlled.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-2-5 wow fadeInUp" data-wow-delay="250ms">
                            <div class="flex-shrink-0 me-4">
                                <img src="{{ theme_asset('assets/img/icons/icon-02.png') }}" alt="..." title="..." class="w-65px">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mb-2 h5">25+ Years Maritime Expertise</h3>
                                <p class="mb-0">Built by logistics operators with more than 25 years in maritime shipping—practical judgment for real-world global moves.</p>
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
                                            <img src="{{ theme_asset('assets/img/content/logistics-scaled.webp') }}" alt="..." title="..." class="rounded">
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
                                            <div class="about-icon"><img src="{{ theme_asset('assets/img/content/animated-logo.png') }}" alt="..." title="..." class="w-60px"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE
        ================================================== -->
        <section class="pt-0 pb-0">
            <div class="container-fluid px-md-5">
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ theme_asset('assets/img/services/service-01.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.air-freight') }}">Air Freight</a></h3>
                                    <p class="mb-0 w-90">Time-critical lanes orchestrated with carrier selection, capacity planning, and live milestone visibility.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.air-freight') }}" class="font-weight-700">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="150ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ theme_asset('assets/img/services/service-02.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.road-freight') }}">Road Freight</a></h3>
                                    <p class="mb-0 w-90">First- and last-mile road networks coordinated with your 3PLs for reliable inland connections.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.road-freight') }}" class="font-weight-700">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ theme_asset('assets/img/services/service-03.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.ocean-freight') }}">Ocean Freight</a></h3>
                                    <p class="mb-0 w-90">Maritime shipping programs designed for cost control, schedule integrity, and customs-ready documentation.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.ocean-freight') }}" class="font-weight-700">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="250ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ theme_asset('assets/img/services/service-04.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.warehousing') }}">Warehousing</a></h3>
                                    <p class="mb-0 w-90">Distribution and inventory nodes optimized for throughput, accuracy, and multi-node network balance.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.warehousing') }}" class="font-weight-700">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY-CHOOSE-US
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n2-9 align-items-center">
                    <div class="col-lg-6 mt-2-9">
                        <div class="pe-lg-1-9 pe-xxl-12">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Why Choose Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Control you can trust across every lane</h2>
                            </div>
                            <p class="mb-1-9 wow fadeInUp" data-wow-delay="150ms">Reliability and trust define how we operate. As your 4PL partner, MarineCaddie orchestrates complex maritime and global supply chains with clear accountability—so cost, compliance, and on-time performance stay aligned from origin to destination.</p>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-08.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-09.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                                <p class="text-secondary font-weight-600 text-decoration-underline mb-0">Trusted by <strong>industry leaders worldwide.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="250ms">
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-03.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">End-to-End Visibility</h3>
                                        <p class="mb-0">Integrated ERP, TMS, and tracking for full-network insight.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-04.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">3PL Performance Management</h3>
                                        <p class="mb-0">Provider coordination with measurable service standards.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-05.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 pt-1-6">
                                        <h3 class="h4">Compliance &amp; Risk Control</h3>
                                        <p class="mb-0">Customs, documentation, and risk managed with discipline.</p>
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
        <section class="pt-0 counter-style01">
            <div class="container">
                <div class="row g-0 wow fadeInUp" data-wow-delay="100ms">
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 bg-primary border-top border-primary">
                            <div class="h4 text-white">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="35"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>k
                            </div>
                            <p class="d-inline-block text-center text-white">Shipments Orchestrated</p>
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
        <section class="bg-secondary portfolio-style02 pb-0  pt-0 overflow-visible">
            
            <div class="container-fluid p-sm-0">
                <div class="row g-0 portfolio-gallery wow fadeInUp" data-wow-delay="200ms">
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Air Transport&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-09.jpg') }}" alt="..." class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Air Transport</a></h3>
                                <p class="text-white opacity7">Priority air program for a global manufacturer—lane design, carrier control, and milestone alerts.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Freight Wave&lt;a/&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-10.jpg') }}" alt="..." class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Freight Wave</a></h3>
                                <p class="text-white opacity7">Peak-season ocean &amp; inland orchestration balancing capacity, cost, and dwell across the network.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Special Transport&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-11.jpg') }}" alt="..." class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Special Transport</a></h3>
                                <p class="text-white opacity7">Project cargo move with multi-3PL coordination, compliance checks, and controlled handoffs.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-src="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;portfolio-details.html&#39; class=&#39;text-white&#39;&gt;Warehouse Inventory&lt;/a&gt;&lt;/h4&gt;">
                        <div class="portfolio-box">
                            <div class="bg-img" data-background="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}&quot;);"><img src="{{ theme_asset('assets/img/portfolio/portfolio-12.jpg') }}" alt="..." class="d-none"></div>
                            <div class="content-box">
                                <h3 class="h3 mb-2"><a href="{{ route('portfolio.details') }}">Warehouse Inventory</a></h3>
                                <p class="text-white opacity7">Distribution redesign that aligned inventory positions with demand and reduced transit variance.</p>
                                <div class="link text-end"><a href="{{ route('portfolio.details') }}" class="portfolio-link"><i class="ti-arrow-right link-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    

        <!-- ANIMATION-LINE
        ================================================== -->
        <section class="pb-1-9 pb-sm-2-9 pt-0">
            <div class="container-fluid">
                <!-- SCROLLING ANIMATION -->
                <div class="scroll-section">
                    <div class="scroll-track pause-on-hover scroll-left scroll-speed-4">
                        <div class="scroll-group">
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Global Connections">Global Connections</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Moving the World">Moving the World</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Modes of Transport">Modes of Transport</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Warehousing &amp; Storage">Warehousing &amp; Storage</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Real-Time Tracking">Real-Time Tracking</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Technology in Motion">Technology in Motion</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Worldwide Delivery">Worldwide Delivery</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Sustainable Logistics">Sustainable Logistics</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Global Connections">Global Connections</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="&gt;Moving the World">Moving the World</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Modes of Transport">Modes of Transport</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL
        ================================================== -->
        <section class="bg-img cover-background secondary-overlay parallax" data-overlay-dark="9" data-background="{{ theme_asset('assets/img/bg/bg-05.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/bg/bg-05.jpg') }}&quot;);">
            <div class="container">
                <div class="row align-items-center mt-n1-9">
                    <div class="col-lg-6 mt-1-9 d-lg-block d-none">
                        <div class="pe-xl-2-9">
                            <div class="bg-white shadow p-1-9 p-sm-2-6 ps-lg-5 rounded">
                                <h3 class="h2 mb-3">Send us message</h3>
                                <form class="contact quform" action="#" method="post" enctype="multipart/form-data" onclick="">
                                    <div class="quform-elements">
                                        <div class="row">
                                            <!-- Begin Text input element -->
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="name">Your Name <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->
                                            <!-- Begin Text input element -->
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="email">Your Email <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->
                                            <!-- Begin Text input element -->
                                            <div class="col-md-6">
                                                <div class="quform-element form-group quform-select-replaced">
                                                    <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->
                                            <!-- Begin Text input element -->
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="phone">Contact Number</label>
                                                    <div class="quform-input">
                                                        <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->
                                            <!-- Begin Textarea element -->
                                            <div class="col-md-12">
                                                <div class="quform-element form-group">
                                                    <label for="message">Message <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Textarea element -->
                                            <!-- Begin Captcha element -->
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
                                                                <img src="{{ theme_asset('assets/images/courier-new-light.png') }}" alt="..." title="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Captcha element -->
                                            <!-- Begin Submit button -->
                                            <div class="col-md-12">
                                                <div class="quform-submit-inner">
                                                    <button class="butn-style01 border-0 md" type="submit">Send Message</button>
                                                </div>
                                                <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                            </div>
                                            <!-- End Submit button -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-1-9">
                        <div class="pe-xl-1-9">
                            <div class="mb-4">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Testimonial.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px text-white">What shippers say about our orchestration</h2>
                            </div>
                            <div class="testimonial-carousel-two owl-carousel owl-loaded owl-drag" data-owl="{&quot;loop&quot;:true,&quot;responsiveClass&quot;:true,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000, &quot;nav&quot;:true, &quot;navText&quot;: [&quot;&lt;i class=\&quot;ti-arrow-left\&quot;&gt;&lt;/i&gt;&quot;,&quot;&lt;i class=\&quot;ti-arrow-right\&quot;&gt;&lt;/i&gt;&quot;], &quot;dots&quot;:false,&quot;center&quot;:false,&quot;smartSpeed&quot;:1500,&quot;margin&quot;:30,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1}}}">
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1906px, 0px, 0px); transition: 1.5s; width: 4450px;"><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie took ownership of our multi-3PL ocean network. We finally have one view of milestones, clearer cost control, and fewer compliance surprises at destination.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">As a 4PL partner they don’t just book freight—they manage provider performance and hold the network accountable. Our on-time rate and exception handling improved within the first quarter.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Logistics Manager</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Integrating our TMS and tracking into their orchestration layer gave our team real end-to-end visibility. Decisions are faster, and handoffs between carriers no longer fall through the cracks.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie took ownership of our multi-3PL ocean network. We finally have one view of milestones, clearer cost control, and fewer compliance surprises at destination.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">As a 4PL partner they don’t just book freight—they manage provider performance and hold the network accountable. Our on-time rate and exception handling improved within the first quarter.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Logistics Manager</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Integrating our TMS and tracking into their orchestration layer gave our team real end-to-end visibility. Decisions are faster, and handoffs between carriers no longer fall through the cracks.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie took ownership of our multi-3PL ocean network. We finally have one view of milestones, clearer cost control, and fewer compliance surprises at destination.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Logistics Coordinator</span>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ti-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ti-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG
        ================================================== -->
        <section>
            <div class="container">
                <div class="mb-1-9 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Blog.</span>
                    <h2 class="mb-0 display-4 font-weight-800 lh-1 ls-minus-2px w-sm-90 w-md-75 w-lg-65 w-xl-55 w-xxl-45 mx-auto">Insights on 4PL and supply chain control</h2>
                </div>
                <div class="row g-xl-5 mt-n2-2">
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="100ms">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-01.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">10</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('home') }}#">4PL</a></span>
                                <h3 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">How 4PL orchestration cuts freight variance</a></h3>
                            </div>
                            <div class="border-top bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('home') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>05</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="150ms">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-02.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">08</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('home') }}#">Integration</a></span>
                                <h3 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">ERP, TMS &amp; tracking: building one source of truth</a></h3>
                            </div>
                            <div class="border-top bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('home') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>02</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="200ms">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-03.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">06</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('home') }}#">Compliance</a></span>
                                <h3 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Customs readiness for maritime shippers</a></h3>
                            </div>
                            <div class="border-top bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('home') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>04</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
