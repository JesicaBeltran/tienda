<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use Cart;


class carritoControl extends Controller
{

public function cart(){
   $categorias= Categorias::get();
      $contenido=Cart::getContent();
      return view('verCarrito', ['contenido' => $contenido,'categorias' => $categorias]);

}

/*
   public function update(Request $res){
      /*Cart::update($res->id,array(
         'quantity' => $res->cantidadP, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
       ));*/
      /* Cart::update($res->id, array(
         'quantity' => array(
             'relative' => false,
             'value' => $res->cantidad
         ),
       ));
       $contenido= Cart::getContent();
       $categorias= Categorias::get();
    
       return view('verCarrito', ['contenido' => $contenido, 'categorias'=>$categorias]);
   }*/

   public function update(Request $res){
      Cart::update($res->id,array(
         'quantity' => array(
            'relative' => false,
            'value' => $res->cantidad
         ),
      ));

      return back();
   }


   public function cartAdd(Request $res){
      //buscar datos del producto a añadir
      
      $detalles = Productos::find($res->id);

      Cart::add(array(
         'id' => $res->id,
         'name' => $detalles->nombre_producto,
         'price' => $detalles->precio,
         'quantity' => $res->cantidad,
         'attributes' => array(
            'imagen' => $detalles->imagen_producto
         )
     ));
    
      $categorias= Categorias::get();
      $contenido=Cart::getContent();
      return view('verCarrito', ['contenido' => $contenido, 'categorias'=>$categorias]);
    
   }
   public function borrar($id){
      $cart=Cart::getContent()->where('id',$id);
      if($cart->isNotEmpty()){
         Cart::remove($id);
      }
      return back();

   }

}
