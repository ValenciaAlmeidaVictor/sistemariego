<?php

namespace App\Http\Controllers;

use App\Models\Sensore;
use App\Models\TipoSensore;
use App\Models\Estado;
use Illuminate\Http\Request;

/**
 * Class SensoreController
 * @package App\Http\Controllers
 */
class SensoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensores = Sensore::paginate();

        return view('sensore.index', compact('sensores'))
            ->with('i', (request()->input('page', 1) - 1) * $sensores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sensore = new Sensore();
        $tipoSensores =TipoSensore ::pluck('tipo', 'id');
        $estados =Estado ::pluck('estado', 'id');
        return view('sensore.create', compact('sensore','tipoSensores','estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sensore::$rules);

        $sensore = Sensore::create($request->all());

        return redirect()->route('sensores.index')
            ->with('success', 'Sensore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sensore = Sensore::find($id);

        return view('sensore.show', compact('sensore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sensore = Sensore::find($id);
        $tipoSensores = TipoSensore::pluck('tipo', 'id');
        $estados =Estado ::pluck('estado', 'id');
        return view('sensore.edit', compact('sensore','tipoSensores','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sensore $sensore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensore $sensore)
    {
        request()->validate(Sensore::$rules);

        $sensore->update($request->all());

        return redirect()->route('sensores.index')
            ->with('success', 'Sensore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sensore = Sensore::find($id)->delete();

        return redirect()->route('sensores.index')
            ->with('success', 'Sensore deleted successfully');
    }
}
