<?php

Route::get('/','ProductosControl@show', function(){
    return view('inicio');
});
Route::get('/tablaProductosCategoria/{categoria}','ProductosControl@showCategoria');

Route::get('/articulo/{idProducto}','ProductosControl@showProducto');
Route::get('/verCarrito','carritoControl@cart');
Route::post('/verCarrito','carritoControl@cartAdd');

Route::post('/verCarrito/{id}', 'carritoControl@borrar')->name('cart.remove');
Route::post('/actualizar', 'carritoControl@update')->name('cart.cantidadUpdate');