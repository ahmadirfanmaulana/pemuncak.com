<?php

namespace App\Http\Middleware;

use Closure;

class Climbing
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
        if (Auth::user()->level != 'climbing') {
          return redirect('404');
        }

        return $next($request);
    }
}
