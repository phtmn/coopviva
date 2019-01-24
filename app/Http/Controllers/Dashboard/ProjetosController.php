<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Banco;
use App\Models\Endereco;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use Alert;


class ProjetosController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function index(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        //dd($osc);
        return view('dashboard.projetos.index',[
            'tab'   => 'lista-projetos',
            'data'  => Projeto::all()
        ]);
    }

    public function create(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }

        return view('dashboard.projetos.create',[
            'tab'   =>  'projetos'
        ]);
    }

    public function edit($id){
        $projeto  = Projeto::find($id);
        return view('dashboard.projetos.edit',[
            'projeto'           => $projeto,
            'proponente'        => $projeto->proponente(),
            'bancoPatrocinio'   => $projeto->bancoPatrocinio(),
            'bancoDoacao'       => $projeto->bancoDoacao(),
            'tab'       => 'projeto'
        ]);
    }


    public function store(Request $request){

        $proponente = new Pessoa();
        $proponente->nome       = $request->nome;
        $proponente->cpf        = $request->cpf;
        $proponente->cnpj           = $request->cnpj;
        $proponente->telefone_1 = $request->telefone_1;
        $proponente->telefone_2 = $request->telefone_2;
        $proponente->email_1    = $request->email_1;
        $proponente->email_2    = $request->email_2;
        $proponente->save();

        $banco_doacao               = new Banco();
        $banco_doacao->banco        = $request->banco_doacao;
        $banco_doacao->tipo_conta   = 'doacao';
        $banco_doacao->agencia      = $request->agencia_doacao;
        $banco_doacao->conta        = $request->conta_doacao;
        $banco_doacao->contaDV      = $request->contaDV_docao;
        $banco_doacao->save();

        $banco_patrocinio               = new Banco();
        $banco_patrocinio->banco        = $request->banco_patrocinio;
        $banco_patrocinio->tipo_conta   = 'patrocinio';
        $banco_patrocinio->agencia      = $request->agencia_patrocinio;
        $banco_patrocinio->conta        = $request->conta_patrocinio;
        $banco_patrocinio->contaDV      = $request->contaDV_patrocinio;
        $banco_patrocinio->save();

        $projeto                        = new Projeto();
        $projeto->descricao             = $request->descricao;
        $projeto->instancia             = $request->instancia;
        $projeto->ambito                = $request->ambito;
        $projeto->num_registro1         = $request->num_registro1;
        $projeto->num_registro2         = $request->num_registro2;
        $projeto->segmento_cultural     = $request->segmento_cultural;
        $projeto->artigo                = $request->artigo;
        $projeto->valor_meta            = $request->valor_meta;
        $projeto->proponente_id         = $proponente->id;
        $projeto->banco_doacao_id       = $banco_doacao->id;
        $projeto->banco_patrocinio_id   = $banco_patrocinio->id;
        $projeto->osc_id                = $request->user()->osc()->id;
        $projeto->save();

        if($projeto){
            Alert::success( 'Projeto Cadastrado com Sucesso','Sucesso')->persistent('Ok');
            return redirect()->route('projetos.index');
        }
            Alert::warning( 'A Operação não foi realizada','Erro')->persistent('Ok');
            return redirect()->route('projetos.index');

    }

    public function update(Request $request,$id){

         $projeto = Projeto::find($id);

         $bancoPatrocinio                = $projeto->bancoPatrocinio();
         $bancoPatrocinio->banco         = $request->banco_patrocinio;
         $bancoPatrocinio->conta         = $request->conta_patrocinio;
         $bancoPatrocinio->agencia       = $request->agencia_patrocinio;
         $bancoPatrocinio->contaDv       = $request->contaDv_patrocinio;
         $bancoPatrocinio->save();

         $bancoDaocao                = $projeto->bancoDoacao();
         $bancoDaocao->banco         = $request->banco_doacao;
         $bancoDaocao->conta         = $request->conta_doacao;
         $bancoDaocao->agencia       = $request->agencia_doacao;
         $bancoDaocao->contaDv       = $request->contaDv_doacao;
         $bancoDaocao->save();

         $projeto->descricao             = $request->descricao;
         $projeto->instancia             = $request->instancia;
         $projeto->ambito                = $request->ambito;
         $projeto->num_registro1         = $request->num_registro1;
         $projeto->num_registro2         = $request->num_registro2;
         $projeto->segmento_cultural     = $request->segmento_cultural;
         $projeto->artigo                = $request->artigo;
         $projeto->valor_meta            = $request->valor_meta;
         $projeto->save();

        if($projeto){
            Alert::success( 'Dados Alterados com Sucesso','Sucesso')->persistent('Ok');
            return redirect()->route('projetos.index');
        }
        Alert::warning( 'A Operação não foi realizada','Erro')->persistent('Ok');
        return redirect()->route('projetos.index');
    }

    public function galeria($id){
        return view('dashboard.projetos.galeria',[
            'tab' => 'galeria'
        ]);
    }

    public function save(Request $request){
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
    
}
