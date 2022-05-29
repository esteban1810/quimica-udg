@extends('layouts.app')

@section('content')
    <h1>RUBRICAS - INDEX</h1>
    <a href="{{route('users.create')}}">Crear Usuario</a>
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Usuario</th>
          <th>Codigo</th>
          <th>Opciones</th>
        </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->tipo_usuario}}</td>
                    <td>{{$user->codigo}}</td>
                    <td class="flex">
                        <a href="{{route('users.show',$user->id)}}">Mostrar</a>
                        <a href="{{route('users.edit',$user->id)}}">Editar</a>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@stop