@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Group</strong> Details</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Course Price</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th>Start</th>
                            <th>Finish</th>
                            <th>Days</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->name}}</td>
                                <td>{{$group->course->title}}</td>
                                <td>
                                    <span class="badge bg-info">$ {{$group->course->price}}</span>
                                </td>
                                <td>{{$group->room->title}}</td>
                                <td>
                                    <span class="badge bg-success rounded-pill">{{$group->status}}</span>
                                </td>
                                <td>{{$group->start}}</td>
                                <td>{{$group->finish}}</td>
                                <td>
                                    @foreach($group->days as $day)
                                        <span class="badge bg-primary">{{$day->name}}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-secondary mt-2"  href="{{route('groups.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Back
    </a>
@endsection
