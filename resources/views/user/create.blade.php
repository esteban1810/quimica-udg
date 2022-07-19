@extends('user.layouts.app_form')
@section('user_content')
@push('css'){{-- Estilos necesarios para el datatable --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">
@endpush
<div class=" w-full bg-background py-8">
    <div class="w-[95%] md:w-[max(40rem,50%)] rounded-3xl p-8 bg-white m-auto">
    <form class="flex flex-wrap" method="POST" action="{{route('users.store')}}">
        @include('user.layouts.form',['accion'=>'create'])
    </form>
    </div>
</div>
@endsection