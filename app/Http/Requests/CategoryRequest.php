<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'vi_name' => 'required',
            'ko_name' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'vi_name.required' => 'Category name vietnamese required',
            'ko_name.required' => 'Category name korean required',
        ];
    }
}
