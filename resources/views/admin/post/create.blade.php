@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Add new Post')
@section('actionUrl')
    {{route('post.store')}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Add Post')
@section('indexRoute')
    {{route('post.index')}}
@endsection
@section('formBody')
    <div class="col-6">
        <div class="form-group">
            <label for="title" class="control-label">Title</label>
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
            <label for="cover_photo">Cover Photo <small>(Not less than 1194X505 px)</small></label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input {{$errors->has('cover_photo') ? 'is-invalid' : ''}}" id="cover_photo" name="cover_photo" value="{{old('cover_photo')}}" required>
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

    <div class="col-12">
        <div class="form-group">
            <label for="description" class="control-label">Description <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="description" name="description"
                      class="form-control  {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}
            </textarea>
            @if($errors->has('description'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="keywords" class="control-label">Keywords <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="keywords" name="keywords"
                      class="form-control  {{$errors->has('keywords') ? 'is-invalid' : ''}}">{{old('keywords')}}
            </textarea>
            @if($errors->has('keywords'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('keywords')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="content" class="control-label">Content <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="content" name="content"
                      class="form-control textarea {{$errors->has('content') ? 'is-invalid' : ''}}" >{{old('content')}}
            </textarea>
            @if($errors->has('content'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('content')}}</strong>
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
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['style', 'code']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['styleTags' ['p', 'h1', 'h2']]
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video','table']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                styleTags: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
            })
        })
    </script>
@endsection
