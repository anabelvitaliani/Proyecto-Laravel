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
Route::get("/vercomisiones/{id}","CursosController@getCursosDH");
Route::get("/cursos","CursosController@getComisionesDH");
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//no hace falta poner en la ruta lo que llega x querySrting
//api siempre responde en json
Route::get('/buscarEmail', 'ApiUserController@getUser');
