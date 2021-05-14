<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name'=>'required|unique:products,name',
            'upload'=>'required|unique:products,image',
            'price'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên được không bỏ trống',
            'name.unique' => 'Tên đã tồn tại',
            'upload.unique' => 'Ảnh đã tồn tại',
            'upload.required' => 'Ảnh được không bỏ trống',
            'price.required' => 'Giá không được bỏ trống'
        ];
    }
}
