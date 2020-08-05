<?php

namespace App\Http\Middleware;

use Closure;

class IpAddress
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
        \Log::info("Pristupljeno: ". date("Y-m-d H:i:s"));
        return $next($request);
    }
}
