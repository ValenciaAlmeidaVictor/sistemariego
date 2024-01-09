<?php

namespace App\Http\Controllers;

use App\Models\Sara;
use Illuminate\Http\Request;

class SaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Saras=Sara::all();
        return view('saras.index',compact('Saras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('saras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sara $sara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sara $sara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sara $sara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sara $sara)
    {
        //
    }
}
