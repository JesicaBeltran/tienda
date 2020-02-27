<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\User;
use App\Categorias;
use Illuminate\Database\Eloquent\SoftDeletes;

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

        $user = User::find(auth()->user()->id);
        $user->update([
            'baja'=>'1',
            'email'=>$user->email."-".time(),
            
            ]);

        $user->delete();
        //acabar sesion
        //$account->delete();
        //return redirect('/verPerfil');
        return redirect('/home');
    }
    public function verAlta(){

        $categorias= Categorias::get();
        $total=Cart::getTotalQuantity();

        return view('/formAlta');
    }
  
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
