<?php

namespace App\Http\Controllers;

use App\Models\TiposDispsIntel;
use Illuminate\Http\Request;

/**
 * Class TiposDispsIntelController
 * @package App\Http\Controllers
 */
class TiposDispsIntelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposDispsIntels = TiposDispsIntel::paginate();

        return view('tipos-disps-intel.index', compact('tiposDispsIntels'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposDispsIntels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposDispsIntel = new TiposDispsIntel();
        return view('tipos-disps-intel.create', compact('tiposDispsIntel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposDispsIntel::$rules);

        $tiposDispsIntel = TiposDispsIntel::create($request->all());

        return redirect()->route('tipos-disps-intels.index')
            ->with('success', 'TiposDispsIntel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposDispsIntel = TiposDispsIntel::find($id);

        return view('tipos-disps-intel.show', compact('tiposDispsIntel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposDispsIntel = TiposDispsIntel::find($id);

        return view('tipos-disps-intel.edit', compact('tiposDispsIntel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposDispsIntel $tiposDispsIntel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposDispsIntel $tiposDispsIntel)
    {
        request()->validate(TiposDispsIntel::$rules);

        $tiposDispsIntel->update($request->all());

        return redirect()->route('tipos-disps-intels.index')
            ->with('success', 'TiposDispsIntel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposDispsIntel = TiposDispsIntel::find($id)->delete();

        return redirect()->route('tipos-disps-intels.index')
            ->with('success', 'TiposDispsIntel deleted successfully');
    }
}
