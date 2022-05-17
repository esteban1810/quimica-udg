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


    <form method="POST" action="{{route('rubrica.store',['rubrica'=>$rubrica])}}">
        @include('rubricas.layouts.form')
    </form>
</body>
</html>