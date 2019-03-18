<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckPerfil
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
        return (auth()->user()->perfil_id == 1)
            ? $next($request)
            : redirect()->route('osc.index');

    }
}
