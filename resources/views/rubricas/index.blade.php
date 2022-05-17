@extends('layouts.app')

@section('content')
    <h1>RUBRICAS - INDEX</h1>
    <table>
        <tr>
          <th>Rúbrica</th>
          <th>Trabajo</th>
          <th>Evaluador</th>
          <th>Estudiante</th>
          <th>Evaluación</th>
          <th>Fecha</th>
          <th>Opciones</th>
        </tr>
            @foreach ($rubricas as $rubrica)
                <tr>
                    <td>{{$rubrica->rubrica}}</td>
                    <td>{{$rubrica->id_trabajo}}</td>
                    <td>{{$rubrica->apellido_paterno_evaluador.' '.$rubrica->apellido_paterno_evaluador.' '.$rubrica->nombre_evaluador}}</td>
                    <td>{{$rubrica->apellido_paterno_estudiante.' '.$rubrica->apellido_paterno_estudiante.' '.$rubrica->nombre_estudiante}}</td>
                    <td>{{$rubrica->evaluacion}}</td>
                    <td>{{$rubrica->created_at}}</td>
                    <td>
                        <a href="#">Mostrar</a>
                        <a href="#">Editar</a>
                        <form action="#" method="post">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@stop