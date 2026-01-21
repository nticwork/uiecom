<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserMiddleware
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

        if ($user->role !== User::ROLE_USER) {
            return redirect()->route('login');
        }


        return $next($request);
    }
}
