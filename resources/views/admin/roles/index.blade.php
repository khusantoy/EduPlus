@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Roles</strong> Dashboard</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary mb-2"  href="{{route('roles.create')}}">Create New Role</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->title}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('roles.show',$role->id)}}" class="btn btn-success">Show</a>
                                        <form class="d-inline" action="{{route('roles.destroy',$role->id)}}" method="post">
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
