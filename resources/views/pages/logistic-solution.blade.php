@extends('layouts.app')

@section('title', 'Ship Spares Logistics')
@section('meta_title', 'Ship Spares Logistics | 24/7 Door-to-Deck | MarineCaddie')
@section('meta_description', 'Time-critical ship spares logistics from MarineCaddie—24/7 operations, hand carry, door-to-deck delivery, customs clearance, and last-mile onboard support.')
@section('meta_keywords', 'ship spares logistics, door-to-deck, time-critical shipping, hand carry, maritime spare parts')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Ship Spares Logistics</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.logistic-solution') }}">Ship Spares Logistics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOGISTIC-SOLUTION
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
                                    <li class="mb-2"><a href="{{ route('services.warehousing') }}">Customs Clearance <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2 active"><a href="{{ route('services.logistic-solution') }}">Ship Spares Logistics <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Vessel Husbandry / Port Support <i class="ti-arrow-top-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="mb-1-9 text-white h4">Brochures</div>
                                <div class="widget-body">
                                    <ul class="widget-brochure">
                                        <li>
                                            <a href="{{ route('services.logistic-solution') }}#" class="letter-spacing-1"><i class="far fa-file-pdf"></i>Download.pdf</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.logistic-solution') }}#" class="letter-spacing-1"><i class="far fa-file-alt"></i>Download.txt</a>
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
                                <img src="{{ theme_asset('assets/img/services/service-detail-05.jpg') }}" alt="Ship Spares Logistics" title="Ship Spares Logistics" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Ship Spares Logistics</h2>
                                <p>MarineCaddie specializes in time-critical ship spares logistics that keep fleets operating. Our 24/7 operations team manages urgent shipments from supplier collection through customs and last-mile delivery—onto the vessel when schedules demand it.</p>
                                <p class="mb-3">A typical flow runs below—from supplier through customs and carrier to onboard delivery and POD. Every step is coordinated so critical parts arrive where and when the vessel needs them.</p>
                                <ul class="list-style03 mb-1-9">
                                    @foreach(config('company.ship_spare_logistics') as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                                <div class="ship-spare-flow ship-spare-flow--service mb-0">
                                    <div class="ship-spare-flow__track" role="list">
                                        @foreach(config('company.ship_spare_flow') as $step)
                                        <div class="ship-spare-flow__step" role="listitem">
                                            <div class="ship-spare-flow__icon" aria-hidden="true">
                                                @include('partials.ship-spare-icons', ['icon' => $step['icon']])
                                            </div>
                                            <div class="ship-spare-flow__name">{{ $step['label'] }}</div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">{{ config('company.motto') }} You gain a single logistics partner focused on urgency, documentation accuracy, and practical vessel constraints—from first mile at the supplier to proof of delivery on board.</p>
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
                            <div class="accordion" id="accordionLogisticSolution">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. What is included in ship spares logistics?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">{{ implode(', ', config('company.ship_spare_logistics')) }}—managed end to end from supplier to vessel.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. How does the ship spare logistics flow work?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">
                                            {{ collect(config('company.ship_spare_flow'))->pluck('label')->implode(' → ') }}. We stay accountable across each handover so critical parts do not stall in transit or at customs.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. Are you available around the clock for urgent spares?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">
                                            Yes. 24/7 operations and responsive coordination mean we can act on time-critical enquiries whenever a vessel or shipyard deadline appears.
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
