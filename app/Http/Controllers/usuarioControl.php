<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\User;
use App\Categorias;

class usuarioControl extends Controller
{
    public function mostrarForm(){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();
        return view('modificarForm',["categorias" => $categorias,'total'=>$total]);
    }
    public function modificar(Request $res){
        $usuario = User::find($res->id)->update(['name' => $res->name,'dni' => $res->dni,'direccion' => $res->direccion,'apellidos' => $res->apellidos]);
        
        //return back();
        return redirect('/verPerfil');
    }
    public function baja(Request $res){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();

        $usuario = User::find($res->id)->update(['baja' => '1']);
        //acabar sesion
        return redirect('/verPerfil');
    }
    //sin usar aunn
    public function mostrarCambioContra(){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();

        //acabar sesion
        return view('cambioContra',["categorias" => $categorias,'total'=>$total]);
    }
    public function actualizarC(Request $res){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();//comprobar que es 'secret'
        $contra=bcrypt($res->nuevaContra);
        $usuario = User::find($res->id)->update(['password' => $contra]);
        return redirect('/verPerfil');
    }
}
