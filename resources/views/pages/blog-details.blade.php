@extends('layouts.app')

@section('title', 'Blog Details')
@section('meta_title', 'Article | MarineCaddie Shipping Blog')
@section('meta_description', 'Read the latest MarineCaddie article on supply chain orchestration, freight performance, and maritime logistics best practices.')
@section('meta_keywords', 'logistics article, supply chain blog post, MarineCaddie insights')
@section('og_type', 'article')
@section('schema_type', 'BlogPosting')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Details</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.details') }}#">Blog Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG-DETAIL
        ================================================== -->
        <section class="blogs">
            <div class="container">
                <div class="row mt-n2-9">
                    <!--  start blog left-->
                    <div class="col-lg-8 mt-2-9">
                        <div class="posts-wrapper">

                            <!--  start post-->
                            <article class="card card-style01 border-0">
                                <img src="{{ asset('assets/img/blog/blog-01.jpg') }}" alt="..." title="..." class="rounded-top">
                                <div class="card-body position-relative p-0">
                                    <div class="p-1-6 p-xl-1-9">
                                        <ul class="list-unstyled border-bottom pb-3 mb-4 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                            <li class="d-inline-block text-capitalize me-3"><a href="{{ route('blog.details') }}#" title="Posts by admin" rel="author"><i class="ti-user text-primary pe-2"></i>admin</a></li>
                                            <li class="d-inline-block me-3"><i class="ti-calendar me-1 text-primary"></i> Feb 10, 2026</li>
                                            <li class="d-inline-block"><a href="{{ route('blog.details') }}#"><i class="fas fa-comment me-1 text-primary"></i> 05 Comment</a></li>
                                        </ul>
                                        <h2 class="lh-base wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">Smart logistics improving efficiency and accuracy</h2>
                                        <p class="wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">In today’s fast-paced global economy, the efficiency of a company’s supply chain can determine its success. Transport and logistics services play a crucial role in ensuring goods move seamlessly from manufacturers to end consumers. By integrating smart route planning, advanced tracking systems, and data analytics, businesses can significantly reduce delivery times, minimize costs, and improve customer satisfaction.</p>
                                        <p class="mb-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">Technology continues to revolutionize how logistics companies operate. GPS tracking, automation, and real-time data sharing have made it easier than ever to monitor shipments and predict potential delays. Artificial Intelligence (AI) and Internet of Things (IoT) technologies are helping companies forecast demand, optimize inventory levels, and reduce fuel consumption. As a result, logistics providers can offer faster, more reliable, and eco-friendly solutions.</p>
                                        <div class="bg-dark p-1-9 border-bottom border-color-primary border-5 position-relative text-center overflow-hidden rounded mb-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                            <i class="ti-quote-left text-white display-10 mb-3 d-block"></i>
                                            <p class="text-white lead">"Connecting businesses, bridging distances.Driven by innovation, powered by reliability.Your logistics partner for a seamless tomorrow"</p>
                                            <cite class="text-primary lead fw-bold">- Richard Muldoone</cite>
                                        </div>
                                        <h3 class="mb-3 wow fadeInUp" data-wow-delay="200ms">Strategies</h3>
                                        <p class="wow fadeInUp" data-wow-delay="200ms">Sustainability has become a top priority for logistics companies around the world. From adopting electric and hybrid delivery vehicles to using recyclable packaging materials, the industry is actively working to reduce its carbon footprint. Green logistics not only benefits the environment but also enhances brand reputation and long-term profitability by appealing to environmentally conscious consumers and partners.</p>

                                        <ul class="list-style01 list-unstyled mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                                            <li>Logistics is the lifeline that keeps the world moving.</li>
                                            <li>We don’t just move cargo — we move possibilities.</li>
                                            <li>Transporting trust, delivering excellence.</li>
                                            <li>Connecting the world, one shipment at a time.</li>
                                            <li class="mb-0">Smart transport solutions for a moving world.</li>
                                        </ul>
                                        <div class="row mb-1-6 mb-sm-1-9">
                                            <div class="col-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="image-hover">
                                                    <img src="{{ asset('assets/img/blog/blog-detail-01.jpg') }}" alt="..." title="..." class="rounded">
                                                </div>
                                            </div>
                                            <div class="col-6 wow fadeInUp" data-wow-delay="200ms">
                                                <div class="image-hover">
                                                    <img src="{{ asset('assets/img/blog/blog-detail-02.jpg') }}" alt="..." title="..." class="rounded">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="wow fadeInUp" data-wow-delay="200ms">Despite technological advancements, the transport and logistics sector faces ongoing challenges such as fluctuating fuel prices, regulatory changes, and driver shortages. Additionally, the increasing demand for same-day or next-day delivery puts pressure on supply chains to remain agile and efficient.</p>
                                        <p class="mb-0 wow fadeInUp" data-wow-delay="200ms">The future of logistics lies in innovation and collaboration. With the rise of autonomous vehicles, drone deliveries, and smart warehouses, the industry is on the verge of a major transformation. Companies that embrace digital transformation and focus on customer-centric strategies will lead the way in shaping the next generation of transport and logistics services.</p>
                                        <div class="row border-top border-color-light-black pt-2-2 mt-2-4 g-0 align-items-center wow fadeInUp" data-wow-delay="200ms">
                                            <div class="col-md-6 col-xs-12 mb-2-3 mb-md-0">
                                                <div class="tags d-flex align-items-center">
                                                    <label class="h6 mb-0">Tags:</label>
                                                    <ul class="blog-tags">
                                                        <li><a href="{{ route('blog.details') }}#">cargo</a></li>
                                                        <li><a href="{{ route('blog.details') }}#">truck</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <label class="h6 mb-0">Share:</label>
                                                    <div class="share-post">
                                                        <ul class="m-0 p-0">
                                                            <li><a href="{{ route('blog.details') }}#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="{{ route('blog.details') }}#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="{{ route('blog.details') }}#"><i class="fab fa-youtube"></i></a></li>
                                                            <li><a href="{{ route('blog.details') }}#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--  end post-->

                            <div class="page-navigation mb-6 mt-2-9 wow fadeInUp" data-wow-delay="200ms">
                                <div class="prev-page">
                                    <div class="page-info">
                                        <a href="{{ route('blog.details') }}#">
                                            <span class="image-prev"><img src="{{ asset('assets/img/blog/blog-prev.jpg') }}" alt="..." title="..." class="rounded"></span>
                                            <div class="prev-link-page-info">
                                                <h4 class="prev-title">How will you know success when it show up?</h4>
                                                <span class="date-details"><span class="create-date">Feb 02, 2026</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="next-page">
                                    <div class="page-info">
                                        <a href="{{ route('blog.details') }}#">
                                            <div class="next-link-page-info">
                                                <h4 class="next-title">Digital tools for real-time shipment tracking</h4>
                                                <span class="date-details"><span class="create-date">Feb 08, 2026</span></span>
                                            </div>
                                            <span class="image-next"><img src="{{ asset('assets/img/blog/blog-next.jpg') }}" alt="..." title="..." class="rounded"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2-3 wow fadeInUp" data-wow-delay="200ms">
                                <div class="mb-1-9">
                                    <h3 class="h4">Comments</h3>
                                </div>
                                <div class="d-flex border-bottom pb-1-9 mb-1-9">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/avatar/avatar-05.jpg') }}" class="rounded-circle" alt="..." title="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="h6">Bella Cruz</div>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco voluptas sit aspernatur au laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a class="text-primary" href="{{ route('blog.details') }}#">Reply</a>
                                    </div>
                                </div>

                                <div class="ps-2-1">
                                    <div class="d-flex border-bottom pb-1-9 mb-1-9">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/img/avatar/avatar-06.jpg') }}" class="rounded-circle" alt="..." title="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="h6">James Tang</div>
                                            <p>Thank you so much for your good words.</p>
                                            <a class="text-primary" href="{{ route('blog.details') }}#">Reply</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/avatar/avatar-07.jpg') }}" class="rounded-circle" alt="..." title="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="h6">Cieran Prosser</div>
                                        <p>ut perspiciatis unde qui dolorem ipsum omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        <a class="text-primary" href="{{ route('blog.details') }}#">Reply</a>
                                    </div>
                                </div>

                            </div>

                            <div class="wow fadeInUp" data-wow-delay="200ms">
                                <h3 class="h4 mb-3">Leave a reply</h3>

                                <!-- Form -->
                                <form>
                                    <div class="row">
                                        <div class="form-group">
                                            <textarea name="reply" rows="6" class="form-control h-100" placeholder="Your Reply"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="butn-style01 border-0 md" type="submit">Leave Reply</button>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>

                        </div>
                    </div>
                    <!--  end blog left-->
                    <!--  start blog right-->
                    <div class="col-lg-4 mt-2-9">
                        <div class="blog-sidebar ps-xl-5">
                            <div class="widget bg-secondary mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="widget-content">
                                    <div class="mb-1-9 text-white h4">Search</div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <div class="input-group-append">
                                            <button class="butn-style01 primary-hover md border-0 rounded-right h-100" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget bg-secondary mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="widget-content">
                                    <div class="mb-1-9 text-white h4">Recent Posts</div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/img/blog/blog-thumb-01.jpg') }}" alt="..." title="..." class="rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 h6"><a href="{{ route('blog.details') }}#" class="text-white text-primary-hover">New design for cargo and warehouse.</a></div>
                                            <span class="text-white opacity8 small">Feb 13, 2026</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/img/blog/blog-thumb-02.jpg') }}" alt="..." title="..." class="rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 h6"><a href="{{ route('blog.details') }}#" class="text-white text-primary-hover">We very careful handling the valuable goods.</a></div>
                                            <span class="text-white opacity8 small">Feb 17, 2026</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/img/blog/blog-thumb-03.jpg') }}" alt="..." title="..." class="rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 h6"><a href="{{ route('blog.details') }}#" class="text-white text-primary-hover">Why can we love our logistic task so much?</a></div>
                                            <span class="text-white opacity8 small">Feb 20, 2026</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget bg-secondary mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="widget-content">
                                    <div class="mb-4 text-white h4">Categories</div>
                                    <ul class="category-list list-unstyled mb-0">
                                        <li><a href="{{ route('blog.details') }}#"><span>Cargo</span></a></li>
                                        <li><a href="{{ route('blog.details') }}#"><span>Supply</span></a></li>
                                        <li><a href="{{ route('blog.details') }}#"><span>Inventory</span></a></li>
                                        <li><a href="{{ route('blog.details') }}#"><span>Distribution</span></a></li>
                                        <li><a href="{{ route('blog.details') }}#"><span>Warehousing</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget bg-secondary mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="widget-content">
                                    <div class="mb-1-9 text-white h4">Tags</div>
                                    <div class="blog-tags mt-n2">
                                        <a href="{{ route('blog.details') }}#">Shipping</a>
                                        <a href="{{ route('blog.details') }}#">Transport</a>
                                        <a href="{{ route('blog.details') }}#">Tracking</a>
                                        <a href="{{ route('blog.details') }}#">Logistic</a>
                                        <a href="{{ route('blog.details') }}#">Delivery</a>
                                        <a href="{{ route('blog.details') }}#">Supply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget bg-secondary wow fadeInUp" data-wow-delay="100ms">
                                <div class="widget-content">
                                    <div class="mb-1-9 text-white h4">Follow Us</div>
                                    <ul class="social-icon-style03 ps-0">
                                        <li class="me-1"><a href="{{ route('blog.details') }}#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="me-1"><a href="{{ route('blog.details') }}#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li class="me-1"><a href="{{ route('blog.details') }}#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="me-0"><a href="{{ route('blog.details') }}#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end blog right-->
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
