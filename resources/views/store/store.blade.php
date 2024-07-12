<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .custom-nav {
            background-color: #EF476F;
        }
    </style>
</head>
<body class="flex flex-col">
    <nav class="custom-nav h-24 flex pr-12 pl-12 items-center">
        <div class="w-1/2">
            <button class="items-center justify-center border-y-2 border-black rounded-full bg-white">
                <svg class="h-8 w-8 text-neutral-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
        </button>
        </div>
        <span class="inline-grid grid-cols-4 gap-4 items-center w-1/2">
            <span class="bg-white text-center rounded-lg h-12 text-3xl flex items-center justify-center">
                <i class="fas fa-trophy mr-2"></i> Logros
            </span>
            <span class="bg-[#87C9FF] text-center rounded-lg h-12 text-3xl flex items-center justify-center">
                <i class="fas fa-medal mr-2"></i> Medallas
            </span>
            <span class="bg-[#FFFFF6] text-center rounded-lg h-12 text-3xl flex items-center justify-center">
                <i class="fas fa-gem mr-2"></i> Diamantes
            </span>
            <span class="bg-[#BAEC9D] text-center rounded-lg h-12 text-3xl flex items-center justify-center">
                <i class="fas fa-user mr-2"></i> Usuario
            </span>
        </span>
    </nav>
    <main class="bg-[url('/public/img/image1.png')] bg-cover bg-center min-h-[90vh]"> {{-- Si bajamos a 80vh podemos descomentar el footer, solo si se baja a 80 el minimo de H --}}
        <h1 class="text-white text-center text-9xl">o</h1>
    </main>
    {{-- <footer class="custom-nav h-20 ">
        <h1 class="text-white text-center">Hola desde Footer</h1>
    </footer> --}}
</body>
</html>