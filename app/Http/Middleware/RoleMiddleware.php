<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (!auth()->check() || !auth()->user()->hasRole($role)) {
                return redirect('dashboard/index');
            }
        }

        return $next($request);
    }
}
