<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function Login(Request $request){
        $arr = ['name' => $request->txtUser, 'password' => $request->txtPass];
        if($request->remember = 'remember_me'){
            $remember = true;
        }
        else{
            $remember = false;
        }
        if(Auth::attempt($arr, $remember)){
            return back();
        }
        else{
            return back()->with('false', 'Tài khoản hoặc mật khẩu không hợp lệ');
        }
    }
    public function Logout(){
        Auth::logout();
        return back();
    }
}
