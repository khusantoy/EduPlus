{{--@extends('layouts.admin')--}}
{{--@section('content')--}}
{{--    <h1 class="h3 mb-3"><strong>Groups</strong> Dashboard</h1>--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <a class="btn btn-primary mb-3"  href="{{route('groups.create')}}">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>--}}
{{--                        </svg>--}}
{{--                        Create New--}}
{{--                    </a>--}}
{{--                    <table class="table table-bordered table-hover">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Id</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Course</th>--}}
{{--                            <th>Room</th>--}}
{{--                            <th>Status</th>--}}
{{--                            <th>Start</th>--}}
{{--                            <th>Finish</th>--}}
{{--                            <th>Days</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($groups as $group)--}}
{{--                            <tr>--}}
{{--                                <td>{{$group->id}}</td>--}}
{{--                                <td>{{$group->name}}</td>--}}
{{--                                <td>{{$group->courses->title}}</td>--}}
{{--                                <td>{{$group->room_number}}</td>--}}
{{--                                <td>{{$group->status}}</td>--}}
{{--                                <td>{{$group->start}}</td>--}}
{{--                                <td>{{$group->finish}}</td>--}}
{{--                                <td>--}}
{{--                                    @foreach($group->courses as $item)--}}
{{--                                        <span class="badge bg-primary">{{$item}}</span>--}}
{{--                                    @endforeach--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('groups.edit',$group->id)}}" class="btn btn-primary">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">--}}
{{--                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>--}}
{{--                                        </svg>--}}
{{--                                        Edit--}}
{{--                                    </a>--}}
{{--                                    <a href="{{route('groups.show',$group->id)}}" class="btn btn-success">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">--}}
{{--                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>--}}
{{--                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>--}}
{{--                                        </svg>--}}
{{--                                        Show--}}
{{--                                    </a>--}}
{{--                                    <form class="d-inline" action="{{route('groups.destroy',$group->id)}}" method="post">--}}
{{--                                        @method('DELETE')--}}
{{--                                        @csrf--}}
{{--                                        <button class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' type="submit">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">--}}
{{--                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>--}}
{{--                                            </svg>--}}
{{--                                            Delete--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>--}}
{{--    <script type="text/javascript">--}}

{{--        $('.show_confirm').click(function(event) {--}}
{{--            var form =  $(this).closest("form");--}}
{{--            var name = $(this).data("name");--}}
{{--            event.preventDefault();--}}
{{--            swal({--}}
{{--                title: `Are you sure you want to delete this record?`,--}}
{{--                text: "If you delete this, it will be gone.",--}}
{{--                icon: "warning",--}}
{{--                buttons: true,--}}
{{--                dangerMode: true,--}}
{{--            })--}}
{{--                .then((willDelete) => {--}}
{{--                    if (willDelete) {--}}
{{--                        form.submit();--}}
{{--                    }--}}
{{--                });--}}
{{--        });--}}

{{--    </script>--}}
{{--@endsection--}}
