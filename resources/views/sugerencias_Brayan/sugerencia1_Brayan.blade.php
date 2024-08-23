<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista de retos</title>
    <link rel="stylesheet" href="{{ asset('css/sugerencias_Brayan/sugerencia1_Brayan.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>
<body>
    <header>
<div class="boton1"><a href="{{ route('home') }}" >
    <img src="{{ asset('imgs/sugerencias/flecha.png') }}"  alt="flecha">
</a>
</div>
<div class="titulo1">
    <img src="{{ asset('imgs/sugerencias/titulo1.png') }}" alt="sugerencia1">
    <h1>Sugerencias</h1>
</div>

<div class="container">
    <div class="matematicas"><a href="../sugerencias/sugerencia2.html">
        <img src="{{ asset('imgs/sugerencias/matematicas.png') }}"  alt="matematicas">
        <div class="admiracion">
            <img src="{{ asset('imgs/sugerencias/admiracion.png') }}"  alt="admiracion">
        </div>
        <h1>Matematicas</h1>
    </a>
    </div>
    <div class="lenguaje">
        <img src="{{ asset('imgs/sugerencias/lenguaje.png') }}"  alt="lenguaje">
        <h1>Lenguaje y Lectura</h1>
    </div>
    <div class="ciencias">
        <img src="{{ asset('imgs/sugerencias/ciencias.png') }}"  alt="ciencias">
        <h1>Ciencias naturales</h1>
    </div>
    <div class="arte">
        <img src="{{ asset('imgs/sugerencias/arte.png') }}"  alt="arte">
        <div class="admiracion">
            <img src="{{ asset('imgs/sugerencias/admiracion.png') }}"  alt="admiracion">
        </div>
        <h1>Arte y creatividad</h1>
    </div>
    <div class="historia">
        <img src="{{ asset('imgs/sugerencias/historia.png') }}"  alt="historia">
        <h1>Historia y cultura</h1>
    </div>
    <div class="astronomia">
        <img src="{{ asset('imgs/sugerencias/astronomia.png') }}" alt="astronomia">
        <h1>Ciencias del espacio</h1>
    </div>
    <div class="geografia">
        <img src="{{ asset('imgs/sugerencias/geografia.png') }}" alt="geografia">
        <h1>Geografia</h1>
    </div>
    <div class="programacion">
        <img src="{{ asset('imgs/sugerencias/programacion.png') }}" alt="programacion">
        <h1>Programacion</h1>
    </div>
    <div class="acertijos">
        <img src="{{ asset('imgs/sugerencias/acertijos.png') }}"alt="acertijos">
        <h1>Acertijos</h1>
    </div>
    <div class="tecnologia">
        <img src="{{ asset('imgs/sugerencias/tecnologia.png') }}" alt="tecnologia">
        <h1>tTecnologia</h1>
    </div>


</div>
    </header>
</body>
</html>