@extends('layouts.app')

@section('content')
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

    @yield('content')
@stop