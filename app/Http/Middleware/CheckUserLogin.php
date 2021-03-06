<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CheckUserLogin
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
        $user = $request->session()->get('user');
        if (!$user){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
