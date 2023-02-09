@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Create</strong> Permission</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('permissions.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Create</button>
                        <a class="btn btn-secondary mt-2"  href="{{route('permissions.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
