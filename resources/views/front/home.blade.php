@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','index')
@section('logo'){{asset('assets/img/logo.png')}}@endsection
@section('content')
    <div class="index">
        <div class="banner">
            <img src="{{asset('assets/img/shape1.png')}}" alt="" class="img-fluid shape-one">
            <img src="{{asset('assets/img/shape2.png')}}" alt="" class="img-fluid shape-one">
            <img src="{{asset('assets/img/app01.png')}}" alt="" class="img-fluid shape-app" data-aos="fade-right">
            <img src="{{asset('assets/img/app02.png')}}" alt="" class="img-fluid shape-ap" data-aos="fade-right">
            <img src="{{asset('assets/img/shape3.png')}}" alt="" class="img-fluid shape-two">
            <img src="{{asset('assets/img/shape4.png')}}" alt="" class="img-fluid shape-three">
            <img src="{{asset('assets/img/shape5.png')}}" alt="" class="img-fluid shape-four">
            <div class="banner-content">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="banner-text">
                            <div class="banner-text-inner">
                                <h1>Mobile app</h1>
                                <h5>development</h5>
                                <a href="">More services</a>
                            </div>
                        </div>
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
                        <a href="" class="d-none d-sm-block">Read nore</a>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>We are a team of experienced Digital Creators who provide cost effective ,contemporary technological solutions  for a wider global reach. We help our clients harness the Digital wave by  providing exceptional services in Digital Marketing,Website and App Development , Branding, Search Engine Optimisation, IT Consulting, & Software Development. </p>
                            </div>
                            <div class="col-sm-6">
                                <p>We prioritize our clients' business strategy  while handling their  websites, social media and marketing campaigns for greater consumer visibility and impact. In our view, the power in human relationships is unmatched, which is why our team values transparency  and communication above anything else.</p>
                                <a href="" class="d-block d-sm-none">Read nore</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-services" data-aos="fade-up">
            <div class="container">
                <h3 class="text-center">Our Services</h3>
                <a href="" class="text-center view-all">View All</a>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <div class="owl-carousel owl-theme services d-none d-sm-block" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/branding.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the experts, MTS to guide you through and be a class apart from the competition.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital marketing and Business Strategy at Maple Tech Space.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>It Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve helped scores of companies redefine what they are doing online.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/app-dev.png')}}" alt="" class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best app developers are at your service for both Android and IOS apps.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/website.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Website Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/software.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid development processes leveraging the most cultured web technologies.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt="" class="service-image img-fluid">
                                        <h5>Search Engine optimization</h5>
                                        <p>At Maple Tech Space, we take care of all your business concerns regarding SEO and make sure that your website is coming on the first page of Google results.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt="" class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your business, creating devoted brand advocates and even driving leads and sales.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme services d-block d-sm-none" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/branding.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the experts, MTS to guide you through and be a class apart from the competition.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital marketing and Business Strategy at Maple Tech Space.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>It Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve helped scores of companies redefine what they are doing online.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/app-dev.png')}}" alt="" class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best app developers are at your service for both Android and IOS apps.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/website.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Website Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/software.png')}}" alt="" class="service-image img-fluid">
                                        <h5>Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid development processes leveraging the most cultured web technologies.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt="" class="service-image img-fluid">
                                        <h5>Search Engine optimization</h5>
                                        <p>At Maple Tech Space, we take care of all your business concerns regarding SEO and make sure that your website is coming on the first page of Google results.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt="" class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your business, creating devoted brand advocates and even driving leads and sales.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
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
                <h3>Few Big Names Our Team Associated in the Past</h3>
                <div class="owl-carousel owl-theme clients">
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client1.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client3.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client4.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client5.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client6.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client7.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client8.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client9.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client1.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client3.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client4.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client5.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client6.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client7.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="assets/img/client8.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="assets/img/client9.jpg" alt="" class="img-fluid"></a>
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
                        <a href="" class="text-right view-all"><span>View All Projects</span></a>
                    </div>
                </div>
                <div class="owl-carousel owl-theme portfolio-slider">
                    <div class="item">
                        <div class="portfolio">
                            <a href="" class="portfolio-image">
                                <img src="assets/img/portfolio1.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="">website</a></h4>
                                <h3><a href="">Startup landing page design</a></h3>
                                <a href="" class="arrow"><img src="assets/img/arrow.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="" class="portfolio-image">
                                <img src="assets/img/portfolio2.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="">website</a></h4>
                                <h3><a href="">Startup landing page design</a></h3>
                                <a href="" class="arrow"><img src="assets/img/arrow.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="" class="portfolio-image">
                                <img src="assets/img/portfolio1.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="">website</a></h4>
                                <h3><a href="">Startup landing page design</a></h3>
                                <a href="" class="arrow"><img src="assets/img/arrow.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio">
                            <a href="" class="portfolio-image">
                                <img src="assets/img/portfolio2.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="portfolio-details">
                                <h4><a href="">website</a></h4>
                                <h3><a href="">Startup landing page design</a></h3>
                                <a href="" class="arrow"><img src="assets/img/arrow.png" alt="" class="img-fluid"></a>
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
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-comment">
                                        <span>I will definitely recommend MTS to others. Thes guys are amazing and make sure you become a loyal customer to them. We strongly recommend Maple tech for all the Digital marketing activities... Clear thought and successful strategies</span>
                                    </div>
                                    <div class="avatar">
                                        <div class="profile-image">
                                            <img src="{{asset('assets/img/sakthi.jpeg')}}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="profile-info">
                                            <h5>Shakti Swaroop Dash</h5>
                                            <h6>City Head - Hunger Box</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-comment">
                                        <span>We love the designs of Maple Tech Space. I was really wondering how it is possible to bring up such a creative and brilliant design every day. I appreciate the hard work and efforts of your team. I can't give anything less than a 5 star for you guys...</span>
                                    </div>
                                    <div class="avatar">
                                        <div class="profile-image">
                                            <img src="{{asset('assets/img/aby.jpg')}}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="profile-info">
                                            <h5>Aby Wilson</h5>
                                            <h6>Director - Codor technology solutions</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-comment">
                                        <span>Working with MTS is always a pleasure as they resonate with inventive ideas. With an energetic and enthusiastic team with great domain knowledge, there is only one way to go for MTS.... up and up. They have sharp focus on market trends and a keen intent to inter twine technology with client needs. Undoubtedly, the future lies with MTS</span>
                                    </div>
                                    <div class="avatar">
                                        <div class="profile-image">
                                            <img src="{{asset('assets/img/achu.jpeg')}}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="profile-info">
                                            <h5>M.Achyuth Kumar</h5>
                                            <h6>Vice President (Retired)
                                                Private Consulting Firm, Chennai</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h6>{{$post->title}}</h6>
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

                        <h6>Get a free</h6>
                        <h4>30 Minutes<br>
                            Consultation</h4>
                        <p>Talk to our amazing team of IT Experts who have over 15 years of experience in Digital Marketing , IT Consulting , SEO ,Website development and Content Generation.</p>
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
