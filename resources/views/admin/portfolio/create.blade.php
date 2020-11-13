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
            <label for="title" class="control-label">Project</label>
            <input type="text" id="title" name="title" required
                   class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" value="{{old('title')}}">
            @if($errors->has('title'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('title')}}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="odr" class="control-label">Position</label>
            <input type="number" id="odr" name="odr" required
                   class="form-control {{$errors->has('odr') ? 'is-invalid' : ''}}" value="{{old('odr')}}">
            @if($errors->has('odr'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('odr')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="description" rows="5" class="control-label">Description <small>(Do not capitalise entire
                    sentence)</small></label>
            <textarea id="descriptions" name="description"
                      class="form-control {{$errors->has('description') ? 'is-invalid' : ''}} textarea">{{old('description')}}
            </textarea>
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
                    <input type="file" class="custom-file-input {{$errors->has('cover_photo') ? 'is-invalid' : ''}}"
                           id="cover_photo" name="cover_photo" value="{{old('cover_photo')}} required">
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
                </div>

            </div>
        </div>
    </div>
    <div class="col-6">
        <label for="width" class="control-label">Width </label><br/>
        <div class="form-check-inline">
            <input type="radio" id="full" name="width"
                   class="form-check-input {{$errors->has('width') ? 'is-invalid' : ''}}" value="full">
            <label class="form-check-label px-2" for="full">Full</label>
            <input type="radio" id="half" name="width" required
                   class="form-check-input {{$errors->has('width') ? 'is-invalid' : ''}}" value="half">
            <label class="form-check-label" for="half">Half</label>
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
