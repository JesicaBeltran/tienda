<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productosPedidos extends Model
{
    protected $table = 'pedidos_productos';
    protected $fillable= [
        'cantidad',
        'precio',
        'descuento',
        'pedido_id',
        'productos_id',
        'updated_at',
        'created_at',
    ];
}
