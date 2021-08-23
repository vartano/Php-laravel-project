<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
           'itemcode'=>'required',
           'itemname'=>'required',
           'quantity'=>'required',
           'type'=>'required',
           'weight'=>'required',
           'price'=>'required',
           'img'=>'required'
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
