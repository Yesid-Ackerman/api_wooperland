<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias</title>
    <link rel="stylesheet" href="{{ asset('css/retos_Brayan/conjuntos-result3_Brayan.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>
<body>       
    <div class="container">
    
        <div class="subject1">
            <img src="{{ asset('imgs/retos/brillo1.png') }}" alt="brillo amarillo">

            <div class="mango"><a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/mango.png') }}" alt="mango">
            </a>
            </div>
            <div class="banana"><a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/banana.png') }}" alt="banana">
            </a>
            </div>
            <div class="limon"><a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/limon.png') }}" alt="limon">
            </a>
            </div>
        </div> 
        <h1>3</h1>   
        <div class="subject2">
            <img src="{{ asset('imgs/retos/brillo2.png') }}" alt="brillo rojo">

            
            <div class="cereza"><a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/cereza.png') }}" alt="cereza">
            </a>
            </div>
            <div class="fresa">
                <a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/fresa.png') }}" alt="fresa">
            </a>
            </div>
            <div class="manzana">
                <a href="{{ asset('conjuntos-result3') }}">
                <img src="{{ asset('imgs/retos/manzana.png') }}" alt="manzana">
            </a>
            </div>
        </div>
        <h2>3</h2>
        <div class="destellosd">
            <img src="{{ asset('imgs/retos/destellos.png') }}"  alt="destellos">
        </div>
        <div class="premio">
            <a href="{{ asset('reto-nuevo') }}">
            <img src="{{ asset('imgs/retos/premio.png') }}"  alt="premio del reto">
            <h1>felicitaciones</h1>
            <h2>has desbloqueado un <br>
                sombrero. Vuelve el dia<br> 
                de mañana para desbloquear<br>
                 mas accesorios</h2>
                </a>
        </div>
        <div class="recompensa">
            <img class="destello2" src="{{ asset('imgs/retos/destellos.png') }}"  alt="destello2">
            <img class="dinero"  src="{{ asset('imgs/retos/dinero.png') }}"  alt="bolsa de dinero">
        </div>
    </div>
</body>
</html>
