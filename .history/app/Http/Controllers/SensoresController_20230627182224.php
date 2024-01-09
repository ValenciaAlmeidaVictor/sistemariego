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
        $sensores->tipoSensor=$request->input('tipoSensor');
        $sensores->costo=$request->input('costo');
        $sensores->cantidad=$request->input('cantidad');
        $sensores->save();
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
    public function edit(Sensores $Sensor)
    {
        return view('sensores.edit',compact('Sensor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Sensores $Sensor)
    {
        $request->validate([
            'nombre'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
        ]);
        $Sensor->update($request->all());
        return redirect()->route('clientes.index');
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
