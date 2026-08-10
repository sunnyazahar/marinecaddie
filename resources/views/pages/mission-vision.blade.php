@extends('layouts.app')

@section('title', 'Our Mission & Vision')
@section('meta_title', 'Mission & Vision | MarineCaddie Shipping LLC')
@section('meta_description', 'Discover MarineCaddie’s mission and vision: reliable, time-critical maritime logistics that keep vessels moving, and a commitment to becoming the most trusted global maritime logistics partner.')
@section('meta_keywords', 'MarineCaddie mission, MarineCaddie vision, maritime logistics partner, ship spare logistics values, Dubai marine logistics')
@section('schema_type', 'AboutPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Mission &amp; Vision</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                            <li><a href="{{ route('mission-vision') }}#">Mission &amp; Vision</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTRO
        ================================================== -->
        <section class="mv-intro">
            <div class="container">
                <div class="mv-intro__inner text-center wow fadeInUp" data-wow-delay="100ms">
                    <p class="mv-intro__brand">{{ config('company.brand') }}</p>
                    <h2 class="mv-intro__title display-4 font-weight-800 lh-1 ls-minus-2px mb-3">What steers every voyage we support</h2>
                    <p class="mv-intro__text lead mb-0 mx-auto">{{ config('company.tagline') }} {{ config('company.motto') }}</p>
                </div>
            </div>
        </section>

        <!-- MISSION + VISION STAGE
        ================================================== -->
        <section class="mv-stage" aria-label="Mission and Vision">
            <div class="container">
                <div class="mv-stage__grid">
                    <article class="mv-panel mv-panel--mission wow fadeInUp" data-wow-delay="150ms" id="mission">
                        <div class="mv-panel__mark" aria-hidden="true">01</div>
                        <div class="mv-panel__media">
                            <img src="{{ theme_asset('assets/img/content/about-04.jpg') }}" alt="Marine logistics operations supporting vessel efficiency" loading="lazy">
                        </div>
                        <div class="mv-panel__body">
                            <span class="mv-panel__eyebrow">Our Mission</span>
                            <h3 class="mv-panel__heading">Keep vessels operating. Deliver exceptional service.</h3>
                            <p class="mv-panel__statement">{{ config('company.mission') }}</p>
                            <ul class="mv-panel__focus">
                                @foreach (config('company.mission_focus') as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>

                    <article class="mv-panel mv-panel--vision wow fadeInUp" data-wow-delay="250ms" id="vision">
                        <div class="mv-panel__mark" aria-hidden="true">02</div>
                        <div class="mv-panel__media">
                            <img src="{{ theme_asset('assets/img/content/about-05.jpg') }}" alt="Global maritime network and trusted logistics partnership" loading="lazy">
                        </div>
                        <div class="mv-panel__body">
                            <span class="mv-panel__eyebrow">Our Vision</span>
                            <h3 class="mv-panel__heading">The most trusted maritime logistics partner.</h3>
                            <p class="mv-panel__statement">{{ config('company.vision') }}</p>
                            <ul class="mv-panel__focus">
                                @foreach (config('company.vision_focus') as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- HOW WE LIVE IT
        ================================================== -->
        <section class="mv-commit">
            <div class="container">
                <div class="row justify-content-center mb-1-9 mb-lg-2-5">
                    <div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="100ms">
                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">How we live it</span>
                        <h2 class="display-5 font-weight-800 mb-0 lh-1 ls-minus-1px text-secondary">Principles that shape every shipment and port call</h2>
                    </div>
                </div>
                <div class="mv-commit__grid">
                    @foreach (config('company.why_choose_us') as $index => $item)
                        <article class="mv-commit__card wow fadeInUp" data-wow-delay="{{ 120 + ($index * 60) }}ms">
                            <span class="mv-commit__num">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <h3 class="mv-commit__title">{{ $item['title'] }}</h3>
                            <p class="mv-commit__text mb-0">{{ $item['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA
        ================================================== -->
        <section class="mv-cta">
            <div class="container">
                <div class="mv-cta__band wow fadeInUp" data-wow-delay="100ms">
                    <div class="mv-cta__copy">
                        <p class="mv-cta__eyebrow mb-2">Ready when your vessel is</p>
                        <h2 class="mv-cta__title mb-2">{{ config('company.motto') }}</h2>
                        <p class="mv-cta__text mb-0">Talk to operations about ship spares, customs, freight, or port husbandry anywhere your fleet calls.</p>
                    </div>
                    <div class="mv-cta__actions">
                        <a href="{{ route('contact') }}" class="butn-style01">Talk to Operations</a>
                        <a href="{{ route('services') }}" class="butn-style01 white-hover">Explore Services</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
