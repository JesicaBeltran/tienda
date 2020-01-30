<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class TablaProductos extends Controller
{
    public function show () {
     $datos=Productos::all();
        //$datos='hola';
       return view("tablaProductos", ["datos" => $datos]);
       
    }
}
