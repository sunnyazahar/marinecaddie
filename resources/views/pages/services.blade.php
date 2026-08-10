@extends('layouts.app')

@section('title', 'Our Services')
@section('meta_title', 'Our Services | Marine Logistics & Ship Spares')
@section('meta_description', 'Marine logistics, freight forwarding, customs clearance, special projects, ship spares and port husbandry for India, Sri Lanka, Indonesia, Singapore and beyond.')
@section('meta_keywords', 'marine logistics, ship spares logistics, freight forwarding, customs clearance, special projects, vessel husbandry, port husbandry, air freight, ocean freight')
@section('schema_type', 'CollectionPage')
@section('og_image_alt', 'MarineCaddie maritime logistics services')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
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
                            <img src="{{ theme_asset('assets/img/content/about-07.jpg') }}" alt="Marine logistics operations" title="Marine logistics operations" class="rounded">
                        </div>
                        <div class="position-absolute right bottom-n10 w-55 w-md-50 overflow-hidden image-hover z-index-9">
                            <img src="{{ theme_asset('assets/img/content/about-06.jpg') }}" alt="Port operations" title="Port operations" class="rounded">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-1-9">
                        <div class="ps-lg-1-6 ps-xl-2-9">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Services</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">{{ config('company.headline') }}</h2>
                            </div>
                            <div class="ps-1-6 ps-xxl-10">

                                <p class="mb-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">{{ config('company.who_we_are') }} Capabilities span {{ config('company.services.marine_logistics.title') }}, {{ config('company.services.freight_forwarding.title') }}, {{ config('company.services.customs_clearance.title') }}, and {{ config('company.services.special_projects.title') }}.</p>

                                <div class="d-sm-flex align-items-center mb-2-9">
                                    <div class="pe-sm-1-9 border-sm-end text-sm-center mb-3 mb-sm-0 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                        <h3 class="display-5 font-weight-800 text-secondary odometer odometer-auto-theme" data-count="24"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></h3>
                                        <p class="mb-0 text-secondary">Years Experience</p>
                                    </div>
                                    <div class="ps-sm-1-9">
                                        <ul class="list-style03 mb-0">
                                            @foreach(config('company.services') as $service)
                                            <li class="wow fadeInUp" data-wow-delay="{{ 300 + ($loop->index * 100) }}ms">{{ $service['title'] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <a href="#service-categories" class="butn-style01 wow fadeInUp" data-wow-delay="600ms">Explore Capabilities</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES — PDF categories
        ================================================== -->
        <section class="services-page-showcase overflow-hidden" id="service-categories">
            <div class="container">
                <div class="mb-2-9 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">What We Deliver</span>
                    <h2 class="mb-3 display-4 font-weight-800 lh-1 ls-minus-2px w-md-80 w-lg-70 w-xl-55 mx-auto">{{ config('company.tagline') }}</h2>
                    <p class="lead mb-0 mx-auto w-lg-70">{{ config('company.motto') }} The same four service pillars from our company profile—ready at ports worldwide.</p>
                </div>
                @include('partials.services-categories', ['variant' => 'page'])
            </div>
        </section>

        <!-- SERVICE DETAIL LINKS
        ================================================== -->
        <section class="service-pages-strip bg-light overflow-hidden">
            <div class="container">
                <div class="row align-items-end mb-1-9">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Go Deeper</span>
                        <h2 class="display-5 font-weight-800 mb-0 lh-1 ls-minus-1px text-secondary">Specialized service pages</h2>
                    </div>
                </div>
                <div class="row g-3 g-lg-4">
                    @foreach(config('company.service_pages') as $page)
                    <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ 100 + ($loop->index * 60) }}ms">
                        <a href="{{ route($page['route']) }}" class="service-page-link">
                            <span class="service-page-link__media">
                                <img src="{{ theme_asset($page['image']) }}" alt="{{ $page['title'] }}" title="{{ $page['title'] }}">
                            </span>
                            <span class="service-page-link__body">
                                <span class="service-page-link__title">{{ $page['title'] }}</span>
                                <span class="service-page-link__excerpt">{{ $page['excerpt'] }}</span>
                                <span class="service-page-link__cta">Read more <i class="ti-arrow-top-right" aria-hidden="true"></i></span>
                            </span>
                        </a>
                    </div>
                    @endforeach
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
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">{{ config('company.motto') }}</h2>
                            </div>
                            <p class="mb-1-9 wow fadeInUp" data-wow-delay="150ms">{{ config('company.mission') }}</p>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-08.jpg') }}" alt="Operations team" title="Operations team" class="rounded-circle border border-width-4 border-white shadow">
                                <img src="{{ theme_asset('assets/img/avatar/avatar-09.jpg') }}" alt="MarineCaddie team" title="MarineCaddie team" class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                                <p class="text-secondary font-weight-600 text-decoration-underline mb-0">Trusted across <strong>{{ config('company.address.short') }} and global ports.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="250ms">
                        @foreach(array_slice(config('company.why_choose_us'), 0, 3) as $why)
                        <div class="@if(!$loop->last) border-bottom border-color-light-black mb-4 mb-sm-0 @endif">
                            <div class="row g-0">
                                <div class="col-sm-3 border-sm-end">
                                    <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                        <span class="service-why-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="px-sm-1-6 px-xl-5 @if($loop->last) pt-1-6 @else py-1-6 @endif">
                                        <h3 class="h4">{{ $why['title'] }}</h3>
                                        <p class="mb-0">{{ $why['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Let’s Work Together.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">Contact Us</h2>
                            </div>
                            <p class="display-27 mb-1-9 mb-md-2-9 wow fadeInUp" data-wow-delay="150ms">{{ config('company.motto') }} Talk with our team about ship spares logistics, freight, customs clearance, or vessel husbandry.</p>
                            <div class="row mt-n1-6 mt-sm-n2-6">
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Main Phone Number</h3>
                                        <div><a href="tel:{{ config('company.phone_tel') }}">{{ config('company.phone_display') }}</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="250ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Coverage</h3>
                                        <div>{{ config('company.presence') }}</div>
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
                                        <div><a href="{{ route('how-we-work') }}">See our logistics process</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Email Address</h3>
                                        <div><a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1-6 mt-sm-2-6 wow fadeInUp" data-wow-delay="450ms">
                                    <div>
                                        <h3 class="h5 text-secondary">Office</h3>
                                        <div>{{ config('company.address.short') }}</div>
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
                                                            <img src="{{ theme_asset('assets/images/courier-new-light.png') }}" alt="Security captcha" title="Security captcha">
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

@push('structured_data')
@php
    $serviceList = [];
    $pos = 1;
    foreach (config('company.services') as $service) {
        $serviceList[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $service['title'],
            'description' => $service['excerpt'] ?? '',
            'url' => !empty($service['route']) ? route($service['route']) : route('services'),
        ];
    }
    foreach (config('company.service_pages') as $page) {
        $serviceList[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $page['title'],
            'description' => $page['excerpt'] ?? '',
            'url' => route($page['route']),
        ];
    }
@endphp
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'MarineCaddie Our Services',
    'description' => 'Marine logistics, freight forwarding, customs clearance, special projects, ship spares and vessel husbandry services.',
    'numberOfItems' => count($serviceList),
    'itemListElement' => $serviceList,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
