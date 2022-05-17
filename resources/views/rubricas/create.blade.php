@extends('rubricas.layouts.app')

@section('content_rubrica')
    <form method="POST" action="{{route('rubrica.store',['rubrica'=>$rubrica])}}">
        @include('rubricas.layouts.form')
    </form>
@stop