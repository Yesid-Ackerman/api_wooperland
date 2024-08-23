<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/retos_Brayan/conjuntos_Brayan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="cereza"><a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/cereza.png') }}" alt="cereza">
            </a>
        </div>
        <div class="fresa">
            <a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/fresa.png') }}" alt="fresa">
            </a>
        </div>
        <div class="manzana">
            <a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/manzana.png') }}" alt="manzana">
            </a>
        </div>
        <div class="mango"><a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/mango.png') }}" alt="mango">
            </a>
        </div>
        <div class="banana"><a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/banana.png') }}" alt="banana">
            </a>
        </div>
        <div class="limon"><a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/limon.png') }}" alt="limon">
            </a>
        </div>
        <div class="subject1">
            <img src="{{ asset('imgs/retos/brillo1.png') }}" alt="brillo amarillo">
        </div>
        <div class="subject2">
            <img src="{{ asset('imgs/retos/brillo2.png') }}" alt="brillo rojo">
        </div>
        <div class="wooper">
            <img src="{{ asset('imgs/retos/wooper.reto.png') }}" alt="wooper reto">
        </div>
        <div class="dialogo2"><a href="{{ route('conjuntos-result') }}">
                <img src="{{ asset('imgs/retos/dialogo2.png') }}" alt="glo de texto2">
                <h1>Para tener exíto en este desafío<br>
                    tienes que organizar las frutas<br>
                    según su color dentro del<br>
                    conjunto correspondiente<br>
                    Buena suerte</h1>
            </a>
        </div>
    </div>
</body>

</html>
