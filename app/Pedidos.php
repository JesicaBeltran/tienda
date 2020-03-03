<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedido';
    protected $fillable= [
        'id',
        'fecha_realizacion',
        'codigo',
        'estado',
        'direccion',
        
        'nombre_usuario',
        'correo_electronico',
        'dni',
        'users_id',
        'updated_at',
        'pagar'
    ];
}
