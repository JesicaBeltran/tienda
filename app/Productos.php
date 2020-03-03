<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Productos extends Model
{
    protected $table = 'productos';
    public $timestamps =false;
    protected $fillable= [
        'id',
        'nombre_producto',
        'precio',
        'descuento_aplicable',
        'imagen_producto',
        
        'iva_aplicable',
        'descripcion',
        'anuncio',
        'oculto',
        'stock',
        'codigo',
        'categorias_id',
        'destacado',
        'fecha_inicio_destacado',
        'fecha_fin_destacado'
    ];
}
