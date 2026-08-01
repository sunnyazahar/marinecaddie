@extends('layouts.app')

@section('title', 'Logistic Solution')
@section('meta_title', 'End-to-End Logistic Solutions | MarineCaddie 4PL')
@section('meta_description', 'Custom logistic solutions from MarineCaddie—network design, systems integration, and multimodal orchestration tailored to your supply chain goals.')
@section('meta_keywords', 'logistic solutions, supply chain solutions, 4PL solutions, logistics consulting, network design')
@section('schema_type', 'Service')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Logistic Solution</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services.logistic-solution') }}">Logistic Solution</a></li>
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
                                    <li class="mb-2"><a href="{{ route('services.road-freight') }}">Road Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.ocean-freight') }}">Ocean Freight <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2"><a href="{{ route('services.warehousing') }}">Warehousing <i class="ti-arrow-top-right"></i></a></li>
                                    <li class="mb-2 active"><a href="{{ route('services.logistic-solution') }}">Logistic Solution <i class="ti-arrow-top-right"></i></a></li>
                                    <li><a href="{{ route('services.rail-freight') }}">Rail Freight <i class="ti-arrow-top-right"></i></a></li>
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
                                    <img src="{{ asset('assets/img/content/sidebar-img01.jpg') }}" alt="..." title="..." class="rounded-top w-100">
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
                                <img src="{{ asset('assets/img/services/service-detail-05.jpg') }}" alt="Logistic Solution" title="Logistic Solution" class="rounded">
                            </div>
                            <div class="mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                                <h2 class="display-6 font-weight-600 lh-1 pb-3 mb-2 font-weight-800">Logistic Solution</h2>
                                <p>MarineCaddie’s logistic solution is end-to-end 4PL design: we map your network, select and govern 3PL partners, and orchestrate every mode—ocean, air, road, rail, and warehousing—under one operating model. Customs compliance, documentation workflows, and exception playbooks are built into the blueprint so global movement stays controlled from purchase order to final delivery.</p>
                                <p class="mb-0">Technology is the connective tissue. We integrate ERP and TMS platforms, normalize carrier and warehouse data streams, and optimize planning with shared KPIs—cost-to-serve, on-time performance, and inventory velocity. The result is a supply chain you can see, measure, and continuously improve—your supply chain, orchestrated.</p>
                            </div>
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms">
                                <h3 class="lh-1 mb-3">How We Add Value</h3>
                                <p class="mb-0">Instead of stitching vendors together yourself, you gain a single orchestration partner who designs the architecture, manages 3PLs, and turns fragmented logistics data into actionable insight. That cuts coordination overhead, strengthens compliance, and unlocks continuous optimization across lanes, nodes, and partners.</p>
                            </div>
                            <div class="row mt-n1-9 mb-2-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ asset('assets/img/services/service-details-1.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ asset('assets/img/services/service-details-2.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="image-hover">
                                        <img src="{{ asset('assets/img/services/service-details-3.jpg') }}" alt="..." title="..." class="rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionLogisticSolution">
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. What does a MarineCaddie logistic solution include?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region" aria-labelledby="headingOne" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">It covers network design, 3PL selection and management, multimodal orchestration, customs process alignment, ERP/TMS integration, and ongoing data-driven optimization—delivered as a unified 4PL operating model rather than disconnected freight services.</div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. How do you integrate with our ERP or TMS?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region" aria-labelledby="headingTwo" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">
                                            We map shipment, inventory, and milestone events into your existing systems so planners work from one source of truth. Integration scope is tailored to your stack—from EDI and API feeds to structured reporting that supports continuous improvement.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" data-wow-delay="200ms">
                                    <h2 class="card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3. How is 4PL different from hiring another 3PL?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" role="region" aria-labelledby="headingThree" data-bs-parent="#accordionLogisticSolution">
                                        <div class="card-body">
                                            A 3PL executes operations; MarineCaddie as 4PL designs the chain, manages multiple 3PLs, and owns end-to-end visibility and performance. You stay in control of strategy while we orchestrate partners, systems, and data across the network.
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
