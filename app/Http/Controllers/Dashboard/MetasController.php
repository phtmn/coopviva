<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Osc_Metas;
use Illuminate\Http\Request;
use App\Models\Meta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alert;
use Auth;
class MetasController extends Controller
{
    public function metas($ods){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        $metas = Meta::where('objetivo_id',$ods)->get();
        return view('dashboard.osc.odsform',[
            'metas' => $metas,
            'tab'   => 'ods'
        ]);
    }

    public function gravar(Request $request){

        $metas = DB::table('metas')->whereIn('id',$request->codigos)->get();

        foreach ($metas as $meta){

            Osc_Metas::forceCreate([
                'osc_id'        => $request->user()->osc()->id,
                'meta_id'       => $meta->id,
                'objetivo_id'   => $meta->objetivo_id,
                'meta_codigo'   => $meta->codigo,
                'meta_descricao'=> $meta->descricao
            ]);
        }

        Alert::success('Metas Definidas com Sucessco','Uau!!')->persistent('Ok');
        return redirect()->back();

    }

    public function removerMeta($id){

        $osc_id = Auth::user()->osc()->id;
        $meta   = Osc_Metas::findOrFail($id)->where('osc_id',$osc_id)->first();
        $meta->delete();
        if($meta){
            Alert::warning('Você removeu esta Meta','Poxa :(')->persistent('OK');
            return redirect()->back();
        }else{
            Alert::error('Não foi possível remover essa meta','Opa')->persistent('OK');
            return redirect()->back();
        }

    }
}
