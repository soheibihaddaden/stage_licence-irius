<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'nom' => ['required', 'min:2', 'max:255', 'string'],
            'email' => ['required', 'email', 'min:2', 'max:255'],
            'sujet' => ['required', 'min:2', 'max:255'],
            'user_message' => ['required', 'min:2', 'max:5000'] 
        ];
    }
  
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'nom.min' => 'Le nom doit contenir au moins :min caractères.',
            'nom.max' => 'Le nom ne peut pas contenir plus de :max caractères.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',

            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'Le champ email doit contenir une adresse email valide.',
            'email.min' => 'L\'email doit contenir au moins :min caractères.',
            'email.max' => 'L\'email ne peut pas contenir plus de :max caractères.',

            'sujet.required' => 'Le champ sujet est obligatoire.',
            'sujet.min' => 'Le sujet doit contenir au moins :min caractères.',
            'sujet.max' => 'Le sujet ne peut pas contenir plus de :max caractères.',

            'user_message.required' => 'Le message est obligatoire.',
            'user_message.min' => 'Le message doit contenir au moins :min caractères.',
            'user_message.max' => 'Le message ne peut pas contenir plus de :max caractères.',
        ];
    }

    


}
