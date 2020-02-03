<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Cart;

class carritoControl extends Controller
{

public function cart(){
   return Cart::getContent();
}


   public function cartAdd(Request $res){
      //buscar datos del producto a añadir
      $add=Cart::add(array(
         'id' => 456, // inique row ID
         'name' => $res->nombre,
         'price' => 67.99,
         'quantity' => 4,
         'attributes' => array()
     ));
    //return view('carrito', ['carritoArray' => $carritoArray]);
    if($add){
       echo "done";
       var_dump("ddd");
    }
   }/*
Cart::add(array(
    'id' => 456, // inique row ID
    'name' => 'Sample Item',
    'price' => 67.99,
    'quantity' => 4,
    'attributes' => array()
));
   */
}
