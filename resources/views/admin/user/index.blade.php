@extends('admin.layouts.datatable')
@section('title','Users')
@section('tableTitle','Users')
@section('createRoute')
    {{route('user.create')}}
@endsection
@section('tableHead')
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
@endsection
@section('tableBody')
        @foreach ($users->sortByDesc('id') as  $user)
            <tr>
                <td></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $role)
                            <label class="badge badge-success">{{ $role }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <form action="{{route('user.destroy',$user->id)}}" method="POST" id="delete-form-{{$user->id}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="#" onclick="return confirmation({{$user->id}});"><i class="fa fa-trash"></i> </a>
                    </form>
                    <a href="{{route('user.edit',$user->id)}}"><i class="fa fa-edit"></i> </a>

                </td>
            </tr>
        @endforeach
@endsection
