<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ResultRequest extends Request
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
              
            "mark"         => "required| max:40",
            "gp"           => "required| max:40",
            "exams_id"     => "required| numeric",
            "students_id"  => "required| numeric",
        ];
    }
}
