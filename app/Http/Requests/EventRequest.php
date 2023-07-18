<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'vi_description' => 'required',
            'vi_content' => 'required',
            'ko_name' => 'required',
            'ko_description' => 'required',
            'ko_content' => 'required',
            'code' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'vi_name.required' => trans('event.message-vi_name'),
            'vi_description.required' => trans('event.message-vi_description'),
            'vi_content.required' => trans('event.message-vi_content'),
            'ko_name.required' => trans('event.message-ko_name'),
            'ko_description.required' => trans('event.message-ko_description'),
            'ko_content.required' => trans('event.message-vko_content'),
            'code.required' => trans('event.message-code'),
            'price.required' => trans('event.message-price'),
            'quantity.required' => trans('event.message-quantity')
        ];
    }
}
