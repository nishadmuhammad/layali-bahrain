@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="services-page page">
        <div class="banner-common">
            <div class="container">
                <h1>Services</h1>
            </div>
        </div>
        <div class="container">
            <div class="all-services">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/it-consulting.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">01.</p>
                                <h4><a href="">IT Consulting</a></h4>
                                <span>With 14+ years of experiance in this domain, we will be able to provide you a 360 degree holistic approach on </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/branding.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">02.</p>
                                <h4><a href="">Branding</a></h4>
                                <span>Your brand and logo speak a lot about who you are as a business. The fine crafting that goes into your</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/digital-marketing.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">03.</p>
                                <h4><a href="">Digital Marketing</a></h4>
                                <span>Digital Marketing is the left platform for promotions and also establishing a company or a product. Highlighting themselves</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/social-media-marketing.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">04.</p>
                                <h4><a href="">Social Media Marketing</a></h4>
                                <span>Social media is the place where most of the online people spend their time when they are with a fresh mind looking </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/search-engine-optimization.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">05.</p>
                                <h4><a href="">Search Engine Optimization</a></h4>
                                <span>SEO is the path of gaining top search engine placement for relevant keyword phrases that making search</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/it-consulting.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">06.</p>
                                <h4><a href="">Website Development
                                        & Web Design</a></h4>
                                <span>A Website is the face of any business. Don't just settle with a template-based quick website. We offer adept</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/android-ios.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">07.</p>
                                <h4><a href="">Android And Ios Development</a></h4>
                                <span>If you're looking to leverage mobile technology for your business, our best app developers are at your</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="">
                                    <img src="assets/img/software.svg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <p class="count">08.</p>
                                <h4><a href="">Custom Software Development</a></h4>
                                <span>We build robust and scalable web apps that are custom made using rapid development processes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="lets-talk">
                        <span class="text-center d-block">Got A Project?</span>
                        <h3 class="text-center">Let’s talk. <img src="assets/img/lets-talk.png" alt=""></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="free-consultation" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="text-content">

                        <h6>Get a Free</h6>
                        <h4>30 Minutes<br>
                            Consultation</h4>
                        <p>Talk to our amazing team of IT Experts who have over 15 years of experience in Digital Marketing , IT Consulting , SEO ,Website development and Branding.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <form action="{{route('enquire')}}" method="post" class="php-email-form" data-aos="zoom-in">
                        @csrf
                        <input type="text" id="name" placeholder="Name" name="name" class="form-control">
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control">
                        <input type="tel" id="phone" placeholder="Phone" name="phone" class="form-control">
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <button type="submit">Submit <img src="{{asset('assets/img/arrow.png')}}" alt=""></button>
                        <div class="pt-2">
                            <div id="thanks" style="display: none;text-align: center">
                                Thank you for contacting us.<br/>We will get back to you soon!
                            </div>
                            <div class="response" style="display: none">
                                Please wait <i class="fa fa-cog fa-spin"></i>
                            </div>
                            <div class="error-message mt-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
