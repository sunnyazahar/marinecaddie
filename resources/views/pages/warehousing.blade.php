@extends('layouts.app')

@section('title', 'Customs Clearance')
@section('meta_title', 'Customs Clearance | TP, Import/Export & Duty Support | MarineCaddie')
@section('meta_description', 'MarineCaddie customs clearance—TP/trans-shipment, import and export clearance, duty exemption support, and customs consulting for maritime cargo.')
@section('meta_keywords', 'customs clearance, TP trans-shipment, import export clearance, duty exemption, maritime customs')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Customs Clearance</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.warehousing') }}">Customs Clearance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- WAREHOUSING / CUSTOMS CLEARANCE
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n2-9">
                    <div class="col-lg-4 mt-2-9 order-2 order-lg-1">
                        <div class="service-sidebar pe-xl-4">
                            <div class="mb-2-9 widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="mb-1-9 text-white h4">Our Services</div>
                                                                <ul class="cetegory p-0 list-unstyled mb-0">
                                    <li class="mb-2"><a href="{{ route('services.air-freight') }}">Air Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.road-freight') }}">Road Transportation <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.ocean-freight') }}">Ocean Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2 active"><a href="{{ route('services.warehousing') }}">Customs Clearance <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.logistic-solution') }}">Ship Spares Logistics <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Vessel Husbandry / Port Support <i class="ti-arrow-top-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="mb-1-9 text-white h4">Brochures</div>
                                <div class="widget-body">
                                    <ul class="widget-brochure">
                                        <li>
                                            <a href="{{ route('services.warehousing') }}#" class="letter-spacing-1"><i class="far fa-file-pdf"></i>Download.pdf</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.warehousing') }}#" class="letter-spacing-1"><i class="far fa-file-alt"></i>Download.txt</a>
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
                            <div class="mb-2-6 image-hover wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ theme_asset('assets/img/services/service-detail-04.jpg') }}" alt="Customs Clearance" title="Customs Clearance" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Customs Clearance</h2>
                                <p>MarineCaddie provides specialized customs clearance for maritime and commercial cargo—keeping documentation accurate and releases on schedule so vessels and onward transport are not delayed.</p>
                                <p class="mb-3">Our customs support covers TP trans-shipment clearance, import and export clearance, duty exemption processes, and practical consulting so shipments move cleanly through local regulations.</p>
                                <ul class="list-style03 mb-0">
                                    @foreach(config('company.services.customs_clearance.items') as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">You reduce clearance risk and idle time at the gateway. We align paperwork with ship schedules, advise on duty and procedure questions, and connect customs release to last-mile delivery—so cargo keeps moving toward the vessel or consignee.</p>
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
                                                        <div class="accordion" id="accordionWarehousing">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. What customs services do you offer?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">{{ implode(', ', config('company.services.customs_clearance.items')) }}—delivered with attention to maritime urgency and documentation quality.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. Can you handle TP / trans-shipment clearance?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">
                                            Yes. TP trans-shipment clearance is part of our customs offering, helping cargo transit hubs without unnecessary delay.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. Do you advise on duty exemption and consulting?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">
                                            We support duty exemption processes and customs consulting so customers understand requirements early and avoid surprises at the border.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
