<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'email'=>'required | unique:users,email,'.$this->id,
            'phone'=>'required',
            'password'=>'required',
            'name'=>'required',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Trường này không được để trống',
            'email.unique'=>'Email đã tồn tại',
            'phone.required'=>'Trường này không được để trống',
            'name.required'=>'Trường này không được để trống',
     
}
