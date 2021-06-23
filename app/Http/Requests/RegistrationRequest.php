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
            'full-name' => 'required|min:3|max:30|alphabetic',
            'username'=> 'required|min:5',
            'email' => 'email:rfc,dns|required|min:10|max:50|',
            'password'=> 'required|min:8|max:20|alpha-numeric',
            'con-pass'=> 'required|min:8|max:20|alpha-numeric',
            'pnumber' => 'required|min:11|max:15|numeric',
            'cname' => 'required|min:3|max:20',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
        ];
    }
}
