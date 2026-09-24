@extends('layouts.app')

@section('title', 'Contact')
@section('meta_title', 'Contact MarineCaddie Shipping | Dubai Ops Team')
@section('meta_description', 'Contact MarineCaddie Shipping LLC in Deira, Dubai. Email ops@marinecaddie.com for ship spares, freight, customs, and port husbandry.')
@section('meta_keywords', 'contact MarineCaddie, Dubai shipping company, maritime logistics contact, ops@marinecaddie.com, Deira Dubai')
@section('schema_type', 'ContactPage')
@section('header_class', 'scrollHeader')

@php
    $mapQuery = rawurlencode(config('company.address.map_query'));
    $googleLink = "https://www.google.com/maps/search/?api=1&query={$mapQuery}";
    $presenceMap = config('company.presence_map', []);
    $presenceLocations = config('company.presence_locations', []);
@endphp

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section contact-page-banner top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/contact-banner.jpg') }}?v=mc4" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/contact-banner.jpg') }}?v=mc4&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('contact') }}#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- GET TO KNOW US / OFFICES
        ================================================== -->
        <section class="contact-know" id="get-to-know-us">
            <div class="container">
                <div class="contact-know__top">
                    <div class="contact-know__intro wow fadeInUp" data-wow-delay="100ms">
                        <span class="contact-know__eyebrow">Get to know us</span>
                        <div class="contact-know__heading">
                            <span class="contact-know__icon">
                                <img
                                    src="{{ theme_asset('assets/img/icons/support-headset.png') }}?v=1"
                                    alt="MarineCaddie customer support — contact our offices worldwide"
                                    title="Contact MarineCaddie support"
                                    width="56"
                                    height="56"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </span>
                            <h2 class="contact-know__title">Contact our offices around the world.</h2>
                        </div>
                        <p class="contact-know__text">{{ config('company.who_we_are') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR PRESENCE
        ================================================== -->
        <section class="contact-presence" id="our-presence" aria-labelledby="our-presence-title">
            <div class="container">
                <div class="contact-presence__head wow fadeInUp" data-wow-delay="100ms">
                    <h2 class="contact-presence__title" id="our-presence-title">Our presence</h2>
                </div>
                <div class="contact-presence__grid">
                    @foreach($presenceLocations as $index => $place)
                        @php
                            $country = trim($place['country'] ?? ($place['label'] ?? ''));
                            $cities = array_values(array_filter($place['cities'] ?? []));
                            $citiesLabel = implode(' | ', $cities);
                            $flag = strtolower((string) ($place['flag'] ?? ''));
                        @endphp
                        <article class="contact-presence-card wow fadeInUp" data-wow-delay="{{ 80 + (($index % 8) * 40) }}ms">
                            <div class="contact-presence-card__header">
                                @if($flag !== '')
                                    <span class="contact-presence-card__flag" aria-hidden="true">
                                        <img src="{{ theme_asset('assets/img/flags/' . $flag . '.svg') }}" alt="" width="28" height="21" loading="lazy">
                                    </span>
                                @endif
                                <h3 class="contact-presence-card__title">{{ $country }}</h3>
                            </div>
                            @if($citiesLabel !== '')
                                <div class="contact-presence-card__cities">{{ $citiesLabel }}</div>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- FORM + DETAILS
        ================================================== -->
        <section class="contact-main">
            <div class="container">
                <div class="contact-main__grid">
                    <div class="contact-form-panel wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-form-panel__head">
                            <span class="contact-form-panel__eyebrow">Send a message</span>
                            <h2 class="contact-form-panel__title">Tell us about your vessel need</h2>
                            <p class="contact-form-panel__text mb-0">Share shipment details, port call timing, or cargo type—our team will respond promptly.</p>
                        </div>
                        <form class="mc-contact-form contact-form" action="{{ route('contact.store') }}" method="post" novalidate>
                            @csrf
                            <input type="hidden" name="form_source" value="Contact page">
                            <div class="quform-elements">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Full name" required>
                                                @error('name')<div class="mc-field-error" role="alert">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="name@company.com" required>
                                                @error('email')<div class="mc-field-error" role="alert">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="subject">Subject <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control @error('subject') is-invalid @enderror" id="subject" type="text" name="subject" value="{{ old('subject') }}" placeholder="Ship spares / customs / husbandry" required>
                                                @error('subject')<div class="mc-field-error" role="alert">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone number">
                                                @error('phone')<div class="mc-field-error" role="alert">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" placeholder="Port, vessel schedule, cargo urgency…" required>{{ old('message') }}</textarea>
                                                @error('message')<div class="mc-field-error" role="alert">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            @include('partials.recaptcha')
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mc-contact-form__status" role="alert" aria-live="polite" hidden></div>
                                        <div class="quform-submit-inner">
                                            <button class="butn-style01 w-100 border-0" type="submit">Send Message</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <aside class="contact-side wow fadeInUp" data-wow-delay="180ms">
                        <div class="contact-side__card">
                            <span class="contact-side__eyebrow">Visit</span>
                            <h3 class="contact-side__title">{{ config('company.legal_name') }}</h3>
                            <p class="contact-side__address mb-1-9">{{ config('company.address.line2') }}</p>
                            <ul class="contact-side__list">
                                <li>
                                    <span>Email</span>
                                    <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                                </li>
                                <li>
                                    <span>Hours</span>
                                    <strong>24/7 operations support</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-side__note">
                            <p class="mb-0">{{ config('company.who_we_are') }}</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- WORLD MAP — PDF Global Coverage coordinates
        ================================================== -->
        <section class="contact-map" aria-label="MarineCaddie global presence map">
            <div class="contact-map__frame" data-map-lock>
                <div
                    id="mc-world-map"
                    class="contact-map__leaflet"
                    role="application"
                    aria-label="Interactive world map of MarineCaddie presence"
                ></div>
                <button type="button" class="contact-map__lock" data-map-unlock aria-label="Click to interact with map">
                    <span>Click to interact with map</span>
                </button>
            </div>
        </section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maplibre-gl@5.6.2/dist/maplibre-gl.css">
<style>
#mc-world-map.maplibregl-map {
  width: 100%;
  height: 100%;
  background: #f2efe9;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
.contact-map__leaflet .maplibregl-ctrl-attrib {
  font-size: 0.65rem;
  background: rgba(4, 33, 88, 0.75);
  color: rgba(255, 255, 255, 0.65);
}
.contact-map__leaflet .maplibregl-ctrl-attrib a {
  color: #F7941D;
}
.contact-map__leaflet .maplibregl-popup-content {
  border-radius: 0;
  margin: 0.75rem 0.9rem;
  font-size: 0.88rem;
  color: #111111;
  line-height: 1.45;
  box-shadow: 0 12px 28px rgba(4, 33, 88, 0.28);
}
.contact-map__leaflet .maplibregl-popup-content strong {
  display: block;
  font-weight: 800;
}
.contact-map__leaflet .maplibregl-popup-content em {
  color: #F7941D;
  font-style: normal;
  font-weight: 700;
  font-size: 0.78rem;
}
body.mc-cinematic-site #main-content .contact-map__leaflet .maplibregl-popup-content,
body.mc-cinematic-site #main-content .contact-map__leaflet .maplibregl-popup-content strong,
body.mc-cinematic-site #main-content .contact-map__leaflet .maplibregl-popup-content span {
  color: #111111 !important;
}
body.mc-cinematic-site #main-content .contact-map__leaflet .maplibregl-popup-content em {
  color: #F7941D !important;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/maplibre-gl@5.6.2/dist/maplibre-gl.js"></script>
<script type="application/json" id="mc-presence-map-data">@json($presenceMap)</script>
<script src="{{ theme_asset('assets/js/contact-map.js') }}?v=20260917map7" defer></script>
@endpush
