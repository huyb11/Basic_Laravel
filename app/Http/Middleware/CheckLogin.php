<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckLogin
{
     
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return $next($request);
            }
            
        }
        return redirect()->route('admin.login.page');
    }
}
