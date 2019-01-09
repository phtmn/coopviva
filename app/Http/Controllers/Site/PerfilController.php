<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;

class PerfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('site.cadastro.perfil');
    }

    public function store(Request $request){
        
        //para saber o que está vindo do formulário descomentar a linha abaixo linha:20
        //dd($request->all());

        $perfil = new Perfil();
        $perfil->user_id = Auth::user()->id;
        $perfil->nome_completo = $request['nome_completo'];
        $perfil->tipo_perfil = $request['tipo_perfil'];
        //TODO: inserir os campos relacionado a perfil


        //grava os dados no banco
        $perfil->save();
        return redirect()->route('site.painel');

    }
}
