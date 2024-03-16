<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui long nhap ten',
            'email.required' => 'Vui Long Nhap Email',
            'password.required' => 'Vui Long Nhap PassWord', 
            'password.confirmed'=> 'Mat Khau Ko Trung Khop'
            
        ];
    }
}
