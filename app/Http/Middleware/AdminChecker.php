<?php

namespace App\Http\Middleware;

use Closure;

class AdminChecker
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
        if (!$request->has('admin')) {
            return abort(404);
        }
        return $next($request);
    }
}
