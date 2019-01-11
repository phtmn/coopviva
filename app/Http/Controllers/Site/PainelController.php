<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Perfil;
use App\Models\Osc;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'existe.perfil']);
    }


    public function painel(){
       $user    = Auth::user()->id;
       $perfil  = Perfil::find($user);
       $osc     = Osc::find($user);
       return view('site.painel.painel',compact('perfil','osc'));
    }
}
