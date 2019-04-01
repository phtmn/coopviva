<?php

Auth::routes(['verify'=>true]);



Route::view('/','site.index')->name('site.index');
Route::view('/termo-de-uso','site.termodeuso');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/feedback', 'FeedbackController@create')->name('site.feedback');
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

Route::get('/quero_investir','Investidor\InvestimentosController@lista_oscs')->name('quero_investir');
Route::get('/quero_investir/{id}','Investidor\InvestimentosController@detalhe_oscs')->name('detalhe.osc');

Route::get('/quero_investir/projeto/{id}','Investidor\InvestimentosController@detalhe_projeto')->name('detalhe.projeto');

//Grupo de Rotas para Investidor
Route::group( ['middleware'=> ['auth','verified','perfil'],'prefix'=>'painel-investidor','namespace'=>'Investidor'],function(){

    Route::get('/perfil','PerfilController@index')->name('perfil.index');
    Route::get('/meus-dados','PerfilController@perfil')->name('perfil.show');
    Route::post('/perfil/atualiza','PerfilController@update')->name('perfil.update');

    Route::resource('investimentos','InvestimentosController');


    Route::get('/investir/{id}','CheckoutController@formIncentivar')->name('investir');
    Route::post('/pagar','CheckoutController@pagar')->name('pagar');
    Route::get('/investimento/d/{id}','InvestimentosController@cancelar')->name('investimento.cancelar');
    Route::get('/investimento/{status}','InvestimentosController@callback');
    Route::get('/investimento/detalhe/{id}','InvestimentosController@detalhe')->name('investimento.detalhe');

});

//Grupo de Rotas para OSC
Route::group( ['middleware'=> ['auth','verified','can:osc'],'prefix'=>'painel-osc','namespace'=>'Osc'],function() {

    Route::view('/','layouts.dashboard')->name('osc.dashboard');
    Route::post('/uploadFoto','OscController@uploadFoto')->name('osc.uploadFoto');

    Route::resource('osc','OscController');
    Route::resource('projetos','ProjetosController');

    Route::resource('documentos','DocumentosController');

    Route::resource('galeria','GaleriaController');

    Route::get('s3-remover','GaleriaController@removerGaleria')->name('s3-remover');


    Route::get('/meus-investimentos','OscController@getInvestimentos')->name('investimentos');

    Route::get('/objetivos-ods','MetasController@metas')->name('osc.objetivos');
    Route::get('/metas/{ods}', 'MetasController@metas')->name('metas');
    Route::post('/metas', 'MetasController@gravar')->name('metas.salvar');
    Route::get('/meta/remover/{id}','MetasController@removerMeta')->name('meta.remover');

    Route::get('projeto/{id}/galeria','ProjetosController@galeria')->name('projeto.galeria');
    Route::post('galeria.save','ProjetosController@save')->name('galeria.save');
    Route::get('projeto/i/{id}','ProjetosController@mudarInativo')->name('projeto.inativo');

    Route::get('/detalhe','OscController@landingPage')->name('osc.landingPage');
    Route::get('/detalhe/projeto/{id}','OscController@landingPageProjeto')->name('projeto.landingPage');

});

//# ROTAS PARA A AREA ADMINISTRATIVA
Route::group(['prefix'=>'sistema','middleware'=>'auth'],function(){
    Route::view('/','admin.home');

    Route::resource('admin-osc','Admin\OscController');
    Route::resource('admin-users','Admin\UsersController');
});






        

