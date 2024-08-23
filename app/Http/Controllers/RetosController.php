<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetosController extends Controller
{
    public function conjuntos () {
        return view('retos_Brayan.conjuntos_Brayan');
    }

    public function conjuntos_result () {
        return view('retos_Brayan.conjuntos-result_Brayan');
    }

    public function conjuntos_result2 () {
        return view('retos_Brayan.conjuntos-result2_Brayan');
    }

    public function conjuntos_result3 () {
        return view('retos_Brayan.conjuntos-result3_Brayan');
    }

    
    public function reto_nuevo () {
        return view('retos_Brayan.reto-nuevo_Brayan');
    }

    
    public function reto_principal () {
        return view('retos_Brayan.reto-principal_Brayan');
    }


    
}
