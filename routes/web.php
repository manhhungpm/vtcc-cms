<?php

//
Route::get('/', function () {
    return view('auth.login');
})->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
