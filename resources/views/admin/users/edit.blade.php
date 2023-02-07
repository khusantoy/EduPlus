@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input name="name" type="text" class="form-control mb-3" value="{{ $user->name }}">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input name="email" class="form-control mb-3" type="email" value="{{ $user->email }}">
                        <p class="form-control-label">Roles:</p>
                        @foreach ($roles as $id => $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                       @if( in_array($id, $user->roles->pluck('id')->toArray())) checked
                                       @endif class="form-check ms-2" name="roles[]"
                                       value="{{ $id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$role}}
                                </label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-success mt-3">Update</button>
                        <a class="btn btn-secondary mt-3"  href="{{route('users.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
