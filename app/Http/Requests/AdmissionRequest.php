<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdmissionRequest extends Request
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

            "name"              => "required | max:50",
            "father_name"       => "required | max:50",
            "mother_name"       => "required | max:50",
            "gender"            => "required",
            "date_of_birth"     => "required | date",
            "phone"             => "required | numeric",
            "email"             => "required | email"
           
        ];
    }
}
