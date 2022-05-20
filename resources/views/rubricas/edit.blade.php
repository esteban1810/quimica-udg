@extends('rubricas.layouts.app_form')

@section('content_rubrica')
    <form method="POST" action="{{route('rubrica.update',['rubrica'=>$modelRubrica->id])}}">
        @method('PUT')        
        @include('rubricas.layouts.form',['accion'=>'edit'])
    </form>
@stop