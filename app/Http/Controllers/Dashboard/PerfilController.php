<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;
use Alert;

class PerfilController extends Controller
{   

    public function create(){

        return view('dashboard.perfil.create-edit',[
            'tab'       => 'perfil',
            'perfil'    => Perfil::first()
        ]);
    }

    public function store(Request $request){

        $perfil = $request->user()->perfil()->create($request->all());

        if($perfil){
            Alert::success( 'Seus dados foram Atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('dashboard.index');
        }
        Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
        return redirect()->route('dashboard.index');
    }

    public function update(Request $request,$id){

        $perfil = Perfil::first()->update($request->all());

        if($perfil){
            Alert::success( 'Seus dados foram Atualizados','Sucesso')->persistent('Ok');
            return redirect()->route('dashboard.index');
        }
            Alert::warning( 'Não foi possível atualizar seus dados','Erro')->persistent('Ok');
            return redirect()->route('dashboard.index');
    }
}
