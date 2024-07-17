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
<body class="flex flex-col min-h-screen bg-[url('/public/img/image1.png')] bg-cover bg-center" style="font-family: 'Happy Monkey', sans-serif">
    <nav class="bg-[#EF476F] h-24 flex pr-12 pl-12 items-center">
        <div class="w-1/2">
            <button class="items-center justify-center">
                <svg class="h-12 w-12 text-neutral-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </button>
        </div>
        <span class="inline-grid grid-cols-4 gap-4 w-1/2">
            <span class="bg-[#BAEC9D] text-center rounded-lg h-12 text-3xl flex items-center justify-around cursor-pointer">
                <i class="fas fa-trophy mr-2"></i> Logros
            </span>
            <span class="bg-[#87C9FF] text-center rounded-lg h-12 text-3xl flex items-center justify-around cursor-pointer">
                <i class="fas fa-medal mr-2"></i> Medallas
            </span>
            <span class="bg-[#FFFFF6] text-center rounded-lg h-12 text-3xl flex items-center justify-around cursor-pointer">
                <i class="fas fa-gem mr-2"></i> Diamantes
            </span>
            <span class=" border-solid border-black border-2 text-center rounded-lg h-12 text-3xl flex items-center justify-around cursor-pointer">
                <i class="fas fa-user mr-2"></i> Usuario
            </span>
    </nav>
    <main class="flex-grow min-h-[80vh] flex items-center justify-around px-8">
        <div class="h-64 w-64">
        </div>        
        <div class="flex flex-col items-center">
            <div class="text-6xl mb-4">TIENDA</div>
            <div class="inline-grid grid-cols-2 gap-4 justify-end">
            <a href="{{ route('article') }}">
                <div class="border-solid rounded-3xl bg-white bg-opacity-50 h-64 w-64 border-4 border-black border-opacity-80 text-center flex flex-col justify-center pb-6 font-light px-2 cursor-pointer text-3xl">
                    <svg class="h-28 w-28 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0" />
                    </svg>
                    <div>CLOTHES</div>
                </div>
            </a>
                <div class="border-solid rounded-3xl bg-white bg-opacity-50 h-64 w-64 border-4 border-black border-opacity-80 text-center flex flex-col justify-center pb-6 font-light px-2 cursor-pointer text-3xl">
                    <svg class="h-28 w-28 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="12" cy="12" r="10" />  <polygon points="10 8 16 12 10 16 10 8" />
                    </svg>
                    <div>SONGS</div>
                </div>
                <div class="border-solid rounded-3xl bg-white bg-opacity-50 h-64 w-64 border-4 border-black border-opacity-80 text-center flex flex-col justify-center pb-6 font-light px-2 cursor-pointer text-3xl">
                    <svg class="h-28 w-28 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="12 8 12 12 14 14" />  <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                    </svg>
                    <div>COMMING SOON</div>
                </div>
                <div class="border-solid rounded-3xl bg-white bg-opacity-50 h-64 w-64 border-4 border-black border-opacity-80 text-center flex flex-col justify-center pb-6 font-light px-2 cursor-pointer text-3xl">
                    <svg class="h-28 w-28 text-gray-900 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z"/> <polyline points="12 8 12 12 14 14" />  <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                    </svg>
                    <div>COMMING SOON</div>
                </div>
            </div>
        </div>    
        <div class="h-80 w-80 bg-[url('/public/img/wooper.png')] bg-cover flex bg-center"> 
        </div>
    </main>    
    <footer class="bg-[#FFD116] bg-opacity-80 flex flex-auto justify-center items-center text-6xl">
        <h1 class="text-black">WOOPERLAND</h1>
    </footer>
</body>
</html>
