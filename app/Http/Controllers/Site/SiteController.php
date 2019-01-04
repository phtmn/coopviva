<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\User;
class SiteController extends Controller
{
    public function cadastro($tipo){
        if($tipo == 'osc'){
            return view('site.cadastro.formOsc');
        }
        return view('site.cadastro.formInvestidor');
    }

    public function create(Request $request, User $user){
        
        //dd($request->segment(2));
         $messages = [
            'required'  => 'O campo :attribute é obrigatório', //mensagem para campos required
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', //mensagem para campos min
            'string'    => 'O campo :attribute não é do tipo texto',            
            'unique'    => 'O valor do campo :attribute já está em uso, escolha outro'
        ];

        /*
            OBS: não esquecer de dar use na classe Validator linha 5.
            Cria a validação passando os parametros  Validator::make($inputs,$regras,$mensagens)
        */
        $validator = Validator::make($request->all(),[  
            'name'      => 'required|min:5|max:100',
            'email'     => 'required|email|unique:users',
            'password' =>  'required|string|min:6|confirmed'          
        ],$messages);

        //se alguma regra falhar retorna erro!
        if($validator->fails()){
            return redirect()->back()       //back() = volta pra pagina anterior
                            ->withErrors($validator) // withErros() = retorna os erros de validação
                            ->withInputs(); // withIput() = retorna com os campos preenchidos
        }else{
            
            $data = $request->all();
            
            //dd($data);
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->tipo = $data['tipo'] == !null ? 'PJ'  : 'PF';
            $user->telefone = $data['telefone'];
            $user->cadastro = $request->segment(2);
            $user->cpf  = $data['cpf'];
            $user->cnpj = $data['cnpj'];
            $user->razao_social = $data['razao_social'];
            $user->save();

            if($user){
                return redirect()->back()->with('success','Seus dados foram eviados com sucesso!');
            }else{
                return redirect()->back()->with('error','Não foi possivel completar seu cadastro!');
            }
            

        }        
       
       
    }
}
