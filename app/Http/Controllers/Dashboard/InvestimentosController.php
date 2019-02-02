<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Investimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\DB;

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
            'osc'       => DB::table('oscs')->where('id',$id)->first(),
            'metas'     => DB::table('osc_metas')->where('osc_id',$id)->get(),
            'galerias'   => DB::table('galerias')->where('osc_id',$id)->get(),
            'tab'       => 'investir'
        ]);
    }

    public function callback(Request $request){

        //dd($request->all());
        $investimento = Investimento::find($request->external_reference);

        $investimento->mp_codigo        = $request->merchant_order_id;
        $investimento->mp_pagamento     = $request->preference_id;
        $investimento->status           = $request->collection_status;
        $investimento->formaPagamento   = $request->payment_type;
        $investimento->save();

        Alert::success('Atualizamos seu Pedido','Genial')->persistent('OK');
        return redirect()->route('investimentos.index');

    }
}
