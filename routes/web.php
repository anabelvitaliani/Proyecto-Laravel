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
Route::get('/product/delete/{id}', 'ProductController@delete');
//carga el formulario
Route::get('/product/create', 'ProductController@create')->middleware('admin');
// guarda los datos
Route::post('/product/create', 'ProductController@save')->middleware('admin');
//carga el formulario
Route::get('/product/edit/{id}', 'ProductController@edit')->middleware('admin');
// guarda las modificaciones
Route::post('/product/edit/{id}', 'ProductController@update')->middleware('admin');
//listado de productos
Route::get('/product', 'ProductController@index');

Route::get('/preguntas', 'PreguntasController@index');
Route::get('/cerrarSesion', 'LoginController@logout');

Route::post('addToCart/{id}', 'ProductController@addToCart');
Route::post('deleteToCart/{id}', 'ProductController@addToCart');
Route::get('/checkout', 'ProductController@checkout');
Route::post('/checkout', 'ProductController@finishCheckout')->middleware("auth");

Route::get('/search', 'ProductController@search');







Route::get("/vercomisiones/{id}","CursosController@getComisionesDH");
Route::get("/cursos","CursosController@getCursosDH");


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
