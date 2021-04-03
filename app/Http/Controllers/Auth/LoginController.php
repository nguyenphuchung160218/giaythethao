<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email','password');
        if(\Auth::attempt($credentials))
        {
            return redirect()->route('home')->with('success','Đăng nhập thành công!');
        }
        return redirect()->back()->with('danger','Đăng nhập thất bại');
    }
    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('home');

    }
    
}
