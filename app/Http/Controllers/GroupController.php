<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Day;
use App\Models\Group;
use App\Models\Room;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('title','id');
        $rooms = Room::pluck('title','id');
        $days = Day::all();
        return view('admin.groups.create',compact('days','courses','rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = Group::create($request->all());
        $group->days()->sync($request->days);
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('admin.groups.show',compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $courses = Course::pluck('title','id');
        $rooms = Room::pluck('title','id');
        $days = Day::all();
        return view('admin.groups.edit',compact('group','days','courses','rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        $group->days()->sync($request->days);
        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
//        $user->roles()->sync([]);
//        $group->days()->sync([]);
//        $group->room()->sync([]);
//        $group->course()->sync([]);
        $group->delete();
        return back();
    }
}
