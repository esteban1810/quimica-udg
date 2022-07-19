@extends('layouts.app')


@section('content')
{{-- <div class=" w-full h-[88vh] bg-background py-8"> --}}
<div class=" w-full bg-background py-8">

    {{-- PROYECTO MODULAR --}}
    <div class="w-[95%] rounded-3xl p-8 bg-white m-auto flex my-4">
        <div class="w-20 mr-4">
            <img src="{{asset('img/pendiente.png')}}">
        </div>
        <div class="w-full">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Proyecto Modular</h2>
                <p class="text-red-600">Tu proyecto modular fue rechazado.</p>
            </div>
            <div class="flex justify-end w-full">
                <a 
                    class="bg-primary text-white p-2 inline-block font-bold rounded-xl"
                    href="{{route('formulario.index')}}">SABER MÁS</a>
            </div>
        </div>
    </div>
    {{-- FIN PROYECTO MODULAR --}}


    {{-- PROYECTO MODULAR --}}
    <div class="w-[95%] rounded-3xl p-8 bg-white m-auto flex my-4">
        <div class="w-20 mr-4">
            <img src="{{asset('img/pendiente.png')}}">
        </div>
        <div class="w-full">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Proyecto Modular</h2>
                <p class="text-blue-700">Trámite en espera</p>
            </div>
            <div class="flex justify-end w-full">
                <a 
                    class="bg-primary text-white p-2 inline-block font-bold rounded-xl"
                    href="{{route('formulario.index')}}">SABER MÁS</a>
            </div>
        </div>
    </div>
    {{-- FIN PROYECTO MODULAR --}}

    {{-- PROYECTO MODULAR --}}
    <div class="w-[95%] rounded-3xl p-8 bg-white m-auto flex my-4">
        <div class="w-20 mr-4">
            <img src="{{asset('img/pendiente.png')}}">
        </div>
        <div class="w-full">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Proyecto Modular</h2>
                <p class="text-green-700">Tu proyecto modular fue aprobado</p>
            </div>
            <div class="flex justify-end w-full">
                <a 
                    class="bg-primary text-white p-2 inline-block font-bold rounded-xl"
                    href="{{route('formulario.index')}}">SABER MÁS</a>
            </div>
        </div>
    </div>
    {{-- FIN PROYECTO MODULAR --}}

    {{-- PROYECTO MODULAR --}}
    <div class="w-[95%] rounded-3xl p-8 bg-white m-auto flex my-4">
        <div class="w-20 mr-4">
            <img src="{{asset('img/pendiente.png')}}">
        </div>
        <div class="w-full">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Proyecto Modular</h2>
                <p>Trámite pendiente</p>
            </div>
            <div class="flex justify-end w-full">
                <a 
                    class="bg-primary text-white p-2 inline-block font-bold rounded-xl"
                    href="{{route('formulario.index')}}">HACERLO AHORA</a>
            </div>
        </div>
    </div>
    {{-- FIN PROYECTO MODULAR --}}

    {{-- RUBRICA --}}
    <div class="w-[95%] rounded-3xl p-8 bg-white m-auto flex my-4">
        <div class="w-20 mr-4">
            <img src="{{asset('img/pendiente.png')}}">
        </div>
        <div class="w-full">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">RÚBRICA</h2>
                <p>Trámite pendiente</p>
            </div>
            <div class="flex justify-end w-full">
                <a 
                    class="bg-primary text-white p-2 inline-block font-bold rounded-xl"
                    href="{{route('rubrica.index')}}">HACERLO AHORA</a>
            </div>
        </div>
    </div>
    {{-- FIN RUBRICA --}}

</div>

        {{-- <ul>
            <li><a href="{{route('formulario.index')}}">Proyecto Modular</a></li>
            <li><a href="{{route('fechas.index')}}">Fechas</a></li>
            <li><a href="{{route('rubrica.index')}}">Rubricas</a></li>
            <li><a href="{{route('users.index')}}">Users</a></li>
        </ul> --}}
@endsection