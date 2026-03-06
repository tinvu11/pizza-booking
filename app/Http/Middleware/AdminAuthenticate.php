<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticate
{
    /**
     * Kiểm tra admin đã đăng nhập chưa.
     * Nếu chưa, chuyển hướng đến trang login admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('admin_login')) {
            return redirect()->route('admin.login')->with('errLogin', 'Vui lòng đăng nhập để truy cập trang quản trị!');
        }

        return $next($request);
    }
}
