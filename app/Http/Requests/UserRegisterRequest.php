<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName'         => 'required|string:max:255',
            'lastName'          => 'required|string:max:255',
            'email'             => 'required|email|unique:users',
            'aadhar_number'     => 'required|unique:users|min:12|max:12',
            'dob'               => 'required',
            'password'          => 'required|min:8|confirmed',
            'gender'            => ['required',Rule::in(["male", "female","other"])]
        ];
    }
}
