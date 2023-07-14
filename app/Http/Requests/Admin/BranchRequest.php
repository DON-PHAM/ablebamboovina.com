<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required',
            'address' => 'required',
            'email' => 'required|email'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> trans('branch.message-bran-name'),
            'phone.required' => trans('branch.message-bran-phone'),
            'address.required' =>trans('branch.message-bran-address'),
            'email.required' => trans('branch.message-bran-email'),
            'email.email' => 'Email không đúng định dạng!'
        ];
    }
}
