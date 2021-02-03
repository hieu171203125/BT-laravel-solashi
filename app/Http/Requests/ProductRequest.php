<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'code'=>'required|unique:products',
            'description'=>'required',
            'category_id'=>'required|numeric',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'is_top'=>'required|numeric',
            'on_sale'=>'required|numeric',
            'image'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng không để trống',
            'code.required'=>'vui lòng không để trống',
            'code.unique'=>'Mã sản phẩm đã tồn tại',
            'category_id.required'=>'vui lòng không để trống',
            'price.required'=>'vui lòng không để trống',
            'price.numeric'=>'Giá tiền chỉ hỗ trợ nhập số', 
            'quantity.required'=>'vui lòng không để trống',
            'quantity.numeric'=>'Giá tiền chỉ hỗ trợ nhập số', 
            'image.required'=>'vui lòng chọn ảnh sản phẩm',
        ];
    }
}
