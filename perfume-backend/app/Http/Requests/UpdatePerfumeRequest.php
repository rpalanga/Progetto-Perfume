<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerfumeRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand_id' => 'sometimes|exists:brands,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Il nome del profumo deve essere una stringa.',
            'name.max' => 'Il nome del profumo non può superare i 255 caratteri.',
            
            'description.string' => 'La descrizione deve essere una stringa.',

            'img.image' => 'Il file deve essere un\'immagine.',
            'img.mimes' => 'L\'immagine deve essere in formato jpeg, png, jpg, gif o svg.',
            'img.max' => 'L\'immagine non può superare i 2MB.',

            'brand_id.exists' => 'Il brand selezionato non esiste nel database.',
        ];
    }
}
