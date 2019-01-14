<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Osc;
Use Auth;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function index(){
        $data = Projeto::where('user_id',Auth::user()->id)->get();
        $tab = 'projetos';
        return view('dashboard.projetos.index',compact('data','tab'));
    }

    public function create(){

        $tab = 'projetos';
        $osc = OSC::where('user_id',Auth::user()->id)->pluck('nome_fantasia','id');       
        return view('dashboard.projetos.create-edit',compact('tab','osc'));
    }


    public function store(Request $request){      

        $projeto = new Projeto();
        $projeto->descricao = $request->descricao;       
        $projeto->instancia = $request->instancia;
        $projeto->ambito = $request->ambito;       
        $projeto->segmento_cultural = $request->segmento_cultural; 
        $projeto->valor_meta = $request->valor_meta;
        // TODO:Incluir todos os campos


        // fim TODO
        $projeto->user_id = Auth::user()->id;
        $projeto->save();
        
        if($projeto){
            \Session::flash('mensagem',['msg'=>'Seu Projeto foi cadastrado e será avaliado pela plataforma','class'=>'alert-success']);
            return redirect()->route('dashboard.index');
        }else{
            return 'erro ocorrido';
        }
    }
}
