<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    public function index(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }

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
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $path = public_path('galeria/osc');
            $file_path = 'galeria/osc/' . $name;
            $upload = $file->move($path, $name);

            if($upload){
                $galeria = new Galeria();
                $galeria->osc_id        = $osc;
                $galeria->descricao     = $request->legenda;
                $galeria->url           = $file_path;
                $galeria->ativo         = 1;
                $galeria->save();
            }
            Alert::success('Sua foto foi salva na galeria','OBG')->persistent('OK');
            return redirect()->route('galeria.index');
        }else{
            Alert::error('Não foi possivel enviar sua foto','OBG')->persistent('OK');
            return redirect()->route('galeria.index');
        }
    }

    public function removerGaleria($id){

        $osc_id = Auth::user()->osc()->id;
        $galeria   = Galeria::findOrFail($id)->where('osc_id',$osc_id);
        $galeria->delete();
        if($galeria){
            Alert::warning('Você removeu esta imagem')->persistent('OK');
            return redirect()->back();
        }else{
            Alert::error('Não foi possível remover essa imagem')->persistent('OK');
            return redirect()->back();
        }

    }
}
