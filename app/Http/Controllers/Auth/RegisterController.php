<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RequestUser;
use Tintnaingwin\EmailChecker\Facades\EmailChecker;


class RegisterController extends Controller
{
    public function getRegister()
    {
      return view('auth.register');
    }
    public function postRegister(RequestUser $request)
    {
        if(EmailChecker::check($request->email))
        {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->save();
         return redirect()->route('get.login')->with('success','Đăng ký thành công! Mời bạn đăng nhập');
        }
        else
        {
          return redirect()->back()->with('danger','Đăng ký không thành công , Email đã không tồn tại');
        }
       
                
    }
}
