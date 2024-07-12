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

<body class=" flex items-center justify-center">
    <div class="flex items-center justify-center h-screen w-full custom-bg">

        <div class="custom-bg flex justify-center items-center w-1/2">
            <img class="object-contain h-auto w-full rounded-lg" src="http://127.0.0.1:8000/img/image.png" alt="">
        </div><div class="custom-pink flex flex-col justify-between h-full items-center w-2/3 rounded-l-3xl">
            <div class="stepper mt-8 mb-2 flex justify-between items-center transform scale-110">
                <div class="step active bg-yellow-300 text-white text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black ">1</div>
                <div class="connector bg-white h-6 w-48 border border-y-0 border-black"></div>
                <div class="step bg-white text-pink-500 text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">2</div>
                <div class="connector bg-white h-6 w-48 border border-y-0 border-black"></div>
                <div class="step bg-white text-pink-500 text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">3</div>
            </div>
            <div class="flex flex-col justify-center items-center w-full flex-grow mt-0.5">  
                         
                <div class="grid grid-cols-1 gap-6 justify-items-center w-full  mt-0">
                    <button class="bg-gray-300 hover:bg-blue-600 text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex pl-40 items-center justify-start border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"></path>  <path d="M17.788 5.108A9 9 0 1021 12h-8"></path>
                        </svg>
                       Ingresar con Google
                    </button>
                    <button class="bg-gray-300 hover:bg-green-600 text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex pl-40 items-center justify-start border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>  <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        Ingresar con Microsoft
                    </button>
                    <button class="bg-gray-300 hover:bg-yellow-600 text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex pl-40 items-center justify-start border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                        Ingresar con Facebook
                    </button>
                    <button class="bg-gray-300 hover:bg-red-600 text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex pl-40 items-center justify-start border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>  <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Ingresar como Invitado
                    </button>
                </div>
                
                
            </div>
        </div>
        
        
        
    </div>














</body>
</html>
