<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == '1') {
            return $next($request);
        }
        else(
            abort(403, 'Unauthorized. Only admin users are allowed to access this resource.')
          );

    }
}
