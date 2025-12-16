<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {

            if ($guard === 'admin' && Auth::guard('admin')->check()) {
                return redirect()->route('admin.dashboard');
            }

            if ($guard === 'web' && Auth::guard('web')->check()) {
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}
