@if(count($errors)>0)
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    </ul>
@endif


<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto">{{--PARA PONER UN CARD--}}
    <h3 class="text-2xl center mb-4">DATOS PERSONALES</h3>{{--PARA PONER UN TITULO AL CARD--}}

    <div class="md:columns-2">{{--PARA DOS COLUMNAS--}}
        <div class="mb-4">{{-- MARGEN PARA ABAJO--}}
            <label for="ApellidoPaternoAlumno">APELLIDO PATERNO</label><br>
            <input
                class="rounded-input" {{--ESTIILO PARA INPUT:TEXT--}}
                type="text" name="ApellidoPaternoAlumno" id="ApellidoPaternoAlumno"
                placeholder="Ingresa tu apellido paterno"{{-- MUY BREVE DESCRIPCION DEL CAMPO --}}
                value="{{isset($modular->ApellidoPaternoAlumno)?$modular->ApellidoPaternoAlumno:old('ApellidoPaternoAlumno')}}" >
        </div>
        <div class="mb-4">
            <label for="ApellidoMaternoAlumno">APELLIDO MATERNO</label><br>
            <input
                class="rounded-input"
                type="text"
                name="ApellidoMaternoAlumno"
                id="ApellidoMaternoAlumno"
                placeholder="Ingresa tu apellido materno"
                value="{{isset($modular->ApellidoMaternoAlumno)?$modular->ApellidoMaternoAlumno:old('ApellidoMaternoAlumno')}}" >
        </div>
    </div>

    <div class="mb-4">
        <label for="NombreAlumno">NOMBRE COMPLETO</label><br>
        <input
            class="rounded-input"
            type="text"
            name="NombreAlumno"
            id="NombreAlumno"
            placeholder="Ingresa tu nombre completo"
            value="{{isset($modular->NombreAlumno)?$modular->NombreAlumno:old('NombreAlumno')}}" >
    </div>

    <div class="mb-4">
        <label for="GeneroAlumno">SELECCIONE SU SEXO:</label><br>
        <input type="radio" name="GeneroAlumno" value="Masculino" id="Masculino" {{isset($modular->GeneroAlumno)&&$modular->GeneroAlumno=='Masculino'?'checked':''}}@if(old('GeneroAlumno')=='Masculino') checked @endif><label for="Masculino">Masculino</label>
        <input type="radio" name="GeneroAlumno" value="Femenino" id="Femenino" {{isset($modular->GeneroAlumno)&&$modular->GeneroAlumno=='Femenino'?'checked':old('GeneroAlumno')}}><label for="Femenino">Femenino</label>
        <input type="radio" name="GeneroAlumno" value="Prefiero no decirlo" id="pnd" {{isset($modular->GeneroAlumno)&&$modular->GeneroAlumno=='Prefiero no decirlo'?'checked':old('GeneroAlumno')}}><label for="pnd">Prefiero no decirlo</label>
    </div>

    <div class="md:columns-2">
        <div class="mb-4">
            <label for="CorreoAlumno">CORREO</label><br>
            <input
                class="rounded-input"
                type="text" name="CorreoAlumno" id="CorreoAlumno" placeholder="Ingresa tu correo" value="{{isset($modular->CorreoAlumno)?$modular->CorreoAlumno:old('CorreoAlumno')}}" >
        </div>
        <div class="mb-4">
            <label for="CodigoAlumno">CÓDIGO</label><br>
            <input
                class="rounded-input"
                type="number"
                name="CodigoAlumno"
                id="CodigoAlumno"
                onKeyPress="if(this.value.length==9) return false"
                placeholder="Código de UdeG"
                value="{{isset($modular->CodigoAlumno)?$modular->CodigoAlumno:old('CodigoAlumno')}}">
        </div>


    </div>

    <div class="md:columns-2">
        <div class="mb-4">
            <label
                for="CelularAlumno">TÉLEFONO</label><br>
            <input
                class="rounded-input"
                type="number" name="CelularAlumno" id="CelularAlumno"
            onKeyPress="if(this.value.length==10) return false;" 
            placeholder="Número télefonico" value="{{isset($modular->CelularAlumno)?$modular->CelularAlumno:old('CelularAlumno')}}">
        </div>
        <div class="mb-4">
            <label for="TelegramAlumno">TELEGRAM</label><br>
            <input
                class="rounded-input"
                type="text" name="TelegramAlumno" id="TelegramAlumno" placeholder="p. ej: @MariaSanchez" value="{{isset($modular->TelegramAlumno)?$modular->TelegramAlumno:old('TelegramAlumno')}}">
        </div>
    </div>

    <div class="mb-4">
        <label for="SemestreAlumno">INDICA EL SEMESTRE QUE ESTAS CURSANDO</label><br>
        <input type="radio" name="SemestreAlumno" value="6to" id="6to" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='6to'?'checked':old('SemestreAlumno')}}><label for="6to">6to</label>
        <input type="radio" name="SemestreAlumno" value="7mo" id="7mo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='7mo'?'checked':old('SemestreAlumno')}}><label for="7mo">7mo</label>
        <input type="radio" name="SemestreAlumno" value="8vo" id="8vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='8vo'?'checked':old('SemestreAlumno')}}><label for="8vo">8vo</label>
        <input type="radio" name="SemestreAlumno" value="9no" id="9no" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='9no'?'checked':old('SemestreAlumno')}}><label for="9no">9no</label>
        <input type="radio" name="SemestreAlumno" value="10mo" id="10mo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='10mo'?'checked':old('SemestreAlumno')}}><label for="10mo">10mo</label>
        <input type="radio" name="SemestreAlumno" value="11vo" id="11vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='11vo'?'checked':old('SemestreAlumno')}}><label for="11vo">11vo</label>
        <input type="radio" name="SemestreAlumno" value="12vo" id="12vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='12vo'?'checked':old('SemestreAlumno')}}><label for="12vo">12vo</label>
        <input type="radio" name="SemestreAlumno" value="13vo" id="13vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='13vo'?'checked':old('SemestreAlumno')}}><label for="13vo">13vo</label>
        <input type="radio" name="SemestreAlumno" value="14vo" id="14vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='14vo'?'checked':old('SemestreAlumno')}}><label for="14vo">14vo</label>
        <input type="radio" name="SemestreAlumno" value="15vo" id="15vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='15vo'?'checked':old('SemestreAlumno')}}><label for="15vo">15vo</label>
    </div>
