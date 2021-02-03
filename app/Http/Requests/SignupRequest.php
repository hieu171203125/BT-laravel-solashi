<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'email' => 'unique:users,email',
            'name'  => 'required',
            'phone' => 'required|numeric|unique:users',
        ];
    }
    public function messages()
    {
        return [
            'email.unique' => 'Email này đã được dùng,vui lòng chọn email khác',
            'name.required'  =>'Vui lòng điền Họ và tên',
            'phone.required' => 'Vui lòng không để trống số điện thoại',
            'phone.numeric' => 'Số điện thoại chỉ nhận số',
            'phone.unique' => 'Số điện thoại đã được đăng kí',
        ];
    }
}
