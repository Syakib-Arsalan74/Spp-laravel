<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Http\Requests\StoreSppRequest;
use App\Http\Requests\UpdateSppRequest;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.spp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSppRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spp $spp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSppRequest $request, Spp $spp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spp $spp)
    {
        //
    }
}
