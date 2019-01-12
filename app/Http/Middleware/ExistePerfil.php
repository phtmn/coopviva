<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Perfil;
use Alert;

class ExistePerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         //dd('entrou no filtro');
         $id = Auth::user()->id;       
         $data = Perfil::where('user_id',$id)->first();
           
        if($data == null){
             
            
            //Alert::info('Você precisa preencher alguns dados para continua)',':)')->persistent('x');
            // \Session::flash('mensagem',['msg'=>'Você precisa preencher alguns dados para continuar','class'=>'alert alert-warning']);
             //dd('nao tem perfil');
             Alert::info('Você precisa preencher seus dados para realizar um investimento','Atenção!')->persistent('x');
             return redirect()->route('site.perfil');
         }
       
        return $next($request);
    }
}
