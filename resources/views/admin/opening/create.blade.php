@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Add new Opening')
@section('actionUrl')
    {{route('opening.store')}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Add Opening')
@section('indexRoute')
    {{route('opening.index')}}
@endsection
@section('formBody')
    <div class="col-6">
        <div class="form-group">
            <label for="country" class="control-label">Country</label>
            @if($errors->has('country'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('country')}}</strong>
                </span>
            @endif
            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input type="radio"  name="country" id="Canada" required class="form-check-input {{$errors->has('country') ? 'is-invalid' : ''}}" value="Canada">
                    <label class="form-check-label" for="Canada" >Canada</label>
                    <input type="radio"  name="country"  id="India" required class="form-check-input {{$errors->has('country') ? 'is-invalid' : ''}}" value="India">
                    <label class="form-check-label" for="India" >India</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="no_of_opening" class="control-label">Number Of Openings </label>
            <input type="text" id="no_of_opening" name="no_of_opening" required class="form-control {{$errors->has('no_of_opening') ? 'is-invalid' : ''}}" value="{{old('no_of_opening')}}">
            @if($errors->has('no_of_opening'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('no_of_opening')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="position" class="control-label">Position </label>
            <input type="text" id="position" name="position" required class="form-control {{$errors->has('position') ? 'is-invalid' : ''}}" value="{{old('position')}}">
            @if($errors->has('position'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('position')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="expiry_date" class="control-label">Expiry Date </label>
            <input type="date" id="expiry_date" name="expiry_date" required class="form-control {{$errors->has('expiry_date') ? 'is-invalid' : ''}}" value="{{old('expiry_date')}}">
            @if($errors->has('expiry_date'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('expiry_date')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="description" class="control-label">Description <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="description" name="description"
                      class="form-control textarea {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}
            </textarea>
            @if($errors->has('description'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
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
            $('.textarea').summernote()
        })
    </script>
@endsection
