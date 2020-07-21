@extends('admin.layouts.datatable')
@section('title','Services')
@section('tableTitle','Services')
@section('createRoute')
    {{route('service.create')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Name</th>
    <th>Description</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($services->sortByDesc('id') as $service)
        <tr>
            <td></td>
            <td>{{$service->name}}</td>
            <td>{!! $service->description !!}</td>
            <td>
                <form action="{{route('service.destroy',$service->id)}}" method="POST" id="delete-form-{{$service->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$service->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('service.edit',$service->id)}}"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
