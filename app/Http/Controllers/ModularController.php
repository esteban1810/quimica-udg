<?php

namespace App\Http\Controllers;

use App\Models\Modular;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ModularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modulares = Modular::all();
        $profesores = User::where("tipo_usuario","=","profesor")->get();
        $coordinadores = User::where("tipo_usuario","=","coordinador")->get();
        // $profesores = User::all();
        return view('modular.index',['modulares'=>$modulares,'profesores'=>$profesores,'coordinadores'=>$coordinadores]);
    }

    public function actualizar(Request $request)
    {
        Modular::where('id','=',$request->id)->update(['ProfesorAsignado'=>$request['ProfesorAsignado'],'CoordinadorAsignado'=>$request['CoordinadorAsignado']]);
        // return back();
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(auth()->id());
        
        return view('modular.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'CorreoAlumno'=>'required|email',
            'ApellidoPaternoAlumno'=>'required|string|max:100',
            'ApellidoMaternoAlumno'=>'required|string|max:100',
            'NombreAlumno'=>'required|string|max:100',
            'CodigoAlumno'=>'required|digits:9',
            'GeneroAlumno'=>'required|string|max:20',
            'CelularAlumno'=>'required|string|max:20',
            'TelegramAlumno'=>'required|string|max:30',
            'SemestreAlumno'=>'required|string|max:20',
            'DocumentoPDFProyecto'=>'required|max:10000|mimes:pdf'
        ];
        
        if($request->director=='NO'){ 
            $campos['CasoNoDirector'] = 'string|max:50';

        }

        // switch($request->PMaEvaluar){
        
        //     case 'PM1 Y PM2':
            
        //     break;
        //     case 'PM3 Y PM4':

        //     break;
        //     case 'Los 4 módulos':
        //                 break;

        // }

        // $campos = [
        //     'CorreoAlumno'=>'required|email',
        //     'ApellidoPaternoAlumno'=>'required|string|max:100',
        //     'ApellidoMaternoAlumno'=>'required|string|max:100',
        //     'NombreAlumno'=>'required|string|max:100',
        //     'CodigoAlumno'=>'required|digits:9',
        //     'GeneroAlumno'=>'required|string|max:20',
        //     'CelularAlumno'=>'required|string|max:20',
        //     'TelegramAlumno'=>'required|string|max:30',
        //     'SemestreAlumno'=>'required|string|max:20',
        //     'PMaEvaluar'=>'string|max:100',
        //     'TituloTrabajo'=>'string|max:100',
        //     'ApellidoPaternoDirector'=>'string|max:100',
        //     'ApellidoMaternoDirector'=>'string|max:100',
        //     'NombreDirector'=>'string|max:100',
        //     'CorreoDirector'=>'email',
        //     'AreaQuimicaTrabajo'=>'string|max:50',
        //     'TipoTrabajo'=>'string|max:50',
        //     'TipoModalidad'=>'string|max:50',
        //     'TipoCongreso'=>'string|max:50',
        //     'RecibioBeca'=>'string|max:10',
        //     'EstanciaBeca'=>'string|max:30',
        //     'ModalidadTitulacion'=>'string|max:50',
        //     'DocumentoEntregaras'=>'string|max:50',
        //     'CasoNoDirector'=>'string|max:50',
        //     'DocumentoPDFProyecto'=>'required|max:10000|mimes:pdf'
        // ];
        //
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'DocumentoPDFProyecto.required'=>'El documento es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $datosFormulario = request()->except('_token','director','isRegistrado');

        if($request->hasFile('DocumentoPDFProyecto')){

            $datosFormulario['DocumentoPDFProyecto']=$request->file('DocumentoPDFProyecto')->store('uploads','public');

        }

        Modular::insert($datosFormulario);
        // return response()->json($datosFormulario);
        return redirect('modular')->with('mensaje','Formulario guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modular  $modular
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $modular = Modular::findOrFail($id);
        return view('modular.show',compact('modular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modular  $modular
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $modular = Modular::findOrFail($id);
        return view('modular.edit',compact('modular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modular  $modular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $campos = [
            'CorreoAlumno'=>'required|email',
            'ApellidoPaternoAlumno'=>'required|string|max:100',
            'ApellidoMaternoAlumno'=>'required|string|max:100',
            'NombreAlumno'=>'required|string|max:100',
            'CodigoAlumno'=>'required|digits:9',
            'GeneroAlumno'=>'required|string|max:20',
            'CelularAlumno'=>'required|string|max:20',
            'TelegramAlumno'=>'required|string|max:30',
            'SemestreAlumno'=>'required|string|max:20',
            'DocumentoPDFProyecto'=>'required|max:10000|mimes:pdf'
        ];
        
        if($request->director=='NO'){ 
            $campos['CasoNoDirector'] = 'string|max:50';

        }

        // $campos = [
        //     'CorreoAlumno'=>'required|email',
        //     'ApellidoPaternoAlumno'=>'required|string|max:100',
        //     'ApellidoMaternoAlumno'=>'required|string|max:100',
        //     'NombreAlumno'=>'required|string|max:100',
        //     'CodigoAlumno'=>'required|digits:9',
        //     'GeneroAlumno'=>'required|string|max:20',
        //     'CelularAlumno'=>'required|string|max:20',
        //     'TelegramAlumno'=>'required|string|max:30',
        //     'SemestreAlumno'=>'required|string|max:20',
        //     'PMaEvaluar'=>'string|max:100',
        //     'TituloTrabajo'=>'string|max:100',
        //     'ApellidoPaternoDirector'=>'string|max:100',
        //     'ApellidoMaternoDirector'=>'string|max:100',
        //     'NombreDirector'=>'string|max:100',
        //     'CorreoDirector'=>'email',
        //     'AreaQuimicaTrabajo'=>'string|max:50',
        //     'TipoTrabajo'=>'string|max:50',
        //     'TipoModalidad'=>'string|max:50',
        //     'TipoCongreso'=>'string|max:50',
        //     'RecibioBeca'=>'string|max:10',
        //     'EstanciaBeca'=>'string|max:30',
        //     'ModalidadTitulacion'=>'string|max:50',
        //     'DocumentoEntregaras'=>'string|max:50',
        //     'CasoNoDirector'=>'string|max:50',
            
        // ];
        // //
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'DocumentoPDFProyecto.required'=>'El documento es requerido'
        ];
        if($request->hasFile('DocumentoPDFProyecto')){
            $campos=['DocumentoPDFProyecto'=>'required|max:10000|mimes:pdf'];
            $mensaje=[
                'DocumentoPDFProyecto.required'=>'El documento es requerido'
            ];
        }
        $this->validate($request, $campos,$mensaje);
        //
        $datosFormulario = request()->except('_token','director','isRegistrado','_method');

        if($request->hasFile('DocumentoPDFProyecto')){
            $formulario = Modular::findOrFail($id);
            Storage::delete('public/'.$formulario->DocumentoPDFProyecto);
            $datosFormulario['DocumentoPDFProyecto']=$request->file('DocumentoPDFProyecto')->store('uploads','public');
        }

        Modular::where('id','=',$id)->update($datosFormulario);
        
        $modular = Modular::findOrFail($id);

        return view('modular.edit',compact('modular'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modular  $modular
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $formulario = Modular::findOrFail($id);

        if(Storage::delete('public/'.$formulario->DocumentoPDFProyecto)){
            Modular::destroy($id);
        }

        // return redirect('formulario');
        return redirect('modular')->with('mensaje','Formulario borrado');

    }
}
