<?php

namespace App\Http\Controllers;

use App\Models\Fechas;
use Illuminate\Http\Request;

class FechasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosConsultados['fechas']=Fechas::paginate(5);
        return view('fechas.index',$datosConsultados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fechas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'fecha'=>'required|string|max:50',
            'titulo_fecha'=>'required|string|max:50',
            'cuerpo_fecha'=>'required|string|max:50',
            'asunto_fecha'=>'required|string|max:50',
            'mostrar_fecha_vencida'=>'required|int|max:1',
            'jerarquia_mostrar1'=>'string|max:20',
            'jerarquia_mostrar2'=>'string|max:20',
            'jerarquia_mostrar3'=>'string|max:20'
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        // $datosFechas = request()->all();
        $datosFechas = request()->except('_token');
        Fechas::insert($datosFechas);
        return redirect('fechas')->with('mensaje','Formulario guardado');

        // return response()->json($datosFechas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fechas  $fechas
     * @return \Illuminate\Http\Response
     */
    public function show(Fechas $fechas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fechas  $fechas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fechas = Fechas::findOrFail($id);
        return view('fechas.edit',compact('fechas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fechas  $fechas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'fecha'=>'required|string|max:50',
            'titulo_fecha'=>'required|string|max:50',
            'cuerpo_fecha'=>'required|string|max:50',
            'asunto_fecha'=>'required|string|max:50',
            'mostrar_fecha_vencida'=>'required|int|max:1',
            'jerarquia_mostrar1'=>'string|max:20',
            'jerarquia_mostrar2'=>'string|max:20',
            'jerarquia_mostrar3'=>'string|max:20'
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        //
        $datosFechas = request()->except(['_token','_method']);
        Fechas::where('id','=',$id)->update($datosFechas);

        $fechas = Fechas::findOrFail($id);
        return view('fechas.edit',compact('fechas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fechas  $fechas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fechas::destroy($id);
        return redirect('fechas');
    }
}
