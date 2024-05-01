<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == '2') {
            return $next($request);
        }
        else{
            abort(403, 'Unauthorized. Only users users are allowed to access this resource.');
        }

    }
}
