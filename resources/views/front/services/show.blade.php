@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="service-detail-page page">
        <div class="banner-common">
            <div class="container">
                <h1>IT Consulting</h1>
            </div>
        </div>
        <div class="container">
            <div class="service-detail-inner" data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-8">
                        <h5>IT Consulting</h5>
                        <p>With 14+ years of experiance in this domain, we will be able to provide you a 360 degree
                            holistic approach on the IT adoptation for your business. We follow a unique approach, by
                            evaluating your business opportunities and implement the left solutions for you. This will
                            help the businesses to achive profit at an exponential speed.
                        </p>
                        <img src="assets/img/service-detail.jpg" alt="" class="img-fluid">
                        <p>With 14+ years of experiance in this domain, we will be able to provide you a 360 degree
                            holistic approach on the IT adoptation for your business. We follow a unique approach, by
                            evaluating your business opportunities and implement the left solutions for you. This will
                            help the businesses to achive profit at an exponential speed.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="quick-nav">
                            <ul>
                                <li class="active"><a href="">IT Consulting</a></li>
                                <li><a href="">Branding</a></li>
                                <li><a href="">Digital Marketing</a></li>
                                <li><a href="">Social Media Marketing</a></li>
                                <li><a href="">Search Engine Optimization</a></li>
                                <li><a href="">Website Development & Web Design</a></li>
                                <li><a href="">Android And Ios Development</a></li>
                                <li><a href="">Custom Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
