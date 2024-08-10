<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemasController extends Controller
{
    public function Acertijos (){
        return view('Temas_Haiver.Tema-Acertijos_Haiver');
    }

    public function Arte_Creatividad (){
        return view('Temas_Haiver.Tema-Arte_Creatividad_Haiver');
    }

    public function Astronomia (){
        return view('Temas_Haiver.Tema-Astronomia_Haiver');
    }

    public function Ciencias_Naturales() {
        return view('Temas_Haiver.Tema-Ciencias_naturales_Haiver');
    }

    public function Geografia() {
        return view('Temas_Haiver.Tema-Geografia_Haiver');
    }

    public function Historia_Cultura(){
        return view('Temas_Haiver.Tema-Historia_Cultura_Haiver');
    }

    public function Lenguaje_Lectura (){
        return view('Temas_Haiver.Tema-Lenguaje_Lectura_Haiver');
    }

    public function Matematicas(){
        return view('Temas_Haiver.Tema-Matematicas_Haiver');
    }

    public function Programacion(){
        return view('Temas_Haiver.Tema-Programacion_Haiver');
    }

    public function Tecnologia(){
        return view('Temas_Haiver.Tema-Tecnologia_Haiver');
    }
}
