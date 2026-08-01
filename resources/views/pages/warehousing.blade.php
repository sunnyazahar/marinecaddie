@extends('layouts.app')

@section('title', 'Warehousing')
@section('meta_title', 'Warehousing & Distribution Orchestration | MarineCaddie')
@section('meta_description', 'Warehousing and distribution coordinated by MarineCaddie—storage, inventory visibility, and fulfillment partners aligned to your network design.')
@section('meta_keywords', 'warehousing, distribution, inventory management, fulfillment, 4PL warehousing')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Warehousing</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.warehousing') }}">Warehousing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- WAREHOUSING
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
                                    <li class="mb-2 active"><a href="{{ route('services.warehousing') }}">Warehousing <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.logistic-solution') }}">Logistic Solution <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Rail Freight <i class="ti-arrow-top-right"></i></a></li>
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
                                <img src="{{ theme_asset('assets/img/services/service-detail-04.jpg') }}" alt="Warehousing" title="Warehousing" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Warehousing</h2>
                                <p>Warehousing in a MarineCaddie 4PL model is inventory orchestration—not just square footage. We design and govern storage networks that sit between ocean arrivals, air gateways, and outbound road or rail, selecting and managing 3PL facilities that match your SKU profiles, temperature needs, and order cadence.</p>
                                <p class="mb-0">Inbound receiving is timed to vessel and flight ETAs; outbound waves align with customer SLAs and carrier cut-offs. WMS data feeds our control tower and your ERP so stock positions, cycle counts, and fulfillment status remain visible across sites—turning distributed warehouses into one coordinated node in your global supply chain.</p>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">You scale capacity without locking into a single operator. We optimize slotting, labor peaks, and cross-dock opportunities; reduce dwell between port and shelf; and hold facility partners to accuracy and on-time metrics—so warehousing accelerates flow instead of becoming a bottleneck.</p>
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
                                            1. Does MarineCaddie own warehouses or manage 3PL sites?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">We orchestrate a network of specialist 3PL warehouses under 4PL governance—selecting sites, setting SOPs, and managing performance—so you gain multi-node flexibility without owning every facility yourself.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. How is warehouse activity tied to inbound ocean and air freight?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">
                                            Receiving plans use live ETA and customs-release signals. Labor and dock appointments are staged before containers or air freight arrive, cutting yard dwell and accelerating put-away into sellable stock.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. Can inventory data sync with our ERP or WMS?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionWarehousing">
                                        <div class="card-body">
                                            Yes. Receipts, adjustments, and shipment confirmations can integrate with your systems so inventory accuracy and fulfillment status remain part of the same end-to-end visibility layer as transport events.
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
