<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'surnames' => 'required',
            'school_id' => 'required',
            'date_of_birth' => 'required',
            'city' => 'required',
        ];
    }
}
