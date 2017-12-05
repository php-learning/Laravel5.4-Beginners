<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArticleRequest extends FormRequest
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
            "titre"=>"required|max:25",
            "description"=>"required|max:255",
        ];
    }

    public function messages()
    {
        return [
            "required" => "le champ :attribute est obligatoire",
            "max" => "Le champ :attribute ne doit pas depasser :max"
        ];
    }
}
