<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;

class ProductosControl extends Controller
{
    public function show () {
        $categorias= Categorias::get();

       $datos = Productos::where('destacado', '=', '1')->get();

        return view("tablaProductos", ["datos" => $datos,"categorias" => $categorias]);
        
    }
    public function showCategoria ($categoria) {

        $categorias= Categorias::get();

        $datos = Productos::where('categorias_id',$categoria)->get();
 
        return view("categorias", ["datos" => $datos, "categorias" => $categorias]);
         
     }

}
