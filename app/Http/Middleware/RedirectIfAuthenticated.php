<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        // dd($guards);
        foreach ($guards as $guard) {
          if (Auth::guard($guard)->check()) {
                // dd(Auth::user()->role);
               if(Auth::user()->role ==1){
                   
                 return redirect(RouteServiceProvider::HOME);
                  
                }else {
                    return redirect(RouteServiceProvider::USERHOME);
                    
                }
               
             }
         }
 
        return $next($request);
    }
}
