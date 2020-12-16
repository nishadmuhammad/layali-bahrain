@extends('admin.layouts.form')
@section('additionalStyles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Add Flayer')
@section('actionUrl')
    {{route('flayer.store')}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Add Flayer')
@section('indexRoute')
    {{route('flayer.index')}}
@endsection
@section('formBody')

<div class="col-6">
        <div class="form-group">
            <label for="cover_photo">Cover Photo <small>(Not less than 926X494 px)</small></label>
            <div class="input-group"  enctype="multipart/form-data">
        
                <input type="file" name="cover_photo[]" id="cover_photo" class="custom-file-input {{$errors->has('cover_photo') ? 'is-invalid' : ''}}" id="cover_photo" name="cover_photo[]" multiple/>
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
            
            </div>

            @if($errors->has('cover_photo'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('cover_photo')}}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="col-6">
        <div class="form-group">
            <label for="type" class="control-label">Category</label>
            <select id="type" name="type" required class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}">
                <option value="">Select Category</option>
                <option value="real-estate">Real estate </option>
                <option value="mortgage"> Mortgage </option>
                <option value="handy-man-services"> Handy man services </option>
                <option value="car-rentals"> Car rentals </option>
                <option value="restaurants"> Restaurants </option>
                <option value="events"> Events </option>
                <option value="miscellaneous"> Miscellaneous </option>
                <option value="realtor"> Realtor </option>
                <option value="advertisement"> Advertisement </option>
              
            </select>
           
        </div>
    </div>

@endsection