<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use App\Http\Requests\StorePetaniRequest;
use App\Http\Requests\UpdatePetaniRequest;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetaniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetaniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function show(Petani $petani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function edit(Petani $petani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetaniRequest  $request
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetaniRequest $request, Petani $petani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petani $petani)
    {
        //
    }
}
