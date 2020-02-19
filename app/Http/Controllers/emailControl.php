<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Pedidos;

class emailControl extends Controller
{

    public function index(){
    
   //consultar dni de pedidos
    $data = array('name'=>"Jesicaa", "body" => "eee");
    
    Mail::send('emails.mail', $data, function($message){
    $message->to('jessbc92@gmail.com', 'jesica')
            ->subject('Artisans Web Testing Mail');
    $message->from('tienda@gmail.com','Factura');
});
echo "mensaje recibido";
    }
}
