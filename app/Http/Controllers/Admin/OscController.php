<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Osc;

class OscController extends Controller
{
    public function index(){

        $data = Osc::paginate(10);
        return view('admin.osc.index',[
            'data' => $data
        ]);
    }
}
