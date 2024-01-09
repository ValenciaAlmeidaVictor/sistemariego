<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Plantas=Planta::all();
        return view('planta.index',compact('Plantas'));
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
        $Plantas=new Planta;
        $Plantas->nombre=$request->input('nombre');
        $Plantas->descripcion=$request->input('descripcion');
        $Plantas->save();
        return redirect()->route('planta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Planta $planta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planta $Plantas)
    {
        return view('planta.edit', compact('Plantas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planta $planta)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'descripcion',
        ]);
        $planta->update($request->all());
        return redirect()->route('planta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planta $planta)
    {
        $planta->delete();
        return redirect()->back();
    }
}
