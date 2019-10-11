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


Route::view('/', 'layouts')->name('layouts');
route::get('/contacto','ContactoController@index')->name('contacto');
Route::post('/contacto', 'ContactoController@store');
Route::resource('/gastos', 'GastoController');
Route::resource('/ingresos', 'IngresoController');

