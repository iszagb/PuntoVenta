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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pedidos','PedidoController');

Route::resource('/mesas','MesaController')->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('mesas/elimina-pedido/{mesa}', 'MesaController@eliminaPedido')
    ->name('mesas.eliminaPedido');

Route::get('/desarrollador', 'PaginaController@desarrollador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
