<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\course;
use App\Models\student;


use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = group::all();
        return view('group.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = group::create($request->input());
        if($store){
            return response()->json(['success' => true,'message' => 'Student updated successfully']);
        }
        else{
            return response()->json(['success' => false,'message' => 'Student not updated']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(group $group)
    {
        $groups = group::all();
        $courses = course::all();
        $students = student::where('group_id',$group->id)->get();
        return view('group.show',compact('groups','students','courses'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(group $group)
    {
        $groups = group::all();
        $groupEdit = group::find($group)->first();
        return view('group.index',compact('groups','groupEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, group $group)
    {
        $group = group::find($group)->first();
        if($group){
            $update = $group->update($request->input());
            if($update){
                return response()->json(['success' => true,'message' => 'Student updated successfully']);
            }
            else{
                return response()->json(['success' => false,'message' => 'Student not updated']);
            }
        }
        else{
            return response()->json(['success' => false,'message' => 'Student not found']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(group $group)
    {
        $group = group::find($group)->first();
        if($group){
            $update = $group->delete();
            if($update){
                return response()->json(['success' => true,'message' => 'Student updated successfully']);
            }
            else{
                return response()->json(['success' => false,'message' => 'Student not updated']);
            }
        }
        else{
            return response()->json(['success' => false,'message' => 'Student not found']);
        }
    }
}
