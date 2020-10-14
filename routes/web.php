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

Route::get('/', 'PuntosController@index');
Route::post('/reciclaje', 'PuntosController@store');
Route::get('/editaPunto/{id}', 'PuntosController@show');
Route::post('/edicionPunto', 'PuntosController@actualiza');
Route::get('/borraPunto/{id}', 'PuntosController@destroy');