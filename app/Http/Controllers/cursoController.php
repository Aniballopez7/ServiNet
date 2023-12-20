<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){
        return "Bienvenido a la principal";
    }

    public function create(){
        return "Bienvenido a la create";
    }

    public function show($curso){
        return "Bienvenido al show";
    }
}
