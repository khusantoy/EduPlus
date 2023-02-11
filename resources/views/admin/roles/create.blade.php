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
                            <input type="text" name="title" class="form-control" id="name">
                        </div>
                        <p class="form-control-label">Permissions:</p>
                        <div class="row">
                            @foreach ($permissions as $id => $permission)
                                <div class="col-md-2">
                                    <div class='form-check'>
                                        <input class='form-check-input' type='checkbox' id='flexCheckDefault' name='permissions[]' value='{{ $id }}'>
                                        <label class='form-check-label' for='flexCheckDefault'>
                                            <h4>
                                            <span class='badge bg-warning rounded-pill'>
                                                {{$permission}}
                                            </span>
                                            </h4>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Create
                        </button>
                        <a class="btn btn-secondary mt-3" href="{{route('roles.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Back
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
