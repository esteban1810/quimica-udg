@extends('user.layouts.app_form')

@section('user_content')
<div class=" w-full bg-background py-8">
    <div class="w-[95%] md:w-[max(40rem,50%)] rounded-3xl p-8 bg-white m-auto">
    <form class="flex flex-wrap" method="POST" action="{{route('users.update',['user'=>$model->id])}}">
        @method('PUT')   
        @include('user.layouts.form',['accion'=>'edit'])
    </form>
    </div>
</div>
@stop