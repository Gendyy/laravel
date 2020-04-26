<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Agency
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

        if (Auth::guard('agency')->user()) {
            return $next($request);
    }
        return redirect('agency/login');
    }
}

