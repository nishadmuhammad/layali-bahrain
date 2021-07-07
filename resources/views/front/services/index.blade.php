@extends('front.layouts.app')
@section('title', 'Services | SEO Toronto | Web Design & Development | SMO')
@section('description','We are the Best IT consulting firm in Toronto. We offer affordable SEO & SMM Services. We have dedicated team for Custom software & Mobile Application Development')
@section('keywords','toronto seo company,seo optimization toronto,seo company toronto,toronto seo services,web development toronto,mobile web design toronto,toronto web designer,web design toronto company,marketing agencies toronto,marketing agency toronto,digital marketing services toronto,digital marketing company toronto')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com/services')
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
                                <h4><a href="{{route('servicesShow','it-consulting')}}">Vat Consultation</a></h4>
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
                                <h4><a href="{{route('servicesShow','branding')}}">Vat Audits</a></h4>
                                <!-- <span>Branding, at its core, is the process of building an identity that will become the foundation for the future of your business. </span> -->
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
                                <h4><a href="{{route('servicesShow','digital-marketing')}}">Accounting & Book Keeping</a></h4>
                                <!-- <span>Digital marketing encompasses all marketing efforts that use an electronic device or the internet. </span> -->
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
                                <h4><a href="{{route('servicesShow','social-media-marketing')}}">Trade Name Registration</a></h4>
                                <!-- <span>Social media marketing is a powerful way for businesses of all sizes to reach prospects and customers.</span> -->
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
                                <h4><a href="{{route('servicesShow','search-engine-optimization')}}">Tamkeen Application</a></h4>
                                <!-- <span>You can promote your business through search engine optimization, but do you know how? Well, not everyone’s cup of tea.</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-aos="zoom-in-up">
                            <div class="service-image">
                                <a href="{{route('servicesShow','website-design-and-development')}}">
                                    <img src="{{asset('assets/img/branding.svg')}}" alt="Web Design" class="img-fluid">
                                </a>
                            </div>
                            <div class="service-details">
                                <h4><a href="{{route('servicesShow','website-design-and-development')}}">Business Sale & Purchase
                                        & Web Design</a></h4>
                                <!-- <span>In digital space, websites are the front face of your business. In LAYALI BAHRAIN, we strongly believe that websites plays a crucial role in shaping your brand.</span> -->
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
                                <h4><a href="{{route('servicesShow','android-and-ios-development')}}">Over 60 Visa Applications</a></h4>
                                <!-- <span>If you have a vision for an application, we have the tools to make that vision a reality. </span> -->
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
                                <h4><a href="{{route('servicesShow','custom-software-development')}}">Embassy Service</a></h4>
                                <!-- <span>We provide software consulting services, which assess the processes of a business or organization and provide software solutions and other recommendations based on this assessment.</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="lets-talk">
                        <span class="text-center d-block">Got A Project?</span>
                        <h3 class="text-center">Let’s talk.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
