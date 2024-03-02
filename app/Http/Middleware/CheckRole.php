<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check() && Auth::user()->hasRole('super_admin')) {
            return $next($request);
        }
        if (Auth::check() && Auth::user()->hasAnyRole($roles)) {
            return $next($request);
        }
        return response()->json([403, 'Unauthorized action.']);
    }
}
