@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Add portfolio')
@section('actionUrl')
    {{route('portfolio.store')}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Add Portfolio')
@section('indexRoute')
    {{route('portfolio.index')}}
@endsection
@section('formBody')
    <div class="col-6">
        <div class="form-group">
            <label for="title" class="control-label">project</label>
            <input type="text" id="title" name="title" required class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" value="{{old('title')}}">
            @if($errors->has('title'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('title')}}</strong>
                </span>
            @endif
        </div>
    </div>
  
    <div class="col-6">
        <div class="form-group">
            <label for="odr" class="control-label">Order No</label>
            <input type="number" id="odr" name="odr" required class="form-control {{$errors->has('odr') ? 'is-invalid' : ''}}" value="{{old('odr')}}">
            @if($errors->has('odr'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('odr')}}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="description" class="control-label">description</label>
            <input type="text" id="description" name="description" required class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" value="{{old('description')}}">
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
        
            @if($errors->has('cover_photo'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('cover_photo')}}</strong>
                </span>
            @endif
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
            $('.textarea').summernote({
                height: 500,
                callbacks: {
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            })
        })
    </script>
@endsection
