<?php

namespace App\Http\Middleware;

use Closure;

class AddSession
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
        $check_session = Session::get('uer_login');
        if ($check_session!= null) {
            return $next($request);
        }
        return redirect('/');
    }

}
