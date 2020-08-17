@extends('front.layouts.app')
@section('title', 'Services | SEO Toronto | Web Design & Development | SMO')
@section('description','We are the Best IT consulting firm in Toronto. We offer affordable SEO & SMM Services. We have dedicated team for Custom software & Mobile Application Development')
@section('keywords','toronto seo company,seo optimization toronto,seo company toronto,toronto seo services,web development toronto,mobile web design toronto,toronto web designer,web design toronto company,marketing agencies toronto,marketing agency toronto,digital marketing services toronto,digital marketing company toronto')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.mapletechspace.com/services')
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
                                <a href="{{route('servicesShow','it-consulting')}}">
                                    <img src="{{asset('assets/img/it-consulting.svg')}}" alt="IT Consulting" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','it-consulting')}}">IT Consulting</a></h4>
                                <span>With our deep understanding of the web and strong marketing expertise, we’ve helped scores of companies redefine what they are doing online.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','branding')}}">
                                    <img src="{{asset('assets/img/branding.svg')}}" alt="Branding" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','branding')}}">Branding</a></h4>
                                <span>Branding, at its core, is the process of building an identity that will become the foundation for the future of your business. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','digital-marketing')}}">
                                    <img src="{{asset('assets/img/digital-marketing.svg')}}" alt="Digital Marketing" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','digital-marketing')}}">Digital Marketing</a></h4>
                                <span>Digital marketing encompasses all marketing efforts that use an electronic device or the internet. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','social-media-marketing')}}">
                                    <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt="SMM" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','social-media-marketing')}}">Social Media Marketing</a></h4>
                                <span>Social media marketing is a powerful way for businesses of all sizes to reach prospects and customers.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','search-engine-optimization')}}">
                                    <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt="SEO" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','search-engine-optimization')}}">Search Engine Optimization</a></h4>
                                <span>You can promote your business through search engine optimization, but do you know how? Well, not everyone’s cup of tea.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','website-design-and-development')}}">
                                    <img src="{{asset('assets/img/web-development-designing.svg')}}" alt="Web Design" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','website-design-and-development')}}">Website Development
                                        & Web Design</a></h4>
                                <span>In digital space, websites are the front face of your business. In Maple Tech Space, we strongly believe that websites plays a crucial role in shaping your brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','android-and-ios-development')}}">
                                    <img src="assets/img/android-ios.svg" alt="App Development" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','android-and-ios-development')}}">Android and iOS Development</a></h4>
                                <span>If you have a vision for an application, we have the tools to make that vision a reality. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','custom-software-development')}}">
                                    <img src="{{asset('assets/img/software.svg')}}" alt="Custom Software" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','custom-software-development')}}">Custom Software Development</a></h4>
                                <span>We provide software consulting services, which assess the processes of a business or organization and provide software solutions and other recommendations based on this assessment.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="lets-talk">
                        <span class="text-center d-block">Got A Project?</span>
                        <h3 class="text-center">Let’s talk. <img src="{{asset('assets/img/lets-talk.png')}}" alt="Arrow"></h3>
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
                        <input type="text" id="name" placeholder="Name" name="name" class="form-control" required>
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control" required>
                        <input type="tel" id="phone" placeholder="Phone" name="phone" class="form-control" required>
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <button type="submit">Submit <img src="{{asset('assets/img/arrow.png')}}" alt="Arrow"></button>
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
