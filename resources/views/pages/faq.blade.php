@extends('layouts.app')

@section('title', 'FAQ')
@section('meta_title', 'FAQ | MarineCaddie 4PL Supply Chain Questions Answered')
@section('meta_description', 'Answers to common questions about MarineCaddie 4PL services, orchestration process, on-time delivery, customs compliance, and systems integration.')
@section('meta_keywords', 'MarineCaddie FAQ, 4PL questions, logistics FAQ, supply chain FAQ')
@section('schema_type', 'FAQPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Faq's</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('faq') }}#">Faq's</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n1-9">
                    <div class="col-lg-6 order-2 mt-1-9 order-lg-1">
                        <div id="accordion" class="accordion-style">
                            <div class="card mb-4 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link " data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 1. What is a 4PL, and how is MarineCaddie different?</button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        A 4PL orchestrates your supply chain rather than owning every truck or warehouse. MarineCaddie integrates systems, manages 3PLs, and delivers end-to-end visibility—designing and running networks that reduce cost, improve compliance, and protect on-time delivery.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. How does your orchestration process work?</button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse " role="region" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        We start with Discover &amp; Design, then Integrate Systems &amp; Partners, Orchestrate &amp; Optimize day-to-day execution, and drive Continuous Performance with scorecards, exception management, and network improvements.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3. How do you support on-time delivery?</button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse " role="region" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        On-time performance is managed as a network outcome: aligned SLAs with 3PLs, proactive exception handling, multimodal contingency plans, and shared tracking so every handoff is visible before delays become customer issues.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4. How do you handle customs, compliance, and systems integration?</button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse " role="region" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        We embed customs readiness and compliance risk into lane design, then connect ERP, TMS, and tracking so documentation, status, and exceptions flow across partners. Manufacturing, retail, energy, and industrial shippers use the same orchestration model across maritime and inland networks.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-1-9 order-1 order-lg-2">
                        <div class="ps-lg-4 ps-xl-6">
                            <div class="mb-4 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Your Questions Answered.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1 ls-minus-2px">MarineCaddie FAQs</h2>
                            </div>
                            <div class="row mt-n1-9 mb-1-9">
                                <div class="col-6 mt-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <div class="image-hover">
                                        <img src="{{ asset('assets/img/content/faq-02.jpg') }}" class="rounded" alt="MarineCaddie logistics team reviewing supply chain questions" title="MarineCaddie FAQs">
                                    </div>
                                </div>
                                <div class="col-6 mt-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                    <div class="image-hover">
                                        <img src="{{ asset('assets/img/content/faq-03.jpg') }}" class="rounded" alt="Global freight and maritime logistics support" title="Logistics support">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-4 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Answers for shippers evaluating 4PL partnership—how we orchestrate networks, integrate systems, manage customs and compliance risk, and keep freight on time across maritime and inland lanes.</p>
                                <div class="progress-text wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                                    <div class="row small mb-1">
                                        <div class="col-6">On-Time Delivery</div>
                                        <div class="col-6 text-end">80%</div>
                                    </div>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width:80%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COUNTER
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="row text-center mt-n5">
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="display-1 mb-0 font-weight-700 text-secondary">
                            <div class="d-inline-block odometer odometer-auto-theme" data-count="35"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                        </div>
                        <div class="separator-line-horrizontal-medium-light3 bg-primary mb-4 opacity5 mx-auto"></div>
                        <p class="h5 mb-0">Deliveries Completed</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="display-1 mb-0 font-weight-700 text-secondary">
                            <div class="d-inline-block odometer odometer-auto-theme" data-count="25"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                        </div>
                        <div class="separator-line-horrizontal-medium-light3 bg-primary mb-4 opacity5 mx-auto"></div>
                        <p class="h5 mb-0">Years of Experience</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="display-1 mb-0 font-weight-700 text-secondary">
                            <div class="d-inline-block odometer odometer-auto-theme" data-count="89"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                        </div>
                        <div class="separator-line-horrizontal-medium-light3 bg-primary mb-4 opacity5 mx-auto"></div>
                        <p class="h5 mb-0">Operational capacity</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="display-1 mb-0 font-weight-700 text-secondary">
                            <div class="d-inline-block odometer odometer-auto-theme" data-count="98"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>+
                        </div>
                        <div class="separator-line-horrizontal-medium-light3 bg-primary mb-4 opacity5 mx-auto"></div>
                        <p class="h5 mb-0">On-Time Delivery Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXTRA SECTION
        ================================================== -->
        <section class="bg-img cover-background pt-24 pb-0 extra-style01 secondary-overlay" data-overlay-dark="3" data-background="{{ asset('assets/img/bg/bg-01.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/bg/bg-01.jpg') }}&quot;);">
            <div class="container">
                <div class="extra-content-box">
                    <ul class="inner-box">
                        <li class="one rounded-top">
                            <div class="h4 flex-shrink-0 lh-1">
                                <div class="odometer odometer-auto-theme" data-count="426"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h5 mb-0">Completed Shipments &amp; More</h3>
                            </div>
                        </li>
                        <li class="two rounded-top">
                            <div class="pe-4">
                                <i class="fa-solid fa-phone-volume text-white display-22"></i>
                            </div>
                            <div>
                                <small class="text-white display-28">24/7 Logistics Support</small>
                                <h3 class="h5 mb-0"><a href="tel:+18005550148" class="text-white">(+1) 800 555 0148</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- PRICING
        ================================================== -->
        <section>
            <div class="container">
                <div class="mb-1-9 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Pricing.</span>
                    <h2 class="mb-0 display-4 font-weight-800 lh-1 ls-minus-2px mx-auto w-sm-80 w-md-70 w-lg-60 w-xl-50">Orchestration packages for growing networks</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="border p-1-9 p-xl-5 h-100 rounded">
                            <div class="border-bottom pb-4 mb-4">
                                <span class="text-primary font-weight-800 d-inline-block mb-2">Network Essentials</span>
                                <h3 class="h1 mb-0">Custom<span class="font-weight-300 display-29 ms-1">/Engagement</span></h3>
                            </div>
                            <ul class="list-unstyled list-style02">
                                <li>Lane &amp; network assessment</li>
                                <li>3PL performance baselines</li>
                                <li>Core visibility reporting</li>
                                <li><del>Multi-system ERP/TMS integration</del></li>
                                <li><del>Dedicated compliance program</del></li>
                            </ul>
                            <a class="butn-style01 w-100 text-center" href="{{ route('contact') }}">Talk to Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="border p-1-9 p-xl-5 h-100 rounded">
                            <div class="border-bottom pb-4 mb-4">
                                <span class="text-primary font-weight-800 d-inline-block mb-2">Orchestrated Growth</span>
                                <h3 class="h1 mb-0">Custom<span class="font-weight-300 display-29 ms-1">/Engagement</span></h3>
                            </div>
                            <ul class="list-unstyled list-style02">
                                <li>Supply chain design &amp; management</li>
                                <li>Active 3PL coordination</li>
                                <li>Freight &amp; warehouse optimization</li>
                                <li>ERP/TMS &amp; tracking integration</li>
                                <li><del>Enterprise control tower</del></li>
                            </ul>
                            <a class="butn-style01 secondary w-100 text-center" href="{{ route('contact') }}">Talk to Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="border p-1-9 p-xl-5 h-100 rounded">
                            <div class="border-bottom pb-4 mb-4">
                                <span class="text-primary font-weight-800 d-inline-block mb-2">Enterprise Control</span>
                                <h3 class="h1 mb-0">Custom<span class="font-weight-300 display-29 ms-1">/Engagement</span></h3>
                            </div>
                            <ul class="list-unstyled list-style02">
                                <li>Full 4PL orchestration ownership</li>
                                <li>Customs, compliance &amp; risk programs</li>
                                <li>Multi-region partner governance</li>
                                <li>Continuous performance reviews</li>
                                <li>Executive scorecards &amp; SLAs</li>
                            </ul>
                            <a class="butn-style01 w-100 text-center" href="{{ route('contact') }}">Talk to Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FROM
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center mt-n2-9">
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="bg-white p-1-9 p-md-2-9 p-xl-6">
                            <div class="mb-3">
                                <h2 class="ls-minus-2px display-4 font-weight-800 lh-1 mb-1-9">Get in touch</h2>
                            </div>
                            <form class="contact quform" action="#" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Your Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group quform-select-replaced">
                                                <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span class="quform-required">*</span></label>
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
                                                            <img src="{{ asset('assets/images/courier-new-light.png') }}" alt="..." title="...">
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
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="ps-xl-1-9 ps-xxl-7">
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Contact Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1">Questions about customs, integration, or a new lane?</h2>
                            </div>
                            <div class="row mt-n1-9 mb-6 g-5">
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Coverage</h3>
                                    <p class="mb-0">Global maritime &amp; logistics coverage</p>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Phone</h3>
                                    <p class="mb-0"><a href="tel:+18005550148" class="text-primary text-secondary-hover">(+1) 800 555 0148</a></p>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Follow us</h3>
                                    <ul class="social-icon-style04 list-unstyled mb-0">
                                        <li><a href="{{ route('faq') }}#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ route('faq') }}#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="{{ route('faq') }}#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{ route('faq') }}#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Email</h3>
                                    <p class="mb-0">Ready to orchestrate your supply chain?</p>
                                    <p class="mb-0"><a href="mailto:info@marinecaddie.com" class="text-decoration-underline text-primary text-secondary-hover">info@marinecaddie.com</a></p>
                                </div>
                            </div>
                            <div class="display-custom-1 text-primary font-weight-700">
                                <p class="mb-0">25+ Years</p>
                            </div>
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
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'What is a 4PL, and how is MarineCaddie different?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'A 4PL orchestrates your supply chain rather than owning every truck or warehouse. MarineCaddie integrates systems, manages 3PLs, and delivers end-to-end visibility—designing and running networks that reduce cost, improve compliance, and protect on-time delivery.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'How does your orchestration process work?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We start with Discover & Design, then Integrate Systems & Partners, Orchestrate & Optimize day-to-day execution, and drive Continuous Performance with scorecards, exception management, and network improvements.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'How do you support on-time delivery?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'On-time performance is managed as a network outcome: aligned SLAs with 3PLs, proactive exception handling, multimodal contingency plans, and shared tracking so every handoff is visible before delays become customer issues.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'How do you handle customs, compliance, and systems integration?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We embed customs readiness and compliance risk into lane design, then connect ERP, TMS, and tracking so documentation, status, and exceptions flow across partners. Manufacturing, retail, energy, and industrial shippers use the same orchestration model across maritime and inland networks.',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
@endsection
