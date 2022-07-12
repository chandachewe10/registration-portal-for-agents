<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Auth;
class AgentsPortal
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
        {
            if (auth()->check() && (auth()->user()->status == 1)) {
                return $next($request);
            }
    
            Auth::logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
            Session::flash('status', 'Access Denied. This area is restricted to agents only');
    
            return redirect()->route('login');
        }
    }
}
