<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
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
            'user_name' => ['required', 'min:3', 'max:30', 'unique:company'],
            'Fname' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'email', 'unique:company', 'min:3', 'max:30', 'email:rfc'],
            'company_name' => ['required', 'min:3', 'max:30'],
            'number' => ['required', 'min:11', 'max:15'],
            'city' => ['required', 'min:3', 'max:30'],
            'country' => ['required', 'min:3', 'max:30'],
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'con_password' => ['required', 'same:password']
        ];
    }


    public function messages()
    {
        return [
            'con_password.same' => 'Confirm Password Must be match',
            'con_password.required' => 'Confirm Password required',
            'email.email' => 'Invalid email address',
            'country.min' => 'Invalid email country',
            'city.min' => 'Invalid email city'
        ];
    }
}
