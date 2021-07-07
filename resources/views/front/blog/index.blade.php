@extends('front.layouts.app')
@section('title', 'Blogs | SEO Tips | Digital Marketing Trends | SEM & SMM')
@section('description','Want to get higher rankings on Search Engine? Check the best practices in Digital Marketing - Email, Social Media and Content Marketing. Paid Advertising')
@section('keywords','toronto seo marketing,toronto search engine optimization,seo agency,seo expert toronto,web designer in toronto,toronto web design company,web design firm,web design firm toronto,digital marketing agencies toronto,online marketing company toronto,internet marketing toronto,toronto digital marketing agency')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com/blog')
@section('content')
    <div class="blog-page page">
        <div class="banner-common">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="container">
            <div class="blogs">
                <div class="row">
                    <div class="col-sm-8">
                        @foreach($blogs as $blog)

                            <div class="blog-block" data-aos="fade-up">
                                <h5>{{$blog->title}}</h5>
                                <div class="blog-image">
                                    <a href="{{route('showBlog',$blog->slug)}}">
                                        <img src="{{asset($blog->cover_photo)}}" alt="{{$blog->title}}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-block-details">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span>{{date('d M Y',strtotime($blog->created_at))}}</span></li>
                                    </ul>
                                    {!! $blog->description !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-4">
                        <div class="recent-blogs">
                            <h5>Recent Posts</h5>
                            @foreach($blogs->sortBy('id') as $blog)

                                <div class="blog-block" data-aos="fade-up">
                                <div class="blog-image">
                                    <a href="{{route('showBlog',$blog->slug)}}">
                                        <img src="{{$blog->thumbnail}}" alt="" class="img-fluid">
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
