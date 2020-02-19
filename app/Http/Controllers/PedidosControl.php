<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use Cart;
use App\Categorias;
use Mail;
use App\productosPedidos;

class PedidosControl extends Controller
{
    public function crearPedido(Request $res){
        $fecha=date("Y-m-d");

       // Pedidos::insert(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        //return view('/home');
        $pedido=Pedidos::create(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        $categorias= Categorias::get();
        $total=Cart::getTotal();

        $data = array('name'=>"Jesicaa",'direccionEntrega'=> $res->direccion,'total'=>$total);
         
         Mail::send('emails.mail', $data, function($message){
         $message->to('jessbc92@gmail.com', 'jesica')
                 ->subject('Artisans Web Testing Mail');
         $message->from('tienda@gmail.com','Factura');
         });
        $contenidoCarrito=Cart::getContent();
        //añadir productos a la tabla productos_pedidos
        //consulta para saber el id del pedido
       ///////// $pedido_id=Pedidos::select('id');
        //consultar producto_id
        $pedido_id=$pedido->id;

        foreach($contenidoCarrito as $articulo){
            //busca el producto que tenga el nombre tal
            $producto_id=$articulo->id;
            $cantidad=Cart::getTotalQuantity();
            //productosPedidos::insert(['cantidad'=> $articulo->cantidad,'pedido_id'=>$pedido_id,'productos_id'=> $producto_id]);
            productosPedidos::create(['cantidad'=> $articulo->quantity,'precio'=>$articulo->price,'descuento'=>$articulo->attributes->descuento,'pedido_id'=>$pedido_id,'productos_id'=> $producto_id]);
        }
        Cart::clear();
        return view('resumenPedido',["categorias" => $categorias]);
    

    }
    
}
