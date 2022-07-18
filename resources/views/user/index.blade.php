@extends('layouts.app')

@section('content')
@push('css'){{-- Estilos necesarios para el datatable --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">
@endpush
<div class=" w-full h-[88vh] bg-background py-8">
    <div class="w-[max(80rem,90%)] rounded-3xl p-8 bg-white m-auto">{{-- CARD PARA LA TABLA--}}
        <div class="flex justify-between mb-4">
            <h2>Usuarios</h2>

            <div>{{--OPCIONES DEL FORMULARIO--}}
                <a class="link bg-green-700 hover:bg-green-900" href="{{route('dashboard')}}">
                    Ir a Catologo
                </a>
                <a class="link bg-blue-600 hover:bg-blue-900" href="{{route('users.create')}}">
                    Llenar formulario
                </a>
            </div>
        </div>
    <table id="tablaUsuarios" class="table table-striped"  style="width:100%">
        <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Usuario</th>
          <th>Codigo</th>
          <th class="w-32">Acciones</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->tipo_usuario}}</td>
                    <td>{{$user->codigo}}</td>
                    <td class="flex">
                        @if ($user->tipo_usuario!='estudiante')
                            <a href="{{route('users.show',$user->id)}}">Autorizar</a>
                            
                            <a href="{{route('users.show',$user->id)}}">Denegar</a>
                        @endif
                        {{-- <a href="{{route('users.show',$user->id)}}">Mostrar</a>
                        <a href="{{route('users.edit',$user->id)}}">Editar</a> --}}
                        {{-- <form action="{{route('users.destroy',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form> --}}
                        <a class="link bg-yellow-500 hover:bg-yellow-700" href="{{route('users.edit',$user->id)}}">
                            Editar
                        </a>
                        <a class="link bg-yellow-500 hover:bg-yellow-700" href="{{route('users.show',$user->id)}}">
                            Mostrar
                        </a>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            @csrf
                            <input 
                                class="link bg-red-500 hover:bg-red-700"
                                type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                @method('DELETE')
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
            $('#tablaUsuarios').DataTable( {
                select: true
            } );
        } );
    </script>
    @endpush
    {{-- SCRIPTS NECESARIOS PARA DATATABLE --}}
    
    @endsection
{{-- @stop Preguntar --}} 