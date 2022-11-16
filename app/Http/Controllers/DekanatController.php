<?php

namespace App\Http\Controllers;

use App\Models\Dekanat;
use Illuminate\Http\Request;

class DekanatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dekanats = Dekanat::all();
        return view('dekanat.index',compact('dekanats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request){
            $dekanat = Dekanat::create($request->input());
            if($dekanat){
                return redirect()->route('dekanat.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dekanat  $dekanat
     * @return \Illuminate\Http\Response
     */
    public function show(Dekanat $dekanat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dekanat  $dekanat
     * @return \Illuminate\Http\Response
     */
    public function edit(Dekanat $dekanat)
    {
        $dekanats = Dekanat::all();
        $dekanatEdit = Dekanat::find($dekanat->id);
        if($dekanat){
            return view('dekanat.index',compact('dekanatEdit','dekanats'));
        }else{
            return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dekanat  $dekanat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dekanat $dekanat)
    {
        $dekanat = Dekanat::find($dekanat->id);
        if($dekanat){
            $update = $dekanat->update($request->input());
            if($update){
                return redirect()->route('dekanat.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dekanat  $dekanat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dekanat $dekanat)
    {
        $dekanat = Dekanat::find($dekanat->id);
        if($dekanat){
            $update = $dekanat->delete();
            if($update){
                return redirect()->route('dekanat.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('dekanat.index')->with('Dekanat yaratish bekor qilindi');
        }
    }
}
