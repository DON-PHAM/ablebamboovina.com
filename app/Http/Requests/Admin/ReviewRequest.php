<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'name' => 'required',
            'content' => 'required',
            'rate' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('review.message-name'),
            'content.required' => trans('review.message-content'),
            'rate.required' => trans('review.message-rate')
        ];
    }
}
