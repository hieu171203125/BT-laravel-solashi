<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'=>'required',
            'code'=>'required|numeric',
            'description'=>'required',
            'category_id'=>'required|numeric',
            'price'=>'required|numeric',
            'is_top'=>'required|numeric',
            'on_sale'=>'required|numeric',
            'image'=>'max:2048',
                
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng không để trống',
            'code.required'=>'vui lòng không để trống',
            'code.numeric'=>'mã code chỉ hỗ trợ nhập số',
            'category_id.required'=>'vui lòng không để trống',
            'price.required'=>'vui lòng không để trống',
            'price.required'=>'vui lòng không để trống',
            'price.numeric'=>'Giá tiền chỉ hỗ trợ nhập số',
            'image.image'=>'vui lòng chỉ thêm ảnh',
            'image.mimes'=>'không hỗ trợ định dạng',
            'image.max'=>'Vui lòng chọn ảnh chất lượng không quá 2048kb'
        ];
    }
}
