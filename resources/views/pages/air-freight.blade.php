@extends('layouts.app')

@section('title', 'Air Freight')
@section('meta_title', 'Air Freight & Express / Hand Carry | MarineCaddie')
@section('meta_description', 'MarineCaddie air freight for time-critical maritime cargo—express courier and hand-carry options to keep vessels moving worldwide.')
@section('meta_keywords', 'air freight, express courier, hand carry, time-critical shipping, maritime air cargo')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Air Freight</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.air-freight') }}#">Air Freight</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIR-FREIGHT
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n2-9">
                    <div class="col-lg-4 mt-2-9 order-2 order-lg-1">
                        <div class="service-sidebar pe-xl-4">
                            <div class="mb-2-9 widget bg-secondary wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="mb-1-9 text-white h4">Our Services</div>
                                <ul class="cetegory p-0 list-unstyled mb-0">
                                    <li class="mb-2 active"><a href="{{ route('services.air-freight') }}">Air Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.road-freight') }}">Road Transportation <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.ocean-freight') }}">Ocean Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.warehousing') }}">Customs Clearance <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.logistic-solution') }}">Ship Spares Logistics <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Vessel Husbandry / Port Support <i class="ti-arrow-top-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="mb-1-9 text-white h4">Brochures</div>
                                <div class="widget-body">
                                    <ul class="widget-brochure">
                                        <li>
                                            <a href="{{ route('services.air-freight') }}#" class="letter-spacing-1"><i class="far fa-file-pdf"></i>Download.pdf</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.air-freight') }}#" class="letter-spacing-1"><i class="far fa-file-alt"></i>Download.txt</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget bg-secondary rounded p-0 wow fadeInUp" data-wow-delay="100ms">
                                <div class="banner-wrapper">
                                    <img src="{{ theme_asset('assets/img/content/sidebar-img01.jpg') }}" alt="..." title="..." class="rounded-top w-100">
                                    <div class="p-2-2 pt-6 position-relative text-center">
                                        <div class="icon-boxs bg-primary">
                                            <i class="ti-headphone-alt fs-1 text-white"></i>
                                        </div>
                                        <div class="mb-3 text-white h4">How Can We Help?</div>
                                        <ul class="text-center list-unstyled mb-0">
                                            <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="tel:{{ config('company.phone_tel') }}" class="text-white">{{ config('company.phone_display') }}</a></li>
                                            <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="mailto:{{ config('company.email') }}" class="text-white">{{ config('company.email') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-2-9 order-1 order-lg-2">
                        <div>
                            <div class="mb-2-6 image-hover wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <img src="{{ theme_asset('assets/img/services/service-detail-01.jpg') }}" alt="..." title="..." class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Air Freight</h2>
                                <p>When vessel schedules leave no room for delay, MarineCaddie air freight keeps critical parts and cargo moving. We arrange airline capacity, documentation, and gateway handoffs so urgent maritime shipments reach port or vessel on time.</p>
                                <p class="mb-3">Our freight forwarding scope also includes express courier and hand-carry solutions for the most time-sensitive ship spares and operational cargo—especially where standard air freights cannot meet sailing windows.</p>
                                <ul class="list-style03 mb-0">
                                    <li>Scheduled and ad-hoc air freight for maritime cargo</li>
                                    <li>Express courier for urgent documents and small critical parts</li>
                                    <li>Hand-carry coordination when every hour counts</li>
                                    <li>Multimodal links to road, customs, and onboard delivery</li>
                                </ul>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">You get prioritised lift without losing operational control: we match the right air option—standard, express, or hand carry—to vessel ETA, customs readiness, and last-mile delivery so your fleet stays on schedule.</p>
                            </div>
                            <div class="row mt-n1-9 mb-2-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ theme_asset('assets/img/services/service-details-1.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ theme_asset('assets/img/services/service-details-2.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ theme_asset('assets/img/services/service-details-3.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordion">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. When should we use air freight for ship spares?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">Choose air when vessel ETA, AOG-style urgency, or dry-dock windows leave insufficient ocean transit time. We assess cut-offs, customs, and last-mile access before locking capacity.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            2. Do you offer express courier and hand carry?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Yes. Express courier and hand-carry options sit alongside our air freight service for highly critical parts and documents that must arrive ahead of standard airline schedules.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            3. Can air freight connect to customs and onboard delivery?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Absolutely. We coordinate clearance, road transport, and door-to-deck handoffs so air arrivals flow straight into vessel husbandry and ship spares logistics.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
