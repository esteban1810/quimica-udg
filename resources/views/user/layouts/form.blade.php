@csrf
<section>
    <div class="container">
        <h2 class="center">Datos del(a) Evaluador(a)</h2>
        <div class="col-3">

            <div class="campo">
                <label for="name">Nombre(s):</label><br>
                <input type="text" name="name" id="name" placeholder="Nombre(s)"
                value="{{old('name') ?? $model->name}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="apellido_paterno">Apellido Paterno</label><br>
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno"
                value="{{old('apellido_paterno') ?? $model->apellido_paterno}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="apellido_materno">Apellido Materno</label><br>
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno"
                value="{{old('apellido_materno') ?? $model->apellido_materno}}"
                @if($accion=='show') readonly @endif>
            </div>
        </div>
        <div class="campo">
            <label for="email">Correo:</label><br>
            <input type="email" name="email" id="email" placeholder="Ingresa tu correo"
            value="{{old('email') ?? $model->email}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="campo">
            @php($tipoUsuario = old('tipo_usuario') ?? $model->tipo_usuario)
            <label for="email">Selecciona el tipo de usuario que eres:</label><br>
            <select name="tipo_usuario" id="tipo_usuario" 
            @if($accion=='show') readonly @endif>
                <option value="estudante" 
                @if ($tipoUsuario=='estudiante') selected @endif>Estudiante</option>
                <option value="administrador" 
                @if ($tipoUsuario=='administrador') selected @endif>Administrador</option>
                <option value="coordinador"
                @if ($tipoUsuario=='coordinador') selected @endif>Coordinador</option>
            </select>
        </div>
        <div class="campo">
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

        <div class="campo">
            <label for="codigo">Codigo</label><br>
            <input type="text" name="codigo" id="codigo" placeholder="Codigo UDG"
            value="{{old('codigo') ?? $model->codigo}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="campo">
            <label for="institucion">Institucion</label><br>
            <input type="text" name="institucion" id="institucion" placeholder="Institucion a la que perteneces"
            value="{{old('institucion') ?? $model->institucion}}"
            @if($accion=='show') readonly @endif>
        </div>
        <div class="campo">
            <label for="area">Area de investigacion</label><br>
            <input type="text" name="area" id="area" placeholder="Ingresa tu area de investigacion"
            value="{{old('area') ?? $model->area}}"
            @if($accion=='show') readonly @endif>
        </div>
    </div>
    <div class="campo">
        <label for="password">Contrasena</label><br>
        <input type="text" name="password" id="password" placeholder="Contrasena"
        value="{{old('password') ?? $model->password}}"
        @if($accion=='show') readonly @endif>
    </div>
    <div class="campo">
        <label for="confirm_password">Confirmar Contrasena</label><br>
        <input type="text" name="confirm_password" id="confirm_password" placeholder="Contrasena"
        value="{{old('confirm_password')}}"
        @if($accion=='show') readonly @endif>
    </div>

</section>


@if($accion!='show') 
    <div class="container-btn" id="container-btn">
        <input type="submit" value="Enviar" class="btn">
    </div>
@endif