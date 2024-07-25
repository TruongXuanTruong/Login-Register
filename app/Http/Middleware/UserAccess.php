<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        // if (auth()->user()->type == 1 && $userType == 'admin') {
        //     return $next($request);
        // }
        if (auth()->user()->type == $userType) {
            return $next($request);
        }

        return response()->json('Bạn không có quyền truy cập trang này.');
    }
}
