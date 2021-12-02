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
    public function handle(Request $request, Closure $next){
        $user=session('sid');
        if(!empty($user)){
            return $next($request);
        }
        else{
        return response()->json("Not allowed");
    }
    }
    }
