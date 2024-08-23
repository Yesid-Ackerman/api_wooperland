<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista de retos</title>
    <link rel="stylesheet" href="{{ asset('css/retos_Brayan/reto-principal_Brayan.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="fondo2">
            <img src="{{ asset('imgs/retos/fondo2.png') }}"  alt="rocas">
        </div>
        <div class="flecha"><a href="{{ route('home') }}" >
                <img src="{{ asset('imgs/retos/flecha.png') }}"  alt="flecha">
            </a>
        </div>
        <div class="wooper-reto">
            <img src="{{ asset('imgs/retos/wooper.reto.png') }}"  alt="wooper-reto">
        </div>
        <div class="contexto">
            <h1>Desafio de la semana</h1>

            <img src="{{ asset('imgs/retos/dialogo.png') }}"  alt="nube de dialogo">
            <h2>Desafío de conjuntos de números,<br>
                aprende a organizar y agrupar <br>
                objetos según sus características </h2>
        </div>
        <div class="boton"><a href="{{ route('conjuntos') }}" >
                <img src="{{ asset('imgs/retos/boton.png') }}"  alt="boton de incio del reto">
                <h1>Vamos</h1>
            </a>
        </div>
    </header>
</body>

</html>
