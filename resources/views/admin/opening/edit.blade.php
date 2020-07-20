@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Edit Opening')
@section('actionUrl')
    {{route('opening.update',$opening)}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Edit Opening')
@section('indexRoute')
    {{route('opening.index')}}
@endsection
@section('formBody')
    <!-- this is needed in edit form -->
    <input type="hidden" name="_method" value="PUT">
    <!-- ---------------------------- -->
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
                    <input type="radio" id="Canada" name="country"  class="form-check-input {{$errors->has('country') ? 'is-invalid' : ''}}" value="Canada" {{$opening->country == 'Canada' ? 'checked' : ''}}>
                    <label class="form-check-label" for="Canada">Canada</label>
                    <input type="radio"  id="India" name="country" required class="form-check-input {{$errors->has('country') ? 'is-invalid' : ''}}" value="India" {{$opening->country == 'India' ? 'checked' : ''}}>
                    <label class="form-check-label" for="India">India</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="no_of_opening" class="control-label">Number Of Openings </label>
            <input type="text" id="no_of_opening" name="no_of_opening" required class="form-control {{$errors->has('no_of_opening') ? 'is-invalid' : ''}}" value="{{$opening->no_of_opening}}">
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
            <input type="text" id="position" name="position" required class="form-control {{$errors->has('position') ? 'is-invalid' : ''}}" value="{{$opening->position}}">
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
            <input type="datetime-local" id="expiry_date" name="expiry_date" required class="form-control {{$errors->has('expiry_date') ? 'is-invalid' : ''}}" value="{{date('Y-m-d\TH:i', strtotime($opening->expiry_date))}}">
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
            <textarea id="description" name="description" required
                      class="form-control textarea {{$errors->has('description') ? 'is-invalid' : ''}}">{{$opening->description}}
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
