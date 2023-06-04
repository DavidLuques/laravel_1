<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){// _invoke  es para 1 sola ruta
        return view('home'); // el metodo view 
    }
}
