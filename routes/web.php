<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/TablaProductos', 'TablaProductos@show');

Route::get('/listartabla',function(){
    return view('home');
});
Route::get('/listar','TablaProductos@show');
/*
Route::get('/',function () {
    return view('home');
});*/

/*Route::get('/hola/{nombre}', function ($nombre) {
    return '<h1>Hola Mundo</h1><br><p>'.$nombre.'</p>';
});*/
Route::get('/cuentaNumeros/{numero?}', function ($numero = 10) {
    return view('numeros', ['numero' => $numero]);
});
Route::get('articulos/{id}','ArticulosController@ver');
//compact('numero') Es igual que: ['numero' => $numero]

Route::get('/cuenta/{numero?}','Ctrl1@contar');