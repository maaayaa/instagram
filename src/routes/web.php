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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PostsController@index')->name('post');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/post', 'PostsController@create')->name('create');
});
Route::get('/home', 'HomeController@index')->name('home');

