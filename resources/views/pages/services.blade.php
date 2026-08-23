@extends('layouts.app')

@section('title', 'Our Services')
@section('meta_title', 'Our Services | Marine Logistics & Ship Spares')
@section('meta_description', 'Marine logistics, freight forwarding, customs clearance, special projects, ship spares and port husbandry for India, Sri Lanka, Indonesia, Singapore and beyond.')
@section('meta_keywords', 'marine logistics, ship spares logistics, freight forwarding, customs clearance, special projects, vessel husbandry, port husbandry, air freight, ocean freight')
@section('schema_type', 'CollectionPage')
@section('og_image_alt', 'MarineCaddie maritime logistics services')
@section('header_class', 'scrollHeader')

@section('content')
@php
    $serviceCats = config('company.services', []);
    $servicePages = config('company.service_pages', []);
@endphp

        <!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background services-page-banner" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                        <div class="services-page-banner__content">
                            <nav class="services-page-banner__crumbs" aria-label="Breadcrumb">
                                <a href="{{ route('home') }}">Home</a>
                                <span aria-hidden="true">/</span>
                                <span>Our Services</span>
                            </nav>
                            <p class="services-page-banner__eyebrow">Capabilities</p>
                            <h1 class="services-page-banner__title">Our Services</h1>
                            <p class="services-page-banner__lead">Four service pillars for ship spares, freight, customs, and special projects at global ports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTRO
        ================================================== -->
        <section class="services-intro">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-intro__collage">
                            <div class="services-intro__shot services-intro__shot--main">
                                @include('partials.responsive-img', [
                                    'path' => 'assets/img/content/about-07.jpg',
                                    'alt' => 'Marine logistics operations',
                                    'class' => 'services-intro__img',
                                    'lazy' => true,
                                ])
                            </div>
                            <div class="services-intro__shot services-intro__shot--side">
                                @include('partials.responsive-img', [
                                    'path' => 'assets/img/content/about-06.jpg',
                                    'alt' => 'Port operations and vessel support',
                                    'class' => 'services-intro__img',
                                    'lazy' => true,
                                ])
                            </div>
                            <div class="services-intro__badge" aria-hidden="true">
                                <span class="services-intro__badge-num">4</span>
                                <span class="services-intro__badge-label">Core pillars</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="150ms">
                        <div class="services-intro__copy">
                            <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">What We Deliver</span>
                            <h2 class="display-4 font-weight-800 mb-3 lh-1 ls-minus-2px">{{ config('company.headline') }}</h2>
                            <p class="services-intro__text mb-4">{{ config('company.who_we_are') }} Capabilities span marine logistics, freight forwarding, customs clearance, and special projects—coordinated from Dubai with local execution at key ports.</p>
                            <ul class="services-intro__pillars">
                                @foreach($serviceCats as $service)
                                    <li>{{ $service['title'] }}</li>
                                @endforeach
                            </ul>
                            <div class="services-intro__actions">
                                <a href="#service-categories" class="butn-style01">Explore Capabilities</a>
                                <a href="{{ route('how-we-work') }}" class="services-intro__link">How We Work →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE CATEGORIES
        ================================================== -->
        <section class="services-page-showcase overflow-hidden" id="service-categories">
            <div class="container">
                <div class="services-page-showcase__head text-center mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Service Categories</span>
                    <h2 class="display-5 font-weight-800 mb-3 lh-1 ls-minus-2px">{{ config('company.motto') }}</h2>
                    <p class="lead mb-0 mx-auto services-page-showcase__lead">Door-to-deck ship spares, multimodal freight, customs-ready documentation, and project cargo—built for vessel urgency.</p>
                </div>
                @include('partials.services-categories', ['variant' => 'page'])
            </div>
        </section>

        <!-- SPECIALIZED PAGES
        ================================================== -->
        <section class="services-deep-dive">
            <div class="container">
                <div class="row align-items-end mb-1-9">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Go Deeper</span>
                        <h2 class="display-5 font-weight-800 mb-0 lh-1 ls-minus-1px">Specialized service pages</h2>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0 wow fadeInUp" data-wow-delay="150ms">
                        <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01" data-open-quote="quote">Request a Quote</a>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach($servicePages as $page)
                        <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ 100 + ($loop->index * 60) }}ms">
                            <a href="{{ route('services.show', $page['slug']) }}" class="services-deep-dive__card">
                                <span class="services-deep-dive__media">
                                    @include('partials.responsive-img', [
                                        'path' => $page['image'],
                                        'alt' => $page['title'],
                                        'lazy' => true,
                                    ])
                                </span>
                                <span class="services-deep-dive__body">
                                    <span class="services-deep-dive__title">{{ $page['title'] }}</span>
                                    <span class="services-deep-dive__excerpt">{{ $page['excerpt'] }}</span>
                                    <span class="services-deep-dive__cta">Read more <i class="ti-arrow-top-right" aria-hidden="true"></i></span>
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section class="services-why">
            <div class="container">
                <div class="services-why__frame">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-5 services-why__intro wow fadeInLeft" data-wow-delay="100ms">
                            <span class="services-why__eyebrow">Why MarineCaddie</span>
                            <h2 class="services-why__title">{{ config('company.motto') }}</h2>
                            <p class="services-why__text">{{ config('company.mission') }}</p>
                            <p class="services-why__trust mb-0">Trusted across <strong>{{ config('company.address.short') }}</strong> and global ports.</p>
                        </div>
                        <div class="col-lg-7 services-why__grid wow fadeInRight" data-wow-delay="150ms">
                            @foreach(config('company.why_choose_us') as $index => $why)
                                <article class="services-why__item">
                                    <span class="services-why__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div>
                                        <h3 class="services-why__item-title">{{ $why['title'] }}</h3>
                                        <p class="services-why__item-text mb-0">{{ $why['text'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA
        ================================================== -->
        <section class="services-cta-band bg-img cover-background secondary-overlay" data-overlay-dark="9" data-background="{{ theme_webp('assets/img/bg/bg-05.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/bg/bg-05.jpg') }}&quot;);">
            <div class="container">
                <div class="services-cta-band__inner text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="services-cta-band__eyebrow">Let's work together</span>
                    <h2 class="services-cta-band__title">Need ship spares, freight, or customs support?</h2>
                    <p class="services-cta-band__text">Talk with our Dubai operations desk about your next vessel call, urgent spare move, or project cargo requirement.</p>
                    <div class="services-cta-band__actions">
                        <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01 white-hover" data-open-quote="quote">Get a Quote</a>
                        <a href="{{ route('contact') }}" class="services-cta-band__link">Contact Us →</a>
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
            'url' => !empty($service['slug']) ? route('services.show', $service['slug']) : route('services'),
        ];
    }
    foreach (config('company.service_pages') as $page) {
        $serviceList[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $page['title'],
            'description' => $page['excerpt'] ?? '',
            'url' => !empty($page['slug']) ? route('services.show', $page['slug']) : route('services'),
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
