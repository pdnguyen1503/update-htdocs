<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        // if ($request->age > 17) {
            
        // return $next($request);
        // }else{
        //    return redirect('home');
        // }

        if ($request->name == 'nguyen') {
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}
