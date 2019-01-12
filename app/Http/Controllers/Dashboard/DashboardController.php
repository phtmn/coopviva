<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Perfil;
use App\Models\Osc;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'existe.perfil']);
    }


    public function index(){
        $tab = 'dashboard';
        return view('dashboard.index',compact('tab'));
    }
}
