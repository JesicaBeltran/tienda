<?php

Route::get('/','ProductosControl@show', function(){
    return view('inicio');
});
Route::get('/tablaProductosCategoria/{categoria}','ProductosControl@showCategoria');
Route::get('/articulo/{idProducto}','ProductosControl@showProducto');
Route::post('/carrito','carritoControl@cartAdd');
Route::post('/carrito','carritoControl@cart');