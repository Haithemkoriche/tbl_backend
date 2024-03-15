<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckBearerToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        // Implement your token validation logic here
        // For example, check if the token is valid
        if ($token !== 'abcdef123456') {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
