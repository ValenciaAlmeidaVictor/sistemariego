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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plantas = new planta;
        $plantas->nombre=$request->input('nombre');
        $plantas->descripción=$request->input('descripción');
        $plantas->save();
        return redirect()->back();
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
    public function edit(planta$id)
    {
        $plantas=planta::find($id);
        return view('planta.info',compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $plantas=planta::find($id);
        $plantas->nombre=$request->input('nombre');
        $plantas->descripción=$request->input('descripción');
        $plantas->update();
        return redirect()->back();
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
