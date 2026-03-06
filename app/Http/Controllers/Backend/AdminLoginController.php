<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_admin;
use Hash;

class AdminLoginController extends Controller
{
    /**
     * Hiển thị form đăng nhập admin.
     */
    public function showLoginForm()
    {
        // Nếu admin đã đăng nhập, chuyển đến dashboard
        if (session()->has('admin_login')) {
            return redirect()->route('dashboard');
        }
        return view('Backend.admin-views.login');
    }

    /**
     * Xử lý đăng nhập admin.
     */
    public function login(Request $request)
    {
        $request->validate([
            'txtUserName' => 'required',
            'txtPwd' => 'required',
        ]);

        $admin = tbl_admin::where('user_name', $request->txtUserName)->first();

        if ($admin && Hash::check($request->txtPwd, $admin->password)) {
            // Đăng nhập thành công - lưu thông tin admin vào session
            session([
                'admin_login' => true,
                'admin_id' => $admin->id,
                'admin_name' => $admin->user_name,
                'admin_permission' => $admin->permission,
            ]);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('errLogin', 'Tên đăng nhập hoặc mật khẩu không đúng!');
    }

    /**
     * Đăng xuất admin.
     */
    public function logout()
    {
        session()->forget(['admin_login', 'admin_id', 'admin_name', 'admin_permission']);
        return redirect()->route('admin.login');
    }
}
