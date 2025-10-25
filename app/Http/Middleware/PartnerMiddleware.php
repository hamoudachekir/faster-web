<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnerMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('partner_id')) {
            return redirect()->route('partner.login')->with('error', 'Veuillez vous connecter');
        }

        return $next($request);
    }
}
