crear registro de fechas
<form action="{{url('/fechas')}}" method="post">
@csrf
@include('fechas.form')
</form>