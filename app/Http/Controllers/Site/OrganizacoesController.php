<?php

namespace App\Http\Controllers\Site;

use App\Models\Osc;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizacoesController extends Controller
{
    public function store(Request $request){
        
        $osc = new Osc();
        $osc->nome_fantasia = $request->nome_fantasia;
        $osc->sigla_osc     = $request->sigla_osc;
        $osc->ano_fundacao  = $request->ano_fundacao;
        $osc->email         = $request->email;
        $osc->telefone      = $request->telefone;
        $osc->user_id       = Auth::user()->id;
        /*Todo: adicionar os campos que falta

        */
        $osc->save();

        if($osc){
            \Session::flash('mensagem',['msg'=>'Sua OSc foi cadastrada com sucesso','class'=>'alert-success']);
            return redirect()->route('site.painel');
        }else{
            return 'erro ocorrido';
        }
    }
}
