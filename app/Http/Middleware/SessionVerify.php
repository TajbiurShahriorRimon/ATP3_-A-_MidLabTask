<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);
        if($request->session()->exists('email')){
            return $next($request);
        }
        else{
            //$request->session()->flash('msg', 'Invalid request');
            return redirect('/login/index');
        }
    }
}
