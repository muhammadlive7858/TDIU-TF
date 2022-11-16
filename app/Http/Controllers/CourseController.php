<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\group;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::all();
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = course::create($request->input());
        if($store)
        {
        return response()->json(['success' => true,'message' => 'Student added successfully']);
        }
        else
        {
        return response()->json(['success' => false,'message' => 'Student not added']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        $groups = group::where('course_id',$course->id)->get();
        return view('course.show',compact('groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        $courses = course::all();
        $courseEdit = course::find($course)->first();
        return view('course.index',compact('courses','courseEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $course = course::find($course)->first();
        if($course){
            $update = $course->update($request->input());
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
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        $course = course::find($course)->first();
        if($course){
            $delete = $course->delete();
            if($delete){
                return response()->json(['success' => true,'message' => 'Course delete successfully']);
            }
            else{
                return response()->json(['success' => false,'message' => 'Course not delete']);
            }
        }
        else{
            return response()->json(['success' => false,'message' => 'Course not found']);
        }
    }
}
