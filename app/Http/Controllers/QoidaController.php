<?php

namespace App\Http\Controllers;

use App\Models\Qoida;
use Illuminate\Http\Request;

class QoidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qoidas = Qoida::all();
        return view('qoida.index',compact('qoidas'));
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
            $qoida = Qoida::create($request->input());
            if($qoida){
                return redirect()->route('qoida.index')->with('qoida yaratildi');
            }else{
                return redirect()->route('qoida.index')->with('qoida yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('qoida.index')->with('qoida yaratish bekor qilindi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\qoida  $qoida
     * @return \Illuminate\Http\Response
     */
    public function show(qoida $qoida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qoida  $qoida
     * @return \Illuminate\Http\Response
     */
    public function edit(qoida $qoida)
    {
        $qoidas = Qoida::all();
        $qoidaEdit = Qoida::find($qoida->id);
        if($qoida){
            return view('qoida.index',compact('qoidaEdit','qoidas'));
        }else{
            return redirect()->route('qoida.index')->with('qoida yaratish bekor qilindi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qoida  $qoida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qoida $qoida)
    {
        $qoida = Qoida::find($qoida->id);
        if($qoida){
            $update = $qoida->update($request->input());
            if($update){
                return redirect()->route('qoida.index')->with('qoida yaratildi');
            }else{
                return redirect()->route('qoida.index')->with('qoida yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('qoida.index')->with('qoida yaratish bekor qilindi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qoida  $qoida
     * @return \Illuminate\Http\Response
     */
    public function destroy(qoida $qoida)
    {
        $qoida = Qoida::find($qoida->id);
        if($qoida){
            $update = $qoida->delete();
            if($update){
                return redirect()->route('qoida.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('qoida.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('qoida.index')->with('Dekanat yaratish bekor qilindi');
        }
    }
}
