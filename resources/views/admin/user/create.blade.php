@extends('admin.layouts.form')
@section('title','Add New User')
@section('actionUrl')
    {{route('user.store')}}
@endsection
@section('actionName','Add User')
@section('indexRoute')
    {{route('user.index')}}
@endsection
@section('formBody')
    <div class="col-6">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" id="name" name="name" required class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}" >
            @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="text" id="email" name="email" required class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email')}}" >
            @if($errors->has('email'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" id="password" name="password" required class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" value="{{old('password')}}">
            @if($errors->has('password'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('password')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="confirm_password" class="control-label">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required class="form-control {{$errors->has('confirm_password') ? 'is-invalid' : ''}}" value="{{old('confirm_password')}}">
            @if($errors->has('confirm_password'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('confirm_password')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="control-label col-12">Roles
                @if ($errors->has('role'))
                    <small style="color: red">Please select at least one role</small>
                @endif</label>
            <div class="col-12">
                @foreach($roles as $role)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="{{$role->name}}" name="role[]"
                               value="{{$role->name}}">
                        <label class="form-check-label" for="{{$role->name}}">{{$role->name}} </label>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
