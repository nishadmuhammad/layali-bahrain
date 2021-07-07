@extends('front.layouts.app')
@section('title', 'LAYALI BAHRAIN')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
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
                        <div class="career-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <h5 class="designation"><a href="">{{$opening->position}}</a></h5>
                                    <span>Posted On: {{date('d M, Y', strtotime($opening->created_at))}}  |   Exp: {{date('d M Y', strtotime($opening->expiry_date))}}</span>
                                </div>
                            </div>
                        </div>
                        {!! $opening->description !!}
                        <h6>Drop your CVs to<a href="">hr@LAYALI BAHRAIN.ca</a></h6>
                        <div class="apply-now-form">
                            <form action="{{route('application')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="opening_id" id="sel1" required >
                                                    <option value="{{$opening->id}}">{{$opening->position}}</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required >
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="phone">
                                                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="upload">
                                            <input  name="biodata" class="form-control" id="upload-file-img" type="file" required>

                                            <a id="fileupload-img"><span>Upload Resume</span><img
                                                    src="{{asset('assets/img/attach.svg')}}"
                                                    alt="upload"></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea  id="" placeholder="A Brief About Your Profile" name="description" required></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="openings">
                            <ul>
                                @foreach($openings as $opening)
                                    <li><a href="{{route('careersShow',$opening->id)}}">{{$opening->position}}
                                             ({{$opening->no_of_opening}}+ Openings)</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
