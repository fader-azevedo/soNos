<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;

class Mdw
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        $response = $next($request);
        if ($request->user()->perfil == 'aluno') {
            return redirect('home');
        }

        return $response;
    }
}
