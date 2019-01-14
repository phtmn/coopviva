<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;

class PerfilController extends Controller
{   

    public function create(){
        $perfil = Perfil::where('user_id', Auth::user()->id)->first();          
        $tab    = 'perfil';
        return view('dashboard.perfil.create-edit',compact('tab','perfil'));
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
        return redirect()->route('dashboard.index');

    }

    public function update(Request $request,$id){
           
       $data = $request->all();
       $perfil = Perfil::find($id)->update($data);

       if($perfil){
         return redirect()->route('dashboard.index');
       }else{
           return 'erro ao atualizar';
       }
    }
}
