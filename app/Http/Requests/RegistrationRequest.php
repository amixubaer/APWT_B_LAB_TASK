<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'fullname' => 'required|min:3|max:30',
            'username'=> 'required|min:5',
            'email' => 'email:rfc,dns|required|min:10|max:50|',
            'password'=> 'required|min:8|max:20',
            'conpass'=> 'required|min:8|max:20',
            'phone' => 'required|min:11|numeric',
            'cname' => 'required|min:3|max:20',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
        ];
    }
}
