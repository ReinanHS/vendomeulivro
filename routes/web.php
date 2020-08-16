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

Route::get('/', 'Store\HomeController@home');
Route::get('/{slug}/p', 'Api\DebugController@product');

Route::get('busca/{q}', 'Api\SearchController@busca');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
