<?php

namespace App\Http\Middleware;

use Closure;

class AdminMidlleware
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->id_role == 1) {
            return redirect()->route('superadmin');
        }

        if (Auth::user()->id_role == 3) {
            return redirect()->route('admin');
        }
    }
}
