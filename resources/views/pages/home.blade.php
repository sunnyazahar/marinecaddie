@extends('layouts.app')

@section('title', 'Marine Logistics & Freight Forwarding')
@section('meta_title', config('seo.home_title'))
@section('meta_description', config('seo.home_description'))
@section('schema_type', 'WebPage')
@section('og_image_alt', 'MarineCaddie ship spare logistics and marine agency services')
@section('header_class', 'fixedHeader')

@section('content')
@php
    $services = config('company.services', []);
@endphp
{{-- Cinematic gate stage — height reserved from first paint (CLS-safe) --}}
<section class="mc-cinematic" id="mc-cinematic" aria-label="MarineCaddie">
    <div class="mc-cinematic__stage">
        {{-- Ocean layer (existing hero video / poster) --}}
        <div class="mc-cinematic__ocean mc-hero secondary-overlay" data-overlay-dark="7" aria-hidden="true">
            <style>
                .mc-cinematic__ocean.mc-hero {
                    background-color: #000;
                    background-image: url('{{ theme_asset('assets/img/banner/hero-pexels-poster-mobile.webp') }}?v=pexels4');
                }
                @media (min-width: 992px) {
                    .mc-cinematic__ocean.mc-hero {
                        background-image: url('{{ theme_webp('assets/img/banner/hero-pexels-poster.jpg') }}?v=pexels4');
                    }
                }
            </style>
            <div class="banner-video">
                <video id="mc-hero-video" muted loop playsinline webkit-playsinline autoplay preload="auto"></video>
                <script>
                  (function () {
                    var v = document.getElementById('mc-hero-video');
                    if (!v) return;
                    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                      v.removeAttribute('autoplay');
                      return;
                    }
                    var mobile = @json(theme_asset('assets/video/hero-pexels-mobile.mp4') . '?v=pexels4');
                    var desktop = @json(theme_asset('assets/video/hero-pexels.mp4') . '?v=pexels4');
                    var isMobile = window.matchMedia && window.matchMedia('(max-width: 991.98px)').matches;
                    v.poster = isMobile
                      ? @json(theme_asset('assets/img/banner/hero-pexels-poster-mobile.webp') . '?v=pexels4')
                      : @json(theme_webp('assets/img/banner/hero-pexels-poster.jpg') . '?v=pexels4');
                    var s = document.createElement('source');
                    s.src = isMobile ? mobile : desktop;
                    s.type = 'video/mp4';
                    v.appendChild(s);
                    v.muted = true;
                    v.defaultMuted = true;
                    v.setAttribute('playsinline', '');
                    v.setAttribute('webkit-playsinline', '');
                    v.load();
                    var p = v.play();
                    if (p && typeof p.catch === 'function') p.catch(function () {});
                  })();
                </script>
            </div>
        </div>

        <div class="mc-cinematic__gates" aria-hidden="true">
            <div class="mc-cinematic__gate mc-cinematic__gate--left">
                <img class="mc-cinematic__scene" src="{{ theme_webp('assets/img/banner/gate-scene.jpg') }}?v=real6" width="1728" height="1152" alt="">
                <span class="mc-cinematic__gate-word">Marine</span>
            </div>
            <div class="mc-cinematic__gate mc-cinematic__gate--right">
                <img class="mc-cinematic__scene" src="{{ theme_webp('assets/img/banner/gate-scene.jpg') }}?v=real6" width="1728" height="1152" alt="">
                <span class="mc-cinematic__gate-word">Caddie</span>
            </div>
        </div>

        {{-- Brand + service hub, anchored low so the sky stays open --}}
        <div class="mc-cinematic__hub">
            <div class="mc-cinematic__brand">
                <p class="mc-cinematic__kicker">{{ config('company.tagline') }}</p>
                <h1 class="mc-cinematic__headline">{{ config('company.headline') }}</h1>
                <p class="mc-cinematic__motto">{{ config('company.motto') }}</p>
            </div>

            <nav class="mc-cinematic__services" aria-label="Select a service">
                @foreach($services as $key => $service)
                    @php
                        $href = $key === 'freight_forwarding'
                            ? route('services.show', 'air-freight')
                            : (!empty($service['slug'])
                                ? route('services.show', $service['slug'])
                                : route('services'));
                        $short = match ($key) {
                            'freight_forwarding' => 'Freight',
                            'customs_clearance' => 'Customs',
                            default => $service['title'],
                        };
                        $icon = match ($key) {
                            'marine_logistics' => 'vessel-husbandry',
                            'freight_forwarding' => 'ocean-freight',
                            'customs_clearance' => 'customs',
                            default => 'ship-spares',
                        };
                    @endphp
                    <a href="{{ $href }}" class="mc-cinematic__service" data-service="{{ $key }}">
                        <span class="mc-cinematic__service-ico">
                            <img src="{{ theme_webp('assets/img/nav-icons/'.$icon.'.png') }}" width="40" height="40" alt="">
                        </span>
                        <span class="mc-cinematic__service-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="mc-cinematic__service-title">{{ $short }}</span>
                        <span class="mc-cinematic__service-hint">{{ \Illuminate\Support\Str::limit($service['excerpt'] ?? '', 72) }}</span>
                    </a>
                @endforeach
            </nav>

            <div class="mc-cinematic__cta">
                <a href="{{ route('services') }}" class="mc-cinematic__all">View all services</a>
            </div>
        </div>

        <div class="mc-cinematic-trust" aria-label="Why MarineCaddie">
            <div class="container">
                <ul class="mc-cinematic-trust__list">
                    <li>
                        <span class="mc-cinematic-trust__label">24/7</span>
                        <span class="mc-cinematic-trust__text">Round-the-clock vessel support</span>
                    </li>
                    <li>
                        <span class="mc-cinematic-trust__label">Door-to-deck</span>
                        <span class="mc-cinematic-trust__text">Spares to the vessel, on schedule</span>
                    </li>
                    <li>
                        <span class="mc-cinematic-trust__label">Global ports</span>
                        <span class="mc-cinematic-trust__text">Coverage where your fleet calls</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
