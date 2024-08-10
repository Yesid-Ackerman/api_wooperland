<?php

use App\Http\Controllers\ClaveController;
use App\Http\Controllers\ConfigurarTuController;
use App\Http\Controllers\ControlParentalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\LogroController;
use App\Http\Controllers\LogrosTController;
use App\Http\Controllers\MedallaController;
use App\Http\Controllers\TiempoUsoController;
use App\Http\Controllers\EligeTemasController;
use App\Http\Controllers\FotoPerfilController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//rutas stiven
Route::get('home',[HomeController::class,'home'])->name('home');
Route::get('clave',[ClaveController::class,'clave']);
Route::get('conftu',[ConfigurarTuController::class,'conftu']); //requiere JS por eso esta vacía
Route::get('controlparental',[ControlParentalController::class,'controlparental'])->name('controlparental'); 
Route::get('informes',[InformeController::class,'informes']);
Route::get('logros',[LogroController::class,'logros']);
Route::get('logrosT',[LogrosTController::class,'logrost']);
Route::get('medalla',[MedallaController::class,'medalla']);
Route::get('tema',[TemasController::class,'temas']);
Route::get('tiempouso',[TiempoUsoController::class,'tiempouso']);

//RUTAS TEMAS (HAIVER)
Route::get('/Acertijos',[TemaController::class,'Acertijos'])->name('Tema.Acertijos');
Route::get('/Arte_Creatividad',[TemaController::class,'Arte_Creatividad'])->name('Tema.Arte.Creatividad');
Route::get('/Astronomia',[TemaController::class, 'Astronomia'])->name('Tema.Astronomia');
Route::get('/Ciencias_Naturales',[TemaController::class, 'Ciencias_Naturales'])->name('Tema.Ciencias.Naturales');
Route::get('/Geografia',[TemaController::class,'Geografia'])->name('Tema.Geografia');
Route::get('/Historia_Cultura', [TemaController::class,'Historia_Cultura'])->name('Tema.Historia.Cultura');  
Route::get('/Lenguaje_Lectura', [TemaController::class,'Lenguaje_Lectura'])->name('Tema.Lenguaje.Lectura');  
Route::get('/Matematicas', [TemaController::class,'Matematicas'])->name('Tema.Matematicas');  
Route::get('/Programacion', [TemaController::class,'Programacion'])->name('Tema.Programacion');  
Route::get('/Tecnologia', [TemaController::class,'Tecnologia'])->name('Tema.Tecnologia');

//RUTAS GENERAL (HAIVER)
Route::get('/General',[GeneralController::class, 'General'])->name('General');

//RUTAS ESCOGER IMAGEN (HAIVER)
Route::get('/EIMG_1',[FotoPerfilController::class, 'EIMG_1'])->name('EIMG_1');
Route::get('/EIMG_2',[FotoPerfilController::class, 'EIMG_2'])->name('EIMG_2');
Route::get('/EIMG_3',[FotoPerfilController::class, 'EIMG_3'])->name('EIMG_3');
Route::get('/EIMG_4',[FotoPerfilController::class, 'EIMG_4'])->name('EIMG_4');
Route::get('/EIMG_5',[FotoPerfilController::class, 'EIMG_5'])->name('EIMG_5');

//RUTAS IMAGEN POR CONSEGIR (HAIVER)
Route::get('/CIMG_1',[FotoPerfilController::class, 'CIMG_1'])->name('CIMG_1');
Route::get('/CIMG_2',[FotoPerfilController::class, 'CIMG_2'])->name('CIMG_2');
Route::get('/CIMG_3',[FotoPerfilController::class, 'CIMG_3'])->name('CIMG_3');

//RUTAS ELIGE TEMAS (HAIVER)
Route::get('/Elige_tema_1',[EligeTemasController::class, 'Elige_tema_1'])->name('Elige.Tema.1');
Route::get('/Elige_tema_2',[EligeTemasController::class, 'Elige_tema_2'])->name('Elige.Tema.2');
Route::get('/Elige_tema_3',[EligeTemasController::class, 'Elige_tema_3'])->name('Elige.Tema.3');

//RUTAS YESITH

//LOGIN
Route::get('/log',[LoginController::class,'create'])->name('log');
Route::get('/insdata',[LoginController::class,'insert'])->name('pass');
Route::get('/teminos',[LoginController::class,'terminos'])->name('terminos');

//ARTICULOS
Route::get('/article',[StoreController::class,'article'])->name('article');