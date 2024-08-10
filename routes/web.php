<?php

use App\Http\Controllers\ClaveController;
use App\Http\Controllers\ConfigurarTuController;
use App\Http\Controllers\ControlParentalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogroController;
use App\Http\Controllers\LogrosTController;
use App\Http\Controllers\MedallaController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\TiempoUsoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/log',[LoginController::class,'create'])->name('log');
Route::get('/insdata',[LoginController::class,'insert'])->name('pass');
Route::get('/teminos',[LoginController::class,'terminos'])->name('terminos');


Route::get('/store',[StoreController::class,'create']);
Route::get('/article',[StoreController::class,'article'])->name('article');

//rutas stiven
Route::get('home',[HomeController::class,'home']);
Route::get('clave',[ClaveController::class,'clave']);
Route::get('conftu',[ConfigurarTuController::class,'conftu']); //requiere JS por eso esta vacía
Route::get('controlparental',[ControlParentalController::class,'controlparental']); 
Route::get('informes',[InformeController::class,'informes']);
Route::get('logros',[LogroController::class,'logros']);
Route::get('logrosT',[LogrosTController::class,'logrost']);
Route::get('medalla',[MedallaController::class,'medalla']);
Route::get('tema',[TemasController::class,'temas']);
Route::get('tiempouso',[TiempoUsoController::class,'tiempouso']);

