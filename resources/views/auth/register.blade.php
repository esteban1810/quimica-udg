
@extends('layouts.app')

@section('content')
<div class=" w-full bg-background py-8">
    <div class="w-[95%] md:w-[50%] rounded-3xl p-8 bg-white m-auto">
        <form class="flex flex-wrap" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Nombre -->
            <div class="mt-4 text-normal md:px-3 w-full">
                <label for="name">Nombre</label><br>
                <input
                    placeholder="Ingresa Tu Nombre Completo"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="name" id="name" value="{{old('name')}}" required autofocus>
            </div>

            <!-- Apellido Paterno -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="apellido_paterno">Apellido Paterno</label><br>
                <input
                    placeholder="Ingresa Tu Apellido Paterno"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="apellido_paterno" id="apellido_paterno" value="{{old('apellido_paterno')}}" required autofocus>
            </div>

            <!-- Apellido Materno -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="apellido_materno">Apellido Materno</label><br>
                <input
                    placeholder="Ingresa Tu Apellido Materno"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="apellido_materno" id="apellido_materno" value="{{old('apellido_materno')}}" required autofocus>
            </div>

            <!-- Email Address -->
            <div class="mt-4 text-normal md:px-3 w-full">
                <label for="email">Correo</label><br>
                <input
                    placeholder="Ingresa Tu Correo Institucional"
                    class="rounded-lg w-full border-solid border-2"
                    type="email" name="email" id="email" value="{{old('email')}}" required autofocus>
            </div>

            <!-- Tipo de Usuario -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="tipo_usuario">Usuario</label><br>
                <select name="tipo_usuario"
                    class="rounded-lg w-full border-solid border-2" id="tipo_usuario">
                    <option value="estudiante">Estudiante</option>
                    <option value="profesor">Profesor</option>
                    <option value="coordinador">Coordinador</option>
                </select>
            </div>


            <!-- Estatus -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="estatus">Estatus</label><br>
                <select name="estatus"
                    class="rounded-lg w-full border-solid border-2" id="estatus">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                    <option value="Egresado">Egresado</option>
                </select>
            </div>

            <!-- Miembro UDG -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="email">¿Perteneces a la UDG?</label><br>
                <div class="flex items-center h-11">
                    <input type="radio" name="soy_udg" value="Si" id="soy_udg"><label for="soy_udg">Sí</label><span class="w-6"></span>
                    <input type="radio" name="soy_udg" value="No" id="no_soy_udg"><label for="no_soy_udg">No</label>
                </div>
            </div>

            <!-- Código -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="codigo">Código</label><br>
                <input
                    placeholder="Ingresa Tu Código"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="codigo" id="codigo" value="{{old('codigo')}}" required autofocus>
            </div>

            <!-- Institución -->
            <div class="mt-4 text-normal md:px-3 w-full">
                <label for="institucion">Institución</label><br>
                <input
                    placeholder="Ingresa la Institución a la que Perteneces"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="institucion" id="institucion" value="{{old('institucion')}}" required autofocus>
            </div>


            <!-- Área De Investigación -->
            <div class="mt-4 text-normal md:px-3 w-full">
                <label for="area">Área de investigación</label><br>
                <input
                    placeholder="Ingresa Tu Area De Investigación"
                    class="rounded-lg w-full border-solid border-2"
                    type="text" name="area" id="area" value="{{old('area')}}" required autofocus>
            </div>

            <!-- Password -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="password">Contraseña</label><br>

                <input id="password" 
                    placeholder="Escribe Una Contraseña"
                    class="rounded-lg w-full border-solid border-2"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="password_confirmation">Confirmar Contraseña</label><br>

                <input id="password_confirmation"
                                placeholder="Confirma la Contraseña"
                                class="rounded-lg w-full border-solid border-2"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <button class="w-full mt-6 p-2 bg-primary hover:bg-green-900 text-white font-extrabold rounded-lg">
                {{ __('ACEPTAR') }}
            </button>

            {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hovertext-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya te has registrado?') }}
                </a>
            </div> --}}
        </form>
    </div>
</div>
@endsection