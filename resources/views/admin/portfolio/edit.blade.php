@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Edit Portfolio')
@section('actionUrl')
    {{route('portfolio.update',$portfolios)}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Edit Portfolio')
@section('indexRoute')
    {{route('portfolio.index')}}
@endsection
@section('formBody')

title  photo width description status
<input type="hidden" name="_method" value="PUT">
    <!-- ---------------------------- -->
    <div class="col-6">
        <div class="form-group">
            <label for="title" class="control-label">Project</label>
            @if($errors->has('title'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('title')}}</strong>
                </span>
            @endif
           
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="odr" class="control-label">Order No </label>
            <input type="text" id="odr" name="odr" required class="form-control {{$errors->has('odr') ? 'is-invalid' : ''}}" value="{{$portfolios->odr}}">
            @if($errors->has('odr'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('odr')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="description" class="control-label">Description </label>
            <input type="text" id="description" name="description" required class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" value="{{$portfolios->description}}">
            @if($errors->has('description'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </div>
    </div>
  
    <div class="col-6">
        <div class="form-group">
            <label for="cover_photo">Cover Photo <small>(Not less than 926X494 px)</small></label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input {{$errors->has('cover_photo') ? 'is-invalid' : ''}}" id="cover_photo" name="cover_photo" value="{{old('cover_photo')}}">
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
                </div>
            </div>



    <div class="col-12">
            <label for="width" class="control-label">Width  </label>
                <div class="form-check form-check-inline">
                    <input type="radio" id="full" name="width"  class="form-check-input {{$errors->has('width') ? 'is-invalid' : ''}}" value="full">
                    <label class="form-check-label" for="full">full</label>
                    <input type="radio"  id="half" name="width" required class="form-check-input {{$errors->has('width') ? 'is-invalid' : ''}}" value="half">
                    <label class="form-check-label" for="half">half</label>
                </div>
            </div>
@endsection
@section('additionalScripts')
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection