<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
class RequestUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required | email:rfc,dns|unique:users,email,'.$this->id,
            'phone'=>'required | max:15 | min:10',
            'password'=>'required | min:10 |required_with:password_confirmation|confirmed|same:password_confirmation',
            'name'=>'required',
            'address'=>'required',
            'password_confirmation'=>'required',
           
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Vui lòng nhập đầy đủ email!',
            'email.email'=>'Lỗi cú pháp của email!',
            'email.unique'=>'Email đã tồn tại!',
            'address.required'=>'Vui lòng nhập đầy đủ địa chỉ!',
            'phone.required'=>'Vui lòng nhập đầy đủ !',
            'phone.min'=>'Độ dài tối thiểu :min!',
            'name.required'=>'Vui lòng nhập đầy đủ tên! ',
            'password.required'=>'Vui lòng nhập mật khẩu!',
            'password.min' =>'Độ dài tối thiểu :min!',
            'password_confirmation.required'=>'Vui lòng nhập mật khẩu!',
            'password.confirmed'=>'Mật khẩu xác nhật không đúng!'
        ];
     }

}
