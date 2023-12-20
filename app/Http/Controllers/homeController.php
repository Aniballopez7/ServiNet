<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //invoke es para una sola ruta
    public function __invoke(){ 
        return view('home');
    }
}
