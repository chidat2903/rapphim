<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
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
            
            if ($user->hasRole('user_manager_rap')) {
                if ($request->routeIs('auth.index')) {
                    // Nếu là admin và đang truy cập trang đăng nhập, điều hướng đến trang admin
                    return redirect()->route('admin.dashboard');
                }
                // Nếu là admin và không phải trang đăng nhập, tiếp tục xử lý request
            } else {
                if ($request->routeIs('auth.index')) {
                    // Nếu là người dùng bình thường và đang truy cập trang đăng nhập, điều hướng đến trang người dùng bình thường
                    return redirect()->route('pages.trangchu1');
                }
                // Nếu là người dùng bình thường và không phải trang đăng nhập, tiếp tục xử lý request
            }
        }
    
        return $next($request);
        
    }
}
