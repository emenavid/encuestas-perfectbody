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
    return view('encuestas.encuesta');
});

Route::get('/', function () {
    return view('encuestas.queja');
});

Route::get('/', function () {
    return view('encuestas.slider');
});
/*Route::get('/', function () {
    return view('Auth.login');
    
});
Route::get('/', function () {
    return view('encuestas.modalpregunta');    
});
Route::get('/', function () {
    return view('encuestas.preguntas');
    
});*/