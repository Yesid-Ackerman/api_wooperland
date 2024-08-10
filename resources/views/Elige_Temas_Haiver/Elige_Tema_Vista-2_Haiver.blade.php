<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles_Elige_Temas_Haiver/style_Elige_Tema_Vista-2_Haiver.css') }}">
</head>

<body>
    <div class="botones">
        <button class="general-btn"> <a href="{{route('General')}}">General</a></button>
        <button class= "temas-btn"><a href="{{route('Tema.Matematicas')}}">Temas</a></button>
        <button class="elegir-temas-btn"><a href="{{route('Elige.Tema.1')}}">Elige los temas</a></button>
    </div>

    <div id="header">
        <h1>Crea un Nuevo Perfil</h1>
    </div>

    <div class="container_elige-temas">
        <h1 class="titulo-elige_temas"> ¿Que temas deseas aprender?</h1>
        <ul class="temas-lista">
            <li class="Matemáticas">
                <h1>&#x1F522; Matemáticas </h1>
            </li>
            <li class="Lenguaje_Lectura">
                <h1>&#x1F4D6; Lenguaje y Lectura </h1>
            </li>
            <li class="Ciencias_Naturales">
                <h1>&#x1F331; Ciencias naturales </h1>
            </li>
            <li class="Arte_Creatividad">
                <h1>&#x1F3A8; Arte y Creatividad </h1>
            </li>
            <li class="Historia_Cultura">
                <h1>&#x1F4DA; Historia y Cultura </h1>
            </li>
            <li class="Astronomía">
                <h1>&#x1F52C; Astronomía</h1>
            </li>
            <li class="Geografía">
                <h1> &#x1F5FA; Geografía </h1>
            </li>
            <li class="Programación">
                <h1>&#x1F4BB; Programación </h1>
            </li>
            <li class="Acertijos">
                <h1>&#x1F3B2; Acertijos </h1>
            </li>
            <li class="Tecnología">
                <h1>&#x1F4F1; Tecnología </h1>
            </li>
        </ul>
    </div>

    <div class="container-prioridad">
        <h1 class="titulo-prioridad"> Prioridad</h1>
        <ul class="lista-prioridad">
            <li class="prioridad-alta"> Alta </li>
            <li class="prioridad-media"> Media </li>
            <li class="prioridad-baja"> Baja </li>
        </ul>
    </div>

    <div class="container-botom-listo">
        <img class="icono-botom" src="{{ asset('/imgs/Foto_Perfil_imgs_Haiver/icono-botom.png') }}">
        <h1 class="texto-botom"><a href="{{route('Elige.Tema.3')}}"> Listo</a></h1>
    </div>
</body>

</html>
