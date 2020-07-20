@extends('admin.layouts.datatable')
@section('title','Posts')
@section('tableTitle','Posts')
@section('createRoute')
    {{route('post.create')}}
@endsection
@section('tableHead')
    <th>#</th>
    <th>Title</th>
    <th>Photo</th>
    <th>Status</th>
    <th>Action</th>
@endsection
@section('tableBody')
    @foreach($posts->sortByDesc('id') as $post)
        <tr>
            <td></td>
            <td>{{$post->title}}</td>
            <td><img src="{{asset($post->thumbnail)}}" width="200px" class="img-thumbnail"></td>
            <td>{{$post->status}}</td>
            <td>
                <form action="{{route('post.destroy',$post->id)}}" method="POST" id="delete-form-{{$post->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="return confirmation({{$post->id}});"><i class="fa fa-trash"></i> </a>
                </form>
                <a href="{{route('post.edit',$post->id)}}"><i class="fa fa-edit"></i> </a>
            </td>
        </tr>
    @endforeach
@endsection
