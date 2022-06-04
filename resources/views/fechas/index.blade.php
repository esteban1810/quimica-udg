Mostrar las listas de las fechas 
<a href="{{url('fechas/create')}}">Agregar fecha</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Fecha</th>
            <th>Titulo</th>
            <th>Cuerpo</th>
            <th>Asunto</th>
            <th>Mostrar</th>
            <th>Se muestra a</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fechas as $fecha)                    
        <tr>
            <td>{{ $fecha->id}}</td>
            <td>{{ $fecha->fecha}}</td>
            <td>{{ $fecha->titulo_fecha}}</td>
            <td>{{ $fecha->cuerpo_fecha}}</td>
            <td>{{ $fecha->asunto_fecha}}</td>
            <td>{{ $fecha->mostrar_fecha_vencida}}</td>
            <td>{{ $fecha->jerarquia_mostrar1.'-'.$fecha->jerarquia_mostrar2.'-'.$fecha->jerarquia_mostrar3}}</td>
            <td>
                
                <a href="{{url('/fechas/'.$fecha->id.'/edit')}}">Editar</a>
                
                | 
                
            <form action="{{url('/fechas/'.$fecha->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>