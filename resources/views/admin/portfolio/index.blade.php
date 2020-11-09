@extends('admin.layouts.datatable')
@section('title','Portfolio')
@section('tableTitle','Portfolio')
@section('createRoute')
    {{route('portfolio.create')}}
@endsection
@section('tableHead')
    <th>No</th>
    <th>title</th>
    <th>photo</th>
    <th>description</th>
    <th>width</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($portfolios as $portfolio)
        <tr>
            <td></td>
            <td>{{$portfolio->title}}</td>
            <td><img src="{{asset($portfolio->photo)}}" width="100px"></td>
            <td>{{$portfolio->description}}</td>
            <td>{{$portfolio->width}}</td>
            <td>
                <form action="{{route('portfolio.destroy',$portfolio->id)}}" method="POST" id="delete-form-{{$portfolio->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$portfolio->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('portfolio.edit',$portfolio->id)}}"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
