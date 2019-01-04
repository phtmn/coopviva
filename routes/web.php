<?php


Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sobre_nos', 'SobreNosController@index')->name('sobre_nos');
Route::get('/agenda_2030', 'Agenda2030Controller@index')->name('agenda_2030');
