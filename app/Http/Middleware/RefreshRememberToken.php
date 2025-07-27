<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class RefreshRememberToken
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $rememberTokenName = Auth::getRecallerName(); // usually 'remember_web'
        $cookieValue = $request->cookie($rememberTokenName);

        if ($cookieValue && Auth::check()) {
            // Re-queue the remember cookie with a shorter lifetime (4320 minutes = 3 days)
            Cookie::queue(Cookie::make($rememberTokenName, $cookieValue, 4320));
        }

        return $response;
    }
}
