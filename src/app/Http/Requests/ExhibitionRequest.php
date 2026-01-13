<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'image' => 'required | mimes:png,jpeg',
            'category_id' =>'required |array',
            'category_id.*' =>'exists:categories,id',       
            'status_id' =>'required',
            'name' =>'required',
            'description' =>'required | max:255',
            'price' =>'required | integer | min:0'
        ];
    }

    public function messages()
    {
        return[
            'image.required' => '画像を選択してください',
            'image.mimes' => 'JPEG、PNGのいずれかのファイルのみです',
            'category_id.required' => 'カテゴリーを選択してください',
            'status_id.required' => '商品の状態を選択してください',
            'name.required' => '商品名を入力してください',
            'description.required' => '商品の説明を入力してください',
            'description.max' => '255文字以内で入力してください',
            'price.required' => '価格を設定してください',
            'price.integer' => '整数で設定してください',
            'price.min' => '0円以上で設定してください',
        ];
    }
}
