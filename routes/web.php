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

Auth::routes();

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/admin/{any?}', function() {
        return view('admin');
    })->where('any', '.*');
});

Route::group(['namespace' => 'Api', 'prefix' => 'api'], function() {
	Route::resource('posts', 'PostsController');
});

Route::get('/', 'PageController@index');
Route::get('/{year}/{month}/{slug}', 'PostController@show')->name('post');