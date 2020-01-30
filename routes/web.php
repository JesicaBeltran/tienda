<?php

Route::get('/','ProductosControl@show', function(){
    return view('inicio');
});
Route::get('/tablaProductosCategoria/{categoria}','ProductosControl@showCategoria');
