<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'HomeController@showWelcome');

Route::get('/', ['as' => 'home', 'uses' =>'HomeController@home']);

Route::get('products', ['as' => 'products', 'uses' =>'HomeController@products']);

Route::get('product', ['as' => 'product', 'uses' =>'HomeController@product']);


Route::get('register', ['as' => 'register', 'uses' =>'UserController@register']);

Route::post('register', ['as' => 'store', 'uses' =>'UserController@store']);



