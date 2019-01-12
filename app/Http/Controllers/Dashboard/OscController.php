<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Osc;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OscController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }
    
    public function index(){
        $data = OSC::where('user_id',Auth::user()->id)->get();
        $tab = 'osc';
        return view('dashboard.osc.index',compact('data','tab'));
    }

    public function create(){
        $tab = 'osc';
        return view('dashboard.osc.create-edit',compact('tab'));
    }

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
            return redirect()->route('dashboard.osc.index');
        }else{
            return 'erro ocorrido';
        }
    }
}
