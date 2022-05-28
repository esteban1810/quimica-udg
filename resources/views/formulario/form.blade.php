@if(count($errors)>0)
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    </ul>
@endif
<div class="container">
    <div class="campo">
        <label for="CorreoAlumno">Ingresa tu correo:</label><br>
        <input type="text" name="CorreoAlumno" id="CorreoAlumno" placeholder="Ingresa tu correo" value="{{isset($formulario->CorreoAlumno)?$formulario->CorreoAlumno:old('CorreoAlumno')}}" >
    </div>
    <div class="col-3">
        <div class="campo">
            <label for="ApellidoPaternoAlumno">Tu Apellido Paterno (Utiliza Mayúsculas Minúsculas )</label><br>
            <input type="text" name="ApellidoPaternoAlumno" id="ApellidoPaternoAlumno" placeholder="Apellido Paterno" value="{{isset($formulario->ApellidoPaternoAlumno)?$formulario->ApellidoPaternoAlumno:old('ApellidoPaternoAlumno')}}" >
        </div>
        <div class="campo">
            <label for="ApellidoMaternoAlumno">Tu Apellido Materno (Utiliza Mayúsculas Minúsculas )</label><br>
            <input type="text" name="ApellidoMaternoAlumno" id="ApellidoMaternoAlumno" placeholder="Apellido Materno" value="{{isset($formulario->ApellidoMaternoAlumno)?$formulario->ApellidoMaternoAlumno:old('ApellidoMaternoAlumno')}}" >
        </div>
        <div class="campo">
            <label for="NombreAlumno">Tu(s) Nombre(s)  (Utiliza Mayúsculas Minúsculas ) </label><br>
            <input type="text" name="NombreAlumno" id="NombreAlumno" placeholder="Nombre(s)" value="{{isset($formulario->NombreAlumno)?$formulario->NombreAlumno:old('NombreAlumno')}}" >
        </div>
    </div>
    <div class="campo">
        <label for="GeneroAlumno">Selecciona tu sexo:</label><br>
        <input type="radio" name="GeneroAlumno" value="Masculino" id="Masculino" {{isset($formulario->GeneroAlumno)&&$formulario->GeneroAlumno=='Masculino'?'checked':''}}@if(old('GeneroAlumno')=='Masculino') checked @endif><label for="Masculino">Masculino</label>
        <input type="radio" name="GeneroAlumno" value="Femenino" id="Femenino" {{isset($formulario->GeneroAlumno)&&$formulario->GeneroAlumno=='Femenino'?'checked':old('GeneroAlumno')}}><label for="Femenino">Femenino</label>
        <input type="radio" name="GeneroAlumno" value="Prefiero no decirlo" id="pnd" {{isset($formulario->GeneroAlumno)&&$formulario->GeneroAlumno=='Prefiero no decirlo'?'checked':old('GeneroAlumno')}}><label for="pnd">Prefiero no decirlo</label>
    </div>
    <div class="col-3">
        <div class="campo">
                <label for="CodigoAlumno">Código de UdeG</label><br>
                <input type="number" name="CodigoAlumno" id="CodigoAlumno" 
                onKeyPress="if(this.value.length==9) return false" placeholder="Código de UdeG" value="{{isset($formulario->CodigoAlumno)?$formulario->CodigoAlumno:old('CodigoAlumno')}}">
            </div>
            <div class="campo">
                <label for="CelularAlumno">Teléfono Celular</label><br>
                <input type="number" name="CelularAlumno" id="CelularAlumno" 
                onKeyPress="if(this.value.length==10) return false;" placeholder="Teléfono Celular" value="{{isset($formulario->CelularAlumno)?$formulario->CelularAlumno:old('CelularAlumno')}}">
            </div>
        <div class="campo">
            <label for="TelegramAlumno">Nombre de usuario en Telegram</label><br>
            <input type="text" name="TelegramAlumno" id="TelegramAlumno" placeholder="p. ej: @MariaSanchez" value="{{isset($formulario->TelegramAlumno)?$formulario->TelegramAlumno:old('TelegramAlumno')}}">
        </div>
    </div>
    <div class="campo">
        <label for="SemestreAlumno">Indica el semestre que estas cursando:</label><br>
        <input type="radio" name="SemestreAlumno" value="6to" id="6to" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='6to'?'checked':old('SemestreAlumno')}}><label for="6to">6to</label>
        <input type="radio" name="SemestreAlumno" value="7mo" id="7mo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='7mo'?'checked':old('SemestreAlumno')}}><label for="7mo">7mo</label>
        <input type="radio" name="SemestreAlumno" value="8vo" id="8vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='8vo'?'checked':old('SemestreAlumno')}}><label for="8vo">8vo</label>
        <input type="radio" name="SemestreAlumno" value="9no" id="9no" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='9no'?'checked':old('SemestreAlumno')}}><label for="9no">9no</label>
        <input type="radio" name="SemestreAlumno" value="10mo" id="10mo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='10mo'?'checked':old('SemestreAlumno')}}><label for="10mo">10mo</label>
        <input type="radio" name="SemestreAlumno" value="11vo" id="11vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='11vo'?'checked':old('SemestreAlumno')}}><label for="11vo">11vo</label>
        <input type="radio" name="SemestreAlumno" value="12vo" id="12vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='12vo'?'checked':old('SemestreAlumno')}}><label for="12vo">12vo</label>
        <input type="radio" name="SemestreAlumno" value="13vo" id="13vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='13vo'?'checked':old('SemestreAlumno')}}><label for="13vo">13vo</label>
        <input type="radio" name="SemestreAlumno" value="14vo" id="14vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='14vo'?'checked':old('SemestreAlumno')}}><label for="14vo">14vo</label>
        <input type="radio" name="SemestreAlumno" value="15vo" id="15vo" {{isset($formulario->SemestreAlumno)&&$formulario->SemestreAlumno=='15vo'?'checked':old('SemestreAlumno')}}><label for="15vo">15vo</label>
    </div>

    <div class="campo">
        <label for="director">¿Tienes director de Proyecto Modular?</label><br>
        <input type="radio" name="director" value="Sí Tengo" id="siDirector"><label for="siDirector">Sí, hemos trabajado en conjunto</label>
       
        <input type="radio" name="director" value="NO" id="No Tengo"><label for="noDirector">No, no he podido conseguir proyecto</label>

    </div>
