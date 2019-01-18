<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Osc;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class OscController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function create(){

        return view('dashboard.osc.create-edit',[
            'tab' => 'osc',
            'osc' => OSC::first()
        ]);
    }

    public function store(Request $request){
        //dd($request->all());
        $osc = $request->user()->oscs()->create($request->all());

        if($osc){
            Alert::success( 'Os dados da OSC foram atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('dashboard.index');
        }
        Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
        return redirect()->route('dashboard.index');
    }

    public function update(Request $request,$id){

        $osc = OSC::first()->update($request->all());

        if($osc){
            Alert::success( 'Seus dados foram Atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('dashboard.index');
        }
        Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
        return redirect()->route('dashboard.index');
    }
}
