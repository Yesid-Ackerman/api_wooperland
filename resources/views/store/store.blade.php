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
</head>

@extends('layouts.superior')

@section('content')
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
@endsection