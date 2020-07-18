@extends('admin.layouts.datatable')
@section('title','Enquiry')
@section('tableTitle','Enquiry')
@section('tableHead')
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Action</th>
    <th>Select</th>
@endsection
@section('tableBody')
    @foreach($enquiries->sortByDesc('id') as $enquiry)
        <tr>
            <td></td>
            <td>{{$enquiry->name}}</td>
            <td>{{$enquiry->email}}</td>
            <td>{{$enquiry->phone}}</td>
            <td>{{ $enquiry->message }}</td>
            <td>
                <form action="{{route('enquiry.destroy',$enquiry->id)}}" method="POST" id="delete-form-{{$enquiry->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$enquiry->id}});"><i class="fa fa-trash"></i> </a>
                </form>
            </td>
            <td>
                <input type="checkbox" id="bulk_chk" name="ids[]" value="{{$enquiry->id}}">
            </td>

        </tr>
    @endforeach
@endsection
