<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    public function index(){

        $galerias = Galeria::where('osc_id',Auth::user()->osc()->id)->get();
        return view('dashboard.osc.galeria',[
            'galerias' => $galerias,
            'tab'       => 'galeria'
        ]);
    }

    public function create(){
        return view('dashboard.osc.galeria_create',[
            'tab' => 'galeria'
        ]);
    }

    public function store(Request $request){

        $osc = $request->user()->osc()->id;

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $file       = $request->file('img');
            $name       = $file->getClientOriginalName();
            $path       = public_path('galeria/osc');
            $file_path  = 'galeria/osc/'.$name;
            $upload     = $file->move($path,$name);
        }

        if($upload){
            $galeria = new Galeria();
            $galeria->osc_id        = $osc;
            $galeria->descricao     = $request->legenda;
            $galeria->url           = $file_path;
            $galeria->tipo          = $request->tipo;
            $galeria->ativo         = 1;
            $galeria->save();
        }

        if($galeria){
            Alert::success('Sua foto foi salva na galeria','OBG')->persistent('OK');
            return redirect()->route('galeria.index');
        }else{
            Alert::error('Algo Inesperado Aconteceu','Eita!')->persistent('OK');
            return redirect()->route('galeria.create');
        }

    }
}
