<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_General_Haiver/style_General_Vista-1_Haiver.css') }}">
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

    <div class="container-general">
        <img class="sin-foto_general" src="{{ asset('/imgs/Foto_Perfil_imgs_Haiver/sin_foto_perfil.png') }}">
        <h1 class="texto-foto_perfil"> Foto de Perfil</h1>

        <input type="text-1" placeholder="   *camilito_2004*">
        <input type="text-2" placeholder="   *Correo del Padre*">
        <input type="text-3" placeholder="   *Fecha del Niñ@*">
        <input type="text-4" placeholder="   *Masculino/Femenino*">

        <h2 class="nombre_usuario"> Nombre De Usuario</h2>
        <h2 class="correo_padre"> Correo Electronico</h2>
        <h2 class="fecha_nacimiento"> Fecha de Nacimiento</h2>
        <h2 class="Genero_usuario"> Genero</h2>
    </div>

    <div class="container-botom-siguiente">
        <h1 class="botom-siguiente"> <a href="{{ route('Elige.Tema.1') }}">Siguiente </a></h1>
    </div>




</body>

</html>
