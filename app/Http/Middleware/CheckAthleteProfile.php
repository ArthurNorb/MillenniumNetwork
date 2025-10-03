<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAthleteProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'athlete') {
            
            if (
                !Auth::user()->athleteProfile &&
                !$request->routeIs('athlete.profile.create') &&
                !$request->routeIs('athlete.profile.store') 
            ) {
                return redirect()->route('athlete.profile.create');
            }
        }

        return $next($request);
    }
}