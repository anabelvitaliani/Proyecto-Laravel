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
//carga el formulario
Route::get('/product/create', 'ProductController@create');
//->middleware('auth');
// guarda los datos
Route::post('/product/create', 'ProductController@save');
//->middleware('auth');
//carga el formulario
Route::get('/product/edit/{id}', 'ProductController@edit');
//->middleware('auth');
// guarda los datos
Route::post('/product/edit/{id}', 'ProductController@update');
//->middleware('auth');
//listado de productos
Route::get('/product', 'ProductController@index');

Route::get('/preguntas', 'PreguntasController@index');
Route::get('/cerrarSesion', 'LoginController@logout');


Route::get("/vercomisiones/{id}","CursosController@getComisionesDH");
Route::get("/cursos","CursosController@getCursosDH");


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
