@csrf

        <h2 class="center">Datos del(a) Evaluador(a)</h2>
      

            <div class="mt-4 text-normal md:px-3 w-full" >
                <label for="name">Nombre(s):</label><br>
                <input class="rounded-lg w-full border-solid border-2" type="text" name="name" id="name" placeholder="Nombre(s)"
                value="{{old('name') ?? $model->name}}"
                @if($accion=='show') readonly @endif>
            </div>

            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="apellido_paterno">Apellido Paterno</label><br>
                <input class="rounded-lg w-full border-solid border-2" type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno"
                value="{{old('apellido_paterno') ?? $model->apellido_paterno}}"
                @if($accion=='show') readonly @endif>
            </div>

            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
                <label for="apellido_materno">Apellido Materno</label><br>
                <input class="rounded-lg w-full border-solid border-2" type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno"
                value="{{old('apellido_materno') ?? $model->apellido_materno}}"
                @if($accion=='show') readonly @endif>
            </div>
        
            <div class="mt-4 text-normal md:px-3 w-full">
            <label for="email">Correo:</label><br>
            <input class="rounded-lg w-full border-solid border-2" type="email" name="email" id="email" placeholder="Ingresa tu correo"
            value="{{old('email') ?? $model->email}}"
            @if($accion=='show') readonly @endif>
            </div>

{{-- Sexo Alumno --}}
<div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
    <label for="sexo">Sexo</label><br>
    <input type="radio" name="sexo" value="Masculino" id="Masculino" {{isset($model->sexo)&&$model->sexo=='Masculino'?'checked':''}} @if(old('sexo')=='Masculino') checked @endif><label for="Masculino">Masculino</label>
    <input type="radio" name="sexo" value="Femenino" id="Femenino" {{isset($model->sexo)&&$model->sexo=='Femenino'?'checked':''}}@if(old('sexo')=='Femenino') checked @endif><label for="Femenino">Femenino</label>
    <input type="radio" name="sexo" value="Prefiero no decirlo" id="pnd" {{isset($model->sexo)&&$model->sexo=='Prefiero no decirlo'?'checked':''}}@if(old('sexo')=='Prefiero no decirlo') checked @endif><label for="pnd">Prefiero no decirlo</label>
</div>
{{-- Ciclo de ingreso --}}
<div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
    <label for="ciclo">Ciclo de ingreso</label><br>
    <input
        placeholder="Ingresa Ciclo de Ingreso"
        class="rounded-lg w-full border-solid border-2"
        type="text" name="ciclo" id="ciclo" value="{{old('ciclo') ?? $model->ciclo}}" autofocus>
</div>
{{-- Datos de contacto telegram - telefono --}}

    <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
        <label
            for="telefono">Télefono</label><br>
        <input
            class="rounded-input"
            type="number" name="telefono" id="telefono"
        onKeyPress="if(this.value.length==10) return false;" 
        placeholder="Número télefonico" value="{{old('telefono') ?? $model->telefono}}">
    </div>
    <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
        <label for="telegram">Telegram</label><br>
        <input
            class="rounded-input"
            type="text" name="telegram" id="telegram" placeholder="p. ej: @MariaSanchez" value="{{old('telegram') ?? $model->telegram}}">
    </div>

            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
            @php($tipoUsuario = old('tipo_usuario') ?? $model->tipo_usuario)
            <label for="email">Selecciona el tipo de usuario que eres:</label><br>
            <select class="rounded-lg w-full border-solid border-2" name="tipo_usuario" id="tipo_usuario" 
            @if($accion=='show') readonly @endif>
                <option value="estudante" 
                @if ($tipoUsuario=='estudiante') selected @endif>Estudiante</option>
                <option value="administrador" 
                @if ($tipoUsuario=='profesor') selected @endif>Profesor</option>
                <option value="coordinador"
                @if ($tipoUsuario=='coordinador') selected @endif>Coordinador</option>
            </select>
            </div>

            <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
            @php($institucion = old('institucion') ?? $model->institucion)
            @php($oldIsUDG = old('isUDG')) {{-- Cuando hay error en el formulario enviado --}}
            @php($updateIsUDG = $model->institucion??'Universidad De Guadalajara' ? 'Sí':'No') {{-- Cuando se preciona entra en edit o show --}}
            @php($isUDG=$oldIsUDG??$updateIsUDG)
            
                
            <label for="">¿Perteneces a la UDG?</label><br>
            <label for="Profesor">
            <input type="radio" name="isUDG" value="Sí" id="Profesor"
            @if($isUDG=='Sí') checked @endif @if($accion=='show') disabled @endif>Sí</label>
            <label for="Alumno">
            <input type="radio" name="isUDG" value="No" id="Alumno"
            @if($isUDG=='No') checked @endif @if($accion=='show') disabled @endif>No</label>
        </div>

        <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
            <label for="codigo">Codigo</label><br>
            <input class="rounded-lg w-full border-solid border-2" type="text" name="codigo" id="codigo" placeholder="Codigo UDG"
            value="{{old('codigo') ?? $model->codigo}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
            <label for="institucion">Institucion</label><br>
            <input class="rounded-lg w-full border-solid border-2" type="text" name="institucion" id="institucion" placeholder="Institucion a la que perteneces"
            value="{{old('institucion') ?? $model->institucion}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="mt-4 text-normal md:px-3 w-full">
            <label for="area">Area de investigacion</label><br>
            <input class="rounded-lg w-full border-solid border-2" type="text" name="area" id="area" placeholder="Ingresa tu area de investigacion"
            value="{{old('area') ?? $model->area}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
        <label for="password">Contrasena</label><br>
        <input class="rounded-lg w-full border-solid border-2" type="text" name="password" id="password" placeholder="Contrasena"
        @if ($accion!='edit') value="{{old('password') ?? $model->password}}" @endif
        @if($accion=='show') readonly @endif>
        </div>
        <div class="mt-4 text-normal md:px-3 w-full md:w-1/2">
        <label for="confirm_password">Confirmar Contrasena</label><br>
        <input class="rounded-lg w-full border-solid border-2" type="text" name="confirm_password" id="confirm_password" placeholder="Contrasena"
        value="{{old('confirm_password')}}"
        @if($accion=='show') readonly @endif>
        </div>
 



@if($accion!='show') 
    
        <button class="w-full mt-6 p-2 bg-primary hover:bg-green-900 text-white font-extrabold rounded-lg">
            {{ __('ACEPTAR') }}
        </button>
    
@endif