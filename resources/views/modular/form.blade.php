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
        <input type="radio" name="GeneroAlumno" value="Femenino" id="Femenino" {{isset($modular->GeneroAlumno)&&$modular->GeneroAlumno=='Femenino'?'checked':''}}@if(old('GeneroAlumno')=='Femenino') checked @endif><label for="Femenino">Femenino</label>
        <input type="radio" name="GeneroAlumno" value="Prefiero no decirlo" id="pnd" {{isset($modular->GeneroAlumno)&&$modular->GeneroAlumno=='Prefiero no decirlo'?'checked':''}}@if(old('GeneroAlumno')=='Prefiero no decirlo') checked @endif><label for="pnd">Prefiero no decirlo</label>
    </div>

    <div class="md:columns-2">
        <div class="mb-4">
            <label for="CorreoAlumno">CORREO</label><br>
            <input
                class="rounded-input"
                type="text" name="CorreoAlumno" id="CorreoAlumno" placeholder="Ingresa tu correo" value="{{isset($modular->CorreoAlumno)?$modular->CorreoAlumno:old('CorreoAlumno')}}" >
        </div>
        <div class="mb-4">
            <label for="CodigoAlumno">C??DIGO</label><br>
            <input
                class="rounded-input"
                type="number"
                name="CodigoAlumno"
                id="CodigoAlumno"
                onKeyPress="if(this.value.length==9) return false"
                placeholder="C??digo de UdeG"
                value="{{isset($modular->CodigoAlumno)?$modular->CodigoAlumno:old('CodigoAlumno')}}">
        </div>


    </div>

    <div class="md:columns-2">
        <div class="mb-4">
            <label
                for="CelularAlumno">T??LEFONO</label><br>
            <input
                class="rounded-input"
                type="number" name="CelularAlumno" id="CelularAlumno"
            onKeyPress="if(this.value.length==10) return false;" 
            placeholder="N??mero t??lefonico" value="{{isset($modular->CelularAlumno)?$modular->CelularAlumno:old('CelularAlumno')}}">
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
        <input type="radio" name="SemestreAlumno" value="6to" id="6to" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='6to'?'checked':''}}@if(old('SemestreAlumno')=='6to') checked @endif><label for="6to">6to</label>
        <input type="radio" name="SemestreAlumno" value="7mo" id="7mo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='7mo'?'checked':''}}@if(old('SemestreAlumno')=='7mo') checked @endif><label for="7mo">7mo</label>
        <input type="radio" name="SemestreAlumno" value="8vo" id="8vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='8vo'?'checked':''}}@if(old('SemestreAlumno')=='8vo') checked @endif><label for="8vo">8vo</label>
        <input type="radio" name="SemestreAlumno" value="9no" id="9no" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='9no'?'checked':''}}@if(old('SemestreAlumno')=='9no') checked @endif><label for="9no">9no</label>
        <input type="radio" name="SemestreAlumno" value="10mo" id="10mo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='10mo'?'checked':''}}@if(old('SemestreAlumno')=='10mo') checked @endif><label for="10mo">10mo</label>
        <input type="radio" name="SemestreAlumno" value="11vo" id="11vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='11vo'?'checked':''}}@if(old('SemestreAlumno')=='11vo') checked @endif><label for="11vo">11vo</label>
        <input type="radio" name="SemestreAlumno" value="12vo" id="12vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='12vo'?'checked':''}}@if(old('SemestreAlumno')=='12vo') checked @endif><label for="12vo">12vo</label>
        <input type="radio" name="SemestreAlumno" value="13vo" id="13vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='13vo'?'checked':''}}@if(old('SemestreAlumno')=='13vo') checked @endif><label for="13vo">13vo</label>
        <input type="radio" name="SemestreAlumno" value="14vo" id="14vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='14vo'?'checked':''}}@if(old('SemestreAlumno')=='14vo') checked @endif><label for="14vo">14vo</label>
        <input type="radio" name="SemestreAlumno" value="15vo" id="15vo" {{isset($modular->SemestreAlumno)&&$modular->SemestreAlumno=='15vo'?'checked':''}}@if(old('SemestreAlumno')=='15vo') checked @endif><label for="15vo">15vo</label>
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
            placeholder="Titulo de tu trabajo (Utilizar May??sculas, min??sculas y acentos)" 
            value="{{isset($modular->TituloTrabajo)?$modular->TituloTrabajo:old('TituloTrabajo')}}">
    </div>

    <div class="mb-4">
        <label for="director">??TIENES DIRECTOR DE PROYECTO MODULAR?</label><br>
        <input type="radio" name="director" value="S?? Tengo" id="siDirector" {{isset($modular->director)&&$modular->director=='S?? Tengo'?'checked':''}}@if(old('director')=='S?? Tengo') checked @endif><label for="siDirector">S??, hemos trabajado en conjunto</label>
        <br class="block md:hidden">
        <input type="radio" name="director" value="NO" id="No Tengo" {{isset($modular->director)&&$modular->director=='NO'?'checked':''}}@if(old('director')=='NO') checked @endif><label for="noDirector">No, no he podido conseguir proyecto</label>
    </div>


    <div class="mb-4">
        <label for="isRegistrado" class="uppercase">??Te registraste en SIIAU para Proyectos Modulares en este ciclo <span class="ciclo"></span>?</label><br>
        <input type="radio" name="isRegistrado" value="Registrado" id="siRegistrado" {{isset($modular->isRegistrado)&&$modular->isRegistrado=='Registrado'?'checked':''}}@if(old('isRegistrado')=='Registrado') checked @endif><label for="siRegistrado">S??</label>
        <input type="radio" name="isRegistrado" value="No Registrado" id="noRegistrado" {{isset($modular->isRegistrado)&&$modular->isRegistrado=='No Registrado'?'checked':''}}@if(old('isRegistrado')=='No Registrado') checked @endif><label for="noRegistrado">No</label>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="PMaEvaluar">Selecciona los proyectos modulares que deseas evaluar</label><br>
        <div><input type="radio" name="PMaEvaluar" value="PM1 Y PM2" id="PM1" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='PM1 Y PM2'?'checked':''}}@if(old('PMaEvaluar')=='PM1 Y PM2') checked @endif><label for="PM1">PM1. Estructura de la Materia y PM2. S??ntesis y Purificaci??n</label></div>
        <div><input type="radio" name="PMaEvaluar" value="PM3 Y PM4" id="PM3" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='PM3 Y PM4'?'checked':''}}@if(old('PMaEvaluar')=='M3 Y PM4') checked @endif><label for="PM3">PM3. An??lisis y Caracterizaci??n y PM4: Prevenci??n y soluci??n de Problemas en el ??rea qu??mica</label></div>
        <div><input type="radio" name="PMaEvaluar" value="Los 4 m??dulos" id="PM4" {{isset($modular->PMaEvaluar)&&$modular->PMaEvaluar=='Los 4 m??dulos'?'checked':''}}@if(old('PMaEvaluar')=='Los 4 m??dulos') checked @endif><label for="PM4">Los 4 m??dulos</label></div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="AreaQuimicaTrabajo">??rea de la qu??mica a la que pertenece el trabajo</label><br>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at1" value="Pol??meros" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Pol??meros'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Pol??meros') checked @endif><label for="at1">Pol??meros</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at2" value="Materiales y Nano-materiales" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Materiales y Nano-materiales'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Materiales y Nano-materiales') checked @endif><label for="at2">Materiales y Nano-materiales</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at3" value="S??ntesis de compuestos org??nica u organomet??lica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='S??ntesis de compuestos org??nica u organomet??lica'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='S??ntesis de compuestos org??nica u organomet??lica') checked @endif><label for="at3">S??ntesis de compuestos org??nica u organomet??lica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at4" value="Bioqu??mica, Biologia Molecular o Gen??tica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Bioqu??mica, Biologia Molecular o Gen??tica'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Bioqu??mica, Biologia Molecular o Gen??tica') checked @endif><label for="at4">Bioqu??mica, Biologia Molecular o Gen??tica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at5" value="Qu??mica Anal??tica e Instrumentaci??n" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Qu??mica Anal??tica e Instrumentaci??n'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Qu??mica Anal??tica e Instrumentaci??n') checked @endif><label for="at5">Qu??mica Anal??tica e Instrumentaci??n</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at6" value="Educaci??n Qu??mica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Educaci??n Qu??mica'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Educaci??n Qu??mica') checked @endif><label for="at6">Educaci??n Qu??mica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at7" value="Microbiolog??a" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Microbiolog??a'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Microbiolog??a') checked @endif><label for="at7">Microbiolog??a</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at8" value="Qu??mica Te??rica y computacional" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Qu??mica Te??rica y computacional'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Qu??mica Te??rica y computacional') checked @endif><label for="at8">Qu??mica Te??rica y computacional</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at9" value="Fisicoqu??mica y Electroqu??mica" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='Fisicoqu??mica y Electroqu??mica'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='Fisicoqu??mica y Electroqu??mica') checked @endif><label for="at9">Fisicoqu??mica y Electroqu??mica</label></div>
        <div><input type="radio" name="AreaQuimicaTrabajo" id="at10" value="OTRA"><label for="at10" {{isset($modular->AreaQuimicaTrabajo)&&$modular->AreaQuimicaTrabajo=='OTRA'?'checked':''}}@if(old('AreaQuimicaTrabajo')=='OTRA') checked @endif>OTRA</label></div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="TipoTrabajo">Selecciona si tu trabajo es de:</label><br>
        <div><input type="radio" name="TipoTrabajo" id="innovacion" value="Innovaci??n" {{isset($modular->TipoTrabajo)&&$modular->TipoTrabajo=='Innovaci??n'?'checked':''}}@if(old('TipoTrabajo')=='Innovaci??n') checked @endif><label for="innovacion">Innovaci??n</label></div>
        <div><input type="radio" name="TipoTrabajo" id="aplicacion" value="Aplicaci??n" {{isset($modular->TipoTrabajo)&&$modular->TipoTrabajo=='Aplicaci??n'?'checked':''}}@if(old('TipoTrabajo')=='Aplicaci??n') checked @endif><label for="aplicacion">Aplicaci??n</label></div>
    </div>


    <div class="mb-4">
        <label 
            class="uppercase"
            for="TipoModalidad">Opci??n que eligieron t?? y tu director</label>
        <br>
        <div>
            <input type="radio" name="TipoModalidad" value="Examen Oral" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Examen Oral'?'checked':''}}@if(old('TipoModalidad')=='Examen Oral') checked @endif>
            <label for="pae21">Examen Oral</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Asistencia a congreso" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Asistencia a congreso'?'checked':''}}@if(old('TipoModalidad')=='Asistencia a congreso') checked @endif>
            <label for="pae21">Asistencia a Congreso</label>
        </div>
        <div>
            <input type="radio" name="TipoModalidad" value="Titulaci??n" {{isset($modular->TipoModalidad)&&$modular->TipoModalidad=='Titulaci??n'?'checked':''}}@if(old('TipoModalidad')=='Titulaci??n') checked @endif>
            <label for="pae21">Titulaci??n</label>
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
                for="TipoCongreso">??Qu?? tipo de Congreso fue?</label><br>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso1" value="Nacional" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Nacional'?'checked':''}}@if(old('TipoCongreso')=='Nacional') checked @endif>
                <label for="nacional">Nacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso2" value="Internacional" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Internacional'?'checked':''}}@if(old('TipoCongreso')=='Internacional') checked @endif>
                <label for="internacional">Internacional</label>
            </div>
            <div>
                <input type="radio" name="TipoCongreso" id="TipoCongreso3" value="Presentaci??n de carteles" {{isset($modular->TipoCongreso)&&$modular->TipoCongreso=='Presentaci??n de carteles'?'checked':''}}@if(old('TipoCongreso')=='Presentaci??n de carteles') checked @endif>
                <label for="TipoCongreso3">Presentaci??n de carteles en LQUI</label>
            </div>
        </div>
        <div class="mb-4 md:w-1/2">{{--OTRA FORMA DE PONER DOS COLUMNAS--}}
            <label 
                class="uppercase"
                for="RecibioBeca">??Recibiste alg??n tipo de beca?</label><br>
            <div class="inline-block">
                <input type="radio" name="RecibioBeca" id="RecibioBeca1" value="S??" {{isset($modular->RecibioBeca)&&$modular->RecibioBeca=='S??'?'checked':''}}@if(old('RecibioBeca')=='S??') checked @endif>
                <label for="Est?? Becado">S??</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="RecibioBeca" id="RecibioBeca2" value="No" {{isset($modular->RecibioBeca)&&$modular->RecibioBeca=='No'?'checked':''}}@if(old('RecibioBeca')=='No') checked @endif>
                <label for="No Est?? Becado">No</label>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label 
            class="uppercase"
            for="EstanciaBeca">Estancia (Opcional)</label><br>
        <input 
            class="rounded-input"
            placeholder="Menciona la estancia que te apoy?? econ??micamente"
            type="text"  name="EstanciaBeca" id="EstanciaBeca" value="{{isset($modular->EstanciaBeca)?$modular->EstanciaBeca:old('EstanciaBeca')}}">
    </div>
