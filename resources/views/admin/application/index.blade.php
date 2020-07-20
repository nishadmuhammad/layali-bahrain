@extends('admin.layouts.datatable')
@section('title','Applications')
@section('tableTitle','Applications')
@section('createRoute')
    {{route('application.index')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Opening Id</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>Description</th>
    <th>Bio data</th>
    <th>Select</th>
@endsection
@section('tableBody')
    @foreach($applications->sortByDesc('id') as $application)
        <tr>
            <td></td>
            <td>{{$application->opening_id}}</td>
            <td>{{$application->name}}</td>
            <td>{{$application->email}}</td>
            <td>{{$application->description}}</td>
            <td>{{$application->biodata}}</td>
            <td>
                <input type="checkbox" id="bulk_chk" name="ids[]" value="{{$application->id}}">
            </td>
        </tr>
    @endforeach
@endsection
