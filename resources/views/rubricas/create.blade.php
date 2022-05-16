<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rubrica {{$rubrica}}</title>
</head>
<body>
    <nav>
        <div class="container">
            <h1>Rubrica E{{$rubrica}}</h1>
        </div>
    </nav>
    <div class="container">
        <p>
            Estimado Profesor Evaluador:<br><br>

            Este formulario tiene como finalidad evaluar las competencias de los Proyectos Modulares 1 y 2 (PM1 y PM2) en todas sus variantes.<br>
            De antemano, muchas gracias por su apoyo.<br><br>

            Atentamente,<br>
            M. en Ing. Bernardo Gudiño Guzmán<br>
            Coordinador de la Licenciatura en Química<br>
            CUCEI - UdeG
        </p>
    </div>


    <form method="POST" action="https://script.google.com/macros/s/AKfycbznbpe5tjrPcOD3TeFUNHsew-4sqYAv3aaauP7ZnjySqqYsVsEhIJT115N0UxIleZaX0A/exec">
        <section>
            <div class="container">
                <h2 class="center">Datos del(a) Evaluador(a)</h2>
                <div class="col-3">
                    <div class="campo">
                        <label for="apellido_paterno_evaluador">Apellido Paterno</label><br>
                        <input type="text" name="apellido_paterno_evaluador" id="apellido_paterno_evaluador" placeholder="Apellido Paterno" required>
                    </div>
                    <div class="campo">
                        <label for="apellido_materno_evaluador">Apellido Materno</label><br>
                        <input type="text" name="apellido_materno_evaluador" id="apellido_materno_evaluador" placeholder="Apellido Materno" required>
                    </div>
                    <div class="campo">
                        <label for="nombre_evaluador">Nombre(s)</label><br>
                        <input type="text" name="nombre_evaluador" id="nombre_evaluador" placeholder="Nombre(s)" required>
                    </div>
                </div>
                <div class="campo">
                    <label for="correo">Correo:</label><br>
                    <input type="email" name="correo" id="correo" placeholder="Ingresa el correo del evaluador" required>
                </div>
                <div class="campo">
                    <label for="is_profesor">¿Es usted Profesor de la Universidad de Guadalajara?</label><br>
                    <input type="radio" name="is_profesor" value="SÍ" id="Profesor" onclick="visible('.s-3',false);limpiar_insti();" placeholder="Apellido Paterno"><label for="Profesor">Sí</label>
                    <input type="radio" name="is_profesor" value="NO" id="Alumno" onclick="visible('.s-3',true);add_req_insti();" placeholder="Apellido Paterno"><label for="Alumno">No</label>
                </div>
            </div>
    
        </section>
    
        <section class="s-3">
            <div class="container">
                <h2 class="center">Institución</h2>
                <div class="col-2">
                    <div class="campo">
                        <label for="nombre_institucion">Por favor, indique la institucion a la que pertenece</label><br>
                        <input type="text" name="nombre_institucion" id="nombre_institucion" placeholder="Institución Perteneciente">
                    </div>
                    <div class="campo">
                        <label for="area_investigacion">¿Cuál es su área de investigación?</label><br>
                        <input type="text" name="area_investigacion" id="area_investigacion" placeholder="Área de investigación">
                    </div>
                </div>
            </div>
        </section>
    
        <section class="s-76">
            <div class="container">
                <h2 class="center">Datos Investigación</h2>
                <div class="campo">
                    <label for="codigo">Escriba por favor su código UdeG</label><br>
                    <input type="text" name="codigo" id="codigo" onKeyPress="if(this.value.length==10) return false;" placeholder="Código UdeG">
                </div>
                <div class="campo">
                    <label for="area_investigacion_proyecto">¿Cuál es su área de investigación?</label><br>
                    <input type="text" name="area_investigacion_proyecto" id="area_investigacion_proyecto" placeholder="Área Investigación Proyecto">
                </div>
            </div>
        </section>
    
        <section>
            <div class="container">
                <h2 class="center">Datos del Estudiante a evaluar</h2>
    
                  <div class="campo">
                      <label for="id_trabajo">Ingrese el ID del Trabajo a Evaluar</label><br>
                      <input type="text" name="id_trabajo" id="id_trabajo" placeholder="ID Trabajo" onchange="detectarEO();" required>
                  </div>
                <div class="col-3">
                    <div class="campo">
                        <label for="apellido_paterno_estudiante">Apellido Paterno</label><br>
                        <input type="text" name="apellido_paterno_estudiante" id="apellido_paterno_estudiante" placeholder="Apellido Paterno"  required>
                    </div>
                    <div class="campo">
                        <label for="apellido_materno_estudiante">Apellido Materno</label><br>
                        <input type="text" name="apellido_materno_estudiante" id="apellido_materno_estudiante" placeholder="Apellido Materno" required>
                    </div>
                    <div class="campo">
                        <label for="nombre_estudiante">Nombre(s)</label><br>
                        <input type="text" name="nombre_estudiante" id="nombre_estudiante" placeholder="Nombre(s)" required>
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
                <div class="grid-tabla-ap">
                    <p>1.1 El estudiante acudió vestido formalmente, adecuado para su presentación.</p>
                    <div><input type="radio" name="is_formal" id="is_formal_si" value="2"><label for="is_formal_si">Sí</label></div>
                    <div><input type="radio" name="is_formal" id="is_formal_no" value="0"><label for="is_formal_no">No</label></div>
                </div>
                <div class="grid-tabla-ap">
                    <p>1.2 El estudiante se presentó puntualmente a su exposición</p>
                    <div><input type="radio" name="is_puntual" id="is_puntualSi" value="2"><label for="is_puntualSi">Sí</label></div>
                    <div><input type="radio" name="is_puntual" id="is_puntualNo" value="0"><label for="isPuntualNo">No</label></div>
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
                <div class="grid-tabla">
                    <p>2.1 La coherencia y relación entre TÍTULO y OBJETIVOS del proyecto expresados en la presentación es:</p>
                    <div><input type="radio" name="rubrica21" id="rubrica215" value="Excelente"><label for="rubrica215" >Excelente</label></div>
                    <div><input type="radio" name="rubrica21" id="rubrica214" value="Muy"><label for="rubrica214">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica21" id="rubrica213" value="Aceptable"><label for="rubrica213">Aceptable</label></div>
                    <div><input type="radio" name="rubrica21" id="rubrica212" value="Regular"><label for="rubrica212">Regular</label></div>
                    <div><input type="radio" name="rubrica21" id="rubrica211" value="Malo"><label for="rubrica211">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>2.2 La coherencia y relación entre OBJETIVOS e HIPÓTESIS del proyecto expresados en la presentación es:</p>
                    <div><input type="radio" name="rubrica22" id="rubrica225" value="Excelente"><label for="rubrica225">Excelente</label></div>
                    <div><input type="radio" name="rubrica22" id="rubrica224" value="Muy"><label for="rubrica224">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica22" id="rubrica223" value="Aceptable"><label for="rubrica223">Aceptable</label></div>
                    <div><input type="radio" name="rubrica22" id="rubrica222" value="Regular"><label for="rubrica222">Regular</label></div>
                    <div><input type="radio" name="rubrica22" id="rubrica221" value="Malo"><label for="rubrica221">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>2.3. Los antecedentes presentados permiten entender los fundamentos en los que se sustenta el proyecto.</p>
                    <div><input type="radio" name="rubrica23" id="rubrica235" value="Excelente"><label for="rubrica235">Excelente</label></div>
                    <div><input type="radio" name="rubrica23" id="rubrica234" value="Muy"><label for="rubrica234">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica23" id="rubrica233" value="Aceptable"><label for="rubrica233">Aceptable</label></div>
                    <div><input type="radio" name="rubrica23" id="rubrica232" value="Regular"><label for="rubrica232">Regular</label></div>
                    <div><input type="radio" name="rubrica23" id="rubrica231" value="Malo"><label for="rubrica231">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>2.4 La relación entre los OBJETIVOS y la METODOLOGÍA descrita en el proyecto es:</p>
                    <div><input type="radio" name="rubrica24" id="rubrica245" value="Excelente"><label for="rubrica245">Excelente</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica244" value="Muy"><label for="rubrica244">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica243" value="Aceptable"><label for="rubrica243">Aceptable</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica242" value="Regular"><label for="rubrica242">Regular</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica241" value="Malo"><label for="rubrica241">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>2.5 El vocabulario empleado por el(la) alumno(a), durante la explicación de su presentación es:</p>
                    <div><input type="radio" name="rubrica24" id="rubrica245" value="Excelente"><label for="rubrica245">Excelente</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica244" value="Muy"><label for="rubrica244">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica243" value="Aceptable"><label for="rubrica243">Aceptable</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica242" value="Regular"><label for="rubrica242">Regular</label></div>
                    <div><input type="radio" name="rubrica24" id="rubrica241" value="Malo"><label for="rubrica241">Malo</label></div>
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
                <div class="grid-tabla">
                    <p>3.1 La explicación de las propiedades de la materia en función de la estructura de los compuestos presentados en el proyecto es:</p>
                    <div><input type="radio" name="rubrica31" id="rubrica315" value="Excelente"><label for="rubrica315">Excelente</label></div>
                    <div><input type="radio" name="rubrica31" id="rubrica314" value="Muy"><label for="rubrica314">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica31" id="rubrica313" value="Aceptable"><label for="rubrica313">Aceptable</label></div>
                    <div><input type="radio" name="rubrica31" id="rubrica312" value="Regular"><label for="rubrica312">Regular</label></div>
                    <div><input type="radio" name="rubrica31" id="rubrica311" value="Malo"><label for="rubrica311">Malo</label></div>
                </div>
                
                <div class="grid-tabla">
                    <p>3.2 El correcto lenguaje químico de los compuestos presentes en el proyecto es aplicado por el estudiante de manera:</p>
                    <div><input type="radio" name="rubrica32" id="rubrica325" value="Excelente"><label for="rubrica325">Excelente</label></div>
                    <div><input type="radio" name="rubrica32" id="rubrica324" value="Muy"><label for="rubrica324">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica32" id="rubrica323" value="Aceptable"><label for="rubrica323">Aceptable</label></div>
                    <div><input type="radio" name="rubrica32" id="rubrica322" value="Regular"><label for="rubrica322">Regular</label></div>
                    <div><input type="radio" name="rubrica32" id="rubrica321" value="Malo"><label for="rubrica321">Malo</label></div>
                </div>
    
                <div class="grid-tabla">
                    <p>3.3 El conocimiento de los elementos de seguridad de las sustancias químicas utilizadas en el proyecto es:</p>
                    <div><input type="radio" name="rubrica33" id="rubrica335" value="Excelente"><label for="rubrica335">Excelente</label></div>
                    <div><input type="radio" name="rubrica33" id="rubrica334" value="Muy"><label for="rubrica334">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica33" id="rubrica333" value="Aceptable"><label for="rubrica333">Aceptable</label></div>
                    <div><input type="radio" name="rubrica33" id="rubrica332" value="Regular"><label for="rubrica332">Regular</label></div>
                    <div><input type="radio" name="rubrica33" id="rubrica331" value="Malo"><label for="rubrica331">Malo</label></div>
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
                <div class="grid-tabla">
                    <p>4.1 El estudiante emplea la transformación o síntesis de compuestos con características definidas.</p>
                    <div><input type="radio" name="rubrica41" id="rubrica415" value="Excelente"><label for="rubrica415">Excelente</label></div>
                    <div><input type="radio" name="rubrica41" id="rubrica414" value="Muy"><label for="rubrica414">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica41" id="rubrica413" value="Aceptable"><label for="rubrica413">Aceptable</label></div>
                    <div><input type="radio" name="rubrica41" id="rubrica412" value="Regular"><label for="rubrica412">Regular</label></div>
                    <div><input type="radio" name="rubrica41" id="rubrica411" value="Malo"><label for="rubrica411">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>4.2 El alumno evidencia el conocimiento pertinente sobre la extracción / aislamiento o purificación de compuestos.</p>
                    <div><input type="radio" name="rubrica42" id="rubrica425" value="Excelente"><label for="rubrica425">Excelente</label></div>
                    <div><input type="radio" name="rubrica42" id="rubrica424" value="Muy"><label for="rubrica424">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica42" id="rubrica423" value="Aceptable"><label for="rubrica423">Aceptable</label></div>
                    <div><input type="radio" name="rubrica42" id="rubrica422" value="Regular"><label for="rubrica422">Regular</label></div>
                    <div><input type="radio" name="rubrica42" id="rubrica421" value="Malo"><label for="rubrica421">Malo</label></div>
                </div>
                <div class="grid-tabla">
                    <p>4.3 El estudiante evidencia el conocimiento relativo al control / optimización / modificación de los parámetros de la síntesis o transformación química.</p>
                    <div><input type="radio" name="rubrica43" id="rubrica435" value="Excelente"><label for="rubrica435">Excelente</label></div>
                    <div><input type="radio" name="rubrica43" id="rubrica434" value="Muy"><label for="rubrica434">Muy Bueno</label></div>
                    <div><input type="radio" name="rubrica43" id="rubrica433" value="Aceptable"><label for="rubrica433">Aceptable</label></div>
                    <div><input type="radio" name="rubrica43" id="rubrica432" value="Regular"><label for="rubrica432">Regular</label></div>
                    <div><input type="radio" name="rubrica43" id="rubrica431" value="Malo"><label for="rubrica431">Malo</label></div>
                </div>
            </div>
        </section>
    
        <section>
            <div class="container">
                <h2 class="center">Dictamen</h2>
                <div>
                    <label for="evaluacion">Con base a cada rubro evaluado, usted considera al(a) alumno(a): </label><br>
                    <input type="radio" name="evaluacion" id="aprobado" value="Aprobado" required><label for="aprobado">Aprobado</label><br>
                    <input type="radio" name="evaluacion" id="reprobado" value="Reprobado"><label for="reprobado">Reprobado</label><br>
                </div>
                <div class="campo">
                    <label for="observaciones">Observaciones</label><br>
                    <input type="text" name="observaciones" id="observaciones" placeholder="Observaciones">
                </div>
            </div>
        </section>
    
        <div class="container-btn" id="container-btn">
            <input type="submit" value="Enviar" class="btn">
        </div>
    </form>
</body>
</html>