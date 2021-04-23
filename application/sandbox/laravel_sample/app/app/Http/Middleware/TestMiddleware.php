<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class TestMiddleware extends Middleware
{
    public function handle($request, Closure $next)
    {
        //$request->http_response_code = 203;   
        //echo($request->ip()."<br />");     
        //echo("FooBar Middleware"."<br />");

        return $next($request);
    }    
}