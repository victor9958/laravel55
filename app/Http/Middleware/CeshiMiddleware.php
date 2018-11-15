<?php

namespace App\Http\Middleware;

use Closure;

class CeshiMiddleware
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
        $request->attributes->add(['aa'=>'cccc']);
        $request->offsetSet('bb',['1',2]);
        return $next($request);
    }
}
