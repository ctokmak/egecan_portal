<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $method = $this->method();
        if ($method == "PUT") {
            return [
            "register_date" => "date",
            "tc"            => "string",
            "tc"            => "unique:students, id,".$this->id,
            "tc"            => "max:11 | nullable",
            "name"          => "required | string",
            "pob"           => "string | nullable",
            "dob"           => "date | nullable",
            "height"        => "string | nullable",
            "weigth"        => "string | nullable",
            "stays_at"      => "string | nullable",
            "blood"         => "string | nullable",
            "diagnoses"     => "array | nullable",
            "gender"        => "string | required",
            "siblings"        => "string | nullable",
            "status"        => "required|string",
            "lessons"       => "string | nullable",
            "address"       => "string | nullable",
        ];
        } else {
            return [
            "register_date" => "date",
            "quit_date"     => ["sometimes","date"],
            "tc"            => "nullable|string|unique:students|max:11",
            "name"          =>"required|string",
            "pob"           => "string | nullable",
            "dob"           => "date | nullable",
            "height"        => "string | nullable",
            "weigth"        => "string | nullable",
            "stays_at"      => "string | nullable",
            "blood"         => "string | nullable",
            "diagnoses"     => "string | nullable",
            "gender"        => "string | required",
            "siblings"      => "string | nullable",
            "status"        => "required|string",
            "lessons"       => "string | nullable",
            "address"       => "string | nullable",
        ];
        }
        
    }
}
