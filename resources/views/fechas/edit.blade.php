edicion de fechas 

<form action="{{url('/fechas/'.$fechas->id)}}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('fechas.form')
</form>