<?php

namespace App\Http\Controllers\Dashboard;

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
        return view('dashboard.investimentos.index',[
            'data'=> $data,
            'tab' => 'investimentos'
        ]);
    }

    public function oscs(){
        $data = DB::table('oscs')->get();
        return view('dashboard.investimentos.lista_oscs',[
            'data' => $data,
            'tab' => 'investir'
        ]);
    }

    public function detalhe($id){

        return view('dashboard.investimentos.detalhe_osc',[
            'osc'       => Osc::find($id),
            'metas'     => DB::table('osc_metas')->where('osc_id',$id)->get(),
            'galerias'   => DB::table('galerias')->where('osc_id',$id)->get(),
            'tab'       => 'investir'
        ]);
    }

    public function callback(Request $request){

        $investimento = Investimento::find($request->external_reference);       

        switch ($request->collection_status){
            case 'pending' :                     
                    $investimento->status           = 'Aguardando Pagamento';
                    $investimento->formaPagamento   = $request->payment_type;
                    $investimento->save();
                    break;
            case 'success' :                     
                    $investimento->status           = 'Investimento Realizado';
                    $investimento->mp_codigo        = $request->merchant_order_id;
                    $investimento->mp_pagamento     = $request->preference_id;
                    $investimento->mp_status        = $request->collection_status;
                    $investimento->formaPagamento   = $request->payment_type;
                    $investimento->save();
                    break;            
        }
        Alert::success('Atualizamos seu Investimento','Genial')->persistent('OK');
        return redirect()->route('investimentos.index');
    }

    public function cancelar($id){
        $investimento = Investimento::find($id)->update(['status' => 'Cancelado']);
        Investimento::find($id)->delete();

        Alert::warning('Você Cancelou esse investimento','Tenso!')->persistent('Ok');
        return redirect()->back();
    }
}
