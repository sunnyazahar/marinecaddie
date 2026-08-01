@extends('layouts.app')

@section('title', 'Rail Freight')
@section('meta_title', 'Rail Freight Logistics | Intermodal Shipping | MarineCaddie')
@section('meta_description', 'Rail and intermodal freight orchestration with MarineCaddie—cost-efficient long-haul moves integrated with ocean, road, and warehouse partners.')
@section('meta_keywords', 'rail freight, intermodal shipping, rail logistics, multimodal transport, 4PL rail')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Rail Freight</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.rail-freight') }}">Rail Freight</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- RAIL-FREIGHT
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
                                    <li class="mb-2"><a href="{{ route('services.road-freight') }}">Road Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.ocean-freight') }}">Ocean Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.warehousing') }}">Warehousing <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.logistic-solution') }}">Logistic Solution <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="active"><a href="{{ route('services.rail-freight') }}">Rail Freight <i class="ti-arrow-top-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="mb-1-9 text-white h4">Brochures</div>
                                <div class="widget-body">
                                    <ul class="widget-brochure">
                                        <li>
                                            <a href="{{ route('services.rail-freight') }}#" class="letter-spacing-1"><i class="far fa-file-pdf"></i>Download.pdf</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.rail-freight') }}#" class="letter-spacing-1"><i class="far fa-file-alt"></i>Download.txt</a>
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
                                            <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="tel:+18005550148" class="text-white">(+1) 800 555 0148</a></li>
                                            <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="mailto:info@marinecaddie.com" class="text-white">info@marinecaddie.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-2-9 order-1 order-lg-2">
                        <div>
                            <div class="mb-2-6 image-hover wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ theme_asset('assets/img/services/service-detail-06.jpg') }}" alt="Rail Freight" title="Rail Freight" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Rail Freight</h2>
                                <p>Rail freight extends MarineCaddie’s 4PL orchestration inland—bridging ocean gateways and inland markets with high-capacity, schedule-driven moves. We coordinate rail operators, ramp handling, and first-/last-mile trucking so intermodal lanes operate as one managed corridor rather than disconnected handoffs.</p>
                                <p class="mb-0">Our planners match container and bulk flows to available train capacity, monitor terminal dwell, and align warehouse or plant receiving with rail ETA. Integrated visibility keeps rail milestones alongside ocean and road events in your TMS, giving planners a full picture of cost-efficient inland transit across the network.</p>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">You unlock lower cost-per-mile and greener inland options without sacrificing control. We reduce ramp congestion risk, synchronize drayage with train schedules, and hold rail and truck partners to shared SLAs—so intermodal becomes a reliable pillar of your orchestrated supply chain.</p>
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
                            <div class="accordion" id="accordionRailFreight">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. How does rail fit into MarineCaddie’s 4PL model?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionRailFreight">
                                        <div class="card-body">Rail is orchestrated as an inland mode linked to ocean arrivals and road delivery. We manage operator relationships, ramp transfers, and connecting trucking so intermodal moves stay under the same visibility and performance framework as the rest of your network.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. When is rail a better choice than long-haul trucking?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionRailFreight">
                                        <div class="card-body">
                                            Rail typically wins on heavy or high-volume inland lanes where transit windows allow and cost or sustainability targets matter. We compare total door-to-door time and cost—including ramp dwell and drayage—before recommending the mode mix.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. How do you prevent delays at rail ramps?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionRailFreight">
                                        <div class="card-body">
                                            We pre-position chassis and drayage against train ETAs, monitor terminal notifications, and escalate dwell before free time expires—keeping containers moving from ramp to warehouse or consignee without costly idle days.
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
