<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminINotLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard='admin')
    {
        // if(!$request->user($guard)) {
        //     return redirect()->route('admin.login');
        // }
        return $next($request);
    }
}
