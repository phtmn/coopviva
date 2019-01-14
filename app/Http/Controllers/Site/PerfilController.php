<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;

class PerfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('site.cadastro.perfil');
    }

    public function store(Request $request){
        
        //para saber o que está vindo do formulário descomentar a linha abaixo linha:20
        //dd($request->all());

        $perfil = new Perfil();
        $perfil->user_id = Auth::user()->id;
        $perfil->nome_completo = $request['nome_completo'];
        $perfil->tipo_perfil = $request['tipo_perfil'];
        $perfil->data_nascimento = $request['data_nascimento'];
        $perfil->telefone_principal = $request['telefone_principal'];
        $perfil->cpf = $request['cpf'];
        $perfil->cnpj = $request['cnpj'];
        $perfil->razao_social = $request['razao_social'];
        $perfil->nome_fantasia = $request['nome_fantasia'];
        $perfil->cep = $request['cep'];
        $perfil->endereco = $request['endereco'];
        $perfil->cidade = $request['cidade'];
        $perfil->estado = $request['estado'];
        $perfil->complemento = $request['complemento'];
        //TODO: inserir os campos relacionado a perfil


        //grava os dados no banco
        $perfil->save();
        return redirect()->route('site.painel');

    }

    public function update(Request $request){

        try {
            $perfil = $request->all();
    
            $user_id = tabPerfil::findOrFail($id);
            $user_id->update($perfil);
    
            return redirect()->route('site.painel')->with('success','Os dados foram atualizados com sucesso.');
    
        } catch (Exception $ex) {
    
            return redirect('site.painel')->with('error', 'Ocorreu um erro ao tentar atualizar os dados!');
    
        }
    }
}
