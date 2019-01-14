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

        $messages = [
            'required'  => 'O campo :attribute é obrigatório', 
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', 
            'max'       => 'A quantidade de caracteres do campo :attribute é maxima', 
            'string'    => 'O campo :attribute não é do tipo texto',
            'unique'    => 'O valor do campo :attribute já está em uso, escolha outro'
        ];

        $validator = Validator::make($request->all(),[  
            'decricao'              => 'required|min:10|max:100|string|',
            'instancia'             => 'required|min:4',
            'ambito'                => 'required|min:4',
            'segmento_cultural'     => 'required|min:4',
            'valor_meta'            => 'required|min:4'
                               
        ],$messages);
        
        //caso alguma regra falhe
        if($validator->fails()){

            return redirect()->back()       // = volta pra pagina anterior
                            ->withErrors($validator) // retorna os erros de validação
                            ->withInput(); // retorna com os campos preenchidos
        }

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
