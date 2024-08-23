<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/niveles_Brayan/isla1-2_Brayan.css') }}">
</head>

<body>
    <div class="flecha_izquierda">
        <a href="{{ route('home') }}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt="flecha izquierda">
        </a>
    </div>
    <div class="boton1"> <a href="{{ route('nivel1') }}">
            <img src="{{asset('imgs/niveles/boton.png')}}" alt="boton"></a>
    </div>

    <div class="container">
        <div class="subject">
            <img src="{{asset('imgs/niveles/img.nivel1.PNG')}}"alt="Matemáticas">
        </div>
        <div class="recorrido">
            <img src="{{asset('imgs/niveles/recorrido.png')}}" alt="reccorido">
        </div>

        <div class="subject">
            <img src="{{asset('imgs/niveles/img.nivel2.PNG')}}" alt="Lenguaje y Lectura">
        </div>

        <div class="titulo1">
            <img src="{{asset('imgs/niveles/titulo1.png')}}" alt="Matemáticas">

        </div>
        <br>
        <div class="titulo2">
            <img src="{{asset('imgs/niveles/titulo2.png')}}" alt="lenguaje y lectura">
        </div>
    </div>
    <div class="boton2"> <a href="{{route('nivel2')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>
    <div class="flecha_derecha">
        <a href="{{route('isla3-4')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt=" flecha derecha">
        </a>
    </div>
</body>

</html>
