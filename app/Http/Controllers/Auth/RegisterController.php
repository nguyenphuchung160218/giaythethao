<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RequestUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Carbon;
use App\Classes\ActivationService;
use App\Models\UserAction;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $activationService;
    protected $redirectTo = 'get.login';
    // protected $activationService;
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest');
        $this->activationService = $activationService;
    }
    public function getRegister()
    {
    	return view('auth.register');
    }
    public function postRegister(RequestUser $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
         $user->save();
        // event(new Registered($user));
        $this->activationService->sendActivationMail($user);
        return redirect()->route('get.login')->with('success', 'Bạn hãy kiểm tra email và thực hiện xác thực theo hướng dẫn.');
        
       // return  redirect()->route('get.login')->with('success','Đăng ký thành công! Mời bạn đăng nhập xac nhan email');
                 
    }
    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect('get.login');
        }
        abort(404);
    }
}
