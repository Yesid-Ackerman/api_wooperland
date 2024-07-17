<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooperland</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .custom-bg {
            background-color: #FFD166;
        }

        .custom-pink {
            background-color: #EF476F;
        }
    </style>
</head>

<body class="flex items-center justify-center" style="font-family: 'Happy Monkey', sans-serif">
    <div class="flex items-center justify-center h-screen w-full custom-bg">
        <div class="custom-bg flex justify-center items-center w-1/2">
            <img class="object-contain h-auto w-full rounded-lg" src="http://127.0.0.1:8000/img/image.png" alt="">
        </div>
        <div class="custom-pink flex flex-col justify-between h-full items-center w-2/3 rounded-l-3xl">
            <div class="stepper mt-8 mb-2 flex justify-between items-center transform scale-110">
                <a href="{{ route('log') }}">
                    <div class="step active bg-yellow-300 text-white text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">1</div>
                </a>
                <div class="connector bg-yellow-300 h-6 w-48 border border-y-0 border-black"></div>
                <a href="">
                    <div class="step active bg-yellow-300 text-white text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">2</div>
                </a>
                <div class="connector bg-white h-6 w-48 border border-y-0 border-black"></div>
                <a href="{{ route('terminos') }}">
                    <div class="step bg-white text-pink-500 text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">3</div>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center w-full flex-grow mt-0.5">
                <div class="grid grid-cols-1 gap-6 justify-items-center w-full mt-0">
                    <label class="w-2/3 h-30 flex items-center border-4 border-black bg-gray-300 rounded-3xl">
                        <svg class="w-24 h-24 text-gray-700 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <input class="text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-full bg-transparent" type="text" name="names" placeholder="Enter your names">
                    </label>
                    <label class="w-2/3 h-30 flex items-center border-4 border-black bg-gray-300 rounded-3xl">
                        <svg class="w-24 h-24 text-gray-700 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <input class="text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-full bg-transparent" type="text" name="last_names" placeholder="Enter your last names">
                    </label>
                    <label class="w-2/3 h-30 flex items-center border-4 border-black bg-gray-300 rounded-3xl">
                        <svg class="w-24 h-24 text-gray-700 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="4" y="5" width="16" height="16" rx="2" />
                            <line x1="16" y1="3" x2="16" y2="7" />
                            <line x1="8" y1="3" x2="8" y2="7" />
                            <line x1="4" y1="11" x2="20" y2="11" />
                            <line x1="11" y1="15" x2="12" y2="15" />
                            <line x1="12" y1="15" x2="12" y2="18" />
                        </svg>
                        <input class="text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-full bg-transparent" type="date" name="age" placeholder="Enter your age">
                    </label>
                    <label class="w-2/3 h-30 flex items-center border-4 border-black bg-gray-300 rounded-3xl">
                        <svg class="w-24 h-24 text-gray-700 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <input class="text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-full bg-transparent" type="number" name="phone" placeholder="Enter your phone number">
                    </label>
                    <label class="w-2/3 h-30 flex items-center border-4 border-black bg-gray-300 rounded-3xl">
                        <svg class="w-24 h-24 text-gray-700 mx-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <select class="text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-full bg-transparent" name="relationship">
                            <option value="" disabled selected>Select your relationship status</option>
                            <option value="single">Father</option>
                            <option value="married">Mother</option>
                            <option value="divorced">Tutor</option>
                            <option value="widowed">Grandparent</option>
                        </select>
                    </label>
                    <button class="bg-[#FFD166] text-black font-bold py-2 px-4 rounded-xl h-16 w-2/6 hover:bg-white hover:text-[#EF476F] flex items-center justify-center">
                        <a href="{{ route('terminos') }}" class="block h-full w-full text-center py-2 text-2xl">
                            Continuar
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
