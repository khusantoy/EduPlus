@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="Email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        @foreach ($roles as $id => $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="roles[]" value="{{ $id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$role}}
                                </label>
                            </div>
                        @endforeach
                        <button class="btn btn-primary mt-2" type="submit">Create</button>
                        <a class="btn btn-secondary mt-2"  href="{{route('users.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
