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
Route::get('/', 'HomeController@index')->name('home'); //->name('home') para poder usar la ruta en el archivo de vistas

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

//CRUD para usuarios
Route::get('usuarios', 'UserController@index')->name('usuarios.index'); //listado de usuarios
Route::get('usuarios/create', 'UserController@create')->name('usuarios.create'); //formulario de crear usuario
Route::post('usuarios', 'UserController@store')->name('usuarios.store'); //guardar usuario
Route::get('usuarios/{usuario}', 'UserController@show')->name('usuarios.show'); //mostrar usuario
Route::get('usuarios/{usuario}/edit', 'UserController@edit')->name('usuarios.edit'); //formulario de editar usuario
Route::put('usuarios/{usuario}', 'UserController@update')->name('usuarios.update'); //actualizar usuario
Route::delete('usuarios/{usuario}', 'UserController@destroy')->name('usuarios.destroy'); //formulario de eliminar usuario

//CRUD para ventas
Route::get('ventas', 'VentaController@index')->name('ventas.index'); //listado de ventas
Route::get('ventas/create', 'VentaController@create')->name('ventas.create'); //formulario de crear venta
Route::post('ventas', 'VentaController@store')->name('ventas.store'); //guardar venta
Route::get('ventas/{venta}', 'VentaController@show')->name('ventas.show'); //mostrar venta
Route::get('ventas/{venta}/edit', 'VentaController@edit')->name('ventas.edit'); //formulario de editar venta
Route::put('ventas/{venta}', 'VentaController@update')->name('ventas.update'); //actualizar venta
Route::delete('ventas/{venta}', 'VentaController@destroy')->name('ventas.destroy'); //formulario de eliminar venta

//CRUD para compras
Route::get('compras', 'CompraController@index')->name('compras.index'); //listado de compras
Route::get('compras/create', 'CompraController@create')->name('compras.create'); //formulario de crear compra
Route::post('compras', 'CompraController@store')->name('compras.store'); //guardar compra
Route::get('compras/{compra}', 'CompraController@show')->name('compras.show'); //mostrar compra
Route::get('compras/{compra}/edit', 'CompraController@edit')->name('compras.edit'); //formulario de editar compra
Route::put('compras/{compra}', 'CompraController@update')->name('compras.update'); //actualizar compra
Route::delete('compras/{compra}', 'CompraController@destroy')->name('compras.destroy'); //formulario de eliminar compra

//CRUD para preguntas
Route::get('preguntas', 'PreguntaController@index')->name('preguntas.index'); //listado de preguntas
Route::get('preguntas/create', 'PreguntaController@create')->name('preguntas.create'); //formulario de crear pregunta
Route::post('preguntas', 'PreguntaController@store')->name('preguntas.store'); //guardar pregunta
Route::get('preguntas/{pregunta}', 'PreguntaController@show')->name('preguntas.show'); //mostrar pregunta
Route::get('preguntas/{pregunta}/edit', 'PreguntaController@edit')->name('preguntas.edit'); //formulario de editar pregunta
Route::put('preguntas/{pregunta}', 'PreguntaController@update')->name('preguntas.update'); //actualizar pregunta
Route::delete('preguntas/{pregunta}', 'PreguntaController@destroy')->name('preguntas.destroy'); //formulario de eliminar pregunta