<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo uso</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @Vite(['resources/css/css_stiven/styleTU.css','<public><imagenes_stiven>imagenesTU'])
</head>
<body>
    <header>
        <div class="head">
            <h1><b>Progreso de nick</b></h1>
            <div class="line"></div>
        </div>
        <div class="back">
            <a href="../controlParental/controlparental.html"><img src="imagenes_stiven/imagenesTU/image.png" alt="" class="back-img"></a>
        </div>
    </header>
    <main>
        <h1 class="title-time"><b>Tiempo de uso</b></h1>
        <h2 class="time-num"><b>2 horas 30 minutos</b></h2>
        <h3>Esta semana</h3>

        <!-- grafica -->
        <div class="grafic">
            <canvas id="myChart"></canvas>
        </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="js/js_stiven/script2.js"></script>
        <!-- grafica -->

        <div class="config-time">
            <div class="line2"></div>
        <a class="config" href="../configurarTiempo/configurarTu.html">
            <div class="config-block">
                <p class="p1">Temporizador de la aplicación</p>
                <p class="p2">2 horas 30 minutos</p>
                <img src="imagenes_stiven/imagenesTU/image copy 2.png" alt="" class="clock">
            </div> 
        </a>
        </div>
    </main>
    <footer>
        <div class="foot">
            <a href="">
             <div class="figure-home">
                <img src="imagenes_stiven/imagenesTU/image copy 11.png" alt="" class="home">
             </div>
            </a>

            <a href="">
             <div class="figure-profile">
                <img src="imagenes_stiven/imagenesTU/image copy 12.png" alt="" class="profile">
             </div>
            </a>
        </div>
    </footer>
</body>
</html>