<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentValidateRequest;
use App\Models\student;
use Illuminate\Http\Request;
use App\Models\group;
use App\Models\course;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        $groups = group::all();
        $courses = course::all();
        return view('student.index',compact('students','groups','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $store = student::create($request->input());
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
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $studentEdit = student::find($student)->first();
        $students = student::all();
        $groups = group::all();
        $courses = course::all();

        return view('student.index',compact('studentEdit','students','groups','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $student = student::find($student)->first();
        if($student){
            $update = $student->update($request->input());
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
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student = student::find($student);
        if($student){
            $delete = $student->delete();
            if($delete){
                return response()->json(['success' => true,'message' => 'Student delete successfully']);
            }
            else{
                return response()->json(['success' => false,'message' => 'Student not delete']);
            }
        }
        else{
            return response()->json(['success' => false,'message' => 'Student not found']);
        }
    }
}
