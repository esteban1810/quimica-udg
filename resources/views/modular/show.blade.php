@extends('layouts.app')

@section('content')

  <div class=" w-full bg-background py-8">
    <fieldset @if(isset($mostrar)&&$mostrar==1) disabled @endif> 
      {{-- Etiqueta fieldset sirve para aplicar disabled a todo lo que este dentro --}}
    @include('modular.form')
    </fieldset>
</div>

@endsection