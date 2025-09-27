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
            'category_id' =>'required',
            'status' =>'required',
            'name' =>'required',
            'description' =>'required | max:255',
            'price' =>'required | integer | min:0'
        ];
    }

    public function messages()
    {
        return[
            'image.required' => 'エラー',
            'image.mimes' => 'エラー',
            'category.required' => 'エラー',
            'status.required' => 'エラー',
            'name.required' => 'エラー',
            'description.required' => 'エラー',
            'description.max' => 'エラー',
            'price.required' => 'エラー',
            'price.integer' => 'エラー',
            'price.min' => 'エラー',
        ];
    }
}
