<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackRequest extends FormRequest
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
            'phonenumber' =>'required',
            'email' => 'required|email',
            'fullname' => 'required',
            'contents' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'phonenumber.required' =>'required',
            'email.required' => 'required|email',
            'fullname.required' => 'required',
            'contents.required' => 'required',
            'status.required' => 'required'
        ];
    }
}
