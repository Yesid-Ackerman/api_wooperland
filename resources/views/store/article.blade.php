<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col" style="font-family: 'Happy Monkey', sans-serif">
    <nav class="bg-[#EF476F] h-24 flex pr-12 pl-12 items-center">
        <div class="w-1/2">
            <button class="items-center justify-center border-y-2 border-black rounded-full bg-white">
                <svg class="h-12 w-12 text-neutral-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </button>
        </div>
        <span class="inline-grid grid-cols-4 gap-4 w-1/2">
            <span class="bg-white text-center rounded-lg h-12 text-3xl flex items-center justify-center cursor-pointer">
                <i class="fas fa-trophy mr-2"></i> Logros
            </span>
            <span class="bg-[#87C9FF] text-center rounded-lg h-12 text-3xl flex items-center justify-between cursor-pointer">
                <i class="fas fa-medal mr-2"></i> Medallas
            </span>
            <span class="bg-[#FFFFF6] text-center rounded-lg h-12 text-3xl flex items-center justify-end cursor-pointer">
                <i class="fas fa-gem mr-2"></i> Diamantes
            </span>
            <span class="bg-[#BAEC9D] text-center rounded-lg h-12 text-3xl flex items-center justify-around cursor-pointer">
                <i class="fas fa-user mr-2"></i> UsuariO
            </span>
        </span>
    </nav>
    <main class="min-h-[80vh] bg-blue-400 flex justify-start items-center">
        <div class="w-1/6 flex flex-col justify-center items-center">
            <span class="grid grid-rows-4 grid-flow-col gap-y-16 w-2/3 h-1/2 items-center">
                <span class="bg-[#F6CE48] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                    <i class="fas fa-trophy mr-2"></i> CABEZA
                </span>
                <span class="bg-[#F6CE48] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                    <i class="fas fa-medal mr-2"></i> ROSTRO
                </span>
                <span class="bg-[#F6CE48] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                    <i class="fas fa-gem mr-2"></i> TORZO
                </span>
                <span class="bg-[#F6CE48] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                    <i class="fas fa-user mr-2"></i> ACCESORIO
                </span>
            </span>
        </div>
    </main>    
    </main>
    <footer class="bg-[#FFD116] h-24 flex justify-center items-center text-6xl">
        <h1 class="text-black">WOOPERLAND</h1>
    </footer>
</body>
</html>