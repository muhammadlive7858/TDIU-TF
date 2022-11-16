<?php

namespace App\Http\Controllers;

use App\Models\Nizom;
use Illuminate\Http\Request;

class NizomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nizoms = Nizom::all();
        return view('nizom.index',compact('nizoms'));
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
            $nizom = Nizom::create($request->input());
            if($nizom){
                return redirect()->route('nizom.index')->with('nizom yaratildi');
            }else{
                return redirect()->route('nizom.index')->with('nizom yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('nizom.index')->with('nizom yaratish bekor qilindi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nizom  $nizom
     * @return \Illuminate\Http\Response
     */
    public function show(nizom $nizom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nizom  $nizom
     * @return \Illuminate\Http\Response
     */
    public function edit(nizom $nizom)
    {
        $nizoms = Nizom::all();
        $nizomEdit = Nizom::find($nizom->id);
        if($nizom){
            return view('nizom.index',compact('nizomEdit','nizoms'));
        }else{
            return redirect()->route('nizom.index')->with('nizom yaratish bekor qilindi');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nizom  $nizom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nizom $nizom)
    {
        $nizom = Nizom::find($nizom->id);
        if($nizom){
            $update = $nizom->update($request->input());
            if($update){
                return redirect()->route('nizom.index')->with('nizom yaratildi');
            }else{
                return redirect()->route('nizom.index')->with('nizom yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('nizom.index')->with('nizom yaratish bekor qilindi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nizom  $nizom
     * @return \Illuminate\Http\Response
     */
    public function destroy(nizom $nizom)
    {
        $nizom = Nizom::find($nizom->id);
        if($nizom){
            $update = $nizom->delete();
            if($update){
                return redirect()->route('nizom.index')->with('Dekanat yaratildi');
            }else{
                return redirect()->route('nizom.index')->with('Dekanat yaratish bekor qilindi');
            }
        }else{
                return redirect()->route('nizom.index')->with('Dekanat yaratish bekor qilindi');
        }
    }
}
