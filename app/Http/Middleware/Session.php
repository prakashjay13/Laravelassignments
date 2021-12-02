<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class Session
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age=34;
        if($age>32)
        {
            return $next($request);
        }
        return response()->json("Access not allowed");
    }
}
