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
            border-radius: 9999px ;
            text-align: center;
            width: 40px;
            cursor: pointer;
        }
        .step.active {
            background-color: #f5ba32;
            cursor: pointer;
        }
        .connector {
            width: 30px;
            height: 10px;
            background-color: #f8fbff;
        }
    </style>
</head>

<body class=" flex items-center justify-center">
    <div class="flex items-center justify-center h-screen w-full custom-bg">

        <div class="custom-bg flex justify-center items-center w-1/2">
            <img class="object-contain h-auto w-full rounded-lg" src="{{ asset('img/image.png') }}" alt="">
        </div>
        <div class="custom-pink flex flex-col justify-between h-full items-center w-2/3 rounded-l-3xl">
            <div class="stepper mb-4">
            <div class="step active">1</div>
            <div class="connector"></div>
            <div class="step">2</div>
            <div class="connector"></div>
            <div class="step">3</div>
            <div class="connector"></div>
            <div class="step">4</div>
            </div>
            <div class="flex flex-col justify-center items-center w-full flex-grow">
            
            </div>
        </div>
    </div>
</body>

</html>
