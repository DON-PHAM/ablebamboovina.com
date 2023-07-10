<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'ko_name' => 'required',
            'vi_name' => 'required',
            'ko_contents' => 'required',
            'vi_contents' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'ko_name.required' => trans('about.name-required'),
            'vi_name.required' => trans('about.name-required'),
            'ko_contents.required' => trans('about.contents-required'),
            'vi_contents.required' => trans('about.contents-required')
        ];
    }
}
