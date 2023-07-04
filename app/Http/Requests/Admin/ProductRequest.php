<?php

namespace App\Http\Requests\Admin;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'code' => 'required',
            'price' => 'required',
            'categoryid' => 'required',
            'branchid' => 'required',
            'quantity' => 'required',
            'vi_name' => 'required',
            'vi_description' => 'required',
            'vi_content' => 'required',
            'vi_metakeyword' => 'required',
            'ko_name' => 'required',
            'ko_description' => 'required',
            'ko_metakeyword' => 'required',
            'ko_content' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'code required',
            'price.required' => ' price required',
            'categoryid.required' => 'categoryid required',
            'branchid.required' => 'branchid required',
            'quantity.required' => 'quantity required',
            'vi_name.required' => 'vi_name required',
            'vi_description.required' => 'vi_description required',
            'vi_content.required' => 'vi_content required',
            'vi_metakeyword.required' => 'vi_metakeyword required',
            'ko_name.required' => 'ko_name required',
            'ko_description.required' => 'ko_description required',
            'ko_metakeyword.required' => 'ko_metakeyword required',
            'ko_content.required' => 'ko_content required'
        ];
    }
}
