<?php

namespace App\Http\Controllers;

use App\Models\HistosDispsIntel;
use App\Models\DispsIntel;
use Illuminate\Http\Request;

/**
 * Class HistosDispsIntelController
 * @package App\Http\Controllers
 */
class HistosDispsIntelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histosDispsIntels = HistosDispsIntel::paginate();

        return view('histos-disps-intel.index', compact('histosDispsIntels'))
            ->with('i', (request()->input('page', 1) - 1) * $histosDispsIntels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $histosDispsIntel = new HistosDispsIntel();
        $dispsIntels = DispsIntel::pluck('nombre','id');
        return view('histos-disps-intel.create', compact('histosDispsIntel','dispsIntels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistosDispsIntel::$rules);

        $histosDispsIntel = HistosDispsIntel::create($request->all());

        return redirect()->route('histos-disps-intels.index')
            ->with('success', 'HistosDispsIntel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $histosDispsIntel = HistosDispsIntel::find($id);

        return view('histos-disps-intel.show', compact('histosDispsIntel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $histosDispsIntel = HistosDispsIntel::find($id);
        $dispsIntels = DispsIntel::pluck('nombre','id');
        return view('histos-disps-intel.edit', compact('histosDispsIntel','dispsIntels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistosDispsIntel $histosDispsIntel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistosDispsIntel $histosDispsIntel)
    {
        request()->validate(HistosDispsIntel::$rules);

        $histosDispsIntel->update($request->all());

        return redirect()->route('histos-disps-intels.index')
            ->with('success', 'HistosDispsIntel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $histosDispsIntel = HistosDispsIntel::find($id)->delete();

        return redirect()->route('histos-disps-intels.index')
            ->with('success', 'HistosDispsIntel deleted successfully');
    }
}
