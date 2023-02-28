@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Add</strong> Staff</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('staffs.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="surname" class="form-label">Surname</label>
                                    <input type="text" name="surname" class="form-control" id="surname">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" id="role" name="role_id" required aria-label="select role">
                                        @foreach($roles as $id=>$role)
                                            <option value="{{$id}}" {{in_array($id,old('role',[])) ? 'selected' : ''}}>{{$role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required aria-label="select status">
                                        <option value="Foiz" {{in_array(1,old('status',[])) ? 'selected' : ''}}>Foiz</option>
                                        <option value="Summa" {{in_array(2,old('status',[])) ? 'selected' : ''}}>Summa</option>
                                        <option value="O'quvchi soni" {{in_array(3,old('status',[])) ? 'selected' : ''}}>O'quvchi soni</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="number" name="salary" class="form-control" id="salary">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone number</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number">
                                </div>
                            </div>
                        </div>
                        <input type="text" name="image">
                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">Image for Staff~</label>
                            <input class="form-control" type="file" id="formFile">
                          </div> --}}
                    
                        <button class="btn btn-primary mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg>
                            Add
                        </button>
                        <a class="btn btn-secondary mt-3"  href="{{route('staffs.index')}}">
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
