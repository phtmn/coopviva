<?php


Route::get('/', function () {
    return view('site.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
