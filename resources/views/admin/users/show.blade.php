@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach($user->roles as $item)
                                    <span class="badge bg-primary">{{$item->title}}</span>
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-secondary mt-2"  href="{{route('users.index')}}">Back</a>
@endsection
