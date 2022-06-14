@extends('layouts.app')

@section('content')
<div class="h-[88vh] w-full bg-background flex justify-center items-center">
    <div class="w-[90%] md:w-1/2 bg-white rounded-lg p-8 flex flex-col lg:flex-row justify-center items-center">
        <ul class="uppercase  ">
            <li class="flex items-center mb-4">
                <span class="vineta"></span>
                <p >
                    1 De Mayo. Registro del Proyecto Modular.
                </p>
            </li>
            <li class="flex items-center mb-4">
                <span class="vineta"></span>
                <p >
                    1 De junio. Evaluacion De Proyecto Modular
                </p>
            </li>
            <li class="flex items-center mb-4">
                <span class="vineta"></span>
                <p >
                    1 De Julio. Entrega De Documentos de Titulación.
                </p>
            </li>
        </ul>
        <div class="w-40 md:w-5/12 ">
            <img class="w-full" src="{{asset('img/calendario.png')}}" alt="">
        </div>
    </div>
</div>
@endsection


