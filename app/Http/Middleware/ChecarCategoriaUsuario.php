<?php

namespace projetoautomacao\Http\Middleware;

use Closure;

class ChecarCategoriaUsuario
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
        if($request->user() && $request->user()->categoria !== "ADMINISTRADOR") {
            flash('Acesso à página não autorizado!')->warning();
            return redirect()->route('home');
        }
        
        return $next($request);
    }
}
