@extends('layouts.app')

@section('title', 'About Us')
@section('meta_title', 'About MarineCaddie Shipping | Maritime Logistics Caddies')
@section('meta_description', 'MarineCaddie Shipping LLC is a specialized marine logistics and freight forwarding company providing ship spare logistics, customs clearance, vessel husbandry, and end-to-end maritime support worldwide.')
@section('meta_keywords', 'about MarineCaddie, maritime logistics, ship spare logistics, vessel husbandry, freight forwarding Dubai')
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
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Who We Are</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">{{ config('company.headline') }}</h2>
                            </div>
                            <p class="mb-3 lead text-secondary font-weight-600 wow fadeInUp" data-wow-delay="200ms">{{ config('company.tagline') }}</p>
                            <p class="mb-4 wow fadeInUp" data-wow-delay="250ms">{{ config('company.who_we_are') }}</p>
                            <div class="mb-5">
                                <div class="d-flex border-bottom pb-1-9 mb-1-9 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="{{ theme_asset('assets/img/icons/icon-14.png') }}" alt="..." class="w-50px">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="h5">Our Mission</h3>
                                        <p class="mb-0">{{ config('company.mission') }}</p>
                                    </div>
                                </div>
                                <div class="d-flex wow fadeInUp" data-wow-delay="400ms">
                                    <div class="flex-shrink-0 me-4">
                                        <img src="{{ theme_asset('assets/img/icons/icon-15.png') }}" alt="..." class="w-50px">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="h5">Our Vision</h3>
                                        <p class="mb-0">{{ config('company.vision') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <div class="flex-shrink-0">
                                    <a class="butn-style01 text-white-hover" href="{{ route('contact') }}">Talk to Us</a>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-xl-5">
                                    <p class="mb-0 text-secondary font-weight-600 fst-italic">{{ config('company.motto') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GLOBAL COVERAGE & PORT HUSBANDRY
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="row mt-n1-9">
                    <div class="col-lg-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="mb-4">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Global Coverage</span>
                            <h2 class="display-5 font-weight-800 mb-3 lh-1 ls-minus-2px">Present where your vessels call</h2>
                            <p class="mb-0">{{ config('company.brand') }} operates with coverage across {{ config('company.presence') }}. From our base as {{ config('company.legal_name') }} in {{ config('company.address.short') }}, we coordinate maritime logistics support for fleets worldwide.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="mb-4">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Port Husbandry</span>
                            <h2 class="display-5 font-weight-800 mb-3 lh-1 ls-minus-2px">Local support at key ports</h2>
                            <p class="mb-0">Port husbandry services across {{ config('company.port_husbandry_regions') }}—including port agency, crew change, immigration and visa assistance, launch boats, fresh water, bunkering coordination, cash to master, medical assistance, ship chandling, repairs, and dry dock support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ANIMATION-LINE
        ================================================== -->
        <section class="pb-1-9 pb-sm-2-9 pt-0 home-section--ticker">
            <div class="container-fluid px-0">
                <div class="scroll-section scroll-section--dynamic">
                    <div class="scroll-track pause-on-hover scroll-left scroll-speed-4">
                        <div class="scroll-group">
                            @include('partials.scroll-ticker', ['phrases' => [
                                'Ship Spare Logistics',
                                'Vessel Husbandry',
                                'Customs Clearance',
                                'Freight Forwarding',
                                'Crew Logistics',
                                'Port Coordination',
                                'Door to Deck',
                                '24/7 Operations',
                            ]])
                        </div>
                        <div class="scroll-group" aria-hidden="true">
                            @include('partials.scroll-ticker', ['phrases' => [
                                'Ship Spare Logistics',
                                'Vessel Husbandry',
                                'Customs Clearance',
                                'Freight Forwarding',
                                'Crew Logistics',
                                'Port Coordination',
                                'Door to Deck',
                                '24/7 Operations',
                            ]])
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="mb-1-9 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Why Choose Us.</span>
                    <h2 class="mb-0 display-4 font-weight-800 lh-1 ls-minus-2px w-sm-90 w-md-75 w-lg-65 w-xl-55 mx-auto">{{ config('company.motto') }}</h2>
                </div>
                <div class="row mt-n1-9">
                    @foreach(config('company.why_choose_us') as $index => $item)
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="{{ 100 + ($index * 50) }}ms">
                        <div class="border border-color-light-black rounded p-1-9 h-100">
                            <h3 class="h5 mb-2">{{ $item['title'] }}</h3>
                            <p class="mb-0">{{ $item['text'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-2-9">
                    <div class="col-lg-8 mx-auto text-center wow fadeInUp" data-wow-delay="100ms">
                        <p class="mb-2 text-secondary font-weight-600">{{ config('company.legal_name') }}</p>
                        <p class="mb-1">{{ config('company.address.line1') }}</p>
                        <p class="mb-3">{{ config('company.address.line2') }}</p>
                        <p class="mb-0">
                            <a href="tel:{{ config('company.phone_tel') }}" class="text-primary me-3">{{ config('company.phone_display') }}</a>
                            <a href="mailto:{{ config('company.email') }}" class="text-primary">{{ config('company.email') }}</a>
                        </p>
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
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px text-white">Trusted maritime logistics partners</h2>
                            </div>
                            <div class="testimonial-carousel-two owl-carousel owl-loaded owl-drag" data-owl="{&quot;loop&quot;:true,&quot;responsiveClass&quot;:true,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000, &quot;nav&quot;:true, &quot;navText&quot;: [&quot;&lt;i class=\&quot;ti-arrow-left\&quot;&gt;&lt;/i&gt;&quot;,&quot;&lt;i class=\&quot;ti-arrow-right\&quot;&gt;&lt;/i&gt;&quot;], &quot;dots&quot;:false,&quot;center&quot;:false,&quot;smartSpeed&quot;:1500,&quot;margin&quot;:30,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1}}}">
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1271px, 0px, 0px); transition: 1.5s; width: 4450px;"><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie keeps our fleet moving with reliable ship spare logistics and clear updates from hub to onboard delivery. Their Dubai team understands vessel urgency.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Fleet Logistics Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">From customs clearance to port husbandry in India and Singapore, they coordinate what we need so our vessels stay on schedule. Cost-effective and customer-focused.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Head of Marine Operations</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Their freight forwarding and door-to-deck delivery for critical parts gave us one accountable team across air, ocean, and last mile. Exceptional operational focus.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Technical Purchasing Lead</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie keeps our fleet moving with reliable ship spare logistics and clear updates from hub to onboard delivery. Their Dubai team understands vessel urgency.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Fleet Logistics Director</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">From customs clearance to port husbandry in India and Singapore, they coordinate what we need so our vessels stay on schedule. Cost-effective and customer-focused.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-04.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Daniel Hester</h3>
                                            <span class="text-white opacity8">Head of Marine Operations</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">Their freight forwarding and door-to-deck delivery for critical parts gave us one accountable team across air, ocean, and last mile. Exceptional operational focus.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-02.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Maria Kunze</h3>
                                            <span class="text-white opacity8">Technical Purchasing Lead</span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 605.602px; margin-right: 30px;"><div>
                                    <p class="text-white mb-1-9 display-27 display-xl-26 opacity8">MarineCaddie keeps our fleet moving with reliable ship spare logistics and clear updates from hub to onboard delivery. Their Dubai team understands vessel urgency.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="{{ theme_asset('assets/img/avatar/avatar-03.jpg') }}" class="border-radius-50" alt="..." title="...">
                                            <div class="testimonials-quote">
                                                <img src="{{ theme_asset('assets/img/icons/quote-01.png') }}" alt="..." title="...">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4 text-white">Gemma Krischock</h3>
                                            <span class="text-white opacity8">Fleet Logistics Director</span>
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
                                <span>Ship Spare Logistics Lead</span>
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
                                <span>Marine Operations Director</span>
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
                                <span>Freight Forwarding Lead</span>
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
                                <span>Port Husbandry Manager</span>
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
