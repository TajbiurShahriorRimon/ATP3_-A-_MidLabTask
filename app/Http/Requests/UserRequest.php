<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'email'=> 'required|max:50|email',
            'password'=> 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'email required...',
            'password.required'=> 'password required ...',
            'password.min:8' => 'password must be 8 characters long',
            'email.max:50' => 'email must be max 50 characters'
        ];
    }
}
