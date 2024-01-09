<?php

namespace App\Http\Controllers;

use App\Models\Invernadero;
use App\Models\Cama;
use Illuminate\Http\Request;

/** 
 * Class InvernaderoController
 * @package App\Http\Controllers
 */
class InvernaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invernaderos = Invernadero::paginate();

        return view('invernadero.index', compact('invernaderos'))
            ->with('i', (request()->input('page', 1) - 1) * $invernaderos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $invernadero = new Invernadero();
        return view('invernadero.create', compact('invernadero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Invernadero::$rules);

        $invernadero = Invernadero::create($request->all());

        return redirect()->route('invernaderos.index')
            ->with('success', 'Invernadero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invernadero = Invernadero::with('camas.cultivos')->find($id);

        return view('invernadero.show', compact('invernadero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invernadero = Invernadero::with('camas')->find($id);
       // $camas = Cama::pluck('nombre', 'id');//

        return view('invernadero.edit', compact('invernadero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Invernadero $invernadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invernadero $invernadero)
    {
        request()->validate(Invernadero::$rules);

        $invernadero->update($request->all());

        return redirect()->route('invernaderos.index')
            ->with('success', 'Invernadero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $invernadero = Invernadero::find($id)->delete();

        return redirect()->route('invernaderos.index')
            ->with('success', 'Invernadero deleted successfully');
    }
    
}
