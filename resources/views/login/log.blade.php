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
    </style>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="flex h-full w-full">
        
        <div class="flex-1 custom-bg flex flex-col items-start">
            <img class="object-contain h-5/6 w-6/6 rounded-l-lg my-auto ml-0" src="{{ asset('img/image.png') }}" alt="">
        </div>
        <div class="flex-1 custom-pink flex flex-col justify-center items-center p-6 rounded-r-lg w-full -ml-64">
        </div>
    </div>
</body>

</html>
