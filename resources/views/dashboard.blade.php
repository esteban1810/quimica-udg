@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{route('rubrica.index')}}">Rubricas</a></li>
        <li><a href="{{route('users.index')}}">Users</a></li>
    </ul>
@endsection