<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/puntos', 'PuntosController@index');
//Route::get('/', 'PuntosController@index');
Route::post('/reciclaje', 'PuntosController@store');
Route::get('/editaPunto/{id}', 'PuntosController@show');
Route::post('/edicionPunto', 'PuntosController@actualiza');
Route::get('/borraPunto/{id}', 'PuntosController@destroy');

Route::get('/recolectores', 'RecolectoresController@index');
Route::post('/nuevoRecolector', 'RecolectoresController@store');
Route::get('/editaRecolector/{id}', 'RecolectoresController@show');
Route::post('/edicionRecolector', 'RecolectoresController@actualiza');
Route::get('/borraRecolector/{id}', 'RecolectoresController@destroy');

Route::get('/relacionarPunto/{id}', 'DetalleController@show');
Route::post('/nuevoDetalle', 'DetalleController@store');
Route::get('/edicionDetalle/{id}', 'DetalleController@muestraDetalle');
Route::post('/editarDetalle', 'DetalleController@actualiza');
Route::get('/borraDetalle/{id}', 'DetalleController@destroy');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ejemplo', function () {
    return 'Tipo NULL';
});