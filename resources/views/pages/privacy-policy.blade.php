@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_title', 'Privacy Policy | MarineCaddie Shipping')
@section('meta_description', 'Read how MarineCaddie Shipping collects, uses, and protects personal information when you use our website and logistics services.')
@section('meta_keywords', 'MarineCaddie privacy policy, data protection, website privacy')
@section('schema_type', 'WebPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ theme_asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ theme_asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Privacy Policy</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRIVACY POLICY
        ================================================== -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-1-6 p-md-2-2 border border-color-light-black rounded">
                            <div class="mb-5">
                                <h2 class="mb-4 h4">Introduction</h2>
                                <p>MarineCaddie Shipping (“MarineCaddie,” “we,” “us,” or “our”) respects your privacy. This Privacy Policy explains how we collect, use, and protect personal information when you visit our website, contact our team, or engage our marine logistics and freight forwarding services.</p>
                                <p class="pb-0">By using our website or submitting information to us, you acknowledge the practices described in this policy. If you do not agree, please discontinue use of the site and contact us with any questions at ops@marinecaddie.com.</p>
                            </div>
                            <div class="mb-5">
                                <h2 class="mb-4 h4">Information we collect</h2>
                                <p>We may collect information you provide directly, such as your name, company, email address, phone number, and message content when you request a quote, subscribe to updates, or ask for support. We may also collect limited technical data such as browser type, device information, and pages visited to help us improve site performance and security.</p>
                                <ul class="list-style01 list-unstyled mb-4 ps-0">
                                    <li>Contact and inquiry details submitted through forms</li>
                                    <li>Business context shared for logistics or maritime service discussions</li>
                                    <li>Website usage and diagnostic information</li>
                                </ul>
                                <p class="mb-0">We do not knowingly collect sensitive personal data through this website unless you choose to provide it in a message or attachment.</p>
                            </div>
                            <div class="mb-5">
                                <h2 class="mb-4 h4">How we use information</h2>
                                <p>We use collected information to respond to inquiries, provide and improve our services, communicate about engagements, maintain website security, and meet legal or compliance obligations related to our business operations.</p>
                                <p class="mb-0">We do not sell personal information. We may share information with trusted service providers who support hosting, communications, or analytics, subject to confidentiality obligations, or when required by law.</p>
                            </div>
                            <div>
                                <h2 class="mb-4 h4">Your choices and contact</h2>
                                <p class="mb-0">You may request access, correction, or deletion of personal information we hold about you, subject to applicable law. For privacy requests, email ops@marinecaddie.com or call +971 50 5643375. We may update this policy from time to time; the revised version will be posted on this page.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
