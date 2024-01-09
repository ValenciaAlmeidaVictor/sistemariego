<?php

namespace App\Http\Controllers;

use App\Models\CultivosCama;
use App\Models\Cultivo;
use App\Models\Cama;
use Illuminate\Http\Request;

/**
 * Class CultivosCamaController
 * @package App\Http\Controllers
 */
class CultivosCamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cultivosCamas = CultivosCama::paginate();

        return view('cultivos-cama.index', compact('cultivosCamas'))
            ->with('i', (request()->input('page', 1) - 1) * $cultivosCamas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cultivosCama = new CultivosCama();
        $cultivos = Cultivo::pluck('nombre', 'id');
        $camas = Cama::pluck('nombre', 'id');
        return view('cultivos-cama.create', compact('cultivosCama','cultivos','camas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CultivosCama::$rules);

        $cultivosCama = CultivosCama::create($request->all());

        return redirect()->route('cultivos-camas.index')
            ->with('success', 'CultivosCama created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cultivosCama = CultivosCama::find($id);

        return view('cultivos-cama.show', compact('cultivosCama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultivosCama = CultivosCama::find($id);
        $cultivos = Cultivo::pluck('nombre', 'id');
        $camas = Cama::pluck('nombre', 'id');
        return view('cultivos-cama.edit', compact('cultivosCama','cultivos','camas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CultivosCama $cultivosCama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CultivosCama $cultivosCama)
    {
        request()->validate(CultivosCama::$rules);

        $cultivosCama->update($request->all());

        return redirect()->route('cultivos-camas.index')
            ->with('success', 'CultivosCama updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cultivosCama = CultivosCama::find($id)->delete();

        return redirect()->route('cultivos-camas.index')
            ->with('success', 'CultivosCama deleted successfully');
    }
}
