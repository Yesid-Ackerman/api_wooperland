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

@extends('layouts.superior')

@section('content')
    <main class="min-h-[80vh]  flex items-center">
        <section class="w-1/6 flex flex-col  items-center">
            <span class="grid grid-rows-4 grid-flow-col gap-y-16 w-2/3 h-1/2 items-center">
                <span class="bg-[#99e2b3] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                CLASICO
                </span>
                <span class="bg-[#b2f3e3] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                NUEVO
                </span>
                <span class="bg-[#d7a3fb] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                ESPECIAL
                </span>
                <span class="bg-[#a496c8] text-center rounded-lg h-16 w-full text-3xl flex items-center justify-center cursor-pointer border-2 border-black">
                LEGENDARIO
                </span>
            </span>
        </section>
        <section class="w-4/6 flex justify-center items-center">
            <div class="grid grid-rows-3 grid-cols-5 gap-4">                
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">1</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">2</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">3</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">4</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">5</div>
                
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">1</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">2</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">3</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">4</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">5</div>
                
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">1</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">2</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">3</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">4</div>
                <div class="bg-white text-center rounded-lg h-40 w-40 border-4 border-black  flex flex-col justify-center font-light  cursor-pointer text-3xl bg-opacity-50">5</div>
            </div>
        </section>
    </main> 
    @endsection
