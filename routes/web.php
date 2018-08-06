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

Route::get('/persona_tmp', 'PruebaController@listar');
Route::get('/persona_tmp/add', 'PruebaController@add');

Route::get('/persona', 'PersonaController@listar');
Route::get('/persona/agregar', 'PersonaController@nuevo');
Route::post('/persona/agregar', 'PersonaController@agregar');

Route::get('/persona/editar/{id}', 'PersonaController@editar');
Route::post('/persona/editar/{id}', 'PersonaController@actualizar');

Route::get('/persona/borrar/{id}', 'PersonaController@borrar');
