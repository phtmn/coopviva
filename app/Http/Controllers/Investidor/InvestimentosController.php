<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Investimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Osc;

class InvestimentosController extends Controller
{
    public function index(){

        $data = Investimento::all();

        return view('investidor.investimentos.index',[
            'data'=> $data
        ]);

    }

    public function lista_oscs(){
        $data = DB::table('oscs')->get();
        return view('investidor.investimentos.lista_oscs',[
            'data' => $data
        ]);
    }

    public function detalhe_oscs($id){

        return view('investidor.investimentos.landing_osc',[
            'osc'       => Osc::find($id),
            'metas'     => DB::table('osc_metas')->where('osc_id',$id)->get(),
            'galerias'  => DB::table('galerias')->where('osc_id',$id)->get(),
            'projetos'  => DB::table('projetos')->where('osc_id',$id)->get()
        ]);
    }

    public function callback(Request $request){

        $investimento = Investimento::find($request->external_reference);
        $novoStatus = null;

        switch ($request->collection_status){
            case 'pending'    : $novoStatus = 'Aguardando Pagamento'; break;
            case 'approved'   : $novoStatus = 'Investimento Realizado'; break;
            case 'failure'    : $novoStatus = 'Investimento não Realizado'; break;            
            case 'in_process' : $novoStatus = 'Em processo de Pagamento'; break;            
        }
        
        $investimento->mp_codigo        = $request->merchant_order_id;
        $investimento->mp_pagamento     = $request->preference_id;
        $investimento->mp_status        = $request->collection_status;
        $investimento->status           = $novoStatus;
        $investimento->formaPagamento   = $request->payment_type;
        $investimento->save();

        Alert::info('Atualizamos seu Investimento','Genial')->persistent('OK');
        return redirect()->route('investimentos.index');
    }

    public function cancelar($id){
        Investimento::find($id)->update(['status' => 'Cancelado']);
        Investimento::find($id)->delete();

        Alert::warning('Você Cancelou esse investimento','Tenso!')->persistent('Ok');
        return redirect()->back();
    }
}
