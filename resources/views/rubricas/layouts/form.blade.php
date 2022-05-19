@csrf
<section>
    <div class="container">
        <h2 class="center">Datos del(a) Evaluador(a)</h2>
        <div class="col-3">
            <div class="campo">
                <label for="apellido_paterno_evaluador">Apellido Paterno</label><br>
                <input type="text" name="apellido_paterno_evaluador" id="apellido_paterno_evaluador" placeholder="Apellido Paterno"
                value="{{old('apellido_paterno_evaluador') ?? $model->apellido_paterno_evaluador}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="apellido_materno_evaluador">Apellido Materno</label><br>
                <input type="text" name="apellido_materno_evaluador" id="apellido_materno_evaluador" placeholder="Apellido Materno"
                value="{{old('apellido_materno_evaluador') ?? $model->apellido_materno_evaluador}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="nombre_evaluador">Nombre(s)</label><br>
                <input type="text" name="nombre_evaluador" id="nombre_evaluador" placeholder="Nombre(s)"
                value="{{old('nombre_evaluador') ?? $model->nombre_evaluador}}"
                @if($accion=='show') readonly @endif>
            </div>
        </div>
        <div class="campo">
            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" id="correo" placeholder="Ingresa el correo del evaluador"
            value="{{old('correo') ?? $model->correo}}"
            TODO: DESCOMENTAR Y ELIMINAR
            {{-- @if($accion=='show') readonly @endif> --}}
            @if($accion=='show') readonly @endif>
        </div>
        <div class="campo">
            @php($isProfesor = old('is_profesor') ?? $model->is_profesor)
            <label for="is_profesor">¿Es usted Profesor de la Universidad de Guadalajara?</label><br>
            <label for="Profesor">
            <input type="radio" name="is_profesor" value="SÍ" id="Profesor" onclick="visible('.s-3',false);limpiar_insti();" 
            @if($isProfesor=='SÍ') checked @endif @if($accion=='show') readonly @endif>Sí</label>
            <label for="Alumno">
            <input type="radio" name="is_profesor" value="NO" id="Alumno" onclick="visible('.s-3',true);add_req_insti();" 
            @if($isProfesor=='NO') checked @endif @if($accion=='show') readonly @endif>No</label>
        </div>
    </div>

</section>

<section class="s-3">
    <div class="container">
        <h2 class="center">Institución</h2>
        <div class="col-2">
            <div class="campo">
                <label for="nombre_institucion">Por favor, indique la institucion a la que pertenece</label><br>
                <input type="text" name="nombre_institucion" id="nombre_institucion" placeholder="Institución Perteneciente"
                value="{{old('nombre_institucion') ?? $model->nombre_institucion}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="area_investigacion">¿Cuál es su área de investigación?</label><br>
                <input type="text" name="area_investigacion" id="area_investigacion" placeholder="Área de investigación"
                value="{{old('area_investigacion') ?? $model->area_investigacion}}"
                @if($accion=='show') readonly @endif>
            </div>
        </div>
    </div>
</section>

