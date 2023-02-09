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
                            <input type="text" name="name" class="form-control" id="name" value="{{$role->title}}">
                        </div>
                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($permissions as $id => $permission)
                                <div class="form-check">
                                    <input class="form-check-input" @if(in_array($id,$role->permissions->pluck('id')->toArray())) checked @endif type="checkbox" id="flexCheckDefault" name="permissions[]" value="{{ $id }}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <h4>
                                        <span class="badge bg-primary">
                                            {{ $permission }}
                                        </span>
                                        </h4>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <button class="btn btn-success mt-2" type="submit">Update</button>
                        <a class="btn btn-secondary mt-2"  href="{{route('roles.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
