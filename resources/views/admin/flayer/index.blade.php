@extends('admin.layouts.datatable')
@section('title','staff')
@section('tableTitle','staff')
@section('createRoute')
    {{route('staff.create')}}
@endsection
@section('tableHead')
    <th>No</th>
    <th>name</th>
    <th>Role</th>
    <th>photo</th>
    <th>action</th>
    <!-- <th>Action</th> -->
@endsection
@section('tableBody')
    @foreach($staff_details as $staff)
        <tr>
            <td></td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->position}}</td>
            <td><img src="{{asset($staff->photo)}}" width="100px"></td>



            <td>
                <form action="{{route('staff.destroy',$staff->id)}}" method="POST" id="delete-form-{{$staff->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$staff->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('staff.edit',$staff->id)}}"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
