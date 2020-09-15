<?php

namespace App\Http\Middleware;

use Closure;

class checkPassword
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

        if( $request->api_password != "12345678" ) // OR env("API_PASSWORD","12345678") 
            return response() ->json([ 'mgs' => 'Unauthenticated' ]);

        return $next($request);
    }
}
