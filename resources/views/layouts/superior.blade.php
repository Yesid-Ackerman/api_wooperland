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
    @yield('content') @section('content')
    <footer class="bg-[#FFD116] bg-opacity-80 flex flex-auto justify-center items-center text-6xl">
        <h1 class="text-black">WOOPERLAND</h1>
    </footer>
</body>
