@extends('layouts.app')

@section('title', 'Blog')
@section('meta_title', 'Logistics Insights Blog | MarineCaddie Shipping')
@section('meta_description', 'Insights on maritime logistics, ship spare delivery, freight trends, and port operations from MarineCaddie Shipping.')
@section('meta_keywords', 'logistics blog, maritime logistics news, ship spares insights, freight forwarding')
@section('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')
@section('schema_type', 'Blog')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_webp('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_webp('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog') }}#">Blog Standard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG GRID
        ================================================== -->
        <section>
            <div class="container">
                <div class="row gx-xxl-5 mt-n2-2">
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-01.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">10</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Shipping</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Smart logistics improving efficiency and accuracy</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>05</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-02.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">08</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Transport</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Digital tools for real-time shipment tracking</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>02</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-03.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">06</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Tracking</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Smart logistics solutions for modern enterprises</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>04</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-04.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">05</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Logistic</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Why can we love our logistic task so much?</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>07</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-05.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">03</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Delivery</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">Taking your sales to the next level with faster delivery.</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>08</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <article class="card card-style01">
                            <div class="blog-img position-relative overflow-hidden rounded-top image-hover">
                                <img src="{{ theme_asset('assets/img/blog/blog-06.jpg') }}" alt="..." title="..." class="rounded-top">
                            </div>
                            <div class="card-body position-relative pt-2-6 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
                                <div class="post-date">
                                    <span class="mb-0 d-block lh-1 display-20 display-lg-17">02</span>
                                    <span class="d-block month">Feb</span>
                                </div>
                                <span class="text-uppercase fw-bold display-31"><a href="{{ route('blog') }}#">Supply</a></span>
                                <h2 class="h4 mb-0 mt-3"><a href="{{ route('blog.details') }}">How will you know success when it show up?</a></h2>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3 border-color-light-black rounded-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold display-30"><i class="ti-user pe-2"></i><a href="{{ route('blog') }}#">Admin</a></div>
                                    <span><i class="ti-comment-alt me-2"></i>06</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
