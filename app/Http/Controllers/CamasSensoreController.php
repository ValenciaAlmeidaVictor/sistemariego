<?php

namespace App\Http\Controllers;

use App\Models\CamasSensore;
use App\Models\Cama;
use App\Models\Sensore;
use Illuminate\Http\Request;

/**
 * Class CamasSensoreController
 * @package App\Http\Controllers
 */
class CamasSensoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camasSensores = CamasSensore::paginate();

        return view('camas-sensore.index', compact('camasSensores'))
            ->with('i', (request()->input('page', 1) - 1) * $camasSensores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $camasSensore = new CamasSensore();
        $camas =Cama ::pluck('nombre', 'id');
        $sensores =Sensore ::pluck('nombre', 'id');
        return view('camas-sensore.create', compact('camasSensore','camas','sensores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CamasSensore::$rules);

        $camasSensore = CamasSensore::create($request->all());

        return redirect()->route('camas-sensores.index')
            ->with('success', 'CamasSensore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $camasSensore = CamasSensore::find($id);

        return view('camas-sensore.show', compact('camasSensore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $camasSensore = CamasSensore::find($id);
        $camas =Cama ::pluck('nombre', 'id');
        $sensores =Sensore ::pluck('nombre', 'id');
        return view('camas-sensore.edit', compact('camasSensore','camas','sensores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CamasSensore $camasSensore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CamasSensore $camasSensore)
    {
        request()->validate(CamasSensore::$rules);

        $camasSensore->update($request->all());

        return redirect()->route('camas-sensores.index')
            ->with('success', 'CamasSensore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $camasSensore = CamasSensore::find($id)->delete();

        return redirect()->route('camas-sensores.index')
            ->with('success', 'CamasSensore deleted successfully');
    }
}
