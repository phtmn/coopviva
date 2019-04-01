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
            'bancos' => DB::table('bancos')->pluck('banco','id')
        ]);
    }

    public function edit($id){
        $projeto  = Projeto::find($id);
        return view('osc.projetos.edit',[
            'projeto'           => $projeto,
            'bancos'            => DB::table('bancos')->pluck('banco','id')
        ]);
    }


    public function store(Request $request){

        if( ($request->banco_docacao == null) && ($request->banco_patrocinio == null) ){
            Alert::warning('Voce Precisa inserir dados bancários','Ops')->persistent('ok');
            return redirect()->back()->withInput($request->all());
        }

        $result = DB::transaction(function() use($request){
            try{

                $projeto = Projeto::create([
                    'nome_projeto'          => $request->nome_projeto,
                    'descricao_resumida'    => $request->descricao_resumida,
                    'responsavel_projeto'   => $request->responsavel_projeto,
                    'valor_projeto'         => toMoney($request->valor_projeto),
                    'valor_meta'            => toMoney($request->valor_meta),
                    'data_inicio'           => $request->data_inicio,
                    'data_final'            => $request->data_final,

                    'lei_incentivo'         => $request->lei_incentivo,
                    'lei'                   => $request->lei,
                    'artigo'                => $request->artigo,
                    'ambito'                => $request->ambito,
                    'num_registro1'         => $request->num_registro1,
                    'num_registro2'         => $request->num_registro2,
                    'segmento'              => $request->segmento,

                    'resumo'                => $request->resumo,
                    'objetivos'             => $request->objetivos,
                    'justificativa'         => $request->justificativa,
                    'publico_alvo'          => $request->publico_alvo,
                    'impactos_esperados'    => $request->impactos_esperados,
                    'contra_partidas'       => $request->contra_partidas,

                    'prop_nome'             => $request->prop_nome,
                    'prop_documento'        => $request->prop_documento,
                    'prop_telefone1'        => $request->prop_telefone1,
                    'prop_telefone2'        => $request->prop_telefone2,
                    'prop_email1'           => $request->prop_email1,
                    'prop_email2'           => $request->prop_email2,

                    'banco_doacao'          => $request->banco_doacao,
                    'agencia_doacao'        => $request->agencia_doacao,
                    'conta_doacao'          => $request->conta_doacao,
                    'op_doacao'             => $request->op_doacao,

                    'banco_patrocinio'      => $request->banco_patrocinio,
                    'agencia_patrocinio'    => $request->agencia_patrocinio,
                    'conta_patrocinio'      => $request->conta_patrocinio,
                    'op_patrocinio'         => $request->op_patrocinio,

                    'status'                => 'Enviado',
                    'osc_id'                => $request->user()->osc()->id

                ]);


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

         $result = DB::transaction(function () use ($request,$id){
             try{

                 $projeto = Projeto::find($id)->Update([
                     'nome_projeto'          => $request->nome_projeto,
                     'descricao_resumida'    => $request->descricao_resumida,
                     'responsavel_projeto'   => $request->responsavel_projeto,
                     'valor_projeto'         => toMoney($request->valor_projeto),
                     'valor_meta'            => toMoney($request->valor_meta),
                     'data_inicio'           => $request->data_inicio,
                     'data_final'            => $request->data_final,

                     'lei_incentivo'         => $request->lei_incentivo,
                     'lei'                   => $request->lei,
                     'artigo'                => $request->artigo,
                     'ambito'                => $request->ambito,
                     'num_registro1'         => $request->num_registro1,
                     'num_registro2'         => $request->num_registro2,
                     'segmento'              => $request->segmento,

                     'resumo'                => $request->resumo,
                     'objetivos'             => $request->objetivos,
                     'justificativa'         => $request->justificativa,
                     'publico_alvo'          => $request->publico_alvo,
                     'impactos_esperados'    => $request->impactos_esperados,
                     'contra_partidas'       => $request->contra_partidas,

                     'prop_nome'             => $request->prop_nome,
                     'prop_documento'        => $request->prop_documento,
                     'prop_telefone1'        => $request->prop_telefone1,
                     'prop_telefone2'        => $request->prop_telefone2,
                     'prop_email1'           => $request->prop_email1,
                     'prop_email2'           => $request->prop_email2,

                     'banco_doacao'          => $request->banco_doacao,
                     'agencia_doacao'        => $request->agencia_doacao,
                     'conta_doacao'          => $request->conta_doacao,
                     'op_doacao'             => $request->op_doacao,

                     'banco_patrocinio'      => $request->banco_patrocinio,
                     'agencia_patrocinio'    => $request->agencia_patrocinio,
                     'conta_patrocinio'      => $request->conta_patrocinio,
                     'op_patrocinio'         => $request->op_patrocinio,

                     'status'                => 'Enviado',

                 ]);


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