</div>


<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Datos Del Proyecto (SECCION 4)</h3>

    <div class="mb-4">
        <label 
            class="uppercase"{{--TITULO EN MAYUSCULAS--}}
            for="TituloTrabajo">Titulo de tu trabajo</label><br>
        <input 
            class="rounded-input"
            type="text" name="TituloTrabajo" id="TituloTrabajo" 
            placeholder="Titulo de tu trabajo (Utilizar Mayúsculas, minúsculas y acentos)" 
            value="{{isset($modular->TituloTrabajo)?$modular->TituloTrabajo:old('TituloTrabajo')}}">
    </div>

    <div class="mb-4">
        <label for="director">¿TIENES DIRECTOR DE PROYECTO MODULAR?</label><br>
        <input type="radio" name="director" value="Sí Tengo" id="siDirector"><label for="siDirector">Sí, hemos trabajado en conjunto</label>
        <br class="block md:hidden">
        <input type="radio" name="director" value="NO" id="No Tengo"><label for="noDirector">No, no he podido conseguir proyecto</label>
    </div>


    <div class="mb-4">
        <label for="isRegistrado" class="uppercase">¿Te registraste en SIIAU para Proyectos Modulares en este ciclo <span class="ciclo"></span>?</label><br>
        <input type="radio" name="isRegistrado" value="Registrado" id="siRegistrado" ><label for="siRegistrado">Sí</label>
        <input type="radio" name="isRegistrado" value="No Registrado" id="noRegistrado" ><label for="noRegistrado">No</label>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="PMaEvaluar">Selecciona los proyectos modulares que deseas evaluar</label><br>
        <div><input type="radio" name="PMaEvaluar" value="PM1 Y PM2" id="PM1" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='PM1 Y PM2'?'checked':old('PMaEvaluar')}}><label for="PM1">PM1. Estructura de la Materia y PM2. Síntesis y Purificación</label></div>
        <div><input type="radio" name="PMaEvaluar" value="PM3 Y PM4" id="PM3" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='PM3 Y PM4'?'checked':old('PMaEvaluar')}}><label for="PM3">PM3. Análisis y Caracterización y PM4: Prevención y solución de Problemas en el área química</label></div>
        <div><input type="radio" name="PMaEvaluar" value="Los 4 módulos" id="PM4" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='Los 4 módulos'?'checked':old('PMaEvaluar')}}><label for="PM4">Los 4 módulos</label></div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="AreaQuimicaTrabajo">Área de la química a la que pertenece el trabajo</label><br>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at1" value="Polímeros" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Polímeros'?'checked':old('AreaQuimicaTrabajo')}}><label for="at1">Polímeros</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at2" value="Materiales y Nano-materiales" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Materiales y Nano-materiales'?'checked':old('AreaQuimicaTrabajo')}}><label for="at2">Materiales y Nano-materiales</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at3" value="Síntesis de compuestos orgánica u organometálica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Síntesis de compuestos orgánica u organometálica'?'checked':old('AreaQuimicaTrabajo')}}><label for="at3">Síntesis de compuestos orgánica u organometálica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at4" value="Bioquímica, Biologia Molecular o Genética" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Bioquímica, Biologia Molecular o Genética'?'checked':old('AreaQuimicaTrabajo')}}><label for="at4">Bioquímica, Biologia Molecular o Genética</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at5" value="Química Analítica e Instrumentación" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Química Analítica e Instrumentación'?'checked':old('AreaQuimicaTrabajo')}}><label for="at5">Química Analítica e Instrumentación</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at6" value="Educación Química" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Educación Química'?'checked':old('AreaQuimicaTrabajo')}}><label for="at6">Educación Química</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at7" value="Microbiología" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Microbiología'?'checked':old('AreaQuimicaTrabajo')}}><label for="at7">Microbiología</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at8" value="Química Teórica y computacional" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Química Teórica y computacional'?'checked':old('AreaQuimicaTrabajo')}}><label for="at8">Química Teórica y computacional</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at9" value="Fisicoquímica y Electroquímica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Fisicoquímica y Electroquímica'?'checked':old('AreaQuimicaTrabajo')}}><label for="at9">Fisicoquímica y Electroquímica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at10" value="OTRA"><label for="at10" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='OTRA'?'checked':old('AreaQuimicaTrabajo')}}>OTRA</label></div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="TipoTrabajo">Selecciona si tu trabajo es de:</label><br>
        <div><input type="radio" name="TipoTrabajo" id="innovacion" value="Innovación" {{isset($modular->TipoTrabajo)&&$modular->TipoTrabajo=='Innovación'?'checked':old('TipoTrabajo')}}><label for="innovacion">Innovación</label></div>
        <div><input type="radio" name="TipoTrabajo" id="aplicacion" value="Aplicación" {{isset($modular->TipoTrabajo)&&$modular->TipoTrabajo=='Aplicación'?'checked':old('TipoTrabajo')}}><label for="aplicacion">Aplicación</label></div>
    </div>


    <div class="mb-4">
        <label 
            class="uppercase"
            for="TipoModalidad">Opción que eligieron tú y tu director</label>
        <br>
        <div>
            <input type="radio" name="TipoModalidad" value="Examen Oral" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Examen Oral'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Examen Oral</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Asistencia a congreso" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Asistencia a congreso'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Asistencia a Congreso</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Titulación" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Titulación'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Titulación</label>
        </div>
    </div>
