@extends('front.layouts.app')
@section('title'){{$service->name}} | Maple Tech Space @endsection
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="service-detail-page page">
        <div class="banner-common">
            <div class="container">
                <h1>SERVICES</h1>
            </div>
        </div>
        <div class="container">
            <div class="service-detail-inner" data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-8">
                        <h5>{{$service->name}}</h5>
                        <p>{!! $service->description !!} </p>
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
