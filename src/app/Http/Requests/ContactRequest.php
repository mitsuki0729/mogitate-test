<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric',],
        ];
    }

    public function messages()
    {
        return [
            
            'name.required' => '商品名を入力してください',
            'name.string' => '文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '数値で入力してください',
        ];
    }
}
