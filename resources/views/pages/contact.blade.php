@extends('layouts.app')

@section('title', 'Contact')
@section('meta_title', 'Contact MarineCaddie Shipping | Talk to Our 4PL Team')
@section('meta_description', 'Contact MarineCaddie Shipping for 4PL supply chain orchestration. Email info@marinecaddie.com or call (+1) 800 555 0148.')
@section('meta_keywords', 'contact MarineCaddie, logistics quote, 4PL inquiry, maritime logistics contact')
@section('schema_type', 'ContactPage')
@section('header_class', 'scrollHeader')

@section('content')
<!-- PAGETITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('assets/img/banner/page-title.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/banner/page-title.jpg') }}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('contact') }}#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FROM
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center mt-n2-9">
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="bg-white p-1-9 p-md-2-9 p-xl-6">
                            <div class="mb-3">
                                <h2 class="ls-minus-2px display-4 font-weight-800 lh-1 mb-1-9">Get in touch</h2>
                            </div>
                            <form class="contact quform" action="#" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Your Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group quform-select-replaced">
                                                <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-captcha">
                                                        <div class="quform-captcha-inner">
                                                            <img src="{{ asset('assets/images/courier-new-light.png') }}" alt="..." title="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn-style01 w-100 border-0" type="submit">Send Message</button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="ps-xl-1-9 ps-xxl-7">
                            <div class="mb-1-9 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Contact Us.</span>
                                <h2 class="display-4 font-weight-800 mb-0 lh-1">How can we help orchestrate your supply chain?</h2>
                            </div>
                            <div class="row mt-n1-9 mb-6 g-5">
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Coverage</h3>
                                    <p class="mb-0">Global maritime &amp; logistics coverage</p>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Phone</h3>
                                    <p class="mb-0"><a href="tel:+18005550148" class="text-primary text-secondary-hover">(+1) 800 555 0148</a></p>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Follow us</h3>
                                    <ul class="social-icon-style04 list-unstyled mb-0">
                                        <li><a href="{{ route('contact') }}#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ route('contact') }}#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="{{ route('contact') }}#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{ route('contact') }}#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-1-9">
                                    <h3 class="h4">Email</h3>
                                    <p class="mb-0">Your supply chain, orchestrated.</p>
                                    <p class="mb-0"><a href="mailto:info@marinecaddie.com" class="text-decoration-underline text-primary text-secondary-hover">info@marinecaddie.com</a></p>
                                </div>
                            </div>
                            <div class="display-custom-1 text-primary font-weight-700">
                                <p class="mb-0">25+ Years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT MAP
        ================================================== -->
        <section class="p-0">
            <div class="map bg-secondary d-flex align-items-center justify-content-center text-center" style="min-height: 380px;">
                <div class="px-4 py-5">
                    <h3 class="text-white h4 mb-3">Global maritime &amp; logistics coverage</h3>
                    <p class="text-white opacity8 mb-3 mb-0">Reach MarineCaddie Shipping for 4PL orchestration support worldwide.</p>
                    <p class="mb-1"><a href="tel:+18005550148" class="text-primary">(+1) 800 555 0148</a></p>
                    <p class="mb-0"><a href="mailto:info@marinecaddie.com" class="text-primary">info@marinecaddie.com</a></p>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
@endsection
