@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Edit</strong> Permission</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('permissions.update', $permission->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input name="title" type="text" class="form-control mb-3" value="{{ $permission->title }}">
                        <button type="submit" class="btn btn-success mt-3">Update</button>
                        <a class="btn btn-secondary mt-3"  href="{{route('permissions.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
