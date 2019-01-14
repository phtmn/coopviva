<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Osc;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

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
        // validation

        $messages = [
            'required'  => 'O campo :attribute é obrigatório', 
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', 
            'max'       => 'A quantidade de caracteres do campo :attribute é maxima', 
            'string'    => 'O campo :attribute não é do tipo texto',
            'unique'    => 'O valor do campo :attribute já está em uso, escolha outro'
        ];

        $validator = Validator::make($request->all(),[  
            'nome_fantasia'         => 'required|min:10|max:100|string',
            'sigla_osc'             => 'required|min:2',
            'ano_fundacao'          => 'required|max:4',
            'email'                 => 'required|min:4|max:100',
            'telefone'              => 'required|min:4|max:20',
                               
        ],$messages);
        
        //caso alguma regra falhe
        if($validator->fails()){

            return redirect()->back()       // = volta pra pagina anterior
                            ->withErrors($validator) // retorna os erros de validação
                            ->withInput(); // retorna com os campos preenchidos
        }

        $osc->save();

        if($osc){
            \Session::flash('mensagem',['msg'=>'Sua OSc foi cadastrada com sucesso','class'=>'alert-success']);
            return redirect()->route('osc.index');
        }else{
            return 'erro ocorrido';
        }
    }
}
