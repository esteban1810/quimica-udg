@extends('user.layouts.app_form')

@section('user_content')
    <form method="POST" action="{{route('users.store')}}">
        @include('user.layouts.form',['accion'=>'create'])
    </form>
@stop