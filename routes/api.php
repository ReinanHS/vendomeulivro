<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['namespace' => 'Api'], function() {
    Route::get('search-autocomplete/{q}', 'GoogleBooksController@getSuggest');
    Route::get('search/{q}', 'SearchController@getBusca');
    Route::get('category/find/{id}', 'DebugController@category');

    Route::get('product/find/{id}', 'DebugController@findProduct');
    Route::get('product/rating/{id}', 'GoogleBooksController@getProductRating');
    Route::get('product/avaliacao/{id}', 'GoogleBooksController@fakeAvaliacao');
    Route::get('product/pergunta/{id}', 'GoogleBooksController@fakePergunta');
});
