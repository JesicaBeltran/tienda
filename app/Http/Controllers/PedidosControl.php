<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use Cart;
use App\Productos;
use App\Categorias;
use Mail;
use App\productosPedidos;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PedidosControl extends Controller
{
    public function crearPedido(Request $res){
        $fecha=date("Y-m-d");
        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();
        $contenido=Cart::getContent();
       
       // Pedidos::insert(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        //return view('/home') METER AQUI EL TOTALPAGADO;
        $pedido=Pedidos::create(['fecha_realizacion' => $fecha, 'codigo'=>$res->codigo_user,'estado'=>"1",'direccion'=>$res->direccion,'nombre_usuario'=>$res->name_user,'correo_electronico'=>$res->email_user,'dni'=>$res->dni,'users_id'=>$res->id_user]);
        $pedido_id=$pedido->id;
        $pagado=Cart::getTotal();
        $pedido=Pedidos::where('id',$pedido_id)->update(['pagar'=>$pagado]);
        $data = array('name'=>"Jesicaa",'direccionEntrega'=> $res->direccion,'total'=>$total,'contenido'=>$contenido);
        
        $pdf=PDF::loadView('emails.mail',$data);

         Mail::send('emails.mail', $data, function($message) use ($pdf){
         $message->to('jessbc92@gmail.com', 'jesica')
                 ->subject('Resumen de tu pedido en Womans Clothes');
         $message->from('tienda@gmail.com','Factura');
         $message->attachData($pdf->output(),'Pedido.pdf');
         });
        $contenidoCarrito=Cart::getContent();
        //añadir productos a la tabla productos_pedidos
        //consulta para saber el id del pedido
       ///////// $pedido_id=Pedidos::select('id');
        //consultar producto_id
        
        
        foreach($contenidoCarrito as $articulo){
            //busca el producto que tenga el nombre tal
            $producto_id=$articulo->id;
            $cantidad=Cart::getTotalQuantity();
            //productosPedidos::insert(['cantidad'=> $articulo->cantidad,'pedido_id'=>$pedido_id,'productos_id'=> $producto_id]);
            productosPedidos::create(['cantidad'=> $articulo->quantity,'precio'=>$articulo->price,'descuento'=>$articulo->attributes->descuento,'pedido_id'=>$pedido_id,'productos_id'=> $producto_id]);
        }
        Cart::clear();
        return view('resumenPedido',["categorias" => $categorias,'total'=>$total,'contenido'=>$contenido]);
    

    }
    public function pedidosUsuario(){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();

        $pedidos=Pedidos::where('users_id',auth()->user()->id)->get();
        return view('verPedidoUsuario',["pedidos"=>$pedidos,"categorias" => $categorias,'total'=>$total]);
    }

    public function verpdf(Request $res){
        $id_pedido=$res->id_pedido;

        $data=productosPedidos::where('pedido_id',$id_pedido)->get();

       foreach($data as $d){
           $productos_id=$d->productos_id;
       }

$prueba = DB::table('pedidos_productos')
            ->join('productos', 'productos.id', '=', 'pedidos_productos.productos_id')
            ->select('productos.nombre_producto','pedidos_productos.cantidad','pedidos_productos.precio')->where('pedidos_productos.pedido_id','=',$id_pedido)
            ->get();

        $pedido=Pedidos::where('id',$id_pedido)->get();
        
        foreach($pedido as $ped){
            $dataP['fechaR'] = date("d-m-Y",strtotime($ped['fecha_realizacion']));
            $dataP['fechaE']=date("d-m-Y",strtotime($ped['fecha_realizacion']."+ 1 week"));
            $dataP['estado']=$ped['estado'];
            $dataP['direccion']=$ped['correo_electronico'];
            $dataP['totalP']=$ped['pagar'];
        }
       
        return PDF::loadView('factura',['prueba'=>$prueba],$dataP)
        ->stream('facturaPedido.pdf');
    }
                                
    public function cancelarPedido(Request $res){

        $id_pedido=$res->id_pedido;
        $pedido=Pedidos::where('id',$id_pedido)->update(['estado'=>2]);
        return back();
    }
    
}
