@extends('layouts.app')

@section('title', 'Portfolio Details')
@section('meta_title', 'Project Details | MarineCaddie Portfolio')
@section('meta_description', 'Detailed look at a MarineCaddie maritime logistics engagement—scope, approach, and outcomes for vessel and cargo support.')
@section('meta_robots', 'noindex, follow')
@section('schema_type', 'WebPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Project Details</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('portfolio.details') }}#">Project Details</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO DETAILS
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative mb-1-9 mb-sm-2-9 image-hover wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            <img src="{{ theme_asset('assets/img/portfolio/portfolio-details-01.jpg') }}" alt="..." title="..." class="rounded">
                        </div>
                        <div class="row mb-2-9 mt-n4">
                            <div class="col-lg-4 mt-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="pe-lg-6">
                                    <h2 class="mb-1-9 mb-sm-5 font-weight-800">Orchestrated maritime supply chain program</h2>
                                    <ul class="list-unstyled mb-0">
                                        <li class="border-bottom pb-4 mb-4 display-30"><span class="w-50 text-uppercase d-inline-block text-dark font-weight-600">Published </span> 1 Feb 2026</li>
                                        <li class="border-bottom pb-4 mb-4 display-30"><span class="w-50 text-uppercase d-inline-block text-dark font-weight-600">Services </span> Maritime Logistics</li>
                                        <li class="display-30"><span class="w-50 text-uppercase d-inline-block text-dark font-weight-600">Industry </span> Maritime &amp; Global Trade</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <div>
                                    <p class="wow fadeInUp" data-wow-delay="200ms">This engagement shows how MarineCaddie supports complex maritime logistics as one accountable partner—aligning ocean freight, customs clearance, inland delivery, and vessel needs so critical cargo moves from booking to onboard delivery with clear updates.</p>
                                    <p class="wow fadeInUp" data-wow-delay="200ms">Through active 3PL performance management and proactive exception handling, the program reduced demurrage exposure, improved documentation readiness, and strengthened on-time performance without adding internal logistics headcount.</p>
                                    <a href="{{ route('how-we-work') }}" class="butn-style01 wow fadeInUp" data-wow-delay="200ms">How We Work</a>
                                </div>
                            </div>
                        </div>
                        <p class="mb-2-9 wow fadeInUp" data-wow-delay="200ms">MarineCaddie’s portfolio reflects end-to-end supply chain design, partner governance, and data-driven optimization across freight modes and distribution nodes. Each engagement is built to give shippers control—without the overhead of managing every carrier and system alone.</p>
                        <div class="row mb-1-9 mb-sm-6 mt-n4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="col-6 col-lg-3 mt-4">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/portfolio/portfolio-detail-01.jpg') }}" alt="..." title="..." class="rounded">
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 mt-4">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/portfolio/portfolio-detail-02.jpg') }}" alt="..." title="..." class="rounded">
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 mt-4">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/portfolio/portfolio-detail-03.jpg') }}" alt="..." title="..." class="rounded">
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 mt-4">
                                <div class="image-hover">
                                    <img src="{{ theme_asset('assets/img/portfolio/portfolio-detail-04.jpg') }}" alt="..." title="..." class="rounded">
                                </div>
                            </div>
                        </div>
                        <div class="page-navigation wow fadeInUp" data-wow-delay="200ms">
                            <div class="prev-page">
                                <div class="page-info">
                                    <a href="{{ route('portfolio.details') }}#">
                                        <span class="image-prev"><img src="{{ theme_asset('assets/img/portfolio/prev-project.jpg') }}" alt="Country House Cleaning"></span>
                                        <div class="prev-link-page-info">
                                            <h3 class="h4 prev-title">Security For Cargo</h3>
                                            <span class="date-details"><span class="create-date">Feb 10, 2026</span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="next-page">
                                <div class="page-info">
                                    <a href="{{ route('portfolio.details') }}#">
                                        <div class="next-link-page-info">
                                            <h3 class="h4 next-title">Freight Wave</h3>
                                            <span class="date-details"><span class="create-date">Feb 08, 2026</span></span>
                                        </div>
                                        <span class="image-next"><img src="{{ theme_asset('assets/img/portfolio/next-project.jpg') }}" alt="Take Care Of Your Furniture"></span>
                                    </a>
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
