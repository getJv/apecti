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

Route::get('/phpinfo', function () {
    return view('phpinfo');
});

Route::get('/','LandingPageController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
