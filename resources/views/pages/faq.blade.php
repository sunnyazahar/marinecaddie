@extends('layouts.app')

@section('title', 'FAQ')
@section('meta_title', 'FAQ | MarineCaddie Maritime Logistics Questions')
@section('meta_description', 'Answers about MarineCaddie ship spares logistics, customs clearance, vessel husbandry, freight forwarding, and how to contact our Dubai operations team.')
@section('meta_keywords', 'MarineCaddie FAQ, ship spares FAQ, customs clearance, vessel husbandry, maritime logistics')
@section('schema_type', 'FAQPage')
@section('header_class', 'scrollHeader')

@section('content')
@php
    $faqs = [
        [
            'id' => 'faq-1',
            'question' => 'What does MarineCaddie do?',
            'answer' => config('company.who_we_are'),
            'tag' => 'Overview',
            'icon' => 'fa-anchor',
        ],
        [
            'id' => 'faq-2',
            'question' => 'How do ship spares logistics work?',
            'answer' => 'We provide ' . strtolower(implode(', ', config('company.ship_spare_logistics'))) . '. A typical flow is ' . collect(config('company.ship_spare_flow'))->pluck('label')->implode(' → ') . '.',
            'tag' => 'Ship Spares',
            'icon' => 'fa-boxes-stacked',
        ],
        [
            'id' => 'faq-3',
            'question' => 'What customs clearance services are available?',
            'answer' => 'Our ' . config('company.services.customs_clearance.title') . ' offering includes ' . collect(config('company.services.customs_clearance.items'))->pluck('label')->implode(', ') . '.',
            'tag' => 'Customs',
            'icon' => 'fa-file-circle-check',
        ],
        [
            'id' => 'faq-4',
            'question' => 'Where do you offer vessel husbandry / port support?',
            'answer' => 'Port husbandry focuses on ' . config('company.port_husbandry_regions') . ', covering services such as ' . implode(', ', array_slice(config('company.port_husbandry'), 0, 6)) . ', and more. Global presence: ' . config('company.presence') . '.',
            'tag' => 'Port Support',
            'icon' => 'fa-ship',
        ],
    ];

    $solutions = [
        [
            'title' => 'Ship Spares',
            'price' => 'Custom / Shipment',
            'items' => ['24/7 time-critical coordination', 'Door-to-deck delivery', 'Hand carry & express options', 'Customs clearance support', 'Last-mile onboard delivery'],
            'accent' => false,
        ],
        [
            'title' => 'Freight & Customs',
            'price' => 'Custom / Lane',
            'items' => ['Air, ocean & road freight', 'TP / import / export clearance', 'Duty exemption guidance', 'Multimodal transport', 'Special project cargo support'],
            'accent' => true,
        ],
        [
            'title' => 'Port Husbandry',
            'price' => 'Custom / Call',
            'items' => ['Port agency & crew change', 'Immigration & visa assistance', 'Bunkering & fresh water', 'Ship chandling & repairs', 'Coverage across ' . config('company.port_husbandry_regions')],
            'accent' => false,
        ],
    ];
