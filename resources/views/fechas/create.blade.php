@extends('layouts.app')

@section('content')

<div class=" w-full bg-background py-8">
<form action="{{url('/fechas')}}" method="post">
@csrf
@include('fechas.form')
</form>
</div>

@endsection
