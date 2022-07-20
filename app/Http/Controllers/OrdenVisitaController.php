<?php

namespace App\Http\Controllers;

use App\Models\OrdenVisita;
use Illuminate\Http\Request;

class OrdenVisitaController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenVisita  $ordenVisita
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenVisita $ordenVisita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenVisita  $ordenVisita
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenVisita $ordenVisita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdenVisita  $ordenVisita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenVisita $ordenVisita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenVisita  $ordenVisita
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenVisita $ordenVisita)
    {
        //
    }


    public function guardarRegistro(Request $request){
        return OrdenVisita::create($request->all());
    }
}