</div>


<div class="container seccion s-2">
    <div class="campo">
        <label for="isRegistrado">¿Te registraste en SIIAU para Proyectos Modulares en este ciclo <span class="ciclo"></span>?</label><br>
        <input type="radio" name="isRegistrado" value="Registrado" id="siRegistrado" ><label for="siRegistrado">Sí</label>
        <input type="radio" name="isRegistrado" value="No Registrado" id="noRegistrado" ><label for="noRegistrado">No</label>
    </div>
</div>



<div class="container seccion s-3">
    <div class="campo">
        <label for="PMaEvaluar">Selecciona los proyectos modulares que deseas evaluar</label><br>
        <div><input type="radio" name="PMaEvaluar" value="PM1 Y PM2" id="PM1" {{isset($formulario->PMaEvaluar)&&$formulario->PMaEvaluar=='PM1 Y PM2'?'checked':old('PMaEvaluar')}}><label for="PM1">PM1. Estructura de la Materia y PM2. Síntesis y Purificación</label></div>
        <div><input type="radio" name="PMaEvaluar" value="PM3 Y PM4" id="PM3" {{isset($formulario->PMaEvaluar)&&$formulario->PMaEvaluar=='PM3 Y PM4'?'checked':old('PMaEvaluar')}}><label for="PM3">PM3. Análisis y Caracterización y PM4: Prevención y solución de Problemas en el área química</label></div>
        <div><input type="radio" name="PMaEvaluar" value="Los 4 módulos" id="PM4" {{isset($formulario->PMaEvaluar)&&$formulario->PMaEvaluar=='Los 4 módulos'?'checked':old('PMaEvaluar')}}><label for="PM4">Los 4 módulos</label></div>
    </div>
</div>

