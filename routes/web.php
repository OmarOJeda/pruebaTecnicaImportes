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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar','App\Http\Controllers\ImporteController@index');

Route::post('/guardar','App\Http\Controllers\ImporteController@store');

Route::delete('/eliminar','App\Http\Controllers\ImporteController@destroy');
