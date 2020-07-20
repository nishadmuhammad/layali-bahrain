@extends('admin.layouts.form')
@section('additionalStyles')
@endsection
@section('title','Edit Testimonial')
@section('actionUrl')
    {{route('testimonial.update',$testimonial)}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Edit Testimonial')
@section('indexRoute')
    {{route('testimonial.index')}}
@endsection
@section('formBody')
    <!-- this is needed in edit form -->
    <input type="hidden" name="_method" value="PUT">
    <!-- ---------------------------- -->
    <div class="col-6">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" id="name" name="name" required class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{ $testimonial->name }}">
            @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="designation" class="control-label">Designation</label>
            <input type="text" id="designation" name="designation" required class="form-control {{$errors->has('designation') ? 'is-invalid' : ''}}" value="{{ $testimonial->designation }}">
            @if($errors->has('designation'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('designation')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="rating" class="control-label">Rating</label>
            <select id="rating" name="rating" required class="form-control {{$errors->has('rating') ? 'is-invalid' : ''}}">
                @for($i = 1 ; $i <= 5 ; $i++)
                    <option value="{{$i}}" {{ $testimonial->rating == $i ? 'selected' : '' }}> {{$i}} </option>
                @endfor
            </select>
            @if($errors->has('state'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('state')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="description" class="control-label">Description <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="description" name="description"
                      class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" required>{{ $testimonial->description }}
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
            <label for="profile_pic">Profile Pic <small>(Not less than 51X51 px)</small></label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input {{$errors->has('profile_pic') ? 'is-invalid' : ''}}" id="profile_pic" name="profile_pic" value="{{old('profile_pic')}}" >
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
                </div>
            </div>
            @if($errors->has('profile_pic'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('profile_pic')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label class="control-label" for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="Published" {{$testimonial->status=='Published' ? 'selected' : ''}}>Published</option>
                <option value="Hide" {{$testimonial->status=='Hide' ? 'selected' : ''}}>Hide</option>
            </select>
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
