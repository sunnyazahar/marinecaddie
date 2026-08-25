@extends('layouts.app')

@section('title', $service['title'])
@section('meta_title', $service['meta_title'])
@section('meta_description', $service['meta_description'])
@section('meta_keywords', $service['meta_keywords'])
@section('canonical', route('services.show', $service['slug']))
@section('schema_type', 'Service')
@section('service_name', $service['title'])
@section('og_image', theme_webp($service['hero_image']))
@section('og_image_alt', $service['title'] . ' — MarineCaddie')
@section('header_class', 'scrollHeader')

@section('content')
        <section class="svc-page-hero" style="--svc-hero-image: url({{ theme_webp($service['hero_image']) }});">
            <div class="svc-page-hero__shade" aria-hidden="true"></div>
            <div class="container position-relative">
                <nav class="svc-page-crumbs" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span>/</span>
                    <a href="{{ route('services') }}">Services</a>
                    <span>/</span>
                    <span>{{ $service['title'] }}</span>
                </nav>
                <p class="svc-page-hero__eyebrow">{{ $service['category_title'] }}</p>
                <h1 class="svc-page-hero__title">{{ $service['title'] }}</h1>
                <p class="svc-page-hero__excerpt">{{ $service['excerpt'] }}</p>
                <div class="svc-page-hero__actions">
                    <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01" data-open-quote="quote">Get Quote</a>
                    <a href="tel:{{ config('company.phone_tel') }}" class="svc-page-hero__ghost">{{ config('company.phone_display') }}</a>
                </div>
            </div>
        </section>

        <section class="svc-page-trust">
            <div class="container">
                <div class="svc-page-trust__grid">
                    <div class="svc-page-trust__item">
                        <span class="svc-page-trust__num">01</span>
                        <h2 class="svc-page-trust__label">24/7 Ops Desk</h2>
                        <p>Responsive coordination when vessel schedules shift.</p>
                    </div>
                    <div class="svc-page-trust__item">
                        <span class="svc-page-trust__num">02</span>
                        <h2 class="svc-page-trust__label">Global Port Reach</h2>
                        <p>Coverage and partners across key maritime hubs.</p>
                    </div>
                    <div class="svc-page-trust__item">
                        <span class="svc-page-trust__num">03</span>
                        <h2 class="svc-page-trust__label">Door-to-Deck Mindset</h2>
                        <p>From supplier pickup to onboard handover.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-page-main">
            <div class="container">
                <div class="row g-4 g-xl-5">
                    <div class="col-lg-8">
                        <article class="svc-page-panel wow fadeInUp" data-wow-delay="100ms">
                            <h2 class="svc-page-panel__heading">Overview</h2>
                            <p class="svc-page-panel__lead">{{ $service['intro'] }}</p>
                        </article>

                        <article class="svc-page-panel wow fadeInUp" data-wow-delay="150ms">
                            <h2 class="svc-page-panel__heading">What you get</h2>
                            <ul class="svc-page-highlights">
                                @foreach($service['highlights'] ?? [] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </article>

                        <article class="svc-page-panel wow fadeInUp" data-wow-delay="200ms">
                            <h2 class="svc-page-panel__heading">How we deliver</h2>
                            <div class="svc-page-process">
                                @foreach($service['process'] ?? [] as $step)
                                    <div class="svc-page-process__step">
                                        <span class="svc-page-process__num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                        <div>
                                            <h3>{{ $step['title'] }}</h3>
                                            <p>{{ $step['text'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>

                        @if(!empty($service['gallery']))
                            <div class="svc-page-gallery wow fadeInUp" data-wow-delay="220ms">
                                @foreach($service['gallery'] as $image)
                                    <figure>
                                        <img src="{{ theme_asset($image) }}" alt="{{ $service['title'] }}" title="{{ $service['title'] }}" loading="lazy">
                                    </figure>
                                @endforeach
                            </div>
                        @endif

                        @if(!empty($service['faqs']))
                            <article class="svc-page-panel wow fadeInUp" data-wow-delay="250ms">
                                <h2 class="svc-page-panel__heading">FAQs</h2>
                                <div class="accordion svc-page-faq" id="svcFaq">
                                    @foreach($service['faqs'] as $faq)
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="svcFaqH{{ $loop->iteration }}">
                                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#svcFaqC{{ $loop->iteration }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="svcFaqC{{ $loop->iteration }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h3>
                                            <div id="svcFaqC{{ $loop->iteration }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="svcFaqH{{ $loop->iteration }}" data-bs-parent="#svcFaq">
                                                <div class="accordion-body">{{ $faq['a'] }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </article>
                        @endif
                    </div>

                    <div class="col-lg-4">
                        <aside class="svc-page-aside">
                            <div class="svc-page-aside__card">
                                <h2 class="svc-page-aside__title text-white">{{ $service['category_title'] }}</h2>
                                <ul class="svc-page-aside__list">
                                    @foreach($siblings as $sibling)
                                        <li class="{{ $sibling['slug'] === $service['slug'] ? 'is-active' : '' }}">
                                            <a href="{{ route('services.show', $sibling['slug']) }}">
                                                {{ $sibling['title'] }}
                                                <i class="ti-arrow-top-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="svc-page-aside__help">
                                <p class="svc-page-aside__help-label">Need this service?</p>
                                <a href="tel:{{ config('company.phone_tel') }}" class="svc-page-aside__phone">{{ config('company.phone_display') }}</a>
                                <a href="mailto:{{ config('company.email') }}" class="svc-page-aside__mail">{{ config('company.email') }}</a>
                                <a href="{{ route('contact') }}" class="butn-style01 w-100 text-center mt-3">Talk to operations</a>
                            </div>

                            @if(!empty($related))
                                <div class="svc-page-aside__card svc-page-aside__card--related">
                                    <h2 class="svc-page-aside__title">Related services</h2>
                                    <ul class="svc-page-aside__related">
                                        @foreach($related as $rel)
                                            <li>
                                                <a href="{{ route('services.show', $rel['slug']) }}">{{ $rel['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-page-cta">
            <div class="container text-center">
                <p class="svc-page-cta__eyebrow">{{ config('company.tagline') }}</p>
                <h2 class="svc-page-cta__title text-white">{{ config('company.motto') }}</h2>
                <p class="svc-page-cta__text">Tell us the vessel, port, and timeline—we’ll propose the fastest compliant path.</p>
                <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01" data-open-quote="quote">Get Quote</a>
            </div>
        </section>
@endsection
