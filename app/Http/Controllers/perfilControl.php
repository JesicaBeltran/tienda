<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Categorias;

class perfilControl extends Controller
{
   public function verPerfil(){
    $categorias= Categorias::get();
    $total=Cart::getTotalQuantity();
    return view('perfil', ['categorias'=>$categorias,'total'=>$total]);
   }
}
