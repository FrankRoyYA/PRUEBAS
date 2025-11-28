<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //crear el metodo principal del aplicativo
    public function __invoke()
    {
        return view('home');
    }

}

