@extends('layouts.app')


@section('content')
<div class=" w-full h-[88vh] bg-background py-8">
    <div class="w-[max(25vw,12px)] rounded-3xl p-8 bg-white m-auto">
        <ul>
            <li><a href="{{route('modular.index')}}">Proyecto Modular</a></li>
            <li><a href="{{route('fechas.index')}}">Fechas</a></li>
            <li><a href="{{route('rubrica.index')}}">Rubricas</a></li>
            <li><a href="{{route('users.index')}}">Users</a></li>
        </ul>
    </div>
</div>
@endsection