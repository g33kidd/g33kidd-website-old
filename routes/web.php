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

// Main page routes
Route::get('/', function() {
    return view('welcome');
});


//
// Admin Route to render the main template that runs the VueJS Dashboard.
Route::get(
    '/admin/{any?}',
    ['middleware' => ['auth', 'role:admin']],
    function () {
        return view('admin');
    }
);
