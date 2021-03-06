<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsTeacher
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
        if (Auth::check()) {
            if (Auth::user()->role_id==2) {
                return $next($request);
            }else{
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('login');
        }
    }
}
