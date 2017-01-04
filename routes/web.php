<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about',function (){
    return view('pages.about.index');
});

Route::get('/shop','ShopController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard','DashboardController@index');
