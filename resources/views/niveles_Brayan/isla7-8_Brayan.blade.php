<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/niveles_Brayan/isla7-8_Brayan.css') }}">
</head>

<body>
    <div class="flecha_izquierda">
        <a href="{{route('isla5-6')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt="flecha izquierda">
        </a>
    </div>
    <div class="boton1"> <a href="{{route('nivel7')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>

    <div class="container">
        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel7.png')}}"  alt="geografia">
        </div>
        <div class="recorrido">
            <img src="{{asset('imgs/niveles/recorrido.png')}}"  alt="reccorido">
        </div>

        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel8.png')}}"  alt="programacion">
        </div>

        <div class="titulo1">
            <img src="{{asset('imgs/niveles/titulo7.png')}}"  alt="geografia">

        </div>
        <br>
        <div class="titulo2">
            <img src="{{asset('imgs/niveles/titulo8.png')}}"  alt="programacion">
        </div>
    </div>
    <div class="boton2"> <a href="{{route('nivel8')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>
    <div class="flecha_derecha">
        <a href="{{route('isla1-2')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt=" flecha derecha">
        </a>
    </div>
</body>

</html>
