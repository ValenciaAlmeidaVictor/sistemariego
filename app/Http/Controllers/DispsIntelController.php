<?php

namespace App\Http\Controllers;

use App\Models\DispsIntel;
use App\Models\TiposDispsIntel;
use App\Models\Cama;
use App\Models\Estado;
use App\Models\histosDispsIntel;
use Illuminate\Http\Request;

/**
 * Class DispsIntelController
 * @package App\Http\Controllers
 */
class DispsIntelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispsIntels = DispsIntel::paginate();

        return view('disps-intel.index', compact('dispsIntels'))
            ->with('i', (request()->input('page', 1) - 1) * $dispsIntels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dispsIntel = new DispsIntel();
        $tiposDispsIntels = TiposDispsIntel::pluck('tipo','id');
        $estados =Estado ::pluck('estado', 'id');
        $camas = Cama::pluck('nombre','id');
        return view('disps-intel.create', compact('dispsIntel','tiposDispsIntels','estados','camas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DispsIntel::$rules);

        $dispsIntel = DispsIntel::create($request->all());

        return redirect()->route('disps-intels.index')
            ->with('success', 'DispsIntel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispsIntel = DispsIntel::with('histosDispsIntel')->find($id);

        return view('disps-intel.show', compact('dispsIntel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispsIntel = DispsIntel::with('histosDispsIntel')->find($id);
        $tiposDispsIntels = TiposDispsIntel::pluck('tipo','id');
        $estados =Estado ::pluck('estado', 'id');
        $camas = Cama::pluck('nombre','id');
        return view('disps-intel.edit', compact('dispsIntel','tiposDispsIntels','estados','camas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DispsIntel $dispsIntel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DispsIntel $dispsIntel)
    {
        request()->validate(DispsIntel::$rules);

        $dispsIntel->update($request->all());

        return redirect()->route('disps-intels.index')
            ->with('success', 'DispsIntel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dispsIntel = DispsIntel::find($id)->delete();

        return redirect()->route('disps-intels.index')
            ->with('success', 'DispsIntel deleted successfully');
    }
}
