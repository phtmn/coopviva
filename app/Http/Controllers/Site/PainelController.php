<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PainelController extends Controller
{
    public function painel(){

        if(Auth::user()->cadastro == 'investidor')
        {
            return view('site.investidor.painel');

        }else{
            return view('site.osc.painel');
        }
    }
}