</div>


<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Director Del Proyecto</h3>
    <div class="md:columns-2">
        <div class="mb-4">
            <label 
                class="uppercase"
                for="ApellidoPaternoDirector">Apellido Paterno</label><br>
            <input 
                class="rounded-input"
                type="text" name="ApellidoPaternoDirector" id="ApellidoPaternoDirector" placeholder="Apellido Paterno" value="{{isset($modular->ApellidoPaternoDirector)?$modular->ApellidoPaternoDirector:old('ApellidoPaternoDirector')}}">
        </div>
        <div class="mb-4">
            <label 
                class="uppercase"
                for="ApellidoMaternoDirector">Apellido Materno</label><br>
            <input 
                class="rounded-input"
                type="text" name="ApellidoMaternoDirector" id="ApellidoMaternoDirector" placeholder="Apellido Materno" value="{{isset($modular->ApellidoMaternoDirector)?$modular->ApellidoMaternoDirector:old('ApellidoMaternoDirector')}}">
        </div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="NombreDirector">Nombre COMPLETO</label><br>
        <input 
            class="rounded-input"
            type="text" name="NombreDirector" id="NombreDirector" placeholder="Nombre(s)" value="{{isset($modular->NombreDirector)?$modular->NombreDirector:old('NombreDirector')}}">
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="CorreoDirector">CORREO</label><br>
        <input 
            class="rounded-input"
            type="text" name="CorreoDirector" id="CorreoDirector" placeholder="Ingresa el correo" value="{{isset($modular->CorreoDirector)?$modular->CorreoDirector:old('CorreoDirector')}}">
    </div>
