<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/niveles_Brayan/isla5-6_Brayan.css') }}">
</head>

<body>
    <div class="flecha_izquierda"><a href="{{route('isla3-4')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt="flecha izquierda">
        </a>
    </div>
    <div class="boton1"> <a href="{{route('nivel5')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>

    <div class="container">
        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel5.png')}}"  alt="historia y cultura">
        </div>
        <div class="recorrido">
            <img src="{{asset('imgs/niveles/recorrido.png')}}" alt="reccorido">
        </div>

        <div class="subject">
            <img src="{{asset('imgs/niveles/nivel6.png')}}"  alt="astronomia">
        </div>

        <div class="titulo1">
            <img src="{{asset('imgs/niveles/titulo5.png')}}"  alt="historia y cultura">

        </div>
        <br>
        <div class="titulo2">
            <img src="{{asset('imgs/niveles/titulo6.png')}}"  alt="astronomia">
        </div>
    </div>
    <div class="boton2"> <a href="{{route('nivel6')}}">
            <img src="{{asset('imgs/niveles/boton.png')}}"  alt="boton"></a>
    </div>
    <div class="flecha_derecha">
        <a href="{{route('isla7-8')}}">
            <img src="{{ asset('imgs/niveles/flecha.izquierda.PNG') }}" alt=" flecha derecha">
        </a>
    </div>
</body>

</html>
