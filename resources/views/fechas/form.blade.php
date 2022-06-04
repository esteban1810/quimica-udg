formulario de fechas
@if (count($errors)>0)
<ul>
@foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
@endforeach
</ul>
    
@endif
<label for="fecha">Fecha:
    <input type="date" name="fecha" id="fecha" value="{{isset($fechas->fecha)?$fechas->fecha:old('fecha')}}">
</label>
<br>
<label for="titulo_fecha">Titulo fecha:
    <input type="text" name="titulo_fecha" id="titulo_fecha" value="{{ isset($fechas->titulo_fecha)?$fechas->titulo_fecha:old('titulo_fecha') }}">
</label>
<br>
<label for="cuerpo_fecha">Cuerpo fecha:
    <input type="text" name="cuerpo_fecha" id="cuerpo_fecha" value="{{ isset($fechas->cuerpo_fecha)?$fechas->cuerpo_fecha:old('cuerpo_fecha') }}">
</label>
<br>
<label for="asunto_fecha">Asunto fecha:
    <input type="text" name="asunto_fecha" id="asunto_fecha" value="{{ isset($fechas->asunto_fecha)?$fechas->asunto_fecha:old('asunto_fecha') }}">
</label>
<br>
<label for="mostrar_fecha_vencida">Mostrar fecha vencida:
    <input type="radio" name="mostrar_fecha_vencida" id="mostrar_fecha_vencida" value="1" {{isset($fechas->mostrar_fecha_vencida)&&$fechas->mostrar_fecha_vencida==1?'checked':old('mostrar_fecha_vencida')}}>Si
    <input type="radio" name="mostrar_fecha_vencida" id="mostrar_fecha_vencida" value="0" {{isset($fechas->mostrar_fecha_vencida)&&$fechas->mostrar_fecha_vencida==0?'checked':old('mostrar_fecha_vencida')}}>No

</label>
<br>
<label for="jerarquia_mostrar">Mostrar a:
    <input type="radio" name="jerarquia_mostrar" id="jerarquia_mostrar" value="estudiante" {{isset($fechas->jerarquia_mostrar)&&$fechas->jerarquia_mostrar=='estudiante'?'checked':old('jerarquia_mostrar')}}>Estudiante
    <input type="radio" name="jerarquia_mostrar" id="jerarquia_mostrar" value="profesor" {{isset($fechas->jerarquia_mostrar)&&$fechas->jerarquia_mostrar=='profesor'?'checked':old('jerarquia_mostrar')}}>Profesor
    <input type="radio" name="jerarquia_mostrar" id="jerarquia_mostrar" value="coordinador" {{isset($fechas->jerarquia_mostrar)&&$fechas->jerarquia_mostrar=='coordinador'?'checked':old('jerarquia_mostrar')}}>Cordinador
</label>
<br>
<input type="submit" value="Enviar datos">