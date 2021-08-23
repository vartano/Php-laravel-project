<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'fullname'=>'required',
            'position'=>'required',
            'email'=>'email|required',
            // 'phone'=>'required',
            'address'=>'required',
            'image'=>'required'
        ];
    }

    public function messages(){
        return[
            'fullname.required'=>'all fields required',
            'position.required'=> 'all fields requied',
            'email.email'=>'all field required',
            'phone.required'=>'all fields required',
            'address'=>'all fields required',
            'image'=>'all fields required'       
        ];
    }
}
