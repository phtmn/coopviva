<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Investimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class InvestimentosController extends Controller
{
    public function index(){

        $data = Investimento::all();
        return view('dashboard.investimentos.index',[
            'data'=> $data,
            'tab' => 'investimentos'
        ]);
    }

    public function callback(Request $request){

        dd($request->all());
        $investimento = Investimento::find($request->external_reference);

        $investimento->mp_codigo    = $request->merchant_order_id;
        $investimento->mp_pagamento = $request->preference_id;
        $investimento->status       = $request->collection_status;
        $investimento->forma_pgto   = $request->payment_type;
        $investimento->save();


        Alert::succes('Seu Investimento foi aprovado, em breve disponibilizaremos o recibo','Genial')->persistent('OK');
        return redirect()->route('investimentos.index');

    }
}
