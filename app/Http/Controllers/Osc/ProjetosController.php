<?php

namespace App\Http\Controllers\Osc;

use App\Models\Banco;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use Alert;
use Throwable;


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
        return view('osc.projetos.index',[
            'data'  => $osc->projetos()->get()
        ]);
    }

    public function create(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }

        return view('osc.projetos.create',[
            'instancias'    =>  DB::table('instancias')->pluck('nome','id'),
            'ambitos'       =>  DB::table('ambitos')->pluck('nome','id'),
            'segmentos'     =>  DB::table('segmentos')->pluck('nome','id'),
        ]);
    }

    public function edit($id){
        $projeto  = Projeto::find($id);
        return view('osc.projetos.edit',[
            'projeto'           => $projeto,
            'instancias'        =>  DB::table('instancias')->pluck('nome','id'),
            'ambitos'           =>  DB::table('ambitos')->pluck('nome','id'),
            'segmentos'         =>  DB::table('segmentos')->pluck('nome','id'),
            'bancoPatrocinio'   => $projeto->bancoPatrocinio(),
            'bancoDoacao'       => $projeto->bancoDoacao(),
        ]);
    }


    public function store(Request $request){

        if( ($request->banco_docacao == null) && ($request->banco_patrocinio == null) ){
            Alert::warning('Voce Precisa inserir dados bancários','Ops')->persistent('ok');
            return redirect()->back()->withInput($request->all());
        }

        $result = DB::transaction(function() use($request){
            try{
                $banco_doacao               = new Banco();
                $banco_doacao->banco        = $request->banco_doacao;
                $banco_doacao->tipo_conta   = 1;
                $banco_doacao->agencia      = $request->agencia_doacao;
                $banco_doacao->conta        = $request->conta_doacao;
                $banco_doacao->contaDv      = $request->contaDv_doacao;
                $banco_doacao->save();

                $banco_patrocinio               = new Banco();
                $banco_patrocinio->banco        = $request->banco_patrocinio;
                $banco_patrocinio->tipo_conta   = 2;
                $banco_patrocinio->agencia      = $request->agencia_patrocinio;
                $banco_patrocinio->conta        = $request->conta_patrocinio;
                $banco_patrocinio->contaDv      = $request->contaDv_patrocinio;
                $banco_patrocinio->save();

                $projeto                        = new Projeto();
                $projeto->num_registro1         = $request->num_registro1;
                $projeto->num_registro2         = $request->num_registro2;
                $projeto->nome                  = $request->nome;
                $projeto->instancia_id          = $request->instancia_id;
                $projeto->ambito_id             = $request->ambito_id;
                $projeto->segmento_id           = $request->segmento_id;

                $projeto->responsavel_nome      = $request->responsavel_nome;
                $projeto->responsavel_cpf_cnpj  = $request->responsavel_cpf_cnpj;
                $projeto->responsavel_telefone1 = $request->responsavel_telefone1;
                $projeto->responsavel_telefone2 = $request->responsavel_telefone2;
                $projeto->responsavel_email1    = $request->responsavel_email1;
                $projeto->responsavel_email2    = $request->responsavel_email2;

                $projeto->objetivo_geral        = $request->objetivo_geral;
                $projeto->objetivos_especificos = $request->objetivos_especificos;
                $projeto->justificativa         = $request->justificativa;
                $projeto->publico_alvo          = $request->publico_alvo;
                $projeto->impactos_esperados    = $request->impactos_esperados;
                $projeto->descricao             = $request->descricao;

                $projeto->artigo                = $request->artigo;
                $projeto->valor_meta            = toMoney($request->valor_meta);
                $projeto->banco_doacao_id       = $banco_doacao->id;
                $projeto->banco_patrocinio_id   = $banco_patrocinio->id;
                $projeto->osc_id                = $request->user()->osc()->id;
                $projeto->status                = 'enviado';
                $projeto->save();

                if($projeto){
                    Alert::success( 'Projeto Cadastrado com Sucesso','Sucesso')->persistent('Ok');
                    return redirect()->route('projetos.index');
                }

            }catch (Throwable $t){
                Alert::warning( 'A Operação não foi realizada'.$t->getMessage(),'Erro')->persistent('Ok');
                return redirect()->route('projetos.create')->withInput($request->all());
            }

        },2);

        return $result;
    }

    public function update(Request $request,$id){

         $projeto = Projeto::findOrFail($id);

         $result = DB::transaction(function () use ($request,$projeto){
             try{
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

                 $projeto->num_registro1         = $request->num_registro1;
                 $projeto->num_registro2         = $request->num_registro2;
                 $projeto->segmento_id           = $request->segmento_id;
                 $projeto->nome                  = $request->nome;
                 $projeto->instancia_id          = $request->instancia_id;
                 $projeto->ambito_id             = $request->ambito_id;

                 $projeto->responsavel_nome      = $request->responsavel_nome;
                 $projeto->responsavel_cpf_cnpj  = $request->responsavel_cpf_cnpj;
                 $projeto->responsavel_telefone1 = $request->responsavel_telefone1;
                 $projeto->responsavel_telefone2 = $request->responsavel_telefone2;
                 $projeto->responsavel_email1    = $request->responsavel_email1;
                 $projeto->responsavel_email2    = $request->responsavel_email2;

                 $projeto->objetivo_geral        = $request->objetivo_geral;
                 $projeto->objetivos_especificos = $request->objetivos_especificos;
                 $projeto->justificativa         = $request->justificativa;
                 $projeto->publico_alvo          = $request->publico_alvo;
                 $projeto->impactos_esperados    = $request->impactos_esperados;
                 $projeto->artigo                = $request->artigo;
                 $projeto->save();

                 if($projeto){
                     Alert::success( 'Dados Alterados com Sucesso','Sucesso')->persistent('Ok');
                     return redirect()->route('projetos.index');
                 }

             }catch (Throwable $t){
                 Alert::warning( 'A Operação não foi realizada'.$t->getMessage(),'Erro')->persistent('Ok');
                 return redirect()->route('projetos.index')->withInput($request->all());
             }

         },2);
         return $result;

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

    public function mudarInativo($id){

        $projeto = Projeto::find($id)->delete();
        Alert::warning('Você Acabou de deletar esse projeto','Que pena')->persistent('OK');
        return redirect()->back();
    }
    
}
