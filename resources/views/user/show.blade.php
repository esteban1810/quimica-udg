@extends('user.layouts.app_form')

@section('user_content')
    <form method="POST" action="{{route('users.store',['accion'=>'show'])}}">
        @include('user.layouts.form',['accion'=>'show'])
    </form>
@stop