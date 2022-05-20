@extends('layouts.app')

@section('content')
    <h1>RUBRICAS - INDEX</h1>
    <a href="{{route('rubrica.create',['rubrica'=>1])}}">Llenar nueva rubrica 1</a>
    <a href="{{route('rubrica.create',['rubrica'=>2])}}">Llenar nueva rubrica 2</a>
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
                    <td class="flex">
                        <a href="{{route('rubrica.show',['model'=>$rubrica->id])}}">Mostrar</a>
                        <a href="{{route('rubrica.edit',['model'=>$rubrica->id])}}">Editar</a>
                        <form action="{{route('rubrica.destroy',['rubrica'=>$rubrica->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@stop