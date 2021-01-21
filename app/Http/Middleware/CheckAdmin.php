<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     **/
    public function handle($request, Closure $next)
    {

        if (Auth::user() && Auth::user()->is_admin == 1) {
            return $next($request);
        } else {
            return redirect()->route('admin.login')->with('message', __('Bạn không có quyền truy cập,Vui lòng đăng nhập'));
        }
    }
}
