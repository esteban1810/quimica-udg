@extends('layouts.app')

@section('content')
    @push('css'){{-- Estilos necesarios para el datatable --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">
    @endpush
    <div class=" w-full h-[88vh] bg-background py-8">
        <div class="w-[max(80rem,90%)] rounded-3xl p-8 bg-white m-auto">{{-- CARD PARA LA TABLA--}}
            
{{-- <a href="{{url('fechas/create')}}">Agregar fecha</a> --}}
<div class="flex justify-between mb-4">
    <h2>Fechas de eventos</h2>

    <div>{{--OPCIONES DEL FORMULARIO--}}
        <a class="link bg-green-700 hover:bg-green-900" href="{{route('dashboard')}}">
            Ir a Inicio
        </a>
        <a class="link bg-blue-600 hover:bg-blue-900" href="{{route('fechas.create')}}">
            Agregar fecha-evento
        </a>
    </div>
</div>
<table  id="tablaFechas" class="table table-striped"  style="width:100%">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Fecha</th>
            <th>Titulo</th>
            <th>Cuerpo</th>
            <th>Asunto</th>
            <th>Mostrar</th>
            <th>Se muestra a</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fechas as $fecha)                    
        <tr>
            <td>{{ $fecha->id}}</td>
            <td>{{ $fecha->fecha}}</td>
            <td>{{ $fecha->titulo_fecha}}</td>
            <td>{{ $fecha->cuerpo_fecha}}</td>
            <td>{{ $fecha->asunto_fecha}}</td>
            <td>{{ $fecha->mostrar_fecha_vencida}}</td>
            <td>{{ $fecha->jerarquia_mostrar1.'-'.$fecha->jerarquia_mostrar2.'-'.$fecha->jerarquia_mostrar3}}</td>
            <td class="flex justify-around">
                <a class="link bg-yellow-500 hover:bg-yellow-700" href="{{url('/fechas/'.$fecha->id.'/edit')}}">
                    Editar
                </a>
            <form action="{{url('/fechas/'.$fecha->id)}}" method="post">
            @csrf
            <input class="link bg-red-500 hover:bg-red-700" onclick="return confirm('¿Quieres borrar?')" type="submit" value="Borrar">
            {{ method_field('DELETE') }}
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
{{-- SCRIPTS NECESARIOS PARA DATATABLE --}}
@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tablaFechas').DataTable( {
            select: true
        } );
    } );
</script>
@endpush
{{-- SCRIPTS NECESARIOS PARA DATATABLE --}}

@endsection