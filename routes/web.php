<?php
Auth::routes(['verify'=>false]);

//Rotas para paginas do site NAO PRECISA USAR CONTROLLER USE ROUTE::VIEW 
Route::view('/','site.index');
Route::view('/sobre', 'site.paginas.sobre')->name('sobre_nos');
Route::view('/agenda2030', 'site.paginas.agenda2030')->name('agenda_2030');
Route::view('/oscs','site.osc.index')->name('oscs');


//RotasReferentes as OSC
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');

//Rotas para manutenção de cadastros-logins
Route::view('/cadastro','site.cadastro.cadastro')->name('site.cadastro');
Route::view('/entrar','site.cadastro.login')->name('site.login');

//Rotas para dashboards do site
Route::get('/painel','Site\PainelController@painel')->name('site.painel');

//Rotas para cadastro de Perfil
Route::get('/meu-perfil','Site\PerfilController@create')->name('perfil.create');
Route::post('/meu-perfil','Site\PerfilController@store')->name('perfil.store');
        
//Routa para atualizar cadastro
Route::put('/meu-perfil', 'Site\PerfilController@update')->name('perfil.update');
