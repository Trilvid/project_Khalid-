<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role != 'admin' && $user->role != 'support'){
                abort(404);
            }
        }else{
            abort(404);
        }
        return $next($request);
    }
}
