<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title'=> ['required','min:2' ,'max:100' ,'string'],
            'category'=> ['required'],
            'is_publish'=> ['required'],
            'file' => ['mimes:png,jpg,jpeg,gif', 'dimensions:min_width=50,min_height=50,max_width=2000,max_height=2000'],
            'description'=> ['required','min:10' ,'max:5000'],
        ];

    }
}
