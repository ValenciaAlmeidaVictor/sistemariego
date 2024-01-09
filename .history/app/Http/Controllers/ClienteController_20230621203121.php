<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $Clientes = Cliente::all();
        return view('Cliente.index', compact( 'Clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('Cliente.Registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->telefono =  $request->input('telefono');
        $cliente->save();
        return redirect()->back();
//return view('cliente.Registrar');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        return view('cliente.Editar', compact('Clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request,Cliente $clientes)
    {
        $request->validate([
            'nombre'=>'required',
            'ancho'=>'required',
            'largo'=>'required',
            'material_es'=>'required',
            'material_env'=>'required',
        ]);
        $Clientes->update($request->all());
        return redirect()->route('Clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('cliente');
    }
}
