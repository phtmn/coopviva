<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Auth;
use Validator;

class FeedbackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('site.feedback');
    }

    public function store(Request $request){
        
        
        $feedback = new Feedback();
        $feedback->nome =   $request['nome'];
        $feedback->email =  $request['email'];
        $feedback->telefone  = $request['telefone'];
        $feedback->categoria = $request['categoria'];
        $feedback->mensagem  = $request['mensagem'];
       
        
        $messages = [
            'required'  => 'O campo :attribute é obrigatório', 
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', 
            'max'       => 'A quantidade de caracteres do campo :attribute é maxima', 
            'string'    => 'O campo :attribute não é do tipo texto'
            
        ];

        $validator = Validator::make($request->all(),[  
            'nome'                  => 'required|min:10|max:100|string|',
            'email'                 => 'required|min:8',
            'telefone'              => 'required|min:14|max:15',
            'categoria'             => 'required',
            'mensagem'              => 'required|min:15'
                             
        ],$messages);
        
        //caso alguma regra falhe
        if($validator->fails()){

            return redirect()->back()       // = volta pra pagina anterior
                            ->withErrors($validator) // retorna os erros de validação
                            ->withInput(); // retorna com os campos preenchidos
        }
        
        //grava os dados no banco
         $feedback->save();
         return redirect()->route('home');
        
    }
}    