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
                <h1>{{$service->name}}</h1>
            </div>
        </div>
        <div class="container">
            <div class="service-detail-inner" data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-8">
                        <h5>{{$service->name}}</h5>
                        <p>{!! $service->description !!} </p>
                        <img src="{{asset('assets/img/service-detail.jpg')}}" alt="" class="img-fluid">
                        <p>With 14+ years of experiance in this domain, we will be able to provide you a 360 degree
                            holistic approach on the IT adoptation for your business. We follow a unique approach, by
                            evaluating your business opportunities and implement the left solutions for you. This will
                            help the businesses to achive profit at an exponential speed.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="quick-nav">
                            <ul>
                                <li class= "{{$service->slug =='it-consulting' ? 'active' : ''}}"><a href="{{route('servicesShow','it-consulting')}}">IT Consulting</a></li>
                                <li class= "{{$service->slug =='branding' ? 'active' : ''}}"><a href="{{route('servicesShow','branding')}}">Branding</a></li>
                                <li class= "{{$service->slug =='digital-marketing' ? 'active' : ''}}"><a href="{{route('servicesShow','digital-marketing')}}">Digital Marketing</a></li>
                                <li class= "{{$service->slug =='social-media-marketing' ? 'active' : ''}}"><a href="{{route('servicesShow','social-media-marketing')}}">Social Media Marketing</a></li>
                                <li class= "{{$service->slug =='search-engine-optimization' ? 'active' : ''}}"><a href="{{route('servicesShow','search-engine-optimization')}}">Search Engine Optimization</a></li>
                                <li class= "{{$service->slug =='website-design-and-development' ? 'active' : ''}}"><a href="{{route('servicesShow','website-design-and-development')}}">Website Development & Web Design</a></li>
                                <li class= "{{$service->slug =='android-and-ios-development' ? 'active' : ''}}"><a href="{{route('servicesShow','android-and-ios-development')}}">Android And Ios Development</a></li>
                                <li class= "{{$service->slug =='custom-software-development' ? 'active' : ''}}"><a href="{{route('servicesShow','custom-software-development')}}">Custom Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
