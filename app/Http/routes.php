<?php
Route::get('/', 'HomeController@index'); // home page

Route::auth();

Route::get('products', 'ProductsController@index');

Route::group(['middleware' => 'auth'], function () { // require login
  Route::get('create', 'ProductsController@create');
  Route::post('create', 'ProductsController@store');
});
