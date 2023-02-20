@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Create</strong> Group</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('groups.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="course" class="form-label">Course</label>
                                    <select class="form-select" id="course" name="courses[]" required aria-label="Default select example">
                                        @foreach($courses as $id=>$course)
                                            <option value="{{$id}}" {{in_array($id,old('courses',[])) ? 'selected' : ''}}>{{$course}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="room" class="form-label">Room</label>
                                    <select class="form-select" id="room" name="rooms[]" required aria-label="Default select example">
                                        @foreach($rooms as $id=>$room)
                                            <option value="{{$id}}" {{in_array($id,old('rooms',[])) ? 'selected' : ''}}>{{$room}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="start" class="form-label">Start</label>
                                    <input type="time" name="start" class="form-control" id="start">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="finish" class="form-label">Finish</label>
                                    <input type="time" name="finish" class="form-control" id="finish">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="room" class="form-label">Days</label>
                                <div>
                                    @foreach ($days as $id => $day)
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="days[]" value="{{$id}}">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <h4>
                                               <span class="badge bg-primary rounded-pill">
                                                    {{$day->name}}
                                               </span>
                                                    </h4>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-primary mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg>
                            Create
                        </button>
                        <a class="btn btn-secondary mt-3"  href="{{route('groups.index')}}">
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
