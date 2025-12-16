<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            // ADMIN AREA
            if ($request->is('admin/*')) {
                return route('admin.login');
            }

            // USER AREA
            return route('login');
        }
    }
}
