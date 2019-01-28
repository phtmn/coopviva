<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Osc;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class OscController extends Controller
{
//    public function __construct(){
//        $this->middleware('can:osc');
//    }

    public function create(){

        return view('dashboard.osc.create-edit',[
            'tab' => 'osc',
            'osc' => OSC::first()
        ]);
    }

    public function store(Request $request){

       $bancoDoacao                = new banco();
       $bancoDoacao->banco         = $request->banco_doacao;
       $bancoDoacao->conta         = $request->conta_doacao;
       $bancoDoacao->agencia       = $request->agencia_doacao;
       $bancoDoacao->contaDv       = $request->contaDv_doacao;
       $bancoDoacao->save();
        
        
        $osc                            = new Osc();
        $osc->nome_fantasia             = $request->nome_fantasia;
        $osc->sigla_osc                 = $request->sigla_osc;
        $osc->cnae                      = $request->cnae;
        $osc->responsavel_legal         = $request->responsavel_legal;
        $osc->situacao_imovel           = $request->situacao_imovel;
        $osc->ano_inscricao_cnpj        = $request->ano_inscricao_cnpj;
        $osc->ano_fundacao              = $request->ano_fundacao;
        $osc->email                     = $request->email;
        $osc->site                      = $request->site;
        $osc->descricao_osc             = $request->descricao_osc;
        $osc->telefone                  = $request->telefone;
        $osc->objetivo_ods              = $request->objetivo_ods;
        $osc->metas_ods                 = $request->metas_ods;
        $osc->atividade_economica       = $request->atividade_economica;
        $osc->area_atuacao              = $request->area_atuacao;
        $osc->sub_area1                 = $request->sub_area1;
        $osc->sub_area2                 = $request->sub_area2;
        $osc->surgimento_osc            = $request->surgimento_osc;
        $osc->missao_osc                = $request->missao_osc;
        $osc->visao_osc                 = $request->visao_osc;
        $osc->finalidades_estatutarias_ods = $request->finalidades_estatutarias_ods;
        $osc->link_estatuto_osc         = $request->link_estatuso_osc;
        $osc->user_id                   = $request->user()->id;
        $osc->save();

        if($osc){
            Alert::success( 'Os dados da OSC foram atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('investimentos.index');
        }
        Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
        return redirect()->route('investimentos.index');
    }

    public function update(Request $request,$id){

        $osc = OSC::first()->update($request->all());

        if($osc){
            Alert::success( 'Seus dados foram Atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('investimentos.index');
        }
        Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
        return redirect()->route('investimentos.index');
    }

    public function show($id){

        $osc = OSC::find($id);
        //dd($osc->projetos->pluck('descricao','id'));
        return view('dashboard.incentivos.detalhe_osc',[
            'osc'       => $osc,
            'projetos'  => $osc->projetos,
            'tab'       => 'investir'
        ]);

    }

    public function oscs(){

        $data = OSC::all();
        return view('dashboard.incentivos.lista_oscs',[
            'data' => $data,
            'tab' => 'investir'
        ]);
    }
}
