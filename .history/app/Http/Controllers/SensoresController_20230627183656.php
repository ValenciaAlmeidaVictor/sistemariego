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
        $Tipos=Sensores::all();
        return view('sensores.index',compact('Tipos'));
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
        $Tipos= new Sensores;
        $Tipos->nombre=$request->input('nombre');
        $Tipos->tipoSensor=$request->input('tipoSensor');
        $Tipos->costo=$request->input('costo');
        $Tipos->cantidad=$request->input('cantidad');
        $Tipos->save();
        return redirect()->route('sensores.index');
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
    public function edit()
    {
        return view('sensores.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Sensores $id)
    {
        $Tipos=Sensores::find($id);
        $Tipos->nombre=$request->input('nombre');
        $Tipos->tipoSensor=$request->input('tipoSensor');
        $Tipos->costo=$request->input('costo');
        $Tipos->cantidad=$request->input('cantidad');
        $Tipos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sensores=Sensores::find($id);
        $sensores->delete();
        return redirect()->back();
    }
}
