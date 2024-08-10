<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EligeTemasController extends Controller
{
    public function Elige_tema_1(){
        return view('Elige_Temas_Haiver.Elige_Tema_Vista-1_Haiver');
    }

    public function Elige_tema_2(){
        return view('Elige_Temas_Haiver.Elige_Tema_Vista-2_Haiver');
    }

    public function Elige_tema_3(){
        return view('Elige_Temas_Haiver.Elige_Tema_Vista-3_Haiver');
    }
}
