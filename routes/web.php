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

// Route::get('/', function () {
//     return view('welcome');
// });

//Pagina de inicio
Route::get('/', 'HomeController@index')->name('home');

//CRUD para productos
Route::get('productos', 'ProductoController@index')->name('productos.index'); //listado de productos
Route::get('productos/create', 'ProductoController@create')->name('productos.create'); //formulario de crear producto
Route::post('productos', 'ProductoController@store')->name('productos.store'); //guardar producto
Route::get('productos/{producto}', 'ProductoController@show')->name('productos.show'); //mostrar producto
Route::get('productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit'); //formulario de editar producto
Route::put('productos/{producto}', 'ProductoController@update')->name('productos.update'); //actualizar producto
Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy'); //formulario de eliminar producto
Route::get('productos/{producto}/foto', 'ProductoController@foto')->name('productos.foto'); //listado de fotos del producto
Route::post('productos/{producto}/foto', 'ProductoController@foto_store')->name('productos.foto.store'); //guardar foto del producto
Route::get('productos/{producto}/foto/{foto}', 'ProductoController@foto_foto')->name('productos.foto.foto'); //formulario de ver foto individual del producto
Route::get('productos/{producto}/foto/{foto}/destroy', 'ProductoController@foto_destroy')->name('productos.foto.destroy'); //eliminar foto del producto
Route::get('productos/{producto}/foto/{foto}/edit', 'ProductoController@foto_edit')->name('productos.foto.edit'); //formulario de editar foto del producto
Route::put('productos/{producto}/foto/{foto}', 'ProductoController@foto_update')->name('productos.foto.update'); //actualizar foto del producto

//CRUD para categorias
Route::get('categorias', 'CategoriaController@index')->name('categorias.index'); //listado de categorias
Route::get('categorias/create', 'CategoriaController@create')->name('categorias.create'); //formulario de crear categoria
Route::post('categorias', 'CategoriaController@store')->name('categorias.store'); //guardar categoria
Route::get('categorias/{categoria}', 'CategoriaController@show')->name('categorias.show'); //mostrar categoria
Route::get('categorias/{categoria}/edit', 'CategoriaController@edit')->name('categorias.edit'); //formulario de editar categoria
Route::put('categorias/{categoria}', 'CategoriaController@update')->name('categorias.update'); //actualizar categoria
Route::delete('categorias/{categoria}', 'CategoriaController@destroy')->name('categorias.destroy'); //formulario de eliminar categoria

