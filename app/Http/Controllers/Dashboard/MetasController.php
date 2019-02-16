<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Osc_Metas;
use App\Models\Meta;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alert;
use Auth;
class MetasController extends Controller
{
    public function metas($ods = null){
        $osc = auth()->user()->osc();        
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        $metas      = Meta::where('objetivo_id',$ods)->get();
        $metas_osc  = Osc_Metas::where('osc_id',$osc->id)->get();
        $projetos   = Projeto::where('osc_id',$osc->id)->pluck('descricao','id');
        //dd($projetos);
        return view('dashboard.osc.odsform',[
            'metas'         => $metas,
            'metas_osc'     => $metas_osc,
            'projetos'      => $projetos,
            'tab'   => 'ods'
        ]);
    }

    public function gravar(Request $request){
        //dd($request->all());

        $metas = DB::table('metas')->whereIn('id',$request->codigos)->toSql();
        dd($metas);
        foreach ($metas as $meta){

            Osc_Metas::forceCreate([
                'osc_id'        => $request->user()->osc()->id,
                'meta_id'       => $meta->id,
                'objetivo_id'   => $meta->objetivo_id,
                'projeto_id'    => $request->opcao == 'PROJETO' ? $request->projeto_id : null,
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
