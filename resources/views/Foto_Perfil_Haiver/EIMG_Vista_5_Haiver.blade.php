<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('css/style_Foto_Perfil_Haiver/style_EIMG_Vista_5_Haiver.css ') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
</head>

<body>
    <a href="{{route('home')}}">
        <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/flecha-img.png')}}" />
    </a>
    <div class="container_imagen">
        <div class="titulo">
            <h2>
                ESCOGER <br />
                IMAGEN
            </h2>
        </div>

        <div class="escoger-imagen">
            <div class="img">
                <a href="{{route('EIMG_3')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/1-img.png')}}" />
                </a>
            </div>
            <div class="img">
                <a href="{{route('EIMG_2')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/2-img.png')}}" />
                </a>
            </div>
            <div class="img">
                <a href="{{route('EIMG_5')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/3-img.png')}}" />
                </a>
            </div>
            <div class="img">
                <a href="{{route('EIMG_4')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/6-img.png')}}" />
                </a>
            </div>

            <div class="img">
                <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/7-img.png')}}" />
            </div>
            <div class="img">
                <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/4-img.png')}}" />
            </div>
            <div class="img">
                <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/5-img.png')}}" />
            </div>
            <div class="img">
                <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/8-img.png')}}" />
            </div>
            <div class="img">
                <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/9-img.png')}}" />
            </div>
        </div>
        <div class="flechas">
            <div class="direccion_izquierda">
                <a href="{{route('EIMG_1')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/flecha-izquierda.png')}}" /></a>
            </div>
            <div class="direccion_derecha">
                <a href="{{route('CIMG_1')}}">
                    <img src="{{asset('imgs/Foto_Perfil_imgs_Haiver/flecha-derecha.png')}}" /></a>
            </div>
        </div>
    </div>

    <div class="container_bio">
        <img class="foto_perfil" src="{{asset('imgs/Foto_Perfil_imgs_Haiver/3-img.png')}}" />
        <img class="fondo_foto_perfil" src="{{asset('imgs/Foto_Perfil_imgs_Haiver/img-fondo-de-perfil-4.png')}}" />
        <h2 class="nombre_usuario">CAMILO_123</h2>
        <h1 class="nombre">CAMILO</h1>

        <h1 class="bio_titulo">Bio</h1>

        <h2 class="campo-1">Genero</h2>
        <h1 class="r_campo-1">Masculino</h1>

        <h2 class="campo-2">
            Tiempo <br />
            Uso
        </h2>
        <h2 class="campo2-2">De</h2>
        <h1 class="r_campo_2">2-hrs</h1>

        <h2 class="campo-3">Amigos</h2>
        <h1 class="r_campo-3">Nick</h1>

        <h2 class="campo-4">Nivel <br />Actual</h2>
        <h1 class="r_campo-4">Nivel-4</h1>

        <h2 class="campo-5_1">Puntuacion</h2>
        <h2 class="campo-5_2">Actual</h2>
        <h1 class="r_campo-5">Tres-</h1>
        <h1 class="r_campo-5_1">Estrellas</h1>
    </div>
    <a href="../../home/home.html">
        <div class="container-finalizar_cambio">
            <h1 class="finalizar-cambio">
                <a href="{{ route('home') }}"> Finalizar Cambio</a>
            </h1>
        </div>
    </a>
</body>

</html>
