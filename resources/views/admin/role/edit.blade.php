@extends('admin.layouts.form')
@section('title','Edit Role')
@section('actionUrl')
    {{route('role.update',$role)}}
@endsection

<!------  --    ----------------------- -->
@section('actionName','Update Role')
@section('indexRoute')
    {{route('role.index')}}
@endsection
@section('formBody')
    <!-- this is needed in edit form -->
    <input type="hidden" name="_method" value="PUT">
    <!-- ---------------------------- -->
    <div class="col-6">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" id="name" name="name" required class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$role->name}}">
            @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>
    </div>

@endsection

