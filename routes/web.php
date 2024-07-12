<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/log',[LoginController::class,'create']);
Route::get('/store',[LoginController::class,'store']);
Route::get('/article',[LoginController::class,'index']);