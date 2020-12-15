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
                <option value="Real estate">Real estate </option>
                <option value="Mortgage"> Mortgage </option>
                <option value="Handy man services"> Handy man services </option>
                <option value="Car rentals"> Car rentals </option>
                <option value="Restaurants"> Restaurants </option>
                <option value="Events"> Events </option>
                <option value="Miscellaneous"> Miscellaneous </option>
                <option value="Realtor"> Realtor </option>
                <option value="Advertisement"> Advertisement </option>
              
            </select>
           
        </div>
    </div>

@endsection