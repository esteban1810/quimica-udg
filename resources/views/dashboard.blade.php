@extends('layouts.app')


@section('content')
<div class=" w-full h-[max(88vh,auto)] bg-background py-8">
    <div class="w-[max(25vw,12px)] rounded-3xl p-8 bg-white m-auto">
        <ul>
            <li><a href="{{route('rubrica.index')}}">Rubricas</a></li>
            <li><a href="{{route('users.index')}}">Users</a></li>
        </ul>
    </div>
</div>
@endsection