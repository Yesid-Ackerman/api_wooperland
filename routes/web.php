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


Route::get('/store',[StoreController::class,'create']);
Route::get('/article',[StoreController::class,'article'])->name('article');