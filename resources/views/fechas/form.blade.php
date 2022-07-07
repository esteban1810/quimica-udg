@if (count($errors)>0)
<ul>
@foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
@endforeach
</ul>
    
@endif
<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto">{{--PARA PONER UN CARD--}}
    <h3 class="text-2xl center mb-4">DATOS DE LA FECHA</h3>{{--PARA PONER UN TITULO AL CARD--}}
    <div class="md:columns-2">{{--PARA DOS COLUMNAS--}}
        <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
    <label for="titulo_fecha">TITULO FECHA:
        <input class="rounded-input" type="text" name="titulo_fecha" id="titulo_fecha" value="{{ isset($fechas->titulo_fecha)?$fechas->titulo_fecha:old('titulo_fecha') }}">
    </label>
        </div>
        <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
        
<label for="fecha">FECHA:
    <input class="rounded-input" type="date" name="fecha" id="fecha" value="{{isset($fechas->fecha)?$fechas->fecha:old('fecha')}}">
</label>
        </div>
    </div>
        <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
<label for="cuerpo_fecha">CUERPO FECHA:
    <input class="rounded-input" type="text" name="cuerpo_fecha" id="cuerpo_fecha" value="{{ isset($fechas->cuerpo_fecha)?$fechas->cuerpo_fecha:old('cuerpo_fecha') }}">
</label>
        </div>
        <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
<label for="asunto_fecha">ASUNTO FECHA:
    <input class="rounded-input" type="text" name="asunto_fecha" id="asunto_fecha" value="{{ isset($fechas->asunto_fecha)?$fechas->asunto_fecha:old('asunto_fecha') }}">
</label>
</div>
        
        <div class="md:columns-2">{{--PARA DOS COLUMNAS--}}
            <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
<label for="mostrar_fecha_vencida">MOSTRAR FECHA VENCIDA:
    <br>
    <input type="radio" name="mostrar_fecha_vencida" id="mostrar_fecha_vencida" value="1" {{isset($fechas->mostrar_fecha_vencida)&&$fechas->mostrar_fecha_vencida==1?'checked':old('mostrar_fecha_vencida')}}>Si
    <input type="radio" name="mostrar_fecha_vencida" id="mostrar_fecha_vencida" value="0" {{isset($fechas->mostrar_fecha_vencida)&&$fechas->mostrar_fecha_vencida==0?'checked':old('mostrar_fecha_vencida')}}>No
</label>
</div>
<div class="mb-4">{{-- MARGEN PARA ABAJO--}}
<label for="jerarquia_mostrar">MOSOTRAR A:
    <br>
    <input type="radio" name="jerarquia_mostrar1" id="jerarquia_mostrar1" value="estudiante" {{isset($fechas->jerarquia_mostrar1)&&$fechas->jerarquia_mostrar1=='estudiante'?'checked':old('jerarquia_mostrar')}}>Estudiante
    <input type="radio" name="jerarquia_mostrar2" id="jerarquia_mostrar2" value="profesor" {{isset($fechas->jerarquia_mostrar2)&&$fechas->jerarquia_mostrar2=='profesor'?'checked':old('jerarquia_mostrar')}}>Profesor
    <input type="radio" name="jerarquia_mostrar3" id="jerarquia_mostrar3" value="coordinador" {{isset($fechas->jerarquia_mostrar3)&&$fechas->jerarquia_mostrar3=='coordinador'?'checked':old('jerarquia_mostrar')}}>Cordinador
</label>
</div>

            </div>
          
</div>
<div class="w-[min(50rem,90%)]  m-auto mt-8">

    <input class="w-full p-2 bg-primary hover:bg-green-900 text-white font-extrabold rounded-lg" type="submit" value="Enviar datos">
    </div>
