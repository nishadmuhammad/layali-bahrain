@extends('admin.layouts.datatable')
@section('title','Applications')
@section('tableTitle','Applications')
@section('createRoute')
    {{route('application.index')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Applying for</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>Description</th>
    <th>Bio data</th>
    <th>Select</th>
@endsection
@section('tableBody')
    @php
        $id=app('request')->input('id');
    @endphp
    @foreach($applications->sortByDesc('id') as $application)
        @if($id=='' || $id == $application->opening_id)
            <tr>
            <td></td>
            <td>{{$application->opening->position}}</td>
            <td>{{$application->name}}</td>
            <td>{{$application->email}}</td>
            <td>{{$application->description}}</td>
            <td><a href="{{asset($application->biodata)}}" target="_blank"><i class="fas fa-file"></i> </a> </td>
            <td>
                <input type="checkbox" id="bulk_chk" name="ids[]" value="{{$application->id}}">
            </td>
        </tr>
         @endif
    @endforeach
@endsection
