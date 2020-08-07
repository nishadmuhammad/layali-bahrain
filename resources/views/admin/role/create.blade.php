@extends('admin.layouts.form')
@section('title','Add New Role')
@section('actionUrl')
    {{route('role.store')}}
@endsection
@section('actionName','Add Role')
@section('indexRoute')
    {{route('role.index')}}
@endsection
@section('formBody')
    <div class="col-6">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" id="name" name="name" required class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}">
            @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
    </div>


@endsection
