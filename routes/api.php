<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

///// RUTAS CRUD LIBROS
Route::post("libros/mostrar","LibroController@ShowLibros");
Route::post("libros/registrar","LibroController@CreateLibros");
Route::post("libros/obtener","LibroController@ReadLibros");
Route::post("libros/actualizar","LibroController@UpdateLibros");
Route::post("libros/eliminar","LibroController@DeleteLibros");
////////