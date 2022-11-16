<?php

namespace App\Http\Controllers;

use App\Models\Kafedra;
use Illuminate\Http\Request;

class KafedraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kafedras = Kafedra::all();
        return view('kafedra.index',compact('kafedras'));
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
            $kafedra = Kafedra::create($request->input());
            if($kafedra){
                return redirect()->route('kafedra.index')->with('kafedra yaratildi');
            }else{
                return redirect()->route('kafedra.index')->with('kafedra yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('kafedra.index')->with('kafedra yaratish bekor qilindi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function show(kafedra $kafedra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function edit(kafedra $kafedra)
    {
        $kafedras = Kafedra::all();
        $kafedraEdit = Kafedra::find($kafedra->id);
        if($kafedra){
            return view('kafedra.index',compact('kafedraEdit','kafedras'));
        }else{
            return redirect()->route('kafedra.index')->with('kafedra yaratish bekor qilindi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kafedra $kafedra)
    {
        $kafedra = Kafedra::find($kafedra->id);
        if($kafedra){
            $update = $kafedra->update($request->input());
            if($update){
                return redirect()->route('kafedra.index')->with('kafedra yaratildi');
            }else{
                return redirect()->route('kafedra.index')->with('kafedra yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('kafedra.index')->with('kafedra yaratish bekor qilindi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kafedra  $kafedra
     * @return \Illuminate\Http\Response
     */
    public function destroy(kafedra $kafedra)
    {
        $kafedra = Kafedra::find($kafedra->id);
        if($kafedra){
            $update = $kafedra->delete();
            if($update){
                return redirect()->route('kafedra.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('kafedra.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('kafedra.index')->with('Dekanat yaratish bekor qilindi');
        }
    }
}
