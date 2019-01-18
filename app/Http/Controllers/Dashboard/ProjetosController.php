<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use Alert;


class ProjetosController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function index(){

        return view('dashboard.projetos.index',[
            'tab'   => 'lista-projetos',
            'data'  => Projeto::all()
        ]);
    }

    public function create(){

        return view('dashboard.projetos.create-edit',[
            'tab'   =>  'projetos'
        ]);
    }

    public function edit($id){
        return view('dashboard.projetos.create-edit',[
            'projeto' => Projeto::find($id),
            'tab'   => 'projeto'
        ]);
    }


    public function store(Request $request){

        $projeto = $request->user()
            ->projetos()
            ->create($request->all());

        if($projeto){
            Alert::success( 'Projeto Cadastrado com Sucesso','Sucesso')->persistent('Ok');
            return redirect()->route('projetos.index');
        }
            Alert::warning( 'A Operação não foi realizada','Erro')->persistent('Ok');
            return redirect()->route('projetos.index');

    }

    public function update(Request $request,$id){
        $projeto = Projeto::find($id)->update($request->all());

        if($projeto){
            Alert::success( 'Dados Alterados com Sucesso','Sucesso')->persistent('Ok');
            return redirect()->route('projetos.index');
        }
        Alert::warning( 'A Operação não foi realizada','Erro')->persistent('Ok');
        return redirect()->route('projetos.index');
    }
}
