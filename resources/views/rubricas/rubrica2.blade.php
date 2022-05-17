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
            <h1>Rubrica E2</h1>
        </div>
    </nav>
    <div class="container">
        <p>
            Estimado Profesor Evaluador:<br><br>

            Este formulario tiene como finalidad evaluar las competencias de los Proyectos Modulares 3 y 4 (PM1 y PM2) en todas sus variantes.<br>
            De antemano, muchas gracias por su apoyo.<br><br>

            Atentamente,<br>
            M. en Ing. Bernardo Gudiño Guzmán<br>
            Coordinador de la Licenciatura en Química<br>
            CUCEI - UdeG
        </p>
    </div>



    <form action="https://script.google.com/macros/s/AKfycbwuOpvQQeTgSPx9yPY6IlCTafB8YURinzAqhJrOXDweGzeSEjkfxYVsKZJtdHscPo5q/exec" method="POST">
    <section>
        <div class="container">
            <h2 class="center">Datos del(a) Evaluador(a)</h2>
            <div class="col-3">
                <div class="campo">
                    <label for="apEvaluador">Apellido Paterno</label><br>
                    <input type="text" name="apEvaluador" id="apEvaluador" placeholder="Apellido Paterno" required>
                </div>
                <div class="campo">
                    <label for="amEvaluador">Apellido Materno</label><br>
                    <input type="text" name="amEvaluador" id="amEvaluador" placeholder="Apellido Materno" required>
                </div>
                <div class="campo">
                    <label for="nombreEvaluador">Nombre(s)</label><br>
                    <input type="text" name="nombreEvaluador" id="nombreEvaluador" placeholder="Nombre(s)" required>
                </div>
            </div>
            <div class="campo">
                <label for="correo">Correo:</label><br>
                <input type="email" name="correo" id="correo" placeholder="Ingresa el correo del evaluador" required>
            </div>
            <div class="campo">
                <label for="isProfesor">¿Es usted Profesor de la Universidad de Guadalajara?</label><br>
                <input type="radio" name="isProfesor" value="SÍ" id="Profesor" onclick="visible('.s-3',false);limpiar_insti();" placeholder="Apellido Paterno"><label for="Profesor">Sí</label>
                <input type="radio" name="isProfesor" value="NO" id="Alumno" onclick="visible('.s-3',true);add_req_insti();" placeholder="Apellido Paterno"><label for="Alumno">No</label>
            </div>
        </div>

    </section>

    <section class="s-3">
        <div class="container">
            <h2 class="center">Institución</h2>
            <div class="col-2">
                <div class="campo">
                    <label for="nombreInstitucion">Por favor, indique la institucion a la que pertenece</label><br>
                    <input type="text" name="nombreInstitucion" id="nombreInstitucion" placeholder="Institución Perteneciente">
                </div>
                <div class="campo">
                    <label for="areaInvestigacion">¿Cuál es su área de investigación?</label><br>
                    <input type="text" name="areaInvestigacion" id="areaInvestigacion" placeholder="Área de investigación">
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
                <label for="areaInvestigacionRB">¿Cuál es su área de investigación?</label><br>
               <input type="text" name="areaInvestigacionProyecto" id="areaInvestigacionProyecto" placeholder="Área De Investigación">                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="center">Datos del Estudiante a evaluar</h2>
            <div class="campo">
                <label for="idTrabajo">Ingrese el ID del Trabajo a Evaluar</label><br>
                <input type="text" name="idTrabajo" id="idTrabajo" placeholder="ID Trabajo" onchange="detectarEO();" required>
            </div>
            <div class="col-3">
                <div class="campo">
                    <label for="apEstudiante">Apellido Paterno</label><br>
                    <input type="text" name="apEstudiante" id="apEstudiante" placeholder="Apellido Paterno" required>
                </div>
                <div class="campo">
                    <label for="amEstudiante">Apellido Materno</label><br>
                    <input type="text" name="amEstudiante" id="amEstudiante" placeholder="Apellido Materno" required>
                </div>
                <div class="campo">
                    <label for="nombreEstudiante">Nombre(s)</label><br>
                    <input type="text" name="nombreEstudiante" id="nombreEstudiante" placeholder="Nombre(s)" required>
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
                <div><input type="radio" name="isFormal" id="isFormalSi" value="2" checked required><label for="isFormalSi">Sí</label></div>
                <div><input type="radio" name="isFormal" id="isFormalNo" value="0"><label for="isFormalNo">No</label></div>
            </div>
            <div class="grid-tabla-ap">
                <p>1.2 El estudiante se presentó puntualmente a su exposición</p>
                <div><input type="radio" name="isPuntual" id="isPuntualSi" value="2" checked required><label for="isPuntualSi">Sí</label></div>
                <div><input type="radio" name="isPuntual" id="isPuntualNo" value="0"><label for="isPuntualNo">No</label></div>
            </div>
        </div>
    </section>


    
    <section>
        <div class="container">
            <h2 class="justify">2. Rúbrica para evaluar Proyecto Modular
                <br> 3: Análisis y Caracterización y Proyecto Modular 
                <br> 4: Prevención y Solución de Problemas del Área Química</h2>

            <div class="grid-tabla-th display-none">
                <p>Punto a evaluar</p>
                <p>Excelente</p>
                <p>Muy Bueno</p>
                <p>Aceptable</p>
                <p>Regular</p>
                <p>Malo</p>
            </div>
            <div class="grid-tabla">
                <p>2.1 La coherencia y relación entre RESULTADO(S) [positivos o negativos] y OBJETIVO(S) expresados en el proyecto es:</p>
                <div><input type="radio" name="pae21" id="pae21" value="5" required><label for="pae21">Excelente</label></div>
                <div><input type="radio" name="pae21" id="pae21" value="4"><label for="pae21">Muy Bueno</label></div>
                <div><input type="radio" name="pae21" id="pae21" value="3"><label for="pae21">Aceptable</label></div>
                <div><input type="radio" name="pae21" id="pae21" value="2"><label for="pae21">Regular</label></div>
                <div><input type="radio" name="pae21" id="pae21" value="1"><label for="pae21">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>2.2 La calidad de la DISCUSIÓN relatada sobre el(los) resultados es:</p>
                <div><input type="radio" name="pae22" id="pae22" value="5" required><label for="pae22">Excelente</label></div>
                <div><input type="radio" name="pae22" id="pae22" value="4"><label for="pae22">Muy Bueno</label></div>
                <div><input type="radio" name="pae22" id="pae22" value="3"><label for="pae22">Aceptable</label></div>
                <div><input type="radio" name="pae22" id="pae22" value="2"><label for="pae22">Regular</label></div>
                <div><input type="radio" name="pae22" id="pae22" value="1"><label for="pae22">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>2.3 La presentación de los datos del proyecto en términos de los requerimientos de la TÉCNICA DE CARACTERIZACIÓN Y/O ANÁLISIS (v.g. unidades en los ejes, criterios estadísticos, entre otros), es:</p>
                <div><input type="radio" name="pae23" id="pae23" value="5" required><label for="pae23">Excelente</label></div>
                <div><input type="radio" name="pae23" id="pae23" value="4"><label for="pae23">Muy Bueno</label></div>
                <div><input type="radio" name="pae23" id="pae23" value="3"><label for="pae23">Aceptable</label></div>
                <div><input type="radio" name="pae23" id="pae23" value="2"><label for="pae23">Regular</label></div>
                <div><input type="radio" name="pae23" id="pae23" value="1"><label for="pae23">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>2.4 La estructura (gramatical y semántica) de la CONCLUSIÓN es:</p>
                <div><input type="radio" name="pae24" id="pae24" value="5" required><label for="pae24">Excelente</label></div>
                <div><input type="radio" name="pae24" id="pae24" value="4"><label for="pae24">Muy Bueno</label></div>
                <div><input type="radio" name="pae24" id="pae24" value="3"><label for="pae24">Aceptable</label></div>
                <div><input type="radio" name="pae24" id="pae24" value="2"><label for="pae24">Regular</label></div>
                <div><input type="radio" name="pae24" id="pae24" value="1"><label for="pae24">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>2.5 El vocabulario empleado por el(la) alumno(a), durante la explicación de su presentación es:</p>
                <div><input type="radio" name="pae25" id="pae25" value="5" required><label for="pae25">Excelente</label></div>
                <div><input type="radio" name="pae25" id="pae25" value="4"><label for="pae25">Muy Bueno</label></div>
                <div><input type="radio" name="pae25" id="pae25" value="3"><label for="pae25">Aceptable</label></div>
                <div><input type="radio" name="pae25" id="pae25" value="2"><label for="pae25">Regular</label></div>
                <div><input type="radio" name="pae25" id="pae25" value="1"><label for="pae25">Malo</label></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="center">3. Competencias del Módulo 3: Análisis y Caracterización</h2>


            <div class="grid-tabla-th display-none">
                <p>Punto a evaluar</p>
                <p>Excelente</p>
                <p>Muy Bueno</p>
                <p>Aceptable</p>
                <p>Regular</p>
                <p>Malo</p>
            </div>
            <div class="grid-tabla">
                <p>3.1 El estudiante evidencia el uso de la caracterización y/o análisis de compuestos.</p>
                <div><input type="radio" name="pae31" id="pae31" value="5" required><label for="pae31">Excelente</label></div>
                <div><input type="radio" name="pae31" id="pae31" value="4"><label for="pae31">Muy Bueno</label></div>
                <div><input type="radio" name="pae31" id="pae31" value="3"><label for="pae31">Aceptable</label></div>
                <div><input type="radio" name="pae31" id="pae31" value="2"><label for="pae31">Regular</label></div>
                <div><input type="radio" name="pae31" id="pae31" value="1"><label for="pae31">Malo</label></div>
            </div>
            
            <div class="grid-tabla">
                <p>3.2 El alumno utiliza el adecuado conocimiento sobre las técnicas de análisis y/o caracterización utilizadas en su proyecto.</p>
                <div><input type="radio" name="pae32" id="pae32" value="5" required><label for="pae32">Excelente</label></div>
                <div><input type="radio" name="pae32" id="pae32" value="4"><label for="pae32">Muy Bueno</label></div>
                <div><input type="radio" name="pae32" id="pae32" value="3"><label for="pae32">Aceptable</label></div>
                <div><input type="radio" name="pae32" id="pae32" value="2"><label for="pae32">Regular</label></div>
                <div><input type="radio" name="pae32" id="pae32" value="1"><label for="pae32">Malo</label></div>
            </div>

            <div class="grid-tabla">
                <p>3.3 La interpretación de los datos obtenidos de las técnicas de caracterización y/o análisis presentes en su proyecto es:</p>
                <div><input type="radio" name="pae33" id="pae33" value="5" required><label for="pae33">Excelente</label></div>
                <div><input type="radio" name="pae33" id="pae33" value="4"><label for="pae33">Muy Bueno</label></div>
                <div><input type="radio" name="pae33" id="pae33" value="3"><label for="pae33">Aceptable</label></div>
                <div><input type="radio" name="pae33" id="pae33" value="2"><label for="pae33">Regular</label></div>
                <div><input type="radio" name="pae33" id="pae33" value="1"><label for="pae33">Malo</label></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="center">4. Competencias del Módulo 4: Prevención y Solución de Problemas del Área Química</h2>

            <div class="grid-tabla-th display-none">
                <p>Punto a evaluar</p>
                <p>Excelente</p>
                <p>Muy Bueno</p>
                <p>Aceptable</p>
                <p>Regular</p>
                <p>Malo</p>
            </div>
            <div class="grid-tabla">
                <p>4.1 La evidencia de la aplicación de los conceptos de químicos para la solución o prevención de problemas es.</p>
                <div><input type="radio" name="pae41" id="pae41" value="5" required><label for="pae41">Excelente</label></div>
                <div><input type="radio" name="pae41" id="pae41" value="4"><label for="pae41">Muy Bueno</label></div>
                <div><input type="radio" name="pae41" id="pae41" value="3"><label for="pae41">Aceptable</label></div>
                <div><input type="radio" name="pae41" id="pae41" value="2"><label for="pae41">Regular</label></div>
                <div><input type="radio" name="pae41" id="pae41" value="1"><label for="pae41">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>4.2 Incluye dentro del proyecto aspectos relacionados al cuidado del medioambiente o aspectos relacionados a la interacción con la sociedad.</p>
                <div><input type="radio" name="pae42" id="pae42" value="5" required><label for="pae42">Excelente</label></div>
                <div><input type="radio" name="pae42" id="pae42" value="4"><label for="pae42">Muy Bueno</label></div>
                <div><input type="radio" name="pae42" id="pae42" value="3"><label for="pae42">Aceptable</label></div>
                <div><input type="radio" name="pae42" id="pae42" value="2"><label for="pae42">Regular</label></div>
                <div><input type="radio" name="pae42" id="pae42" value="1"><label for="pae42">Malo</label></div>
            </div>
            <div class="grid-tabla">
                <p>4.3 En términos de generación o aplicación del conocimiento para resolver un problema del ámbito químico. El proyecto es.</p>
                <div><input type="radio" name="pae43" id="pae43" value="5" required><label for="pae43">Excelente</label></div>
                <div><input type="radio" name="pae43" id="pae43" value="4"><label for="pae43">Muy Bueno</label></div>
                <div><input type="radio" name="pae43" id="pae43" value="3"><label for="pae43">Aceptable</label></div>
                <div><input type="radio" name="pae43" id="pae43" value="2"><label for="pae43">Regular</label></div>
                <div><input type="radio" name="pae43" id="pae43" value="1"><label for="pae43">Malo</label></div>
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