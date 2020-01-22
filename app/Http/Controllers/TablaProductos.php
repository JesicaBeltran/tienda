<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaProductos extends Controller
{
    public function show () {
        $datos='hola';
        return view("tablaProductos", ["datos" => $datos]);
       
    }
}
