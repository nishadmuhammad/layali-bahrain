@extends('admin.layouts.datatable')
@section('title','Testimonials')
@section('tableTitle','Testimonials')
@section('createRoute')
    {{route('testimonial.create')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Name</th>
    <th>Rating</th>
    <th>Description</th>
    <th>Profile Pic</th>
    <th>Status</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($testimonials->sortByDesc('id') as $testimonial)
        <tr>
            <td></td>
            <td>{{$testimonial->name}}</td>
            <td>{{$testimonial->rating}}</td>
            <td>{{$testimonial->description}}</td>
            <td><img src="{{asset($testimonial->profile_pic)}}" width="100px" class="img-thumbnail"></td>
            <td>{{$testimonial->status}}</td>
            <td>
                <form action="{{route('testimonial.destroy',$testimonial->id)}}" method="POST" id="delete-form-{{$testimonial->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$testimonial->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('testimonial.edit',$testimonial->id)}}"><i class="fa fa-edit"></i> </a>
            </td>

        </tr>
    @endforeach
@endsection