</div>



<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Congreso</h3>
    <div class="md:flex">{{--OTRA FORMA DE PONER DOS COLUMNAS--}}
        <div class="mb-4 md:w-1/2">{{--OTRA FORMA DE PONER DOS COLUMNAS--}}
            <label 
                class="uppercase"
                for="TipoCongreso">¿Qué tipo de Congreso fue?</label><br>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso1" value="Nacional" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Nacional'?'checked':old('TipoCongreso')}}>
                <label for="nacional">Nacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso2" value="Internacional" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Internacional'?'checked':old('TipoCongreso')}}>
                <label for="internacional">Internacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso3" value="Presentación de carteles" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Presentación de carteles'?'checked':old('TipoCongreso')}}>
                <label for="TipoCongreso3">Presentación de carteles en LQUI</label>
            </div>
        </div>
        <div class="mb-4 md:w-1/2">{{--OTRA FORMA DE PONER DOS COLUMNAS--}}
            <label 
                class="uppercase"
                for="RecibioBeca">¿Recibiste algún tipo de beca?</label><br>
            <div class="inline-block">
                <input type="radio" name="RecibioBeca" id="RecibioBeca1" value="Sí" {{isset($modular->RecibioBeca)&&$modular->RecibioBeca=='Sí'?'checked':old('RecibioBeca')}}>
                <label for="Está Becado">Sí</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="RecibioBeca" id="RecibioBeca2" value="No" {{isset($modular->RecibioBeca)&&$modular->RecibioBeca=='No'?'checked':old('RecibioBeca')}}>
                <label for="No Está Becado">No</label>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="EstanciaBeca">Estancia (Opcional)</label><br>
        <input 
            class="rounded-input"
            placeholder="Menciona la estancia que te apoyó económicamente"
            type="text"  name="EstanciaBeca" id="EstanciaBeca" value="{{isset($modular->EstanciaBeca)?$modular->EstanciaBeca:old('EstanciaBeca')}}">
    </div>
</div>

