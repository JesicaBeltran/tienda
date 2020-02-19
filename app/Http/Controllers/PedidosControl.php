<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use Cart;
use App\Categorias;
use Mail;
class PedidosControl extends Controller
{
    public function crearPedido(Request $res){
        $fecha=date("Y-m-d");

        Pedidos::insert(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        //return view('/home');
        
        $categorias= Categorias::get();
        $total=Cart::getTotal();

        $data = array('name'=>"Jesicaa",'direccionEntrega'=> $res->direccion,'total'=>$total);
         
         Mail::send('emails.mail', $data, function($message){
         $message->to('jessbc92@gmail.com', 'jesica')
                 ->subject('Artisans Web Testing Mail');
         $message->from('tienda@gmail.com','Factura');
         });
        Cart::clear();
        return view('resumenPedido',["categorias" => $categorias]);
    
    }
    
}
