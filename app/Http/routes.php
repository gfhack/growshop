<?php
Route::get('/', 'HomeController@index'); // home page

Route::auth();

Route::get('products', 'ProductsController@index');
Route::get('search', 'ProductsController@search');

Route::group(['middleware' => 'auth'], function () { // require login
  Route::get('create', 'ProductsController@create');
  Route::post('create', 'ProductsController@store');
  Route::get('report', 'ProductsController@report');
  Route::post('destroy/{id}', 'ProductsController@destroy');
  Route::get('edit/{id}', 'ProductsController@edit');
  Route::post('edit/{id}', 'ProductsController@update');
});
