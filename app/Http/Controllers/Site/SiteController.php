<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\User;
class SiteController extends Controller
{
    public function cadastro($tipo){
        if($tipo == 'osc'){
            return view('site.cadastro.formOsc');
        }
        return view('site.cadastro.formInvestidor');
    }

    
}
