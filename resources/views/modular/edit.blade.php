@extends('layouts.app')

@section('content')

  <div class=" w-full bg-background py-8">
<form action="{{url('/modular/'.$modular->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('modular.form')
    </form>
</div>
</div>

@endsection