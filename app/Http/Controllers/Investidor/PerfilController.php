<?php

namespace App\Http\Controllers\Investidor;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Alert;

class PerfilController extends Controller
{

    public function index(){

       return view('investidor.perfil.index');
    }

    public function perfil(){
        
        $perfil = User::find(auth()->user()->id);

        if($perfil){
            return view('investidor.perfil.edit',compact('perfil'));
        }
            return view('investidor.perfil.create');
    }

    public function update(Request $request){

        //dd($request->all());
        $perfil = User::find(auth()->user()->id)->update(
        [
            'nome_completo'     => $request->nome_completo,
            'nome_social'       => $request->nome_social,
            'dt_nascimento'     => $request->dt_nascimento,
            'genero'            => $request->genero,
            'cpf_cnpj'          => $request->cpf_cnpj,
            'razao_social'      => $request->razao_social,
            'nome_fantasia'     => $request->nome_fantasia,
            'cep'               => $request->cep,
            'logradouro'        => $request->logradouro,
            'numero'            => $request->numero,
            'complemento'       => $request->complemento,
            'bairro'            => $request->bairro,
            'cidade'            => $request->cidade,
            'uf'                => $request->uf,
            'telefone'          => $request->telefone,
            'celular'           => $request->celular,
            'user_id'           => auth()->user()->id
        ]);

        if($perfil){
            Alert::success( 'Seus dados foram Salvos','Sucesso')->persistent('Ok');
            return redirect()->route('perfil.index');
        }
        Alert::warning( 'Não foi possível Salvar seus dados','Erro')->persistent('Ok');
            return redirect()->route('perfil.index');
    }
}
