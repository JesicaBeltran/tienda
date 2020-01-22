<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function ver($id)
    {
        return view('articulos.ver', ['id' => $id]);
    }
}
