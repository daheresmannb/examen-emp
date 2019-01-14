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


Route::get('/registrar', function () {
    return view('reg');
});
Route::get('/buscar', function () {
    return view('ob');
});
Route::get('/actualizar', function () {
    return view('up');
});
Route::get('/eliminar', function () {
    return view('elim');
});




