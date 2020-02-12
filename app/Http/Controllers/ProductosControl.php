<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;

class ProductosControl extends Controller
{
    public function show () {
       $categorias= Categorias::get();

       $productos = Productos::where('destacado', '=', '1')->get();

        return view("tablaProductos", ["productos" => $productos,"categorias" => $categorias]);
        
    }
    public function showCategoria ($categoria) {

        $categorias= Categorias::get();

        $productos = Productos::where('categorias_id',$categoria)->get();
 
        return view("tablaProductos", ["productos" => $productos, "categorias" => $categorias]);
         
     }
     public function showProducto ($idProducto) {

        $categorias= Categorias::get();
        $productos = Productos::where('id',$idProducto)->get();

        return view("articulo", ["productos" => $productos, "categorias" => $categorias]);
        
    }

}
