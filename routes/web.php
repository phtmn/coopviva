<?php


Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
