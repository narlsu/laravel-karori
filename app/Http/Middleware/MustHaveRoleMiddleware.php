<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MustHaveRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // You MUST be logged in. Logged out users don't have roles!
        if (Auth::guest()) {
            return redirect('/login');
        }

        // If you don't have the role, show 403 (Forbidden)
        if (! $request->user()->hasRole($role)) {
           abort(403);
        }

        return $next($request);
    }
}
