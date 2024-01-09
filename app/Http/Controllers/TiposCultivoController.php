<?php

namespace App\Http\Controllers;

use App\Models\TiposCultivo;
use Illuminate\Http\Request;

/**
 * Class TiposCultivoController
 * @package App\Http\Controllers
 */
class TiposCultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposCultivos = TiposCultivo::paginate();

        return view('tipos-cultivo.index', compact('tiposCultivos'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposCultivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposCultivo = new TiposCultivo();
        return view('tipos-cultivo.create', compact('tiposCultivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposCultivo::$rules);

        $tiposCultivo = TiposCultivo::create($request->all());

        return redirect()->route('tipos-cultivos.index')
            ->with('success', 'TiposCultivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposCultivo = TiposCultivo::find($id);

        return view('tipos-cultivo.show', compact('tiposCultivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposCultivo = TiposCultivo::find($id);

        return view('tipos-cultivo.edit', compact('tiposCultivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposCultivo $tiposCultivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposCultivo $tiposCultivo)
    {
        request()->validate(TiposCultivo::$rules);

        $tiposCultivo->update($request->all());

        return redirect()->route('tipos-cultivos.index')
            ->with('success', 'TiposCultivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposCultivo = TiposCultivo::find($id)->delete();

        return redirect()->route('tipos-cultivos.index')
            ->with('success', 'TiposCultivo deleted successfully');
    }
}
