<?php

namespace App\Http\Middleware;

use App\Http\Requests\CadastrarUserRequest;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { if(Auth::check()){
        $useremail = Auth::user()->email;
        if($useremail == $request->email || Auth::user()->tipo == 'admin'){
            Auth::logout();
            return redirect('/login')->with('error','Sessão expirada, faça login novamente');
        }
    }
        
        }
               


    
}
