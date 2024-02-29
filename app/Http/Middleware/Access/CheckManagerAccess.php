<?php

namespace App\Http\Middleware\Access;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckManagerAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect(route('Login'));
        }
        $user_role = Auth::user()->role;
        if ($user_role === 'manager') {
            return $next($request);
        }
        abort(403,'You have not access for this action');
    }
}
