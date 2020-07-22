@extends('admin.layouts.datatable')
@section('title','Openings')
@section('tableTitle','Openings')
@section('createRoute')
    {{route('opening.create')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Country</th>
    <th>No.of Openings</th>
    <th>Position</th>
    <th>Expiry Date</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($openings->sortByDesc('id') as $opening)
        <tr>
            <td></td>
            <td>{{$opening->country}}</td>
            <td>{{$opening->no_of_opening}}</td>
            <td>{{$opening->position}}</td>
            <td>{{$opening->expiry_date}}</td>
            <td>
                <form action="{{route('opening.destroy',$opening->id)}}" method="POST" id="delete-form-{{$opening->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$opening->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('opening.edit',$opening->id)}}"><i class="fa fa-edit"></i> </a>
                <a href="{{route('application.index','id='.$opening->id)}}"><i class="fa fa-mail-bulk"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
