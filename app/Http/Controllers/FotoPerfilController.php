<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoPerfilController extends Controller
{
    //METODOS ESCOGER IMAGEN 
    public function EIMG_1 (){
        return view('Foto_Perfil_Haiver.EIMG_Vista_1_Haiver');
    }

    public function EIMG_2 (){
        return view('Foto_Perfil_Haiver.EIMG_Vista_2_Haiver');
    }

    public function EIMG_3 (){
        return view('Foto_Perfil_Haiver.EIMG_Vista_3_Haiver');
    }

    public function EIMG_4 (){
        return view('Foto_Perfil_Haiver.EIMG_Vista_4_Haiver');
    }

    public function EIMG_5 (){
        return view('Foto_Perfil_Haiver.EIMG_Vista_5_Haiver');
    }

    //METODOS IMAGEN POR CONSEGIR
    public function CIMG_1 (){
        return view('Foto_Perfil_Haiver.CIMG_Vista_1_Haiver');
    }

    public function CIMG_2 (){
        return view('Foto_Perfil_Haiver.CIMG_Vista_2_Haiver');
    }

    public function CIMG_3 (){
        return view('Foto_Perfil_Haiver.CIMG_Vista_3_Haiver');
    }
}
