<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Academic_infoRequest extends Request
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
               
               "exam"             => "required | max:45",
               "board"            => "required | max:45",
               "year"             => "required | max:45",
               "roll"             => "required | max:45",
               "gpa"              => "required | max:45",
               "students_id"      => "required | numeric",
        ];
    }
}
