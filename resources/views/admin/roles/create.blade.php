@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Create</strong> Role</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        @foreach ($permissions as $id => $permission)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="permissions[]" value="{{ $id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <h4>
                                        <span class="badge bg-success">
                                            {{$permission->title}}
                                        </span>
                                    </h4>
                                </label>
                            </div>
                        @endforeach
                        <button class="btn btn-primary mt-2" type="submit">Create</button>
                        <a class="btn btn-secondary mt-2"  href="{{route('roles.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
