@extends('layouts.app')

@section('title', 'Our Services')
@section('meta_title', 'Logistics Services | Air, Ocean, Road, Rail & Warehousing | MarineCaddie')
@section('meta_description', 'Explore MarineCaddie 4PL services: air freight, ocean freight, road and rail, warehousing, and end-to-end logistic solutions orchestrated for performance.')
@section('meta_keywords', 'logistics services, air freight, ocean freight, road freight, rail freight, warehousing, 4PL services')
@section('schema_type', 'CollectionPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Services</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services') }}#">Our Services</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT US
        ================================================== -->
        <section>
            <div class="container">
                <div class="row align-items-lg-center mb-2 mt-n1-9">

                    <div class="col-lg-6 mt-1-9 position-relative z-index-9">
                        <div class="w-80 w-sm-75 wow image-hover animated" style="visibility: visible;">
                            <img src="{{ asset('assets/img/content/about-07.jpg') }}" alt="..." title="..." class="rounded">
                        </div>
                        <div class="position-absolute right bottom-n10 w-55 w-md-50 overflow-hidden image-hover z-index-9">
                            <img src="{{ asset('assets/img/content/about-06.jpg') }}" alt="..." title="..." class="rounded">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-1-9">
                        <div class="ps-lg-1-6 ps-xl-2-9">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">About company.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Your supply chain, orchestrated.</h2>
                            </div>
                            <div class="ps-1-6 ps-xxl-10">

                                <p class="mb-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">MarineCaddie Shipping is a 4PL partner for maritime and global supply chain orchestration. We design and manage end-to-end networks, coordinate 3PLs, integrate ERP/TMS and tracking systems, strengthen customs and compliance, and optimize freight, warehouse, and distribution with data—so you reduce cost, improve compliance, and hit on-time delivery.</p>

                                <div class="d-sm-flex align-items-center mb-2-9">
                                    <div class="pe-sm-1-9 border-sm-end text-sm-center mb-3 mb-sm-0 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                        <h3 class="display-5 font-weight-800 text-secondary odometer odometer-auto-theme" data-count="24"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></h3>
                                        <p class="mb-0 text-secondary">Years Experience</p>
                                    </div>
                                    <div class="ps-sm-1-9">
                                        <ul class="list-style03 mb-0">
                                            <li class="wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Supply Chain Design</li>
                                            <li class="wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">3PL Coordination</li>
                                            <li class="wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">Systems Integration</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="{{ route('about') }}" class="butn-style01 wow fadeInUp" data-wow-delay="600ms">Read More</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="overflow-visible bg-light">
            <div class="container">
                <div class="mb-2-9 text-center">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Services.</span>
                    <h2 class="mb-0 display-4 font-weight-800 lh-1 ls-minus-2px w-md-80 w-lg-60 w-xl-50 mx-auto">Capabilities that keep global trade moving</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-01.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.air-freight') }}">Air Freight</a></h3>
                                    <p class="mb-0 w-90">Time-critical air moves coordinated with ocean and inland partners for reliable door-to-door handoffs.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.air-freight') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-02.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.road-freight') }}">Road Freight</a></h3>
                                    <p class="mb-0 w-90">Inland trucking and drayage aligned to port windows, warehouse slots, and distribution commitments.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.road-freight') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-03.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.ocean-freight') }}">Ocean Freight</a></h3>
                                    <p class="mb-0 w-90">Ocean freight orchestration with carrier selection, schedule discipline, and full-lane visibility.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.ocean-freight') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-04.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.warehousing') }}">Warehousing</a></h3>
                                    <p class="mb-0 w-90">Warehouse and distribution nodes optimized for inventory accuracy, throughput, and network cost.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.warehousing') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-05.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.logistic-solution') }}">Logistic Solution</a></h3>
                                    <p class="mb-0 w-90">End-to-end 4PL design—3PL management, systems integration, compliance, and performance control.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.logistic-solution') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-style01 position-relative overflow-hidden rounded">
                            <img src="{{ asset('assets/img/services/service-06.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="service-body">
                                <div class="content">
                                    <h3 class="title mb-1-6 pb-4 h4 pe-2 pe-xxl-0"><a href="{{ route('services.rail-freight') }}">Rail Freight</a></h3>
                                    <p class="mb-0 w-90">Rail and intermodal options integrated into multimodal plans for cost, capacity, and resiliency.</p>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.rail-freight') }}" class="font-weight-700 portfolio-link">Read More<i class="ti-arrow-top-right ms-3"></i></a>
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
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Reliability and trust, built into every lane</h2>
                            </div>
                            <p class="mb-1-9 wow fadeInUp" data-wow-delay="150ms">With 25+ years of maritime shipping operators behind us, MarineCaddie earns trust through disciplined orchestration—clear accountability across partners, measurable on-time performance, and compliance that protects your brand.</p>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ asset('assets/img/avatar/avatar-08.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow">
                                <img src="{{ asset('assets/img/avatar/avatar-09.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                                <p class="text-secondary font-weight-600 text-decoration-underline mb-0">Trusted by <strong>global trade leaders worldwide.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="250ms">
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ asset('assets/img/icons/icon-03.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">Accountable Orchestration</h3>
                                        <p class="mb-0">One 4PL owner across systems, 3PLs, and lanes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ asset('assets/img/icons/icon-04.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">Cost &amp; Compliance Control</h3>
                                        <p class="mb-0">Data-driven freight, warehouse, and risk decisions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ asset('assets/img/icons/icon-05.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 pt-1-6">
                                        <h3 class="h4">End-to-End Visibility</h3>
                                        <p class="mb-0">Integrated tracking from origin to final delivery.</p>
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
                            <p class="d-inline-block text-center text-white">Deliveries Completed</p>
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
                            <p>Operational capacity</p>
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

        <!-- CONTACT US
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center mt-n2-6">
                    <div class="col-lg-6 col-xxl-7 mt-2-6">
                        <div class="pe-xl-6 pe-xxl-10">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Contact Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Ready to orchestrate your supply chain?</h2>
                            </div>
                            <p class="display-27 mb-1-9 mb-md-2-9 wow fadeInUp" data-wow-delay="150ms">Talk with our team about network design, 3PL coordination, systems integration, or a new trade lane.</p>
                            <div class="row mt-n1-6 mt-sm-n2-6">
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Main Phone Number</h3>
                                        <div><a href="tel:+18005550148">(+1) 800 555 0148</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="250ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Coverage</h3>
                                        <div>Global maritime &amp; logistics coverage</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div>
                                        <h3 class="h5 text-secondary">For Support Related</h3>
                                        <div>Visit our <a href="{{ route('faq') }}">FAQ</a> for common answers</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="350ms">
                                    <div>
                                        <h3 class="h5 text-secondary">How We Work</h3>
                                        <div><a href="{{ route('how-we-work') }}">See our orchestration process</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Email Address</h3>
                                        <div><a href="mailto:info@marinecaddie.com">info@marinecaddie.com</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="450ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Start a Conversation</h3>
                                        <div><a href="{{ route('contact') }}">Contact our team</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-5 mt-2-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="shadow p-1-6 p-sm-2-5 rounded bg-white position-relative z-index-9">
                            <h2 class="h3 mb-1-6">How can we help?</h2>
                            <form class="quform contact-style01" action="#" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->

                                        <div class="col-md-12">
                                            <div class="quform-element form-group quform-select-replaced">
                                                <div class="quform-input">
                                                    <input id="subject" class="form-control" type="text" name="subject" placeholder="Your subject here">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
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
                                                            <img src="{{ asset('assets/images/courier-new-light.png') }}" alt="..." title="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn-style01 w-100 border-0" type="submit">Send Message</button>
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
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
