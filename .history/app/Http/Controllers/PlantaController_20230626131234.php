<?php

namespace App\Http\Controllers;

use App\Models\planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $plantas=planta::all();
      return view('planta.index',compact('plantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plantas = new planta;
        $plantas->nombre=$request->input('nombre');
        $plantas->descripcion=$request->input('descripcion');
        $plantas->save();
        return redirect()->route('planta.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(planta $planta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(planta $planta)
    {

        return view('planta.info',compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,planta $planta)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
        $planta->update($request->all());
        return redirect()->route('planta.planta');


        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(planta $planta)
    {
        $planta->delete();
        return redirect()->back();
        //
    }
}
