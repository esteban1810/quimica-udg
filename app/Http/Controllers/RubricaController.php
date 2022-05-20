<?php

namespace App\Http\Controllers;

use App\Models\Rubrica;
use Illuminate\Http\Request;

class RubricaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rubricas.index',['rubricas'=>Rubrica::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rubrica)
    {
        if($rubrica!=1) 
            if($rubrica!=2)
                // TODO: CREAR VISTA PARA ERROR 404
                return '<h1>ERROR 404</h1>';

        return view('rubricas.create',['rubrica'=>$rubrica,'modelRubrica'=>new Rubrica()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$rubrica)
    {
        $campos = [
            'correo'=>'required',
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

        Rubrica::create($request->all()+['rubrica'=>$rubrica]);
        return redirect()->route('rubrica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubrica  $rubrica
     * @return \Illuminate\Http\Response
     */
    public function show($modelRubricaID)
    {
        $modelRubrica = Rubrica::findOrFail($modelRubricaID);
        return view('rubricas.show',['rubrica'=>$modelRubrica->rubrica,'modelRubrica'=>$modelRubrica]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rubrica  $rubrica
     * @return \Illuminate\Http\Response
     */
    public function edit($modelRubricaID)
    {
        $modelRubrica = Rubrica::findOrFail($modelRubricaID);
        return view('rubricas.edit',['rubrica'=>$modelRubrica->rubrica,'modelRubrica'=>$modelRubrica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rubrica  $rubrica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $modelRubricaID)
    {
        Rubrica::findOrFail($modelRubricaID)->update($request->all());
        return redirect()->route('rubrica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubrica  $rubrica
     * @return \Illuminate\Http\Response
     */
    public function destroy($rubrica)
    {
        
        $rubrica = Rubrica::findOrFail($rubrica);
        $rubrica->delete();
        return redirect()->route('rubrica.index');
    }
}
