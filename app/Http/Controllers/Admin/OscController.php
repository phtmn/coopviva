<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Osc;
use Illuminate\Support\Facades\DB;

class OscController extends Controller
{
    public function index(){

        $data = Osc::paginate(10);
        return view('admin.osc.index',[
            'data' => $data
        ]);
    }

    public function show($id){
        $osc = OSC::find($id);

        return view('admin.osc.show',[
            'osc'   => $osc,
            'metas' => $osc->metas()
        ]);
    }
}
