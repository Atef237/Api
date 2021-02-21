<?php

namespace App\Http\Middleware;

use Closure;

class Checkpassword
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

        if($request->API_PASSWORD !==env('API_PASSWORD','VVSdfGW10NfOL1B1wm3MJ')){
            return response()->json(['message' => 'unauthintenticated']);
        }
        return $next($request);
    }
}
