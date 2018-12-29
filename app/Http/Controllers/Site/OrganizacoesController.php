<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizacoesController extends Controller
{
    public function index(){
        return view('site.osc.index');
    }

    public function detalhe(){
        return view('site.osc.detalhe-osc');
    }
}
