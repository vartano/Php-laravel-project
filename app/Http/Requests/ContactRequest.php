<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fname'=>'required|min:4|alpha',
            'lname'=>'required|min:4|alpha',
            'email'=>'email|required',
            //'phone'=>'required',
            'message'=>'required'
        ];
    }

    public function messages(){
        return[
        // 'fname.regex'=>'must not contain spaces',

        // 'lname.required'=>'all fields are required',
        // 'email.email'=>'all fields are required',
        // 'phone.required'=>'all fields are required',
        // 'message.regex'=>'Must not contain invalid'
    ];
    }
}   

