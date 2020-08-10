@extends('admin.layouts.datatable')
@section('title','Roles')
@section('tableTitle','Roles')
@section('createRoute')
    {{route('role.create')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Name</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($roles->sortByDesc('id') as $role)
        <tr>
            <td></td>
            <td>{{$role->name}}</td>
            <td>
                <form action="{{route('role.destroy',$role->id)}}" method="POST" id="delete-form-{{$role->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$role->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('role.edit',$role->id)}}"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
