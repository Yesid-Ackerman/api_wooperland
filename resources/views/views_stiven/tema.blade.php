<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @Vite(['resources/css/css_stiven/stylestema.css','<public><imagenes_stiven>imagenesTemas']){{--corregir --}}
</head>
<body>
    <header>
        <div class="head">
            <h1><b>Progreso de nick</b></h1>
            <div class="line"></div>
        </div>
        <div class="back">
            <a href="#"><img src="imagenes_stiven/imagenesTemas/image.png" alt="" class="back-img"></a>
        </div>
    </header>
    <main>
        <h1 class="title"><b>Matemáticas</b></h1>

        <div class="progress">
            <div class="grafic">
                <label for="file"><h1 class="title-progress">Porcentaje completado</h1></label>
                <progress id="file" max="100" value="50">70%</progress>
            </div>
        </div>
        <!-- grafica -->
        <div class="grafic2">
            <canvas id="myChart"></canvas>
        </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="js/js_stiven/script.js" defer></script>
        <!-- grafica -->

        <h1 class="top"><b>Top niveles mas jugados</b></h1>

        <!-- navs -->
        <div class="flex-container">
        <!-- cards1 -->
        <div class="nav1">
            <div class="body">
                <img class= "imgbody" src="imagenes_stiven/imagenesTemas/image copy.png" alt="">
            </div>
            <div class="foot">
                <p class="p1">Nivel 2</p>
                <p class="p2">5 veces</p>
            </div>
        </div>
        <!-- cards1 -->

        <!-- cards2 -->
        <div class="nav2">
            <div class="body2">
                <img class= "imgbody2" src="imagenes_stiven/imagenesTemas/image copy 2.png" alt="">
            </div>
            <div class="foot2">
                <p class="p1-foot2">Nivel 3</p>
                <p class="p2-foot2">4 veces</p>
            </div>
        </div>
        <!-- cards3 -->
        <div class="nav3">
            <div class="body3">
                <img class= "imgbody3" src="imagenes_stiven/imagenesTemas/image copy 3.png" alt="">
            </div>
            <div class="foot3">
                <p class="p1-foot3">Nivel 1</p>
                <p class="p2-foot3">1 veces</p>
            </div>
        </div>
        <!-- cards3 -->
    </div>
    </main>
</body>
</html>