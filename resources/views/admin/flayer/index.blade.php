@extends('admin.layouts.datatable')
@section('title','staff')
@section('tableTitle','staff')
@section('createRoute')
    {{route('flayer.create')}}
@endsection
@section('tableHead')
    <th>No</th>
    <th>name</th>
    <th>type</th>
    <th>photo</th>
    <th>action</th>
    <!-- <th>Action</th> -->
@endsection
@section('tableBody')
    @foreach($flayers as $flayer)
        <tr>
            <td></td>
            <td>{{$flayer->name}}</td>
            <td>{{$flayer->type}}</td>
            <td><img src="{{asset($flayer->photo)}}" width="100px"></td>

            <td>
                <form action="{{route('flayer.destroy',$flayer->id)}}" method="POST" id="delete-form-{{$flayer->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$flayer->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <!-- <a href="{{route('flayer.edit',$flayer->id)}}"><i class="fa fa-edit"></i> </a> -->
            </td>
        </tr>
    @endforeach
@endsection