<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulación</h3>
    <div class="md:flex">
        <div class="mb-4 md:w-1/2">
            <label for="ModalidadTitulacion" class="uppercase">Elige la modalidad de tu Proyecto</label><br>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="tesis" value="Tesis" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Tesis'?'checked':old('ModalidadTitulacion')}}>
                <label for="tesis">Tesis</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="tesina" value="Tesina" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Tesina'?'checked':old('ModalidadTitulacion')}}>
                <label for="tesina">Tesina</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="md" value="Material Didáctico" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Material Didáctico'?'checked':old('ModalidadTitulacion')}}>
                <label for="md">Material Didáctico</label>
            </div>
        </div>
        <div class="mb-4 md:w-1/2">
            <label for="DocumentoEntregaras" class="uppercase">¿Qué documento entregarás?</label><br>
            <div class="inline-block">
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT1" value="Protocolo" {{isset($modular->DocumentoEntregaras)&&$modular->DocumentoEntregaras=='Protocolo'?'checked':old('DocumentoEntregaras')}}>
                <label for="DocumentoEntregaras">Protocolo</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT2" value="Documento Final" {{isset($modular->DocumentoEntregaras)&&$modular->DocumentoEntregaras=='Documento Final'?'checked':old('DocumentoEntregaras')}}>
                <label for="DocumentoEntregaras">Documento final</label>
            </div>
        </div>
    </div>
</div>


<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulación</h3>

    <p class="mb-4">Para participar en la Evaluación de Proyectos Modulares, es necesario registrar en SIIAU correctamente por pares, es decir, las Competencias Básicas (PM1 y PM2) ó las Competencias Avanzadas (PM3 y PM4). </p>
    <p class="mb-4">Revisa la información correcta <a href="https://sites.google.com/administrativos.udg.mx/proyectosmodulares-lqui/inicio" target="_blank" rel="noopener noreferrer">aquí.</a></p>

    <p class="mb-4">Si no cuentas con director de proyecto y por lo tanto no haz podido iniciar uno, entonces se debe ajustar tu caso particular. Responde por favor la siguiente consulta:</p>

    <div class="campo">
        <label for="CasoNoDirector">Elige tu caso:</label><br>
        <div>
            <input type="radio" name="CasoNoDirector" value="Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU'?'checked':old('CasoNoDirector')}}>
            <label for="CasoNoDirector">Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU</label>
        </div>
        <div>
            <input type="radio" name="CasoNoDirector" value="No registré adecuadamente por pares, necesito corregirlo en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='No registré adecuadamente por pares, necesito corregirlo en SIIAU'?'checked':old('CasoNoDirector')}}>
            <label for="CasoNoDirector">No registré adecuadamente por pares, necesito corregirlo en SIIAU</label>
        </div>
        <div>
            <input type="radio" name="CasoNoDirector" value="No tuvimos avances significativos, quiero dar de baja las materias en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='No tuvimos avances significativos, quiero dar de baja las materias en SIIAU'?'checked':old('CasoNoDirector')}}>
            <label for="CasoNoDirector">No tuvimos avances significativos, quiero dar de baja las materias en SIIAU</label>
        </div>
    </div>
</div>



<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulación</h3>
    <div class="container">
        <label for="DocumentoPDFProyecto">Documento(Recuerda enviarlos en un sólo documento y en formato PDF):</label><br>
        @if(isset($modular->DocumentoPDFProyecto))
            <a href="{{asset('storage').'/'.$modular->DocumentoPDFProyecto}}">Documento PDF</a><br>
        @endif
        <input name="DocumentoPDFProyecto" type="file" id="DocumentoPDFProyecto" /> <!-- Modified -->
    </div>
</div>

<div class="w-[min(50rem,90%)]  m-auto mt-8">
    <button class="w-full p-2 bg-primary hover:bg-green-900 text-white font-extrabold rounded-lg">
        {{ __('ACEPTAR') }}
    </button>
</div>