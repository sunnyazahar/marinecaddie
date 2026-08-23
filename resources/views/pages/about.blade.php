@extends('layouts.app')

@section('title', 'About Us')
@section('meta_title', 'About MarineCaddie | Dubai Marine Logistics')
@section('meta_description', 'MarineCaddie Shipping LLC provides time-critical ship spare logistics, vessel husbandry, freight forwarding, and customs clearance from Dubai to global ports.')
@section('schema_type', 'AboutPage')
@section('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')
@section('header_class', 'scrollHeader')

@section('content')
@php
    $serviceCats = config('company.services', []);
@endphp

        <!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay about-page-banner" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="about-page-banner__eyebrow">Who We Are</p>
                        <h1>About MarineCaddie</h1>
                        <p class="about-page-banner__lead">{{ config('company.tagline') }} Maritime logistics caddies from Dubai to global ports.</p>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- STORY
        ================================================== -->
        <section class="about-story">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-story__collage">
                            <div class="about-story__shot about-story__shot--main">
                                @include('partials.responsive-img', [
                                    'path' => 'assets/img/content/about-04.jpg',
                                    'alt' => 'MarineCaddie maritime logistics operations',
                                    'class' => 'about-story__img',
                                    'lazy' => true,
                                ])
                            </div>
                            <div class="about-story__shot about-story__shot--side">
                                @include('partials.responsive-img', [
                                    'path' => 'assets/img/content/about-05.jpg',
                                    'alt' => 'Port and vessel coordination',
                                    'class' => 'about-story__img',
                                    'lazy' => true,
                                ])
                            </div>
                            <div class="about-story__badge" aria-hidden="true">
                                <span class="about-story__badge-num">24/7</span>
                                <span class="about-story__badge-label">Ops Desk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="150ms">
                        <div class="about-story__copy">
                            <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">{{ config('company.legal_name') }}</span>
                            <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px">{{ config('company.headline') }}</h2>
                            <p class="about-story__tagline">{{ config('company.tagline') }}</p>
                            <p class="about-story__text mb-4">{{ config('company.who_we_are') }} From ship spares and door-to-deck delivery to freight, customs, and vessel husbandry—we keep fleets moving with schedule-first coordination.</p>
                            <div class="about-story__stats">
                                <div class="about-story__stat">
                                    <strong>16+</strong>
                                    <span>Presence markets</span>
                                </div>
                                <div class="about-story__stat">
                                    <strong>4</strong>
                                    <span>Core service pillars</span>
                                </div>
                                <div class="about-story__stat">
                                    <strong>Dubai</strong>
                                    <span>HQ operations</span>
                                </div>
                            </div>
                            <div class="about-story__actions">
                                <a class="butn-style01" href="{{ route('contact') }}">Talk to Us</a>
                                <a class="about-story__link" href="{{ route('mission-vision') }}">Mission &amp; Vision →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section class="about-motto-split" id="why-choose-us">
            <div class="container">
                <div class="row g-0 about-motto-split__frame align-items-stretch overflow-hidden">
                    <div class="col-lg-5 about-motto-split__media wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-motto-split__visual">
                            @include('partials.responsive-img', [
                                'path' => 'assets/img/content/marine-logistics.jpg',
                                'alt' => 'MarineCaddie maritime logistics operations',
                                'title' => 'MarineCaddie maritime logistics operations',
                                'lazy' => true,
                            ])
                            <div class="about-motto-split__visual-overlay" aria-hidden="true"></div>
                            <div class="about-motto-split__visual-content">
                                <span class="about-motto-split__eyebrow">Why Choose Us</span>
                                <h2 class="about-motto-split__headline">{{ config('company.motto') }}</h2>
                                <p class="about-motto-split__support">{{ config('company.tagline') }} Practical maritime logistics built around vessel urgency.</p>
                                <a href="{{ route('contact') }}" class="butn-style01 white-hover">Talk to Operations</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 about-motto-split__panel wow fadeInRight" data-wow-delay="150ms">
                        <div class="about-motto-split__panel-inner">
                            <div class="about-motto-split__list">
                                @foreach(config('company.why_choose_us') as $index => $item)
                                <div class="about-motto-split__item">
                                    <span class="about-motto-split__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div class="about-motto-split__item-body">
                                        <h3 class="about-motto-split__item-title">{{ $item['title'] }}</h3>
                                        <p class="about-motto-split__item-text">{{ $item['text'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="about-motto-split__office">
                                <div>
                                    <span class="about-motto-split__office-label">{{ config('company.legal_name') }}</span>
                                    <p class="mb-0">{{ config('company.address.line1') }}<br>{{ config('company.address.line2') }}</p>
                                </div>
                                <div class="about-motto-split__office-links">
                                    <a href="tel:{{ config('company.phone_tel') }}">{{ config('company.phone_display') }}</a>
                                    <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES SNAPSHOT
        ================================================== -->
        <section class="about-services-snap">
            <div class="container">
                <div class="row align-items-end mb-1-9">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">What We Do</span>
                        <h2 class="display-5 font-weight-800 mb-0 lh-1 ls-minus-2px">Four pillars. One accountable desk.</h2>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('services') }}" class="butn-style01">All Services</a>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach($serviceCats as $key => $svc)
                        @php
                            $href = !empty($svc['slug']) ? route('services.show', $svc['slug']) : route('services');
                        @endphp
                        <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ 100 + ($loop->index * 70) }}ms">
                            <a href="{{ $href }}" class="about-services-snap__card">
                                <div class="about-services-snap__media">
                                    @include('partials.responsive-img', [
                                        'path' => $svc['image'] ?? 'assets/img/content/marine-logistics.jpg',
                                        'alt' => $svc['title'],
                                        'lazy' => true,
                                    ])
                                    <span class="about-services-snap__num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                                <div class="about-services-snap__body">
                                    <h3 class="about-services-snap__title">{{ $svc['title'] }}</h3>
                                    <p class="about-services-snap__excerpt">{{ $svc['excerpt'] ?? '' }}</p>
                                    <span class="about-services-snap__cta">Explore <i class="ti-arrow-top-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA
        ================================================== -->
        <section class="about-cta-band bg-img cover-background secondary-overlay" data-overlay-dark="9" data-background="{{ theme_webp('assets/img/bg/bg-05.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/bg/bg-05.jpg') }}&quot;);">
            <div class="container">
                <div class="about-cta-band__inner text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="about-cta-band__eyebrow">Ready when your vessel is</span>
                    <h2 class="about-cta-band__title">{{ config('company.motto') }}</h2>
                    <p class="about-cta-band__text">Share shipment details, port timing, or cargo type—our Dubai desk responds promptly.</p>
                    <div class="about-cta-band__actions">
                        <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01 white-hover" data-open-quote="quote">Get a Quote</a>
                        <a href="tel:{{ config('company.phone_tel') }}" class="about-cta-band__phone">{{ config('company.phone_display') }}</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
