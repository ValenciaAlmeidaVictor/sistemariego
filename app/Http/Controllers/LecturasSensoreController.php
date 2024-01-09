<?php

namespace App\Http\Controllers;

use App\Models\LecturasSensore;
use App\Models\Sensore;
use Illuminate\Http\Request;

/**
 * Class LecturasSensoreController
 * @package App\Http\Controllers
 */
class LecturasSensoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturasSensores = LecturasSensore::paginate();

        return view('lecturas-sensore.index', compact('lecturasSensores'))
            ->with('i', (request()->input('page', 1) - 1) * $lecturasSensores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturasSensore = new LecturasSensore();
        $sensores = Sensore::pluck('nombre', 'id');
        return view('lecturas-sensore.create', compact('lecturasSensore','sensores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LecturasSensore::$rules);

        $lecturasSensore = LecturasSensore::create($request->all());

        return redirect()->route('lecturas-sensores.index')
            ->with('success', 'LecturasSensore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecturasSensore = LecturasSensore::find($id);

        return view('lecturas-sensore.show', compact('lecturasSensore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturasSensore = LecturasSensore::find($id);
        $sensores = Sensore::pluck('nombre', 'id');
        return view('lecturas-sensore.edit', compact('lecturasSensore','sensores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LecturasSensore $lecturasSensore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LecturasSensore $lecturasSensore)
    {
        request()->validate(LecturasSensore::$rules);

        $lecturasSensore->update($request->all());

        return redirect()->route('lecturas-sensores.index')
            ->with('success', 'LecturasSensore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lecturasSensore = LecturasSensore::find($id)->delete();

        return redirect()->route('lecturas-sensores.index')
            ->with('success', 'LecturasSensore deleted successfully');
    }
}
