@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Role</strong> Details</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Role</th>
                            <th>Permissions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->title}}</td>
                            <td>
                                @foreach($role->permissions as $item)
                                    <span class="badge bg-primary">{{ $item->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-secondary mt-2"  href="{{route('roles.index')}}">Back</a>
@endsection
