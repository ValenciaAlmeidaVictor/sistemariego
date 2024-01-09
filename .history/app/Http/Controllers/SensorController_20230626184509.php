<?php

namespace App\Http\Controllers;

use App\Models\sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensores=sensor::all();
        return view('sensor.index',compact('sensores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sensor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sensores = new sensor;
        $sensores->nombre=$request->input('nombre');
        $sensores->descripcion=$request->input('descripcion');
        $sensores->save();
        return redirect()->route('sensor.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sensor $sensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sensor $id)
    {
        $sensores=sensor::find($id);
        return view('sensor.info',compact('sensor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $sensores=sensor::find($id);
        $sensores->nombre=$request->input('nombre');
        $sensores->descripcion=$request->input('descripcion');
        $sensores->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sensores=sensor::find($id);
        $sensores->delete();
        return redirect()->back();
        //
    }
}
