<body class="flex flex-col min-h-screen bg-[url('/public/img/image1.png')] bg-cover bg-center" style="font-family: 'Happy Monkey', sans-serif">
    <nav class=" h-24 flex pr-12 pl-12 items-center">
        <div class="w-1/2">
            <span class="border-solid  text-center rounded-lg h-12 w-1/3  text-4xl flex items-center justify-start cursor-pointer">
                <img class="h-20 w-20 rounded-full mx-2" src="{{asset('/img/Foto_perfil_imgs/image.png') }}" alt="">Camilo
            </span>
        </div>
        <span class="inline-grid grid-cols-3 w-1/2">
            <span class="bg-[#BAEC9D] text-center rounded-lg h-14 w-3/4 text-4xl flex items-center justify-start cursor-pointer">
                <img class="h-12 rounded-full px-4" src="{{asset('/img/imageneshome/image copy.png') }}" alt="">9000
            </span>
            <span class="bg-[#87C9FF] text-center rounded-lg h-14 w-3/4 text-4xl flex items-center justify-start cursor-pointer">
                <img class="h-12 rounded-full px-4" src="{{asset('/img/imageneshome/image copy 2.png') }}" alt=""> 12
            </span>
            <span class="bg-[#FFFFF6] text-center rounded-lg h-14 w-3/4 text-4xl flex items-center justify-start cursor-pointer">
                <img class="h-12 rounded-full px-4" src="{{asset('/img/imageneshome/image copy 3.png') }}" alt=""> 300
            </span>
        </span>            
    </nav>
    @yield('content') @section('content')
    <footer class="bg-[#FFD116] bg-opacity-80 flex flex-auto justify-center items-center text-6xl">
        <h1 class="text-black">WOOPERLAND</h1>
    </footer>
</body>