<div class="container seccion s-4">
    <h2>Datos Del Proyecto</h2>
    <div class="campo">
        <label for="TituloTrabajo">Titulo de tu trabajo (Utilizar Mayúsculas, minúsculas y acentos)</label><br>
        <input type="text" name="TituloTrabajo" id="TituloTrabajo" placeholder="Título de tu trabajo" value="{{isset($formulario->TituloTrabajo)?$formulario->TituloTrabajo:old('TituloTrabajo')}}">
    </div>
    <div class="col-3">
        <div class="campo">
            <label for="ApellidoPaternoDirector">Apellido Paterno de tu Director (Utiliza Mayúsculas Minúsculas)</label><br>
            <input type="text" name="ApellidoPaternoDirector" id="ApellidoPaternoDirector" placeholder="Apellido Paterno" value="{{isset($formulario->ApellidoPaternoDirector)?$formulario->ApellidoPaternoDirector:old('ApellidoPaternoDirector')}}">
        </div>
        <div class="campo">
            <label for="ApellidoMaternoDirector">Apellido Materno de tu Director (Utiliza Mayúsculas Minúsculas)</label><br>
            <input type="text" name="ApellidoMaternoDirector" id="ApellidoMaternoDirector" placeholder="Apellido Materno" value="{{isset($formulario->ApellidoMaternoDirector)?$formulario->ApellidoMaternoDirector:old('ApellidoMaternoDirector')}}">
        </div>

        <div class="campo">
            <label for="NombreDirector">Nombre(s) de tu Director (Utiliza Mayúsculas Minúsculas)</label><br>
            <input type="text" name="NombreDirector" id="NombreDirector" placeholder="Nombre(s)" value="{{isset($formulario->NombreDirector)?$formulario->NombreDirector:old('NombreDirector')}}">
        </div>
    </div>

    <div class="campo">
        <label for="CorreoDirector">Ingresa el correo de tu Director de proyecto:</label><br>
        <input type="text" name="CorreoDirector" id="CorreoDirector" placeholder="Ingresa el correo" value="{{isset($formulario->CorreoDirector)?$formulario->CorreoDirector:old('CorreoDirector')}}">
    </div>

    <div class="campo">
        <label for="AreaQuimicaTrabajo">Área de la química a la que pertenece el trabajo</label><br>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at1" value="Polímeros" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Polímeros'?'checked':old('AreaQuimicaTrabajo')}}><label for="at1">Polímeros</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at2" value="Materiales y Nano-materiales" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Materiales y Nano-materiales'?'checked':old('AreaQuimicaTrabajo')}}><label for="at2">Materiales y Nano-materiales</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at3" value="Síntesis de compuestos orgánica u organometálica" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Síntesis de compuestos orgánica u organometálica'?'checked':old('AreaQuimicaTrabajo')}}><label for="at3">Síntesis de compuestos orgánica u organometálica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at4" value="Bioquímica, Biologia Molecular o Genética" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Bioquímica, Biologia Molecular o Genética'?'checked':old('AreaQuimicaTrabajo')}}><label for="at4">Bioquímica, Biologia Molecular o Genética</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at5" value="Química Analítica e Instrumentación" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Química Analítica e Instrumentación'?'checked':old('AreaQuimicaTrabajo')}}><label for="at5">Química Analítica e Instrumentación</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at6" value="Educación Química" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Educación Química'?'checked':old('AreaQuimicaTrabajo')}}><label for="at6">Educación Química</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at7" value="Microbiología" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Microbiología'?'checked':old('AreaQuimicaTrabajo')}}><label for="at7">Microbiología</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at8" value="Química Teórica y computacional" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Química Teórica y computacional'?'checked':old('AreaQuimicaTrabajo')}}><label for="at8">Química Teórica y computacional</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at9" value="Fisicoquímica y Electroquímica" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='Fisicoquímica y Electroquímica'?'checked':old('AreaQuimicaTrabajo')}}><label for="at9">Fisicoquímica y Electroquímica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at10" value="OTRA"><label for="at10" {{isset($formulario->AreaQuimicaTrabajo)&&$formulario->AreaQuimicaTrabajo=='OTRA'?'checked':old('AreaQuimicaTrabajo')}}>OTRA</label></div>

    </div>

    <div class="campo">
        <label for="TipoTrabajo">Selecciona si tu trabajo es de:</label><br>
        <div><input type="radio" name="TipoTrabajo" id="innovacion" value="Innovación" {{isset($formulario->TipoTrabajo)&&$formulario->TipoTrabajo=='Innovación'?'checked':old('TipoTrabajo')}}><label for="innovacion">Innovación</label></div>
        <div><input type="radio" name="TipoTrabajo" id="aplicacion" value="Aplicación" {{isset($formulario->TipoTrabajo)&&$formulario->TipoTrabajo=='Aplicación'?'checked':old('TipoTrabajo')}}><label for="aplicacion">Aplicación</label></div>
    </div>


    <div class="campo">
        <label for="TipoModalidad">Opción que eligieron tú y tu director</label>
        <br>
        <div>
            <input type="radio" name="TipoModalidad" value="Examen Oral" {{isset($formulario->TipoModalidad)&&$formulario->TipoModalidad=='Examen Oral'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Examen Oral</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Asistencia a congreso" {{isset($formulario->TipoModalidad)&&$formulario->TipoModalidad=='Asistencia a congreso'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Asistencia a Congreso</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Titulación" {{isset($formulario->TipoModalidad)&&$formulario->TipoModalidad=='Titulación'?'checked':old('TipoModalidad')}}>
            <label for="pae21">Titulación</label>
        </div>
    </div>
</div>




<div class="seccion s-5">
    <div class="container">
        <div class="campo">
            <label for="TipoCongreso">¿Qué tipo de Congreso fue?</label><br>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso1" value="Nacional" {{isset($formulario->TipoCongreso)&&$formulario->TipoCongreso=='Nacional'?'checked':old('TipoCongreso')}}>
                <label for="nacional">Nacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso2" value="Internacional" {{isset($formulario->TipoCongreso)&&$formulario->TipoCongreso=='Internacional'?'checked':old('TipoCongreso')}}>
                <label for="internacional">Internacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso3" value="Presentación de carteles" {{isset($formulario->TipoCongreso)&&$formulario->TipoCongreso=='Presentación de carteles'?'checked':old('TipoCongreso')}}>
                <label for="TipoCongreso3">Presentación de carteles en LQUI</label>
            </div>
        </div>
        </div>
        <div class="campo container">
            <label for="RecibioBeca">¿Recibiste algún tipo de beca?</label><br>
            <div>
                <input type="radio" name="RecibioBeca" id="RecibioBeca1" value="Sí" {{isset($formulario->RecibioBeca)&&$formulario->RecibioBeca=='Sí'?'checked':old('RecibioBeca')}}>
                <label for="Está Becado">Sí</label>
            </div>
            <div>
                <input type="radio" name="RecibioBeca" id="RecibioBeca2" value="No" {{isset($formulario->RecibioBeca)&&$formulario->RecibioBeca=='No'?'checked':old('RecibioBeca')}}>
                <label for="No Está Becado">No</label>
            </div>
        </div>

        <div class="campo container">
            <label for="EstanciaBeca">Menciona la estancia que te apoyó económicamente (Opcional)</label><br>
            <input type="text" placeholder="EstanciaBeca" name="EstanciaBeca" id="EstanciaBeca" value="{{isset($formulario->EstanciaBeca)?$formulario->EstanciaBeca:old('EstanciaBeca')}}">
        </div>
    </div>
</div>


<div class="seccion s-6">
    <div class="container">
        <h2>Modalidad</h2>
        <div class="campo">
            <label for="ModalidadTitulacion">Elige la modalidad de tu Proyecto</label><br>
            <div>
                <input type="radio" name="ModalidadTitulacion" id="tesis" value="Tesis" {{isset($formulario->ModalidadTitulacion)&&$formulario->ModalidadTitulacion=='Tesis'?'checked':old('ModalidadTitulacion')}}>
                <label for="tesis">Tesis</label>
            </div>
            <div>
                <input type="radio" name="ModalidadTitulacion" id="tesina" value="Tesina" {{isset($formulario->ModalidadTitulacion)&&$formulario->ModalidadTitulacion=='Tesina'?'checked':old('ModalidadTitulacion')}}>
                <label for="tesina">Tesina</label>
            </div>
            <div>
                <input type="radio" name="ModalidadTitulacion" id="md" value="Material Didáctico" {{isset($formulario->ModalidadTitulacion)&&$formulario->ModalidadTitulacion=='Material Didáctico'?'checked':old('ModalidadTitulacion')}}>
                <label for="md">Material Didáctico</label>
            </div>
        </div>
        <div class="campo">
            <label for="DocumentoEntregaras">¿Qué documento entregarás?</label><br>
            <div>
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT1" value="Protocolo" {{isset($formulario->DocumentoEntregaras)&&$formulario->DocumentoEntregaras=='Protocolo'?'checked':old('DocumentoEntregaras')}}>
                <label for="DocumentoEntregaras">Protocolo</label>
            </div>
            <div>
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT2" value="Documento Final" {{isset($formulario->DocumentoEntregaras)&&$formulario->DocumentoEntregaras=='Documento Final'?'checked':old('DocumentoEntregaras')}}>
                <label for="DocumentoEntregaras">Documento final</label>
            </div>
        </div>
    </div>
</div>




<div class="seccion s-7">
    <div class="container">
        <p>Para participar en la Evaluación de Proyectos Modulares, es necesario registrar en SIIAU correctamente por pares, es decir, las Competencias Básicas (PM1 y PM2) ó las Competencias Avanzadas (PM3 y PM4). </p>
        <p>Revisa la información correcta <a href="https://sites.google.com/administrativos.udg.mx/proyectosmodulares-lqui/inicio" target="_blank" rel="noopener noreferrer">aquí.</a></p>
        
        <p>Si no cuentas con director de proyecto y por lo tanto no haz podido iniciar uno, entonces se debe ajustar tu caso particular. Responde por favor la siguiente consulta:</p>

        <div class="campo">
            <label for="CasoNoDirector">Elige tu caso:</label><br>
            <div>
                <input type="radio" name="CasoNoDirector" value="Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU"  {{isset($formulario->CasoNoDirector)&&$formulario->CasoNoDirector=='Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU'?'checked':old('CasoNoDirector')}}>
                <label for="CasoNoDirector">Tengo Director y avances en mi Proyecto, pero NO registré las materias en SIIAU</label>
            </div>
            <div>
                <input type="radio" name="CasoNoDirector" value="No registré adecuadamente por pares, necesito corregirlo en SIIAU"  {{isset($formulario->CasoNoDirector)&&$formulario->CasoNoDirector=='No registré adecuadamente por pares, necesito corregirlo en SIIAU'?'checked':old('CasoNoDirector')}}>
                <label for="CasoNoDirector">No registré adecuadamente por pares, necesito corregirlo en SIIAU</label>
            </div>
            <div>
                <input type="radio" name="CasoNoDirector" value="No tuvimos avances significativos, quiero dar de baja las materias en SIIAU"  {{isset($formulario->CasoNoDirector)&&$formulario->CasoNoDirector=='No tuvimos avances significativos, quiero dar de baja las materias en SIIAU'?'checked':old('CasoNoDirector')}}>
                <label for="CasoNoDirector">No tuvimos avances significativos, quiero dar de baja las materias en SIIAU</label>
            </div>
        </div>                    
    </div>
</div>

      <div class="seccion s-9" id="seccionEO">
    <div class="container">
        <div class="campo">
            <label for="DocumentoPDFProyecto">Documento(Recuerda enviarlos en un sólo documento y en formato PDF):</label><br>
            <br>
            @if(isset($formulario->DocumentoPDFProyecto))
            <a href="{{asset('storage').'/'.$formulario->DocumentoPDFProyecto}}">Documento PDF</a><br>
            @endif
      <input name="DocumentoPDFProyecto" type="file" id="DocumentoPDFProyecto" /> <!-- Modified -->
    </div>
    </div>
    </div>
      <div class="container-btn" id="container-btn">
        <input type="submit" value="Enviar">
        <a href="{{url('formulario/')}}">Regresar</a>

      </div>  
     