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
<body class="flex flex-col" style="font-family: happy monkey">
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
                <i class="fas fa-user mr-2"></i> Usuario
            </span>
    </nav>
    <main class="min-h-[80vh] bg-[url('/public/img/image1.png')] bg-cover flex bg-center items-center justify-center"> {{-- Si bajamos a 80vh podemos descomentar el footer, solo si se baja a 80 el minimo de H --}}
        <div class="flex-inline flex-col ">
            <div class="inline-grid grid-cols-2 gap-4">
                <div class="border-solid rounded-3xl bg-white bg-opacity-60 h-64 w-64 border-0 border-gray-600 border-opacity-50 text-center flex flex-col justify-evenly pb-6 font-light px-8">
                    <svg class="h-20 w-20 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>Usuario OP 60 BORDER 0 OPACITY 50 Font light Pading 8</div>
                </div>
                <div class="border-solid rounded-3xl bg-white bg-opacity-50 h-64 w-64 border-2 border-gray-600 border-opacity-60 text-center flex flex-col justify-evenly pb-6 font-normal px-6">
                    <svg class="h-20 w-20 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>OP 50 BORDER 2 OPACITY 60 Font normal Pading 6</div>
                </div>
                <div class="border-solid rounded-3xl bg-white bg-opacity-40 h-64 w-64 border-4 border-gray-600 border-opacity-70 text-center flex flex-col justify-evenly pb-6 font-bold px-4">
                    <svg class="h-20 w-20 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>OP 40 BORDER 4 OPACITY 70 Font bold Pading 4</div>
                </div>
                <div class="border-solid rounded-3xl bg-white bg-opacity-30 h-64 w-64 border-8 border-gray-600 border-opacity-80 text-center flex flex-col justify-evenly pb-6 font-semibold px-2">
                    <svg class="h-20 w-20 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>OP 30 BORDER 8 OPACITY 80 Font Semibold Pading 2</div>
                </div>
            </div>            
        </div>      
    </main>
    <footer class="bg-[#FFD116] h-24 flex justify-center items-center text-6xl">
        <h1 class="text-white">WOOPERLAND</h1>
    </footer>
</body>
</html>