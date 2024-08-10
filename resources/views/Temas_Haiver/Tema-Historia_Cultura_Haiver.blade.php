<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_Temas_Haiver/style-historia_cultura_Haiver.css') }}">
</head>

<body>

    <div id="header">
        <h1>Crea un Nuevo Perfil</h1>
    </div>

    <div class="botones">
        <button class="general-btn"> <a href="{{ route('General') }}">General</a></button>
        <button class= "temas-btn"><a href="{{ route('Tema.Matematicas') }}">Temas</a></button>
        <button class="elegir-temas-btn"><a href="{{ route('Elige.Tema.1') }}">Elige los temas</a></button>
    </div>

    <ul class="temas-lista">
        <li class="Matemáticas">
            <a href="{{ route('Tema.Matematicas') }}">
                <h1>&#x1F522; Matemáticas </h1>
        </li></a>
        <li class="Lenguaje_Lectura">
            <a href="{{ route('Tema.Lenguaje.Lectura') }}">
                <h1>&#x1F4D6; Lenguaje y Lectura </h1>
        </li></a>
        <li class="Ciencias_Naturales">
            <a href="{{ route('Tema.Ciencias.Naturales') }}">
                <h1>&#x1F331; Ciencias naturales </h1>
        </li></a>
        <li class="Arte_Creatividad">
            <a href="{{route('Tema.Arte.Creatividad')}}">
                <h1>&#x1F3A8; Arte y Creatividad </h1>
        </li></a>
        <li class="Historia_Cultura">
            <a href="{{ route('Tema.Historia.Cultura') }}">
                <h1>&#x1F4DA; Historia y Cultura </h1>
        </li></a>
        <li class="Astronomía">
            <a href="{{ route('Tema.Astronomia') }}">
                <h1>&#x1F52C; Astronomía</h1>
        </li></a>
        <li class="Geografía">
            <a href="{{ route('Tema.Geografia') }}">
                <h1> &#x1F5FA; Geografía </h1>
        </li></a>
        <li class="Programación">
            <a href="{{ route('Tema.Programacion') }}">
                <h1>&#x1F4BB; Programación </h1>
        </li></a>
        <li class="Acertijos">
            <a href="{{ route('Tema.Acertijos') }}">
            <h1>&#x1F3B2; Acertijos </h1>
        </li></a>
        <li class="Tecnología">
            <a href="{{ route('Tema.Tecnologia') }}">
                <h1>&#x1F4F1; Tecnología </h1>
        </li></a>
    </ul>


    <div class="descripcion_historia_cultura">
        <div class="imfo_historia_cultura">
            <h2>&#x1F4DA; Historia y Cultura</h2>
            <p>Un pueblo encantado donde los cuentos y las leyendas cobran vida. Los niños pueden explorar historias
                clásicas, vestirse como personajes y participar en juegos y actividades relacionadas con la narrativa.
            </p>
            <img src="{{ asset('/imgs/Temas_imgs_Haiver/img-historia.png') }}" alt="Historia_Cultura">
        </div>
    </div>


</body>

</html>