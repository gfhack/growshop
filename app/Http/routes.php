<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', 'ProductsController@index');
Route::get('banco', 'ProductsController@conect');

Route::get('cadastro', 'ProductsController@create');
Route::post('cadastro', 'ProductsController@store');
