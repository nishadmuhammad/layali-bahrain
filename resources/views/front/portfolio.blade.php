@extends('front.layouts.app')
@section('title', 'Best Web Designing Company in Toronto | Creative Web Designs')
@section('description','LAYALI BAHRAIN - Best Web designing company in Toronto. We build creative and customized web designs for a visually appealing online presence of your business.')
@section('keywords','toronto seo experts,seo agency toronto,best seo toronto,toronto seo specialist,website designers toronto,web design companies toronto,website development toronto,web designers toronto,best digital marketing agency in GTA,digital agency toronto,internet marketing agency toronto,toronto internet marketing')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com/portfolio')
@section('content')
    <div class="portfolio page">
        <div class="banner-common">
            <div class="container">
                <h1>Portfolio</h1>
            </div>
        </div>
        <div class="portfolio-inner">
            <div class="container">
                <h5>Portfolio</h5>
                <h4>Our latest projects</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Good design at LAYALI BAHRAIN is a blend of craft, science, storytelling, propaganda and
                            functionality.We value relationship with our clients and for every business, whether small
                            or big we understand that customer satisfaction will sustain and help grow a business in the
                            long term.</p>
                        <p>Our effects on brand growth are proven. We offer a robust, creative portfolio that shows off
                            the very best of what we do, Presenting to you, snapshots of our latest projects.</p>
                    </div>
                        @foreach($portfolios as $portfolio)
                            <div @if($portfolio->width ==='full') class="col-sm-12" @else class="col-sm-6" @endif>
                                <div class="portfolio-block" data-aos="fade-up">
                                    <div class="portfolio-image">
                                        <a href="">
                                            <img src="{{asset($portfolio->photo)}}" alt="{{$portfolio->title}}"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="portfolio-block-details">
                                        <h6>{{$portfolio->title}}</h6>
                                        <p>{!! $portfolio->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
