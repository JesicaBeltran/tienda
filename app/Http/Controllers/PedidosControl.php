<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use Cart;

class PedidosControl extends Controller
{
    public function crearPedido(Request $res){
        $fecha=date("Y-m-d");

        Pedidos::insert(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        //return view('/home');
        Cart::clear();
        return redirect('/');
    }
}
