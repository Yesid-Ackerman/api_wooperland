<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/log',[LoginController::class,'create'])->name('log');
Route::get('/insdata',[LoginController::class,'insert'])->name('pass');
Route::get('/teminos',[LoginController::class,'terminos'])->name('terminos');

Route::get('/article',[StoreController::class,'article']);
// routes/web.php
Route::get('/clasico', [StoreController::class, 'showClasico'])->name('clasico');
Route::get('/nuevo', [StoreController::class, 'showNuevo'])->name('nuevo');
Route::get('/especial', [StoreController::class, 'showEspecial'])->name('especial');
Route::get('/legendario', [StoreController::class, 'showLegendario'])->name('legendario');
