@extends('layouts.app')

@section('title', 'Contact')
@section('meta_title', 'Contact MarineCaddie Shipping | Dubai Ops Team')
@section('meta_description', 'Contact MarineCaddie Shipping LLC in Deira, Dubai. Email ops@marinecaddie.com or call +971 50 5643375 for ship spares, freight, customs, and port husbandry.')
@section('meta_keywords', 'contact MarineCaddie, Dubai shipping company, maritime logistics contact, ops@marinecaddie.com, Al Safi Building Deira')
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
                    <h2 class="contact-presence__title" id="our-presence-title">Overview of all our presence</h2>
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
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Full name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="email" name="email" placeholder="name@company.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="subject">Subject <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Ship spares / customs / husbandry" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="+971 …">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Port, vessel schedule, cargo urgency…" required></textarea>
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
                            <p class="contact-side__address mb-1-9">{{ config('company.address.line1') }}<br>{{ config('company.address.line2') }}</p>
                            <ul class="contact-side__list">
                                <li>
                                    <span>Phone</span>
                                    <a href="tel:{{ config('company.phone_tel') }}">{{ config('company.phone_display') }}</a>
                                </li>
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
<link rel="stylesheet" href="{{ theme_asset('assets/vendor/leaflet/leaflet.css') }}?v=194">
<style>
/* Ensure Leaflet root (same element as #mc-world-map) fills the frame */
#mc-world-map.leaflet-container {
  width: 100%;
  height: 100%;
  background: #d6e0ea;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
</style>
@endpush

@push('scripts')
<script src="{{ theme_asset('assets/vendor/leaflet/leaflet.js') }}?v=194"></script>
<script type="application/json" id="mc-presence-map-data">@json($presenceMap)</script>
<script>
(function () {
    var wrap = document.querySelector('.contact-map [data-map-lock]');
    var unlock = wrap && wrap.querySelector('[data-map-unlock]');
    var el = document.getElementById('mc-world-map');
    if (!wrap || !el || typeof L === 'undefined') {
        if (el) el.innerHTML = '<p style="color:#fff;padding:2rem;text-align:center;margin:0;">Map failed to load. Please refresh.</p>';
        return;
    }

    var locations = [];
    var dataEl = document.getElementById('mc-presence-map-data');
    try {
        locations = JSON.parse((dataEl && dataEl.textContent) || '[]');
    } catch (e) {
        locations = [];
    }

    var map = L.map(el, {
        scrollWheelZoom: false,
        zoomControl: true,
        attributionControl: true,
        worldCopyJump: true,
        minZoom: 1,
        maxZoom: 10,
        zoomSnap: 0.25,
        zoomDelta: 0.5,
    });

    // Light, high-contrast basemap so continents read clearly (dark Carto looked blank)
    var tiles = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19,
    });
    tiles.on('tileerror', function () {
        if (map._mcFallbackTiles) return;
        map._mcFallbackTiles = true;
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap',
            maxZoom: 19,
        }).addTo(map);
    });
    tiles.addTo(map);

    function makePinIcon(isHq) {
        return L.divIcon({
            className: 'mc-map-pin-wrap' + (isHq ? ' is-hq' : ''),
            html: '<span class="mc-map-pin' + (isHq ? ' mc-map-pin--hq' : '') + '" aria-hidden="true"><span class="mc-map-pin__dot"></span></span>',
            iconSize: isHq ? [36, 48] : [30, 40],
            iconAnchor: isHq ? [18, 48] : [15, 40],
            popupAnchor: [0, isHq ? -42 : -36],
        });
    }

    var bounds = [];
    locations.forEach(function (loc) {
        if (loc.lat == null || loc.lng == null) return;
        var latlng = [Number(loc.lat), Number(loc.lng)];
        bounds.push(latlng);
        var isHq = !!loc.hq;
        var title = (loc.label || '') + (loc.city ? ' · ' + loc.city : '');
        var popup = '<strong>' + (loc.label || 'Presence') + '</strong>' +
            (loc.city ? '<br><span>' + loc.city + '</span>' : '') +
            (isHq ? '<br><em>Head Office</em>' : '');
        L.marker(latlng, {
            icon: makePinIcon(isHq),
            title: title,
            riseOnHover: true,
            zIndexOffset: isHq ? 500 : 100,
        }).addTo(map).bindPopup(popup);
    });

    if (bounds.length) {
        // Tightest zoom that still keeps every presence pin in frame
        map.fitBounds(bounds, {
            paddingTopLeft: [20, 24],
            paddingBottomRight: [20, 96],
            maxZoom: 6,
            animate: false,
        });
    } else {
        map.setView([20, 40], 3);
    }

    function refreshSize() {
        map.invalidateSize(true);
    }
    setTimeout(refreshSize, 50);
    setTimeout(refreshSize, 300);
    setTimeout(refreshSize, 800);
    window.addEventListener('resize', refreshSize);

    if (unlock) {
        unlock.addEventListener('click', function () {
            wrap.classList.add('is-unlocked');
            map.scrollWheelZoom.enable();
            map.dragging.enable();
            refreshSize();
        });
    }

    document.addEventListener('click', function (e) {
        if (!wrap.contains(e.target)) {
            wrap.classList.remove('is-unlocked');
            map.scrollWheelZoom.disable();
        }
    });
})();
</script>
@endpush
