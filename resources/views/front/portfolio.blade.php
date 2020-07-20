@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="portfolio page">
        <div class="banner">
            <div class="owl-carousel owl-theme portfolio-banner" data-aos="fade-in">
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="assets/img/project1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Project</h2>
                            <p>Website</p>
                            <a href=""><img src="assets/img/more-grey.png" alt="" class="img-fluid">View project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="assets/img/project1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Project</h2>
                            <p>Website</p>
                            <a href=""><img src="assets/img/more-grey.png" alt="" class="img-fluid">View project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="assets/img/project1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Project</h2>
                            <p>Website</p>
                            <a href=""><img src="assets/img/more-grey.png" alt="" class="img-fluid">View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-inner">
            <div class="container">
                <h5>Portfolio</h5>
                <h4>Our latest projects</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p>We conceptualize and collaborate with our clients to elevate their business in a constantly
                            evolving Digital Age. Maple Tech Space has been helping businesses online reach their
                            objectives</p>
                    </div>
                    <div class="col-sm-6">
                        <p>We conceptualize and collaborate with our clients to elevate their business in a constantly
                            evolving Digital Age. Maple Tech Space has been helping businesses online reach their
                            objectives</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project4.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project4.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project6.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="assets/img/project7.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>WEBSITE</span>
                                <h6>Free forever online store</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
