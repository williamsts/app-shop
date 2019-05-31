<?php

Route::get('/', 'TestController@welcome');




// Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Fin login


//CR
Route::get('/admin/products', 'ProductController@index'); //listado
Route::get('/admin/products/create', 'ProductController@create'); //formulario
Route::post('/admin/products', 'ProductController@store'); //registrar
Route::get('/admin/products/{id}/edit', 'ProductController@edit'); // formulario edcion
Route::post('/admin/products/{id}/edit', 'ProductController@update'); //actualizar
Route::delete('/admin/products/{id}', 'ProductController@destroy'); //actualizar
