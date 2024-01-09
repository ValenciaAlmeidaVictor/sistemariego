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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $planta=new plantas();
       $planta->nombre=$request->input('nombre');
       $planta->idTipo=$request->input('idTipo');
       $planta->max_humedad=$request->input('max_humedad');
       $planta->max_luminusidad=$request->input('max_luminusidad');
       $planta->save();
       return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(plantas $planta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plantas $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

       $planta=plantas::find($id);
       $planta->nombre=$request->input('nombre');
       $planta->idTipo=$request->input('idTipo');
       $planta->max_humedad=$request->input('max_humedad');
       $planta->max_humedad=$request->input('max_luminusidad');
       $planta->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $planta=plantas::find($id);
       $planta->delete();
        return redirect()->back();
        //
    }
}
