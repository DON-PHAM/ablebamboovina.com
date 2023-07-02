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
            'name.required'=>'Tên nhà cung cấp không được để trống',
            'phone.required' => 'Số điện thoại nhà cung cấp không được để trống',
            'address.required' =>'Địa chỉ nhà cung cấp không được để trống',
            'email.required' => 'Email nhà cung cấp không được để trống',
            'email.email' => 'Email không đúng định dạng!'
        ];
    }
}
