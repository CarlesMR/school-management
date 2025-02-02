<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
            'web_url' => 'nullable',
            'logo' => 'image|dimensions:min_width=200,min_height=200|max:2048', // Tamaño permite máximo 200x200 y 2 MB
        ];
    }
}
