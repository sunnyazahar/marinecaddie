@extends('layouts.app')

@section('title', 'Ocean Freight')
@section('meta_title', 'Ocean Freight & Maritime Shipping | MarineCaddie 4PL')
@section('meta_description', 'Ocean freight and maritime shipping orchestrated by MarineCaddie—FCL, LCL, carrier management, port coordination, and end-to-end supply chain visibility.')
@section('meta_keywords', 'ocean freight, maritime shipping, FCL, LCL, sea freight, container shipping, 4PL ocean')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Ocean Freight</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.ocean-freight') }}">Ocean Freight</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- OCEAN-FREIGHT
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
                                    <li class="mb-2 active"><a href="{{ route('services.ocean-freight') }}">Ocean Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.warehousing') }}">Warehousing <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.logistic-solution') }}">Logistic Solution <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Rail Freight <i class="ti-arrow-top-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="mb-1-9 text-white h4">Brochures</div>
                                <div class="widget-body">
                                    <ul class="widget-brochure">
                                        <li>
                                            <a href="{{ route('services.ocean-freight') }}#" class="letter-spacing-1"><i class="far fa-file-pdf"></i>Download.pdf</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.ocean-freight') }}#" class="letter-spacing-1"><i class="far fa-file-alt"></i>Download.txt</a>
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
                                <img src="{{ theme_asset('assets/img/services/service-detail-03.jpg') }}" alt="Ocean Freight" title="Ocean Freight" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Ocean Freight</h2>
                                <p>Ocean freight sits at the heart of MarineCaddie’s maritime heritage. With more than 25 years navigating carrier contracts, port operations, and trade-lane volatility, we orchestrate FCL and LCL as the backbone of your 4PL supply chain—coordinating vessel space, NVOCC partners, and terminal handoffs under one accountable plan.</p>
                                <p class="mb-0">From booking to bill of lading to destination customs release, our control tower tracks sailing schedules, blank sailings, and congestion signals so inland modes and warehouses are ready when containers land. Systems integration keeps shipment data flowing into your ERP and TMS, giving end-to-end visibility across the maritime corridor that moves the majority of global trade.</p>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">You benefit from true maritime expertise applied as orchestration: smarter carrier mix, proactive rerouting around port delays, and tighter linkage between vessel arrival and drayage release. That reduces demurrage and detention, protects landed cost targets, and turns ocean freight into a managed program—not a series of one-off bookings.</p>
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
                            <div class="accordion" id="accordionOceanFreight">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. How does MarineCaddie’s maritime experience shape ocean freight?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionOceanFreight">
                                        <div class="card-body">Decades of seaborne logistics inform how we select trade lanes, negotiate carrier capacity, and anticipate port and schedule risk. That domain depth is what makes our 4PL ocean program sharper than a generic freight marketplace booking.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. Do you handle both FCL and LCL under one orchestration model?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionOceanFreight">
                                        <div class="card-body">
                                            Yes. Full-container and less-than-container loads are planned within the same control framework, with consolidation, documentation, and inland connections governed to the same visibility and SLA standards.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. How do you limit demurrage and detention exposure?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionOceanFreight">
                                        <div class="card-body">
                                            We align vessel ETAs with customs readiness and pre-booked drayage, then escalate free-time risks before free days expire. Early exception alerts and coordinated inland dispatch are how we protect your landed cost on the waterfront.
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
