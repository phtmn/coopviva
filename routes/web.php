<?php

Auth::routes(['verify'=>true]);

Route::view('/','site.index');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

//Rotas para manutenção de cadastros-logins
Route::view('/cadastro','site.cadastro.cadastro',['active'=>'cadastro'])->name('site.cadastro');
Route::view('/entrar','site.cadastro.login',['active'=>'login'])->name('site.login');
Route::view('/perfil','site.cadastro.perfil',['active'=>'login'])->name('site.perfil');
Route::view('/quero_inv','investidor.investimentos.lista_oscs')->name('quero_investir')->middleware('auth');
Route::view('/landing_osc','investidor.investimentos.landing_osc')->name('landing');

//Grupo de Rotas para Investidor
Route::group( ['middleware'=> ['auth','verified'],'prefix'=>'painel-investidor','namespace'=>'Investidor'],function(){

    Route::resource('perfil','PerfilController');
    Route::resource('investimentos','InvestimentosController');

    Route::get('/quero_investir','InvestimentosController@lista_oscs')->name('quero_investir');
    Route::get('/quero_investir/{id}','InvestimentosController@detalhe_oscs')->name('detalhe.osc');


    Route::get('/investir/{id}','Financeiro\CheckoutController@formIncentivar')->name('investir');
    Route::post('/pagar','Financeiro\CheckoutController@pagar')->name('pagar');
    Route::get('/investimento/d/{id}','InvestimentosController@cancelar')->name('investimento.cancelar');
    Route::get('/investimento/{status}','InvestimentosController@callback');

});

//Grupo de Rotas para OSC
Route::group( ['middleware'=> ['auth','verified','can:osc'],'prefix'=>'painel-osc','namespace'=>'Osc'],function() {

    Route::view('/','layouts.dashboard')->name('osc.dashboard');

    Route::resource('osc','OscController');
    Route::resource('projetos','ProjetosController');
    Route::resource('galeria','GaleriaController');
    Route::get('/meus-investimentos','OscController@getInvestimentos')->name('investimentos');

    Route::get('/objetivos-ods','MetasController@metas')->name('osc.objetivos');
    Route::get('/metas/{ods}', 'Dashboard\MetasController@metas')->name('metas');
    Route::post('/metas', 'Dashboard\MetasController@gravar')->name('metas.salvar');
    Route::get('/meta/remover/{id}','Dashboard\MetasController@removerMeta')->name('meta.remover');

    Route::get('projeto/{id}/galeria','Dashboard\ProjetosController@galeria')->name('projeto.galeria');
    Route::post('galeria.save','Dashboard\ProjetosController@save')->name('galeria.save');
    Route::get('projeto/i/{id}','Dashboard\ProjetosController@mudarInativo')->name('projeto.inativo');

    Route::get('/detalhe','OscController@landingPage')->name('osc.landingPage');
    Route::get('/detalhe/projeto/{id}','Dashboard\OscController@landingPageProjeto')->name('projeto.landingPage');

});

//# ROTAS PARA A AREA ADMINISTRATIVA
Route::group(['prefix'=>'sistema','middleware'=>['auth','isAdmin']],function(){
    Route::view('/','admin.home');

    Route::resource('admin-osc','Admin\OscController');
    Route::resource('admin-users','Admin\UsersController');
});






        

