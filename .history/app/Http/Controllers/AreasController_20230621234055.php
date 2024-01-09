<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Areas = Areas::all();
        return view('Area.index', compact( 'Areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Areas=new Areas;
        $Areas->nombre=$request->input('nombre');
        $Areas->largo=$request->input('largo');
        $Areas->ancho=$request->input('ancho');
        $Areas->save();
        return redirect()->route('Area.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Areas $areas)
    {
        return view('Area.edit', compact('areas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Areas $areas)
    {
        $request->validate([
            'nombre'=>'required',
            'largo'=>'required',
            'ancho'=>'required',
        ]);
        $areas->update($request->all());
        return redirect()->route('Area.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Areas $areas)
    {
        $areas->delete();
        return redirect()->back();
    }
}
