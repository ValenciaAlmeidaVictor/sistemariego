<?php

namespace App\Http\Controllers;

use App\Models\Sensores;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sensores=Sensores::all();
        return view('sensores.index',compact('Sensores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sensores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Sensores=new Sensores;
        $Sensores->nombre=$request->input('nombre');
        $Sensores->tipoSensor=$request->input('tipoSensor');
        $Sensores->costo=$request->input('costo');
        $Sensores->cantidad=$request->input('cantidad');
        $Sensores->save();
        return redirect()->route('Sensores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensores $Sensor)
    {
        return view('sensores.edit', compact('Sensor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sensores $Sensor)
    {
        $request->validate([
            'nombre'=>'required',
            'tipoSensor'=>'required',
            'costo'=>'required',
            'cantidad'=>'required',
        ]);
        $Sensor->update($request->all());
        return redirect()->route('Sensor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensores $Sensor)
    {
        $Sensor->delete();
        return redirect()->back();
    }
}
