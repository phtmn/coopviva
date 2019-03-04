<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Banco;
use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;
use Alert;

class PerfilController extends Controller
{

    public function index(){

       return view('investidor.perfil.index');
    }

    public function create(){
        
        $perfil = Perfil::where('user_id',Auth::user()->id)->first();

        if($perfil){
            return view('investidor.perfil.edit',[
                'tab'       => 'perfil',
                'perfil'    => $perfil,
                'endereco'  => $perfil->endereco(),
                'banco'     => $perfil->banco()
            ]);
        }
        return view('investidor.perfil.create',[
            'tab'       => 'perfil',
        ]);
    }

    public function store(Request $request){

        $dados      = $request->all();
        $endereco   = Endereco::create($dados);
        $banco      = Banco::create($dados);

        $perfil                     = new Perfil();
        $perfil->nome_completo      = $request->nome_completo;
        $perfil->data_nascimento    = $request->data_nascimento;
        $perfil->telefone           = $request->telefone;
        $perfil->genero              = $request->genero;
        $perfil->cpf                = $request->cpf;
        $perfil->cnpj               = $request->cnpj;
        $perfil->razao_social       = $request->razao_social;
        $perfil->nome_fantasia      = $request->nome_fantasia;
        $perfil->endereco_id        = $endereco->id;
        $perfil->banco_id           = $banco->id;
        $perfil->user_id            = $request->user()->id;

        $perfil->save();

        if($perfil){
            Alert::success( 'Seus dados foram Salvos','Sucesso')->persistent('Ok');
            return redirect()->route('perfil.index');
        }
        Alert::warning( 'Não foi possível Salvar seus dados','Erro')->persistent('Ok');
            return redirect()->route('perfil.index');
    }

    public function update(Request $request,$id){
        //dd($request->all());
        $perfil = Perfil::find($id);

        $dados      = $request->all();
        $perfil->endereco()->update($dados);
        $perfil->banco()->update($dados);

        $perfil->nome_completo      = $request->nome_completo;
        $perfil->data_nascimento    = $request->data_nascimento;
        $perfil->telefone           = $request->telefone;
        $perfil->genero             = $request->genero;
        $perfil->cpf                = $request->cpf;
        $perfil->cnpj               = $request->cnpj;
        $perfil->razao_social       = $request->razao_social;
        $perfil->nome_fantasia      = $request->nome_fantasia;

        $perfil->save();

        if($perfil){
            Alert::success( 'Seus dados foram Salvos','Sucesso')->persistent('Ok');
            return redirect()->route('perfil.index');
        }
            Alert::warning( 'Não foi possível Salvar seus dados','Erro')->persistent('Ok');
            return redirect()->route('perfil.index');
    }
}
