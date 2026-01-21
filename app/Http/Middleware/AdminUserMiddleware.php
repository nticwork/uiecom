<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

 $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->role !== User::ROLE_ADMIN) {
            return redirect()->route('login');
        }

        return $next($request);


        return $next($request);
    }
}
