<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DriverMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('driver_id')) {
            return redirect()->route('driver.login')->with('error', 'Veuillez vous connecter');
        }

        return $next($request);
    }
}
