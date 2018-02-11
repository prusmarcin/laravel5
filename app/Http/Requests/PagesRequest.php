<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//w celu aby przejsc do kontrolera przy false zwroci forbidden
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => 'Pole tytuł jest wymagane',
            'content.required' => 'Pole treść jest wymagane'
        ];
    }
}
