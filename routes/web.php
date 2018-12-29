<?php


Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/oscs','Site\OrganizacoesController@index')->name('oscs');
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');


Route::view('/cadastro','site.cadastro.cadastro')->name('site.cadastro');
Route::get('/cadastro/{type}','Site\SiteController@cadastro')->name('cadastro');
Route::post('/cadastro','Site\SiteController@create')->name('cadastro.create');
