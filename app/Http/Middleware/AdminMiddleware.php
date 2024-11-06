<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $usertype
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $usertype = null): Response
    {
        if (Auth::check()) {
            // If user is admin, allow access; otherwise, restrict access to admin-only routes
            if ($usertype === 'admin' && $request->user()->usertype !== 'admin') {
                abort(403, 'Access denied');  // Forbidden
            }

            // Proceed with the request
            return $next($request);
        }

        // If not authenticated, return 401 Unauthorized
        abort(401, 'Unauthorized');
    }
}
