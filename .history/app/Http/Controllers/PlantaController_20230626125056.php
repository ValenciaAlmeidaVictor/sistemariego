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
    public function index(Request $request)
    {
      $plantas=planta::all();
      return view('planta.planta',compact('plantas'));
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
        return redirect()->route('planta.planta');
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
    public function edit(planta $id)
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
    public function destroy($id)
    {
        $plantas=planta::find($id);
        $plantas->delete();
        return redirect()->back();
        //
    }
}
