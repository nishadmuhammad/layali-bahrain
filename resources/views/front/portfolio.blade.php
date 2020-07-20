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
                            <img src="{{asset('assets/img/banner02.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Neena Varghese</h2>
                            <p>Realtor Website</p>
                            <a href="http://neenavarghese.com/"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                     class="img-fluid">View project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('assets/img/banner01.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Sybu Mathew</h2>
                            <p>Realtor Website</p>
                            <a href="https://www.sybumathew.com/" target="_blank"><img
                                    src="{{asset('assets/img/more-grey.png')}}" alt="" class="img-fluid">View
                                project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('assets/img/banner03.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Manukaii</h2>
                            <p>Product Website</p>
                            <a href=""><img src="{{asset('assets/img/more-grey.png')}}" alt="" class="img-fluid">View
                                project</a>
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
                    <div class="col-sm-12">
                        <p>Good design at Maple Tech Space is a blend of craft, science, storytelling, propaganda and functionality.We value relationship with our clients and for every business, whether small or big we understand that customer satisfaction will sustain and help grow a business in the long term.</p>
                        <p>Our effects on brand growth are proven. We offer a robust, creative portfolio that shows off the very best of what we do, Presenting to you, snapshots of our latest projects.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sybumock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Realtor Website</span>
                                <h6>Sybu Mathew</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/neenamock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Realtor Website</span>
                                <h6>Neena Varghese</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/manukaiimock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Product Website</span>
                                <h6>Manukaii</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/ecom.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Mobile App</span>
                                <h6>E Commerce App</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sportz999mock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Video Streaming Website</span>
                                <h6>Sportz999</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/babitamock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Realtor Website</span>
                                <h6>Condos By Babita</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/stringsandbeadsmock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Product Website</span>
                                <h6>Strings and Beads</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/fostermock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Product Website</span>
                                <h6>Foster Hot Bred</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/chaihutmock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Restaurant Website</span>
                                <h6>Chaihut</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
