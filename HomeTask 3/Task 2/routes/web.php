<?php

use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\PostsController@show')->name('main');

Route::get('post', function () {
    return view('posts.add_post');
})->name('add_post');

Route::post('post', 'App\Http\Controllers\PostsController@create');

Route::get('post/{id}', function ($id) {
    return view('posts.change_post', ['post' => Post::find($id)]);
})->name('change_post');

Route::post('post/{id}', 'App\Http\Controllers\PostsController@update');

