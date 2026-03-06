<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class SignupController extends Controller
{
    // public function show(){
    //     return redirect('signup');
    // }
    public function SignUp(Request $request){
        $request->validate([
            'txtName' => 'required|min:5|max:50',
            'txtPwd_user' => 'required|min:5|max:20',
            'nbrPhone' => 'required|max:11',
            'txtEmail' => 'required|max:90'
        ]);
        $SignUp = new User;
        $SignUp->name = $request->txtName;
        $SignUp->password = Hash::make($request->txtPwd_user);
        $SignUp->phone_number = $request->nbrPhone;
        $SignUp->email = $request->txtEmail;
        $SignUp->save();
        return redirect()->back()->with('success', "register successfully");
    }
    //test
}
