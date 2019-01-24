<?php
Auth::routes(['verify'=>true]);
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

//Rotas para paginas do site NAO PRECISA USAR CONTROLLER USE ROUTE::VIEW 
Route::view('/','site.index', ['active' => 'home']);
Route::view('/sobre', 'site.paginas.sobre', ['active' => 'sobre'])->name('sobre_nos');
Route::view('/agenda2030', 'site.paginas.agenda2030', ['active' => 'agenda2030'])->name('agenda_2030');
Route::view('/oscs','site.osc.index', ['active' => 'oscs'])->name('oscs');

//Rotas para manutenção de cadastros-logins
Route::view('/cadastro','site.cadastro.cadastro',['active'=>'cadastro'])->name('site.cadastro');
Route::view('/entrar','site.cadastro.login',['active'=>'login'])->name('site.login');
Route::view('/perfil','site.cadastro.perfil',['active'=>'login'])->name('site.perfil');

//Rotas para dashboards do site
Route::group(['middleware'=>['auth','verified'],'prefix'=>'dashboard'],function(){

    Route::get('/','Dashboard\DashboardController@index')->name('dashboard.index'); 
    
    Route::resource('osc','Dashboard\OscController');
    Route::resource('projetos','Dashboard\ProjetosController');
    Route::resource('perfil','Dashboard\PerfilController');
    Route::resource('investimentos','Dashboard\InvestimentosController');

    Route::get('projeto/{id}/galeria','Dashboard\ProjetosController@galeria')->name('projeto.galeria');
    Route::post('galeria.save','Dashboard\ProjetosController@save')->name('galeria.save');

    Route::get('/quero_investir','Dashboard\OscController@oscs')->name('listar.oscs');
    Route::get('/investir/{id}','Financeiro\CheckoutController@formIncentivar')->name('investir');
    Route::post('/pagar','Financeiro\CheckoutController@pagar')->name('pagar');

    Route::get('/investimento/{status}','Dashboard\InvestimentosController@callback');

});


Route::group(['prefix'=>'sistema','middleware'=>['auth','isAdmin']],function(){
    Route::view('/','admin.home');

    Route::resource('admin-osc','Admin\OscController');
    Route::resource('admin-users','Admin\UsersController');
});

Route::get('/usuario-teste','Financeiro\CheckoutController@usuarioTeste');






        

