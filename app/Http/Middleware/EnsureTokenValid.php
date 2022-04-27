<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $access_token = $request->bearerToken();
        $isNotNull = $access_token !== null;

        if ($isNotNull) {
            if ('initokenvaliddong' == $access_token) {
                return $next($request);
            } else {
                return response()->json('token check failed', 404);
            }
        } else {
            return response()->json('access token undifined', 404);
        }

        return $next($request);
    }
}
