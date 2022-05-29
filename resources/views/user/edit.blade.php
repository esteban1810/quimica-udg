@extends('user.layouts.app_form')

@section('user_content')
    <form method="POST" action="{{route('users.update',['user'=>$model->id])}}">
        @method('PUT')   
        @include('user.layouts.form',['accion'=>'edit'])
    </form>
@stop