<section class="s-76">
    <div class="container">
        <h2 class="center">Datos Investigación</h2>
        <div class="campo">
            <label for="codigo">Escriba por favor su código UdeG</label><br>
            <input type="text" name="codigo" id="codigo" onKeyPress="if(this.value.length==10) return false;" placeholder="Código UdeG"
                value="{{old('codigo') ?? $model->codigo}}"
                @if($accion=='show') readonly @endif>
        </div>
        <div class="campo">
            <label for="area_investigacion_proyecto">¿Cuál es su área de investigación?</label><br>
            <input type="text" name="area_investigacion_proyecto" id="area_investigacion_proyecto" placeholder="Área Investigación Proyecto"
            value="{{old('area_investigacion_proyecto') ?? $model->area_investigacion_proyecto}}"
            @if($accion=='show') readonly @endif>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="center">Datos del Estudiante a evaluar</h2>

            <div class="campo">
                <label for="id_trabajo">Ingrese el ID del Trabajo a Evaluar</label><br>
                <input type="text" name="id_trabajo" id="id_trabajo" placeholder="ID Trabajo" onchange="detectarEO();" 
                value="{{old('id_trabajo') ?? $model->id_trabajo}}"
                @if($accion=='show') readonly @endif>
            </div>
        <div class="col-3">
            <div class="campo">
                <label for="apellido_paterno_estudiante">Apellido Paterno</label><br>
                <input type="text" name="apellido_paterno_estudiante" id="apellido_paterno_estudiante" placeholder="Apellido Paterno"
                value="{{old('apellido_paterno_estudiante') ?? $model->apellido_paterno_estudiante}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="apellido_materno_estudiante">Apellido Materno</label><br>
                <input type="text" name="apellido_materno_estudiante" id="apellido_materno_estudiante" placeholder="Apellido Materno"
                value="{{old('apellido_materno_estudiante') ?? $model->apellido_materno_estudiante}}"
                @if($accion=='show') readonly @endif>
            </div>
            <div class="campo">
                <label for="nombre_estudiante">Nombre(s)</label><br>
                <input type="text" name="nombre_estudiante" id="nombre_estudiante" placeholder="Nombre(s)"
                value="{{old('nombre_estudiante') ?? $model->nombre_estudiante}}"
                @if($accion=='show') readonly @endif>
            </div>
        </div>
    </div>
</section>


