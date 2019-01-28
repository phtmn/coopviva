<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Osc_Metas;
use Illuminate\Http\Request;
use App\Models\Meta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alert;
class MetasController extends Controller
{
    public function metas($ods){
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
                'meta_codigo'   => $meta->codigo,
                'meta_descricao'=> $meta->descricao
            ]);
        }

        Alert::success('Metas Definidas com Sucessco','Uau!!')->persistent('Ok');
        return redirect()->back();

    }
}
