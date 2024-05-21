<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $guard = null): Response
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('calender');
        // }
        // return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
