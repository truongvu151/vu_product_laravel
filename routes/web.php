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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('index', 'ProductController');
Route::get('/', ['as' => 'home', 'uses' => 'ProductController@index']);

Route::get('productdetail/{ProductId}', ['as' => 'prodetail', 'uses' => 'ProductController@getProductDetail']);
