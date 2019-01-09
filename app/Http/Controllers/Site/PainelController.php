<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Perfil;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'existe.perfil']);
    }


    public function painel(){

       $perfil = Perfil::where('user_id',Auth::user()->id)->first();
       
       return view('site.painel.painel',compact('perfil'));
    }
}
