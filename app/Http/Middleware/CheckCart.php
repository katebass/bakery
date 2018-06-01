<?php

namespace App\Http\Middleware;

use Closure;

class CheckCart
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
        if($request->session()->has('cart') && count($request->session()->get('cart'))){
            return $next($request);
        }
        abort(404);
    }
}
