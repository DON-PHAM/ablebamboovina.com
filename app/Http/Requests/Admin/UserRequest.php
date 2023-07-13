<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required | email',
            'password' => 'required | min: 6',
            'username' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('user.message-name'),
            'username.required' =>trans('user.message-username'),
            'email.required' => trans('user.message-email'),
            'email.email' => trans('user.message-email-confirm'),
            'password.required' => trans('user.message-pass'),
            'password.min' => trans('user.message-pass-min'),
            // Thêm các message validate khác vào đây
        ];
    }
}
