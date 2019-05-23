<?php

Route::get('/', 'TestController@welcome');




// Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Fin login