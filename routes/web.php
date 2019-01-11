<?php
Auth::routes(['verify'=>false,'active'=>'']);

//Rotas para paginas do site NAO PRECISA USAR CONTROLLER USE ROUTE::VIEW 
Route::view('/','site.index', ['active' => 'home']);
Route::view('/sobre', 'site.paginas.sobre', ['active' => 'sobre'])->name('sobre_nos');
Route::view('/agenda2030', 'site.paginas.agenda2030', ['active' => 'agenda2030'])->name('agenda_2030');
Route::view('/oscs','site.osc.index', ['active' => 'oscs'])->name('oscs');

//RotasReferentes as OSC
Route::get('/oscs/detalhe','Site\OrganizacoesController@detalhe')->name('oscs.detalhe');

//Resources routes
Route::resource('osc','Site\OrganizacoesController');
Route::resource('projetos','Site\ProjetosController');

//Rotas para manutenção de cadastros-logins
Route::view('/cadastro','site.cadastro.cadastro',['active'=>'cadastro'])->name('site.cadastro');
Route::view('/entrar','site.cadastro.login',['active'=>'login'])->name('site.login');

//Rotas para dashboards do site
Route::get('/painel','Site\PainelController@painel')->name('site.painel');

//Rotas para cadastro de Perfil
Route::get('/meu-perfil','Site\PerfilController@create')->name('perfil.create');
Route::post('/meu-perfil','Site\PerfilController@store')->name('perfil.store');

//Routas para cadastro de projetos


        

