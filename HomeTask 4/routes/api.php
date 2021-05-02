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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(
    ['namespace' => 'App\Http\Controllers'], 
    function () {
    Route::get('/news',  'NewsController@index');
    Route::get('/news/{id}', 'NewsController@show');
    Route::post('/news', 'NewsController@store');
    Route::put('/news/{id}', 'NewsController@update');
    Route::delete('/news/{id}', 'NewsController@destroy');
});
