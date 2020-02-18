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
Auth::routes();

//rutas auth
/*Route::get ('login','Auth\LoginController@showLoginForm')->name('login');
Route::post ('login','Auth\LoginController@login');
Route::post('logout','Auth\RegisterController@logout')->name('logout');

//rutas registro
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register','Auth\RegisterController@register');

//pass
Route::get('password\reset','Auth\ForgotPasswordController@showLinkRquestForm')->name('password.request');
Route::post('password\email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password\reset\{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password\reset','Auth\ResetPasswordController@reset');*/
Route::get('/pedidoForm', 'ProductosControl@formPedido')->name('pedido.form');
Route::post('/crearPedido', 'PedidosControl@crearPedido')->name('pedido.crear');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');