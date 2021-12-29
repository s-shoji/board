<?php

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


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/index','PostController@index')->name('posts.index');
// Route::get('posts/{id}/show','PostController@show')->name('posts.show');
//表示用
Route::get('posts/create','PostController@create')->name('posts.create');
//投稿を押した時
Route::post('posts/create','PostController@store');

Route::get('posts/{id}/show','CommentController@index' )->name('posts.show'); 
Route::post('posts/{id}/comment','CommentController@create')->name('comments.create');

Route::get('users/index', 'UserController@index')->name('users.index');

