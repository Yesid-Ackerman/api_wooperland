<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogroController extends Controller
{
    public function logros(){
        return view('views_stiven.logros');
    }
}
