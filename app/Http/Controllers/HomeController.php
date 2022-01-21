<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // se usa este metodo si solo se administra una unica ruta
    public function __invoke() {
        return "Bienvenidos a la pagina principal";
    }
}














