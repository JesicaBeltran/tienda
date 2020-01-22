<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class prueba extends Controller{

    public function show () {
        return view('welcome',['name' => 'Holi']);
    }


}