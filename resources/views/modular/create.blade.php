@extends('layouts.app')

@section('content')

  <div class=" w-full bg-background py-8">
      <form action="{{ url('/modular') }}" method="post" enctype="multipart/form-data">
      @csrf
      @include('modular.form')
      </form>
    </div>
  </div>

@endsection

