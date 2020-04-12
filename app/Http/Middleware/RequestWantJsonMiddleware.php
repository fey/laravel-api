<?php

namespace App\Http\Middleware;

use Closure;

class RequestWantJsonMiddleware
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
        if (starts_with($request->getRequestUri(), '/api')) {
            $request->headers->add(['Accept' => 'application/json']);
        }

        return $next($request);
    }
}
