<?php


Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/oscs','Site\OrganizacoesController@index')->name('oscs');
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');
