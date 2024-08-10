<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedallaController extends Controller
{
    public function medalla(){
        return view('views_stiven.medallas');
    }
}
