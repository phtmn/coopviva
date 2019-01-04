<?php


Route::get('/', function () {
    return view('site.index');
});

Auth::routes(['verify'=>true]);

Route::get('/oscs','Site\OrganizacoesController@index')->name('oscs');
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');


Route::view('/cadastro','site.cadastro.cadastro')->name('site.cadastro');
Route::get('/cadastro/{type}','Site\SiteController@cadastro')->name('cadastro');
Route::post('/cadastro/{type}','Site\SiteController@create')->name('cadastro.create');


Route::get('/painel','Site\PainelController@painel')
        ->name('site.painel')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sobre_nos', 'SobreNosController@index')->name('sobre_nos');
Route::get('/agenda_2030', 'Agenda2030Controller@index')->name('agenda_2030');
