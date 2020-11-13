@extends('admin.layouts.form')
@section('name','Edit Staff')
@section('actionUrl')
    {{route('staff.update',$staff_details)}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Edit Staff')
@section('indexRoute')
    {{route('staff.index')}}
@endsection
@section('formBody')

    <input type="hidden" name="_method" value="PUT">
    <div class="col-6">
        <div class="form-group">
            <label for="name" class="control-label">Name </label>
            <input type="text" id="name" name="name" required
                   class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$staff_details->name}}">
            @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="position" class="control-label">Role </label>
            <input type="text" id="position" name="position" required
                   class="form-control {{$errors->has('position') ? 'is-invalid' : ''}}"
                   value="{{$staff_details->position}}">
            @if($errors->has('position'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('position')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="odr" class="control-label">Position</label>
            <input type="number" id="odr" name="odr" required
                   class="form-control {{$errors->has('odr') ? 'is-invalid' : ''}}" value="{{$staff_details->odr}}">
            @if($errors->has('odr'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('odr')}}</strong>
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
                           id="cover_photo" name="cover_photo" value="{{old('cover_photo')}}">
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
                </div>
            </div>
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
@endsection
