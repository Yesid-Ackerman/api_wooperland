<body class=" bg-[#FFD166]  flex items-center justify-center" style="font-family: 'Happy Monkey', sans-serif">
    <div class="flex items-center justify-center h-screen w-full custom-bg">
        <div class="flex justify-center items-center w-1/2">
            <img class="object-contain h-auto w-full rounded-lg" src="http://127.0.0.1:8000/img/image.png" alt="">
        </div>
        <div class="bg-[#EF476F] flex flex-col justify-between h-full items-center w-2/3 rounded-l-3xl">              
            @yield('content') @section('content')
        </div>
    </div>
</body>