<section class="seccion s-116">
    <div class="container">
        <h2 class="center">Aspectos Personales</h2>
        <div class="grid-tabla-ap-th display-none">
            <p>Aspecto</p>
            <p>Sí</p>
            <p>No</p>
        </div>
        @php($isFormal = old('is_formal') ?? $model->is_formal)
        <div class="grid-tabla-ap">
            <p>1.1 El estudiante acudió vestido formalmente, adecuado para su presentación.</p>
            <div><input type="radio" name="is_formal" id="is_formal_si" value="2"
                @if($isFormal=='2') checked @endif @if($accion=='show') readonly @endif><label for="is_formal_si">Sí</label></div>
            <div><input type="radio" name="is_formal" id="is_formal_no" value="0"
                @if($isFormal=='0') checked @endif @if($accion=='show') readonly @endif><label for="is_formal_no">No</label></div>
        </div>
        @php($isPuntual = old('is_puntual') ?? $model->is_puntual)
        <div class="grid-tabla-ap">
            <p>1.2 El estudiante se presentó puntualmente a su exposición</p>
            <div><input type="radio" name="is_puntual" id="is_puntualSi" value="2"
                @if($isPuntual=='2') checked @endif @if($accion=='show') readonly @endif><label for="is_puntualSi">Sí</label></div>
            <div><input type="radio" name="is_puntual" id="is_puntualNo" value="0"
                @if($isPuntual=='0') checked @endif @if($accion=='show') readonly @endif><label for="isPuntualNo">No</label></div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="justify">2. Rúbrica para evaluar Proyecto Modular
            <br> 1: Estructura de la Materia	y Proyecto Modular 
            <br> 2: Síntesis, Purificación y Transformación Química</h2>

        <div class="grid-tabla-th display-none">
            <p>Punto a evaluar</p>
            <p>Excelente</p>
            <p>Muy Bueno</p>
            <p>Aceptable</p>
            <p>Regular</p>
            <p>Malo</p>
        </div>
        @php($rubrica21 = old('rubrica21') ?? $model->rubrica21)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>2.1 La coherencia y relación entre TÍTULO y OBJETIVOS del proyecto expresados en la presentación es:</p>
            @else
                <p>2.1 La coherencia y relación entre RESULTADO(S) [positivos o negativos] y OBJETIVO(S) expresados en el proyecto es:</p>
            @endif
            <div><input type="radio" name="rubrica21" id="rubrica215" value="5"
                @if($rubrica21=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica215" >Excelente</label></div>
            <div><input type="radio" name="rubrica21" id="rubrica214" value="4"
                @if($rubrica21=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica214">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica21" id="rubrica213" value="3"
                @if($rubrica21=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica213">Aceptable</label></div>
            <div><input type="radio" name="rubrica21" id="rubrica212" value="2"
                @if($rubrica21=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica212">Regular</label></div>
            <div><input type="radio" name="rubrica21" id="rubrica211" value="1"
                @if($rubrica21=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica211">Malo</label></div>
        </div>
        @php($rubrica22 = old('rubrica22') ?? $model->rubrica22)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>2.2 La coherencia y relación entre OBJETIVOS e HIPÓTESIS del proyecto expresados en la presentación es:</p>
            @else
                <p>2.2 La calidad de la DISCUSIÓN relatada sobre el(los) resultados es:</p>
            @endif
            <div><input type="radio" name="rubrica22" id="rubrica225" value="5"
                @if($rubrica22=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica225">Excelente</label></div>
            <div><input type="radio" name="rubrica22" id="rubrica224" value="4"
                @if($rubrica22=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica224">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica22" id="rubrica223" value="3"
                @if($rubrica22=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica223">Aceptable</label></div>
            <div><input type="radio" name="rubrica22" id="rubrica222" value="2"
                @if($rubrica22=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica222">Regular</label></div>
            <div><input type="radio" name="rubrica22" id="rubrica221" value="1"
                @if($rubrica22=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica221">Malo</label></div>
        </div>
        @php($rubrica23 = old('rubrica23') ?? $model->rubrica23)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>2.3. Los antecedentes presentados permiten entender los fundamentos en los que se sustenta el proyecto.</p>
            @else
                <p>2.3 La presentación de los datos del proyecto en términos de los requerimientos de la TÉCNICA DE CARACTERIZACIÓN Y/O ANÁLISIS (v.g. unidades en los ejes, criterios estadísticos, entre otros), es:</p>
            @endif
            <div><input type="radio" name="rubrica23" id="rubrica235" value="5"
                @if($rubrica23=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica235">Excelente</label></div>
            <div><input type="radio" name="rubrica23" id="rubrica234" value="4"
                @if($rubrica23=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica234">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica23" id="rubrica233" value="3"
                @if($rubrica23=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica233">Aceptable</label></div>
            <div><input type="radio" name="rubrica23" id="rubrica232" value="2"
                @if($rubrica23=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica232">Regular</label></div>
            <div><input type="radio" name="rubrica23" id="rubrica231" value="1"
                @if($rubrica23=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica231">Malo</label></div>
        </div>
        @php($rubrica24 = old('rubrica24') ?? $model->rubrica24)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>2.4 La relación entre los OBJETIVOS y la METODOLOGÍA descrita en el proyecto es:</p>
            @else
                <p>2.4 La estructura (gramatical y semántica) de la CONCLUSIÓN es:</p>
            @endif
            <div><input type="radio" name="rubrica24" id="rubrica245" value="5"
                @if($rubrica24=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica245">Excelente</label></div>
            <div><input type="radio" name="rubrica24" id="rubrica244" value="4"
                @if($rubrica24=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica244">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica24" id="rubrica243" value="3"
                @if($rubrica24=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica243">Aceptable</label></div>
            <div><input type="radio" name="rubrica24" id="rubrica242" value="2"
                @if($rubrica24=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica242">Regular</label></div>
            <div><input type="radio" name="rubrica24" id="rubrica241" value="1"
                @if($rubrica24=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica241">Malo</label></div>
        </div>
        @php($rubrica25 = old('rubrica25') ?? $model->rubrica25)
        <div class="grid-tabla">
            <p>2.5 El vocabulario empleado por el(la) alumno(a), durante la explicación de su presentación es:</p>
            <div><input type="radio" name="rubrica25" id="rubrica255" value="5"
                @if($rubrica25=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica255">Excelente</label></div>
            <div><input type="radio" name="rubrica25" id="rubrica254" value="4"
                @if($rubrica25=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica254">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica25" id="rubrica253" value="3"
                @if($rubrica25=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica253">Aceptable</label></div>
            <div><input type="radio" name="rubrica25" id="rubrica252" value="2"
                @if($rubrica25=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica252">Regular</label></div>
            <div><input type="radio" name="rubrica25" id="rubrica251" value="1"
                @if($rubrica25=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica251">Malo</label></div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="center">3. Competencias del Módulo 1: Estructura de la Materia</h2>
        <div class="grid-tabla-th display-none">
            <p>Punto a evaluar</p>
            <p>Excelente</p>
            <p>Muy Bueno</p>
            <p>Aceptable</p>
            <p>Regular</p>
            <p>Malo</p>
        </div>
        @php($rubrica31 = old('rubrica31') ?? $model->rubrica31)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>3.1 La explicación de las propiedades de la materia en función de la estructura de los compuestos presentados en el proyecto es:</p>
            @else
                <p>3.1 El estudiante evidencia el uso de la caracterización y/o análisis de compuestos.</p>
            @endif
            <div><input type="radio" name="rubrica31" id="rubrica315" value="5"
                @if($rubrica31=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica315">Excelente</label></div>
            <div><input type="radio" name="rubrica31" id="rubrica314" value="4"
                @if($rubrica31=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica314">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica31" id="rubrica313" value="3"
                @if($rubrica31=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica313">Aceptable</label></div>
            <div><input type="radio" name="rubrica31" id="rubrica312" value="2"
                @if($rubrica31=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica312">Regular</label></div>
            <div><input type="radio" name="rubrica31" id="rubrica311" value="1"
                @if($rubrica31=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica311">Malo</label></div>
        </div>
        @php($rubrica32 = old('rubrica32') ?? $model->rubrica32)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>3.2 El correcto lenguaje químico de los compuestos presentes en el proyecto es aplicado por el estudiante de manera:</p>
            @else
                <p>3.2 El alumno utiliza el adecuado conocimiento sobre las técnicas de análisis y/o caracterización utilizadas en su proyecto.</p>
            @endif
            <div><input type="radio" name="rubrica32" id="rubrica325" value="5"
                @if($rubrica32=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica325">Excelente</label></div>
            <div><input type="radio" name="rubrica32" id="rubrica324" value="4"
                @if($rubrica32=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica324">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica32" id="rubrica323" value="3"
                @if($rubrica32=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica323">Aceptable</label></div>
            <div><input type="radio" name="rubrica32" id="rubrica322" value="2"
                @if($rubrica32=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica322">Regular</label></div>
            <div><input type="radio" name="rubrica32" id="rubrica321" value="1"
                @if($rubrica32=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica321">Malo</label></div>
        </div>
        @php($rubrica33 = old('rubrica33') ?? $model->rubrica33)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>3.3 El conocimiento de los elementos de seguridad de las sustancias químicas utilizadas en el proyecto es:</p>
            @else
                <p>3.3 La interpretación de los datos obtenidos de las técnicas de caracterización y/o análisis presentes en su proyecto es:</p>
            @endif
            <div><input type="radio" name="rubrica33" id="rubrica335" value="5"
                @if($rubrica33=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica335">Excelente</label></div>
            <div><input type="radio" name="rubrica33" id="rubrica334" value="4"
                @if($rubrica33=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica334">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica33" id="rubrica333" value="3"
                @if($rubrica33=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica333">Aceptable</label></div>
            <div><input type="radio" name="rubrica33" id="rubrica332" value="2"
                @if($rubrica33=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica332">Regular</label></div>
            <div><input type="radio" name="rubrica33" id="rubrica331" value="1"
                @if($rubrica33=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica331">Malo</label></div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="center">4. Competencias del Módulo 2: Síntesis, Purificación y Transformación Química</h2>

        <div class="grid-tabla-th display-none">
            <p>Punto a evaluar</p>
            <p>Excelente</p>
            <p>Muy Bueno</p>
            <p>Aceptable</p>
            <p>Regular</p>
            <p>Malo</p>
        </div>
        @php($rubrica41 = old('rubrica41') ?? $model->rubrica41)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>4.1 El estudiante emplea la transformación o síntesis de compuestos con características definidas.</p>
            @else
                <p>4.1 La evidencia de la aplicación de los conceptos de químicos para la solución o prevención de problemas es.</p>
            @endif
            <div><input type="radio" name="rubrica41" id="rubrica415" value="5"
                @if($rubrica41=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica415">Excelente</label></div>
            <div><input type="radio" name="rubrica41" id="rubrica414" value="4"
                @if($rubrica41=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica414">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica41" id="rubrica413" value="3"
                @if($rubrica41=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica413">Aceptable</label></div>
            <div><input type="radio" name="rubrica41" id="rubrica412" value="2"
                @if($rubrica41=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica412">Regular</label></div>
            <div><input type="radio" name="rubrica41" id="rubrica411" value="1"
                @if($rubrica41=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica411">Malo</label></div>
        </div>
        @php($rubrica42 = old('rubrica42') ?? $model->rubrica42)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>4.2 El alumno evidencia el conocimiento pertinente sobre la extracción / aislamiento o purificación de compuestos.</p>
            @else
                <p>4.2 Incluye dentro del proyecto aspectos relacionados al cuidado del medioambiente o aspectos relacionados a la interacción con la sociedad.</p>
            @endif
            <div><input type="radio" name="rubrica42" id="rubrica425" value="5"
                @if($rubrica42=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica425">Excelente</label></div>
            <div><input type="radio" name="rubrica42" id="rubrica424" value="4"
                @if($rubrica42=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica424">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica42" id="rubrica423" value="3"
                @if($rubrica42=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica423">Aceptable</label></div>
            <div><input type="radio" name="rubrica42" id="rubrica422" value="2"
                @if($rubrica42=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica422">Regular</label></div>
            <div><input type="radio" name="rubrica42" id="rubrica421" value="1"
                @if($rubrica42=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica421">Malo</label></div>
        </div>
        @php($rubrica43 = old('rubrica43') ?? $model->rubrica43)
        <div class="grid-tabla">
            @if ($rubrica==1)
                <p>4.3 El estudiante evidencia el conocimiento relativo al control / optimización / modificación de los parámetros de la síntesis o transformación química.</p>
            @else
                <p>4.3 En términos de generación o aplicación del conocimiento para resolver un problema del ámbito químico. El proyecto es.</p>
            @endif
            <div><input type="radio" name="rubrica43" id="rubrica435" value="5"
                @if($rubrica43=='5') checked @endif @if($accion=='show') readonly @endif><label for="rubrica435">Excelente</label></div>
            <div><input type="radio" name="rubrica43" id="rubrica434" value="4"
                @if($rubrica43=='4') checked @endif @if($accion=='show') readonly @endif><label for="rubrica434">Muy Bueno</label></div>
            <div><input type="radio" name="rubrica43" id="rubrica433" value="3"
                @if($rubrica43=='3') checked @endif @if($accion=='show') readonly @endif><label for="rubrica433">Aceptable</label></div>
            <div><input type="radio" name="rubrica43" id="rubrica432" value="2"
                @if($rubrica43=='2') checked @endif @if($accion=='show') readonly @endif><label for="rubrica432">Regular</label></div>
            <div><input type="radio" name="rubrica43" id="rubrica431" value="1"
                @if($rubrica43=='1') checked @endif @if($accion=='show') readonly @endif><label for="rubrica431">Malo</label></div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="center">Dictamen</h2>
        @php($evaluacion = old('evaluacion') ?? $model->evaluacion)
        <div>
            <label for="evaluacion">Con base a cada rubro evaluado, usted considera al(a) alumno(a): </label><br>
            <input type="radio" name="evaluacion" id="aprobado"   value="Aprobado"
                @if($evaluacion=='Aprobado') checked @endif @if($accion=='show') readonly @endif><label for="aprobado">Aprobado</label><br>
            <input type="radio" name="evaluacion" id="reprobado" value="Reprobado"
                @if($evaluacion=='Reprobado') checked @endif @if($accion=='show') readonly @endif><label for="reprobado">Reprobado</label><br>
        </div>
        <div class="campo">
            <label for="observaciones">Observaciones</label><br>
            <input type="text" name="observaciones" id="observaciones" placeholder="Observaciones"
                value="{{old('observaciones') ?? $model->observaciones}}"
                @if($accion=='show') readonly @endif>
        </div>
    </div>
</section>

<div class="container-btn" id="container-btn">
    <input type="submit" value="Enviar" class="btn">
</div>