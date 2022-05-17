@extends('rubricas.layouts.app')

@section('content')
    <form method="POST" action="{{route('rubrica.store',['rubrica'=>$rubrica])}}">
        @include('rubricas.layouts.form')
    </form>
@stop