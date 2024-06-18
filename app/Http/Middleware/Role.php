<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ((Auth::user() &&  Auth::user()->role == 1) || (Auth::user() &&  Auth::user()->role == 2) || (Auth::user() &&  Auth::user()->role == 3) || (Auth::user() &&  Auth::user()->role == 4) || (Auth::user() &&  Auth::user()->role == 5) || (Auth::user() &&  Auth::user()->role == 6) || (Auth::user() &&  Auth::user()->role == 7) || (Auth::user() &&  Auth::user()->role == 8)) {
            return $next($request);
            //return view('master.home');
            //return redirect('master-home');
        }
        //return $next($request);

        return redirect('/')->with('error','You have not admin access');
    }
}
