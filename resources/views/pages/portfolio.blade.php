@extends('layouts.app')

@section('title', 'Portfolio')
@section('meta_title', 'Case Studies & Portfolio | MarineCaddie Shipping')
@section('og_image_alt', 'MarineCaddie portfolio banner')
@section('meta_description', 'Explore MarineCaddie portfolio highlights—maritime logistics, freight forwarding, and port support across global networks.')
@section('meta_keywords', 'logistics portfolio, supply chain case studies, MarineCaddie projects')
@section('meta_robots', 'noindex, follow')
@section('schema_type', 'CollectionPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ page_banner('portfolio') }}" style="background-image: url(&quot;{{ page_banner('portfolio') }}&quot;);" role="img" aria-label="MarineCaddie portfolio banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                                                    
                        <h1>Portfolio</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO-TWO-COLUMNS
        ================================================== -->
        <section>
            <div class="container">
                <div class="row portfolio-gallery-isotope mt-n4">
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="100ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-01.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Air Transport #01&lt;/h4&gt;&lt;p&gt;Sky Freight&lt;/p&gt;" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-01.jpg') }}" alt="MarineCaddie — air transport portfolio project" title="MarineCaddie — air transport portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Sky Freight</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Air Transport</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="200ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-02.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Freight Wave #02&lt;/h4&gt;&lt;p&gt;Supply Chain&lt;/p&gt;" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-02.jpg') }}" alt="MarineCaddie — freight wave portfolio project" title="MarineCaddie — freight wave portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Supply Chain</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Freight Wave</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="300ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-03.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Special Transport #03&lt;/h4&gt;&lt;p&gt;Priority Shipping&lt;/p&gt;" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-03.jpg') }}" alt="MarineCaddie — special transport portfolio project" title="MarineCaddie — special transport portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Priority Shipping</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Special Transport</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="400ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-04.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Warehouse Inventory #04&lt;/h4&gt;&lt;p&gt;Inventory Tracking&lt;/p&gt;" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-04.jpg') }}" alt="MarineCaddie — warehouse inventory portfolio project" title="MarineCaddie — warehouse inventory portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Inventory Tracking</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Warehouse Inventory</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="100ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-05.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;OnTime Freight #05&lt;/h4&gt;&lt;p&gt;Timely Delivery&lt;/p&gt;" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-05.jpg') }}" alt="MarineCaddie — on-time freight portfolio project" title="MarineCaddie — on-time freight portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Timely Delivery</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">OnTime Freight</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="200ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-06.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Logistic Services #06&lt;/h4&gt;&lt;p&gt;Global Shipping&lt;/p&gt;" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-06.jpg') }}" alt="MarineCaddie — marine logistics portfolio project" title="MarineCaddie — marine logistics portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Global Shipping</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Logistic Services</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="300ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-07.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Road Transportation #07&lt;/h4&gt;&lt;p&gt;Transportation&lt;/p&gt;" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-07.jpg') }}" alt="MarineCaddie — port logistics portfolio project" title="MarineCaddie — port logistics portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Transportation</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Road Transportation</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="400ms" data-src="{{ theme_asset('assets/img/portfolio/portfolio-08.jpg') }}" data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;Security For Cargo #08&lt;/h4&gt;&lt;p&gt;Trusted Cargo&lt;/p&gt;" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="portfolio-style01 position-relative">
                            <div class="img-hover rounded">
                                <img src="{{ theme_asset('assets/img/portfolio/portfolio-08.jpg') }}" alt="MarineCaddie — cargo delivery portfolio project" title="MarineCaddie — cargo delivery portfolio project" class="rounded">
                            </div>
                            <div class="content">
                                <div class="pe-3">
                                    <span class="d-block mb-1 text-primary font-weight-500">Trusted Cargo</span>
                                    <h2 class="h5 mb-0"><a href="{{ route('portfolio.details') }}">Security For Cargo</a></h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('portfolio.details') }}" class="portfolio-link" aria-label="View portfolio details"><i class="ti-arrow-top-right" aria-hidden="true"></i></a>
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
