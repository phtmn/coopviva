<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Endereco;
use App\Models\Osc;
use App\Models\Banco;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Throwable;
use Illuminate\Support\Facades\DB;

class OscController extends Controller
{

    public function create(){

        $osc = OSC::where('user_id',Auth::user()->id)->first();
        if($osc){
            return view('dashboard.osc.edit',[
                'tab'       => 'osc',
                'osc'       => $osc,
                'endereco'  => $osc->endereco(),
                'banco'     => $osc->banco(),
                'metas'     => $osc->metas()
            ]);
        }
        return view('dashboard.osc.create',[
            'tab'       => 'osc',
        ]);
    }

    public function store(Request $request){

        $result = DB::transaction(function() use ($request) {

            try {
                $bancoDoacao = new banco();
                $bancoDoacao->banco = $request->banco;
                $bancoDoacao->conta = $request->conta;
                $bancoDoacao->agencia = $request->agencia;
                $bancoDoacao->contaDv = $request->contaDv;
                $bancoDoacao->save();

                $endereco = new Endereco();
                $endereco->cep = $request->cep;
                $endereco->rua = $request->rua;
                $endereco->numero = $request->numero;
                $endereco->cidade = $request->cidade;
                $endereco->bairro = $request->bairro;
                $endereco->uf = $request->uf;
                $endereco->complemento = $request->complemento;
                $endereco->save();

                $osc = new Osc();
                $osc->nome_fantasia         = $request->nome_fantasia;
                $osc->sigla_osc             = $request->sigla_osc;
                $osc->cnae                  = $request->cnae;
                $osc->responsavel_legal     = $request->responsavel_legal;
                $osc->situacao_imovel       = $request->situacao_imovel;
                $osc->ano_inscricao_cnpj    = $request->ano_inscricao_cnpj;
                $osc->ano_fundacao          = $request->ano_fundacao;
                $osc->email                 = $request->email;
                $osc->site                  = $request->site;
                $osc->descricao_osc         = $request->descricao_osc;
                $osc->telefone              = $request->telefone;
                $osc->objetivo_ods          = $request->objetivo_ods;
                $osc->metas_ods             = $request->metas_ods;
                $osc->atividade_economica   = $request->atividade_economica;
                $osc->area_atuacao          = $request->area_atuacao;
                $osc->sub_area1             = $request->sub_area1;
                $osc->sub_area2             = $request->sub_area2;
                $osc->surgimento_osc        = $request->surgimento_osc;
                $osc->missao_osc            = $request->missao_osc;
                $osc->visao_osc             = $request->visao_osc;
                $osc->finalidades_estatutarias_ods = $request->finalidades_estatutarias_ods;
                $osc->link_estatuto_osc     = $request->link_estatuso_osc;
                $osc->banco_doacao_id       = $bancoDoacao->id;
                $osc->user_id               = $request->user()->id;
                $osc->endereco_id           = $endereco->id;
                $osc->save();

                Alert::success('Os dados da OSC foram atualizados', 'Sucesso')->persistent('Ok');
                return redirect()->route('investimentos.index');

            } catch (Throwable $t) {
                Alert::error('Algum Erro ocorrou'.$t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->route('investimentos.index');
            }
        },2); return $result;
    }

    public function update(Request $request,$id){

        $osc = OSC::where('user_id',Auth::user()->id)->first();
        $dados = $request->all();
        $result = DB::transaction(function() use ($request,$dados,$osc) {
            try {
                $osc->endereco()->update($dados);
                $osc->banco()->update($dados);

                $osc->nome_fantasia = $request->nome_fantasia;
                $osc->sigla_osc = $request->sigla_osc;
                $osc->cnae = $request->cnae;
                $osc->responsavel_legal = $request->responsavel_legal;
                $osc->situacao_imovel = $request->situacao_imovel;
                $osc->ano_inscricao_cnpj = $request->ano_inscricao_cnpj;
                $osc->ano_fundacao = $request->ano_fundacao;
                $osc->email = $request->email;
                $osc->site = $request->site;
                $osc->descricao_osc = $request->descricao_osc;
                $osc->telefone = $request->telefone;
                $osc->objetivo_ods = $request->objetivo_ods;
                $osc->metas_ods = $request->metas_ods;
                $osc->atividade_economica = $request->atividade_economica;
                $osc->area_atuacao = $request->area_atuacao;
                $osc->sub_area1 = $request->sub_area1;
                $osc->sub_area2 = $request->sub_area2;
                $osc->surgimento_osc = $request->surgimento_osc;
                $osc->missao_osc = $request->missao_osc;
                $osc->visao_osc = $request->visao_osc;
                $osc->finalidades_estatutarias_ods = $request->finalidades_estatutarias_ods;
                $osc->link_estatuto_osc = $request->link_estatuso_osc;

                $osc->save();
                Alert::success('Seus dados foram Atualizados', 'Sucesso')->persistent('Ok');
                return redirect()->route('investimentos.index');
            } catch (Throwable $t) {
                Alert::warning('Não foi possível atualizar seus dados' . $t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->route('investimentos.index');
            }
        },2);
        return $result;
    }
}
