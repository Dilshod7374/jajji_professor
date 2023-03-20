<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('lang'))
        {
            $lang = session('lang');
        }
        else
            $lang = 'uz';

        \App::setLocale($lang);
        return $next($request);
    }
}
