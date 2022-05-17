@extends('rubricas.layouts.app_form')

@section('content_rubrica')
    <form method="POST" action="{{route('rubrica.store',['rubrica'=>$rubrica])}}">
        @include('rubricas.layouts.form',['accion'=>'show'])
    </form>
@stop