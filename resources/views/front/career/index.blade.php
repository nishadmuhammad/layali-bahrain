@extends('front.layouts.app')
@section('title', 'Jobs | Digital Marketing | SEO Specialist | App Development')
@section('description','If you are looking for a promising career in Digital Marketing & SEO in Toronto, Send your CV now. We are the best IT Consulting & Digital Marketing Firm in GTA')
@section('keywords','Seo specialist jobs in toronto,Digital marketing jobs in toronto,seo services,Mobile app development jobs in toronto,Seo jobs in toronto,custom web design toronto,website design services toronto,responsive web design toronto,toronto digital marketing,online marketing toronto,internet marketing company toronto,toronto marketing agency')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com/careers')
@section('content')
    <div class="careers page">
        <div class="banner-common">
            <div class="container">
                <h1>Careers</h1>
            </div>
        </div>
        <div class="careers-inner" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="tabs">
                            <div class="tab-sec">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#india">India</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#toronto">Canada</a>
                                    </li>
                                </ul>

                                <div class="tab-content" data-aos="fade-up">
                                    <div id="india" class="tab-pane active">
                                        @foreach($careers as $career)
                                            @if($career->country=='Canada') @continue @endif
                                            <div class="career-block">
                                                <h5 class="designation"><a href="{{route('careersShow',$career->id)}}">{{$career->position}}</a></h5>
                                                <span>({{$career->no_of_opening}}+ Openings)</span>
                                                <a href="{{route('careersShow',$career->id)}}" class="arrow"><img src="{{asset('assets/img/arrow-two.png')}}" alt=""></a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div id="toronto" class="tab-pane">
                                        @foreach($careers as $career)
                                            @if($career->country=='India') @continue @endif
                                            <div class="career-block">
                                                <h5 class="designation"><a href="{{route('careersShow',$career->id)}}">{{$career->position}}</a></h5>
                                                <span>({{$career->no_of_opening}}+ Openings)</span>
                                                <a href="{{route('careersShow',$career->id)}}" class="arrow"><img src="{{asset('assets/img/arrow-two.png')}}" alt=""></a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="openings">
                            <ul>
                                @foreach($careers as $career)
                                    <li><a href="{{route('careersShow',$career->id)}}">{{$career->position}} ({{$career->no_of_opening}}+ Openings)</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
