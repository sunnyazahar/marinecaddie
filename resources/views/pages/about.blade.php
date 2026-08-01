@extends('layouts.app')

@section('title', 'About Us')
@section('meta_title', 'About MarineCaddie Shipping | 25+ Years in Maritime Logistics')
@section('meta_description', 'Learn how MarineCaddie Shipping combines 25+ years of maritime expertise with modern 4PL orchestration—integrating partners, systems, and visibility for global shippers.')
@section('meta_keywords', 'about MarineCaddie, 4PL company, maritime logistics expertise, supply chain partner')
@section('schema_type', 'AboutPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT US
        ================================================== -->
        <section>
            <div class="container mt-lg-3 mt-xl-0">
                <div class="row">
                    <div class="col-lg-6 mb-2-9 mb-lg-0 position-relative wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col-6">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/content/about-04.jpg') }}" class="rounded" alt="...">
                                </div>
                            </div>
                            <div class="col-6 mt-1-9">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/content/about-05.jpg') }}" class="rounded" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-3 p-sm-4 bg-primary rounded-circle start-50 top-50 translate-middle">
                            <img src="{{ theme_asset('assets/img/icons/icon-16.png') }}" alt="..." class="w-50px">
                        </div>
                    </div>
                    <div class="col-lg-6 text-column">
                        <div class="ps-xl-2-9">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">About MarineCaddie</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Orchestrating complex maritime supply chains</h2>
                            </div>
                            <p class="mb-3 lead text-secondary font-weight-600 wow fadeInUp" data-wow-delay="200ms">MarineCaddie Shipping is a 4PL supply chain orchestration partner for businesses managing complex maritime and global logistics.</p>
                            <p class="mb-4 wow fadeInUp" data-wow-delay="250ms">We optimize the entire network. By integrating systems, managing 3PLs, and driving end-to-end visibility, we help shippers reduce cost, improve compliance, and deliver on time, every time.</p>
                            <div class="mb-5">
                                <div class="d-flex border-bottom pb-1-9 mb-1-9 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="{{ theme_asset('assets/img/icons/icon-14.png') }}" alt="..." class="w-50px">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="h5">System Integration</h3>
                                        <p class="mb-0">We connect ERP, TMS, and tracking platforms into one orchestration layer—so freight, warehouse, and distribution data work together across partners and lanes.</p>
                                    </div>
                                </div>
                                <div class="d-flex wow fadeInUp" data-wow-delay="400ms">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="{{ theme_asset('assets/img/icons/icon-15.png') }}" alt="..." class="w-50px">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="h5">Reliability &amp; Trust</h3>
                                        <p class="mb-0">Built by logistics operators with 25+ years in maritime shipping, MarineCaddie combines deep industry experience with technology to give you control over your supply chain—without the overhead of managing it alone.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <div class="flex-shrink-0">
                                    <a class="butn-style01 text-white-hover" href="{{ route('contact') }}">Talk to Us</a>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-xl-5">
                                    <p class="mb-0 text-secondary font-weight-600 fst-italic">Your supply chain, orchestrated.</p>
                                </div>
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
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Supply Chain Design">Supply Chain Design</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="3PL Coordination">3PL Coordination</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="End-to-End Visibility">End-to-End Visibility</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Customs Compliance">Customs Compliance</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Network Optimization">Network Optimization</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Maritime Expertise">Maritime Expertise</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Systems Integration">Systems Integration</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Risk Management">Risk Management</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="Supply Chain Design">Supply Chain Design</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="3PL Coordination">3PL Coordination</div>
                            <div class="scroll-item with-img me-5"><img src="{{ theme_asset('assets/img/icons/icon-17.png') }}" alt="..." title="..." class="w-60px"></div>
                            <div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="End-to-End Visibility">End-to-End Visibility</div>
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
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px text-white">Partners who trust our orchestration</h2>
                            </div>
                            <div class="testimonial-carousel-two owl-carousel owl-loaded owl-drag" data-owl="{&quot;loop&quot;:true,&quot;responsiveClass&quot;:true,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000, &quot;nav&quot;:true, &quot;navText&quot;: [&quot;&lt;i class=\&quot;ti-arrow-left\&quot;&gt;&lt;/i&gt;&quot;,&quot;&lt;i class=\&quot;ti-arrow-right\&quot;&gt;&lt;/i&gt;&quot;], &quot;dots&quot;:false,&quot;center&quot;:false,&quot;smartSpeed&quot;:1500,&quot;margin&quot;:30,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1}}}">
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1271px, 0px, 0px); transition: 1.5s; width: 4450px;"><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie orchestrates our ocean and inland partners as one network. End-to-end visibility and disciplined 3PL coordination cut exceptions and keep our lanes on schedule.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Supply Chain Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">As our 4PL partner, MarineCaddie integrates systems and manages compliance risk across markets. We reduced landed cost while improving on-time performance—without adding complexity for our teams.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Head of Global Logistics</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Their maritime operator experience shows in every exception. From customs readiness to warehouse handoffs, we finally have one accountable orchestration layer for our global supply chain.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Supply Chain Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie orchestrates our ocean and inland partners as one network. End-to-end visibility and disciplined 3PL coordination cut exceptions and keep our lanes on schedule.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Supply Chain Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">As our 4PL partner, MarineCaddie integrates systems and manages compliance risk across markets. We reduced landed cost while improving on-time performance—without adding complexity for our teams.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Head of Global Logistics</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Their maritime operator experience shows in every exception. From customs readiness to warehouse handoffs, we finally have one accountable orchestration layer for our global supply chain.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Supply Chain Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie orchestrates our ocean and inland partners as one network. End-to-end visibility and disciplined 3PL coordination cut exceptions and keep our lanes on schedule.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Supply Chain Director</span>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ti-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ti-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TEAM
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n1-9">
                    <div class="col-xl-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="pe-lg-6">
                            <div class="mb-4">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Team.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Specialists behind every shipment</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="150ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-01.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Maya Paschke</h3>
                                <span>Distribution Network Lead</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-02.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Archie Symes</h3>
                                <span>4PL Program Director</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="250ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-03.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Summer Meldrum</h3>
                                <span>Supply Chain Designer</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-04.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Jonathan Lont</h3>
                                <span>Maritime Operations Lead</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="350ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-05.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Asmeret Girmay</h3>
                                <span>Customs &amp; Compliance Advisor</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style02 border-0 image-hover">
                            <img src="{{ theme_asset('assets/img/team/team-06.jpg') }}" alt="..." title="..." class="rounded">
                            <div class="card-body position-relative pb-0 px-0 pt-4">
                                <h3 class="mb-1 h5">Askalu Isaias</h3>
                                <span>3PL Coordination Manager</span>
                                <div class="team-icons">
                                    <ul class="list-unstyled ps-0">
                                        <li><a href="{{ route('about') }}#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="{{ route('about') }}#"><i class="ti-instagram"></i></a></li>
                                    </ul> 
                                    <span><i class="ti-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CALL TO ACTION
        ================================================== -->
        <section class="py-22 py-md-24 video-banner secondary-overlay" data-overlay-dark="8" style="background-image: url({{ theme_asset('assets/img/banner/video-cover.jpg') }});">
            <div class="banner-video" aria-hidden="true">
                <video autoplay muted loop playsinline preload="auto" poster="{{ theme_asset('assets/img/banner/video-cover.jpg') }}">
                    <source src="{{ theme_asset('assets/video/cargo-ship-loading-port.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="container py-xl-8 position-relative z-index-9"></div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
