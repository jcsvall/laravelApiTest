<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('publicaciones', 'PublicacionController@publicaciones');
Route::get('publicaciones/{publicacion}', 'PublicacionController@show');
Route::post('publicacion', 'PublicacionController@crear');
Route::put('publicacion/{publicacion}','PublicacionController@update');
Route::delete('publicacion/{publicacion}', 'PublicacionController@delete');

/**
 * Para Comentarios
 */
Route::post('comentario', 'ComentarioController@crear');
