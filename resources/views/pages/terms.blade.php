@extends('layouts.app')

@section('title', 'Terms & Conditions')
@section('meta_title', 'Terms & Conditions | MarineCaddie Shipping')
@section('meta_description', 'Terms and conditions for using the MarineCaddie Shipping website and engaging with our 4PL logistics services.')
@section('meta_keywords', 'MarineCaddie terms, terms of use, logistics terms and conditions')
@section('schema_type', 'WebPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Terms &amp; Conditions</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- TERMS AND CONDITIONS
        ================================================== -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-1-6 p-md-2-2 border border-color-light-black rounded">
                            <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                                <h2 class="mb-3 h4">01. Acceptance of terms</h2>
                                <p class="mb-4">These Terms &amp; Conditions govern your use of the MarineCaddie Shipping website and any general information published here about our 4PL supply chain orchestration services. By accessing the site, you agree to these terms. If you do not agree, please do not use the website.</p>
                                <ul class="list-style1 list-unstyled mb-0">
                                    <li>Content is provided for general business information and does not replace a signed service agreement.</li>
                                    <li>Operational engagements are governed by separate contracts, statements of work, and applicable shipping documents.</li>
                                    <li>You agree to use the site lawfully and not to disrupt its security or availability.</li>
                                </ul>
                            </div>
                            <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                                <h2 class="mb-3 h4">02. Services information</h2>
                                <p class="mb-0">Descriptions of air, ocean, road, rail, warehousing, and logistics orchestration capabilities are illustrative. Service scope, pricing, SLAs, and compliance requirements are confirmed only in writing for each engagement. MarineCaddie may update website content without notice to reflect evolving offerings.</p>
                            </div>
                            <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                                <h2 class="mb-3 h4">03. Intellectual property</h2>
                                <p class="mb-0">All trademarks, logos, text, graphics, and other materials on this website are owned by MarineCaddie Shipping or used under license. You may not copy, modify, distribute, or commercially exploit site content without prior written permission, except for personal, non-commercial viewing.</p>
                            </div>
                            <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                                <h2 class="mb-3 h4">04. Limitation of liability</h2>
                                <p>The website and its content are provided “as is.” To the fullest extent permitted by law, MarineCaddie disclaims warranties of accuracy, completeness, or fitness for a particular purpose regarding website content.</p>
                                <p class="mb-0">MarineCaddie is not liable for indirect, incidental, or consequential damages arising from use of the website. Liability related to logistics services is defined exclusively in the applicable commercial agreement.</p>
                            </div>
                            <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                                <h2 class="mb-3 h4">05. Third-party links</h2>
                                <p class="mb-0">Our site may reference third-party tools, partners, or resources. We are not responsible for the content, privacy practices, or availability of external sites. Accessing third-party links is at your own risk.</p>
                            </div>
                            <div>
                                <h2 class="mb-3 h4">06. Changes and contact</h2>
                                <p class="mb-0">We may revise these Terms &amp; Conditions at any time by posting an updated version on this page. For questions, contact info@marinecaddie.com or (+1) 800 555 0148.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
