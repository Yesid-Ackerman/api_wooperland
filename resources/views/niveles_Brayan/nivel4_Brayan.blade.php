<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/niveles_Brayan/nivel4_Brayan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Pajji&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="flecha">
            <a href="{{route('isla3-4')}}">
                <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt="flecha inicio">
            </a>
        </div>
        <div class="estrella1"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella1"></div>
        <div class="estrella2"><img src="{{ asset('imgs/niveles/estrella2.png') }}" alt="estrella2"></div>
        <div class="estrella3"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella3"></div>

        <div class="estrella4"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella1"></div>
        <div class="estrella5"><img src="{{ asset('imgs/niveles/estrella2.png') }}" alt="estrella2"></div>
        <div class="estrella6"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella3"></div>

        <div class="estrella7"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella1"></div>
        <div class="estrella8"><img src="{{ asset('imgs/niveles/estrella2.png') }}" alt="estrella2"></div>
        <div class="estrella9"><img src="{{ asset('imgs/niveles/estrella1.png') }}" alt="estrella3"> </div>

        <div class="wooper1">
            <img src="{{ asset('imgs/niveles/wooper4.png') }}" alt="wooper de arte">
        </div>
        <div class="level1">
            <h1>1</h1>
        </div>
        <div class="level2">
            <img src="{{ asset('imgs/niveles/candado.png') }}" alt="candado2">
        </div>
        <div class="level3">
            <img src="{{ asset('imgs/niveles/candado.png') }}" alt="candado3">
        </div>
        <div class="descripcion">
            <img class="desArte" src="{{ asset('imgs/niveles/arte.png') }}" alt="anuncio">
            <div class="cerrar"> <a href="{{route('nivel4-1')}}">
                    <img src="{{ asset('imgs/niveles/x.png') }}" alt="cerrar">
                </a>
            </div>

        </div>

</body>

</html>
