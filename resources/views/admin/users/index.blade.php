@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary mb-2"  href="{{route('users.create')}}">Create New User</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $item)
                                        <span class="badge bg-primary">{{$item->title}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('users.show',$user->id)}}" class="btn btn-success">Show</a>
                                    <form class="d-inline" action="{{route('users.destroy',$user->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
