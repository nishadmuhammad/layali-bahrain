@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','index')
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
                        <p>Maple tech space</p>
                        <a href="" class="d-none d-sm-block">Read nore</a>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>We conceptualize and collaborate with our clients to elevate their business in a
                                    constantly
                                    evolving Digital Age. Maple Tech Space has been helping businesses online reach
                                    their
                                    objectives
                                    by providing unique solutions to digital marketing challenges, since our inception
                                    in
                                    2013.</p>
                            </div>
                            <div class="col-sm-6">
                                <p>We conceptualize and collaborate with our clients to elevate their business in a
                                    constantly
                                    evolving Digital Age. Maple Tech Space has been helping businesses online reach
                                    their
                                    objectives
                                    by providing unique solutions to digital marketing challenges, since our inception
                                    in
                                    2013.</p>
                                <a href="" class="d-block d-sm-none">Read nore</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-services" data-aos="fade-up">
            <div class="container">
                <h3 class="text-center">Our services</h3>
                <a href="" class="text-center view-all">view all</a>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <div class="owl-carousel owl-theme services d-none d-sm-block" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>it consulting</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/website.png')}}" alt="" class="service-image img-fluid">
                                        <h5>website development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/it-consulting.png')}}" alt="" class="service-image img-fluid">
                                        <h5>digital marketing</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/app-dev.png')}}" alt="" class="service-image img-fluid">
                                        <h5>app development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/branding.png')}}" alt="" class="service-image img-fluid">
                                        <h5>branding</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="{{asset('assets/img/software.png')}}" alt="" class="service-image img-fluid">
                                        <h5>software development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/it-consulting.png" alt="" class="service-image img-fluid">
                                        <h5>it consulting</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/website.png" alt="" class="service-image img-fluid">
                                        <h5>website development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/it-consulting.png" alt="" class="service-image img-fluid">
                                        <h5>digital marketing</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/app-dev.png" alt="" class="service-image img-fluid">
                                        <h5>app development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/branding.png" alt="" class="service-image img-fluid">
                                        <h5>branding</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/software.png" alt="" class="service-image img-fluid">
                                        <h5>software development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="owl-carousel owl-theme services d-block d-sm-none" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/it-consulting.png" alt="" class="service-image img-fluid">
                                        <h5>it consulting</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/website.png" alt="" class="service-image img-fluid">
                                        <h5>website development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/it-consulting.png" alt="" class="service-image img-fluid">
                                        <h5>digital marketing</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/app-dev.png" alt="" class="service-image img-fluid">
                                        <h5>app development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/branding.png" alt="" class="service-image img-fluid">
                                        <h5>branding</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
                                                                          class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="">
                                        <img src="assets/img/software.png" alt="" class="service-image img-fluid">
                                        <h5>software development</h5>
                                        <p>With 14+ years of experiance in this domain, we will be able to provide you a
                                            360
                                            degree holistic approach on the IT adoptation for your business.</p>
                                        <a href="" class="read-more"><img src="assets/img/more-grey.png" alt=""
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
                <h3>Our clients</h3>
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
                        <h3>Our latest projects</h3>
                    </div>
                    <div class="col-sm-6 col-2">
                        <a href="" class="text-right view-all"><span>view all projects</span></a>
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
                        <h5>Clients testimonials</h5>
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
                                            <img src="{{asset('assets/img/sakthi.jpeg')}}" alt="">
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
                                        <span>We love the designs of Maple tech. I was really wondering how it is possible to bring up such a creative and brilliant design every day. I appreciate the hard work and efforts of your team. I can't give anything less than a 5 star for you guys...</span>
                                    </div>
                                    <div class="avatar">
                                        <div class="profile-image">
                                            <img src="{{asset('assets/img/aby.jpg')}}" alt="">
                                        </div>
                                        <div class="profile-info">
                                            <h5>Aby wilson</h5>
                                            <h6>Director - Codor technology solutions</h6>
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
            <h4>Maple tech space</h4>
            <h5>News and articles</h5>
            <div class="owl-carousel owl-theme news-articles">
                @foreach($posts as $post)
                    <div class="item">
                    <div class="block">
                        <a href="" class="block-image">
                            <img src="{{$post->thumbnail}}" alt="" class="img-fluid">
                        </a>
                        <h6>$post->title</h6>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span>{{date('M / d/ Y', strtotime($post->created_at))}}</span>
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
    @endsection
