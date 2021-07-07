@extends('front.layouts.app')
@section('title'){{$blog->title}} | LAYALI BAHRAIN @endsection
@section('description'){{$blog->description}}@endsection
@section('keywords'){{$blog->keyword}}@endsection
@section('ogImage'){{$blog->cover_photo}}@endsection
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="blog-page page">
        <div class="banner-common">
            <div class="container">
                <h1>blog</h1>
            </div>
        </div>
        <div class="container">
            <div class="blogs">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="blog-block" data-aos="fade-up">
                            <h5>{{$blog->title}}</h5>
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{asset($blog->cover_photo)}}" alt="{{$blog->title}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-block-details">
                                <ul class="list-inline blog-by">
                                    <li class="list-inline-item">
                                        <span>{{date('M d Y'),strtotime($blog->created_at)}}</span></li>
                                </ul>
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="recent-blogs">
                            <h5>Recent Posts</h5>
                            @foreach($blogs as $blog)
                                <div class="blog-block" data-aos="fade-up">
                                    <div class="blog-image">
                                        <a href="{{route('showBlog',$blog->slug)}}">
                                            <img src="{{asset($blog->thumbnail)}}" alt="{{$blog->title}}" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-block-details">
                                        <p>{{$blog->title}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
