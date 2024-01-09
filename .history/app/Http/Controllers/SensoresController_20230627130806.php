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
        $sensores=Sensores::all();
        return view('sensores.index',compact('sensores'));
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
        $sensores = new Sensores;
        $sensores->nombre=$request->input('nombre');
        $sensores->descripcion=$request->input('descripcion');
        $sensores->save();
        return redirect()->route('sensor.index');
        //
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
    public function edit(Sensores $sensor)
    {
        return view('sensores.edit', compact('sensor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Sensores $sensor)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
        $sensor->update($request->all());
        return redirect()->route('sensores.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensores $sensor)
    {
        $sensor->delete();
        return redirect()->back();
        //
    }
}
