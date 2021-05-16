<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;	
use App\Models\Order;    

use Illuminate\Support\Facades\Hash;

class UserController extends FrontendController
{

	public function __construct()
    {
        parent::__construct();
    }
    public function getUser()
    {
    	$user=User::find(get_data_user('web'));
 
        $viewData=[
            'user' => $user
        ];
    	return view('user.index',$viewData);
      	
    }
    public function getSetting()
    {
        //info user
        $user=User::find(get_data_user('web'));
    	return view('user.setting',compact('user'));
    }
    public function updateInfo(Request $request)
    {
        $user=User::find(get_data_user('web'));
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->number;
        $user->address=$request->address;
        if($request->hasFile('avatar'))
        {
            $file = upload_image('avatar');
            if(isset($file['name']))
            {
                $user->avatar = $file['name'];
            }
        }
        
        $user->save();
        return redirect()->back()->with('success','Cập nhật thông tin thành công');
    }
    public function updatePassword(Request $request)
    {
         
        $user=User::find(get_data_user('web'));

        if(Hash::check($request->password,$user->password))
        {
            if($request->newpassword==$request->repassword)
            {
                $user->password=bcrypt($request->newpassword);
                $user->save();
                return redirect()->back()->with('success','Thay đổi mật khẩu thành công');
            }
            else{
                return redirect()->back()->with('danger','Nhập lại mật khẩu không đúng');
            }
        }
        else{
            return redirect()->back()->with('danger','Nhập sai mật khẩu');
        }    
    }

    public function destroy()
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Xóa tài khoản thành công');
    }
    public function postUser()
    {
        $user = User::find(get_data_user('web'));//id
        $orders = Order::where('o_user_id',get_data_user('web'))->get();
        $totalorder = Order::where('o_user_id',get_data_user('web'))->select('id')->count('id');
        $totalorderDone = Order::where([
            ['o_user_id',get_data_user('web')],
            ['o_status',Order::STATUS_DONE],
        ])->select('id')->count('id');
        $viewData = [
            'totalorder' => $totalorder,
            'totalorderDone' => $totalorderDone,
            'orders' => $orders,
            'user' => $user
        ];
        return view('user.post',$viewData);
    }
}
