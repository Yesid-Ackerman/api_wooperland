<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/niveles_Brayan/isla3-4_Brayan.css') }}">
</head>

<body>
    <div class="flecha_izquierda"> <a href="{{route('isla1-2')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt="flecha izquierda">
        </a>
    </div>
    <div class="boton1"> <a href="{{route('nivel3')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}" alt="boton"></a>
    </div>

    <div class="container">
        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel3.png')}}"  alt="ciencias naturales">
        </div>
        <div class="recorrido">
            <img src="{{asset('imgs/niveles/recorrido.png')}}"  alt="reccorido">
        </div>

        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel4.png')}}"  alt="arte y creatividad">
        </div>

        <div class="titulo1">
            <img src="{{asset('imgs/niveles/titulo3.png')}}"  alt="ciencias naturales">

        </div>
        <br>
        <div class="titulo2">
            <img src="{{asset('imgs/niveles/titulo4.png')}}"  alt="arte y creatividad">
        </div>
    </div>
    <div class="boton2"> <a href="{{route('nivel4')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>
    <div class="flecha_derecha">
        <a href="{{route('isla5-6')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}"alt=" flecha derecha">
        </a>
    </div>
</body>

</html>
