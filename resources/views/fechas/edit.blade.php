@extends('layouts.app')

@section('content')

<div class=" w-full bg-background py-8">
<form action="{{url('/fechas/'.$fechas->id)}}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('fechas.form')
</form>
</div>

@endsection