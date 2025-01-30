<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerfumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'img' => 'nullable|max:2048',
            'brand_id' => 'required|exists:brands,id',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del profumo è obbligatorio.',
            'name.string' => 'Il nome del profumo deve essere una stringa.',
            'name.max' => 'Il nome del profumo non può superare i 255 caratteri.',
            
            'description.string' => 'La descrizione deve essere una stringa.',

            
            
            'img.max' => 'L\'immagine non può superare i 2MB.',

            'brand_id.required' => 'È necessario selezionare un brand.',
            'brand_id.exists' => 'Il brand selezionato non esiste nel database.',
        ];
    }
}
