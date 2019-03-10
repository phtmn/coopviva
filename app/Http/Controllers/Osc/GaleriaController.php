<?php

namespace App\Http\Controllers\Osc;

use App\Models\Galeria;
use App\Models\Projeto;
use Aws\Glacier\GlacierClient;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Http\Controllers\Controller;
use Storage;
class GaleriaController extends Controller
{
    public function index(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        return view('dashboard.osc.galeria',[
            'galerias'      => Galeria::where('osc_id',Auth::user()->osc()->id)->get(),
            'projetos'      => Projeto::where('osc_id',$osc->id)->get()->pluck('descricao','id')

        ]);
    }

    public function create(){
        return view('dashboard.osc.galeria_create',[
            'tab' => 'galeria'
        ]);
    }

    public function store(Request $request){

        $osc = $request->user()->osc()->id;

        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

        Storage::disk('s3')->put($imageName, file_get_contents($image),'public');
        $imageNameAWS  = Storage::disk('s3')->url($imageName);

        if($imageNameAWS != null){
            $galeria = new Galeria();
            $galeria->osc_id        = $osc;
            $galeria->projeto_id    = isset($request->projeto_id) ? $request->projeto_id : null;
            $galeria->descricao     = $request->legenda;
            $galeria->album         = $request->album;
            $galeria->url           = $imageNameAWS;
            $galeria->imageName     = $imageName;
            $galeria->ativo         = 1;
            $galeria->save();

            return redirect()->route('galeria.index');
        } else{
            return redirect()->route('galeria.index')->with('msg','Erro');
        }
    }

    public function show($id){

        $galeria = Galeria::find($id);
        Storage::disk('s3')->delete($galeria->imageName);
        $galeria->delete();

        return redirect()->route('galeria.index');
    }
}
