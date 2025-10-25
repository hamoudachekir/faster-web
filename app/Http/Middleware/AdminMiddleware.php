<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Simple password protection for admin area
        if (!session('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
