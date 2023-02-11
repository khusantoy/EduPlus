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

    <a class="btn btn-secondary mt-2"  href="{{route('roles.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Back
    </a>
@endsection
