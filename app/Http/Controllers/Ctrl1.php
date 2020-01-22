<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ctrl1 extends Controller
{
    public function hola($saludo='Bienvenido'){
        return view('saludo', ['saludo' => $saludo]);
    }
    public function adios($adios='Chao Chao'){
        return view('adios', ['adios' => $adios]);
    }

    public function contar($numero =10){
        $n=[];
        for($i=0;$i<$numero;$i++){
        $n[$i]=$i;
        }
        $cadena=implode(",", $n);
        
    return view('numeros', ['cadena' => $cadena], ['numero' => $numero]);
    }

}
