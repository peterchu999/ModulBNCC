<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;
use Auth;

class IsAdmin
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
        if(Auth::check()){
            if(Auth::user()->role=="admin") return redirect('/library');
            else if(Auth::user()->role=="member") return $next($request);
        }
        return $next($request);
    }
}
