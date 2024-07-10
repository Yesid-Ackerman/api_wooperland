<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooperland</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background-color: #FFD166;
        }
        .custom-pink {
            background-color: #EF476F;
        }
        .stepper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding: 0 10px;
        }
        .step {
            background-color: #4A5568;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 9999px;
            text-align: center;
            width: 40px;
        }
        .step.active {
            background-color: #EF476F;
        }
        .connector {
            width: 30px;
            height: 10px;
            background-color: #f8fbff;
        }
    </style>
</head>

<body class="bg-orange-500 h-screen flex items-center justify-center">
    <div class="flex items-center justify-center h-screen w-full custom-bg">
        <div class="flex items-center justify-center w-full max-w-screen-lg">
            <div class="custom-bg flex justify-center items-center w-1/2 rounded-lg">
                <img class="object-contain h-auto w-full rounded-lg" src="{{ asset('img/image.png') }}" alt="">
            </div>
            <div class="custom-pink flex flex-col justify-center items-center w-1/2 rounded-lg">
                <div class="stepper">
                    <div class="step active">1</div>
                    <div class="connector"></div>
                    <div class="step">2</div>
                    <div class="connector"></div>
                    <div class="step">3</div>
                    <div class="connector"></div>
                    <div class="step">4</div>
                </div>
                <div class="flex flex-col justify-center items-center gap-4 mt-4">
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded w-4/5">Botón 1</button>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded w-4/5">Botón 2</button>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded w-4/5">Botón 3</button>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded w-4/5">Botón 4</button>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
