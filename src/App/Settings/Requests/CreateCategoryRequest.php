<?php

namespace App\Settings\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'is_active' => 'required|boolean',
        ];
    }
}
