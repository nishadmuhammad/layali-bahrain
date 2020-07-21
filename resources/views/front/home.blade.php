@extends('front.layouts.app')
@section('title', 'Best SEO, Digital Marketing, Web Development Company Toronto')
@section('description','We are a team of Digital Creators expertise in SEO, Digital and Social Media Marketing, Website Development, Application Development, IT consulting and Branding.')
@section('keywords','Best seo company in toronto,Best digital marketing company in toronto,Best web development companies in toronto,Toronto seo company,Toronto digital marketing agency,Best web development companies in toronto,Web development agency toronto,Low Cost SEO Services toronto,Social Media Optimization')
@section('ogImage'){{asset('assets/img/logo.png')}}@endsection
@section('navClass','index')
@section('logo'){{asset('assets/img/logo.png')}}@endsection
@section('content')
    <div class="index">
        <div class="owl-carousel owl-theme banner-slider">

            <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/business-strategy.png" alt="" class="img-fluid d-none d-sm-block">
                        <img src="assets/img/business-strategy-2.png" alt="" class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>IT Consulting & Branding</h1>
                        <a href="{{route('servicesShow','it-consulting')}}">More services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/web-design.png" alt="" class="img-fluid d-none d-sm-block">
                        <img src="assets/img/web-design2.png" alt="" class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>Website Design and Development</h1>
                        <a href="{{route('servicesShow','website-design-and-development')}}">More services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/seo-banner.png" alt="" class="img-fluid d-none d-sm-block">
                        <img src="assets/img/seo-banner2.png" alt="" class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>SEO & Digital Marketing</h1>
                        <a href="{{route('servicesShow','search-engine-optimization')}}">More services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <h2>About</h2>
                        <p>Maple Tech Space</p>
                        <a href="{{route('about')}}" class="d-none d-sm-block">Read more</a>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <p style="text-align: justify;text-justify: inter-word;">We are a team of experienced Digital Creators who provide cost effective, contemporary technological solutions for a wider global reach. We help our clients harness the Digital wave by providing exceptional services in Digital Marketing,Website and App Development , Branding, Search Engine Optimisation, IT Consulting, & Software Development</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="text-align: justify;text-justify: inter-word;">We prioritize our clients' business strategy while handling their websites, social media and marketing campaigns for greater consumer visibility and impact. In our view, the power of human relationships is unmatched, which is why our team values transparency and communication above anything else.</p>
                                <a href="{{route('about')}}" class="d-block d-sm-none">Read more</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-services" data-aos="fade-up">
            <div class="container">
                <h3 class="text-center">Our Services</h3>
                <a href="{{route('services')}}" class="text-center view-all">View All</a>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <div class="owl-carousel owl-theme services d-none d-sm-block" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','branding')}}">
                                        <img src="{{asset('assets/img/branding.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the
                                            experts, MTS to guide you through and be a class apart from the
                                            competition.</p>
                                        <a href="{{route('servicesShow','branding')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','digital-marketing')}}">
                                        <img src="{{asset('assets/img/digital-marketing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital
                                            marketing and Business Strategy at Maple Tech Space.</p>
                                        <a href="{{route('servicesShow','digital-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','it-consulting')}}">
                                        <img src="{{asset('assets/img/it-consulting.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>IT Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve
                                            helped scores of companies redefine what they are doing online.</p>
                                        <a href="{{route('servicesShow','it-consulting')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','android-and-ios-development')}}">
                                        <img src="{{asset('assets/img/android-ios.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best
                                            app developers are at your service for both Android and iOS apps.</p>
                                        <a href="{{route('servicesShow','android-and-ios-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','website-design-and-development')}}">
                                        <img src="{{asset('assets/img/web-development-designing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Website Design and Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your
                                            uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="{{route('servicesShow','website-design-and-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','custom-software-development')}}">
                                        <img src="{{asset('assets/img/software.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Custom Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid
                                            development processes leveraging the most cultured web technologies.</p>
                                        <a href="{{route('servicesShow','custom-software-development')}}" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','search-engine-optimization')}}">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Search Engine Optimization</h5>
                                        <p>At Maple Tech Space, we take care of all your business concerns regarding SEO
                                            and make sure that your website is coming on the first page of Google
                                            results.</p>
                                        <a href="{{route('servicesShow','search-engine-optimization')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','social-media-marketing')}}">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your
                                            business, creating devoted brand advocates and even driving leads and
                                            sales.</p>
                                        <a href="{{route('servicesShow','social-media-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme services d-block d-sm-none" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','branding')}}">
                                        <img src="{{asset('assets/img/branding.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the
                                            experts, MTS to guide you through and be a class apart from the
                                            competition.</p>
                                        <a href="{{route('servicesShow','branding')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','digital-marketing')}}">
                                        <img src="{{asset('assets/img/digital-marketing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital
                                            marketing and Business Strategy at Maple Tech Space.</p>
                                        <a href="{{route('servicesShow','digital-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','it-consulting')}}">
                                        <img src="{{asset('assets/img/it-consulting.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>IT Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve
                                            helped scores of companies redefine what they are doing online.</p>
                                        <a href="{{route('servicesShow','it-consulting')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','android-and-ios-development')}}">
                                        <img src="{{asset('assets/img/android-ios.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best
                                            app developers are at your service for both Android and IOS apps.</p>
                                        <a href="{{route('servicesShow','android-and-ios-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','website-design-and-development')}}">
                                        <img src="{{asset('assets/img/web-development-designing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Website Design and Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your
                                            uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="{{route('servicesShow','website-design-and-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','custom-software-development')}}">
                                        <img src="{{asset('assets/img/software.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Custom Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid
                                            development processes leveraging the most cultured web technologies.</p>
                                        <a href="{{route('servicesShow','custom-software-development')}}" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','search-engine-optimization')}}">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Search Engine optimization</h5>
                                        <p>At Maple Tech Space, we take care of all your business concerns regarding SEO
                                            and make sure that your website is coming on the first page of Google
                                            results.</p>
                                        <a href="{{route('servicesShow','search-engine-optimization')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','social-media-marketing')}}">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt=""
                                             class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your
                                            business, creating devoted brand advocates and even driving leads and
                                            sales.</p>
                                        <a href="{{route('servicesShow','social-media-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                          alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-clients">
            <div class="container">
                <h3>Few <span style="font-weight: bolder; font-size: 35px">Big Names</span> Our Team Members Associated in the Past</h3>
                <div class="owl-carousel owl-theme clients">
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/microsoft.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/google.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/amazon.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Colliers_Logo.jpg')}}" alt=""
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Dell_logo.png')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Flipkart.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/ICICI_bank_logo.png')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Idea.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Intel.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/JLL.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/metricfox.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Nissan.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Pepsi.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/V-GAURD.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/walmart.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Wipro-Icon-PNG-1024x1024.png')}}" alt=""
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client1.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client4.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client5.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client6.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client7.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client8.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client9.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="portfolios" data-aos="fade-up">
            <div class="container">
                <h6>Portfolio</h6>
                <div class="row">
                    <div class="col-sm-6 col-10">
                        <h3>Our Latest Projects</h3>
                    </div>
                    <div class="col-sm-6 col-2">
                        <a href="{{route('portfolio')}}" class="text-right view-all"><span>View All Projects</span></a>
                    </div>
                </div>
                <div class="owl-carousel owl-theme portfolio-slider">
                    <div class="item">
                        <div class="portfolio">
                            <a href="{{route('portfolio')}}" class="portfolio-image">
                                <img src="{{asset('assets/img/home-portfolio01.png')}}" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="{{route('portfolio')}}">website</a></h4>
                                <h3><a href="{{route('portfolio')}}">Manukaii</a></h3>
                                <a href="{{route('portfolio')}}" class="arrow"><img src="{{asset('assets/img/arrow.png')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="{{route('portfolio')}}" class="portfolio-image">
                                <img src="{{asset('assets/img/home-portfolio02.png')}}" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="{{route('portfolio')}}">website</a></h4>
                                <h3><a href="{{route('portfolio')}}">Foster</a></h3>
                                <a href="{{route('portfolio')}}" class="arrow"><img src="{{asset('assets/img/arrow.png')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="{{route('portfolio')}}" class="portfolio-image">
                                <img src="{{asset('assets/img/home-portfolio03.png')}}" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="{{route('portfolio')}}">website</a></h4>
                                <h3><a href="{{route('portfolio')}}">Sybu Mathew</a></h3>
                                <a href="{{route('portfolio')}}" class="arrow"><img src="{{asset('assets/img/arrow.png')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="{{route('portfolio')}}" class="portfolio-image">
                                <img src="{{asset('assets/img/home-portfolio04.png')}}" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="{{route('portfolio')}}">website</a></h4>
                                <h3><a href="{{route('portfolio')}}">All American Taxidermy</a></h3>
                                <a href="" class="arrow"><img src="{{asset('assets/img/arrow.png')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
        <div class="testimonials" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h5>Client Testimonials</h5>
                        <h6>See what people are saying about us.</h6>
                        <p>At Maple Tech Space, we consider the clients’ vision our utmost priority as we transform and
                            reflect it in the Digital space. We prioritize business needs at the center of all our work
                            and are constantly driven by results.</p>
                    </div>
                    <div class="col-sm-7">
                        <div class="owl-carousel owl-theme testimonial-slider">
                            @foreach($testimonials as $testimonial)
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="testimonial-comment">
                                            <span>{{$testimonial->description}}</span>
                                        </div>
                                        <div class="avatar">
                                            <div class="profile-image">
                                                <img src="{{asset($testimonial->profile_pic)}}" class="rounded-circle"
                                                     alt="">
                                            </div>
                                            <div class="profile-info">
                                                <h5>{{$testimonial->name}}</h5>
                                                <h6>{{$testimonial->designation}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-counter1"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="news-and-articles" data-aos="fade-up">
            <h4>Maple Tech Space</h4>
            <h5>News and articles</h5>
            <div class="owl-carousel owl-theme news-articles">
                @foreach($posts as $post)
                    <div class="item">
                        <div class="block">
                            <a href="{{route('showBlog',$post->slug)}}" class="block-image">
                                <img src="{{$post->thumbnail}}" alt="" class="img-fluid">
                            </a>
                            <h6>{{ucwords(strtolower($post->title))}}</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>{{date('M  d Y', strtotime($post->created_at))}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="locations" data-aos="fade-up">
            <div class="container">
                <img src="assets/img/location.png" alt="" class="img-fluid">
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
                        <p>Talk to our amazing team of IT Experts who have over 15 years of experience in Digital
                            Marketing , IT Consulting , SEO ,Website development and Branding.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <form action="{{route('enquire')}}" method="post" class="php-email-form" data-aos="zoom-in">
                        @csrf
                        <input type="text" id="name" placeholder="Name" name="name" class="form-control" required>
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control" required>
                        <input type="tel" id="phone" placeholder="Phone" name="phone" class="form-control" required>
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
