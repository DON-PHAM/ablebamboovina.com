<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image'=>'required',
            'name'=>'required',
            'url'=>'required',

        ];
    }
    public function messages()
    {
        return
        [
          'image.required'=> 'Hình ảnh không được để trống',
          'name.required' => 'Tên không được để trống !',
          'url.required' => 'Url không được để trống'
        ];
    }
}