</div>

<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulaci??n</h3>
    <div class="md:flex">
        <div class="mb-4 md:w-1/2">
            <label for="ModalidadTitulacion" class="uppercase">Elige la modalidad de tu Proyecto</label><br>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="tesis" value="Tesis" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Tesis'?'checked':''}}@if(old('ModalidadTitulacion')=='Tesis') checked @endif>
                <label for="tesis">Tesis</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="tesina" value="Tesina" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Tesina'?'checked':''}}@if(old('ModalidadTitulacion')=='Tesina') checked @endif>
                <label for="tesina">Tesina</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="ModalidadTitulacion" id="md" value="Material Did??ctico" {{isset($modular->ModalidadTitulacion)&&$modular->ModalidadTitulacion=='Material Did??ctico'?'checked':''}}@if(old('ModalidadTitulacion')=='Material Did??ctico') checked @endif>
                <label for="md">Material Did??ctico</label>
            </div>
        </div>
        <div class="mb-4 md:w-1/2">
            <label for="DocumentoEntregaras" class="uppercase">??Qu?? documento entregar??s?</label><br>
            <div class="inline-block">
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT1" value="Protocolo" {{isset($modular->DocumentoEntregaras)&&$modular->DocumentoEntregaras=='Protocolo'?'checked':''}}@if(old('DocumentoEntregaras')=='Protocolo') checked @endif>
                <label for="DocumentoEntregaras">Protocolo</label>
            </div>
            <div class="inline-block">
                <input type="radio" name="DocumentoEntregaras" id="DocumentoEntregarasT2" value="Documento Final" {{isset($modular->DocumentoEntregaras)&&$modular->DocumentoEntregaras=='Documento Final'?'checked':''}}@if(old('DocumentoEntregaras')=='Documento Final') checked @endif>
                <label for="DocumentoEntregaras">Documento final</label>
            </div>
        </div>
    </div>
