<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemasController extends Controller
{
    public function temas(){
        return view('views_stiven.tema');
    }
}
