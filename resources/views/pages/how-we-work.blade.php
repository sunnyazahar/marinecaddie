@extends('layouts.app')

@section('title', 'How We Work')
@section('meta_title', 'How MarineCaddie Works | Discover, Integrate, Orchestrate')
@section('meta_description', 'See how MarineCaddie’s 4PL process works: Discover & Design, Integrate Systems & Partners, Orchestrate & Optimize, and Continuous Performance.')
@section('meta_keywords', 'how 4PL works, supply chain process, logistics orchestration process, MarineCaddie method')
@section('schema_type', 'WebPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>How We Work</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('how-we-work') }}#">How We Work</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS
        ================================================== -->
        <section>
            <div class="container">
                <div class="mb-4 text-center wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Work Process.</span>
                    <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px w-sm-90 w-md-75 w-lg-65 w-xl-55 w-xxl-45 mx-auto">How MarineCaddie orchestrates your supply chain</h2>
                </div>
            </div>
            <div class="process-style01 position-relative pt-3">
                <div class="container">
                    <div class="row mt-n2-9">
                        <div class="col-sm-6 col-lg-3 mt-2-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="text-center process-block">
                                <div class="process-img">
                                    <img src="{{ theme_asset('assets/img/content/process-01.jpg') }}" class="mb-4 rounded-circle" alt="..." title="...">
                                    <div class="count-size">
                                        <span class="number">01</span>
                                    </div>
                                </div>
                                <h3 class="h5 mb-3">Discover &amp; Design</h3>
                                <p class="mb-0 mx-auto w-95">Map lanes, partners, costs, and constraints—then design a supply chain model built for compliance and on-time delivery.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-2-9 wow fadeInUp" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInUp;">
                            <div class="text-center process-block">
                                <div class="process-img">
                                    <img src="{{ theme_asset('assets/img/content/process-02.jpg') }}" class="mb-4 rounded-circle" alt="..." title="...">
                                    <div class="count-size">
                                        <span class="number">02</span>
                                    </div>
                                </div>
                                <h3 class="h5 mb-3">Integrate Systems &amp; Partners</h3>
                                <p class="mb-0 mx-auto w-95">Connect ERP, TMS, and tracking with selected 3PLs so every handoff shares data, SLAs, and clear ownership.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-2-9 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <div class="text-center process-block">
                                <div class="process-img">
                                    <img src="{{ theme_asset('assets/img/content/process-03.jpg') }}" class="mb-4 rounded-circle" alt="..." title="...">
                                    <div class="count-size">
                                        <span class="number">03</span>
                                    </div>
                                </div>
                                <h3 class="h5 mb-3">Orchestrate &amp; Optimize</h3>
                                <p class="mb-0 mx-auto w-95">Run day-to-day execution across freight, warehouse, and distribution—managing exceptions before they reach your customers.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-2-9 wow fadeInUp" data-wow-delay="650ms" style="visibility: visible; animation-delay: 650ms; animation-name: fadeInUp;">
                            <div class="text-center process-block">
                                <div class="process-img">
                                    <img src="{{ theme_asset('assets/img/content/process-04.jpg') }}" class="mb-4 rounded-circle" alt="..." title="...">
                                    <div class="count-size">
                                        <span class="number">04</span>
                                    </div>
                                </div>
                                <h3 class="h5 mb-3">Continuous Performance</h3>
                                <p class="mb-0 mx-auto w-95">Review scorecards, refine partner mix, and improve network cost, compliance, and reliability over time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT US
        ================================================== -->
        <section class="contact-style02 bg-secondary">
            <div class="container">
                <div class="row align-items-center mt-n2-9">
                    <div class="col-lg-6 mt-2-9">
                        <div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Contact Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 text-white">Ready to start orchestrating with MarineCaddie?</h2>
                            </div>
                            <div class="row mt-n1-9 mb-6">
                                <div class="col-sm-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <h3 class="h4 text-white">Coverage</h3>
                                    <p class="text-white opacity8 mb-0">Global maritime &amp; logistics coverage</p>
                                </div>
                                <div class="col-sm-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <h3 class="h4 text-white">Phone</h3>
                                    <p class="mb-0"><a class="text-primary text-white-hover" href="tel:+18005550148">(+1) 800 555 0148</a></p>
                                </div>
                                <div class="col-sm-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <h3 class="h4 text-white">Follow us</h3>
                                    <ul class="social-icon-style03 list-unstyled">
                                        <li><a href="{{ route('how-we-work') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('how-we-work') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('how-we-work') }}#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="{{ route('how-we-work') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <h3 class="h4 text-white">Email</h3>
                                    <p class="mb-0 text-white opacity8">Your supply chain, orchestrated.</p>
                                    <p class="mb-0"><a href="mailto:info@marinecaddie.com" class="text-decoration-underline text-primary text-white-hover">info@marinecaddie.com</a></p>
                                </div>
                            </div>
                            <div class="contact-text wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <p class="mb-0">25+ Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9">
                        <div class="bg-white p-1-9 p-md-2-9 p-xl-6 rounded">
                            <div class="mb-3">
                                <h2 class="ls-minus-2px display-4 font-weight-800 lh-1 mb-1-9">Get in touch</h2>
                            </div>
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
                                                <button class="butn-style03 w-100 border-0" type="submit">Send Message</button>
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

        <!-- WHY-CHOOSE-US
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n2-9 align-items-center">
                    <div class="col-lg-6 mt-2-9">
                        <div class="pe-lg-1-9 pe-xxl-12">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Why Choose Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">A 4PL partner built on maritime trust</h2>
                            </div>
                            <p class="mb-1-9 wow fadeInUp" data-wow-delay="150ms" style="visibility: visible; animation-delay: 150ms; animation-name: fadeInUp;">MarineCaddie combines 25+ years of shipping operator experience with disciplined orchestration—so systems, 3PLs, and trade lanes stay aligned to cost, compliance, and on-time outcomes.</p>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-08.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-09.jpg') }}" alt="..." title="..." class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                                <p class="text-secondary font-weight-600 text-decoration-underline mb-0">Trusted by <strong>global trade leaders worldwide.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
                        <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <img src="{{ theme_asset('assets/img/icons/icon-03.png') }}" alt="..." title="..." class="w-60px">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 py-1-6">
                                        <h3 class="h4">Clear Accountability</h3>
                                        <p class="mb-0">One orchestration owner across partners and lanes.</p>
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
                                        <h3 class="h4">Measurable Performance</h3>
                                        <p class="mb-0">Cost, compliance, and on-time scorecards you can act on.</p>
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
                                        <h3 class="h4">Operator-Grade Expertise</h3>
                                        <p class="mb-0">Maritime know-how applied to complex global networks.</p>
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
                <div class="row g-0 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 bg-primary border-top border-primary">
                            <div class="h4 text-white">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="35"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></div>k
                            </div>
                            <p class="d-inline-block text-center text-white">Deliveries Completed</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-lg-end border-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="25"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></div>+
                            </div>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-sm-end border-lg-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="89"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span></div></div>+
                            </div>
                            <p>Operational capacity</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-block text-center py-1-6 py-sm-2-5 border-sm-top">
                            <div class="h4">
                                <div class="d-inline-block odometer odometer-auto-theme" data-count="98"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div></div>+
                            </div>
                            <p>On-Time Delivery Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
