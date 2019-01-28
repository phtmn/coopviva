<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.users.index',[
            'data' => $data
        ]);
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.users.show',[
            'user'      => $user,
            'perfil'    => $user->perfil()->first(),
        ]);
    }
}
