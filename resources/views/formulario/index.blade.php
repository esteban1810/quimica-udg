@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('formulario/create')}}">Añadir nuevo registro</a>
<table>
    <thead >
        <tr>
            <th>#</th>
            <th>Correo alumno</th>
            <th>Apellido paterno alumno</th>
            <th>Apellido materno alumno</th>
            <th>Nombre alumno</th>
            <th>Codigo alumno</th>
            <th>Genero alumno</th>
            <th>Celular alumno</th>
            <th>Telegram alumno</th>
            <th>Semestre alumno</th>
            <th>PM a evaluar</th>
            <th>Titulo proyecto alumno</th>
            <th>Apellido paterno dic</th>
            <th>Apellido materno dic</th>
            <th>Nombre dic</th>
            <th>Correo dic</th>
            <th>Area quimica trabajo</th>
            <th>Tipo trabajo</th>
            <th>Tipo modalidad</th>
            <th>Tipo congreso</th>
            <th>Recibio beca</th>
            <th>Estancia beca</th>
            <th>Modalidad titulacion</th>
            <th>Documento entregado</th>
            <th>Caso no tener director</th>
            <th>Documento final PDF</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $formularios as $formulario)
        <tr>
            <td>{{$formulario->id}}</td>
            <td>{{$formulario->CorreoAlumno}}</td>
            <td>{{$formulario->ApellidoPaternoAlumno}}</td>
            <td>{{$formulario->ApellidoMaternoAlumno}}</td>
            <td>{{$formulario->NombreAlumno}}</td>
            <td>{{$formulario->CodigoAlumno}}</td>
            <td>{{$formulario->GeneroAlumno}}</td>
            <td>{{$formulario->CelularAlumno}}</td>
            <td>{{$formulario->TelegramAlumno}}</td>
            <td>{{$formulario->SemestreAlumno}}</td>
            <td>{{$formulario->PMaEvaluar}}</td>
            <td>{{$formulario->TituloTrabajo}}</td>
            <td>{{$formulario->ApellidoPaternoDirector}}</td>
            <td>{{$formulario->ApellidoMaternoDirector}}</td>
            <td>{{$formulario->NombreDirector}}</td>
            <td>{{$formulario->CorreoDirector}}</td>
            <td>{{$formulario->AreaQuimicaTrabajo}}</td>
            <td>{{$formulario->TipoTrabajo}}</td>
            <td>{{$formulario->TipoModalidad}}</td>
            <td>{{$formulario->TipoCongreso}}</td>
            <td>{{$formulario->RecibioBeca}}</td>
            <td>{{$formulario->EstanciaBeca}}</td>
            <td>{{$formulario->ModalidadTitulacion}}</td>
            <td>{{$formulario->DocumentoEntregaras}}</td>
            <td>{{$formulario->CasoNoDirector}}</td>
            <!-- <td>{{$formulario->DocumentoPDFProyecto}}</td> -->
            <td><a href="{{asset('storage').'/'.$formulario->DocumentoPDFProyecto}}">Documento PDF</a></td>
            <td>
                <a href="{{url('/formulario/'.$formulario->id.'/edit')}}">
                    Editar
                </a>
                |
                <form action="{{ url('/formulario/'.$formulario->id) }}" method="post">
                @csrf
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                {{method_field('DELETE')}}
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>
{!!$formularios->links()!!}