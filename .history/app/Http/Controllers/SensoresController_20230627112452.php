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
        $Sensores->descripcion=$request->input('descripcion');
        $Sensores->save();
        return redirect()->route('Plantas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensores $sensores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensores $sensores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sensores $sensores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensores $sensores)
    {
        //
    }
}
