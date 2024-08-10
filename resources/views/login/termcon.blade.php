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

@extends('layouts.lateral')

@section('content')
<div class="stepper mt-8 mb-2 flex justify-between items-center transform scale-110">
    <a href="{{ route('log') }}">
        <div class="step active bg-yellow-300 text-[#EF476F] text-3xl rounded-full w-16 h-16 flex justify-center items-center border-2 border-white">
            1
        </div>
    </a>
    <div class="connector bg-yellow-300 h-4 w-48 border-y-2 border-white animate-connector-change"></div>
    <a href="{{ route('pass') }}">
        <div class="step active bg-yellow-300 text-[#EF476F] text-3xl rounded-full w-16 h-16 flex justify-center items-center border-2 border-white">
            2
        </div>
    </a>
    <div class="connector bg-yellow-300 h-4 w-48 border-y-2 border-white animate-connector-change"></div>
    <a href="{{ route('terminos') }}">
        <div class="step active bg-yellow-300 text-[#EF476F] text-3xl rounded-full w-16 h-16 flex justify-center items-center border-2 border-white">
            3
        </div>
    </a>
</div>

<div class="flex flex-col justify-center items-center w-full flex-grow mt-0.5">                          
    <div class="bg-white min-h-[80vh] w-5/6 rounded-xl border-black border-4 p-8">
        <div class="text-center">
            <h1 class="text-4xl mb-6">Términos y Condiciones</h1>
            <p class="text-2xl px-8 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id metus in odio posuere sollicitudin non eu magna. In nec varius ligula, id auctor velit. Pellentesque vehicula, leo vitae maximus rutrum, neque nisl interdum ligula, vel suscipit mi odio a dui. Aenean lacinia lacus eget lacus aliquet, vel pellentesque dui faucibus. Ut malesuada nulla at ullamcorper ullamcorper. Aliquam ut diam purus. Duis dignissim placerat massa, luctus gravida ligula dapibus eu.
                In hac habitasse platea dictumst. Aenean molestie dolor urna, et maximus erat porttitor sed. Aenean vitae nisi fringilla, mattis ligula at, imperdiet augue. Quisque eget odio ac libero gravida dignissim nec congue lectus. Vestibulum fermentum neque lobortis, maximus massa sed, rutrum erat. Duis ut eros eu nibh condimentum tristique. Nulla ac orci tincidunt, malesuada mi vel, sollicitudin mi. Cras quis efficitur diam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            </p>
            <div class="w-full flex justify-center items-center pt-6">
                <input id="terms-checkbox" type="checkbox" class="h-6 w-6 mr-2 rounded-full border-2 border-black focus:ring-2 focus:ring-black" required>
                <label for="terms-checkbox" class="text-2xl">Acepto los Términos y Condiciones</label>
            </div>
            <div class="pt-6 flex justify-center">
                <button class="bg-[#EF476F] text-white font-bold py-2 px-4 rounded-xl h-16 w-2/6 hover:bg-[#FFD166] hover:text-black flex items-center justify-center">
                    <span class="text-2xl"><a href="{{ route('home') }}">Aceptar</a></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
</html>
