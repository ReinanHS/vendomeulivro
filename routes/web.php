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

// Páginas principais
Route::get('/', 'Store\HomeController@home');
Route::get('/{slug}/p', 'Api\DebugController@product');
Route::get('busca/{q}', 'Api\SearchController@busca');

// Páginas secundarias
Route::get('ofertas-do-dia', 'Store\MainController@ofertas');
Route::get('lancamentos', 'Store\MainController@lancamentos');
Route::get('historico', 'Store\MainController@historico');
Route::get('lojas-oficiais', 'Store\MainController@lojasOficiais');
Route::get('vender', 'Store\MainController@vender');
Route::get('categorias', 'Store\MainController@categorias');
Route::get('atendimento-ao-cliente', 'Store\MainController@atendimento');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
