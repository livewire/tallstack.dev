<?php

namespace App\Http\Middleware;

use Closure;

class DisableFloc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('Permissions-Policy', 'interest-cohort=()');

        return $response;
    }
}