@endphp

        <!-- BANNER -->
        <section class="page-title-section top-position1 bg-img cover-background faq-page-banner" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                        <div class="faq-page-banner__content">
                            <nav class="faq-page-banner__crumbs" aria-label="Breadcrumb">
                                <a href="{{ route('home') }}">Home</a>
                                <span aria-hidden="true">/</span>
                                <span>FAQ</span>
                            </nav>
                            <p class="faq-page-banner__eyebrow">Help Center</p>
                            <h1 class="faq-page-banner__title">Frequently Asked Questions</h1>
                            <p class="faq-page-banner__lead">Quick answers on ship spares, customs, vessel husbandry, and freight—from your Dubai operations desk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTRO + FAQ -->
        <section class="faq-main">
            <div class="container">
                <div class="row g-4 g-xl-5 align-items-start">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="faq-main__aside">
                            <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Your Questions Answered</span>
                            <h2 class="display-5 font-weight-800 mb-3 lh-1 ls-minus-2px">Maritime logistics, explained clearly</h2>
                            <p class="faq-main__lead mb-4">Whether you need door-to-deck spares, customs clearance, or port husbandry—we coordinate with schedule-first urgency.</p>
                            <div class="faq-main__collage">
                                <div class="faq-main__shot faq-main__shot--main">
                                    @include('partials.responsive-img', [
                                        'path' => 'assets/img/content/faq-02.jpg',
                                        'alt' => 'MarineCaddie maritime logistics FAQ',
                                        'class' => 'faq-main__img',
                                        'lazy' => true,
                                    ])
                                </div>
                                <div class="faq-main__shot faq-main__shot--side">
                                    @include('partials.responsive-img', [
                                        'path' => 'assets/img/content/faq-03.jpg',
                                        'alt' => 'Ship spares and port support',
                                        'class' => 'faq-main__img',
                                        'lazy' => true,
                                    ])
                                </div>
                                <div class="faq-main__badge" aria-hidden="true">
                                    <span class="faq-main__badge-num">24/7</span>
                                    <span class="faq-main__badge-label">Ops Desk</span>
                                </div>
                            </div>
                            <div class="faq-main__quick">
                                <h3 class="faq-main__quick-title">Still need help?</h3>
                                <p class="mb-3">Talk to our operations team for vessel-specific guidance.</p>
                                <a href="tel:{{ config('company.phone_tel') }}" class="faq-main__phone">
                                    <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                                    {{ config('company.phone_display') }}
                                </a>
                                <a href="{{ route('contact') }}" class="butn-style01 mt-3">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="150ms">
                        <div class="faq-accordion" id="faqAccordion">
                            @foreach($faqs as $index => $faq)
                                <article class="faq-accordion__item{{ $index === 0 ? ' is-open' : '' }}">
                                    <h2 class="faq-accordion__heading" id="heading-{{ $faq['id'] }}">
                                        <button class="faq-accordion__trigger{{ $index === 0 ? '' : ' collapsed' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $faq['id'] }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse-{{ $faq['id'] }}">
                                            <span class="faq-accordion__icon" aria-hidden="true"><i class="fa-solid {{ $faq['icon'] }}"></i></span>
                                            <span class="faq-accordion__text">
                                                <span class="faq-accordion__tag">{{ $faq['tag'] }}</span>
                                                <span class="faq-accordion__question">{{ $faq['question'] }}</span>
                                            </span>
                                            <span class="faq-accordion__chevron" aria-hidden="true"><i class="fa-solid fa-chevron-down"></i></span>
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ $faq['id'] }}"
                                         class="collapse{{ $index === 0 ? ' show' : '' }}"
                                         role="region"
                                         aria-labelledby="heading-{{ $faq['id'] }}"
                                         data-bs-parent="#faqAccordion">
                                        <div class="faq-accordion__body">
                                            <p class="mb-0">{{ $faq['answer'] }}</p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TOPIC CARDS -->
        <section class="faq-topics">
            <div class="container">
                <div class="faq-topics__head text-center mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Popular Topics</span>
                    <h2 class="display-5 font-weight-800 mb-0 lh-1 ls-minus-2px">Explore by service area</h2>
                </div>
                <div class="row g-4">
                    @foreach(array_slice($faqs, 1) as $topic)
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="{{ 100 + ($loop->index * 80) }}ms">
                            <article class="faq-topics__card">
                                <span class="faq-topics__icon" aria-hidden="true"><i class="fa-solid {{ $topic['icon'] }}"></i></span>
                                <h3 class="faq-topics__title">{{ $topic['tag'] }}</h3>
                                <p class="faq-topics__text mb-0">{{ \Illuminate\Support\Str::limit(strip_tags($topic['answer']), 120) }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- SOLUTIONS -->
        <section class="faq-solutions">
            <div class="container">
                <div class="faq-solutions__head text-center mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Our Solutions</span>
                    <h2 class="display-5 font-weight-800 mb-3 lh-1 ls-minus-2px">Tailored to every vessel call</h2>
                    <p class="lead mb-0 mx-auto faq-solutions__lead">Flexible pricing built around urgency, routing, and port requirements—not one-size-fits-all tariffs.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach($solutions as $solution)
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 100 + ($loop->index * 80) }}ms">
                            <article class="faq-solutions__card{{ !empty($solution['accent']) ? ' faq-solutions__card--accent' : '' }}">
                                <div class="faq-solutions__card-head">
                                    <span class="faq-solutions__label">{{ $solution['title'] }}</span>
                                    <h3 class="faq-solutions__price mb-0">{{ $solution['price'] }}</h3>
                                </div>
                                <ul class="faq-solutions__list">
                                    @foreach($solution['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('contact') }}?quote=1&mode=quote" class="butn-style01 w-100 text-center{{ !empty($solution['accent']) ? ' secondary' : '' }}" data-open-quote="quote">Talk to Us</a>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="faq-contact">
            <div class="container">
                <div class="row g-4 g-xl-5 align-items-stretch">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="faq-contact__form-wrap">
                            <span class="text-primary small letter-spacing-4 d-block mb-2 font-weight-700">Get in Touch</span>
                            <h2 class="display-5 font-weight-800 mb-4 lh-1 ls-minus-2px">Questions about spares, customs, or husbandry?</h2>
                            <form class="mc-contact-form faq-contact__form" action="{{ route('contact.store') }}" method="post" novalidate>
                                @csrf
                                <input type="hidden" name="form_source" value="FAQ page">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="faq-name" class="form-label">Your Name <span class="text-primary">*</span></label>
                                        <input class="form-control" id="faq-name" type="text" name="name" placeholder="Full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="faq-email" class="form-label">Your Email <span class="text-primary">*</span></label>
                                        <input class="form-control" id="faq-email" type="email" name="email" placeholder="you@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="faq-subject" class="form-label">Subject <span class="text-primary">*</span></label>
                                        <input class="form-control" id="faq-subject" type="text" name="subject" placeholder="How can we help?" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="faq-phone" class="form-label">Phone</label>
                                        <input class="form-control" id="faq-phone" type="tel" name="phone" placeholder="+971 …">
                                    </div>
                                    <div class="col-12">
                                        <label for="faq-message" class="form-label">Message <span class="text-primary">*</span></label>
                                        <textarea class="form-control" id="faq-message" name="message" rows="4" placeholder="Vessel, port, urgency, cargo details…" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        @include('partials.recaptcha')
                                    </div>
                                    <div class="col-12">
                                        <div class="mc-contact-form__status" role="alert" aria-live="polite" hidden></div>
                                        <button class="butn-style01 w-100 border-0" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="150ms">
                        <div class="faq-contact__info">
                            <div class="faq-contact__info-card">
                                <span class="faq-contact__info-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
                                <div>
                                    <h3 class="faq-contact__info-title">Office</h3>
                                    <p class="mb-0">{{ config('company.address.line1') }}, {{ config('company.address.short') }}</p>
                                </div>
                            </div>
                            <div class="faq-contact__info-card">
                                <span class="faq-contact__info-icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
                                <div>
                                    <h3 class="faq-contact__info-title">Phone</h3>
                                    <p class="mb-0"><a href="tel:{{ config('company.phone_tel') }}">{{ config('company.phone_display') }}</a></p>
                                </div>
                            </div>
                            <div class="faq-contact__info-card">
                                <span class="faq-contact__info-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                                <div>
                                    <h3 class="faq-contact__info-title">Email</h3>
                                    <p class="mb-0"><a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a></p>
                                </div>
                            </div>
                            <div class="faq-contact__info-card faq-contact__info-card--highlight">
                                <span class="faq-contact__info-icon" aria-hidden="true"><i class="fa-solid fa-clock"></i></span>
                                <div>
                                    <h3 class="faq-contact__info-title">24/7 Operations</h3>
                                    <p class="mb-0">{{ config('company.motto') }}</p>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}?quote=1&mode=information" class="butn-style01 secondary w-100 text-center mt-2" data-open-quote="information">Request Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@push('structured_data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($faqs)->map(fn ($faq) => [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer'],
        ],
    ])->values()->all(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
@endsection
