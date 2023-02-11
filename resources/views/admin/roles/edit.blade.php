@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Edit</strong> Role</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('roles.update',$role->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="title" class="form-control" id="name" value="{{$role->title}}">
                        </div>
                        <p class="form-control-label">Permissions:</p>
                        <div class="row">
                            @foreach ($permissions as $id => $permission)
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" @if(in_array($id,$role->permissions->pluck('id')->toArray())) checked @endif type="checkbox" id="flexCheckDefault" name="permissions[]" value="{{ $id }}">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <h4>
                                        <span class="badge bg-warning rounded-pill">
                                            {{ $permission }}
                                        </span>
                                            </h4>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="btn btn-success mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            Update
                        </button>
                        <a class="btn btn-secondary mt-3"  href="{{route('roles.index')}}">
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
