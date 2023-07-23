<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ShipRequest extends FormRequest
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
            'price' => 'required',
            'price_free' => 'required',
            'code' => 'required'
        ];
    }
    public function messages()
    {
        return [
          'vi_name.required' => trans('ship.message-name-vi'),
          'ko_name.required' => trans('ship.message-name-ko'),
          'price.required' => trans('ship.message-price'),
          'price_free.required' => trans('ship.message-price-free'),
          'code.required' => trans('ship.message-code')
        ];
    }
}
