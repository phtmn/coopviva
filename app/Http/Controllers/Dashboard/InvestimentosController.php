<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestimentosController extends Controller
{
    public function index(){

        return view('dashboard.investimentos.index',[
            'tab' => 'investimentos'
        ]);
    }
}
