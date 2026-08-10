@extends('layouts.app')

@section('title', 'Contact')
@section('meta_title', 'Contact MarineCaddie Shipping | Dubai Ops Team')
@section('meta_description', 'Contact MarineCaddie Shipping LLC in Deira, Dubai. Email ops@marinecaddie.com or call +971 50 5643375 for ship spares, freight, customs, and port husbandry.')
@section('meta_keywords', 'contact MarineCaddie, Dubai shipping company, maritime logistics contact, ops@marinecaddie.com, Al Safi Building Deira')
@section('schema_type', 'ContactPage')
@section('header_class', 'scrollHeader')

@php
    $mapLat = (float) config('company.address.lat');
    $mapLng = (float) config('company.address.lng');
    $mapZoom = (int) config('company.address.map_zoom', 15);
    $delta = 0.012;
    $bbox = implode(',', [
        $mapLng - $delta,
        $mapLat - $delta,
        $mapLng + $delta,
        $mapLat + $delta,
    ]);
    $mapQuery = rawurlencode(config('company.address.map_query'));
    $osmEmbed = "https://www.openstreetmap.org/export/embed.html?bbox={$bbox}&layer=mapnik&marker={$mapLat}%2C{$mapLng}";
    $osmLink = "https://www.openstreetmap.org/?mlat={$mapLat}&mlon={$mapLng}#map={$mapZoom}/{$mapLat}/{$mapLng}";
    $googleLink = "https://www.google.com/maps/search/?api=1&query={$mapQuery}";
@endphp

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
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

        <!-- INTRO + QUICK CONTACTS
        ================================================== -->
        <section class="contact-intro">
            <div class="container">
                <div class="row justify-content-center text-center mb-1-9 mb-lg-2-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <p class="contact-intro__brand">{{ config('company.brand') }}</p>
                        <h2 class="contact-intro__title display-4 font-weight-800 lh-1 ls-minus-2px mb-3">Talk to operations</h2>
                        <p class="contact-intro__text lead mb-0 mx-auto">{{ config('company.motto') }} Reach us for ship spare logistics, freight, customs clearance, or vessel husbandry.</p>
                    </div>
                </div>
                <div class="contact-quick">
                    <a href="tel:{{ config('company.phone_tel') }}" class="contact-quick__card wow fadeInUp" data-wow-delay="120ms">
                        <span class="contact-quick__label">Phone</span>
                        <strong class="contact-quick__value">{{ config('company.phone_display') }}</strong>
                        <span class="contact-quick__hint">Call operations</span>
                    </a>
                    <a href="mailto:{{ config('company.email') }}" class="contact-quick__card wow fadeInUp" data-wow-delay="180ms">
                        <span class="contact-quick__label">Email</span>
                        <strong class="contact-quick__value">{{ config('company.email') }}</strong>
                        <span class="contact-quick__hint">24/7 coordination</span>
                    </a>
                    <div class="contact-quick__card wow fadeInUp" data-wow-delay="240ms">
                        <span class="contact-quick__label">Office</span>
                        <strong class="contact-quick__value">{{ config('company.address.short') }}</strong>
                        <span class="contact-quick__hint">{{ config('company.legal_name') }}</span>
                    </div>
                    <a href="{{ config('company.website') }}" class="contact-quick__card wow fadeInUp" data-wow-delay="300ms" target="_blank" rel="noopener">
                        <span class="contact-quick__label">Web</span>
                        <strong class="contact-quick__value">marinecaddie.com</strong>
                        <span class="contact-quick__hint">{{ config('company.tagline') }}</span>
                    </a>
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
                        <form class="contact quform contact-form" action="#" method="post" enctype="multipart/form-data">
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
                            <div class="contact-side__actions">
                                <a href="{{ $googleLink }}" class="butn-style01" target="_blank" rel="noopener">Open in Google Maps</a>
                                <a href="{{ $osmLink }}" class="contact-side__link" target="_blank" rel="noopener">View on OpenStreetMap</a>
                            </div>
                        </div>
                        <div class="contact-side__note">
                            <p class="mb-0">{{ config('company.who_we_are') }}</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <section class="contact-map" aria-label="Office location map">
            <div class="contact-map__frame" data-map-lock>
                <iframe
                    title="MarineCaddie office map — {{ config('company.address.short') }}"
                    src="{{ $osmEmbed }}"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    tabindex="-1"
                ></iframe>
                <button type="button" class="contact-map__lock" data-map-unlock aria-label="Click to interact with map">
                    <span>Click to interact with map</span>
                </button>
                <div class="contact-map__chip">
                    <span class="contact-map__chip-label">Our office</span>
                    <strong>{{ config('company.address.line1') }}</strong>
                    <span>{{ config('company.address.line2') }}</span>
                    <a href="{{ $googleLink }}" target="_blank" rel="noopener">Get directions →</a>
                </div>
            </div>
        </section>
@endsection

@push('scripts')
<script>
(function () {
    document.querySelectorAll('[data-map-lock]').forEach(function (wrap) {
        var unlock = wrap.querySelector('[data-map-unlock]');
        var iframe = wrap.querySelector('iframe');
        if (!unlock || !iframe) return;

        unlock.addEventListener('click', function () {
            wrap.classList.add('is-unlocked');
            iframe.focus();
        });

        document.addEventListener('click', function (e) {
            if (!wrap.contains(e.target)) {
                wrap.classList.remove('is-unlocked');
            }
        });
    });
})();
</script>
@endpush
