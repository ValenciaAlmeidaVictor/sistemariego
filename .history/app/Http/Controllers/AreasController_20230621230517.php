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
        return view('Area.Area', compact( 'Areas'));
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
        $Areas->laro=$request->input('largo');
        $Areas->alto=$request->input('alto');
        $Areas->save();
        return redirect()->route('Area.Area');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Areas $areas)
    {
        //
    }
}
