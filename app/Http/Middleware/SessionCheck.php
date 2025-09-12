<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;

class SessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $user = $request->session()->get('user');

        $allowedRoutes = [
            'login',
            'loginuser',
        ];

        // If user is not logged in and trying to access a protected route
        if (!$user && !in_array(Route::currentRouteName(), $allowedRoutes)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
