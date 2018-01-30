<?php

Route::get('/',[
	'as'=>'inicio',
	'uses'=>'PaginasController@inicio'
]);

Route::get('/producto-detalles/{id}',[
	'as'=>'producto-detalles',
	'uses'=>'PaginasController@productoDetalles'
]);

Route::get('/nosotros', 'PaginasController@nosotros');
//Route::get('/productos', 'PaginasController@productos');
//Route::get('/servicios', 'PaginasController@servicios');

Route::resource('/perfiles','PerfilesController');
Route::resource('/cupones','CuponesController');
Route::resource('/servicios','ServiciosController');
Route::resource('/productos','ProductosController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Rutas para el carrito de compras
Route::get('/carrito',['as'=>'carrito','uses'=>'CarritoController@mostrar']);
Route::get('/carrito/agregar/{id}',['as'=>'carrito-agregar','uses'=>'CarritoController@agregar']);
Route::get('/carrito/vaciar',['as'=>'carrito-vaciar','uses'=>'CarritoController@vaciar']);
Route::get('/carrito/borrar/{id}',['as'=>'carrito-borrar','uses'=>'CarritoController@borrar']);