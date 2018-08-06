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

Route::get('/hola', function() {
    echo "Bienvenido a Laravel!!!";
});

Route::get('/prueba/{id}', 'PruebaController@ver');

Route::get('/prueba/{id}/lindo', 'PruebaController@ver_lindo');

Route::get('/sesion/guardar/{nombre}', 'PruebaController@guardar_sesion');
Route::get('/sesion/ver', 'PruebaController@ver_sesion');

Route::get('/persona', 'PruebaController@listar');
Route::get('/persona/add', 'PruebaController@add');
