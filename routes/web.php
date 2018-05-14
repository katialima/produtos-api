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
    return response()->json(['message' => 'Produtos API', 'status' => 'Connected']);
});

Route::group(array('prefix' => 'api'), function() {
    
    Route::resource('users', 'UsuariosController');
    Route::resource('produtos', 'ProdutosController');

});
