<?php

namespace App\Http\Controllers;

use App\Models\TipoSensore;
use Illuminate\Http\Request;

/**
 * Class TipoSensoreController
 * @package App\Http\Controllers
 */
class TipoSensoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoSensores = TipoSensore::paginate();

        return view('tipo-sensore.index', compact('tipoSensores'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoSensores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoSensore = new TipoSensore();
        return view('tipo-sensore.create', compact('tipoSensore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoSensore::$rules);

        $tipoSensore = TipoSensore::create($request->all());

        return redirect()->route('tipo-sensores.index')
            ->with('success', 'TipoSensore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoSensore = TipoSensore::find($id);

        return view('tipo-sensore.show', compact('tipoSensore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoSensore = TipoSensore::find($id);

        return view('tipo-sensore.edit', compact('tipoSensore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoSensore $tipoSensore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoSensore $tipoSensore)
    {
        request()->validate(TipoSensore::$rules);

        $tipoSensore->update($request->all());

        return redirect()->route('tipo-sensores.index')
            ->with('success', 'TipoSensore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoSensore = TipoSensore::find($id)->delete();

        return redirect()->route('tipo-sensores.index')
            ->with('success', 'TipoSensore deleted successfully');
    }
}
