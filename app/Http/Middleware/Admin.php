<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        //Log::error('passage dans le middleware admin');
        $user = $request->user();
        //verification si l'utilisateur porte le droit d'admin
        if ($user && $user->admin === 1) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
