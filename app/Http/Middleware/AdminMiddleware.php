<?php

namespace App\Http\Middleware;

use App\Enums\RoleTypes;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        if (Auth::user()->role !== RoleTypes::ADMIN->value) {
            return redirect()->route('main.index');
        }
        return $next($request);
    }
}
