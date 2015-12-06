<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request
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
            
            "student_id"        => "required | max:50",
            "name"              => "required | max:50",
            "father_name"       => "required | max:50",
            "mother_name"       => "required | max:50",
            "gender"            => "required | max:60",
            "religion"          => "required | max:50",
            "date_of_birth"     => "required | date",
            "present_address"   => "required | max:200",
            "permanent_address" => "required | max:200", 
            "phone"             => "required | numeric",
            "email"             => "email",
            "user_id"           => "required | numeric",
            "version_id"        => "required | numeric",
        ];
    }
}
