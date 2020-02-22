<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use Cart;

class ProductosControl extends Controller
{
    public function show () {
       $categorias= Categorias::get();

       $productos = Productos::where('destacado', '=', '1')->paginate(6);
       $total=Cart::getTotalQuantity();

        return view("tablaProductos",  compact("productos"),["productos" => $productos,"categorias" => $categorias,"total" => $total]);
        
    }
    public function showCategoria ($categoria) {
        $total=Cart::getTotalQuantity();
        $productos = Productos::where('categorias_id',$categoria)->paginate(6);
        $categorias= Categorias::get();
        //buscar el nombre de la categoria
        $categoriaNombreA= Categorias::select('nombre')->where('id',$categoria)->get();
        foreach($categoriaNombreA as $valor){
            $categoriaNombre=$valor['nombre'];
        }
        
        return view("tablaProductosCategoria", compact("productos"), ["productos" => $productos, "categorias" => $categorias,"categoriaNombre" => $categoriaNombre,"total" => $total]);
         
     }
     public function showProducto ($idProducto) {
        $total=Cart::getTotalQuantity();
        $categorias= Categorias::get();
        $productos = Productos::where('id',$idProducto)->get();
        return view("articulo", ["productos" => $productos, "categorias" => $categorias,"total" => $total]);
        
    }
    public function formPedido(){
        $total=Cart::getTotalQuantity();
        $categorias= Categorias::get();
        $contenido=Cart::getContent();
        return view("pedido_form",["categorias" => $categorias,"total" => $total,'contenido'=>$contenido]);
    }
    

}
