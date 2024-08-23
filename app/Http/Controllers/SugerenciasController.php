<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SugerenciasController extends Controller
{
    public function Sugerencia1 () {
        return view('sugerencias_Brayan.sugerencia1_Brayan');
    }

    public function Sugerencia2 () {
        return view('sugerencias_Brayan.sugerencia2_Brayan');
    }
}
