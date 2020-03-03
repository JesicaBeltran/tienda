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
Route::post('/enviarEmail', 'PedidosControl@enviarEmail')->name('email.enviar');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/verPerfil',['middleware'=>'auth','uses'=> 'perfilControl@verPerfil']);
Route::get('/modificarForm',['middleware'=>'auth','uses'=> 'usuarioControl@mostrarForm']);
Route::post('/modificarUsuario',['middleware'=>'auth','uses'=> 'usuarioControl@modificar']);
Route::post('/darBaja',['middleware'=>'auth','uses'=> 'usuarioControl@baja']);
Route::get('/verDarBaja',['middleware'=>'auth','uses'=> 'usuarioControl@verbaja']);

Route::post('/cambiarC',['middleware'=>'auth','uses'=> 'usuarioControl@actualizarC']);
Route::get('/cambioContras',['middleware'=>'auth','uses'=> 'usuarioControl@mostrarCambioContra']);

Route::get('/verPedidos',['middleware'=>'auth','uses'=> 'PedidosControl@pedidosUsuario']);
Route::post('/verpdf',['middleware'=>'auth','uses'=> 'PedidosControl@verpdf'])->name('verpdf');
Route::post('/cancelarPedido',['middleware'=>'auth','uses'=> 'PedidosControl@cancelarPedido'])->name('cancelarPedido');

//Paypal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
 
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));
