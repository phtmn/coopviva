<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function index(){
        return 'projetos';
    }

    public function create(){

        
        return view('site.projetos.create-edit');
    }


    public function store(Request $request){
        //dd($request->all());

        $projeto = new Projeto();
        $projeto->descricao = $request->descricao;
        $projeto->imagem = $request->imagem;
        $projeto->instancia = $request->instancia;
        $projeto->ambito = $request->ambito;
        $projeto->num_registro1 = $request->num_registro1;
        $projeto->num_registro2 = $request->num_registro2;
        $projeto->segmento_cultural = $request->segmento_cultural;
        $projeto->artigo = $request->artigo;

        $projeto->banco_patrocinio = $request->banco_patrocinio;
        $projeto->banco_agencia_patrocinio = $request->banco_agencia_patrocinio;
        $projeto->banco_conta_patrocinio = $request->banco_conta_patrocinio;
        $projeto->banco_doacao = $request->banco_doacao;
        $projeto->banco_agencia_doacao = $request->banco_agencia_doacao;
        $projeto->banco_conta_doacao = $request->banco_conta_doacao;

        $projeto->nome_prop = $request->nome_prop;
        $projeto->documento_prop = $request->nome_prop;
        $projeto->assinatura = $request->assinatura;
        $projeto->responsavel_empresa = $request->responsavel_empresa;
        $projeto->telefone_1 = $request->telefone_1;
        $projeto->telefone_2 = $request->telefone_2;

        $projeto->email_principal = $request->email_principal;
        $projeto->email_secundario = $request->email_secundario;

        $projeto->valor_meta = $request->valor_meta;

        $projeto->osc_id = 2;
        $projeto->save();
        
        if($projeto){
            \Session::flash('mensagem',['msg'=>'Seu Projeto foi cadastrado e será avaliado','class'=>'alert-success']);
            return redirect()->route('site.painel');
        }else{
            return 'erro ocorrido';
        }
    }
}
