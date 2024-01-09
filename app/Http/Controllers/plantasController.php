<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\plantas;


class plantasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planta= plantas::all();
        return view('plantas.index',compact('planta'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plantas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $plantas=new plantas();
       $plantas->nombre=$request->input('nombre');
       $plantas->idTipo=$request->input('idTipo');
       $plantas->max_humedad=$request->input('max_humedad');
       $plantas->max_luminusidad=$request->input('max_luminusidad');
       $plantas->save();
       return redirect()->route('plantas.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(plantas $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plantas $planta)
    {
        return view('plantas.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plantas $planta)
    {

        $request->validate([
            'nombre'=>'required',
            'idTipo'=>'required',
            'max_humedad'=>'required',
            'max_luminusidad'=>'required',
        ]);
        $planta->update($request->all());
        return redirect()->route('plantas.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $planta = plantas::find($id);
       $planta->delete();
        return redirect()->back();
        //
    }
}
