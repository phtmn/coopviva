<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Osc;
use Illuminate\Http\Request;
use App\Models\Meta;
use App\Http\Controllers\Controller;

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
        $id = $request->user()->osc()->id;
        $osc = Osc::Find($id);

        foreach ($request->codigos as $c){
            $osc->metas()->attach($c , ['codigo' => $c]);
        }

        return dd($osc);

    }
}
