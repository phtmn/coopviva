<?php
Auth::routes(['verify'=>false]);
//Rotas para paginas do site NAO PRECISA USAR CONTROLLER USE ROUTE::VIEW 
Route::view('/','site.index');
Route::view('/sobre', 'site.paginas.sobre')->name('sobre_nos');
Route::view('/agenda2030', 'site.paginas.agenda2030')->name('agenda_2030');

//RotasReferentes as OSC
Route::view('/oscs','site.osc.index')->name('oscs');
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');

//Rotas para manutenção de cadastros-logins
Route::view('/cadastro','site.cadastro.cadastro')->name('site.cadastro');
Route::get('/cadastro/{type}','Site\SiteController@cadastro')->name('cadastro');
Route::post('/cadastro/{type}','Site\SiteController@create')->name('cadastro.create');

//Rotas para os Paineis de Investidor e Osc
Route::get('/painel','Site\PainelController@painel')
        ->name('site.painel')->middleware('auth');
        