</div>


<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulaci??n</h3>

    <p class="mb-4">Para participar en la Evaluaci??n de Proyectos Modulares, es necesario registrar en SIIAU correctamente por pares, es decir, las Competencias B??sicas (PM1 y PM2) ?? las Competencias Avanzadas (PM3 y PM4). </p>
    <p class="mb-4">Revisa la informaci??n correcta <a href="https://sites.google.com/administrativos.udg.mx/proyectosmodulares-lqui/inicio" target="_blank" rel="noopener noreferrer">aqu??.</a></p>

    <p class="mb-4">Si no cuentas con director de proyecto y por lo tanto no haz podido iniciar uno, entonces se debe ajustar tu caso particular. Responde por favor la siguiente consulta:</p>

    <div class="campo">
        <label for="CasoNoDirector">Elige tu caso:</label><br>
        <div>
            <input type="radio" name="CasoNoDirector" value="Tengo Director y avances en mi Proyecto, pero NO registr?? las materias en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='Tengo Director y avances en mi Proyecto, pero NO registr?? las materias en SIIAU'?'checked':''}}@if(old('CasoNoDirector')=='Tengo Director y avances en mi Proyecto, pero NO registr?? las materias en SIIAU') checked @endif>
            <label for="CasoNoDirector">Tengo Director y avances en mi Proyecto, pero NO registr?? las materias en SIIAU</label>
        </div>
        <div>
            <input type="radio" name="CasoNoDirector" value="No registr?? adecuadamente por pares, necesito corregirlo en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='No registr?? adecuadamente por pares, necesito corregirlo en SIIAU'?'checked':''}}@if(old('CasoNoDirector')=='No registr?? adecuadamente por pares, necesito corregirlo en SIIAU') checked @endif>
            <label for="CasoNoDirector">No registr?? adecuadamente por pares, necesito corregirlo en SIIAU</label>
        </div>
        <div>
            <input type="radio" name="CasoNoDirector" value="No tuvimos avances significativos, quiero dar de baja las materias en SIIAU"  {{isset($modular->CasoNoDirector)&&$modular->CasoNoDirector=='No tuvimos avances significativos, quiero dar de baja las materias en SIIAU'?'checked':''}}@if(old('CasoNoDirector')=='No tuvimos avances significativos, quiero dar de baja las materias en SIIAU') checked @endif>
            <label for="CasoNoDirector">No tuvimos avances significativos, quiero dar de baja las materias en SIIAU</label>
        </div>
    </div>
</div>



<div class="w-[min(50rem,90%)] rounded-3xl p-8 bg-white m-auto mt-8">
    <h3 class="text-2xl center mb-4">Por Titulaci??n</h3>
    <div class="container">
        <label for="DocumentoPDFProyecto">Documento(Recuerda enviarlos en un s??lo documento y en formato PDF):</label><br>
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