<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddelware
{
    public function handle($request, Closure $next)
    {
        if (!\Auth::user()->is_admin) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
