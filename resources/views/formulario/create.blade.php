@extends('layouts.app')

@section('content')

  <div class=" w-full bg-background py-8">
      <form action="{{ url('/formulario') }}" method="post" enctype="multipart/form-data">
      @csrf
      @include('formulario.form')
      </form>
    </div>
  </div>

@endsection




