<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'vi_content' => 'required',
            'ko_content' => 'required'
        ];
    }
    public function messages()
    {
        return [
          'vi_name.required' => trans('post.required-vi-name'),
          'ko_name.required' => trans('post.required-ko-name'),
          'vi_content.required' => trans('post.required-vi-content'),
          'ko_content.required' => trans('post.required-ko-content'),
        ];
    }
}
